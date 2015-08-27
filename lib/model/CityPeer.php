<?php

/**
 * Subclass for performing query and update operations on the 'city' table.
 *
 * 
 *
 * @package lib.model
 */ 
class CityPeer extends BaseCityPeer
{
	public static function get_city_region($address){
		$c = new Criteria();
		$c->add(CityPeer::NAME,'%'.$address.'%',Criteria::LIKE);
		$rs = CityPeer::doSelectOne($c);
		if($rs){
			return array('city_id'=>$rs->getId(),'region_id'=>$rs->getRegionId());
		}else{
			return 0;
		}
	}
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
