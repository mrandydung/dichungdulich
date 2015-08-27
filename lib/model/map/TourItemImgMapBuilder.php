<?php



class TourItemImgMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourItemImgMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('tour_item_img');
		$tMap->setPhpName('TourItemImg');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('TOUR_ID', 'TourId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

	} 
} 