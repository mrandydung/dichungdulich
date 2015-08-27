<?php

/**
 * Subclass for performing query and update operations on the 'question_answer' table.
 *
 * 
 *
 * @package lib.model
 */ 
class QuestionAnswerPeer extends BaseQuestionAnswerPeer
{
	public static function get_answer_question($question_id){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::QUESTION_ID,$question_id);
		$rs = self::doSelect($c);
		$arr = array();
		$count = 0;
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$content = trim($value->getContent());
			$user_id = $value->getUserId();
			$time = date('d-m-Y H:i:s',strtotime($value->getDate()));
			$like = $value->getLikeQuestion();
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = 'http://dichung.vn/thumbnail/index.php?src='.$user->getAvatar().'&w=50&h=50';
			$fullname = $user->getFullname();
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$arr [] = array('id'=>$id,'avatar'=>$avatar,'content'=>$content,'fullname'=>$fullname,'time'=>$time,'like'=>$like,'url_user'=>$url_user);
			$count = $count + 1;
		}
		return array('answer_question'=>$arr,'count'=>$count);
	}

	public static function count_answer_question($question_id){
		$c = new Criteria();
		$c->add(self::QUESTION_ID,$question_id);
		return self::doCount($c);
	}
}
