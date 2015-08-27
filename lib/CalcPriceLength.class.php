<?php
	
	class CalcPriceLength{
		
		public $chunk;
		public $vehicle;
		public $dimension;
		public $ride_method;
		public $village;
		public $partner;
		public $partner_mapping;
		public $ride_cost;
		public $chunk_dimension;
		public $max_slot = 16; //so cho nhieu nhat tren xem
		public $option_chairs;
		public $cost = 0;
		public $other_cost = 0;
		public $met;
		public $chair = 1;
		public $user_lat; // toa do cua khach
		public $user_lng; 
		public $privateCost=0;
		public $notMergeCost = 0;
		public $hasFixedPrice = false;
		public $isNbHn = false;
		public $isHnNb = false;
    
    //trong truong hop di giua 2 diem se co toa do
    public $pickPos = "";
    public $pickAddress = "";
    
    public $dropPos = "";
    public $dropAddress = "";
    public $airportId = 0;
    public $vehicleServiceId = 1;
    public $cityId = 0;
		const 	DEPART_TIME_10H = 41;
		const 	DIMENSION_TWO_WAY = 2;
		const   PARTNER_NASCO_ID = 1;
		const   RIDE_METHOD_DICHUNG_ID = 2;
		const   RIDE_METHOD_PRIVATE_ID = 1;
		
		const   VEHICLE_TAXI4_ID = 1;
		const   VEHICLE_TAXI7_ID = 2;
		const   VEHICLE_MINIBUS_ID = 3;
		
		const   CITY_HANOI_ID = 24;
		
		public function __construct($chunkId, $vehicleId, $dimensionId, $rideMethodId, $villageId, $chair, $pickPos ="", $pickAddress ="", $dropPos ="", $dropAddress ="", $vehicleServiceId = 1, $cityId){
			
			$this->chunkId = $chunkId;
			$this->vehicleId = $vehicleId;
			$this->dimensionId = $dimensionId;
			$this->rideMethodId = $rideMethodId;
			$this->villageId = $villageId;
			$this->chair = intval($chair);
      $this->vehicleServiceId = $vehicleServiceId;
      $this->cityId = $cityId;
      // partner
			$this->partner = sfContext::getInstance()->getUser()->getPartner();
      if($this->partner->getIsGlobal()) {
        $c = new Criteria;
        $c->add(PartnerVehiclePeer::VEHICLE_ID, $this->vehicleId);
        $c->add(PartnerVehiclePeer::RIDE_CITY_ID, $this->cityId); 
        $c->addJoin(PartnerVehiclePeer::PARTNER_ID, PartnerPeer::ID);
        $this->partner = PartnerPeer::doSelectOne($c);
         
      }
      
			$this->pickPos = $pickPos;
      $this->pickAddress = $pickAddress;
      
      $this->dropPos = $dropPos;
      $this->dropAddress = $dropAddress;
      
			if($this->rideMethodId == self::RIDE_METHOD_DICHUNG_ID){
				if(!in_array($this->chair, array(1, 2))){
					
					$this->chair = 1;
				}
			}
			else{
			
				if(!in_array($this->chair, range(1, $this->max_slot))){
					
					$this->chair = 1;
				}
			}
		}
		
    
    public function isInCity() {
      return $this->chunk->isInCity();
    }
    //san bay -> thanh pho
		public function isAirportCity() {
			return 
        $this->chunk->isAirportCity() || 
        ($this->chunk->isAirportProvince()&&$this->isInCity()); 
		}
    
    //thanh pho -> san bay
		public function isCityAirport(){
			return $this->chunk->isCityAirport();
		}
    
    // san bay -> tinh
		public function isAirportProvince(){
      return  $this->chunk->isAirportProvince(); 
		}
		// thanh pho -> tinh
		public function isCityProvince(){
		
			return $this->chunk->isCityProvince();
		}
		
    public function chunkIsFixed() {
      return ($this->chunk->isFixedFrom() || $this->chunk->isFixedTo()) && !$this->chunk->isAirportProvince();
    }
		 
		public function getPartnerMapping($dimensionId, $chunkId = 0, $rideMethod = 0) {
      
      if(!$dimensionId) {
        $dimensionId = $this->dimensionId;
      }
			if(!$chunkId) {
				$chunkId = $this->chunkId;
			}
			
			if(!$rideMethod) {
				$rideMethod = $this->rideMethodId;
			}
			 
			$pm = $this->partner->getPartnerMapping(	$chunkId, 
																								$this->vehicleId, 
																								$dimensionId, 
																								$rideMethod,
                                                $this->cityId);
      
      return $pm;
		}
		
		public function getRideCost($partner_mapping) {
			
      if(!$this->chunkIsFixed()) {
        return null;
      }
			$pmId = $partner_mapping->getRideMethodId();
			$pmIdId = $pmId!=$this->rideMethodId?$pmId:$this->rideMethodId;
			$c = new Criteria;
			$c->add(RideCostPeer::RIDE_VILLAGE_ID, $this->village->getId());
			$c->add(RideCostPeer::PARTNER_MAPPING_ID, $partner_mapping->getId());
			$c->add(RideCostPeer::CHAIR, $pmIdId == self::RIDE_METHOD_DICHUNG_ID?$this->chair:1);
			return RideCostPeer::doSelectOne($c);
		}
		
    public $chunk_dimension_vehicle = null;
    public function getChunkDimensionVehicle() {
      if($this->chunk_dimension_vehicle === null) {
        
        $c = new Criteria;
        $c->add(ChunkDimensionVehiclePeer::VEHICLE_ID, $this->vehicle->getId());
        $c->add(ChunkDimensionVehiclePeer::CHUNK_DIMENSION_ID, $this->chunk_dimension->getId());
        $c->addJoin(ChunkDimensionVehiclePeer::PARTNER_VEHICLE_ID, PartnerVehiclePeer::ID);
        $c->add(PartnerVehiclePeer::VEHICLE_SERVICE_ID, $this->vehicleServiceId);
        $c->add(PartnerVehiclePeer::RIDE_CITY_ID, $this->cityId);
        if($this->chunk->isRequireAirport()) {
           
           $c->add(PartnerVehiclePeer::AIRPORT_ID, 0, Criteria::GREATER_THAN); 
        }
        else {
           
          PartnerVehiclePeer::addSelectNotRequireAirport($c);
        }
       
        $this->chunk_dimension_vehicle = ChunkDimensionVehiclePeer::doSelectOne($c);
      }
      return $this->chunk_dimension_vehicle;
    }
    
    //tim tat ca cac chunk co cung san bay cua doi tac hien tai
    public $chunks_airport = null;
    public function getChunksInThisAirport() {
      if($this->chunks_airport === null) {
        $abc = $this->partner->getAirportByChunk();
        $cdv = $this->getChunkDimensionVehicle();
        $airport_id = $cdv->getPartnerVehicle()->getAirportId();
        
        $cids = array();
        foreach($abc as $chunkId => $airportId)
        { 
          if($airport_id == $airportId) {
            $cids [] = $chunkId;
          }
        }
        $this->chunks_airport = ChunkPeer::retrieveByPks($cids);
      }
      return $this->chunks_airport;
    }
     
    public function getPartnerVehicle() { 
      $pv =  $this->getChunkDimensionVehicle();
      return $pv?$pv->getPartnerVehicle():null; 
    }
    
    public $prepare = false;
		
    public function prepare () {
    
			$this->chunk = ChunkPeer::retrieveByPk($this->chunkId);
			if(!$this->chunk){
				return array('code' => 1, 'msg' => 'CHUNK NOT FOUND');
			}
			
			// vehicle
			$this->vehicle = VehiclePeer::retrieveByPk($this->vehicleId);
			
			if(!$this->vehicle){
				return array('code' => 1, 'msg' =>  'VEHICLE NOT FOUND');
			}
			
			// ride method
			$this->ride_method = RideMethodPeer::retrieveByPk($this->rideMethodId);
			if(!$this->ride_method){
				return array('code' => 1, 'msg' =>  'RIDE METHOD NOT FOUND');
			}
      
			if($this->chunkIsFixed()) {
        // village
        $this->village = RideVillagePeer::retrieveByPk($this->villageId);
        
        if(!$this->village){
          return array('code' => 1, 'msg' =>  'VILLAGE NOT FOUND');
        }
      }
			//kiem tra xem chunk dimension co hay ko
			$c = new Criteria;
			$c->add(ChunkDimensionPeer::CHUNK_ID, $this->chunkId);
			$c->add(ChunkDimensionPeer::DIMENSION_ID, $this->dimensionId);
			$this->chunk_dimension = ChunkDimensionPeer::doSelectOne($c);
			 
			if(!$this->chunk_dimension)
				return array(	'code' => 1,
											'length' => 0, 
											'cost' => 0, 
											'msg' => 'ChunkDimension not found');
      
      // partner_mapping
			$this->partner_mapping = $this->preparePartnerMapping();
			 
			if(!$this->partner_mapping) {
				return array(
          'code' => 1, 
          'msg' => LangPeer::getText('Chúng tôi chưa phục vụ trên chặng này, bạn vui lòng thông cảm'));
			}
      
			// tim gia taxi theo km
      if($this->chunkIsFixed()) {
        $c = new Criteria;
        $c->add(RideCostPeer::RIDE_VILLAGE_ID, $this->village->getId());
        $c->add(RideCostPeer::PARTNER_MAPPING_ID, $this->partner_mapping->getId());
        
        $c->add(RideCostPeer::CHAIR, $this->rideMethodId == self::RIDE_METHOD_DICHUNG_ID?$this->chair:1);
        $this->ride_cost = RideCostPeer::doSelectOne($c);
			}
      
			// di chung max slot
			if($this->rideMethodId == myUtil::RIDE_METHOD_DICHUNG) { // dichung
				
				//partner vehicle
				
				$pv = $this->getPartnerVehicle();
				
				if($pv && $pv->getDichungMaxChair()) {
					$this->max_slot = $pv->getDichungMaxChair();
				}
			} 
			
			return array('code' => 0);
		}
 
		public function isDichung(){
			return $this->rideMethodId == self::RIDE_METHOD_DICHUNG_ID;
		}
		public function result(){
			
			//chairs select option
			$chairs = array();
			
			foreach(range(1, $this->max_slot) as $chair){
				$chairs [] = '<option '.($this->chair==$chair?'selected="selected"':'').'  value="'.$chair.'">'.$chair.'</option>';
			}
			$this->option_chairs = implode('', $chairs);
			
			// depart times
			$departTimes = $this->partner_mapping->getDepartTimes();
			$dps = array();
			$dps [] = '<option dtime="" value="">'.LangPeer::getText('Thời gian').'</option>';
			foreach($departTimes as $dp) {				
        $dps [] = '<option dtime="'.$dp->getDepartTime().'" value="'.$dp->getId().'">'.$dp->getName().'</option>';
			}
      
			$dps = implode('', $dps);
			
			// $this->cost TRONG TRUONG HOP DI CHUNG la tong tien, di rieng là đơn giá
			
			return array(	'code' => 0,
										'met' => $this->met,
										'length' => round($this->met/1000, 2).'Km', 
										'cost' => round($this->cost, -3),
										'private_cost' => round($this->privateCost, -3),
										'is_hn_nb' => $this->isHnNb,
										'is_nb_hn' => $this->isNbHn,
										'is_dichung' => $this->isDichung(),
										'other_cost' => $this->other_cost,
										'depart_times' => $dps,
										'chairs' => $this->option_chairs,
										'village_id' => $this->villageId,
										'not_merge_cost' => round($this->notMergeCost, -3),
										'has_price'	=> $this->ride_cost?1:0);
		}
		
		public function getUser(){
			return sfContext::getInstance()->getUser();
		}
		
    public static function getLeftCostStatic($vehicleId, $partnerId, $leftLength) {
      
			$c = new Criteria;
      $c->add(PartnerVehiclePeer::PARTNER_ID, $partnerId);
      $c->add(PartnerVehiclePeer::VEHICLE_ID, $vehicleId);
			$pv = PartnerVehiclePeer::doSelectOne($c); 
       
			$leftCost = 0;
			
			if($pv){
			 
				//if($pv->getGiaMocua())
        {
					
					$leftCost = $pv->getGiaMocua();
					//trong khoang gia mo cua
					if($pv->getGiaMoCuaMet() < $leftLength){
					 
						$pvcs = $pv->getPartnerVehicleCosts();
						 
						 $cx = 0;
						foreach($pvcs as $pvc){
							// from ---- to--leftLength
							if($leftLength >= $pvc->getToMet()){
								
								$cc = ($pvc->getToMet()-$pvc->getFromMet())*$pvc->getCost()/$pvc->getMetStep();
								 
								$leftCost += $cc;
							}
							 
							// from ----leftLength---- to
							else if($leftLength >= $pvc->getFromMet() && $leftLength < $pvc->getToMet()){
                 
								$cc = ($leftLength-$pvc->getFromMet())*$pvc->getCost()/$pvc->getMetStep();
								 
								$leftCost += $cc;
								
							}
						}
					}
				}
			}
			 
			return $leftCost;
    }
    
		function getLeftCost($leftLength) {
		  
			return self::getLeftCostStatic($this->vehicleId, $this->partner->getId(), $leftLength);
			 
		}
		 
		public function preparePartnerMapping(){
       
			$pm = $this->partner->getPartnerMapping(	$this->chunkId, 
																								$this->vehicleId, 
																								$this->dimensionId, 
																								$this->rideMethodId,
                                                $this->cityId);
      if(!$pm) {
        //echo $this->chunkId.', '.$this->dimensionId.','.$this->vehicleId.', '.$this->rideMethodId;
      }
      return $pm;
      
		}
		
		public static function checkTime($date, $dptObject, $chunk){
			return array('error' => 0);
		}
		
		public function getUserCityId(){
			
			return $this->village->getRideDistrict()->getRideCity()->getId();
		}
		
		public static function calcRange($from, $to, $returnAll = false){
		
			$c = new Criteria;
			$c->add(GoogleRoutePeer::FROM_ADDRESS, $from);
			$c->add(GoogleRoutePeer::TO_ADDRESS, $to);
			$gr = GoogleRoutePeer::doSelectOne($c);
			if($gr){
				
				$ret = $gr->getRideLength();
				
				if($returnAll){
					
					$ret = array(	'length' => $ret,
												'from_address' => $gr->getFromAddress(),
												'to_address' => $gr->getToAddress(),
												'g_start_address' => $gr->getGStartAddress(),
												'g_start_location' => $gr->getGStartLocation(),
												'g_end_address' => $gr->getGEndAddress(),
												'g_end_address' => $gr->getGEndLocation());
				}
			}
			else{
				$g = myGoogleApi::calcRange($from, $to, true);
				$length = $g['length'];
				if($length){
					
					$gr = new GoogleRoute;
					$gr->setFromAddress($from);
					$gr->setToAddress($to);
					$gr->setRideLength($length);
					$gr->setGStartAddress($g['start_address']);
					$gr->setGStartLocation($g['start_lat'].','.$g['start_lng']);
					$gr->setGEndAddress($g['end_address']);
					$gr->setGEndLocation($g['end_lat'].','.$g['end_lng']);
					$gr->save();
					
					$ret = $length;
					if($returnAll){
						
						$ret = array(	'length' => $ret,
													'from_address' => $gr->getFromAddress(),
													'to_address' => $gr->getToAddress(),
													'g_start_address' => $gr->getGStartAddress(),
													'g_start_location' => $gr->getGStartLocation(),
													'g_end_address' => $gr->getGEndAddress(),
													'g_end_address' => $gr->getGEndLocation());
					}
				}
				else{
					
					$ret = 0;
				}
				
			}
			return $ret;
		}
	}