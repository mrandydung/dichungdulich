<?php

/**
 * booking_tour_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage booking_tour_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class booking_tour_partnerActions extends autobooking_tour_partnerActions
{
	protected function addFiltersCriteria($c){
		$u = $this->getUser();
		parent::addFiltersCriteria($c);
		$c->add(BookingTourPeer::PARTNER_ID,myUser::get_partner_id());
	}
	
}
