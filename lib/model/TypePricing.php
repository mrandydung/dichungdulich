<?php

/**
 * Subclass for representing a row from the 'type_pricing' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypePricing extends BaseTypePricing
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
