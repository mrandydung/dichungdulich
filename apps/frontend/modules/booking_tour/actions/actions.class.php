<?php
class booking_tourActions extends sfActions
{
	public function executeIndex($request)
	{
		$u = $this->getUser();
		$user_id = $u->getId();
		$this->booking_content = $u->getAttribute('booking_content');
		if(!$user_id || !$this->booking_content){
			$this->redirect('@homepage');
		}
		$tour_detail_id = $this->booking_content['tour_detail']->getId();
		$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
		$tour_id = $this->booking_content['tour_detail']->getId();
		$tour = $tour_detail;
		$user_sell = $tour->getUserId();
		$user_sell_info =  DichungUserPeer::retrieveByPK($user_sell,Propel::getConnection('dichung_new'));
		$this->user_sell_info = $user_sell_info;
		$this->tour_detail = $tour_detail;
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->phone_number = myUtil::phoneNumberValidTo0x($this->user->getPhoneNumber());
		if($request->isMethod('POST')){
			$this->errors = array();
			$this->booking_form_contact_name = $request->getParameter('booking_form_contact[name]');
			$this->booking_form_contact_phone = $request->getParameter('booking_form_contact[phone]'); 
			$this->booking_form_contact_note = $request->getParameter('booking_form_contact[note]');
			$this->booking_form_money_security_deposit = $request->getParameter('money_security_deposit');
			$this->payment = $request->getParameter('payment');
			if(strlen($this->booking_form_contact_name) < 2){
				$this->errors [] = 'Bạn vui lòng nhập lại họ tên';
			}if(!myUtil::isValidPhoneNumber($this->booking_form_contact_phone)){
				$this->errors [] = 'Số điện thoại không hợp lệ';
			}if(!$this->payment){
				$this->errors [] = 'Bạn chưa chọn phương pháp thanh toán';
			}
			if(!$this->user->getVerifiedPhone()){
				$this->errors [] = 'Bạn cần xác thực số điện để đăng ký chuyến đi';
			}
			$count_err = count($this->errors);
			if(!$count_err){
				$booking_tour = new BookingTour();
				$booking_tour->setUserIdSell($user_sell);
				$booking_tour->setUserIdBuy($user_id);
				$booking_tour->setTourDetailId($this->booking_content['tour_detail']->getId());
				$booking_tour->setCodeTransaction($this->booking_content['code_transaction']);
				$booking_tour->setPaymentBookingTypeId($this->payment);
				$booking_tour->setNumberAdult($this->booking_content['select_adult']);
				$booking_tour->setNumberKid($this->booking_content['sum_kid']);
				$booking_tour->setPrice($this->booking_content['total_cal_price']);
				if($tour_detail->getAllowBookingFast() == '1'){
					$booking_tour->setBookingStatusId(2);
					$tour_detail->setNumberSeatBooking($tour_detail->getNumberSeatBooking() + $this->booking_content['select_adult'] + $this->booking_content['sum_kid']);
				}
				if($tour_detail->getTourTypeId() == '1'){
					$booking_tour->setPriceSecurityDeposit($this->booking_content['total_cal_price']);
					$money_security_deposit_tmp = $this->booking_content['total_cal_price'];
				}
				if($tour_detail->getTourTypeId() == '2'){
					$booking_tour->setPriceSecurityDeposit($this->booking_content['total_cal_price']*$this->booking_form_money_security_deposit/100);
					$money_security_deposit_tmp = $this->booking_content['total_cal_price']*$this->booking_form_money_security_deposit/100;
				}
				$booking_tour->setName($this->booking_form_contact_name);
				$booking_tour->setPhoneNumber($this->booking_form_contact_phone);
				$booking_tour->setNote($this->booking_form_contact_note);
				$booking_tour->setDateStartTour(date('Y-m-d',strtotime($this->booking_content['date_picker'])));
				$booking_tour->setTransactionStatusId(1);
				$booking_tour->setTicket('Tên Tour:'.$this->booking_content['tour_detail']->getTitle().'<br>'.'Loại dịch vụ: '.$this->booking_content['tour_price_service_name'].'<br>'
							.' Người lớn : '.$this->booking_content['select_adult'].'<br>'.'Trẻ em : '.$this->booking_content['sum_kid'].'<br>'.' Giá tiền :'.$this->booking_content['total_cal_price'].'<br>'
							.' Tiền kí quỹ : '.$money_security_deposit_tmp);
				
				$partner_id = myUser::get_partner_id();
				$booking_tour->setPartnerId($partner_id);
				$booking_tour->save();
				// $u->getAttributeHolder()->remove('booking_content');
				
				$tour_detail->save();
		        $end = myUtil::removeMark($tour->getEnd());
				$this->paypal = trim($user_sell_info->getPaypal());
				if($this->payment == '1'){
			     	$u = $this->getUser();
					$u->setAttribute('id_service_cart',$booking_tour->getId());
					$this->redirect('payment_onepay/onepay_noidia_request');
				}
				if($this->payment == '2'){
					$u->setAttribute('content_msg','Bạn chọn hình thức thanh toán đảm bảo qua trung gian bằng hình thức chuyển khoản.<br/>
                                Vui lòng chuyển tiền theo hướng dẫn sau khi các bạn đồng ý thực hiện giao dịch với nhau.<br/>
                           Số : 19026855625598 <br>   
                           Ngân Hàng: Techcombank Hai Bà Trưng <br>
                           Chủ tài khoản: Công ty Cổ phần Đi chung <br>
                           hoặc<br>
                           Số : 0451000250797 <br>
                           Ngân Hàng: Vietcombank Thành Công  <br>
                           Chủ tài khoản: Công ty Cổ phần Đi chung ');
				}
			 	if($this->payment == '3'){
                	$u->setAttribute('content_msg','Bạn chọn hình thức thanh toán bằng hình thức tiền mặt trả sau cho chủ dịch vụ.  Vui lòng thanh toán trực tiếp với chủ dịch vụ ');
              	}
      		 	if($this->payment == '4'){
  	   	 		   	$u = $this->getUser();
					$u->setAttribute('id_service_cart',$booking_tour->getId());
					$this->redirect('payment_paypal/paypal');
      	   	 	}
          	 	if($this->payment == '5'){
                	$u->setAttribute('content_msg','Bạn chọn hình thức thanh toán trực tiếp cho chủ dịch vụ bằng hình thức chuyển khoản.  Vui lòng chuyển tiền theo hướng dẫn sau khi các bạn đồng ý thực hiện giao dịch.<br/>
                          Chủ tài khoản: '.$user_sell_info->getBankOwner().'<br/>
                          Số tài khoản:'.$user_sell_info->getBankCode().'<br/>
                          Tại ngân hàng:'.$user_sell_info->getBankName().'<br/>'
                      );
              	}
      	   	 	if($this->payment == '7'){
  	   	 		   	$u = $this->getUser();
					$u->setAttribute('id_service_cart',$booking_tour->getId());
					$this->redirect('payment_paypal/paypal');
      	   	 	}
			    $msg =  "Gheptour.vn Thong Bao:\n".$this->user->getFullname().' dat cho tren tour den '.$end.' cua ban.Vui long truy cap Gheptour.vn de biet them thong tin';
                $msg = myUtil::removeMark($msg);
                
                Propel::getConnection('dichung_taxi')
                ->prepareStatement('INSERT INTO driver_msg SET phone_number = \''.$user_sell_info->getPhoneNumber().'\', message = \''.$msg.'\', created_at = \''.date('Y-m-d H:i:s').'\'')
                ->executeQuery();
    
                $url_tour = $tour->getDetailUrlTour();
                $notification = new Notification();
                $notification->setUserSend($user_id);
                $notification->setUserReceiver($user_sell);
                $notification->setDescription('<a href="'.$this->user->getDetailUrlDefault().'" target="_blank">'.$this->user->getFullname().'</a> đã đăng ký chỗ trong chuyến đi <a href="'.$url_tour .'">'.$tour->getTitle().'</a> của bạn');
				$notification->save();
                $url_quanly = 'http://gheptour.vn/quan-ly-giao-dich.html';
                $user_name = $this->user->getFullname();
                $username_sell = $user_sell_info->getFullname();
				$url_tour = $tour_detail->getDetailUrlTour();
				$tour_name = $tour_detail->getTitle();
                $date_booking = date('H:i:s d-m-Y');
			  	$mail_template = MailTemplatePeer::mail_book_tour($user_name,$username_sell,$url_tour,$tour_name,$url_quanly,$date_booking);
                $mail_out_box  = new MailOutbox();
			    $mail_out_box->setSendTo($user_sell_info->getEmail());
			    $mail_out_box->setSendFrom('admin@gheptour.vn');
			    $mail_out_box->setSendFromName('Gheptour.vn');
			    $mail_out_box->setMessage($mail_template);
			    $mail_out_box->setTitle('Đăng ký Tour từ Gheptour.vn');
                $mail_out_box->save(Propel::getConnection('mail'));
				$this->redirect('@user_transaction');
			}
		}
	}

	public function executeBooking_status($request){
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$booking_id = $request->getParameter('booking_id');
			$user_sell_deny = $request->getParameter('user_sell_deny');
			$user_buy_deny = $request->getParameter('user_buy_deny');
			$user_sell_accept = $request->getParameter('user_sell_accept');
			$user_sell_accept_finish = $request->getParameter('user_sell_accept_finish');
			$booking_tour = BookingTourPeer::retrieveByPK($booking_id);
			if($user_sell_deny){
				if($booking_tour->getBookingStatusId() == '1' || $booking_tour->getBookingStatusId() == '2'){
					$booking_tour->setBookingStatusId(5);
					$booking_tour->save();
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok')));
				}else{
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
				}
			}
			if($user_buy_deny){
				if($booking_tour->getBookingStatusId() == '1'){
					$booking_tour->setBookingStatusId(4);
					$booking_tour->save();
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok')));
				}else{
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
				}
			}
			if($user_sell_accept){
				if($booking_tour->getBookingStatusId() == '1'){
					$booking_tour->setBookingStatusId(2);
					$booking_tour->save();
					$tour_detail = TourDetailPeer::retrieveByPK($booking_tour->getTourDetailId());
					$tour_detail->setNumberSeatBooking($tour_detail->getNumberSeatBooking() + $booking_tour->getNumberAdult() + $booking_tour->getNumberKid());
					$tour_detail->save();
					$user_id_sell = $booking_tour->getUserIdSell();
					$user_id_buy = $booking_tour->getUserIdBuy();
					$user_sell = DichungUserPeer::retrieveByPK($user_id_sell,Propel::getConnection('dichung_new'));
					$user_buy = DichungUserPeer::retrieveByPK($user_id_buy,Propel::getConnection('dichung_new'));
					$msg_send_user_sell = 'Gheptour.vn thong bao : ban da xac nhan dat cho cua '.$user_buy->getFullname().' . SDT lien he : '.$user_buy->getPhoneNumber().'. Ma GD:'.$booking_tour->getCodeTransaction();
					$msg_send_user_buy = 'Gheptour.vn thong bao :'.$user_sell->getFullname().' da dong y nhan dat cho cua ban. SDT lien he : '.$user_sell->getPhoneNumber().'. Ma GD:'.$booking_tour->getCodeTransaction();
			     	$msg_send_user_sell = myUtil::removeMark($msg_send_user_sell);
			     	$msg_send_user_buy = myUtil::removeMark($msg_send_user_buy);
	                Propel::getConnection('dichung_taxi')
	                ->prepareStatement('INSERT INTO driver_msg SET phone_number = \''.$user_sell->getPhoneNumber().'\', message = \''.$msg_send_user_sell.'\', created_at = \''.date('Y-m-d H:i:s').'\'')
	                ->executeQuery();
                    Propel::getConnection('dichung_taxi')
	                ->prepareStatement('INSERT INTO driver_msg SET phone_number = \''.$user_buy->getPhoneNumber().'\', message = \''.$msg_send_user_buy.'\', created_at = \''.date('Y-m-d H:i:s').'\'')
	                ->executeQuery();
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok')));
				}else{
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
				}
			}
			if($user_sell_accept_finish){
				if($booking_tour->getBookingStatusId() == '2'){
					$booking_tour->setBookingStatusId(3);
					$booking_tour->save();
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok')));
				}else{
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
				}
			}
		}
	}
}
