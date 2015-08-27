<?php

class TourDetailPeer extends BaseTourDetailPeer {

    public static function get_url_find_tour(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@findTour') : url_for('@findTour_en');
    }

    public static function get_url_detail_tour($title,$id){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@detailTour?name=' . myUtil::strToSlug($title) . '&id=' . $id) : url_for('@detailTour_en?name=' . myUtil::strToSlug($title) . '&id=' . $id);

    }

    public static function cal_price($price_tour_search, $c) {
        if ($price_tour_search == '1') {
            $c->add(self::PRICE, 1000000, Criteria::LESS_THAN);
        }
        if ($price_tour_search == '2') {
            $c->add(self::PRICE, 1000000, Criteria::GREATER_EQUAL)->addAnd(self::PRICE, 2000000, Criteria::LESS_EQUAL);
        }
        if ($price_tour_search == '3') {
            $c->add(self::PRICE, 2000000, Criteria::GREATER_EQUAL)->addAnd(self::PRICE, 3000000, Criteria::LESS_EQUAL);
        }
        if ($price_tour_search == '4') {
            $c->add(self::PRICE, 3000000, Criteria::GREATER_EQUAL)->addAnd(self::PRICE, 4000000, Criteria::LESS_EQUAL);
        }
        if ($price_tour_search == '5') {
            $c->add(self::PRICE, 4000000, Criteria::GREATER_EQUAL)->addAnd(self::PRICE, 5000000, Criteria::LESS_EQUAL);
        }
        if ($price_tour_search == '6') {
            $c->add(self::PRICE, 5000000, Criteria::GREATER_EQUAL)->addAnd(self::PRICE, 6000000, Criteria::LESS_EQUAL);
        }
        if ($price_tour_search == '7') {
            $c->add(self::PRICE, 6000000, Criteria::GREATER_EQUAL);
        }
    }

    public static function getMinMaxCoo($coo) {
        list($lat, $lng) = explode(",", $coo);
        $radius = 50;
        $range = 0.325 * $radius; //0.325 ~ 1km
        $lat_range = $range / 69.172;
        $lon_range = abs($range / (cos($lat) * 69.172));
        $min_lat = number_format($lat - $lat_range, "4", ".", "");
        $max_lat = number_format($lat + $lat_range, "4", ".", "");
        $min_lon = number_format($lng - $lon_range, "4", ".", "");
        $max_lon = number_format($lng + $lon_range, "4", ".", "");
        return array('min_lat' => $min_lat, 'max_lat' => $max_lat, 'min_lon' => $min_lon, 'max_lon' => $max_lon);
    }

