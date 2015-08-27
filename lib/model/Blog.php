<?php

/**
 * Subclass for representing a row from the 'blog' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Blog extends BaseBlog
{
 	public function toSlug(){
        return myUtil::strToSlug($this->getTitle());
    }

	public function getDetailUrl(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@blog_post?name='.$this->toSlug().'&blog_id='.$this->getId()) : url_for('@blog_post_en?name='.$this->toSlug().'&blog_id='.$this->getId());
	}

	// public function getPageIndexUrl($page){
	// 	sfLoader::loadHelpers('Url');
 //        return url_for('@blog_page_index?page='.$page);
	// }

}
