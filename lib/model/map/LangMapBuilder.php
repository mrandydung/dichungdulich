<?php



class LangMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.LangMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('lang');
		$tMap->setPhpName('Lang');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('CODE', 'Code', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VN', 'Vn', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('EN', 'En', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 