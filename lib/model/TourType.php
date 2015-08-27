<?php

/**
 * Subclass for representing a row from the 'tour_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourType extends BaseTourType
{
    public function __toString(){
        return $this->getName();
    }
}
