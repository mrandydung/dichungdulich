<?php


abstract class BaseMailOutboxPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'mail_outbox';

	
	const CLASS_DEFAULT = 'lib.model.MailOutbox';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'mail_outbox.ID';

	
	const SEND_TO = 'mail_outbox.SEND_TO';

	
	const SEND_FROM = 'mail_outbox.SEND_FROM';

	
	const SEND_FROM_NAME = 'mail_outbox.SEND_FROM_NAME';

	
	const MESSAGE = 'mail_outbox.MESSAGE';

	
	const TITLE = 'mail_outbox.TITLE';

	
	const CREATED_AT = 'mail_outbox.CREATED_AT';

	
	const SENT_AT = 'mail_outbox.SENT_AT';

	
	const PRIORITY = 'mail_outbox.PRIORITY';

	
	const STATUS = 'mail_outbox.STATUS';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'SendTo', 'SendFrom', 'SendFromName', 'Message', 'Title', 'CreatedAt', 'SentAt', 'Priority', 'Status', ),
		BasePeer::TYPE_COLNAME => array (MailOutboxPeer::ID, MailOutboxPeer::SEND_TO, MailOutboxPeer::SEND_FROM, MailOutboxPeer::SEND_FROM_NAME, MailOutboxPeer::MESSAGE, MailOutboxPeer::TITLE, MailOutboxPeer::CREATED_AT, MailOutboxPeer::SENT_AT, MailOutboxPeer::PRIORITY, MailOutboxPeer::STATUS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'send_to', 'send_from', 'send_from_name', 'message', 'title', 'created_at', 'sent_at', 'priority', 'status', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'SendTo' => 1, 'SendFrom' => 2, 'SendFromName' => 3, 'Message' => 4, 'Title' => 5, 'CreatedAt' => 6, 'SentAt' => 7, 'Priority' => 8, 'Status' => 9, ),
		BasePeer::TYPE_COLNAME => array (MailOutboxPeer::ID => 0, MailOutboxPeer::SEND_TO => 1, MailOutboxPeer::SEND_FROM => 2, MailOutboxPeer::SEND_FROM_NAME => 3, MailOutboxPeer::MESSAGE => 4, MailOutboxPeer::TITLE => 5, MailOutboxPeer::CREATED_AT => 6, MailOutboxPeer::SENT_AT => 7, MailOutboxPeer::PRIORITY => 8, MailOutboxPeer::STATUS => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'send_to' => 1, 'send_from' => 2, 'send_from_name' => 3, 'message' => 4, 'title' => 5, 'created_at' => 6, 'sent_at' => 7, 'priority' => 8, 'status' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.MailOutboxMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = MailOutboxPeer::getTableMap();
			$columns = $map->getColumns();
			$nameMap = array();
			foreach ($columns as $column) {
				$nameMap[$column->getPhpName()] = $column->getColumnName();
			}
			self::$phpNameMap = $nameMap;
		}
		return self::$phpNameMap;
	}
	
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	
	public static function alias($alias, $column)
	{
		return str_replace(MailOutboxPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(MailOutboxPeer::ID);

		$criteria->addSelectColumn(MailOutboxPeer::SEND_TO);

		$criteria->addSelectColumn(MailOutboxPeer::SEND_FROM);

		$criteria->addSelectColumn(MailOutboxPeer::SEND_FROM_NAME);

		$criteria->addSelectColumn(MailOutboxPeer::MESSAGE);

		$criteria->addSelectColumn(MailOutboxPeer::TITLE);

		$criteria->addSelectColumn(MailOutboxPeer::CREATED_AT);

		$criteria->addSelectColumn(MailOutboxPeer::SENT_AT);

		$criteria->addSelectColumn(MailOutboxPeer::PRIORITY);

		$criteria->addSelectColumn(MailOutboxPeer::STATUS);

	}

	const COUNT = 'COUNT(mail_outbox.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT mail_outbox.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(MailOutboxPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(MailOutboxPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = MailOutboxPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}
	
	public static function doSelectOne(Criteria $criteria, $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = MailOutboxPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return MailOutboxPeer::populateObjects(MailOutboxPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			MailOutboxPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = MailOutboxPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

  static public function getUniqueColumnNames()
  {
    return array();
  }
	
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	
	public static function getOMClass()
	{
		return MailOutboxPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(MailOutboxPeer::ID); 

				$criteria->setDbName(self::DATABASE_NAME);

		try {
									$con->begin();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollback();
			throw $e;
		}

		return $pk;
	}

	
	public static function doUpdate($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; 
			$comparison = $criteria->getComparison(MailOutboxPeer::ID);
			$selectCriteria->add(MailOutboxPeer::ID, $criteria->remove(MailOutboxPeer::ID), $comparison);

		} else { 			$criteria = $values->buildCriteria(); 			$selectCriteria = $values->buildPkeyCriteria(); 		}

				$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}
		$affectedRows = 0; 		try {
									$con->begin();
			$affectedRows += BasePeer::doDeleteAll(MailOutboxPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	 public static function doDelete($values, $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(MailOutboxPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof MailOutbox) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(MailOutboxPeer::ID, (array) $values, Criteria::IN);
		}

				$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; 
		try {
									$con->begin();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public static function doValidate(MailOutbox $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(MailOutboxPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(MailOutboxPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(MailOutboxPeer::DATABASE_NAME, MailOutboxPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = MailOutboxPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
            $request->setError($col, $failed->getMessage());
        }
    }

    return $res;
	}

	
	static $static_object_pk = array();
	public static function retrieveByPK($pk, $con = null)
	{
		if(!isset(self::$static_object_pk[$pk])){
			if ($con === null) {
				$con = Propel::getConnection(self::DATABASE_NAME);
			}

			$criteria = new Criteria(MailOutboxPeer::DATABASE_NAME);
	
			$criteria->add(MailOutboxPeer::ID, $pk);
	

			$v = MailOutboxPeer::doSelect($criteria, $con);
			self::$static_object_pk[$pk] = $v;
		}
		return !empty(self::$static_object_pk[$pk]) > 0 ? self::$static_object_pk[$pk][0] : null;
	}

	
	public static function retrieveByPKs($pks, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria();
			$criteria->add(MailOutboxPeer::ID, $pks, Criteria::IN);
			$objs = MailOutboxPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseMailOutboxPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.MailOutboxMapBuilder');
}
