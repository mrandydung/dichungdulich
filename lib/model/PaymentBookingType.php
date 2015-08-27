<?php

/**
 * Subclass for representing a row from the 'payment_booking_type' table.
 *
 * 
 *
 * @package lib.model
 */
class PaymentBookingType extends BasePaymentBookingType {

    public function __toString() {
        return $this->getName();
    }

}
