<?php

/**
 * Subclass for performing query and update operations on the 'gender' table.
 *
 * 
 *
 * @package lib.model
 */ 
class GenderPeer extends BaseGenderPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
