<?php


class TourUtilitiesPeer extends BaseTourUtilitiesPeer
{
	public static function getAll(){
		return TourUtilitiesPeer::doSelect(new Criteria());
	}
}
