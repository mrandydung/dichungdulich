<?php



class BlogMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BlogMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('blog');
		$tMap->setPhpName('Blog');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('BLOG_MENU_CATEGORY_ID', 'BlogMenuCategoryId', 'int', CreoleTypes::INTEGER, 'blog_menu_category', 'ID', false, null);

		$tMap->addForeignKey('HOME_DIEM_DEN_ITEM_ID', 'HomeDiemDenItemId', 'int', CreoleTypes::INTEGER, 'home_diem_den_item', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('DETAIL', 'Detail', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ADS_DEMO', 'AdsDemo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TAG', 'Tag', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMAGES_THUMB', 'ImagesThumb', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DATE', 'Date', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('SET_HIGHLIGHT', 'SetHighlight', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('VIEW', 'View', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 