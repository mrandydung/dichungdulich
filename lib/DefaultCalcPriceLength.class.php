<?php
	
	class DefaultCalcPriceLength extends CalcPriceLength{
		
		public function execute(){
			
			//cac truong hop khac chi tinh di tu ben xe
			if($this->ride_cost && $cost = $this->ride_cost->getCost()){
				
				$this->cost = $cost;
				 
				$chunkObj = $this->chunk;
				$D = $chunkObj->getDepartGooglePos();
				$D = $D?$D:$chunkObj->getRideVillageRelatedByDepartVillageId()->getFullname();
				$BD = self::calcRange($B, $D);
				
				$this->met = $BD;
				return array('code' => 0);
			}
			else{
				
				return array('code' => 1, 'msg' => 'Hiện tại hệ thống chỉ cho phép đi một chiều');
			}
		}
	}