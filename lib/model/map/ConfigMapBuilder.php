<?php



class ConfigMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ConfigMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('config');
		$tMap->setPhpName('Config');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CODE', 'Code', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VAL', 'Val', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 