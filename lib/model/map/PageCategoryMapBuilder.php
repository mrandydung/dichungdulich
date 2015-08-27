<?php



class PageCategoryMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.PageCategoryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('page_category');
		$tMap->setPhpName('PageCategory');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 