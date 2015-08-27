<?php

/**
 * Subclass for performing query and update operations on the 'tour_percent_discount' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourPercentDiscountPeer extends BaseTourPercentDiscountPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
