<?php

/**
 * Subclass for performing query and update operations on the 'payment_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class PaymentTypePeer extends BasePaymentTypePeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
