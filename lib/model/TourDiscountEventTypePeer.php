<?php

/**
 * Subclass for performing query and update operations on the 'tour_discount_event_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDiscountEventTypePeer extends BaseTourDiscountEventTypePeer
{
	public static function get_all(){
		return self::doSelect(new Criteria());
	}


}
