<?php

class ConfigSocialNetworkPeer extends BaseConfigSocialNetworkPeer
{
	public static function get_social_network_by_partner($partner_id)
	{
		$c = new Criteria();
		$c->add(self::PARTNER_ID,$partner_id);
		return self::doSelectOne($c);

	}
}
