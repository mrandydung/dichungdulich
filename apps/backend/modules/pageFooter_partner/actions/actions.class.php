<?php

/**
 * pageFooter_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage pageFooter_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class pageFooter_partnerActions extends autopageFooter_partnerActions
{

	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(PageFooterPeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updatePageFooterFromRequest(){
		parent::updatePageFooterFromRequest();
	    $page_footer = $this->getRequestParameter('page_footer');
		$this->page_footer->setPartnerId(myUser::get_partner_id());
		$row_page_footer_id = $this->getRequestParameter('page_footer[row_page_footer_id]');
		$this->page_footer->setRowPageFooterId($row_page_footer_id);
	}
}
