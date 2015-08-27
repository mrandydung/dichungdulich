<?php



class TourDiscountEventMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourDiscountEventMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_discount_event');
		$tMap->setPhpName('TourDiscountEvent');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addForeignKey('TOUR_DISCOUNT_EVENT_TYPE_ID', 'TourDiscountEventTypeId', 'int', CreoleTypes::INTEGER, 'tour_discount_event_type', 'ID', false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VALUE', 'Value', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DISCOUNT', 'Discount', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DATE_START', 'DateStart', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_END', 'DateEnd', 'int', CreoleTypes::DATE, false, null);

	} 
} 