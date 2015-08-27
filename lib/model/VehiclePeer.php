<?php

/**
 * Subclass for performing query and update operations on the 'vehicle' table.
 *
 * 
 *
 * @package lib.model
 */ 
class VehiclePeer extends BaseVehiclePeer
{
	public static function get_all(){
		return self::doSelect(new Criteria());
	}

	public static function get_value_by_id($vehicle_id){
		$rs = self::retrieveByPK($vehicle_id);
		return $rs->getValue();
	}
}
