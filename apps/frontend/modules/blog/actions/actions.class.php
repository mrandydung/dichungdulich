<?php
class blogActions extends sfActions
{
	public function executeIndex($request) {
		$this->filter_blog = $request->getParameter('filter_blog');
		$this->param = 1;
		$blog_tmp = BlogPeer::getAll($this->param,$this->filter_blog);
		$this->blog = $blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$u = $this->getUser();
		$seo = $u->getSeo();
		$seo->setTitle('Gheptour.vn - Blog du lịch');
		$seo->setDescription('Gheptour.vn - Blog du lịch');
	 	$this->url = $request->getUri();
	}

	public function executePage_index($request){
		$this->param = $request->getParameter('page');
		$this->filter_blog = $request->getParameter('filter_blog');
		$blog_tmp = BlogPeer::getAll($this->param,$this->filter_blog);
		$this->blog = $blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$u = $this->getUser();
		$seo = $u->getSeo();
		$seo->setTitle('Gheptour.vn - Blog du lịch - Trang '.$this->param);
		$seo->setDescription('Gheptour.vn - Blog du lịch - Trang '.$this->param);
	 	$this->url = $request->getUri();
	}

	public function executeBlog_post($request){
		$blog_id = $request->getParameter('blog_id');
		$this->blog = BlogPeer::retrieveByPK($blog_id);
		$u = $this->getUser();
		$seo = $u->getSeo();
		$seo->setTitle($this->blog->getTitleSeo());
		$seo->setDescription($this->blog->getDescriptionSeo());
		$seo->setThumb($this->blog->getImgSeo());
		$this->url = $request->getUri();
		$count_view = $u->getAttribute('count_view_blog_session_'.$blog_id);
		if(!$count_view){
			$this->blog->setView($this->blog->getView() + 1);
			$this->blog->save();
			$u->setAttribute('count_view_blog_session_'.$blog_id,'1');
		}
	}

	public function executeBlog_post_category($request){
		$this->param = 1;
		$this->blog_menu_category_id = $request->getParameter('blog_menu_category_id');
		$this->filter_blog = $request->getParameter('filter_blog');
		$blog_menu_category = BlogMenuCategoryPeer::retrieveByPK($this->blog_menu_category_id);
		$this->name = $blog_menu_category->getName();
		$u = $this->getUser();
		$seo = $u->getSeo();
		$seo->setTitle($blog_menu_category->getTitleSeo());
		$seo->setDescription($blog_menu_category->getDescriptionSeo());
		$seo->setThumb($blog_menu_category->getImgSeo());
		$blog_tmp =  BlogPeer::get_all_by_category($this->blog_menu_category_id,$this->param,$this->filter_blog);
		$this->blog = 	$blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$this->url = $request->getUri();
	}

	public function executeBlog_page_post_category($request){
		$this->param = $request->getParameter('page');
		$this->blog_menu_category_id = $request->getParameter('blog_menu_category_id');
		$this->filter_blog = $request->getParameter('filter_blog');
		$blog_menu_category = BlogMenuCategoryPeer::retrieveByPK($this->blog_menu_category_id);
		$this->name = $blog_menu_category->getName();
		$u = $this->getUser();
		$seo = $u->getSeo();
		$seo->setTitle($blog_menu_category->getTitleSeo());
		$seo->setDescription($blog_menu_category->getDescriptionSeo());
		$seo->setThumb($blog_menu_category->getImgSeo());
		$blog_tmp =  BlogPeer::get_all_by_category($this->blog_menu_category_id,$this->param,$this->filter_blog);
		$this->blog = 	$blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$this->url = $request->getUri();
	}

	public function executeSearch_address_blog($request){
		$this->address = $request->getParameter('address');
		$this->filter_blog = $request->getParameter('filter_blog');
		$this->page = $request->getParameter('page');
		if(!$this->page){
			$this->page = 1;
		}
		if(!$this->filter_blog){
			$this->filter_blog = 'new';
		}
		$blog_tmp = BlogPeer::search_address_blog($this->address,$this->page,$this->filter_blog);
		
		$this->blog = $blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$this->url = $request->getUri();
	}

	public function executeSearch_address_page_blog($request){
		$this->address = $request->getParameter('address');
		$this->filter_blog = $request->getParameter('filter_blog');
		$this->page = $request->getParameter('page');
		if(!$this->page){
			$this->page = 1;
		}
		if(!$this->filter_blog){
			$this->filter_blog = 'new';
		}
		$blog_tmp = BlogPeer::search_address_blog($this->address,$this->page,$this->filter_blog);
		$this->blog = $blog_tmp['blog'];
		$this->pager = $blog_tmp['pager'];
		$this->host = 'http://'.$request->getHost();
		$this->url = $request->getUri();
	}
}
