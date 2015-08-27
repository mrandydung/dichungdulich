<?php

/**
 * Subclass for representing a row from the 'tour_discount_event_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDiscountEventType extends BaseTourDiscountEventType
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
