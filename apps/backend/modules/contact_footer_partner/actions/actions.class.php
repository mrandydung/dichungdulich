<?php

/**
 * contact_footer_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage contact_footer_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class contact_footer_partnerActions extends autocontact_footer_partnerActions
{
	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(ContactFooterPeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updateContactFooterFromRequest(){
		parent::updateContactFooterFromRequest();
	    $contact_footer = $this->getRequestParameter('contact_footer');
		$this->contact_footer->setPartnerId(myUser::get_partner_id());	
	}
}
