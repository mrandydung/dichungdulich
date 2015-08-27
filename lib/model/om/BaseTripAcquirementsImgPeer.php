<?php


abstract class BaseTripAcquirementsImgPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'trip_acquirements_img';

	
	const CLASS_DEFAULT = 'lib.model.TripAcquirementsImg';

	
	const NUM_COLUMNS = 4;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'trip_acquirements_img.ID';

	
	const IMAGES = 'trip_acquirements_img.IMAGES';

	
	const IMAGES_THUMB = 'trip_acquirements_img.IMAGES_THUMB';

	
	const TRIP_ACQUIREMENTS_ID = 'trip_acquirements_img.TRIP_ACQUIREMENTS_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Images', 'ImagesThumb', 'TripAcquirementsId', ),
		BasePeer::TYPE_COLNAME => array (TripAcquirementsImgPeer::ID, TripAcquirementsImgPeer::IMAGES, TripAcquirementsImgPeer::IMAGES_THUMB, TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'images', 'images_thumb', 'trip_acquirements_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Images' => 1, 'ImagesThumb' => 2, 'TripAcquirementsId' => 3, ),
		BasePeer::TYPE_COLNAME => array (TripAcquirementsImgPeer::ID => 0, TripAcquirementsImgPeer::IMAGES => 1, TripAcquirementsImgPeer::IMAGES_THUMB => 2, TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID => 3, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'images' => 1, 'images_thumb' => 2, 'trip_acquirements_id' => 3, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TripAcquirementsImgMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TripAcquirementsImgPeer::getTableMap();
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
		return str_replace(TripAcquirementsImgPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TripAcquirementsImgPeer::ID);

		$criteria->addSelectColumn(TripAcquirementsImgPeer::IMAGES);

		$criteria->addSelectColumn(TripAcquirementsImgPeer::IMAGES_THUMB);

		$criteria->addSelectColumn(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID);

	}

	const COUNT = 'COUNT(trip_acquirements_img.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT trip_acquirements_img.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TripAcquirementsImgPeer::doSelectRS($criteria, $con);
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
		$objects = TripAcquirementsImgPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TripAcquirementsImgPeer::populateObjects(TripAcquirementsImgPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TripAcquirementsImgPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TripAcquirementsImgPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTripAcquirements(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = TripAcquirementsImgPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTripAcquirements(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TripAcquirementsImgPeer::addSelectColumns($c);
		$startcol = (TripAcquirementsImgPeer::NUM_COLUMNS - TripAcquirementsImgPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TripAcquirementsPeer::addSelectColumns($c);

		$c->addJoin(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, TripAcquirementsPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsImgPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TripAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTripAcquirements(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTripAcquirementsImg($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripAcquirementsImgs();
				$obj2->addTripAcquirementsImg($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = TripAcquirementsImgPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAll(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TripAcquirementsImgPeer::addSelectColumns($c);
		$startcol2 = (TripAcquirementsImgPeer::NUM_COLUMNS - TripAcquirementsImgPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripAcquirementsPeer::NUM_COLUMNS;

		$c->addJoin(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsImgPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TripAcquirementsPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTripAcquirements(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTripAcquirementsImg($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAcquirementsImgs();
				$obj2->addTripAcquirementsImg($obj1);
			}

			$results[] = $obj1;
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
		return TripAcquirementsImgPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TripAcquirementsImgPeer::ID); 

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
			$comparison = $criteria->getComparison(TripAcquirementsImgPeer::ID);
			$selectCriteria->add(TripAcquirementsImgPeer::ID, $criteria->remove(TripAcquirementsImgPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TripAcquirementsImgPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TripAcquirementsImgPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TripAcquirementsImg) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TripAcquirementsImgPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TripAcquirementsImg $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TripAcquirementsImgPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TripAcquirementsImgPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TripAcquirementsImgPeer::DATABASE_NAME, TripAcquirementsImgPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TripAcquirementsImgPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TripAcquirementsImgPeer::DATABASE_NAME);
	
			$criteria->add(TripAcquirementsImgPeer::ID, $pk);
	

			$v = TripAcquirementsImgPeer::doSelect($criteria, $con);
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
			$criteria->add(TripAcquirementsImgPeer::ID, $pks, Criteria::IN);
			$objs = TripAcquirementsImgPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTripAcquirementsImgPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TripAcquirementsImgMapBuilder');
}