    public static function get_tour_set_on_home_page() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLED, 1);
        $c->add(self::ON_HOMEPAGE, true);
        $c->add(self::PARTNER_ID,  myUser::get_partner_id());
        $c->setLimit(10);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url = self::get_url_detail_tour($title,$id);
            $url_user = $user->getDetailUrlDefault();
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $type_pricing_id = $rs->get(13);
            $type_pricing_service_id = $rs->get(14);
            if ($type_pricing_service_id == '1') {
                    $price = number_format($price) . ' Đ';
            }
            if ($type_pricing_service_id == '2') {
                $price =  LangPeer::getText('Liên Hệ');
            }

            $discount = 0;
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking, 'discount' => $discount);
        }
        $url_forward = self::get_url_find_tour().'?tour_type_id=1';
        return array('tour' => $arr, 'url_forward' => $url_forward);
    }

    public static function get_tour_ua_chuong() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLED, true);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::TOUR_FAVOURITE, true);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = url_for('@user_profile_default?name=' . myUtil::strToSlug($fullname) . '&user_id=' . $user_id);
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking);
        }
        return $arr;
    }

    public static function get_tour_mien_phi() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::ENABLED, true);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::TYPE_PRICING_ID, 2);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = url_for('@user_profile_default?name=' . myUtil::strToSlug($fullname) . '&user_id=' . $user_id);
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking);
        }
        return $arr;
    }

    public static function get_tour_giam_gia() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, true);
        $criterion_tour = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion_tour->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion_tour->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion_tour);
        $c->addJoin(self::ID, TourDiscountPeer::TOUR_DETAIL_ID);
        $criterion = $c->getNewCriterion(TourDiscountPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDiscountPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, 2));
        $c->add($criterion);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $c->addSelectColumn(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID);
        $c->addSelectColumn(TourDiscountPeer::DISCOUNT);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = url_for('@user_profile_default?name=' . myUtil::strToSlug($fullname) . '&user_id=' . $user_id);
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $discount = $rs->get(14);
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking, 'discount' => $discount);
        }
        $url_forward = self::get_url_find_tour().'?tour_discount=1';
        return array('tour' => $arr, 'url_forward' => $url_forward);
    }

    public static function get_tour_cuoi_tuan() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::TOUR_WEEKEND, true);
        $criterion_tour = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion_tour->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion_tour->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion_tour);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $c->addSelectColumn(self::TOUR_TYPE_ID);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = $user->getDetailUrlDefault();
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $tour_type_id = $rs->get(13);
            if ($tour_type_id == '1') {
                $type_pricing_id = $rs->get(14);
                if ($type_pricing_id == '1') {
                    $price = number_format($price) . ' Đ';
                }
                if ($type_pricing_id == '2') {
                    $price = LangPeer::getText('Miễn Phí');
                }
                if ($type_pricing_id == '3') {
                    $price = LangPeer::getText('Liên Hệ');
                }
            }
            if ($tour_type_id == '2') {
                $type_pricing_service_id = $rs->get(15);
                if ($type_pricing_service_id == '1') {
                    $price = number_format($price) . ' Đ';
                }
                if ($type_pricing_service_id == '2') {
                    $price =  LangPeer::getText('Liên Hệ');
                }
            }
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking);
        }
        $url_forward = self::get_url_find_tour().'?tour_weekend=1';
        return array('tour' => $arr, 'url_forward' => $url_forward);
    }

    public static function get_tour_ca_nhan() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::TOUR_TYPE_ID, 1);
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = $user->getDetailUrlDefault();
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $type_pricing_id = $rs->get(13);
            if ($type_pricing_id == '1') {
                $price = number_format($price) . ' Đ';
            }
            if ($type_pricing_id == '2') {
                $price = LangPeer::getText('Miễn Phí');
            }
            if ($type_pricing_id == '3') {
                $price =  LangPeer::getText('Liên Hệ');
            }

            $discount = 0;
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking, 'discount' => $discount);
        }
        $url_forward = self::get_url_find_tour().'?tour_type_id=1';
        return array('tour' => $arr, 'url_forward' => $url_forward);
    }


    public static function get_tour_doc_dao() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::TOUR_FEATURED, true);
        $c->setLimit(5);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::NUMBER_SEAT_BOOKING);
        $c->addSelectColumn(self::TOUR_TYPE_ID);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $rs = self::doSelectRs($c);
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $id = $rs->get(1);
            $title = $rs->get(2);
            $description = $rs->get(3);
            $img_thumb = 'http://gheptour.vn/thumbnail/index.php?src=' . self::getImgThumb($id) . '&w=310&h=200&q=100';
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $user_id = $rs->get(4);
            $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            $fullname = $user->getFullname();
            $url =  self::get_url_detail_tour($title,$id);
            $url_user = $user->getDetailUrlDefault();
            $time_type_id = $rs->get(5);
            $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
            $date_start = $rs->get(7);
            $date_end = $rs->get(8);
            $day_in_week = $rs->get(9);
            $price = $rs->get(10);
            $number_seat = $rs->get(11);
            $number_seat_booking = $rs->get(12);
            $tour_type_id = $rs->get(13);
            if ($tour_type_id == '1') {
                $type_pricing_id = $rs->get(14);
                if ($type_pricing_id == '1') {
                    $price = number_format($price) . ' Đ';
                }
                if ($type_pricing_id == '2') {
                    $price = LangPeer::getText('Miễn Phí');
                }
                if ($type_pricing_id == '3') {
                    $price =  LangPeer::getText('Liên Hệ');
                }
            }
            if ($tour_type_id == '2') {
                $type_pricing_service_id = $rs->get(15);
                if ($type_pricing_service_id == '1') {
                    $price = number_format($price) . ' Đ';
                }
                if ($type_pricing_service_id == '2') {
                    $price =  LangPeer::getText('Liên Hệ');
                }
            }
            $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat, 'number_seat_booking' => $number_seat_booking);
        }
        $url_forward = self::get_url_find_tour().'?tour_featured=1';
        return array('tour' => $arr, 'url_forward' => $url_forward);
    }

    public static function find_tour($coo_start, $end, $start_date, $page, $region_id, $tour_type_id, $tour_discount, $tour_featured, $tour_weekend) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $arr = array();
        $arr_all = array();
        $utilities_arr = array();
        $sorting_arr = array();
        $activities_arr = array();
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $partner_id = myUser::get_partner_id();
        if ($partner_id != '1') {
            $c->add(self::PARTNER_ID,$partner_id);
        }
        if ($coo_start) {
            $arr_coo_start = self::getMinMaxCoo($coo_start);
            if (count($arr_coo_start) !== '0') {
                $min_lat_start = $arr_coo_start['min_lat'];
                $max_lat_start = $arr_coo_start['max_lat'];
                $min_lon_start = $arr_coo_start['min_lon'];
                $max_lon_start = $arr_coo_start['max_lon'];
                $c->add(self::LAT_START, $min_lat_start, Criteria::GREATER_EQUAL);
                $c->addAnd(self::LAT_START, $max_lat_start, Criteria::LESS_EQUAL);
                $c->add(self::LNG_START, $min_lon_start, Criteria::GREATER_EQUAL);
                $c->addAnd(self::LNG_START, $max_lon_start, Criteria::LESS_EQUAL);
            }
        }
        if ($start_date) {
            $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($start_date), Criteria::CUSTOM);
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
            $c->add($criterion);
        } else {
            $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
            $c->add($criterion);
        }
        if ($end) {
            $c->add(self::KEYWORD, '%' . $end . '%', Criteria::LIKE);
        }
        if ($region_id) {
            $c->add(self::REGION_ID, $region_id);
        }
        if ($tour_type_id) {
            $c->add(self::TOUR_TYPE_ID, 1);
        }
        if ($tour_discount) {
            $c->addJoin(self::ID, TourDiscountPeer::TOUR_DETAIL_ID);
            $criterion = $c->getNewCriterion(TourDiscountPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDiscountPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
            $criterion->addOr($c->getNewCriterion(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, 2));
            $c->add($criterion);
        }
        if ($tour_featured) {
            $c->add(self::TOUR_FEATURED, true);
        }
        if ($tour_weekend) {
            $c->add(self::TOUR_WEEKEND, true);
        }
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::UTILITIES);
        $c->addSelectColumn(self::SORTING);
        $c->addSelectColumn(self::ACTIVITIES);
        $c->addSelectColumn(self::TOUR_TYPE_ID);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $count = self::doCount($c);
        $rs_all = self::doSelectRs($c);
        $pager = new sfPropelPager('TourDetail', 8);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        sfLoader::loadHelpers('Url');
        if ($rs) {
            while ($rs->next()) {
                $id = $rs->get(1);
                $title = $rs->get(2);
                $description = strip_tags($rs->get(3), '');
                $img_thumb = TourDetailPeer::getImgThumb($id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $rs->get(4);
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(5);
                $time_category_day_id = $rs->get(6);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($time_category_day_id);
                $date_start = $rs->get(7);
                $date_end = $rs->get(8);
                $day_in_week = $rs->get(9);
                $price = $rs->get(10);
                $number_seat = $rs->get(11);
                $utilities = json_decode($rs->get(12));
                $sorting = json_decode($rs->get(13));
                $activities = json_decode($rs->get(14));
                $utilities_arr [] = $utilities;
                $sorting_arr [] = $sorting;
                $activities_arr [] = $activities;
                $discount = TourDiscountPeer::getDiscountItem($id, $start_date);
                $tour_type_id = $rs->get(15);
                if ($tour_type_id == '1') {
                    $type_pricing_id = $rs->get(16);
                    if ($type_pricing_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_id == '2') {
                        $price = LangPeer::translate('Miễn Phí');
                    }
                    if ($type_pricing_id == '3') {
                        $price =  LangPeer::translate('Liên Hệ');
                    }
                }
                if ($tour_type_id == '2') {
                    $type_pricing_service_id = $rs->get(17);
                    if ($type_pricing_service_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_service_id == '2') {
                        $price =  LangPeer::translate('Liên Hệ');
                    }
                }
                if ($start_date) {
                    if ($time_type_id == '1') {
                        if (strtotime($date_start) <= strtotime($start_date)) {
                            $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                        }
                    }
                    if ($time_type_id == '2') {
                        $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                    if ($time_type_id == '3') {
                        $datepicker_fm = date('Y-m-d', strtotime($start_date));
                        $day_in_week_datepicker = date('w', strtotime($datepicker_fm));
                        $day_in_week_arr = explode(",", $day_in_week);
                        if (in_array($day_in_week_datepicker, $day_in_week_arr)) {
                            $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                        }
                    }
                } else {
                    if (strtotime($date_start) >= strtotime($date_now) || $time_type_id == '2' || $time_type_id == '3') {
                        $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
            }
            return array('page' => $pager, 'tour' => $arr, 'sorting' => $sorting_arr, 'activities' => $activities_arr, 'count' => $count);
        }
    }

    public static function find_tour_search($coo_start, $booking_form_to_address, $select_filter_find_tour, $booking_form_start_date, $time_tour_search, $price_tour_search, $page, $doi_tuong_tour_search, $tour_noi_bat_search, $doi_tuong_phu_hop_search, $loai_tour_search) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $arr = array();
        $arr_all = array();
        $utilities_arr = array();
        $sorting_arr = array();
        $activities_arr = array();
        $c = new Criteria();
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $partner_id = myUser::get_partner_id();
        if ($partner_id != '1') {
            $c->add(self::PARTNER_ID,$partner_id);
        }
        if ($coo_start) {
            $arr_coo_start = self::getMinMaxCoo($coo_start);
            if (count($arr_coo_start) !== '0') {
                $min_lat_start = $arr_coo_start['min_lat'];
                $max_lat_start = $arr_coo_start['max_lat'];
                $min_lon_start = $arr_coo_start['min_lon'];
                $max_lon_start = $arr_coo_start['max_lon'];
                $c->add(self::LAT_START, $min_lat_start, Criteria::GREATER_EQUAL);
                $c->addAnd(self::LAT_START, $max_lat_start, Criteria::LESS_EQUAL);
                $c->add(self::LNG_START, $min_lon_start, Criteria::GREATER_EQUAL);
                $c->addAnd(self::LNG_START, $max_lon_start, Criteria::LESS_EQUAL);
            }
        }
        if ($select_filter_find_tour) {
            if ($select_filter_find_tour == '1') {
                $c->addAscendingOrderByColumn(self::PRICE);
            }
            if ($select_filter_find_tour == '2') {
                $c->addDescendingOrderByColumn(self::PRICE);
            }
        } else {
            $c->addDescendingOrderByColumn(self::ID);
        }
        if ($booking_form_start_date) {
            $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($booking_form_start_date), Criteria::CUSTOM);
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
            $c->add($criterion);
        } else {
            $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
            $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
            $c->add($criterion);
        }
        if ($booking_form_to_address) {
            $c->add(self::KEYWORD, '%' . $booking_form_to_address . '%', Criteria::LIKE);
        }
        if ($time_tour_search) {
            $c->add(self::TIME_CATEGORY_DAY_ID, $time_tour_search);
        }
        if ($price_tour_search) {
            self::cal_price($price_tour_search, $c);
        }
        if ($doi_tuong_tour_search) {
            $c->add(self::TOUR_TYPE_ID, $doi_tuong_tour_search);
        }
        if ($tour_noi_bat_search) {
            if ($tour_noi_bat_search == '1') {
                $c->addJoin(self::ID, TourDiscountPeer::TOUR_DETAIL_ID);
                $criterion_discount = $c->getNewCriterion(TourDiscountPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDiscountPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
                $criterion_discount->addOr($c->getNewCriterion(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, 2));
                $c->add($criterion_discount);
                $c->addGroupByColumn(self::ID);
            }
            if ($tour_noi_bat_search == '2') {
                $c->add(self::TOUR_FEATURED, true);
            }
            if ($tour_noi_bat_search == '3') {
                $c->add(self::TOUR_WEEKEND, true);
            }
        }
        if ($doi_tuong_phu_hop_search) {
            $text_doi_tuong_phu_hop = ':"' . $doi_tuong_phu_hop_search . '"';
            $c->add(self::TOUR_OBJECT_FIT, '%' . $text_doi_tuong_phu_hop . '%', Criteria::LIKE);
        }
        if ($loai_tour_search) {
            if ($loai_tour_search == '1') {
                $c->add(self::UTILITIES, '[{"id":"1","name":"V\u00e9 m\u00e1y bay"},{"id":"2","name":"Ph\u1ee5c v\u1ee5 \u0103n u\u1ed1ng"},{"id":"3","name":"Ch\u1ed7 \u1edf\/ kh\u00e1ch s\u1ea1n"},{"id":"4","name":"V\u00e9  tham quan"},{"id":"5","name":"H\u01b0\u1edbng d\u1eabn vi\u00ean"},{"id":"6","name":"V\u1eadn chuy\u1ec3n b\u1eb1ng \u00f4 t\u00f4"},{"id":"7","name":"\u0110\u00f3n ti\u1ec5n s\u00e2n bay"},{"id":"8","name":"B\u1ea3o hi\u1ec3m du l\u1ecbch"},{"id":"9","name":"Ho\u1ea1t \u0111\u1ed9ng gi\u1ea3i tr\u00ed"},{"id":"10","name":"Ti\u1ec1n tips d\u1ecbch v\u1ee5"},{"id":"11","name":"H\u1ed7 tr\u1ee3 ng\u01b0\u1eddi khuy\u1ebft t\u1eadt"},{"id":"12","name":"Thu\u1ebf VAT"}]');
            }
            if ($loai_tour_search == '2') {
                $c->add(self::UTILITIES, '[{"id":"1","name":"V\u00e9 m\u00e1y bay"},{"id":"3","name":"Ch\u1ed7 \u1edf\/ kh\u00e1ch s\u1ea1n"}]');
            }
            if ($loai_tour_search == '3') {
                $c->add(self::UTILITIES, '[{"id":"2","name":"Ph\u1ee5c v\u1ee5 \u0103n u\u1ed1ng"},{"id":"3","name":"Ch\u1ed7 \u1edf\/ kh\u00e1ch s\u1ea1n"},{"id":"4","name":"V\u00e9  tham quan"},{"id":"5","name":"H\u01b0\u1edbng d\u1eabn vi\u00ean"},{"id":"6","name":"V\u1eadn chuy\u1ec3n b\u1eb1ng \u00f4 t\u00f4"},{"id":"7","name":"\u0110\u00f3n ti\u1ec5n s\u00e2n bay"},{"id":"8","name":"B\u1ea3o hi\u1ec3m du l\u1ecbch"},{"id":"9","name":"Ho\u1ea1t \u0111\u1ed9ng gi\u1ea3i tr\u00ed"},{"id":"10","name":"Ti\u1ec1n tips d\u1ecbch v\u1ee5"},{"id":"11","name":"H\u1ed7 tr\u1ee3 ng\u01b0\u1eddi khuy\u1ebft t\u1eadt"},{"id":"12","name":"Thu\u1ebf VAT"}]');
            }
        }
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::UTILITIES);
        $c->addSelectColumn(self::SORTING);
        $c->addSelectColumn(self::ACTIVITIES);
        $c->addSelectColumn(self::TOUR_TYPE_ID);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $count = self::doCount($c);
        $rs_all = self::doSelectRs($c);
        $pager = new sfPropelPager('TourDetail', 8);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        sfLoader::loadHelpers('Url');
        if ($rs) {
            while ($rs->next()) {
                $id = $rs->get(1);
                $title = $rs->get(2);
                $description = strip_tags($rs->get(3), '');
                $img_thumb = TourDetailPeer::getImgThumb($id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $rs->get(4);
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(5);
                $time_category_day_id = $rs->get(6);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($time_category_day_id);
                $date_start = $rs->get(7);
                $date_end = $rs->get(8);
                $day_in_week = $rs->get(9);
                $price = $rs->get(10);
                $number_seat = $rs->get(11);
                $utilities = json_decode($rs->get(12));
                $sorting = json_decode($rs->get(13));
                $activities = json_decode($rs->get(14));
                $utilities_arr [] = $utilities;
                $sorting_arr [] = $sorting;
                $activities_arr [] = $activities;
                $discount = TourDiscountPeer::getDiscountItem($id, $start_date);
                $tour_type_id = $rs->get(15);
                if ($tour_type_id == '1') {
                    $type_pricing_id = $rs->get(16);
                    if ($type_pricing_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_id == '2') {
                        $price = LangPeer::translate('Miễn Phí');
                    }
                    if ($type_pricing_id == '3') {
                        $price =  LangPeer::translate('Liên Hệ');
                    }
                }
                if ($tour_type_id == '2') {
                    $type_pricing_service_id = $rs->get(17);
                    if ($type_pricing_service_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_service_id == '2') {
                        $price =  LangPeer::translate('Liên Hệ');
                    }
                }

                $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
            }
            return array('page' => $pager, 'tour' => $arr, 'sorting' => $sorting_arr, 'activities' => $activities_arr, 'count' => $count);
        }
    }

    public static function get_tour_by_text_search($text_search) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $partner_id = myUser::get_partner_id();
        if ($partner_id != '1') {
            $c->add(self::PARTNER_ID);
        }
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $c->add(TourDetailPeer::TITLE, "%" . $text_search . "%", CRITERIA::LIKE);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $rs = self::doSelectRs($c);
        sfLoader::loadHelpers('Url');
        $c->setLimit(30);
        $arr = array();
        if ($rs) {
            while ($rs->next()) {
                $id = $rs->get(1);
                $title = $rs->get(2);
                $description = $rs->get(3);
                $img_thumb = TourDetailPeer::getImgThumb($id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $rs->get(4);
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(5);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(6));
                $date_start = $rs->get(7);
                $date_end = $rs->get(8);
                $day_in_week = $rs->get(9);
                $price = $rs->get(10);
                $number_seat = $rs->get(11);
                $discount = TourDiscountPeer::getDiscountItem($id, $start_date);
                $arr [] = array('tour_id' => $id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
            }
            return $arr;
        } else {
            return 0;
        }
    }

    public static function get_tour_by_time_tour_search($time_tour_search) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $partner_id = myUser::get_partner_id();
        if ($partner_id != '1') {
            $c->add(self::PARTNER_ID);
        }
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $c->add(self::TIME_CATEGORY_DAY_ID, $time_tour_search);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $rs = self::doSelectRs($c);
        sfLoader::loadHelpers('Url');
        $c->setLimit(30);
        $arr = array();
        if ($rs) {
            while ($rs->next()) {
                $tour_id = $rs->get(1);
                $title = $rs->get(2);
                $description = $rs->get(3);
                $img_thumb = TourDetailPeer::getImgThumb($tour_id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $tour->getUserId();
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(4);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(5));
                $date_start = $rs->get(6);
                $date_end = $rs->get(7);
                $day_in_week = $rs->get(8);
                $price = $rs->get(9);
                $number_seat = $rs->get(10);
                $discount = TourDiscountPeer::getDiscountItem($tour_id, $start_date);
                $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
            }
            return $arr;
        } else {
            return 0;
        }
    }

    public static function get_tour_by_price_tour_search($price_tour_search) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $partner_id = myUser::get_partner_id();
        if ($partner_id != '1') {
            $c->add(self::PARTNER_ID);
        }
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TOUR_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $rs = self::doSelectRs($c);
        sfLoader::loadHelpers('Url');
        $c->setLimit(30);
        $arr = array();
        if ($rs) {
            while ($rs->next()) {
                $id = $rs->get(1);
                $tour_id = $rs->get(2);
                $tour = TourPeer::retrieveByPK($tour_id);
                $title = $tour->getTitle();
                $description = $tour->getDescription();
                $img_thumb = TourDetailPeer::getImgThumb($tour_id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $tour->getUserId();
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(3);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($rs->get(4));
                $date_start = $rs->get(5);
                $date_end = $rs->get(6);
                $day_in_week = $rs->get(7);
                $price = (INT) $rs->get(8);
                $number_seat = $rs->get(9);
                $discount = TourDiscountPeer::getDiscountItem($tour_id, $start_date);
                if ($price_tour_search == '1') {
                    if ($price < 1000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
                if ($price_tour_search == '2') {
                    if ($price >= 1000000 && $price <= 2000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
                if ($price_tour_search == '3') {
                    if ($price > 2000000 && $price <= 3000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
                if ($price_tour_search == '4') {
                    if ($price > 3000000 && $price <= 4000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    } else {
                        return 0;
                    }
                }
                if ($price_tour_search == '5') {
                    if ($price > 4000000 && $price <= 5000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
                if ($price_tour_search == '6') {
                    if ($price >= 5000000 && $price <= 6000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
                if ($price_tour_search == '7') {
                    if ($price >= 6000000) {
                        $arr [] = array('tour_id' => $tour_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getShowName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
                    }
                }
            }
            return $arr;
        } else {
            return 0;
        }
    }

    public static function getImgThumb($tour_id) {
        $images = '';
        $c = new Criteria();
        $c->add(TourItemImgPeer::TOUR_DETAIL_ID, $tour_id);
        $c->setLimit(1);
        $rs = TourItemImgPeer::doSelect($c);
        if ($rs) {
            foreach ($rs as $key => $value) {
                $images = $value->getImages();
            }
            return $images;
        } else {
            $c = new Criteria();
            $c->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID, $tour_id);
            $c->setLimit(1);
            $rs = TourItemImgPeer::doSelect($c);
            foreach ($rs as $key => $value) {
                $images = $value->getImages();
            }
            return $images;
        }
    }

    public static function return_html_search_select($find_tour) {
        if ($find_tour) {
            foreach ($find_tour as $key => $val) {
                $html.= '<div class="col-md-12 box_1x">
					<div class="tour">
					    <a href="' . $val['url'] . '" target="_blank">
					        <div class="tour_ava_2">
					            <img src="http://gheptour.vn/thumbnail/index.php?src=/' . $val['img_thumb'] . '&w=351&h=200&q=100" width="100%" height="160px">
					        </div>
					        <div class="tour_name_2">
					            <p class="name">' . $val['title'] . '</p>
					            <p class="time"> 3 ngày 2 đêm</p>
					        </div>
					        <div class="tour_name_2">
					            <div class="user_ava">
					                <img src="http://dichung.vn' . $val['avatar'] . '" width="100%" height="40px">
					            </div>
					            <div class="user_name">
					                <a>' . $val['fullname'] . '</a>
					                <p><div class="rating mg-b-10 fl-l" data-value="5"><span class="star-img stars-5"></span></div></p>
					            </div>
					            <div class="clear"></div>
					        </div>
					        <div class="tour_name_2">
					            <div class="cm">
					                <p>' . mb_substr($val['description'], 0, 250, "utf-8") . '...</p>
					            </div>
					            <div class="tour_gia">
					                <a>' . $val['price'] . '</a>
					            </div>
					        </div>
					        <div class="clear"></div>
					    </a>';

                if ($val['discount'] !== '0') {
                    $html.= '<div class="sale">
						        <p class="giamgia dai">Giảm giá</p>
						        <p class="gia">' . $val['discount'] . '%</p>
						    </div>';
                }
                $html.='</div></div>';
                $html_grid_view .= '<div class="col-md-6 box_1x">
				        <div class="tour">
				            <a href="' . $val['url'] . '" target="_blank">
				                <div class="tour_ava">
				                    <img src="http://gheptour.vn/thumbnail/index.php?src=/' . $val['img_thumb'] . '&w=253&h=160&q=100" width="100%" height="200px">
				                    <div class="tour_name">
				                        <p class="name">' . $val['title'] . '</p>
				                        <p class="time">' . $val['time_category_day'] . '</p>';
                if ($val['number_seat'] == '1000') {
                    $html_grid_view .= '<p class="cho">Không giới hạn chỗ</p>';
                } else {
                    $html_grid_view .= '<p class="cho">Còn ' . $val['number_seat'] / $val['number_seat'] . 'chỗ</p>';
                }
                $html_grid_view .= '</div>
				                </div>
				            </a>
				            <div class="tour_user">
				                <a href="' . $val['url_user'] . '" target="_blank">
				                    <div class="user_ava">
				                         <img src="http://dichung.vn' . $val['avatar'] . '" style="height:60px">
				                    </div>
				                </a>
				                <div class="user_name">
				                    <a href="' . $val['url_user'] . '" target="_blank">' . $val['fullname'] . '</a>
				                    <p><div class="rating mg-b-10 fl-l" data-value="5"><span class="star-img stars-5"></span></div></p>
				                </div>
				                <div class="tour_gia text-right">
				                    <a>' . $val['price'] . '</a>
				                </div>
				                <div class="clear"></div>
				            </div>';
                if ($val['discount'] != '0') {
                    $html_grid_view .= '<div class="sale">
				                <p class="giamgia">Giảm giá</p>
				                <p class="gia">' . $val['discount'] . '%</p>
				            </div>';
                }
                $html_grid_view .= '</div></div>';
            }
            return array('html_line_view' => $html, 'html_grid_view' => $html_grid_view);
        }
    }

    public static function return_html_pager($pager, $page) {
        $html = '<li><a class="paging_li_a" id="1" href="javascript:void(0);" onclick="getListPage(1)"><<</a></li>';
        for ($i = 1; $i <= $pager->getLastPage(); $i++) {
            if ($i == $page) {
                $html.='<li><a style="width: 40px;margin-right: 10px;margin-bottom: 5px;border-radius: 5px" class="activePaging" id="' . $i . '" href="javascript:void(0);" onclick="getListPage(' . $i . ')">' . $i . '</a></li>';
            } else {
                if ($page > ($i - 5) && $page < ($pager->getLastPage() - 1)) {
                    $html.='<li><a style="width: 40px;margin-right: 10px;margin-bottom: 5px;border-radius: 5px" href="javascript:void(0);" onclick="getListPage(' . $i . ')">' . $i . '</a></li>';
                }
            }
        }
        $html .= ' <li><a class="paging_li_a" id="' . $pager->getLastPage() . '" href="javascript:void(0);" onclick="getListPage(' . $pager->getLastPage() . ')">>></a></li>';
        return $html;
    }

    public static function return_html_pager_khuvuc($pager, $page) {
        $html = '';
        for ($i = 1; $i <= $pager->getLastPage(); $i++) {
            if ($i == $page) {
                $html.='<li><a style="width: 40px;margin-right: 10px;margin-bottom: 5px;border-radius: 5px" class="activePaging" id="' . $i . '" href="javascript:void(0);" onclick="getListPageKhuvuc(' . $i . ')">' . $i . '</a></li>';
            } else {
                $html.='<li><a style="width: 40px;margin-right: 10px;margin-bottom: 5px;border-radius: 5px" href="javascript:void(0);" onclick="getListPageKhuvuc(' . $i . ')">' . $i . '</a></li>';
            }
        }
        return $html;
    }

    public static function return_html_sorting_hinh_thuc_du_lich($sorting_hotro) {
        foreach (TourSortingPeer::getAll() as $key => $val) {
            $keys = $key + 1;
            $html .=' <p><input type="checkbox" value="' . $val->getId() . '" id="select_check_sorting" name="select_check_sorting[]" /> ' . $val->getShowName() . '<span class="blue_text"> (' . count($sorting_hotro[$keys]) . ')</span></p>';
        }
        return $html;
    }

    public static function return_html_sorting_hoat_dong_du_lich($sorting_activities) {
        foreach (TourActivitiesPeer::getAll() as $key => $val) {
            $keys = $key + 1;
            $html .=' <p><input type="checkbox" value="' . $val->getId() . '" id="select_check_activities" name="select_check_activities[]" /> ' . $val->getShowName() . '<span class="blue_text"> (' . count($sorting_activities[$keys]) . ')</span></p>';
        }
        return $html;
    }

    public static function check_update_enable_detail_tour($tour_detail_id) {
        $tour_detail = self::retrieveByPK($tour_detail_id);
        $time_type_id = $tour_detail->getTimeTypeId();
        $price = $tour_detail->getPrice();
        $c = new Criteria();
        $c->add(TourItemImgPeer::TOUR_DETAIL_ID, $tour_detail_id);
        $count_img = TourItemImgPeer::doCount($c);
        if ($time_type_id && $price && $count_img) {
            $tour_detail->setEnabled(1);
            $tour_detail->save();
        }
    }

    public static function check_enable_step($tour_detail) {
        $time_type_id = $tour_detail->getTimeTypeId();
        $title = $tour_detail->getTitle();
        $description = $tour_detail->getDescription();
        $detail = $tour_detail->getDetail();
        $step = 0;
        $enable_time_set = false;
        $enable_cost = false;
        $enable_schedule = false;
        $enable_utilities = false;
        $enable_note = false;
        $type_pricing_service_id = $tour_detail->getTypePricingServiceId();
        if ($time_type_id && $title && $description) {
            $step = $step + 1;
            $enable_time_set = true;
        }
        if ($type_pricing_service_id == '1') {
            if ($tour_detail->getPrice()) {
                $step = $step + 1;
                $enable_cost = true;
            }
        }
        if ($type_pricing_service_id == '2') {
            $step = $step + 1;
            $enable_cost = true;
        }

        $img = self::getImgThumb($tour_detail->getId());

        $count_scheduled = TourItemScheduleDayPeer::count_scheduled($tour_detail->getId());
        $count_img_scheduled_day = TourItemImgScheduleDayPeer::count_img_schedule_day($tour_detail->getId());
        if (($detail && $img) || ($detail && $count_img_scheduled_day) || ($count_scheduled && $img) || ($count_scheduled && $count_img_scheduled_day)) {
            $step = $step + 1;
            $enable_schedule = true;
        }
        $utilities = trim($tour_detail->getUtilities());
        $sorting = trim($tour_detail->getSorting());
        if (($utilities) && ($utilities !== 'null')) {
            $step = $step + 1;
            $enable_utilities = true;
        }
        $note = $tour_detail->getNote();
        $policy_price = $tour_detail->getPolicyPrice();
        $policy_ticket = $tour_detail->getPolicyTicket();
        if ($policy_price && $policy_ticket) {
            $step = $step + 1;
            $enable_note = true;
        }
        return array('step' => $step, 'enable_time_set' => $enable_time_set, 'enable_cost' => $enable_cost, 'enable_schedule' => $enable_schedule, 'enable_utilities' => $enable_utilities, 'enable_note' => $enable_note);
    }

    public static function check_enable_step_personal($tour_detail) {
        $time_type_id = $tour_detail->getTimeTypeId();
        $tour_type_id = $tour_detail->getTourTypeId();
        $type_pricing_id = $tour_detail->getTypePricingId();
        $price = $tour_detail->getPrice();
        $title = $tour_detail->getTitle();
        $description = $tour_detail->getDescription();
        $detail = $tour_detail->getDetail();
        $step = 0;
        $enable_time_set = false;
        $enable_cost = false;
        $enable_schedule = false;
        $enable_utilities = false;
        $enable_note = false;
        $hour_start = $tour_detail->getHourStart();
        if ($time_type_id && $title && $description && $hour_start) {
            $step = $step + 1;
            $enable_time_set = true;
        }
        $number_seat = $tour_detail->getNumberSeat();
        $sum_number_seat = $tour_detail->getSumNumberSeat();
        if ($tour_type_id == '1') {
            if ($type_pricing_id == '1') {
                if ($number_seat && $price) {
                    $step = $step + 1;
                    $enable_cost = true;
                }
            } else {
                if ($number_seat) {
                    $step = $step + 1;
                    $enable_cost = true;
                }
            }
        }
        $img = self::getImgThumb($tour_detail->getId());
        $count_scheduled = TourItemScheduleDayPeer::count_scheduled($tour_detail->getId());
        $count_img_scheduled_day = TourItemImgScheduleDayPeer::count_img_schedule_day($tour_detail->getId());
        if (($detail && $img) || ($detail && $count_img_scheduled_day) || ($count_scheduled && $img) || ($count_scheduled && $count_img_scheduled_day)) {
            $step = $step + 1;
            $enable_schedule = true;
        }
        $utilities = trim($tour_detail->getUtilities());
        $sorting = trim($tour_detail->getSorting());
        $option_gender = trim($tour_detail->getTourOptionGender());
        if ($option_gender && $option_gender !== 'null') {
            $step = $step + 1;
            $enable_utilities = true;
        }
        $note = $tour_detail->getNote();
        if ($note) {
            $step = $step + 1;
            $enable_note = true;
        }
        return array('step' => $step, 'enable_time_set' => $enable_time_set, 'enable_cost' => $enable_cost, 'enable_schedule' => $enable_schedule, 'enable_utilities' => $enable_utilities, 'enable_note' => $enable_note);
    }

    public static function get_all_tour_by_user($user_id) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::USER_ID, $user_id);
        $rs = self::doSelect($c);
        $tour = array();
        foreach ($rs as $key => $value) {
            $tour_id = $value->getId();
            $title = $value->getTitle();
            $description = $value->getDescription();
            $img_thumb = $value->getImgThumb($tour_id);
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $date_start = $value->getDateStart();
            $date_end = $value->getDateEnd();
            $time_type_id = $value->getTimeTypeId();
            if ($value->getTourTypeId() == '2') {
                $url_manager = $value->getDetailUrlEditTour();
            } else {
                $url_manager = $value->getDetailUrlEditTourPersonal();
            }
            $url = $value->getDetailUrlTour();
            if ($value->getSuccessCreated()) {
                $tour [] = array('tour_id' => $tour_id, 'url' => $url, 'time_type_id' => $time_type_id, 'title' => $title, 'description' => $description, 'date_start' => $date_start, 'date_end' => $date_end, 'img' => $img_thumb, 'url_manager' => $url_manager);
            }
        }
        return $tour;
    }

    public static function get_all_tour_by_featured($user_id) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::USER_ID, $user_id);
        $rs = self::doSelect($c);
        $tour = array();
        $date_now = date('Y-m-d');
        foreach ($rs as $key => $value) {
            $id = $value->getId();
            $title = $value->getTitle();
            $description = $value->getDescription();
            $img_thumb = $value->getImgThumb($id);
            if (!$img_thumb) {
                $img_thumb = 'images/chuyendi.png';
            }
            $date_start = $value->getDateStart();
            $date_end = $value->getDateEnd();
            $time_type_id = $value->getTimeTypeId();
            if ($value->getTourTypeId() == '2') {
                $url_manager = $value->getDetailUrlEditTour();
            } else {
                $url_manager = $value->getDetailUrlEditTourPersonal();
            }
            $url = $value->getDetailUrlTour();
            if ($value->getSuccessCreated()) {
                if ($time_type_id == '1') {
                    if (strtotime($date_start) >= strtotime($date_now)) {
                        $tour [] = array('tour_id' => $id, 'url' => $url, 'time_type_id' => $time_type_id, 'title' => $title, 'description' => strip_tags((mb_substr($description, 0, 250, "utf-8")), ''), 'date_start' => $date_start, 'date_end' => $date_end, 'img' => $img_thumb, 'url_manager' => $url_manager);
                    }
                } else {
                    $tour [] = array('tour_id' => $id, 'url' => $url, 'time_type_id' => $time_type_id, 'title' => $title, 'description' => $description, 'date_start' => $date_start, 'date_end' => $date_end, 'img' => $img_thumb, 'url_manager' => $url_manager);
                }
            }
        }
        return $tour;
    }

    public static function get_all_tour_trong_nuoc($page, $selecte_filter_tour_trong_nuoc) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $arr_region = array('1', '2', '3');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->add(self::REGION_ID, $arr_region, CRITERIA::IN)
                ->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID)
                ->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')');
        if ($selecte_filter_tour_trong_nuoc == '1') {
            $c->addDescendingOrderByColumn('count_home');
        }
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion);
        $c->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);
        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($selecte_filter_tour_trong_nuoc == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public static function get_all_tour_quoc_te($page, $selecte_filter_tour_trong_nuoc) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->add(self::ENABLED, true);
        $c->add(self::SUCCESS_CREATED, true);
        $c->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);
        $c->add(HomeDiemDenItemPeer::AREA_ID, 1, Criteria::NOT_EQUAL);
        $c->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')');
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion);
        if ($selecte_filter_tour_trong_nuoc == '1') {
            $c->addDescendingOrderByColumn('count_home');
        }
        $c->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);

        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($selecte_filter_tour_trong_nuoc == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public static function get_all_tour_moi_noi($page, $select_filter_tour_moi_noi) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID)
                ->add(HomeDiemDenItemPeer::ENABLE_FEATURED, 1, Criteria::EQUAL)
                ->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')');
        if ($select_filter_tour_moi_noi == '1') {
            $c->addDescendingOrderByColumn('count_home');
        }
        $c->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion);
        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($select_filter_tour_moi_noi == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public static function get_text_search_tour_trong_nuoc($page, $select_filter_tour_trong_nuoc, $end_trong_nuoc) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $arr_region = array('1', '2', '3');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->add(self::REGION_ID, $arr_region, CRITERIA::IN)
                ->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID)
                ->add(HomeDiemDenItemPeer::NAME, '%' . $end_trong_nuoc . '%', Criteria::LIKE)
                ->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')')
                ->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);
        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($selecte_filter_tour_trong_nuoc == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public static function get_text_search_tour_quoc_te($page, $select_filter_tour_quoc_te, $end_quoc_te) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->add(self::REGION_ID, 1, CRITERIA::NOT_EQUAL)
                ->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID)
                ->add(HomeDiemDenItemPeer::NAME, '%' . $end_quoc_te . '%', Criteria::LIKE)
                ->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')')
                ->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);
        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($select_filter_tour_quoc_te == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public static function get_text_search_tour_moi_noi($page, $select_filter_tour_moi_noi, $end_moi_noi) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->addJoin(self::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID)
                ->add(HomeDiemDenItemPeer::ENABLE_FEATURED, 1, CRITERIA::EQUAL)
                ->add(HomeDiemDenItemPeer::NAME, '%' . $end_moi_noi . '%', Criteria::LIKE)
                ->addAsColumn('count_home', 'COUNT(' . HomeDiemDenItemPeer::ID . ')')
                ->addGroupByColumn(HomeDiemDenItemPeer::ID)
                ->addSelectColumn(HomeDiemDenItemPeer::NAME)
                ->addSelectColumn(HomeDiemDenItemPeer::IMG);
        $pager = new sfPropelPager('TourDetail', 6);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        $arr = array();
        sfLoader::loadHelpers('Url');
        while ($rs->next()) {
            $home_name = trim($rs->get(1));
            $home_img = $rs->get(2);
            $count_home = $rs->get(3);
            $url_forward = '/tim-kiem-tour/trang/1?&booking_form[to_address]=' . $home_name;
            $arr [] = array('home_name' => $home_name, 'home_img' => $home_img, 'count_home' => $count_home, 'url_forward' => $url_forward);
        }
        $max_page = $pager->getLastPage();
        if ($select_filter_tour_moi_noi == '1') {
            $temp = array();
            foreach ($arr as $key => $row) {
                $temp[$key] = $row['count_home'];
            }
            array_multisort($temp, SORT_DESC, $arr);
        }
        return array('are_tour' => $arr, 'max_page' => $max_page);
    }

    public function return_html_area_tour($area_tour) {
        if ($area_tour) {
            foreach ($area_tour as $key => $value) {
                $html .= '<div class="col-md-4 box_1x">
					<a href="' . $value['url_forward'] . '">
						<div class="exp_infor_bg">
						    <img src="' . $value['home_img'] . '" width="100%" style="height: 200px" />
							<div class="area_info">					
						        <div class="col-md-12">
									<h4><a class="text-uppercase trip">' . $value['home_name'] . '</a></h4>
									<h5><small>' . $value['count_home'] . ' Tour</small></h5>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</a>
				</div>';
            }
            return $html;
        } else {
            return '';
        }
    }

    public static function count_all_tour_trong_nuoc() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $arr = array('1', '2', '3');
        $c = new Criteria();
        $c->add(self::ENABLED, true);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::REGION_ID, $arr, Criteria::IN);

        return self::doCount($c);
    }

    public static function count_all_tour_quoc_te() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $arr = array('1', '2', '3');
        $c = new Criteria();
        $c->add(self::ENABLED, true);
        $c->add(self::SUCCESS_CREATED, true);
        $c->add(self::REGION_ID, $arr, Criteria::NOT_IN);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        return self::doCount($c);
    }

    public static function count_all_tour_moi_noi() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $c = new Criteria();
        $c->add(self::ENABLED, true)
                ->add(self::SUCCESS_CREATED, true)
                ->add(self::TOUR_FEATURED, true);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $c->add($criterion);
        return self::doCount($c);
    }

    public static function count_tour_trong_nuoc() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $arr = array('1', '2', '3');
        $date_now = date('Y-m-d');
        $c = new Criteria();
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $c->add(self::REGION_ID, $arr, Criteria::IN);
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 4));
        $c->add($criterion);
        $c->addSelectColumn(self::REGION_ID);
        $rs = self::doSelectRs($c);
        $arr_mienbac = array();
        $arr_mientrung = array();
        $arr_miennam = array();
        while ($rs->next()) {
            $region_id = $rs->get(1);
            if ($region_id == '1') {
                $arr_mienbac [] = $region_id;
            }
            if ($region_id == '2') {
                $arr_mientrung [] = $region_id;
            }
            if ($region_id == '3') {
                $arr_miennam [] = $region_id;
            }
        }
        $count_mienbac = count($arr_mienbac);
        $count_mientrung = count($arr_mientrung);
        $count_miennam = count($arr_miennam);
        return array('count_mienbac' => $count_mienbac, 'count_mientrung' => $count_mientrung, 'count_miennam' => $count_miennam);
    }

    public static function count_tour_quoc_te() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $arr = array('2', '3', '4');
        $c = new Criteria();
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        $c->add(self::AREA_ID, $arr, Criteria::IN);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 4));
        $c->add($criterion);
        $c->addSelectColumn(self::AREA_ID);
        $rs = self::doSelectRs($c);
        $arr_chau_au = array();
        $arr_chau_a = array();
        $arr_chau_phi = array();
        while ($rs->next()) {
            $area_id = $rs->get(1);
            if ($area_id == '2') {
                $arr_chau_au [] = $area_id;
            }
            if ($area_id == '3') {
                $arr_chau_a [] = $area_id;
            }
            if ($area_id == '4') {
                $arr_chau_phi [] = $area_id;
            }
        }
        $count_chau_au = count($arr_chau_au);
        $count_chau_a = count($arr_chau_a);
        $count_chau_phi = count($arr_chau_phi);
        return array('count_chau_au' => $count_chau_au, 'count_chau_a' => $count_chau_a, 'count_chau_phi' => $count_chau_phi);
    }

    public static function count_all_tour() {
        return self::doCount(new Criteria()) + 3000;
    }

    public static function change_khu_vuc($region_id, $area_id, $page, $select_filter_find_tour) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('Y-m-d');
        $arr = array();
        $arr_all = array();
        $utilities_arr = array();
        $sorting_arr = array();
        $activities_arr = array();
        $c = new Criteria();
        $c->add(self::ENABLED, 1);
        $c->add(self::SUCCESS_CREATED, 1);
        if ($select_filter_find_tour) {
            if ($select_filter_find_tour == '1') {
                $c->addAscendingOrderByColumn(self::PRICE);
            }
            if ($select_filter_find_tour == '2') {
                $c->addDescendingOrderByColumn(self::PRICE);
            }
        } else {
            $c->addDescendingOrderByColumn(self::ID);
        }
        if ($region_id) {
            $c->add(self::REGION_ID, $region_id);
        }
        if ($area_id) {
            $c->add(self::AREA_ID, $area_id);
        }
        $criterion = $c->getNewCriterion(self::DATE_START, 'UNIX_TIMESTAMP(' . self::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 3));
        $criterion->addOr($c->getNewCriterion(self::TIME_TYPE_ID, 4));
        $c->add($criterion);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::TITLE);
        $c->addSelectColumn(self::DESCRIPTION);
        $c->addSelectColumn(self::USER_ID);
        $c->addSelectColumn(self::TIME_TYPE_ID);
        $c->addSelectColumn(self::TIME_CATEGORY_DAY_ID);
        $c->addSelectColumn(self::DATE_START);
        $c->addSelectColumn(self::DATE_END);
        $c->addSelectColumn(self::DAY_IN_WEEK);
        $c->addSelectColumn(self::PRICE);
        $c->addSelectColumn(self::NUMBER_SEAT);
        $c->addSelectColumn(self::UTILITIES);
        $c->addSelectColumn(self::SORTING);
        $c->addSelectColumn(self::ACTIVITIES);
        $c->addSelectColumn(self::TOUR_TYPE_ID);
        $c->addSelectColumn(self::TYPE_PRICING_ID);
        $c->addSelectColumn(self::TYPE_PRICING_SERVICE_ID);
        $count = self::doCount($c);
        $rs_all = self::doSelectRs($c);
        $pager = new sfPropelPager('TourDetail', 8);
        $pager->setPeerMethod('doSelectRs');
        $pager->setPage($page);
        $pager->setCriteria($c);
        $pager->init();
        $rs = $pager->getResults();
        sfLoader::loadHelpers('Url');
        if ($rs) {
            while ($rs->next()) {
                $id = $rs->get(1);
                $title = $rs->get(2);
                $description = strip_tags($rs->get(3), '');
                $img_thumb = TourDetailPeer::getImgThumb($id);
                if (!$img_thumb) {
                    $img_thumb = 'images/chuyendi.png';
                }
                $user_id = $rs->get(4);
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $avatar = $user->getAvatar();
                $fullname = $user->getFullname();
                $url =  self::get_url_detail_tour($title,$id);
                $url_user = $user->getDetailUrlDefault();
                $time_type_id = $rs->get(5);
                $time_category_day_id = $rs->get(6);
                $time_category_day = TourTimeCategoryDayPeer::retrieveByPK($time_category_day_id);
                $date_start = $rs->get(7);
                $date_end = $rs->get(8);
                $day_in_week = $rs->get(9);
                $price = $rs->get(10);
                $number_seat = $rs->get(11);
                $utilities = json_decode($rs->get(12));
                $sorting = json_decode($rs->get(13));
                $activities = json_decode($rs->get(14));
                $utilities_arr [] = $utilities;
                $sorting_arr [] = $sorting;
                $activities_arr [] = $activities;
                $discount = TourDiscountPeer::getDiscountItem($id, $start_date);
                $tour_type_id = $rs->get(15);
                if ($tour_type_id == '1') {
                    $type_pricing_id = $rs->get(16);
                    if ($type_pricing_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_id == '2') {
                        $price = LangPeer::getText('Miễn Phí');
                    }
                    if ($type_pricing_id == '3') {
                        $price =  LangPeer::getText('Liên Hệ');
                    }
                }
                if ($tour_type_id == '2') {
                    $type_pricing_service_id = $rs->get(17);
                    if ($type_pricing_service_id == '1') {
                        $price = number_format($price) . ' Đ';
                    }
                    if ($type_pricing_service_id == '2') {
                        $price =  LangPeer::getText('Liên Hệ');
                    }
                }
                $arr [] = array('tour_id' => $id, 'time_type_id' => $time_type_id, "time_category_day_id" => $time_category_day_id, 'url_user' => $url_user, 'sorting' => $sorting, 'utilities' => $utilities, 'activities' => $activities, 'discount' => $discount['0'], 'time_category_day' => $time_category_day->getName(), 'avatar' => $avatar, 'fullname' => $fullname, 'page' => $page, 'title' => $title, 'description' => $description, 'img_thumb' => $img_thumb, 'url' => $url, 'price' => $price, 'number_seat' => $number_seat);
            }
            return array('page' => $pager, 'tour' => $arr, 'sorting' => $sorting_arr, 'activities' => $activities_arr, 'count' => $count);
        }
    }

}
