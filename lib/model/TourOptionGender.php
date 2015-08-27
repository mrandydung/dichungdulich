<?php

/**
 * Subclass for representing a row from the 'tour_option_gender' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourOptionGender extends BaseTourOptionGender
{
	public function __toString(){
        return myUtil::strToSlug(!myUtil::isEn() ? $this->getName() : $this->getNameEn());
    }

    public function toSlug() {
        return myUtil::strToSlug(!myUtil::isEn() ? $this->getName() : $this->getNameEn());
    }

    public function getShowName() {
        return !myUtil::isEn() ? $this->getName() : $this->getNameEn();
    }
}
