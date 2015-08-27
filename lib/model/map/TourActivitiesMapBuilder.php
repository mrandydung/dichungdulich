<?php



class TourActivitiesMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourActivitiesMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_activities');
		$tMap->setPhpName('TourActivities');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME_EN', 'NameEn', 'string', CreoleTypes::VARCHAR, false, 50);

	} 
} 