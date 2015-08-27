<?php



class PointLevelMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PointLevelMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('point_level');
		$tMap->setPhpName('PointLevel');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('POINT', 'Point', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 