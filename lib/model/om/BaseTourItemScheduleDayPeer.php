<?php


abstract class BaseTourItemScheduleDayPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour_item_schedule_day';

	
	const CLASS_DEFAULT = 'lib.model.TourItemScheduleDay';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour_item_schedule_day.ID';

	
	const TOUR_DETAIL_ID = 'tour_item_schedule_day.TOUR_DETAIL_ID';

	
	const DAY = 'tour_item_schedule_day.DAY';

	
	const TITLE = 'tour_item_schedule_day.TITLE';

	
	const DESCRIPTION = 'tour_item_schedule_day.DESCRIPTION';

	
	const VEHICLE = 'tour_item_schedule_day.VEHICLE';

	
	const CREATED_AT = 'tour_item_schedule_day.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TourDetailId', 'Day', 'Title', 'Description', 'Vehicle', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (TourItemScheduleDayPeer::ID, TourItemScheduleDayPeer::TOUR_DETAIL_ID, TourItemScheduleDayPeer::DAY, TourItemScheduleDayPeer::TITLE, TourItemScheduleDayPeer::DESCRIPTION, TourItemScheduleDayPeer::VEHICLE, TourItemScheduleDayPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'tour_detail_id', 'day', 'title', 'description', 'vehicle', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TourDetailId' => 1, 'Day' => 2, 'Title' => 3, 'Description' => 4, 'Vehicle' => 5, 'CreatedAt' => 6, ),
		BasePeer::TYPE_COLNAME => array (TourItemScheduleDayPeer::ID => 0, TourItemScheduleDayPeer::TOUR_DETAIL_ID => 1, TourItemScheduleDayPeer::DAY => 2, TourItemScheduleDayPeer::TITLE => 3, TourItemScheduleDayPeer::DESCRIPTION => 4, TourItemScheduleDayPeer::VEHICLE => 5, TourItemScheduleDayPeer::CREATED_AT => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'tour_detail_id' => 1, 'day' => 2, 'title' => 3, 'description' => 4, 'vehicle' => 5, 'created_at' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourItemScheduleDayMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourItemScheduleDayPeer::getTableMap();
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
		return str_replace(TourItemScheduleDayPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourItemScheduleDayPeer::ID);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::TOUR_DETAIL_ID);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::DAY);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::TITLE);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::DESCRIPTION);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::VEHICLE);

		$criteria->addSelectColumn(TourItemScheduleDayPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(tour_item_schedule_day.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour_item_schedule_day.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourItemScheduleDayPeer::doSelectRS($criteria, $con);
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
		$objects = TourItemScheduleDayPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourItemScheduleDayPeer::populateObjects(TourItemScheduleDayPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourItemScheduleDayPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourItemScheduleDayPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTourDetail(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourItemScheduleDayPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourItemScheduleDayPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTourDetail(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourItemScheduleDayPeer::addSelectColumns($c);
		$startcol = (TourItemScheduleDayPeer::NUM_COLUMNS - TourItemScheduleDayPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(TourItemScheduleDayPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourItemScheduleDayPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourDetail(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourItemScheduleDay($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourItemScheduleDays();
				$obj2->addTourItemScheduleDay($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourItemScheduleDayPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourItemScheduleDayPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourItemScheduleDayPeer::doSelectRS($criteria, $con);
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

		TourItemScheduleDayPeer::addSelectColumns($c);
		$startcol2 = (TourItemScheduleDayPeer::NUM_COLUMNS - TourItemScheduleDayPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(TourItemScheduleDayPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourItemScheduleDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTourDetail(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTourItemScheduleDay($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTourItemScheduleDays();
				$obj2->addTourItemScheduleDay($obj1);
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
		return TourItemScheduleDayPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourItemScheduleDayPeer::ID); 

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
			$comparison = $criteria->getComparison(TourItemScheduleDayPeer::ID);
			$selectCriteria->add(TourItemScheduleDayPeer::ID, $criteria->remove(TourItemScheduleDayPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourItemScheduleDayPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourItemScheduleDayPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TourItemScheduleDay) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourItemScheduleDayPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TourItemScheduleDay $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourItemScheduleDayPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourItemScheduleDayPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourItemScheduleDayPeer::DATABASE_NAME, TourItemScheduleDayPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourItemScheduleDayPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourItemScheduleDayPeer::DATABASE_NAME);
	
			$criteria->add(TourItemScheduleDayPeer::ID, $pk);
	

			$v = TourItemScheduleDayPeer::doSelect($criteria, $con);
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
			$criteria->add(TourItemScheduleDayPeer::ID, $pks, Criteria::IN);
			$objs = TourItemScheduleDayPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourItemScheduleDayPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourItemScheduleDayMapBuilder');
}
