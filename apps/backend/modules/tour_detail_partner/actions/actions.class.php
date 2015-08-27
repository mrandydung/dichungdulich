<?php

/**
 * tour_detail_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage tour_detail_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class tour_detail_partnerActions extends autotour_detail_partnerActions
{
	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(TourDetailPeer::PARTNER_ID,myUser::get_partner_id());
	}
}
