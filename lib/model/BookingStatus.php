<?php

/**
 * Subclass for representing a row from the 'booking_status' table.
 *
 * 
 *
 * @package lib.model
 */ 
class BookingStatus extends BaseBookingStatus
{
	public function __toString(){
		return $this->getName();
	}
}
