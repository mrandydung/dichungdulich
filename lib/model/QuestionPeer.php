<?php

/**
 * Subclass for performing query and update operations on the 'question' table.
 *
 * 
 *
 * @package lib.model
 */ 
class QuestionPeer extends BaseQuestionPeer
{
	public static function find_question($keyword,$filter_question){
		$terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($keyword));  
		$c = new Criteria();
		if($filter_question == '1'){
			$c->addDescendingOrderByColumn(self::ID);
		}
		if($filter_question == '2'){
			$c->addDescendingOrderByColumn(self::VIEW);
		}
		$criterion = $c->getNewCriterion(self::TITLE,'%'.$terms.'%',Criteria::LIKE);
		$criterion->addOr($c->getNewCriterion(self::DETAIL,'%'.$terms.'%',Criteria::LIKE));
		$c->add($criterion);
		$rs = self::doSelect($c);
		$arr = array();
	  	sfLoader::loadHelpers('Url');
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$title = $value->getTitle();
			$detail = mb_substr($value->getDetail(),0,150,'UTF-8').'..';
			$like = $value->getLikeQuestion();
			$view = $value->getView();
			$user_id = $value->getUserId();
			$time = date('d-m-Y H:i:s',strtotime($value->getDate()));
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = 'http://dichung.vn/thumbnail/index.php?src='.$user->getAvatar().'&w=50&h=50';
			$fullname = $user->getFullname();
			$url = $value->getDetailUrl();
			$count_answer = QuestionAnswerPeer::count_answer_question($id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$arr [] = array('id'=>$id,'title'=>$title,'detail'=>$detail,'like'=>$like,'view'=>$view,'time'=>$time,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'url'=>$url,'count_answer'=>$count_answer);
		}
		return $arr;
	}

	public static function find_question_group_category($keyword,$question_group_category_id,$filter_question){
		$qr = '"id":'.'"'.$question_group_category_id.'"';
		$terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($keyword));  
		$c = new Criteria();
		if($filter_question == '1'){
			$c->addDescendingOrderByColumn(self::ID);
		}
		if($filter_question == '2'){
			$c->addDescendingOrderByColumn(self::VIEW);
		}
		$c->add(self::QUESTION_GROUP_CATEGORY,'%'.$qr.'%',Criteria::LIKE);
		$criterion = $c->getNewCriterion(self::TITLE,'%'.$terms.'%',Criteria::LIKE);
		$criterion->addOr($c->getNewCriterion(self::DETAIL,'%'.$terms.'%',Criteria::LIKE));
		$c->add($criterion);
		$rs = self::doSelect($c);
		$arr = array();
	  	sfLoader::loadHelpers('Url');
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$title = $value->getTitle();
			$detail = mb_substr($value->getDetail(),0,150,'UTF-8').'..';
			$like = $value->getLikeQuestion();
			$view = $value->getView();
			$user_id = $value->getUserId();
			$time = date('d-m-Y H:i:s',strtotime($value->getDate()));
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = 'http://dichung.vn/thumbnail/index.php?src='.$user->getAvatar().'&w=50&h=50';
			$fullname = $user->getFullname();
			$url = $value->getDetailUrl();
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$count_answer = QuestionAnswerPeer::count_answer_question($id);
			$arr [] = array('id'=>$id,'title'=>$title,'detail'=>$detail,'like'=>$like,'view'=>$view,'time'=>$time,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'url'=>$url,'count_answer'=>$count_answer);
		}
		return $arr;

	}

	public static function text_search($text){
	  	$terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($text));  
	 	$c = new Criteria();
        $c->add(self::TITLE, "%".$terms."%", Criteria::LIKE);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::ID);
     	$c->addSelectColumn(self::VIEW);
     	$c->addSelectColumn(self::ANSWER);
        $rs = self::doSelectRs($c);
        $html = '';
     	sfLoader::loadHelpers('Url');
        if($rs){
        	 while($rs->next()){
        	 	$title = $rs->get(1);
        	 	$id = $rs->get(2);
        	 	$c = new Criteria();
        	 	$c->add(QuestionAnswerPeer::QUESTION_ID,$id);
        	 	$count_answer = QuestionAnswerPeer::doCount($c);
        	 	$url = url_for('@question_detail?name='.myUtil::strToSlug($title).'&question_id='.$id);
	    	 	$html .= ' <p>&#8226; <a target="_blank" href="'.$url.'">'.$rs->get(1).'</a> <span class="h5 topic_static"><small><i>'.$rs->get(3).' lượt xem &#8226; '.$count_answer.' trả lời</i></small></span></p>';
	        }
        }
        return $html;
	}

	public static function get_question_group($question_group_category_id){
		$qr = '"id":'.'"'.$question_group_category_id.'"';
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::QUESTION_GROUP_CATEGORY,'%'.$qr.'%',Criteria::LIKE);
		$c->setLimit(10);
		$rs = self::doSelect($c);
		$arr = array();
	  	sfLoader::loadHelpers('Url');
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$title = $value->getTitle();
			$detail = mb_substr($value->getDetail(),0,150,'UTF-8').'..';
			$like = $value->getLikeQuestion();
			$view = $value->getView();
			$user_id = $value->getUserId();
			$time = date('d-m-Y H:i:s',strtotime($value->getDate()));
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = 'http://dichung.vn/thumbnail/index.php?src='.$user->getAvatar().'&w=50&h=50';
			$fullname = $user->getFullname();
			$url = $value->getDetailUrl();
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$count_answer = QuestionAnswerPeer::count_answer_question($id);
			$arr [] = array('id'=>$id,'title'=>$title,'detail'=>$detail,'like'=>$like,'view'=>$view,'time'=>$time,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'url'=>$url,'count_answer'=>$count_answer);
		}
		return $arr;
	}

	public static function get_detail_question($question_id){
		sfLoader::loadHelpers('Url');
		$question = QuestionPeer::retrieveByPK($question_id);
		$title = $question->getTitle();
		$detail = $question->getDetail();
		$like = $question->getLikeQuestion();
		$view = $question->getView();
		$user_id = $question->getUserId();
		$time = date('d-m-Y H:i:s',strtotime($question->getDate()));
		$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$avatar = 'http://dichung.vn/thumbnail/index.php?src='.$user->getAvatar().'&w=50&h=50';
		$fullname = $user->getFullname();
		$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
		$arr  = array('question_id'=>$question_id,'title'=>$title,'detail'=>$detail,'like'=>$like,'view'=>$view,'time'=>$time,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user);
		return $arr;
	}
}
