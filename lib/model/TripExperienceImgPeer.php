<?php

/**
 * Subclass for performing query and update operations on the 'trip_experience_img' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TripExperienceImgPeer extends BaseTripExperienceImgPeer
{
	public static function get_img_by_experience_id($id_experience){
		$c = new Criteria();
		$c->add(self::TRIP_EXPERIENCE_ID,$id_experience);
		return self::doSelect($c);
	}

	public static function count_img_experience($id_experience){
		$c = new Criteria();
		$c->add(self::TRIP_EXPERIENCE_ID,$id_experience);
		return self::doCount($c);
	}

	public static function get_img_thumb($id_experience){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::TRIP_EXPERIENCE_ID,$id_experience);
		$rs = self::doSelectOne($c);
		if($rs){
			return $rs;
		}else{
			return 0;
		}
	}

	public static function get_img_thumb_slide($id_experience){
		$c = new Criteria();
		$c->add(self::TRIP_EXPERIENCE_ID,$id_experience);
		$return = self::doSelect($c);
	}
}
