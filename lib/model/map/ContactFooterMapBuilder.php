<?php



class ContactFooterMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ContactFooterMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('contact_footer');
		$tMap->setPhpName('ContactFooter');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 