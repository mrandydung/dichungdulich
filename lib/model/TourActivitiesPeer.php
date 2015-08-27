<?php

/**
 * Subclass for performing query and update operations on the 'tour_activities' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourActivitiesPeer extends BaseTourActivitiesPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
