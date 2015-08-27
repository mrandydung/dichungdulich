<?php



class TourPercentDiscountMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourPercentDiscountMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_percent_discount');
		$tMap->setPhpName('TourPercentDiscount');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('VAL', 'Val', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 