<?php

/**
 * Subclass for performing query and update operations on the 'message' table.
 *
 * 
 *
 * @package lib.model
 */
class MessagePeer extends BaseMessagePeer {
    public static function countMessage($user_id) {
        $c = new Criteria();
        $c->add(self::USER_RECEIVER, $user_id);
        $c->add(self::READED, 0);
        $count = self::doCount($c);
        return $count;
    }

    public static function count_non_read($user_id) {
        $c = new Criteria();
        $c->add(self::USER_RECEIVER, $user_id);
        $c->add(self::READED, 0);
        return self::doCount($c);
    }

    public static function get_all_message($user_id) {
        $message_new = array();
        $message_old = array();
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::ID);
        $c->add(self::USER_RECEIVER, $user_id);
        $rs = self::doSelect($c);
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
            $user_fullname = $user->getFullname();
            $time = myUser::change_time_input_to_minute($created_at);
            if ($value->getReaded()) {
                $message_old [] = array('id' => $id, 'msg' => $description, 'user_name' => $user_fullname, 'time' => $time, 'avatar' => $avatar);
            } else {
                $message_new [] = array('id' => $id, 'msg' => $description, 'user_name' => $user_fullname, 'time' => $time, 'avatar' => $avatar);
            }
        }
        return array('message_old' => $message_old, 'message_new' => $message_new);
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
