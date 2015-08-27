<?php

/**
 * Subclass for representing a row from the 'region' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Region extends BaseRegion
{
	public function __toString(){
		return $this->getName();
	}
}
