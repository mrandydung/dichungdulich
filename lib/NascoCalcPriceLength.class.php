<?php
	
	class NascoCalcPriceLength extends CalcPriceLength {
	 
		public function calcRideLength() {
			
      if($this->chunkIsFixed()) {
        $B = $this->village->getFullname(); 
			}
      $partner_vehicle = $this->getPartnerVehicle();
      //echo $partner_vehicle->getId();
      if(!$partner_vehicle) {
        return array(	'code' => 1,
											'length' => 0, 
											'cost' => 0, 
											'msg' => $this->vehicle->getName().' '.LangPeer::getText('chưa phục vụ trên chặng này'));
      }
      
			if($this->isAirportCity()) {
				$B = $partner_vehicle->getAirport()->getLatLng(); 
 
        $D = $this->village->getFullname(); 
         
			}
			elseif($this->isAirportProvince()){
				 
				$B = $partner_vehicle->getAirport()->getLatLng(); 
        $D = $this->dropPos; 
			}
      elseif($this->isCityProvince() || $this->isInCity()) {
       
        $B = $this->pickPos; 
        $D = $this->dropPos; 
      }
			// city -> airport
			else { 
			 
				$D = $partner_vehicle->getAirport()->getLatLng();  
			} 
       
			$ret = self::calcRange($B, $D, true);
			$BD = $ret['length'];
			
			if(!$BD){
			
				return array(	'code' => 1,
											'length' => 0, 
											'cost' => 0, 
											'msg' => LangPeer::getText('Hệ thống hiện tại không thể tính được khoảng cách từ địa điểm của bạn nên không thể tính ra giá. Vui lòng liên hệ số Hotline 0935133166 để được hỗ trợ trực tiếp'));
			}
			
      if($this->chunkIsFixed()) {
        //save location for this village
        if(!$this->village->getLocation()){
          $this->village->setLocation($ret['g_start_location']);
          $this->village->save();
        }
			}
			return array(	'code' => 0, 
										'range' => $BD);
		}
		
		public function isTwoWay(){
			return $this->dimensionId == CalcPriceLength::DIMENSION_TWO_WAY;
		}
		
		public function execute() {
			
			$this->isNbHn = $this->isAirportCity();
			$this->isHnNb = $this->isCityAirport();
			
			$this->partner_mapping = $this->preparePartnerMapping();
			if(!$this->partner_mapping){
				return array('code' => 1, 'msg' => LangPeer::getText('Chúng tôi chưa phục vụ trên chặng này, bạn vui lòng thông cảm.'));
			}
			
			$twoWay = $this->isTwoWay();
			$this->met = $this->chunk_dimension->getRideLength()*1000; 
      
      $pcost = $this->partner_mapping->getCostAfterProcess($this->chair);
      
      if(is_array($pcost)) {
        $this->cost = $pcost['merge'];
        $this->privateCost = $pcost['private_cost'];
        $this->notMergeCost = $pcost['unmerge'];
      }
      else {
        $this->cost = $pcost;
      } 
      $privateCost  = 0;
      if (!$this->cost) {
        // lay gia trong bang ride_cost
        $this->ride_cost = $this->getRideCost($this->partner_mapping);
        
        // 2 chieu
        if($twoWay) { 
          
          $partner_mappingDepart = $this->getPartnerMapping(1);
          $ride_costDepart = $this->getRideCost($partner_mappingDepart);
           
        }
        $rideLength = $this->calcRideLength();
        
        if($rideLength['code'] === 1){
          return $rideLength;
        }
         
        // gia di rieng theo km
        $rangeCost = $this->getLeftCost($rideLength['range']); 
         
        // Percentage  unmerged
        $departPercentUnmerged = call_user_func(array($this->partner_mapping, 'getDepartUnmerged'.$this->chair.'DiscountPercent'));
        $returnPercentUnmerged = call_user_func(array($this->partner_mapping, 'getReturnUnmerged'.$this->chair.'DiscountPercent'));

        // Percentage  merged
        $departPercentMerged = call_user_func(array($this->partner_mapping, 'getDepartMerged'.$this->chair.'DiscountPercent'));
        $returnPercentMerged = call_user_func(array($this->partner_mapping, 'getReturnMerged'.$this->chair.'DiscountPercent'));
        
        // partner vehicle 
        $partner_vehicle = $this->partner_mapping->getPartnerVehicle();
        
        //partner vehicle
        $partnerDiscountPercent = $partner_vehicle->getReturnPrivateDiscountPercent();
        
        $longDk = $partner_vehicle->getLongDistanceKm();
        if ($longDk && 
            $longDk*1000 < $rideLength && 
            $partner_vehicle->getLongDistanceReturnPrivateDiscountPercent()) {
            $partnerDiscountPercent = $partner_vehicle->getLongDistanceReturnPrivateDiscountPercent();
        }
        
        // di chung
        if($this->isDichung()) {
          

          
          // 2 chieu dichung
          if($twoWay) {
            
            // partner mapping di rieng chieu di va di rieng chieu ve
            $pmEachWayPrivate = $this->partner_mapping->getPrivateEachWayOfThis();
            $pmDepartPrivate = $pmEachWayPrivate['depart'];
            $pmReturnPrivate = isset($pmEachWayPrivate['return'])?$pmEachWayPrivate['return']:null;
            
            // co trong bang gia
            if($this->ride_cost) {
              $this->cost = $this->ride_cost->getCost(); 
              
              // partner mapping cua di rieng
              $pmPrivate = $this->partner_mapping->getPrivateOfThis();

              $rideCostPrivate = $this->getRideCost($pmPrivate);
              
              $privateCost = $rideCostPrivate->getCost();
              
              //tinh gia neu ko ghep duoc 
              
              //gia di rieng chieu di
              $departRideCost = $this->getRideCost($pmDepartPrivate);
              
              //gia di rieng chieu ve
              $returnRideCost = $this->getRideCost($pmReturnPrivate); 
              
              // gia ko ghep duoc
              $this->notMergeCost = 
                $departRideCost->getCost()*(100-$departPercentUnmerged)/100 + 
                $returnRideCost->getCost()*(100-$returnPercentUnmerged)/100;
            }
            // tinh theo km
            else { 
               
              $privateCost = $rangeCost + $rangeCost*(100 - $partnerDiscountPercent)/100;
               
              $this->cost = $privateCost*(100 - $departPercentMerged)/100 + $privateCost*(100 - $returnPercentMerged)/100;
              
              // gia ko ghep duoc
              $this->notMergeCost = $privateCost;
            }
            
          }
          
          else {
             
            // tinh trong bang gia
            if($this->ride_cost) {
              
              $this->cost = $this->ride_cost->getCost();
              $pmPrivate = $this->partner_mapping->getPrivateOfThis();

              $rideCostPrivate = $this->getRideCost($pmPrivate);
              
              $privateCost = $rideCostPrivate->getCost();
              
              $this->notMergeCost = $privateCost*(100-$departPercentUnmerged)/100;
              
            }
            //tinh theo km
            else { 
               
              $privateCost = $this->notMergeCost = $rangeCost*(100-$departPercentUnmerged)/100;
               
              $this->cost = $rangeCost*(100-$departPercentMerged)/100;
            }
             
          }
        }
        // di rieng
        else {
          
          // 2 chieu di rieng
          if($twoWay) {
            //echo $partnerDiscountPercent;
            $this->cost = $privateCost = $this->ride_cost?$this->ride_cost->getCost():($rangeCost + $rangeCost*(100 - $partnerDiscountPercent)/100);
             
          }
          //  1 chieu di rieng
          else {
            $this->cost = $privateCost = $this->ride_cost?$this->ride_cost->getCost():$rangeCost;
          }
        }  
        
        $this->privateCost = $privateCost;
       
        //neu la di rieng
        if($this->rideMethodId != self::RIDE_METHOD_DICHUNG_ID){
          $this->cost *= $this->chair;
          $this->privateCost *= $this->chair;
        }
        $this->met = $rideLength['range']*($this->isTwoWay()?2:1);
      }
			return array('code' => 0);
		}
		
    /*
		function calcPriceUnit($cost, $AD, $rangeDepart, $rangeBack){
						
			
			if(!$this->isCityAirport()){
				
				$cost = $this->getLeftCost($rangeDepart);
			}
			else{
			
				$leftLength = $rangeDepart - $AD;
				
				if($rangeDepart > $AD){
					
					$lc = round($this->getLeftCost($leftLength));
					
					$cost += $lc;
				}
				else{
				
					$cost = $this->getLeftCost($rangeDepart);
				}
			}
			//di 2 chieu giam 50% chieu ve
			if($rangeBack){
			
				$backCost = round($this->getLeftCost($rangeBack)*0.5);
				$cost += $backCost;
			}
			 
			return $cost;
		}
		*/
		/* override */
		public static function checkTime($departDate, $dptObject, $chunk){
		
			$departDateTime = strtotime($departDate.' '.$dptObject->getDepartTime());
			if(!$departDateTime)
				return array(	'msg' 	=> LangPeer::getText('Thời gian đi không hợp lệ').' (<i>'.$chunk->getName().'</i>)', 
											'error' => 1);
			
			//$prvDate = date('Y-m-d', $departDateTime-86400);
			//thoi gian di phai cach thoi gian hien tai it nhat 90 phut
			if($departDateTime - time() < 60*90) {
				return array(	'msg' => 	LangPeer::getText('Thời gian đi không hợp lệ')."<br/>".
																LangPeer::getText('Thời gian đi phải cách thời gian hiện tại ít nhất 90 phút'), 
											'error' => 1);
			}
			$departTime = $dptObject->getDepartTime('H');
			
			$curDate = date('Y-m-d');
			$curDate1 = date('Y-m-d', time()+86400); 
			if($departTime >= '23' || $departTime < '07') {
				
				if(	(	$departDate == $curDate && ( date('H') >= '23' || date('H') < '07') ) ||
						(	$departDate == $curDate1 && $departTime < '07' && date('H') >= '23') 
							) {
					 
					return array('msg' => LangPeer::getText('Thời gian đi không hợp lệ')."<Br/>".
																LangPeer::getText('Bạn đi lúc '.$dptObject->getDepartTime('H:i').' phải đặt trước 23h ngày hôm trước').' (<i>'.$chunk->getName().'</i>)', 
												'error' => 1);
				}
			}
			return array('error' => 0);
		}
		
		/* override */
		/*public function preparePartnerMapping(){
      
      if($this->partner->getId() == 1) { //NASCO 
        foreach($this->getChunksInThisAirport() as $chunk) {
        if($this->isAirportCity()){
          $this->chunkId = $chunk->getId();
        }
        elseif($this->isCityAirport()){
          $this->chunkId = $chunk->getId();
        }
        elseif($this->isAirportProvince()){
          $this->chunkId = $chunk->getId();
        }
        elseif($this->isCityProvince()){
          $this->chunkId = $chunk->getId();
        }
        }
      }
			return parent::preparePartnerMapping();
		}*/
	}