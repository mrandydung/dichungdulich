<?php

/**
 * Subclass for representing a row from the 'type_pricing_service' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypePricingService extends BaseTypePricingService
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
