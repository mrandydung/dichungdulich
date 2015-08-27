<?php

/**
 * Subclass for performing query and update operations on the 'dichung_user' table.
 *
 * 
 *
 * @package lib.model
 */
class DichungUserPeer extends BaseDichungUserPeer {

    public static function countEmail($email) {
        $c = new Criteria();
        $c->add(DichungUserPeer::EMAIL, $email);
        return DichungUserPeer::doCount($c, Propel::getConnection('dichung_new'));
    }

    public static function getOneByEmail($email) {
        $sql = new Criteria();
        $sql->add(DichungUserPeer::EMAIL, $email);
        return DichungUserPeer::doSelectOne($sql, Propel::getConnection('dichung_new'));
    }

    public static function hasPhone($p, $uid) {
        if (substr($p, 0, 1) == '0')
            $p = '84' . substr($p, 1);
        $c = new Criteria;
        $c->add(DichungUserPeer::ID, $uid, Criteria::NOT_EQUAL);
        $c->add(DichungUserPeer::PHONE_NUMBER, $p);
        $c->add(DichungUserPeer::VERIFIED_PHONE, 1);
        return DichungUserPeer::doCount($c, Propel::getConnection('dichung_new'));
    }

    public static function getInfo_user($user_id) {
        $c = new Criteria();
        $c->add(self::ID, $user_id);
        $c->addSelectColumn(self::AVATAR);
        $c->addSelectColumn(self::FULLNAME);
        $c->addSelectColumn(self::EMAIL);
        $c->addSelectColumn(self::PHONE_NUMBER);
        $rs = self::doSelectRS($c, Propel::getConnection('dichung_new'));
        $arr = array();
        while ($rs->next()) {
            $avatar = $rs->get(1);
            $fullname = $rs->get(2);
            $email = $rs->get(3);
            $phone_number = $rs->get(4);
            $arr = array('avatar' => $avatar, 'fullname' => $fullname, 'email' => $email, 'phone_number' => $phone_number);
        }
        return $arr;
    }

    public static function count_top_user_question() {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::LIKE_QUESTION);
        $c->addSelectColumn(self::ID);
        $c->addSelectColumn(self::FULLNAME);
        $c->addSelectColumn(self::AVATAR);
        $c->addSelectColumn(self::LIKE_QUESTION);
        $c->addSelectColumn(self::ANSWER_QUESTION);
        $c->setLimit(5);
        $rs = self::doSelectRs($c, Propel::getConnection('dichung_new'));
        $arr = array();
        while ($rs->next()) {
            $user_id = $rs->get(1);
            $fullname = $rs->get(2);
            $avatar = 'http://dichung.vn/thumbnail/index.php?src=' . $rs->get(3) . '&w=50&h=50';
            $url_user = url_for('@user_profile_default?name=' . myUtil::strToSlug($fullname) . '&user_id=' . $user_id);
            $like_question = $rs->get(4);
            $answer_question = $rs->get(5);
            $arr [] = array('fullname' => $fullname, 'avatar' => $avatar, 'url_user' => $url_user, 'like_question' => $like_question, 'answer_question' => $answer_question);
        }
        return $arr;
    }

}
