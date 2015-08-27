<?php



class MailOutboxMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.MailOutboxMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('mail_outbox');
		$tMap->setPhpName('MailOutbox');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addColumn('SEND_TO', 'SendTo', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SEND_FROM', 'SendFrom', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('SEND_FROM_NAME', 'SendFromName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('MESSAGE', 'Message', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('SENT_AT', 'SentAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('STATUS', 'Status', 'int', CreoleTypes::INTEGER, false, null);

	} 
} 