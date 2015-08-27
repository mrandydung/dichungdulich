<?php

/**
 * diem_den_item actions.
 *
 * @package    sf_sandbox
 * @subpackage diem_den_item
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class diem_den_itemActions extends autodiem_den_itemActions
{
	protected function addFiltersCriteria($c)
	{
		parent::addFiltersCriteria($c);
		$name = isset($this->filters['name']) && $this->filters['name'];
		
		if($name){
			$c->add(HomeDiemDenItemPeer::NAME,'%'.str_replace('*', '%', $this->filters['name']).'%', Criteria::LIKE);
		}
	}
}
