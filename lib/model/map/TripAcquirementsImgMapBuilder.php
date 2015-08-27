<?php



class TripAcquirementsImgMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TripAcquirementsImgMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('trip_acquirements_img');
		$tMap->setPhpName('TripAcquirementsImg');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMAGES_THUMB', 'ImagesThumb', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addForeignKey('TRIP_ACQUIREMENTS_ID', 'TripAcquirementsId', 'int', CreoleTypes::INTEGER, 'trip_acquirements', 'ID', false, null);

	} 
} 