<?php

/**
 * Subclass for performing query and update operations on the 'tour_item_img_schedule_day' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourItemImgScheduleDayPeer extends BaseTourItemImgScheduleDayPeer
{
	public static function get_all_by_day($tour_detail_id,$day){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		$c->add(self::DAY,$day);
		return self::doSelect($c);
	}

	public static function count_img_schedule_day($tour_detail_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		return self::doCount($c);
	}
}
