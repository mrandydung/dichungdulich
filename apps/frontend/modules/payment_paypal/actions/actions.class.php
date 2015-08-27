<?php

class payment_paypalActions extends sfActions
{
	public function prepareCart() {
	    $user = sfContext::getInstance()->getUser();
	    $cart = $user->getCartCurrent();
	    if(!$cart) 
	    {
	      $this->redirect('@homepage');
	    }
    $this->cart = $cart;
  }
  
  public function executePaypal() {
    $user = sfContext::getInstance()->getUser();
    $cart = $user->getCartCurrent();
    if($cart->getPaymentBookingTypeId() == '4'){
    	$user_id_sell = $cart->getUserIdSell();
    	$user_sell = DichungUserPeer::retrieveByPK($user_id_sell,Propel::getConnection('dichung_new'));
	    $paypal_email = $user_sell->getPaypal();
    }
    if($cart->getPaymentBookingTypeId() == '7'){
	    $paypal_email =  ConfigPeer::get('PAYPAL_EMAIL');
    }
    $host = $_SERVER['HTTP_HOST'];
    $sid = session_id();
    $return_url = 'http://'.$host.'/payment_paypal/paypal_success/sid/'.$sid;
    $cancel_url = 'http://'.$host.'/payment_paypal/paypal_cancel/sid/'.$sid;
    $notify_url = 'http://'.$host.'/payment_paypal/paypal_notify/sid/'.$sid;
    

    if(!$cart) {
      $this->redirect('@homepage');
    }
    $item_name = LangPeer::translate('THANH TOAN DON HANG');
    $item_amount = round($cart->getPriceSecurityDeposit()/ConfigPeer::get('USD_EXCHANGE_RATE'), 2);
    $params = array('cmd' => '_xclick', 
                    'no_note' => '1', 
                    'locale.x' => 'es_VN', 
                    'lc' => 'VN', 
                    'currency_code' => 'USD', 
                    'country' => 'VN', 
                    'bn' => 'PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest', 
                    //'first_name' => 'Customer\'s First Name', 
                    //'last_name' => 'Customer\'s Last Name', 
                    //'payer_email' => 'customer@example.com', 
                    'item_number' => $cart->getId()); 

    // Firstly Append paypal account to querystring
    $querystring = "?business=".urlencode($paypal_email)."&";	
    
    // Append amount& currency (£) to quersytring so it cannot be edited in html
    
    //The item name and amount can be brought in dynamically by querying the $params['item_number'] variable.
    $querystring .= "item_name=".urlencode($item_name)."&";
    $querystring .= "amount=".urlencode($item_amount)."&";
    
    //loop for posted values and append to querystring
    foreach($params as $key => $value){
      $value = urlencode(stripslashes($value));
      $querystring .= "$key=$value".'&';
    }
 
    // Append paypal return addresses
    $querystring .= "return=".urlencode(stripslashes($return_url))."&";
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
    $querystring .= "notify_url=".urlencode($notify_url);
    
    // Redirect to paypal IPN
    return $this->renderText('<meta http-equiv="refresh" content="0;URL=https://www.paypal.com/cgi-bin/webscr'.$querystring.'" />' );
    
  }
  
  public function executePaypal_cancel($r) {
    $this->prepareCart();
    if(session_id() != $r->getParameter('sid')){
      $this->redirect('@homepage');
    }
    $this->cart->setTransactionStatusId(1);
    $this->cart->save();
   // myUtil::sendMailCart($this->cart);
    session_regenerate_id(true);
    return $this->renderText('<script>alert(\''.LangPeer::translate('Thanh toán không thành công').'\');location.href="'.url_for('@homepage').'"</script>');
  }
  
  public function executePaypal_success ($r) {
    $this->prepareCart();
    if(session_id() != $r->getParameter('sid')){
      $this->cart->setTransactionStatusId(2);
      $this->cart->save();
    }
    session_regenerate_id(true);
    myUtil::sendMailCart($this->cart);
    $u = $this->getUser();
    $u->setAttribute('content_msg','Bạn chọn hình thức thanh toán trực tiếp qua PayPal.<br/>
      Thanh toán trực tuyến đã thành công.<br/>
      Liên hệ số Hotline 0935133166 nếu cần hỗ trợ. ');
    return $this->renderText('<script>alert(\''.LangPeer::translate('Thanh toán thành công').'\');location.href="'.url_for('@user_transaction').'"</script>');
  }
	
  
  public function executePaypal_notify () {
    error_log(json_encode($_POST), 3, 'LL.txt');
    return sfView::NONE;
  }
	
}
