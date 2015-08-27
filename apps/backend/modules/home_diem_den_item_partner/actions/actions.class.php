<?php

/**
 * home_diem_den_item_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage home_diem_den_item_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class home_diem_den_item_partnerActions extends autohome_diem_den_item_partnerActions
{
	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(HomeDiemDenItemPartnerPeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updateHomeDiemDenItemPartnerFromRequest(){
		parent::updateHomeDiemDenItemPartnerFromRequest();
	    $home_diem_den_item_partner = $this->getRequestParameter('home_diem_den_item_partner');
		$this->home_diem_den_item_partner->setPartnerId(myUser::get_partner_id());

	}
}
