<?php



class BlogMenuCategoryMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BlogMenuCategoryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('blog_menu_category');
		$tMap->setPhpName('BlogMenuCategory');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME_EN', 'NameEn', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

	} 
} 