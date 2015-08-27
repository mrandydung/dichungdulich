<?php



class QuestionMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.QuestionMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('question');
		$tMap->setPhpName('Question');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DETAIL', 'Detail', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('QUESTION_GROUP_CATEGORY', 'QuestionGroupCategory', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ANSWER', 'Answer', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('LIKE_QUESTION', 'LikeQuestion', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SHARE', 'Share', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('VIEW', 'View', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ID_LIKE', 'IdLike', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE', 'Date', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 