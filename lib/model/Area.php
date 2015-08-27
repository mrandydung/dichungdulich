<?php

/**
 * Subclass for representing a row from the 'area' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Area extends BaseArea
{
	public function __toString(){
		return $this->getName();
	}
}
