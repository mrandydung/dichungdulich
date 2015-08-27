<?php

/**
 * Subclass for performing query and update operations on the 'comment_experience' table.
 *
 * 
 *
 * @package lib.model
 */ 
class CommentExperiencePeer extends BaseCommentExperiencePeer
{
	public static function getAll($experience_id){
		$c = new Criteria();
		$c->add(self::TRIP_EXPERIENCE_ID,$experience_id);
		$c->addDescendingOrderByColumn(self::ID);
		$rs = self::doSelect($c);
		$arr = array();
		foreach ($rs as $key => $value) {
			$id = $value->getId();
			$comment = $value->getComment();
			$user_id = $value->getUserId();
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$fullname = $user->getFullname();
			$url_user = $user->getDetailUrlDefault();
			$rating = $value->getRating();
			$created = $value->getCreatedAt();
			$arr [] = array('id'=>$id,'comment'=>$comment,'rating'=>$rating,'created'=>$created,'avatar'=>$avatar,'url_user'=>$url_user);
		}
		return $arr;
	}
}
