<?php

/**
 * Subclass for performing query and update operations on the 'tour_price_kid_item' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourPriceKidItemPeer extends BaseTourPriceKidItemPeer
{
	public static function get_all(){
		return self::doSelect(new Criteria());
	}

	public static function get_all_by_tour_id($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doSelect($c);
	}
}
