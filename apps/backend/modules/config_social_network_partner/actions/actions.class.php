<?php

/**
 * config_social_network_partner actions.
 *
 * @package    sf_sandbox
 * @subpackage config_social_network_partner
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class config_social_network_partnerActions extends autoconfig_social_network_partnerActions
{
	protected function addFiltersCriteria($c){
		parent::addFiltersCriteria($c);
		$c->add(ConfigSocialNetworkPeer::PARTNER_ID,myUser::get_partner_id());
	}
}
