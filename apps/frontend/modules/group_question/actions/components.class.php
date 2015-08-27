<?php
class group_questionComponents extends sfComponents{
	public function executeGroup_detail_top($request){
		$this->top_question = DichungUserPeer::count_top_user_question();
	}

}