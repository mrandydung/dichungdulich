<?php

/**
 * Subclass for performing query and update operations on the 'tour_price_service_item' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourPriceServiceItemPeer extends BaseTourPriceServiceItemPeer
{
	public static function get_all_by_tour_id($tour_detail_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_detail_id);
		return self::doSelect($c);
	}
}
