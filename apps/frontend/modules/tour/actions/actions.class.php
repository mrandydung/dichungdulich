<?php

class tourActions extends sfActions {

    public function executeCreate_trip($request) {
        $u = $this->getUser();
        $user_id = $u->getId();
        if (!$user_id) {
            $this->redirect('@homepage');
        }
        $user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
        $this->partner_id = myUser::get_partner_id();
        if(!$user->check_admin_partner_login() && myUser::get_partner_id() != 1){
            $this->redirect('@homepage');
        }
        $this->time_type = TourTimeTypePeer::getAll();
        $this->type_tour = 1;
        if ($request->isMethod('POST')) {
            $this->errors = array();
            $start_arr = 0;
            $end_arr = 0;
            $coo_end_tmp;
            $this->start = $request->getParameter('start');
            $this->hidden_start = $request->getParameter('hidden_start');
            $this->end = $request->getParameter('end');
            $this->hidden_end = $request->getParameter('hidden_end');
            $this->type_tour = $request->getParameter('radio_tour_type');
            if ($this->start) {
                $start_arr = myGoogleApi::getLatLngFromAddress($this->start);
            }
            $coo_start = 0;
            $coo_end = 0;
            if ($start_arr) {
                $coo_start = $start_arr['coo'];
            }
            if ($this->end) {
                $coo_end_tmp = HomeDiemDenItemPeer::return_coo_end($this->end);
                if ($coo_end_tmp) {
                    $coo_end = $coo_end_tmp->getGooglePosition();
                } else {
                    $coo_end_map = myGoogleApi::getLatLngFromAddress($this->end);
                    $coo_end = $coo_end_map['coo'];
                }
            }
            if (!$coo_end) {
                $this->errors [] = 'Điểm đến không chính xác, bạn vui lòng nhập lại';
            } else {
                list($lat_start, $lng_start) = explode(",", $coo_start);
                list($lat_end, $lng_end) = explode(",", $coo_end);
                $tour_detail = new TourDetail();
                $tour_detail->setUserId($user_id);
                $tour_detail->setStart($this->start);
                $tour_detail->setEnd($this->end);
                $tour_detail->setCooStart($coo_start);
                $tour_detail->setLatStart($lat_start);
                $tour_detail->setLngStart($lng_start);
                $tour_detail->setCooEnd($coo_end);
                $tour_detail->setLatEnd($lat_end);
                $tour_detail->setLngEnd($lng_end);
                $tour_detail->setTimeCategoryDayId(1);
                if ($coo_end_tmp) {
                    $tour_detail->setRegionId($coo_end_tmp->getRegionId());
                }
             
                $tour_detail->setPartnerId($this->partner_id);
                if($this->partner_id != '1'){
                    $this->type_tour = 2;
                }
                $tour_detail->setTourTypeId($this->type_tour);
                $c = new Criteria();
                $c->add(HomeDiemDenItemPeer::NAME, '%' . $this->end . '%', Criteria::LIKE);
                $c->setLimit(1);
                $rs_home = HomeDiemDenItemPeer::doSelect($c);
                if ($rs_home) {
                    foreach ($rs_home as $key => $value) {
                        $home_id = $value->getId();
                        $key_word = $value->getKeyword();
                        $city_id = $value->getCityId();
                        $region_id = $value->getRegionId();
                        $tour_detail->setHomeDiemDenItemId($home_id);
                        $tour_detail->setCityId($city_id);
                        $tour_detail->setKeyword($key_word);
                        $tour_detail->setRegionId($region_id);
                    }
                    $tour_detail->save();

                    $tour_coo_item = new TourCooItem();
                    $tour_coo_item->setTourId($tour_detail->getId());
                    $tour_coo_item->setNameEnd($this->end);
                    $tour_coo_item->setCooEnd($coo_end);
                    $tour_coo_item->setLatEnd($lat_end);
                    $tour_coo_item->setLngEnd($lng_end);
                    $tour_coo_item->setIsEnd(1);
                    $tour_coo_item->save();
                    if ($this->type_tour == '1') {
                        $url = $tour_detail->getDetailUrlPersonal();
                    } else {
                        $url = $tour_detail->getDetailUrl();
                    }
                    $host = $request->getHost();
                    $this->redirect('http://' . $host . $url);
                    }
                }
        }
    }

