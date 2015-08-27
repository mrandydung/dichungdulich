<?php
class tripManagerActions extends sfActions
{
	public function executeIndex($request){
		$u = $this->getUser();
		$user_id = $u->getId();
		$this->tour_id = $request->getParameter('tour_id');
		if(!$user_id || !$this->tour_id){
			$this->redirect('@homepage');
		}
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->phone_number = myUtil::phoneNumberValidTo0x($this->user->getPhoneNumber());
		$c = new Criteria();
		$c->add(TourDetailPeer::ID,$this->tour_id);
		$c->add(TourDetailPeer::USER_ID,$user_id);
		$count_user_tour = TourPeer::doCount($c);
		if(!$count_user_tour){
			$this->redirect('@homepage');
		}
		$this->tour_detail = TourDetailPeer::retrieveByPK($this->tour_id);
		$this->check_enable_step = TourDetailPeer::check_enable_step($this->tour_detail);
		$this->time_type = TourTimeTypePeer::getAll();
		$c = new Criteria();
		$c->add(TourDiscountPeer::TOUR_DETAIL_ID,$this->tour_detail->getId());
		$c->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID,2);
		$this->count_discount_number = TourDiscountPeer::doCount($c);
		if($this->count_discount_number){
			$this->discount_number = TourDiscountPeer::doSelectOne($c);
		}
		$c = new Criteria();
		$c->addDescendingOrderByColumn(TourItemImgPeer::ID);
		$c->add(TourItemImgPeer::TOUR_DETAIL_ID,$this->tour_id);
		$this->images = TourItemImgPeer::doSelect($c);
		$this->utilities = json_decode($this->tour_detail->getUtilities());
		$this->sorting = json_decode($this->tour_detail->getSorting());
		$this->activities = json_decode($this->tour_detail->getActivities());
		$this->object_fit = json_decode($this->tour_detail->getTourObjectFit());
		$this->tour_coo_item = TourCooItemPeer::get_all_by_tour_id($this->tour_id);
		$this->tour_price_kid_item = TourPriceKidItemPeer::get_all_by_tour_id($this->tour_id);
		$this->tour_discount_day = TourDiscountEventPeer::get_all_discount_day($this->tour_id);
		$this->tour_discount_number = TourDiscountPeer::get_all_discount_number($this->tour_id);
		$this->tour_price_service_item = TourPriceServiceItemPeer::get_all_by_tour_id($this->tour_id);
		$this->schedule_day_one = TourItemScheduleDayPeer::get_schedule_day($this->tour_id,1);
		if($this->schedule_day_one){
			$this->vehicle_arr = json_decode($this->schedule_day_one->getVehicle());
		}else{
			$this->vehicle_arr = array();
		}
	}

	public function executeUpdate_time_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$tour_time_type = $request->getParameter('tour_time_type');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
			$tour_title = trim($request->getParameter('tour_title'));
			$tour_description = trim($request->getParameter('tour_description'));
			$tour_detail->setTitle($tour_title);
			$tour_detail->setTitleSeo(strip_tags($tour_title,''));
			$tour_detail->setDescription($tour_description);
			$tour_detail->setDescriptionSeo(strip_tags($tour_description,''));
			if(strlen($tour_title) < 6){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Tiêu đề tour quá ngắn')));
			}
			if(strlen($tour_description) < 6){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Mô tả tour quá ngắn')));
			}
			if($tour_time_type == '1'){
				$creat_trip_form_fix_start_start_date = $request->getParameter('creat_trip_form_fix_start_start_date');
				$creat_trip_form_fix_start_end_date = $request->getParameter('creat_trip_form_fix_start_end_date');
				$creat_trip_form_fix_start_start_hour = $request->getParameter('creat_trip_form_fix_start_start_hour');
				if(!$creat_trip_form_fix_start_start_date){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn ngày bắt đầu')));
				}elseif(!$creat_trip_form_fix_start_end_date){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn ngày kết thúc')));
				}elseif($creat_trip_form_fix_start_start_hour == '1000'){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn giờ đi')));
				}elseif (strtotime($creat_trip_form_fix_start_start_date) > strtotime($creat_trip_form_fix_start_end_date)) {
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Ngày bắt đầu và ngày kết thúc không hợp lệ')));
				}else{
					$tour_detail->setTimeTypeId($tour_time_type);
					$tour_detail->setDateStart($creat_trip_form_fix_start_start_date);
					$tour_detail->setDateEnd($creat_trip_form_fix_start_end_date);
					$tour_detail->setHourStart($creat_trip_form_fix_start_start_hour);
					$time_category_day_change = (int)(strtotime($creat_trip_form_fix_start_end_date) - strtotime($creat_trip_form_fix_start_start_date))/86400 + 1;
					if($time_category_day_change >= 20){
						return $this->renderText(json_encode(array('code'=>1,'msg'=>'Thời gian tour kéo dài không quá 20 ngày')));
					}
					$tour_detail->setTimeCategoryDayId($time_category_day_change);
					$tour_detail->save();
					TourDetailPeer::check_update_enable_detail_tour($tour_id);
					$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật Thông tin Tour thành công','check_enable_step'=>$check_enable_step['step'])));
				}
			}
			if($tour_time_type == '2'){
				$creat_trip_form_daily_start_hour = $request->getParameter('creat_trip_form_daily_start_hour');
				$creat_trip_form_daily_start_day_long = $request->getParameter('creat_trip_form_daily_start_day_long');
				if($creat_trip_form_daily_start_hour == '1000'){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn giờ đi')));
				}elseif(!$creat_trip_form_daily_start_day_long){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn thời gian')));
				}else{
					$tour_detail->setTimeTypeId($tour_time_type);
					$tour_detail->setHourDay($creat_trip_form_daily_start_hour);
					$tour_detail->setTimeCategoryDayId($creat_trip_form_daily_start_day_long);
					$tour_detail->save();
					TourDetailPeer::check_update_enable_detail_tour($tour_id);
					$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật Thông tin Tour thành công','check_enable_step'=>$check_enable_step['step'])));
				}
			}
			if($tour_time_type == '3'){
				$arr_checkbox = $request->getParameter('arr_checkbox');
				$checkbox_week = implode(',', $arr_checkbox);
				$creat_trip_form_weekly_start_hour = $request->getParameter('creat_trip_form_weekly_start_hour');
				$creat_trip_form_weekly_start_time_category_day = $request->getParameter('creat_trip_form_weekly_start_time_category_day');
				if($creat_trip_form_weekly_start_hour == '1000'){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn giờ đi ')));
				}elseif(!$creat_trip_form_weekly_start_time_category_day){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn thời gian đi ')));
				}else{
					$tour_detail->setTimeTypeId($tour_time_type);
					$tour_detail->setHourWeek($creat_trip_form_weekly_start_hour);
					$tour_detail->setDayInWeek($checkbox_week);
					$tour_detail->setTimeCategoryDayId($creat_trip_form_weekly_start_time_category_day);
					$tour_detail->save();
					TourDetailPeer::check_update_enable_detail_tour($tour_id);
					$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật Thông tin Tour thành công','check_enable_step'=>$check_enable_step['step'])));
				}
			}
			if($tour_time_type == '4'){
				$select_date_request_service_day_long = $request->getParameter('select_date_request_service_day_long');
				$count_date_request_tour = TourDateRequestServicePeer::count_date_request_tour($tour_id);
				if(!$select_date_request_service_day_long){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn tour kéo dài bao lâu')));
				}elseif(!$count_date_request_tour){
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa chọn ngày khởi hành')));
				}else{
					$tour_detail->setTimeTypeId($tour_time_type);
					$tour_detail->setTimeCategoryDayId($select_date_request_service_day_long);
					$tour_detail->save();
					TourDetailPeer::check_update_enable_detail_tour($tour_id);
					$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật Thông tin Tour thành công','check_enable_step'=>$check_enable_step['step'])));
				}
			}
			return $this->renderText(json_encode(array('code'=>$tour_id)));
		}
	}

	public function executeUpdate_price_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$number_seat_min_tour = $request->getParameter('number_seat_min_tour');
			$number_seat_tour = $request->getParameter('number_seat_tour');
			$price_tour = trim($request->getParameter('price_tour'));
			$creat_trip_add_child_price = $request->getParameter('creat_trip_add_child_price');
			$checkbox_discount_tour_day = $request->getParameter('checkbox_discount_tour_day');
			$checkbox_discount_tour_number = $request->getParameter('checkbox_discount_tour_number');
			$checkbox_booking_fast = $request->getParameter('checkbox_booking_fast');
			$arr_discount_tour_day_add_new = $request->getParameter('arr_discount_tour_day_add_new');

			$arr_price_kid_add_new = $request->getParameter('arr_price_kid_add_new');
			$arr_from_age_add_new = $request->getParameter('arr_from_age_add_new');
			$arr_to_age_add_new = $request->getParameter('arr_to_age_add_new');

			$arr_discount_tour_number_add_new = $request->getParameter('arr_discount_tour_number_add_new');
			$arr_discount_tour_number_discount_number_add_new = $request->getParameter('arr_discount_tour_number_discount_number_add_new');

			$checkbox_price_tour_service = $request->getParameter('checkbox_price_tour_service');
			$arr_title_service_add_new = $request->getParameter('arr_title_service_add_new');
			$arr_price_service_add_new = $request->getParameter('arr_price_service_add_new');

			$payment_type_id = $request->getParameter('payment_type_id');
			$security_deposit = $request->getParameter('security_deposit');
			$type_pricing_service_id = $request->getParameter('type_pricing_service_id');
			if((!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $price_tour)  || $price_tour < 0) && $type_pricing_service_id != '2'){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Giá tiền sai định dạng')));
			}else{
				if($creat_trip_add_child_price){
					$count_arr_price_kid_add_new = count($arr_price_kid_add_new);
					$count_arr_from_age_add_new = count($arr_from_age_add_new);
					$count_arr_to_age_add_new = count($arr_to_age_add_new);
					if($count_arr_price_kid_add_new){
						foreach($arr_from_age_add_new as $key=> $value_from) {
							if($arr_from_age_add_new[$key]['from'] > $arr_to_age_add_new[$key]['to']){
								return $this->renderText(json_encode(array('code'=>1,'msg'=>'Giới hạn tuổi trẻ em phải đặt từ nhỏ đến lớn')));
							}else{
							$tour_discount_kid = TourPriceKidItemPeer::retrieveByPK($value_from['id']);
							$tour_discount_kid->setDiscount($arr_price_kid_add_new[$key]['discount']);
							$tour_discount_kid->setFromAge($value_from['from']);
							$tour_discount_kid->setToAge($arr_to_age_add_new[$key]['to']);
							$tour_discount_kid->save();
							}
						}
					}
				}if($checkbox_discount_tour_day){
					$count_arr_discount_tour_day_add_new = count($arr_discount_tour_day_add_new);
					if($count_arr_discount_tour_day_add_new){

						foreach($arr_discount_tour_day_add_new as $key => $value) {
							$tour_discount = TourDiscountEventPeer::retrieveByPK($value['id']);
							$tour_discount->setDiscount($value['discount']);
							$tour_discount->save();
						}
					}
				}if($checkbox_discount_tour_number){
					$count_arr_discount_tour_number_add_new = count($arr_discount_tour_number_add_new);
					$count_arr_discount_tour_number_discount_number_add_new = count($arr_discount_tour_number_add_new);
					if($count_arr_discount_tour_number_add_new){
						foreach ($arr_discount_tour_number_add_new as $key => $value) {
							$tour_discount = TourDiscountPeer::retrieveByPK($value['id']);
							$tour_discount->setDiscount($value['discount']);
							$tour_discount->save();
						}
					}
					if($count_arr_discount_tour_number_discount_number_add_new){
						foreach ($arr_discount_tour_number_discount_number_add_new as $key => $value) {
							$tour_discount = TourDiscountPeer::retrieveByPK($value['id']);
							$tour_discount->setNumberDiscount($value['number']);
							$tour_discount->save();
						}
					}
				}
				// if($checkbox_price_tour_service){
				// 	$count_arr_title_service_add_new= count($arr_title_service_add_new);
				// 	$count_arr_price_service_add_new = count($arr_price_service_add_new);
				// 	if($count_arr_price_service_add_new){
				// 		foreach($arr_price_service_add_new as $key => $value){
				// 			if(!trim($arr_title_service_add_new[$key]['title'])){
				// 				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa nhập loại dịch vụ đi kèm')));
				// 			}elseif((!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $arr_price_service_add_new[$key]['price'])  || $arr_price_service_add_new[$key]['price'] < 0)){
				// 				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Giá cho dịch vụ đi kèm không đúng')));
				// 			}else{
				// 				$tour_price_service_item = TourPriceServiceItemPeer::retrieveByPK($arr_price_service_add_new[$key]['id']);
				// 				$tour_price_service_item->setTitle($arr_title_service_add_new[$key]['title']);
				// 				$tour_price_service_item->setPrice($arr_price_service_add_new[$key]['price']);
				// 				$tour_price_service_item->save();
				// 			}
				// 		}
				// 	}
				// }
				$tour_detail->setNumberSeatMin($number_seat_min_tour);
				$tour_detail->setNumberSeat($number_seat_tour);
				if($type_pricing_service_id == '1'){
					$tour_detail->setTypePricingServiceId(1);
					$tour_detail->setPrice($price_tour);
				}
				if($type_pricing_service_id == '2'){
					$tour_detail->setTypePricingServiceId(2);
					$tour_detail->setPrice(0);
				}
				$tour_detail->setPaymentTypeId($payment_type_id);
				if($payment_type_id == '2')
				{
					$tour_detail->setSecurityDeposit($security_deposit);
				}
				if($checkbox_booking_fast){
					$tour_detail->setAllowBookingFast(true);
				}
				$tour_detail->save();
				TourDetailPeer::check_update_enable_detail_tour($tour_detail_id);
				$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật chi phí Tour thành công','check_enable_step'=>$check_enable_step['step'])));
			}		
		}
	}

	public function executeUpdate_schedule_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_detail_content = trim($request->getParameter('tour_detail'));
			$img = TourDetailPeer::getImgThumb($tour_detail_id);
			if(!$tour_detail_content){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa nhập nội dung lịch trình')));
			}elseif(!$img) {
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa chọn ảnh cho lịch trình')));
			}else{
				$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
				$tour_detail->setDetail($tour_detail_content);
				$tour_detail->save();
				TourDetailPeer::check_update_enable_detail_tour($tour_detail_id);
				$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật lịch trình cơ bản Tour thành công','check_enable_step'=>$check_enable_step['step'])));
			}
		}
	}

	public function executeUpdate_note_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$tour_note = trim($request->getParameter('tour_note'));
			$policy_price = trim($request->getParameter('policy_price'));
			$policy_ticket = trim($request->getParameter('policy_ticket'));
			if(!$policy_price){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa có chính sách về giá')));
			}elseif (!$policy_ticket) {
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa có chính sách về hủy/hoàn vé')));
			}else{
				$tour_detail->setNote($tour_note);
				$tour_detail->setPolicyPrice($policy_price);
				$tour_detail->setPolicyTicket($policy_ticket);
				$tour_detail->save();
				$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật điều khoản Tour thành công','check_enable_step'=>$check_enable_step['step'])));
			}
		}
	}

	public function executeGetImagesTour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$c = new Criteria();
			$c->addDescendingOrderByColumn(TourItemImgPeer::ID);
			$c->add(TourItemImgPeer::TOUR_DETAIL_ID,$tour_id);
			$rs = TourItemImgPeer::doSelect($c);
			foreach ($rs as $key => $value) {
				$html.= ' <div class="col-md-2 padding_top anh" id="div_img_'.$value->getId().'">
			            <img style="width:100px;height:100px" src="/'.$value->getImages().'"/>
			            <div class="xoa_po">
			                <a id="delete_image-'.$value->getId().'" class="delete_image"><span class="xoa"></span></a>
			            </div>
			        </div>';
			}
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
		}
	}

	public function executeDelete_image_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_item_img_id = $request->getParameter('tour_item_img_id');
			$tour_item_img = TourItemImgPeer::retrieveByPK($tour_item_img_id);
			$path_name = $tour_item_img->getImages();
			unlink($path_name);
			$tour_item_img->delete();
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','div_id' =>$tour_item_img_id)));
		}
	}

	public function executeUpdate_utilities_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$arr_utilities = $request->getParameter('arr_utilities');
			$arr_sorting = $request->getParameter('arr_sorting');
			$arr_activities = $request->getParameter('arr_activities');
			$arr_object_fit = $request->getParameter('arr_object_fit');
			$tour_detail_id = $request->getParameter('tour_id');
			if(!$arr_utilities){
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Bạn chưa chọn tiện ích cho Tour')));
			}elseif(!$arr_object_fit){
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Bạn chưa chọn đối tượng phù hợp cho Tour')));
			}else{
				$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
				$tour_detail->setUtilities(json_encode($arr_utilities));
				$tour_detail->setSorting(json_encode($arr_sorting));
				$tour_detail->setActivities(json_encode($arr_activities));
				$tour_detail->setTourObjectFit(json_encode($arr_object_fit));
				$tour_detail->save();
				$check_enable_step = TourDetailPeer::check_enable_step($tour_detail);
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Cập nhật thông tin bổ sung Tour thành công','check_enable_step'=>$check_enable_step['step'])));
			}
		}
	}

	public function executeSuccess_created($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$u = $this->getUser();
			$user_id = $u->getId();
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			if(!$user->getVerifiedPhone()){
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'ok')));
			}else{
				$tour_detail_id = $request->getParameter('tour_id');
				$check_enable_step = $request->getParameter('check_enable_step');
				$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
				$tour_detail->setSuccessCreated(1);
				$tour_detail->save();
				$url = '/quan-ly-dich-vu.html';
                $user_name = $user->getFullname();
				$url_tour = $tour_detail->getDetailUrlTour();
				$tour_name = $tour_detail->getTitle();
				$url_quanly = 'http://gheptour.vn'.$url;
			  	$mail_template = MailTemplatePeer::mail_tao_tour($user_name,$url_tour,$tour_name,$url_quanly);
                $mail_out_box  = new MailOutbox();
			    $mail_out_box->setSendTo($user->getEmail());
			    $mail_out_box->setSendFrom('admin@gheptour.vn');
			    $mail_out_box->setSendFromName('Gheptour.vn');
			    $mail_out_box->setMessage($mail_template);
			    $mail_out_box->setTitle('Đăng ký Tour từ Gheptour.vn');
                $mail_out_box->save(Propel::getConnection('mail'));
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','url'=>$url)));
			}
		}
	}

  	public function executeCheck_verified_phone($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
			$u = $this->getUser();
			$user_id = $u->getId();
			$acc = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
  			$phone_number = $request->getParameter('phone_number');
  			if($phone_number){
  				$phone_number = myUtil::phoneNumberValidTo84($phone_number);

  				if(!myUtil::isValidPhoneNumber($phone_number)){
  					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Số điện thoại không tồn tại')));
  				}else{
				  	$u = $this->getUser();
	  				$user_id = $u->getId();
	  				if(DichungUserPeer::hasPhone($phone_number, $user_id)){
	  					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Số điện thoại đã được sử dụng bởi 1 tài khoản khác')));
	  				}else{
	  				
	  					$acc->setPhoneNumber($phone_number);
						$acc->setVerifiedPhone(false);
						$acc->save(Propel::getConnection('dichung_new'));
						
	  					if(!$this->getUser()->hasAttribute('mxt', 'verify')) {
							$code = rand(1000, 9999);
							$this->getUser()->setAttribute('mxt', $code, 'verify');
							$msg = 	"dichung Thong Bao: Ma xac nhan cua ban la: ".$code;
							$msg = 	"Gheptour.vn Thong Bao:\n".
									"Ma xac nhan cua ban la: ".$code;
							Propel::getConnection('dichung_taxi')
								->prepareStatement('INSERT INTO driver_msg SET phone_number = \''.$phone_number.'\', message = \''.$msg.'\', created_at = \''.date('Y-m-d H:i:s').'\'')
								->executeQuery();
						}
	  					return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok','phone_number_active'=>myUtil::phoneNumberValidTo0x($phone_number))));
	  				}
  				}
  			}
  			else{
  				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa nhập số điện thoại')));
  			}
  		}
  	}

  	public function executeSubmit_verified_phone($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$ma_xac_thuc = $request->getParameter('ma_xac_thuc');
  			if($ma_xac_thuc){
  				$u = $this->getUser();
  				$user_id = $u->getId();
  				$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
  				$sMxt = $u->getAttribute('mxt', 0, 'verify');
  				if($ma_xac_thuc == $sMxt){
  					$user->setVerifiedPhone(true);
					$user->save(Propel::getConnection('dichung_new'));
					$u->setAttribute('success_change_pass','Xác thực số điện thoại thành công');
					$tour_detail_id = $request->getParameter('tour_id');
					$check_enable_step = $request->getParameter('check_enable_step');
					$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
					$tour_detail->setSuccessCreated(1);
					$tour_detail->save();
					$url = '/quan-ly-dich-vu.html';
					return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','url'=>$url)));
  				}else{
  					return $this->renderText(json_encode(array('code' => 2, 'msg' => 'Mã xác thực không hợp lệ')));
  				}
  			}
			return sfView::NONE;
  		}
  	}

  	public function executeCreate_more_price_kid($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$tour_id = $request->getParameter('tour_id');
  			$from_age = $request->getParameter('from_age');
  			$to_age = $request->getParameter('to_age');
  			$price_kid_add = $request->getParameter('price_kid_add');
  			if(!$price_kid_add){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn mức giảm giá')));
  			}elseif(!$from_age){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn giới hạn độ tuổi giảm giá')));
  			}
  			elseif(!$to_age){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn giới hạn độ tuổi giảm giá')));
  			}elseif($from_age > $to_age){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Giới hạn tuổi trẻ em phải đặt từ nhỏ đến lớn')));
  			}
  			else{
				$tour_price_kid_item = new TourPriceKidItem();
				$tour_price_kid_item->setTourDetailId($tour_id);
				$tour_price_kid_item->setFromAge($from_age);
				$tour_price_kid_item->setToAge($to_age);
				$tour_price_kid_item->setDiscount($price_kid_add);
				$tour_price_kid_item->save();
				$tour_price_kid_item_id = $tour_price_kid_item->getId();
				$html = '  <div class="row box_1x" id="item_coo_price_kid-'.$tour_price_kid_item_id.'">
				  		<div class="col-md-12 col-sm-6">
							<div class="col-md-2 col-sm-6 col-xs-6">
								<select class="form-control" id="price_kid_add_new" name="price_kid_add_new" data-id="'.$tour_price_kid_item_id.'">';
									for($i = 1; $i <= 100; $i++){
										$html.='<option value="'.$i.'" ';
											 if($price_kid_add == $i){
											 	$html.=' selected';
											 }
										$html.= '>'.$i.'%</option>';
									}
				$html.='		</select>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<select class="form-control" id="from_age_add_new" name="from_age_add_new" data-id="'.$tour_price_kid_item_id.'">';
							for($j = 1; $j <= 15; $j++){
								$html.='<option value="'.$j.'" ';
									 if($from_age == $j){
									 	$html.=' selected';
									 }
								$html.= '>'.$j.' tuổi</option>';	
							}
				$html.=			'</select>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<select class="form-control" id="to_age_add_new" name="to_age_add_new" data-id="'.$tour_price_kid_item_id.'">';
							for($k = 1; $k <= 15; $k++){
								$html.='<option value="'.$k.'" ';
									 if($to_age == $k){
									 	$html.=' selected';
									 }
								$html.= '>'.$k.' tuổi</option>';	
							}
				$html.='		</select>
							</div>
							<div class="col-md-2 col-sm-5 col-xs-5 ">
					           <a class="btn btn_orange_outline save delete_price_kid_add_new"  id="delete_price_kid_add_new-'.$tour_price_kid_item_id.'">Xóa</a>
					      	</div>
					      </div>
					</div>';
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
			}
  			
  		}
  	}

  	public function executeDelete_price_kid_add_new($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$price_kid_item_id = trim($request->getParameter('price_kid_item_id'));
  			$price_kid_item = TourPriceKidItemPeer::retrieveByPK($price_kid_item_id);
  			$price_kid_item->delete();
			return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','price_kid_item_id_rp'=>$price_kid_item_id)));  	
  		}
  	}

  	public function executeCreate_new_price_discount_tour_day($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$tour_id = $request->getParameter('tour_id');
  			$select_discount_tour_day = $request->getParameter('select_discount_tour_day');
  			$select_discount_event = $request->getParameter('select_discount_event');
  			$creat_trip_day_discount_start_date = $request->getParameter('creat_trip_day_discount_start_date');
  			$creat_trip_day_discount_end_date = $request->getParameter('creat_trip_day_discount_end_date');
  			$arr_day_discount_start_date_new_add = $request->getParameter('arr_day_discount_start_date_new_add');
  			$arr_day_discount_end_date_new_add = $request->getParameter('arr_day_discount_end_date_new_add');
  			if(!$select_discount_tour_day){
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn mức giảm giá')));
  			}elseif(!$select_discount_event){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn loại sự kiện')));
  			}elseif(!$creat_trip_day_discount_start_date && $select_discount_event){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn ngày bắt đầu sự kiện')));
  			}elseif(!$creat_trip_day_discount_end_date){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn ngày kết thúc sự kiện')));
  			}else{
  				if(count($arr_day_discount_start_date_new_add)){
  					foreach ($arr_day_discount_start_date_new_add as $key => $value) {
  						if((strtotime($creat_trip_day_discount_start_date) >= strtotime($arr_day_discount_start_date_new_add[$key]['start_date'])
  							&& strtotime($creat_trip_day_discount_start_date) <= strtotime($arr_day_discount_end_date_new_add[$key]['end_date'])
  							|| (strtotime($creat_trip_day_discount_end_date) >= strtotime($arr_day_discount_start_date_new_add[$key]['start_date'])
  							&& strtotime($creat_trip_day_discount_end_date) <= strtotime($arr_day_discount_end_date_new_add[$key]['end_date'])))){
							return $this->renderText(json_encode(array('code'=>2,'msg'=>'Khoảng thời gian này đã có sự kiện tăng giảm giá rồi')));
						}
  					}
  				}
  				$tour_discount_event = TourDiscountEventTypePeer::retrieveByPK($select_discount_event);
  				$tour_discount = new TourDiscountEvent();
  				$tour_discount->setTourDetailId($tour_id);
  				$tour_discount->setTourDiscountEventTypeId($select_discount_event);
  				$tour_discount->setName($tour_discount_event->getName());
  				$tour_discount->setValue($tour_discount_event->getValue());
  				$tour_discount->setDiscount($select_discount_tour_day);
  				$tour_discount->setDateStart($creat_trip_day_discount_start_date);
  				$tour_discount->setDateEnd($creat_trip_day_discount_end_date);
  				$tour_discount->save();
  				$tour_discount_id = $tour_discount->getId();

  				$html .= '<div class="row box_1x" id="item_tour_discount_day-'.$tour_discount_id.'">
					<div class="col-md-12 col-sm-6">
						<div class="col-md-2 col-sm-2 col-xs-3 "><select class="form-control" id="select_discount_tour_day_add_new" data-id="'.$tour_discount_id.'">';
				for ($i = 1; $i <= 60; $i++) {
					$html.='<option value="'.$i.'"';
					if($i == $select_discount_tour_day){
						$html.=' selected';
					} 
					$html.=' >Tăng '.$i.'%</option>';
				}	
				for ($i = 1; $i <= 60; $i++) {
					$html.='<option value="'.$i.'"';
					if('-'.$i == $select_discount_tour_day){
						$html.=' selected';
					} 
					$html.=' >Giảm '.$i.'%</option>';
				}				
				$html.='</select></div>';
				$html.= '<div class="col-md-2 col-sm-3 ">
							<select class="form-control" id="select_discount_event_add_new" >
								<option value="'.$tour_discount_event->getValue().'">'.$tour_discount_event->getName().'</option>
							</select>
						</div>';
				$html.='<div class="col-md-3 col-sm-3 ">
							<input value="'.date('d-m-Y',strtotime($creat_trip_day_discount_start_date)).'" readonly style="cursor: -webkit-grab;background-color: white" class="form-control time_" name="day_discount_start_date_new_add" id="day_discount_start_date_new_add"/>
						</div>
						<div class="col-md-3 col-sm-3 ">
							<input value="'.date('d-m-Y',strtotime($creat_trip_day_discount_end_date)).'" readonly  style="cursor: -webkit-grab;background-color: white" class="form-control time_" name="day_discount_end_date_new_add" id="day_discount_end_date_new_add"//>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-3 ">
				            <a class="btn btn_orange_outline save delete_new_price_discount_tour_day"  id="delete_new_price_discount_tour_day-'.$tour_discount_id.'">Xóa</a>
				      	</div>
					</div>
				</div>';
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
  			}
  		}
  	}

  	public function executeDelete_new_price_discount_tour_day($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$item_tour_discount_day_id = $request->getParameter('item_tour_discount_day_id');
  			$item_tour_discount_day = TourDiscountEventPeer::retrieveByPK($item_tour_discount_day_id);
  			$item_tour_discount_day->delete();
			return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','item_tour_discount_day_id_rp'=>$item_tour_discount_day_id)));  	
  		}
  	}

  	public function executeCreate_new_price_discount_tour_number($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$tour_id = $request->getParameter('tour_id');
  			$select_discount_tour_number = $request->getParameter('select_discount_tour_number');
  			$select_number_discount_number = $request->getParameter('select_number_discount_number');
  			if(!$select_discount_tour_number){
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn mức giảm giá')));
  			}elseif(!$select_number_discount_number){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn số lượng mua tối thiểu')));
  			}else{
  				$tour_discount = new TourDiscount();
  				$tour_discount->setTourDetailId($tour_id);
  				$tour_discount->setTourDiscountTypeId(2);
  				$tour_discount->setDiscount($select_discount_tour_number);
  				$tour_discount->setNumberDiscount($select_number_discount_number);
  				$tour_discount->save();
  				$tour_discount_id = $tour_discount->getId();
  				$html .= '<div class="row box_1x" id="item_tour_discount_number-'.$tour_discount_id.'">
					<div class="col-md-12 col-sm-6">
						<div class="col-md-6 col-sm-2 col-xs-3 "><select class="form-control" id="select_discount_tour_number_add_new" data-id="'.$tour_discount_id.'">';
				for($i = 1;$i <= 80; $i++) {
					$html.='<option value="'.$i.'"';
					if($i == $select_discount_tour_number){
						$html.=' selected';
					} 
					$html.=' >'.$i.'%</option>';
				}			
				$html.='</select></div><div class="col-md-4 col-sm-6 col-xs-6"><select class="form-control" id="select_number_discount_number_add_new" data-id="'.$tour_discount_id.'">';
				for($i = 1; $i <= 100; $i++){
					$html.='<option value="'.$i.'"';
					if($i == $select_number_discount_number){
						$html.=' selected';
					} 
					$html.=' >'.$i.' khách</option>';
				}		
				$html.='</select></div><div class="col-md-2 col-sm-3 col-xs-3 ">
				            <a class="btn btn_orange_outline save delete_new_price_discount_tour_number"  id="delete_new_price_discount_tour_number-'.$tour_discount_id.'">Xóa</a>
				      	</div>
					</div>
				</div>';
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
  			}
  		}
  	}

  	public function executeDelete_new_price_discount_tour_number($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$item_tour_discount_number_id = $request->getParameter('item_tour_discount_number_id');
  			$item_tour_discount_number = TourDiscountPeer::retrieveByPK($item_tour_discount_number_id);
  			$item_tour_discount_number->delete();
			return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','item_tour_discount_number_id_rp'=>$item_tour_discount_number_id)));  	
  		}
  	}

  	public function executeAdd_new_price_tour_service($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$tour_id = $request->getParameter('tour_id');
  			$title_service = trim($request->getParameter('title_service'));
  			$price_service = trim($request->getParameter('price_service'));
  			$price_tour = trim($request->getParameter('price_tour'));
  			$type_pricing_service_id = $request->getParameter('type_pricing_service_id');
  			if(!$title_service){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa nhập loại dịch vụ đi kèm')));
  			}elseif(!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $price_service)  || $price_service < 0){
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Giá tiền đi kèm dịch vụ ko đúng')));
  			}elseif(!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $price_tour)  || $price_tour < 0){
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa có giá /khách')));
  			}else{
  				$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
  				$tour_detail->setPrice($price_tour);
  				$tour_detail->setTypePricingServiceId($type_pricing_service_id);
  				$tour_detail->save();
  				$tour_price_service_item = new TourPriceServiceItem();
  				$tour_price_service_item->setTourDetailId($tour_id);
  				$tour_price_service_item->setTitle($title_service);
  				$tour_price_service_item->setPrice($price_service);
  				$price_new = $tour_detail->getPrice() + $price_service;
  				$tour_price_service_item->setPriceNew($price_new);
  				$tour_price_service_item->save();
  				$tour_price_service_item_id = $tour_price_service_item->getId();
  				$html.='<div class="row box_1x" id="item_tour_price_service-'.$tour_price_service_item_id.'">
					<div class="col-md-12 col-sm-6">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<input type="text" class="form-control" value="'.$title_service.'" id="title_service_add_new" data-id="'.$tour_price_service_item_id.'" readonly/>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-4">
							<div class="input-group">
								<input type="text" class="form-control" value="Phụ thu: '.number_format($price_service).'" id="price_service_add_new" data-id="'.$tour_price_service_item_id.'" readonly>

							</div>
						</div>
						<div class="col-md-3 col-sm-4 col-xs-4">
							<div class="input-group">
								<input type="text" class="form-control" value="Giá mới: '.number_format($price_new).'" id="price_sum_service_add_new" data-id="'.$tour_price_service_item_id.'" readonly>
							</div>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-3 ">
			            	 <a class="btn btn_orange_outline save delete_new_price_service_tour"  id="delete_new_price_discount_tour_number-'.$tour_price_service_item_id.'">Xóa</a>
			      		</div>
					</div>
				</div>';
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
  			}
  		}
  	}

 	public function executeDelete_new_price_service_tour($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$item_price_service_tour_id = $request->getParameter('item_price_service_tour_id');
  			$item_price_service_tour = TourPriceServiceItemPeer::retrieveByPK($item_price_service_tour_id);
  			$item_price_service_tour->delete();
			return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','item_price_service_tour_id_rp'=>$item_price_service_tour_id)));  	
  		}
  	}

}
