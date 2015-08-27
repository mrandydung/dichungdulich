<?php

/**
 * Subclass for performing query and update operations on the 'tour_sorting' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourSortingPeer extends BaseTourSortingPeer
{
		public static function getAll(){
		return TourSortingPeer::doSelect(new Criteria());
	}
}
