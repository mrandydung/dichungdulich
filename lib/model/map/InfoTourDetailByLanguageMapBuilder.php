<?php



class InfoTourDetailByLanguageMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.InfoTourDetailByLanguageMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('info_tour_detail_by_language');
		$tMap->setPhpName('InfoTourDetailByLanguage');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('TYPE_LANGUAGE_ID', 'TypeLanguageId', 'int', CreoleTypes::INTEGER, 'type_language', 'ID', false, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SCHEDULE_SIMPLE', 'ScheduleSimple', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('NOTE', 'Note', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('POLICY_ON_PRICES', 'PolicyOnPrices', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('CANCELLATION_POLICY_TOUR', 'CancellationPolicyTour', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('OTHER_NOTE', 'OtherNote', 'string', CreoleTypes::LONGVARCHAR, false, null);

	} 
} 