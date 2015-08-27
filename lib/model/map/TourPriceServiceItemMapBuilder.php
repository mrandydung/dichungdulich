<?php



class TourPriceServiceItemMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourPriceServiceItemMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_price_service_item');
		$tMap->setPhpName('TourPriceServiceItem');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('PRICE', 'Price', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('PRICE_NEW', 'PriceNew', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 