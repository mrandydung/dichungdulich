<?php

class TourDetail extends BaseTourDetail {

    public function __toString() {
        return $this->getTitle();
    }

    public function toSlug() {
        return myUtil::strToSlug($this->getTitle());
    }

    public function getDetailUrl() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@trip_manager?tour_id=' . $this->getId()) : url_for('@trip_manager_en?tour_id=' . $this->getId());
    }

    public function getDetailUrlPersonal() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@trip_manager_personal?tour_id=' . $this->getId()) : url_for('@trip_manager_personal_en?tour_id=' . $this->getId());
    }

    public function getDetailUrlTour() {
        sfLoader::loadHelpers('Url');
        return url_for('@detailTour?name=' . $this->toSlug() . '&id=' . $this->getId());
    }

    public function getDetailUrlTourPreview() {
        sfLoader::loadHelpers('Url');
        return url_for('@detail_tour_preview?name=' . $this->toSlug() . '&id=' . $this->getId());
    }

    public function getDetailUrlEditTour() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@trip_manager?name=' . $this->toSlug() . '&tour_id=' . $this->getId()) : url_for('@trip_manager_en?name=' . $this->toSlug() . '&tour_id=' . $this->getId());
    }

    public function getDetailUrlEditTourPersonal() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@trip_manager_personal?name=' . $this->toSlug() . '&tour_id=' . $this->getId()) : url_for('@trip_manager_personal?name=' . $this->toSlug() . '&tour_id=' . $this->getId());
    }

    public function getUsername() {
        $user_id = $this->getUserId();
        $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
        return $user->getFullname();
    }

    public function get_dis_count() {
        $c = new Criteria();
        $c->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());
        $c->addDescendingOrderByColumn(TourDiscountPeer::DISCOUNT);
        $rs = TourDiscountPeer::doSelectOne($c);
        $discount = 0;
        if ($rs) {
            $discount = $rs->getDiscount();
        }
        return $discount;
    }

    public function getImgThumb($tour_detail_id) {

        $c = new Criteria();
        $c->add(TourItemImgPeer::TOUR_DETAIL_ID, $tour_detail_id);
        $c->setLimit(1);
        $rs = TourItemImgPeer::doSelect($c);
        foreach ($rs as $key => $value) {
            return $value->getImages();
        }
    }

    public function getImgThumbs() {
        $tour_id = $this->getId();
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

    public function get_description_striptags() {
        $description = $this->getDescription();
        $description = strip_tags($description, '<br>,<b>,<a>');
        $description = myUtil::cut_string($description, 400, $description);
        return ($description);
    }

    public function get_policy_price_striptags() {
        $description = $this->getPolicyPrice();
        $description = strip_tags($description, '<p>,<br>,<b>,<a>');
        $description = myUtil::cut_string($description, 250, $description);
        return ($description);
    }

    public function get_detail_striptags() {
        $detail = $this->getDetail();
        $detail = strip_tags($detail, '<br>,<b>,<a>,<u>,<li>');
        $detail = myUtil::cut_string($detail, 500, $detail);
        return ($detail);
    }

    public function get_ngay_khoi_hanh() {
        $time_type_id = $this->getTimeTypeId();
        $msg = '';
        if ($time_type_id == '1') {
            $msg = date('d-m-Y', strtotime($this->getDateStart()));
        }
        if ($time_type_id == '2') {
            $msg = 'Khởi hành hàng ngày';
        }
        if ($time_type_id == '3') {
            $msg = 'Khởi hành hàng tuần';
        }
        if ($time_type_id == '4') {
            $tour_detail_id = $this->getId();
            $rs = TourDateRequestServicePeer::get_date_request_tour($tour_detail_id);
            foreach ($rs as $key => $value) {
                $msg .= date('d-m-Y', strtotime($value->getDate())) . ', ';
            }
        }
        return $msg;
    }

    public function get_discount_tour() {
        $tour_detail_id = $this->getId();
        $discount = TourDiscountPeer::getDiscountItem($tour_detail_id, 0);
        return $discount;
    }

    public function get_time_category_day_seo() {
        $time_category_day_id = $this->getTimeCategoryDayId();
        if ($time_category_day_id) {
            $tour_time_category_day = TourTimeCategoryDayPeer::retrieveByPK($time_category_day_id);
            return $tour_time_category_day->getName();
        } else {
            return '';
        }
    }

}
