<?php

/**
 * Subclass for performing query and update operations on the 'type_upload' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypeUploadPeer extends BaseTypeUploadPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