    public function executeFind($request) {
        $u = $this->getUser();
        $this->pick_address = $request->getParameter('booking_form[pick_address]');
        $this->to_address = trim($request->getParameter('booking_form[to_address]'));
        $this->start_date = $request->getParameter('booking_form[start_date]');
        $this->region_id = $request->getParameter('region_id');
        $this->tour_type_id = $request->getParameter('tour_type_id');
        $this->tour_discount = $request->getParameter('tour_discount');
        $this->tour_featured = $request->getParameter('tour_featured');
        $this->tour_weekend = $request->getParameter('tour_weekend');
        $this->coo_start = 0;
        $this->coo_end = 0;
        $coo_end_map = array();
        $this->page = $request->getParameter('page');
        $this->region_id = $request->getParameter('region_id');
        $seo = $u->getSeo();
        $seo->setTitle('Tour ghép đoàn từ ' . $this->pick_address . ' đến ' . $this->to_address . ' giá rẻ nhất');
        $seo->setDescription('Tour du lịch đi ghép đoàn từ ' . $this->pick_address . ' đến ' . $this->to_address . ' giá rẻ, khởi hành hàng ngày. Dịch vụ đảm bảo uy tín.');
        if ($this->pick_address) {
            $this->coo_start = $request->getParameter('coo_start');
        }
        if ($this->to_address) {
            $coo_end_tmp = HomeDiemDenItemPeer::return_coo_end($this->to_address);
            if ($coo_end_tmp) {
                $this->coo_end = $coo_end_tmp->getGooglePosition();
            } else {
                $coo_end_map = myGoogleApi::getLatLngFromAddress($this->to_address);
                $this->coo_end = $coo_end_map['coo'];
            }
        }
        $tour = TourDetailPeer::find_tour($this->coo_start, $this->to_address, $this->start_date, $this->page, $this->region_id, $this->tour_type_id, $this->tour_discount, $this->tour_featured, $this->tour_weekend);
        $this->find_tour = $tour['tour'];
        $sorting = $tour['sorting'];
        $activities = $tour['activities'];
        $this->count = $tour['count'];
        $this->sorting_hotro = array();
        $this->activities_hotro = array();
        $count_max_sorting = TourSortingPeer::doCount(new Criteria());
        $count_max_activities = TourActivitiesPeer::doCount(new Criteria());
        foreach ($sorting as $key => $value_sorting) {
            if ($value_sorting) {
                foreach ($value_sorting as $key => $val_sorting) {
                    if (isset($val_sorting->id)) {
                        for ($i = 1; $i <= $count_max_sorting; $i++) {
                            if ($val_sorting->id == $i) {
                                $this->sorting_hotro[$i][] = $val_sorting->id;
                            }
                        }
                    }
                }
            }
        }
        foreach ($activities as $key => $value) {
            if ($value) {
                foreach ($value as $key => $val) {
                    if (isset($val->id)) {
                        for ($i = 1; $i <= $count_max_activities; $i++) {
                            if ($val->id == $i) {
                                $this->activities_hotro[$i][] = $val->id;
                            }
                        }
                    }
                }
            }
        }
        $this->pager = $tour['page'];
        $url = $request->getUri();
        $param_page = explode("/", $url);
        $param_page = end($param_page);
        list($this->param, $this->param_last) = explode("?", $param_page);
        $this->offset = ($this->pager->getPage() - 1) * $this->pager->getMaxPerPage() + 1;
        $u->setAttribute('tour_find', $this->find_tour);
    }

