<?php

/**
 * Subclass for representing a row from the 'type_upload' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypeUpload extends BaseTypeUpload
{
	public function __toString(){
		return $this->getName();
	}
}
