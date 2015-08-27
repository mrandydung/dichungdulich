<?php

/**
 * Subclass for performing query and update operations on the 'type_pricing' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TypePricingPeer extends BaseTypePricingPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
