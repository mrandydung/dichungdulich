<?php

/**
 * Subclass for performing query and update operations on the 'tour_option_gender' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourOptionGenderPeer extends BaseTourOptionGenderPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
