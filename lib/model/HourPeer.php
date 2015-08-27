<?php

/**
 * Subclass for performing query and update operations on the 'hour' table.
 *
 * 
 *
 * @package lib.model
 */ 
class HourPeer extends BaseHourPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
