<?php

/**
 * Subclass for performing query and update operations on the 'home_diem_den_item_partner' table.
 *
 * 
 *
 * @package lib.model
 */ 
class HomeDiemDenItemPartnerPeer extends BaseHomeDiemDenItemPartnerPeer
{
	public static function get_on_home_page(){
		$c = new Criteria();
		$partner_id = myUser::get_partner_id();
		$c->add(self::PARTNER_ID,$partner_id);
		$c->addDescendingOrderByColumn(self::PRIORITY);
		$c->add(self::ON_HOMEPAGE,true);
		$c->setLimit(10);
		return self::doSelect($c);
	}
}
