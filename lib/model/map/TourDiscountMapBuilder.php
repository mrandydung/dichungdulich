<?php



class TourDiscountMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourDiscountMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_discount');
		$tMap->setPhpName('TourDiscount');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addForeignKey('TOUR_DISCOUNT_TYPE_ID', 'TourDiscountTypeId', 'int', CreoleTypes::INTEGER, 'tour_discount_type', 'ID', false, null);

		$tMap->addColumn('DISCOUNT', 'Discount', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_START', 'DateStart', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_END', 'DateEnd', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('NUMBER_DISCOUNT', 'NumberDiscount', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 