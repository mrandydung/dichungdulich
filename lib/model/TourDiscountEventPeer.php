<?php

/**
 * Subclass for performing query and update operations on the 'tour_discount_event' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDiscountEventPeer extends BaseTourDiscountEventPeer
{
	public static function get_all_discount_day($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doSelect($c);
	}
}
