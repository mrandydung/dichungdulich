<?php

/**
 * Subclass for performing query and update operations on the 'home_diem_den_item' table.
 *
 * 
 *
 * @package lib.model
 */
class HomeDiemDenItemPeer extends BaseHomeDiemDenItemPeer {

    public static function get_all_mien_bac() {
        $c = new Criteria();
        $c->add(self::REGION_ID, 1);
        return self::doSelect($c);
    }

    public static function get_all_mien_trung() {
        $c = new Criteria();
        $c->add(self::REGION_ID, 2);
        return self::doSelect($c);
    }

    public static function get_all_mien_nam() {
        $c = new Criteria();
        $c->add(self::REGION_ID, 3);
        return self::doSelect($c);
    }

    public static function get_all_quoc_te() {
        $arr = array("1", "2", "3");
        $c = new Criteria();
        $c->add(self::AREA_ID, 1, Criteria::NOT_EQUAL);
        return self::doSelect($c);
    }

    public static function get_trong_nuoc() {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLE_DOMESTIC, true);
        $c->setLimit(5);
        return self::doSelect($c);
    }

    public static function get_quoc_te() {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLE_INTERNATIONAL, true);
        $c->setLimit(5);
        return self::doSelect($c);
    }

    public static function get_moi_noi() {
        $c = new Criteria();
        $c->addAscendingOrderByColumn(self::PRIORITY);
        $c->add(self::ENABLE_FEATURED, true);
        $c->setLimit(5);
        return self::doSelect($c);
    }

    public static function return_coo($address) {
        $c = new Criteria();
        $c->add(self::NAME, '%' . $address . '%', Criteria::LIKE);
        $rs = self::doSelectOne($c);
        if ($rs) {
            return $rs->getGooglePosition();
        } else {
            return 0;
        }
    }

    public static function return_coo_end($address) {
        $c = new Criteria();
        $c->add(self::NAME, '%' . $address . '%', Criteria::LIKE);
        $c->setLimit(1);
        $rs = self::doSelect($c);
        if ($rs) {
            foreach ($rs as $value) {
                return $value;
            }
        } else {
            return 0;
        }
    }

    public static function count_all_dia_diem_trong_nuoc() {
        $c = new Criteria();
        $c->addJoin(self::ID, TourDetailPeer::HOME_DIEM_DEN_ITEM_ID);
        $c->add(self::AREA_ID, 1);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(TourDetailPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDetailPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 3));
        $c->add($criterion);
        
        return self::doCount($c);
    }

    public static function count_all_dia_diem_quoc_te() {
        $c = new Criteria();
        $c->addJoin(self::ID, TourDetailPeer::HOME_DIEM_DEN_ITEM_ID);
        $c->add(self::AREA_ID, 1, Criteria::NOT_EQUAL);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(TourDetailPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDetailPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 3));
        $c->add($criterion);
        return self::doCount($c);
    }

    public static function count_all_dia_diem_moi_noi() {
        $c = new Criteria();
        $c->addJoin(self::ID, TourDetailPeer::HOME_DIEM_DEN_ITEM_ID);
        $c->add(self::ENABLE_FEATURED, true);
        $c->addGroupByColumn(self::ID);
        $date_now = date('Y-m-d');
        $criterion = $c->getNewCriterion(TourDetailPeer::DATE_START, 'UNIX_TIMESTAMP(' . TourDetailPeer::DATE_START . ')>=' . strtotime($date_now), Criteria::CUSTOM);
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 2));
        $criterion->addOr($c->getNewCriterion(TourDetailPeer::TIME_TYPE_ID, 3));
        $c->add($criterion);
        return self::doCount($c);
    }

}
