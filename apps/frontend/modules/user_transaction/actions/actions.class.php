<?php
class user_transactionActions extends sfActions
{
  public function executeIndex($request)
  {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $u = $this->getUser();
    $this->user_id = $u->getId();
    if(!$this->user_id){
    	$this->redirect('@homepage');
    }
    $this->content_msg = $u->getAttribute('content_msg');
    $u->getAttributeHolder()->remove('content_msg');
    $this->user = DichungUserPeer::retrieveByPK($this->user_id,Propel::getConnection('dichung_new'));
    $this->booking_tour = BookingTourPeer::getBookingTransaction($this->user_id);
  }
}
