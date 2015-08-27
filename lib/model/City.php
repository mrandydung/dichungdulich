<?php

/**
 * Subclass for representing a row from the 'city' table.
 *
 * 
 *
 * @package lib.model
 */ 
class City extends BaseCity
{
	public function __toString(){
		return $this->getName();
	}
}
