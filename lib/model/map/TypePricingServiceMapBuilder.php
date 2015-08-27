<?php



class TypePricingServiceMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TypePricingServiceMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('type_pricing_service');
		$tMap->setPhpName('TypePricingService');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, null);

		$tMap->addColumn('NAME_EN', 'NameEn', 'string', CreoleTypes::VARCHAR, false, null);

	} 
} 