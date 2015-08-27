<?php

/**
 * Subclass for representing a row from the 'transaction_status' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TransactionStatus extends BaseTransactionStatus
{
	public function __toString(){
		return $this->getName();
	}
}