    public function executeFilter_select_find($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $select_filter_find_tour = $request->getParameter('select_filter_find_tour');
            $html = '';
            $u = $this->getUser();
            $tour_find = $u->getAttribute('tour_find');
            if ($select_filter_find_tour == '1') {
                $price = array();
                foreach ($tour_find as $key => $row) {
                    $price[$key] = $row['price'];
                }
                array_multisort($price, SORT_NUMERIC, $tour_find);
                $html = TourDetailPeer::return_html_search_select($tour_find);
            }
            if ($select_filter_find_tour == '2') {
                $price = array();
                foreach ($tour_find as $key => $row) {
                    $price[$key] = $row['price'];
                }
                array_multisort($price, SORT_DESC, $tour_find);
                $html = TourDetailPeer::return_html_search_select($tour_find);
            }
            return $this->renderText(json_encode(array('code' => 1, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'])));
        }
    }

    public function executeDetail_tour($request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $u = $this->getUser();
        $this->booking_content = $u->getAttribute('booking_content');
        $u->getAttributeHolder()->remove('booking_content');
        $this->user_id = $u->getId();
        $this->url = $request->getUri();
        $this->tour_id = $request->getParameter('id');
        $this->tour_detail = TourDetailPeer::retrieveByPK($this->tour_id);
        $seo = $u->getSeo();
        $seo->setTitle('Tour ghép ' . $this->tour_detail->getTitleSeo() . ' giá rẻ nhất.');
        $seo->setDescription('Tour du lịch ' . $this->tour_detail->getDescriptionSeo() . ' đi ghép đoàn ' . $this->tour_detail->get_time_category_day_seo() . ' khởi hành hàng ngày từ ' . $this->tour_detail->getStart() . ' đến ' . $this->tour_detail->getEnd() . ' giá rẻ nhất.Dịch vụ đảm bảo, uy tín');
        $seo->setThumb('http://gheptour.vn/' . $this->tour_detail->getImgThumbs());
        $this->user_id_service = DichungUserPeer::retrieveByPK($this->tour_detail->getUserId(), Propel::getConnection('dichung_new'));
        $this->utilities = json_decode($this->tour_detail->getUtilities());
        $this->str_date_now = strtotime(date('Y-m-d'));
        $this->str_date_start = strtotime($this->tour_detail->getDateStart());
        $this->str_date_end = strtotime($this->tour_detail->getDateEnd());
        if ((($this->str_date_now <= $this->str_date_start ) && $this->tour_detail->getTimeTypeId() == '1') || $this->tour_detail->getTimeTypeId() == '2' || $this->tour_detail->getTimeTypeId() == '3') {
            $this->booking_end = 1;
        } else {
            $this->booking_end = 0;
        }
        $this->schedule_day = TourItemScheduleDayPeer::get_all_schedule_day($this->tour_id);
        $this->date_week_arr = explode(",", $this->tour_detail->getDayInWeek());
        $this->count = count($this->date_week_arr);
        $this->img_slide = TourItemImgPeer::get_img_slide($this->tour_id);
        $this->user_join = BookingTourPeer::get_user_join($this->tour_id);
        $this->comment_tour = CommentTourPeer::getAll($this->tour_id);
    }

    public function executeDetail_tour_preview($request) {
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $this->tour_id = $request->getParameter('id');
        $this->tour_detail = TourDetailPeer::retrieveByPK($this->tour_id);
        if ($this->user_id != $this->tour_detail->getUserId()) {
            $this->redirect('@homepage');
        }
        $this->user_id_service = DichungUserPeer::retrieveByPK($this->tour_detail->getUserId(), Propel::getConnection('dichung_new'));
        $this->utilities = json_decode($this->tour_detail->getUtilities());
        $this->str_date_now = strtotime(date('Y-m-d'));
        $this->str_date_start = strtotime($this->tour_detail->getDateStart());
        $this->str_date_end = strtotime($this->tour_detail->getDateEnd());
        $this->date_week_arr = explode(",", $this->tour_detail->getDayInWeek());
        $this->count = count($this->date_week_arr);
        $this->img_slide = TourItemImgPeer::get_img_slide($this->tour_id);
        $this->user_join = BookingTourPeer::get_user_join($this->tour_id, $this->tour_detail->getId());
    }

    public function executeCal_money_tour($request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $tour_detail_id = $request->getParameter('tour_detail_id');
            $select_service_tour = $request->getParameter('select_service_tour');
            $date_picker = $request->getParameter('date_picker');
            $select_adult = $request->getParameter('select_adult');
            $arr_kid = $request->getParameter('arr_kid');
            $tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
            $submit_booking_tour = $request->getParameter('submit_booking_tour');
            $price = $tour_detail->getPrice();
            $price_new = $price;
            if ($select_service_tour) {
                $tour_price_service_item = TourPriceServiceItemPeer::retrieveByPK($select_service_tour);
                $price_new = $price + $tour_price_service_item->getPrice();
                $tour_price_service_name = $tour_price_service_item->getTitle();
            }
            $price_kid_arr = array();
            $price_kid_number_arr = array();
            if (count($arr_kid)) {
                foreach ($arr_kid as $key => $value) {
                    $kid_item_id = $value['id'];
                    $tour_price_kid_item = TourPriceKidItemPeer::retrieveByPK($kid_item_id);
                    $price_kid_arr [] = ($price_new - ($price_new * $tour_price_kid_item->getDiscount()) / 100) * $value['number'];
                    $price_kid_number_arr [] = $value['number'];
                }
            }
            $price_kid = array_sum($price_kid_arr);
            $total_price = ($price_new * $select_adult) + $price_kid;
            $number_booking = $select_adult;
            $number_random = rand(1, 10000);
            $total_cal_price_tmp = TourDiscountPeer::getCal_discount($tour_detail_id, $date_picker, $number_booking, $total_price, $price_new);
            $total_cal_price = $total_cal_price_tmp['cal_total_price'];
            $price_new_cal = $total_cal_price_tmp['price_new'];
            $booking_content = array('number_booking' => $number_booking, 'tour_price_service_name' => $tour_price_service_name, 'sum_kid' => array_sum($price_kid_number_arr), 'total_cal_price' => $total_cal_price, 'tour_detail' => $tour_detail, 'date_picker' => $date_picker, 'select_adult' => $select_adult, 'code_transaction' => $number_random);
            if ($submit_booking_tour == '1') {
                $u = $this->getUser();
                $u->setAttribute('booking_content', $booking_content);
                sfLoader::loadHelpers('Url');
                $url = url_for('@bookingTour');
                return $this->renderText(json_encode(array('code' => 2, 'msg' => 'ok', 'url' => $url)));
            } else {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'ok', 'price' => number_format($total_cal_price) . ' Đ', 'price_new' => number_format($price_new_cal))));
            }
        }
    }

    public function executeChangeTimeType($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $tour_time_type = $request->getParameter('tour_time_type');
            $html = '';
            if ($tour_time_type == '1') {
                $html = TourTimeTypePeer::creat_trip_step1_fix_start();
            }
            if ($tour_time_type == '2') {
                $html = TourTimeTypePeer::creat_trip_step1_daily_start();
            }
            if ($tour_time_type == '3') {
                $html = TourTimeTypePeer::creat_trip_step1_weekly_start();
            }
            return $this->renderText(json_encode(array('code' => 1, 'msg' => 'ok', 'html' => $html)));
        }
    }

    public function executeUpload($request) {
        if (isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $tour_id = $request->getParameter('tour_id');
            $html = '';
            $file = $_FILES['image_file'];
            $image_name = $_FILES['image_file']['name']; //file name
            $temp = explode(".", $image_name);
            $extension = strtolower(end($temp));
            $image_size = $_FILES['image_file']['size']; //file size
            $image_temp = $_FILES['image_file']['tmp_name']; //file tem
            $file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') . "/folder/" . time() . '_' . $image_name;
            if (move_uploaded_file($_FILES['image_file']['tmp_name'], $file_url)) {
                // $get_file = file_get_contents('http://dichung.vn/thumbnail/index.php?src='.$file_url.'&w=640&h=320&zc=1&q=100');
                $path_name = 'uploads/folder/' . time() . '_' . $image_name;
                $html.='<div class="col-md-2 padding_top anh" id="div_img_' . $tour_id . '">
							<img style="width:100px;height:100px" src="/' . $path_name . '"/>
							<div class="xoa_po">
								<a id="delete_image-' . $tour_id . '" class="delete_image"><span class="xoa"></span></a>
						</div>';
                $tour_img = new TourItemImg();
                $tour_img->setImages($path_name);
                $tour_img->setTourDetailId($tour_id);
                $tour_img->save();
                return $this->renderText($html);
            }
            return $this->renderText('Upload Lỗi');
        }
    }

    public function executeSubmit_rating($request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $u = $this->getUser();
            $user_id = $u->getId();
            $rating_tongthe = $request->getParameter('rating_tongthe');
            $tour_id = $request->getParameter('tour_id');
            $content_comment = trim($request->getParameter('content_comment'));
            if (!$content_comment) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Bạn chưa nhập nhận xét')));
            } else {
                $comment_tour = new CommentTour();
                $comment_tour->setTourId($tour_id);
                $comment_tour->setUserId($user_id);
                $comment_tour->setComment($content_comment);
                $comment_tour->setRating($rating_tongthe);
                $comment_tour->save();
                return $this->renderText(json_encode(array('code' => 2, 'msg' => 'ok')));
            }
        }
    }

    public function executeText_search($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $text_search = trim($request->getParameter('text_search'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($text_search));
            $c = new Criteria();
            $c->add(TourDetailPeer::TITLE, "%" . $terms . "%", Criteria::LIKE);
            $c->addSelectColumn(TourDetailPeer::TITLE);
            $rs = TourDetailPeer::doSelectRs($c);
            $arr = array();
            while ($rs->next()) {
                $arr [] = mb_strtolower($rs->get(1), 'UTF-8');
                ;
            }
            return $this->renderText(json_encode($arr));
        }
    }

    public function executeSubmit_search_key($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $text_search = $request->getParameter('text_search');
            $tour = TourDetailPeer::get_tour_by_text_search($text_search);

            if ($tour) {
                $html = TourDetailPeer::return_html_search_select($tour);
                return $this->renderText(json_encode(array('code' => 1, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'])));
            } else {
                return $this->renderText(json_encode(array('code' => 2, 'msg' => 'Không tìm thấy kết quả nào')));
            }
        }
    }

}
