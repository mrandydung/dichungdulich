<?php

/**
 * Subclass for performing query and update operations on the 'job' table.
 *
 * 
 *
 * @package lib.model
 */ 
class JobPeer extends BaseJobPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
