<?php

/**
 * Subclass for performing query and update operations on the 'trip_acquirements_img' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TripAcquirementsImgPeer extends BaseTripAcquirementsImgPeer
{
	public static function get_img_thumb($id_acquirement){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::TRIP_ACQUIREMENTS_ID,$id_acquirement);
		$rs = self::doSelectOne($c);
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}

	public static function get_img_by_acquirements_id($id_acquirement){
		$c = new Criteria();
		$c->add(self::TRIP_ACQUIREMENTS_ID,$id_acquirement);
		return self::doSelect($c);
	}

	public static function count_img_acquirements($id_acquirement){
		$c = new Criteria();
		$c->add(self::TRIP_ACQUIREMENTS_ID,$id_acquirement);
		return self::doCount($c);
	}
}
