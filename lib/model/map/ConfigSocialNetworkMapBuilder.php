<?php



class ConfigSocialNetworkMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.ConfigSocialNetworkMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('config_social_network');
		$tMap->setPhpName('ConfigSocialNetwork');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addColumn('LINK_FACEBOOK', 'LinkFacebook', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('LINK_GOOGLE', 'LinkGoogle', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('LINK_INSTAGRAM', 'LinkInstagram', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('LINK_PINTEREST', 'LinkPinterest', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('LINK_YOUTUBE', 'LinkYoutube', 'string', CreoleTypes::VARCHAR, false, 200);

	} 
} 