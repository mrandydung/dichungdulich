<?php

/**
 * Subclass for performing query and update operations on the 'contact_footer' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ContactFooterPeer extends BaseContactFooterPeer
{
    public static function get_address_by_partner($partner_id){
        $c = new Criteria();
        $c->add(self::PARTNER_ID,$partner_id);
        $rs =  self::doSelectOne($c);
        if($rs){
            return $rs->getContent();
        }else{
            return '';
        }
        
    }
}
