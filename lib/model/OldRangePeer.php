<?php

/**
 * Subclass for performing query and update operations on the 'old_range' table.
 *
 * 
 *
 * @package lib.model
 */ 
class OldRangePeer extends BaseOldRangePeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
