<?php

/**
 * Subclass for representing a row from the 'setting_site' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SettingSite extends BaseSettingSite
{
	public function getShowSlogenSlide(){
		 return !myUtil::isEn() ? $this->getSlogenSlide() : $this->getSlogenSlideEn();
	}

	public function getShowTitleSite(){
		 return !myUtil::isEn() ? $this->getTitleSite() : $this->getTitleSiteEn();
	}

	public function getShowDescriptionSite(){
		 return !myUtil::isEn() ? $this->getDescriptionSite() : $this->getDescriptionSiteEn();
	}
}
