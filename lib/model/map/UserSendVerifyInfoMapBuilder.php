<?php



class UserSendVerifyInfoMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.UserSendVerifyInfoMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('user_send_verify_info');
		$tMap->setPhpName('UserSendVerifyInfo');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addForeignKey('TYPE_VERIFY_ID', 'TypeVerifyId', 'int', CreoleTypes::INTEGER, 'verify_type', 'ID', false, null);

		$tMap->addColumn('VERIFIED', 'Verified', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IMAGE', 'Image', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 