<?php

/**
 * Subclass for performing query and update operations on the 'tour_object_fit' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourObjectFitPeer extends BaseTourObjectFitPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
