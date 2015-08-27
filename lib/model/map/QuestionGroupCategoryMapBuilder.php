<?php



class QuestionGroupCategoryMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.QuestionGroupCategoryMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('question_group_category');
		$tMap->setPhpName('QuestionGroupCategory');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('NAME_EN', 'NameEn', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('IMAGES_THUMB', 'ImagesThumb', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('SLOGEN', 'Slogen', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

	} 
} 