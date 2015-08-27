<?php

/**
 * Subclass for performing query and update operations on the 'setting_site' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SettingSitePeer extends BaseSettingSitePeer
{
    public static function get_setting_site($host){
        $c = new Criteria();
        $c->add(self::PARTNER_ID,$host->getId());
        $rs = self::doSelectOne($c);
        if($rs){
        	return $rs;
        }
    }
}
