<?php

/**
 * Subclass for representing a row from the 'suggest_cost_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SuggestCostCategory extends BaseSuggestCostCategory
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
