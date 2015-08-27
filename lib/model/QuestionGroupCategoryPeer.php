<?php

/**
 * Subclass for performing query and update operations on the 'question_group_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class QuestionGroupCategoryPeer extends BaseQuestionGroupCategoryPeer
{
	public static function get_group_category(){
		return self::doSelect(new Criteria());
	}

	public static function getAll(){
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::PRIORITY);
		$rs = self::doSelect($c);
		$arr = array();
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$images_thumb = 'http://gheptour.vn/thumbnail/index.php?src='.$value->getImagesThumb().'&w=310&h=207&q=100';
			$name = $value->getShowName();
			$url_question_group_category = $value->url_question_group_category();
			$qr = '"id":'.'"'.$id.'"';
			$c = new Criteria();
			$c->add(QuestionPeer::QUESTION_GROUP_CATEGORY,'%'.$qr.'%',Criteria::LIKE);
			$count_question = QuestionPeer::doCount($c);
			$c= new Criteria();
			$c->addJoin(QuestionPeer::ID,QuestionAnswerPeer::QUESTION_ID);
			$c->add(QuestionPeer::QUESTION_GROUP_CATEGORY,'%'.$qr.'%',Criteria::LIKE);
			$count_answer = QuestionPeer::doCount($c);
			$arr [] = array('images_thumb'=>$images_thumb,'name'=>$name,'url_question_group_category'=>$url_question_group_category,'count_question'=>$count_question,'count_answer'=>$count_answer);
		}
		return $arr;
	}
}
