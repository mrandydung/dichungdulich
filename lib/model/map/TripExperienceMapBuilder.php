<?php



class TripExperienceMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TripExperienceMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('trip_experience');
		$tMap->setPhpName('TripExperience');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('END', 'End', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('COO_END', 'CooEnd', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LAT_END', 'LatEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LNG_END', 'LngEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addForeignKey('TYPE_UPLOAD_ID', 'TypeUploadId', 'int', CreoleTypes::INTEGER, 'type_upload', 'ID', false, null);

		$tMap->addColumn('IMAGES', 'Images', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('VIDEO_URL', 'VideoUrl', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CONTENT', 'Content', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('COUNT_VIEW', 'CountView', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('COUNT_LIKE', 'CountLike', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('COUNT_SHARE', 'CountShare', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('EXPERIENCE_FEATURED', 'ExperienceFeatured', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 