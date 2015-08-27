<?php

/**
 * Subclass for performing query and update operations on the 'booking_tour' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BookingTourPeer extends BaseBookingTourPeer
{
	public static function getBookingTransaction($user_id){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(BookingTourPeer::ID);
		$criterion = $c->getNewCriterion(BookingTourPeer::USER_ID_SELL,$user_id);
		$criterion->addOr($c->getNewCriterion(BookingTourPeer::USER_ID_BUY,$user_id));
		$c->add($criterion);
		$rs = BookingTourPeer::doSelect($c);
		return $rs;
	}

	public static function get_user_join($tour_detail_id){
		$c = new Criteria();
		$c->add(BookingTourPeer::TOUR_DETAIL_ID,$tour_detail_id);
		$rs = BookingTourPeer::doSelect($c);
		$arr = array();
		foreach ($rs as $key => $value) {
			$user_id = $value->getUserIdBuy();
			$user = DichungUserPeer::retrieveByPk($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$url_user = $user->getDetailUrlDefault();
			$arr [] = array('avatar'=>$avatar,'url_user'=>$url_user);
		}
		return $arr;
	}
}
