<?php

/**
 * Subclass for performing query and update operations on the 'tour_coo_item' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TourCooItemPeer extends BaseTourCooItemPeer
{
	public static function get_all_by_tour_id($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_ID,$tour_id);
		$c->add(self::IS_END,false);
		return self::doSelect($c);
	}

	public static function get_one_end($tour_id){
		$c = new Criteria();
		$c->add(self::TOUR_ID,$tour_id);
		$c->add(self::IS_END,1);
		$c->setLimit(1);
		$c->addSelectColumn(self::ID);
		$rs = self::doSelectRS($c);
		$id = 0;
		while($rs->next()){
			$id = $rs->get(1);
		}
		return $id;
	
	}
}
