<?php

/**
 * Subclass for performing query and update operations on the 'blog_menu_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BlogMenuCategoryPeer extends BaseBlogMenuCategoryPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
