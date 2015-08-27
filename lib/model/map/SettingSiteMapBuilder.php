<?php



class SettingSiteMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.SettingSiteMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('setting_site');
		$tMap->setPhpName('SettingSite');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addColumn('SLOGEN_SLIDE', 'SlogenSlide', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('SLOGEN_SLIDE_EN', 'SlogenSlideEn', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('TITLE_SITE', 'TitleSite', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('TITLE_SITE_EN', 'TitleSiteEn', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('DESCRIPTION_SITE', 'DescriptionSite', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DESCRIPTION_SITE_EN', 'DescriptionSiteEn', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 