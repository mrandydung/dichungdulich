<?php
class blogComponents extends sfComponents{
	public function executeBlog_menu($request){
		$this->menu = BlogMenuCategoryPeer::getAll();
		$this->uri = $request->getParameter('action');
	}

	public function executeBlog_recent($request){
		$this->top_blog = BlogPeer::get_top_blog();
	}

}