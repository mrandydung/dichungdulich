<?php

/**
 * Subclass for performing query and update operations on the 'suggest_cost_category' table.
 *
 * 
 *
 * @package lib.model
 */ 
class SuggestCostCategoryPeer extends BaseSuggestCostCategoryPeer
{
	public static function getAll(){
		return self::doSelect(new Criteria());
	}
}
