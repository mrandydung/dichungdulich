<?php

/**
 * Subclass for performing query and update operations on the 'scheduled_cost_tour' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ScheduledCostTourPeer extends BaseScheduledCostTourPeer
{
	public static function count_exist($tour_id,$suggest_cost_category_id){
		$c = new Criteria();
		$c->add(self::TOUR_ID,$tour_id);
		$c->add(self::SUGGEST_COST_CATEGORY_ID,$suggest_cost_category_id);
		return self::doCount($c);
	}

	public static function getAll($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_ID,$tour_id);
		return self::doSelect($c);
	}

	public static function get_all_price_schedule($scheduled_cost){
		$price = array();
		foreach ($scheduled_cost as $key => $value) {
			$price []= $value->getPrice();
		}
		return array_sum($price);
	}
}
