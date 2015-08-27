<?php



class TripExperienceImgMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TripExperienceImgMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('trip_experience_img');
		$tMap->setPhpName('TripExperienceImg');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addForeignKey('TRIP_EXPERIENCE_ID', 'TripExperienceId', 'int', CreoleTypes::INTEGER, 'trip_experience', 'ID', false, null);

	} 
} 