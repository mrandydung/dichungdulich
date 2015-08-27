<?php
class trip_manager_personalActions extends sfActions
{
	public function executeIndex($request)
	{
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
		$count_user_tour = TourDetailPeer::doCount($c);
		if(!$count_user_tour){
			$this->redirect('@homepage');
		}
		$this->tour_detail = TourDetailPeer::retrieveByPK($this->tour_id);
	
		if($this->tour_detail->getTourTypeId() != '1'){
			$this->redirect('@homepage');
		}
		$this->check_enable_step = TourDetailPeer::check_enable_step_personal($this->tour_detail);
		$this->time_type = TourTimeTypePeer::getAll();
		$c = new Criteria();
		$c->add(TourDiscountPeer::TOUR_DETAIL_ID,$this->tour_detail->getId());
		$c->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID,1);
		$this->count_discount_day = TourDiscountPeer::doCount($c);
		if($this->count_discount_day){
			$this->discount_day = TourDiscountPeer::doSelectOne($c);
		}
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
		$this->option_gender =  json_decode($this->tour_detail->getTourOptionGender());
		$this->activities = json_decode($this->tour_detail->getActivities());
		$this->scheduled_cost = ScheduledCostTourPeer::getAll($this->tour_id);
		$this->sum_price_scheduled = ScheduledCostTourPeer::get_all_price_schedule($this->scheduled_cost);
		$this->tour_coo_item = TourCooItemPeer::get_all_by_tour_id($this->tour_id);
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
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_time_type = 1;
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$tour_title = trim($request->getParameter('tour_title'));
			$tour_description = trim($request->getParameter('tour_description'));
			$tour_detail->setTitle($tour_title);
			$tour_detail->setTitleSeo(strip_tags($tour_title,''));
			$tour_detail->setDescription($tour_description);
			$tour_detail->setDescriptionSeo(strip_tags($tour_description,''));
			if(strlen($tour_title) < 6){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Tiêu đề tour quá ngắn')));
			}
			if(strlen($tour_title) < 6){
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
					$tour_detail->setId($tour_detail_id);
					$tour_detail->setTimeTypeId(1);
					$tour_detail->setDateStart($creat_trip_form_fix_start_start_date);
					$tour_detail->setDateEnd($creat_trip_form_fix_start_end_date);
					$tour_detail->setHourStart($creat_trip_form_fix_start_start_hour);
					$time_category_day_change= (int)(strtotime($creat_trip_form_fix_start_end_date) - strtotime($creat_trip_form_fix_start_start_date))/86400 + 1;
					if($time_category_day_change >= 20){
						return $this->renderText(json_encode(array('code'=>1,'msg'=>'Thời gian tour kéo dài không quá 20 ngày')));
					}
					$tour_detail->setTimeCategoryDayId($time_category_day_change);
					$tour_detail->save();
					TourDetailPeer::check_update_enable_detail_tour($tour_detail_id);
					$check_enable_step = TourDetailPeer::check_enable_step_personal($tour_detail);
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật Thông tin Tour thành công','check_enable_step'=>$check_enable_step['step'])));
				}
			}
		
			return $this->renderText(json_encode(array('code'=>$tour_detail_id)));
		}
	}

	

	public function executeUpdate_schedule_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$tour_detail_content = trim($request->getParameter('tour_detail'));
			$arr_end_new = $request->getParameter('arr_end_new');
			$start = $request->getParameter('start');
			$end = $request->getParameter('end');
			$img = TourDetailPeer::getImgThumb($tour_id);
			$count_scheduled = TourItemScheduleDayPeer::count_scheduled($tour_id);
			$count_img_scheduled_day = TourItemImgScheduleDayPeer::count_img_schedule_day($tour_id);
			if(!$tour_detail_content && !$count_scheduled){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa nhập nội dung lịch trình. <br>Bạn có thể nhập nội dung lịch trình cơ bản hoặc nội dung lịch trình theo ngày')));
			}elseif(!$img && !$count_img_scheduled_day) {
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa có ảnh cho lịch trình. <br>Bạn cần nhập tối thiểu 1 ảnh theo lịch trình cơ bản hoặc lịch trình chi tiết')));
			}elseif(!$end){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa nhập điểm đến')));
			}else{
				$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
				$coo_tmp = myGoogleApi::get_start_end_by_address($start,$end);
				$coo_start = $coo_tmp['coo_start'];
				$coo_end = $coo_tmp['coo_end'];
				$tour_detail->setDetail($tour_detail_content);
				list($lat_start,$lng_start) = explode(",",$coo_start);
				list($lat_end,$lng_end) = explode(",",$coo_end);
				if($end != $tour_detail->getEnd()){
					$c = new Criteria();
					$c->add(HomeDiemDenItemPeer::NAME,'%'.$end.'%',Criteria::LIKE);
					$c->setLimit(1);
					$rs_home = HomeDiemDenItemPeer::doSelect($c);
					if($rs_home){
						foreach ($rs_home as $key => $value) {
							$home_id = $value->getId();
							$key_word = $value->getKeyword();
							$city_id = $value->getCityId();
							$tour_detail->setHomeDiemDenItemId($home_id);
							$tour_detail->setCityId($city_id);
							$tour_detail->setKeyword($key_word);
						}
					}
				}
				$tour_detail->setStart($start);
				$tour_detail->setEnd($end);
				$tour_detail->setCooStart($coo_start);
				$tour_detail->setLatStart($lat_start);
				$tour_detail->setLngStart($lng_start);
				$tour_detail->setCooEnd($coo_end);
				$tour_detail->setLatEnd($lat_end);
				$tour_detail->setLngEnd($lng_end);
				$tour_detail->save();
				TourDetailPeer::check_update_enable_detail_tour($tour_id);
				if($end != $tour_detail->getEnd()){
					$tour_coo_item_end_id = TourCooItemPeer::get_one_end($tour_id);
					$tour_coo_item_end = TourCooItemPeer:: retrieveByPK($tour_coo_item_end_id);
					$tour_coo_item_end->setNameEnd($end);
					$tour_coo_item_end->setCooEnd($coo_end);
					$tour_coo_item_end->setLatEnd($lat_end);
					$tour_coo_item_end->setLngEnd($lng_end);
					$tour_coo_item_end->save();
				}
				$check_enable_step = TourDetailPeer::check_enable_step_personal($tour_detail);
				$count_arr_end_new = count($arr_end_new);
				if($count_arr_end_new){
					foreach ($arr_end_new as $key => $value) {
						 $tour_coo_item = TourCooItemPeer::retrieveByPK($value['id']);
						 $tour_coo_item->setNameEnd($value['name_end']);
						 $coo_name_end = myGoogleApi::getLatLngFromAddress($value['name_end']);
						 $tour_coo_item->setCooEnd($coo_name_end['coo']);
					 	 $tour_coo_item->setLatEnd($coo_name_end['lat']);
				 	 	 $tour_coo_item->setLngEnd($coo_name_end['lng']);
						 $tour_coo_item->save();
					}
				}
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật lịch trình Tour thành công','check_enable_step'=>$check_enable_step['step'])));
			}
		}
	}

	public function executeAdd_new_end($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$end = trim($request->getParameter('end'));
  			$tour_id = $request->getParameter('tour_id');
  			$coo_end = 0;
  			if(!$end){
  				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa nhập điểm đến')));
  			}else{
				$coo_end_tmp = HomeDiemDenItemPeer::return_coo_end($end);
				if($coo_end_tmp){
					$coo_end = $coo_end_tmp->getGooglePosition();
				}else{
					$coo_end_map = myGoogleApi::getLatLngFromAddress($end);
					$coo_end = $coo_end_map['coo'];
				}
				if(!$coo_end){
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'Điểm đến không tồn tại, bạn vui lòng nhập lại')));
				}else{
					$tour_coo_item = new TourCooItem();
					$tour_coo_item->setTourId($tour_id);
					$tour_coo_item->setNameEnd($end);
					$tour_coo_item->setCooEnd($coo_end);
					list($lat_end,$lng_end) = explode(",",$coo_end);
					$tour_coo_item->setLatEnd($lat_end);
					$tour_coo_item->setLngEnd($lng_end);
					$tour_coo_item->setIsEnd(0);
					$tour_coo_item->save();
					$tour_coo_item_id = $tour_coo_item->getId();
					$html = '<div class="row box_1x" id="item_coo_'.$tour_coo_item_id.'">
						<div class="col-md-12 col-sm-6">
			             <div class="col-md-2 padding_top">
			                <p><strong></strong></p>
			             </div>
			             <div class="col-md-6 ">
			                <input type="text" class="form-control b_" placeholder="Nhập điểm đến" data-id="'.$tour_coo_item_id.'" id="end_new_item" name="end_new_item" value="'.$end.'">
			             </div>
			             <div class="col-md-2 col-sm-5 col-xs-5 ">
			                    <a class="btn btn_orange_outline save delete_new_end" id="delete_new_end-'.$tour_coo_item_id.'">Xóa</a>
			              </div>
			        	</div></div>';
		        	return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','html'=>$html)));  	
				}
	  		
  			}
  		}
  	}

  	public function executeDelete_new_end($request){
  		$rsAjax = $request->isXmlHttpRequest();
  		if($rsAjax){
  			$coo_item_id = trim($request->getParameter('coo_item_id'));
  			$tour_coo_item = TourCooItemPeer::retrieveByPK($coo_item_id);
  			$tour_coo_item->delete();
			return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','coo_item_id_rp'=>$coo_item_id)));  	
  		}
  	}

	public function executeUpdate_note_tour($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$tour_note = trim($request->getParameter('tour_note'));

			if(!$tour_note){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa thông tin chú ý ')));
			
			}else{
				$tour_detail->setNote($tour_note);
				$tour_detail->save();
				$check_enable_step = TourDetailPeer::check_enable_step_personal($tour_detail);
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
			$arr_option_gender = $request->getParameter('arr_option_gender');
			$arr_activities = $request->getParameter('arr_activities');
			$tour_detail_id = $request->getParameter('tour_id');
			if(!$arr_option_gender){
				return $this->renderText(json_encode(array('code'=>'2','msg'=>'Bạn chưa chọn người muốn đi cùng')));
			}else{
				$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
				$tour_detail->setUtilities(json_encode($arr_utilities));
				$tour_detail->setSorting(json_encode($arr_sorting));
				$tour_detail->setActivities(json_encode($arr_activities));
				$tour_detail->setTourOptionGender(json_encode($arr_option_gender));
				$tour_detail->save();
				$tour = TourPeer::retrieveByPK($tour_id);
				$check_enable_step = TourDetailPeer::check_enable_step_personal($tour_detail);
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

	public function executeAdd_new_price($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$creat_trip_costs = $request->getParameter('creat_trip_costs');
			$creat_trip_price = trim($request->getParameter('creat_trip_price'));
			$creat_trip_price_decription = trim($request->getParameter('creat_trip_price_decription'));			
			if(!$creat_trip_costs){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa chọn loại chi phí')));
			}elseif(!$creat_trip_price || !preg_match('/^[0-9]*$/', $creat_trip_price) ){
				return $this->renderText(json_encode(array('code'=>'1','msg'=>'Giá tiền dự kiến ko hợp lệ')));
			}else{
				$count_exist_scheduled = ScheduledCostTourPeer::count_exist($tour_id,$creat_trip_costs);
				if($count_exist_scheduled){
					return $this->renderText(json_encode(array('code'=>'1','msg'=>'Có thông tin về loại chi phí này rồi')));
				}else{
					$scheduled_cost_tour = new ScheduledCostTour();
					$scheduled_cost_tour->setTourId($tour_id);
					$scheduled_cost_tour->setSuggestCostCategoryId($creat_trip_costs);
					$scheduled_cost_tour->setPrice($creat_trip_price);
					$scheduled_cost_tour->setDescription($creat_trip_price_decription);
					$scheduled_cost_tour->save();
					$suggest_cost_category = SuggestCostCategoryPeer::retrieveByPK($creat_trip_costs);
					$suggest_cost_category_name = $suggest_cost_category->getName();
					$html .= 	'<div class="row box_1x_" id="value_pricing-'.$scheduled_cost_tour->getId().'">
							        <div class="col-md-3 col-sm-3 col-xs-6 padding_top">
							            <select class="form-control " name="creat_trip_costs[add_cost_new]" readonly style="cursor:-webkit-grab">
							                <option>'.$suggest_cost_category_name.'</option>
							            </select>
							        </div>
							        <div class="col-md-3 col-sm-3 col-xs-5 padding_top">
							            <div class="input-group">
							                <input type="text" class="form-control" data-id="'.$scheduled_cost_tour->getId().'" name="price_new" id="price_new" value="'.$creat_trip_price.'">
							                <span class="input-group-addon">VNĐ</span>
							            </div>
							        </div>
							        <div class="col-md-5 col-sm-5 col-xs-11 padding_top">
							            <input class="form-control" name="creat_trip_costs[add_price_decription]" id="creat_trip_costs_add_price_decription" value="'.$creat_trip_price_decription.'"/>
							        </div>
							        <div class="col-md-1 col-sm-1 col-xs-1 padding_top">
							            <a class="btn btn_orange_outline save delete_price"  id="delete_price-'.$scheduled_cost_tour->getId().'">Xóa</a>
							        </div>
							    </div>';
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'ok','html'=>$html)));
				}
				
			}
		}
	}

	public function executeDelete_new_price($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$scheduled_cost_tour_id = $request->getParameter('scheduled_cost_tour_id');
			$scheduled_cost_tour = ScheduledCostTourPeer::retrieveByPK($scheduled_cost_tour_id);
			$scheduled_cost_tour->delete();
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','scheduled_cost_tour_id'=>$scheduled_cost_tour_id)));
		}
	}

	public function executeUpdate_price_personal($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_detail_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$sum_number_seat = trim($request->getParameter('sum_number_seat'));
			$number_seat_tour = trim($request->getParameter('number_seat_tour'));
			$price_tour = trim($request->getParameter('price_tour'));
			$type_pricing = $request->getParameter('type_pricing');
			$arr_schedule = $request->getParameter('arr_schedule');
			$payment_type_id = $request->getParameter('payment_type_id');
			$checkbox_booking_fast = $request->getParameter('checkbox_booking_fast');
	 		if(!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $number_seat_tour)  || $number_seat_tour < 0 || !$number_seat_tour){
	 			return $this->renderText(json_encode(array('code'=>1,'msg'=>'Số chỗ còn trống không đúng')));
	 		}
	 		else{
	 			if($type_pricing == '1'){
	 				if(!preg_match('/^0$|^[-]?[1-9][0-9]*$/', $price_tour)  || $price_tour < 0){
	 					return $this->renderText(json_encode(array('code'=>1,'msg'=>'Giá tiền đề xuất/chỗ sai định dạng')));
	 				}
	 			}else{
	 				$price_tour = 0;
	 			}
	 			if(preg_match('/^0$|^[-]?[1-9][0-9]*$/', $sum_number_seat)  && $sum_number_seat > 0 && $sum_number_seat){
	 				$tour_detail->setSumNumberSeat($sum_number_seat);
	 			}
	 			$tour_detail->setNumberSeat($number_seat_tour);
	 			$tour_detail->setTypePricingId($type_pricing);
	 			$tour_detail->setPrice($price_tour);
	 			$tour_detail->setPaymentTypeId($payment_type_id);
	 			if($checkbox_booking_fast){
					$tour_detail->setAllowBookingFast(true);
				}
	 			$tour_detail->save();
	 			$check_enable_step = TourDetailPeer::check_enable_step_personal($tour_detail);
				$count_arr_schedule = count($arr_schedule);
				$test = array();
				if($count_arr_schedule){
					foreach ($arr_schedule as $key => $value) {
						 $scheduled_cost = ScheduledCostTourPeer::retrieveByPK($value['id']);
						 $scheduled_cost->setPrice($value['price']);
						 $scheduled_cost->save();
					}
				}
	 			return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật chi phí Tour cá nhân thành công','arr_schedule'=>$test,'check_enable_step'=>$check_enable_step['step'])));
	 		}
			
		}
	}
}
