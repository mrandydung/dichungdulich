<?php

/**
 * Subclass for performing query and update operations on the 'user_register_accept_email' table.
 *
 * 
 *
 * @package lib.model
 */ 
class UserRegisterAcceptEmailPeer extends BaseUserRegisterAcceptEmailPeer
{
	public static function count_email_user($email){
		$c = new Criteria();
		$c->add(self::EMAIL,$email);
		return self::doCount($c);
	}
}
