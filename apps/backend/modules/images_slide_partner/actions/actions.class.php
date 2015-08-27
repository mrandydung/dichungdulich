<?php

/**
 * images_slide_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage images_slide_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class images_slide_partnerActions extends autoimages_slide_partnerActions
{
	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(ImagesSlidePeer::PARTNER_ID,myUser::get_partner_id());
	}

	protected function updateImagesSlideFromRequest(){
		parent::updateImagesSlideFromRequest();
	    $images_slide = $this->getRequestParameter('images_slide');
		$this->images_slide->setPartnerId(myUser::get_partner_id());
	}
}
