<?php


class PartnerPeer extends BasePartnerPeer {
    public static function get_domain($host){
        $c = new Criteria();
        $c->add(self::LINK,$host);
        return self::doSelectOne($c);
    }
}
