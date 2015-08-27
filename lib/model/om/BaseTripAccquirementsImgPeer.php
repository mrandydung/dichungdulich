<?php


abstract class BaseTripAccquirementsImgPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'trip_accquirements_img';

	
	const CLASS_DEFAULT = 'lib.model.TripAccquirementsImg';

	
	const NUM_COLUMNS = 4;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'trip_accquirements_img.ID';

	
	const IMAGES = 'trip_accquirements_img.IMAGES';

	
	const IMAGES_THUMB = 'trip_accquirements_img.IMAGES_THUMB';

	
	const TRIP_ACCQUIREMENTS_ID = 'trip_accquirements_img.TRIP_ACCQUIREMENTS_ID';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Images', 'ImagesThumb', 'TripAccquirementsId', ),
		BasePeer::TYPE_COLNAME => array (TripAccquirementsImgPeer::ID, TripAccquirementsImgPeer::IMAGES, TripAccquirementsImgPeer::IMAGES_THUMB, TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'images', 'images_thumb', 'trip_accquirements_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Images' => 1, 'ImagesThumb' => 2, 'TripAccquirementsId' => 3, ),
		BasePeer::TYPE_COLNAME => array (TripAccquirementsImgPeer::ID => 0, TripAccquirementsImgPeer::IMAGES => 1, TripAccquirementsImgPeer::IMAGES_THUMB => 2, TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID => 3, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'images' => 1, 'images_thumb' => 2, 'trip_accquirements_id' => 3, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TripAccquirementsImgMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TripAccquirementsImgPeer::getTableMap();
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
		return str_replace(TripAccquirementsImgPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TripAccquirementsImgPeer::ID);

		$criteria->addSelectColumn(TripAccquirementsImgPeer::IMAGES);

		$criteria->addSelectColumn(TripAccquirementsImgPeer::IMAGES_THUMB);

		$criteria->addSelectColumn(TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID);

	}

	const COUNT = 'COUNT(trip_accquirements_img.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT trip_accquirements_img.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TripAccquirementsImgPeer::doSelectRS($criteria, $con);
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
		$objects = TripAccquirementsImgPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TripAccquirementsImgPeer::populateObjects(TripAccquirementsImgPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TripAccquirementsImgPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TripAccquirementsImgPeer::getOMClass();
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
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = TripAccquirementsImgPeer::doSelectRS($criteria, $con);
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

		TripAccquirementsImgPeer::addSelectColumns($c);
		$startcol = (TripAccquirementsImgPeer::NUM_COLUMNS - TripAccquirementsImgPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TripAcquirementsPeer::addSelectColumns($c);

		$c->addJoin(TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID, TripAcquirementsPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAccquirementsImgPeer::getOMClass();

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
										$temp_obj2->addTripAccquirementsImg($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripAccquirementsImgs();
				$obj2->addTripAccquirementsImg($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAccquirementsImgPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = TripAccquirementsImgPeer::doSelectRS($criteria, $con);
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

		TripAccquirementsImgPeer::addSelectColumns($c);
		$startcol2 = (TripAccquirementsImgPeer::NUM_COLUMNS - TripAccquirementsImgPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripAcquirementsPeer::NUM_COLUMNS;

		$c->addJoin(TripAccquirementsImgPeer::TRIP_ACCQUIREMENTS_ID, TripAcquirementsPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAccquirementsImgPeer::getOMClass();


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
					$temp_obj2->addTripAccquirementsImg($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAccquirementsImgs();
				$obj2->addTripAccquirementsImg($obj1);
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
		return TripAccquirementsImgPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TripAccquirementsImgPeer::ID); 

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
			$comparison = $criteria->getComparison(TripAccquirementsImgPeer::ID);
			$selectCriteria->add(TripAccquirementsImgPeer::ID, $criteria->remove(TripAccquirementsImgPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TripAccquirementsImgPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TripAccquirementsImgPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TripAccquirementsImg) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TripAccquirementsImgPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TripAccquirementsImg $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TripAccquirementsImgPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TripAccquirementsImgPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TripAccquirementsImgPeer::DATABASE_NAME, TripAccquirementsImgPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TripAccquirementsImgPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TripAccquirementsImgPeer::DATABASE_NAME);
	
			$criteria->add(TripAccquirementsImgPeer::ID, $pk);
	

			$v = TripAccquirementsImgPeer::doSelect($criteria, $con);
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
			$criteria->add(TripAccquirementsImgPeer::ID, $pks, Criteria::IN);
			$objs = TripAccquirementsImgPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTripAccquirementsImgPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TripAccquirementsImgMapBuilder');
}
