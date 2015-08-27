<?php

/**
 * Subclass for performing query and update operations on the 'tour_discount_type' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDiscountTypePeer extends BaseTourDiscountTypePeer
{
	public function __toString(){
		return $this->getName();
	}
}
