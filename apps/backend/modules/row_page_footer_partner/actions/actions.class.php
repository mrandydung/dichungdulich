<?php

/**
 * row_page_footer_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage row_page_footer_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class row_page_footer_partnerActions extends autorow_page_footer_partnerActions
{

	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(RowPageFooterPeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updateRowPageFooterFromRequest(){
		parent::updateRowPageFooterFromRequest();
	    $row_page_footer = $this->getRequestParameter('row_page_footer');
		$this->row_page_footer->setPartnerId(myUser::get_partner_id());
	}
}
