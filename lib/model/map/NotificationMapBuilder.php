<?php



class NotificationMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.NotificationMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('notification');
		$tMap->setPhpName('Notification');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_SEND', 'UserSend', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addColumn('USER_RECEIVER', 'UserReceiver', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::VARCHAR, false, 500);

		$tMap->addColumn('DETAIL', 'Detail', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('READED', 'Readed', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 