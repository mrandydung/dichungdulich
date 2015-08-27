<?php

/**
 * Subclass for representing a row from the 'type_language' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypeLanguage extends BaseTypeLanguage
{
	public function __toString(){
		return $this->getName();
	}
}
