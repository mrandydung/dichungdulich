<?php



class HomeDiemDenItemMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.HomeDiemDenItemMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('home_diem_den_item');
		$tMap->setPhpName('HomeDiemDenItem');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('REGION_ID', 'RegionId', 'int', CreoleTypes::INTEGER, 'region', 'ID', false, null);

		$tMap->addForeignKey('AREA_ID', 'AreaId', 'int', CreoleTypes::INTEGER, 'area', 'ID', false, null);

		$tMap->addForeignKey('CITY_ID', 'CityId', 'int', CreoleTypes::INTEGER, 'city', 'ID', false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMG', 'Img', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMG_SEARCH', 'ImgSearch', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('GOOGLE_ADDRESS', 'GoogleAddress', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('GOOGLE_POSITION', 'GooglePosition', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('KEYWORD', 'Keyword', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('HIDE', 'Hide', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CONTENT_ABOUT', 'ContentAbout', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ENABLE_DOMESTIC', 'EnableDomestic', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('ENABLE_INTERNATIONAL', 'EnableInternational', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('ENABLE_FEATURED', 'EnableFeatured', 'boolean', CreoleTypes::BOOLEAN, false, null);

	} 
} 