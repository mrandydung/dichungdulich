<?php



class HomeDiemDenItemPartnerMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.HomeDiemDenItemPartnerMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('home_diem_den_item_partner');
		$tMap->setPhpName('HomeDiemDenItemPartner');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addForeignKey('REGION_ID', 'RegionId', 'int', CreoleTypes::INTEGER, 'region', 'ID', false, null);

		$tMap->addForeignKey('AREA_ID', 'AreaId', 'int', CreoleTypes::INTEGER, 'area', 'ID', false, null);

		$tMap->addForeignKey('CITY_ID', 'CityId', 'int', CreoleTypes::INTEGER, 'city', 'ID', false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMG', 'Img', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('GOOGLE_ADDRESS', 'GoogleAddress', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('GOOGLE_POSITION', 'GooglePosition', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('KEYWORD', 'Keyword', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ON_HOMEPAGE', 'OnHomepage', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 