<?php

/**
 * Subclass for performing query and update operations on the 'tour_date_request_service' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourDateRequestServicePeer extends BaseTourDateRequestServicePeer
{

	public static function get_date_request_tour($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doSelect($c);
	}

	public static function count_date_request_tour($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doCount($c);
	}

	public static function count_request($tour_id,$date){
		$c = new Criteria();
		$c->add(self::DATE,date('Y-m-d',strtotime($date)))
			->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doCount($c);
	}
}
