<?php

/**
 * Subclass for performing query and update operations on the 'type_pricing_service' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypePricingServicePeer extends BaseTypePricingServicePeer
{
	
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
