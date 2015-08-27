<?php



class ScheduledCostTourMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ScheduledCostTourMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('scheduled_cost_tour');
		$tMap->setPhpName('ScheduledCostTour');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_ID', 'TourId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addForeignKey('SUGGEST_COST_CATEGORY_ID', 'SuggestCostCategoryId', 'int', CreoleTypes::INTEGER, 'suggest_cost_category', 'ID', false, null);

		$tMap->addColumn('PRICE', 'Price', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 