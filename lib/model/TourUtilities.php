<?php

/**
 * Subclass for representing a row from the 'tour_utilities' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourUtilities extends BaseTourUtilities
{
	public function __toString(){
        return $this->getName();
    }

    public function toSlug() {
        return myUtil::strToSlug(!myUtil::isEn() ? $this->getName() : $this->getNameEn());
    }

    public function getShowName() {
        return !myUtil::isEn() ? $this->getName() : $this->getNameEn();
    }
}
