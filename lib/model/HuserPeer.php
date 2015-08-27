<?php

/**
 * Subclass for performing query and update operations on the 'huser' table.
 *
 * 
 *
 * @package lib.model
 */ 
class HuserPeer extends BaseHuserPeer
{
	public static function count_partner_login($username){
		$host = $_SERVER['HTTP_HOST'];
		$c = new Criteria();
		$c->add(self::USERNAME,$username);
		$c->add(self::PARTNER_ID,myUser::get_partner_id());
		return self::doCount($c);
	}
}
