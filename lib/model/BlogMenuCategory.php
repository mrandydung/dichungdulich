<?php

/**
 * Subclass for representing a row from the 'blog_menu_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BlogMenuCategory extends BaseBlogMenuCategory
{
	public function __toString(){
		return $this->getName();
	}

 	public function toSlug(){
        return myUtil::strToSlug($this->getShowName());
    }

    public function getShowName(){
    	return !myUtil::isEn() ? $this->getName() : $this->getNameEn();
    }

	public function getDetailUrlCategory(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@blog_post_category?name='.$this->toSlug().'&blog_menu_category_id='.$this->getId()) :url_for('@blog_post_category_en?name='.$this->toSlug().'&blog_menu_category_id='.$this->getId());
	}
}
