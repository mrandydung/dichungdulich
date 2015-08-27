<?php



class TripAccquirementsImgMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TripAccquirementsImgMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('trip_accquirements_img');
		$tMap->setPhpName('TripAccquirementsImg');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMAGES_THUMB', 'ImagesThumb', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addForeignKey('TRIP_ACCQUIREMENTS_ID', 'TripAccquirementsId', 'int', CreoleTypes::INTEGER, 'trip_acquirements', 'ID', false, null);

	} 
} 