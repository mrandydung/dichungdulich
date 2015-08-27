<?php

/**
 * Subclass for representing a row from the 'booking_tour' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BookingTour extends BaseBookingTour
{
	public function getAvatarInUserTransaction($user_id){
		$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		return $user->getAvatar();
	}

	public function getUserbuy(){
		$user_id_buy = $this->getUserIdBuy();
		$user = DichungUserPeer::retrieveByPK($user_id_buy,Propel::getConnection('dichung_new'));
		return $user->getFullname();
	}

	public function getUsersell(){
		$user_id_sell = $this->getUserIdSell();
		$user = DichungUserPeer::retrieveByPK($user_id_sell,Propel::getConnection('dichung_new'));
		return $user->getFullname();
	}

}
