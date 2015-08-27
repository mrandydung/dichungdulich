<?php
class payment_onepayActions extends sfActions
{
	public function executeOnepay_noidia_request($r)
	{
		$u = $this->getUser();
		$id_service_cart = $u->getAttribute('id_service_cart');
		if($id_service_cart) 
		{
		   $service_cart = BookingTourPeer::retrieveByPK($id_service_cart);
		  	$op = new onepay;
		  	header('location:'.$op->buildNoidiaUrl($service_cart->getId(),$service_cart->getPhoneNumber(), $service_cart->getPriceSecurityDeposit()*100, 'http://'.$_SERVER['HTTP_HOST'].'/index.php/payment_onepay/onepay_noidia_response?dc_sid='.session_id()));
		  	die();
		  	return sfView::NONE;
		}

	}

	public function executeOnepay_noidia_response($r)
	{
	    sfLoader::loadHelpers('Url');
		$this->prepareCart();
		$cart = $this->cart;

		 if(session_id() == $r->getParameter('dc_sid')){
		     $cart = $this->getUser()->getCartCurrent();
			 $op = new onepay;
			 $stt = $op->getNoidiaResponse($_GET);
			 
			 if($stt != 'OK') {
				$stt = $op->getNoidiaResponseString();
				$cart->setTransactionStatusId(1);
			 }
			 else{
				$cart->setTransactionStatusId(1);
			 }
		 
		$cart->save();
		//myUtil::sendMailCart($cart);
		$script = "location.href='/booking-tour.html';";
		if($stt == 'OK'){
			$stt = LangPeer::getText('Thanh toán thành công');
		    $cart->setTransactionStatusId(2);
		    $cart->save();
			$script = 'location.href = "'.url_for('@user_transaction').'";'.$script;
		}
		session_regenerate_id(true);
		return $this->renderText('<script>alert(\''.$stt.'\');'.$script.'</script>');
		 }
		else{
		return $this->renderText('<script>window.close();</script>');
		}
		 
	}

	public function prepareCart() {
	$user = sfContext::getInstance()->getUser();
	$cart = $user->getCartCurrent();
	/*if(!$cart) 
	{
	  $this->redirect('@homepage');
	}*/
	$this->cart = $cart;
	}

	public function executePaypal() {
	    // PayPal settings
	//$paypal_email = $this->getUser()->getSe()->getBoothPaypalEmail();
	//$paypal_email = $paypal_email?$paypal_email:ConfigPeer::get('PAYPAL_EMAIL');
	$paypal_email = ConfigPeer::get('PAYPAL_EMAIL');
	$host = $_SERVER['HTTP_HOST'];
	$sid = session_id();

	$return_url = 'http://'.$host.'/payment/paypal_success/sid/'.$sid;
	$cancel_url = 'http://'.$host.'/payment/paypal_cancel/sid/'.$sid;
	$notify_url = 'http://'.$host.'/payment/paypal_notify/sid/'.$sid;

	$user = sfContext::getInstance()->getUser();
	$cart = $user->getCartCurrent();
	if(!$cart) {
	  $this->redirect('@homepage');
	}
	$item_name = LangPeer::translate('THANH TOAN DON HANG');
	$item_amount = round($cart->getPriceBooking()/ConfigPeer::get('USD_EXCHANGE_RATE'), 2);
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
		$this->cart->setTransactionStatusId(3);
		$this->cart->save();
		// myUtil::sendMailCart($this->cart);
		session_regenerate_id(true);
		return $this->renderText('<script>alert(\''.LangPeer::translate('Thanh toán không thành công').'\');location.href="'.$this->cart->getDetailUrl().'"</script>');
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
		$u->setAttribute('content_msg','Bạn chọn hình thức thanh toán trực tiếp cho chủ dịch vụ.<br/>
		  Thanh toán trực tuyến đã thành công.<br/>
		  Liên hệ số Hotline 0935133166 nếu cần hỗ trợ. ');
		return $this->renderText('<script>alert(\''.LangPeer::translate('Thanh toán thành công').'\');location.href="'.url_for('@serviceTransactionTab').'"</script>');
	}


	public function executePaypal_notify () {
		error_log(json_encode($_POST), 3, 'LL.txt');
		return sfView::NONE;
	}
	
}
