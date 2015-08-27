<?php



class TourCooItemMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourCooItemMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_coo_item');
		$tMap->setPhpName('TourCooItem');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_ID', 'TourId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addColumn('NAME_END', 'NameEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COO_END', 'CooEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LAT_END', 'LatEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LNG_END', 'LngEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('IS_END', 'IsEnd', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 