<?php

/**
 * Subclass for performing query and update operations on the 'notification' table.
 *
 * 
 *
 * @package lib.model
 */
class NotificationPeer extends BaseNotificationPeer {

    public static function count_non_read($user_id) {
        $c = new Criteria();
        $c->add(NotificationPeer::USER_RECEIVER, $user_id);
        $c->add(NotificationPeer::READED, 0);
        return NotificationPeer::doCount($c);
    }
    
    public static function countNotify($user_id) {
        $c = new Criteria();
        $c->add(self::USER_RECEIVER, $user_id);
        $c->add(self::READED, 0);
        $count = self::doCount($c);
        return $count;
    }
    
    public static function get_all_notification($user_id) {
        $noti_new = array();
        $noti_old = array();
        $c = new Criteria();
        $c->addDescendingOrderByColumn(NotificationPeer::ID);
        $c->add(NotificationPeer::USER_RECEIVER, $user_id);
        $rs = NotificationPeer::doSelect($c);
        foreach ($rs as $key => $value) {
            $id = $value->getId();
            $description = $value->getDescription();
            $created_at = $value->getCreatedAt();
            $user_id = $value->getUserSend();
            $user = DichungUserPeer::retrieveByPk($user_id, Propel::getConnection('dichung_new'));
            $avatar = $user->getAvatar();
            if (substr($avatar, 0, 8) == '/uploads') {
                $avatar = 'http://dichung.vn' . $avatar;
            }
            $time = myUser::change_time_input_to_minute($created_at);
            if ($value->getReaded()) {
                $noti_old [] = array('msg' => $description, 'time' => $time, 'avatar' => $avatar);
            } else {
                $noti_new [] = array('msg' => $description, 'time' => $time, 'avatar' => $avatar);
            }
        }
        return array('noti_old' => $noti_old, 'noti_new' => $noti_new);
    }

    public static function update_readed($user_id) {
        $con = Propel::getConnection();
        $c1 = new Criteria();
        $c1->add(self::USER_RECEIVER, $user_id);
        $c2 = new Criteria();
        $c2->add(self::READED, 1);
        BasePeer::doUpdate($c1, $c2, $con);
    }

}
