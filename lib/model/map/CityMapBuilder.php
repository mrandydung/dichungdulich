<?php



class CityMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.CityMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('city');
		$tMap->setPhpName('City');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('REGION_ID', 'RegionId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ON_HOMEPAGE', 'OnHomepage', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('HOMEPAGE_IMG', 'HomepageImg', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('NAME_OLD', 'NameOld', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('NAME_EN', 'NameEn', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 