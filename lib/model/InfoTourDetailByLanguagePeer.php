<?php

/**
 * Subclass for performing query and update operations on the 'info_tour_detail_by_language' table.
 *
 * 
 *
 * @package lib.model
 */ 
class InfoTourDetailByLanguagePeer extends BaseInfoTourDetailByLanguagePeer
{
	public static function get_all($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		return self::doSelect($c);
	}

	public static function count_all_info($tour_id,$type_language_step_1){
		$c = new Criteria();
		$c->add(self::TOUR_DETAIL_ID,$tour_id);
		$c->add(self::TYPE_LANGUAGE_ID,$type_language_step_1);
		return self::doCount($c);
	}
}
