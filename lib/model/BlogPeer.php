<?php

/**
 * Subclass for performing query and update operations on the 'blog' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BlogPeer extends BaseBlogPeer
{
	public static function getAll($page,$filter_blog){
		$c = new Criteria();
		if($filter_blog == 'new'){
			$c->addDescendingOrderByColumn(self::ID);
		}elseif($filter_blog == 'top'){
			$c->addDescendingOrderByColumn(self::VIEW);
		}else{
			$c->addDescendingOrderByColumn(self::ID);
		}
		$pager = new sfPropelPager('Blog', 6);
      	$pager->setPeerMethod('doSelect');
      	$pager->setPage($page);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
      	sfLoader::loadHelpers('Url');
		return array('blog'=>$rs,'pager'=>$pager);
	}

	public static function get_all_by_category($blog_menu_category_id,$page,$filter_blog){
		$c = new Criteria();
		$c->add(self::BLOG_MENU_CATEGORY_ID,$blog_menu_category_id);
		if($filter_blog == 'new'){
			$c->addDescendingOrderByColumn(self::ID);
		}
		elseif($filter_blog == 'top'){
			$c->addDescendingOrderByColumn(self::VIEW);
		}else{
			$c->addDescendingOrderByColumn(self::ID);
		}
		$pager = new sfPropelPager('Blog', 6);
      	$pager->setPeerMethod('doSelect');
      	$pager->setPage($page);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
      	sfLoader::loadHelpers('Url');
		return array('blog'=>$rs,'pager'=>$pager);
	}

	public static function get_top_blog(){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::SET_HIGHLIGHT,true);
		$c->setLimit(10);
		return self::doSelect($c);
	}

	public static function getPageIndexUrl($page){
		sfLoader::loadHelpers('Url');
		return url_for('@blog_page_index?page='.$page);
	}

	public static function getPagesSearchAddressUrl($page,$address,$filter_blog){
		sfLoader::loadHelpers('Url');
		return url_for('@search_address_page_blog?page='.$page.'&address='.$address.'&filter_blog='.$filter_blog);
	}

	public static function getPagePostCategoryUrl($page,$name,$blog_menu_category_id){
		sfLoader::loadHelpers('Url');
		$name_new = myUtil::strToSlug($name);
		return url_for('@blog_page_post_category?name='.$name_new.'&blog_menu_category_id='.$blog_menu_category_id.'&page='.$page);
	}

	public static function search_address_blog($address,$page,$filter_blog){
		$c = new Criteria();
		if($filter_blog == 'new'){
			$c->addDescendingOrderByColumn(self::ID);
		}
		elseif($filter_blog == 'top'){
			$c->addDescendingOrderByColumn(self::VIEW);
		}else{
			$c->addDescendingOrderByColumn(self::ID);
		}
		$c->addJoin(self::HOME_DIEM_DEN_ITEM_ID,HomeDiemDenItemPeer::ID);
		$c->add(HomeDiemDenItemPeer::KEYWORD,'%'.$address.'%',Criteria::LIKE);
		$pager = new sfPropelPager('Blog', 6);
      	$pager->setPeerMethod('doSelect');
      	$pager->setPage($page);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
      	sfLoader::loadHelpers('Url');
		return array('blog'=>$rs,'pager'=>$pager);
	}
}
