<?php

/**
 * Subclass for performing query and update operations on the 'tour_time_category_day' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourTimeCategoryDayPeer extends BaseTourTimeCategoryDayPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
