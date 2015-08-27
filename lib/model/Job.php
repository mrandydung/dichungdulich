<?php

/**
 * Subclass for representing a row from the 'job' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Job extends BaseJob
{
	public function __toString(){
		return $this->getName();
	}
}
