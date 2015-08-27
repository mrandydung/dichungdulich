<?php

/**
 * setting_site_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage setting_site_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class setting_site_partnerActions extends autosetting_site_partnerActions
{

	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(SettingSitePeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updateSettingSiteFromRequest(){
		parent::updateSettingSiteFromRequest();
	    $setting_site = $this->getRequestParameter('setting_site');
		$this->setting_site->setPartnerId(myUser::get_partner_id());
	}
}
