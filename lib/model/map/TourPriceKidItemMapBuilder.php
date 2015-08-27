<?php



class TourPriceKidItemMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourPriceKidItemMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_price_kid_item');
		$tMap->setPhpName('TourPriceKidItem');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('FROM_AGE', 'FromAge', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TO_AGE', 'ToAge', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DISCOUNT', 'Discount', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PRICE', 'Price', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 