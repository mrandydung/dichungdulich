<?php

/**
 * Subclass for performing query and update operations on the 'tour_item_img' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourItemImgPeer extends BaseTourItemImgPeer
{
	public static function get_img_slide($tour_detail_id){
		$img_slide = '';
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		$rs = self::doSelect($c);
		if($rs){
			return $rs;
		}else{
			$c = new Criteria();
			$c->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID,$tour_detail_id);
			return TourItemImgScheduleDayPeer::doSelect($c);
		}
	}
}
