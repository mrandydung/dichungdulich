<?php


abstract class BaseTourDiscountEventPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour_discount_event';

	
	const CLASS_DEFAULT = 'lib.model.TourDiscountEvent';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour_discount_event.ID';

	
	const TOUR_DETAIL_ID = 'tour_discount_event.TOUR_DETAIL_ID';

	
	const TOUR_DISCOUNT_EVENT_TYPE_ID = 'tour_discount_event.TOUR_DISCOUNT_EVENT_TYPE_ID';

	
	const NAME = 'tour_discount_event.NAME';

	
	const VALUE = 'tour_discount_event.VALUE';

	
	const DISCOUNT = 'tour_discount_event.DISCOUNT';

	
	const DATE_START = 'tour_discount_event.DATE_START';

	
	const DATE_END = 'tour_discount_event.DATE_END';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TourDetailId', 'TourDiscountEventTypeId', 'Name', 'Value', 'Discount', 'DateStart', 'DateEnd', ),
		BasePeer::TYPE_COLNAME => array (TourDiscountEventPeer::ID, TourDiscountEventPeer::TOUR_DETAIL_ID, TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventPeer::NAME, TourDiscountEventPeer::VALUE, TourDiscountEventPeer::DISCOUNT, TourDiscountEventPeer::DATE_START, TourDiscountEventPeer::DATE_END, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'tour_detail_id', 'tour_discount_event_type_id', 'name', 'value', 'discount', 'date_start', 'date_end', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TourDetailId' => 1, 'TourDiscountEventTypeId' => 2, 'Name' => 3, 'Value' => 4, 'Discount' => 5, 'DateStart' => 6, 'DateEnd' => 7, ),
		BasePeer::TYPE_COLNAME => array (TourDiscountEventPeer::ID => 0, TourDiscountEventPeer::TOUR_DETAIL_ID => 1, TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID => 2, TourDiscountEventPeer::NAME => 3, TourDiscountEventPeer::VALUE => 4, TourDiscountEventPeer::DISCOUNT => 5, TourDiscountEventPeer::DATE_START => 6, TourDiscountEventPeer::DATE_END => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'tour_detail_id' => 1, 'tour_discount_event_type_id' => 2, 'name' => 3, 'value' => 4, 'discount' => 5, 'date_start' => 6, 'date_end' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourDiscountEventMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourDiscountEventPeer::getTableMap();
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
		return str_replace(TourDiscountEventPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourDiscountEventPeer::ID);

		$criteria->addSelectColumn(TourDiscountEventPeer::TOUR_DETAIL_ID);

		$criteria->addSelectColumn(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID);

		$criteria->addSelectColumn(TourDiscountEventPeer::NAME);

		$criteria->addSelectColumn(TourDiscountEventPeer::VALUE);

		$criteria->addSelectColumn(TourDiscountEventPeer::DISCOUNT);

		$criteria->addSelectColumn(TourDiscountEventPeer::DATE_START);

		$criteria->addSelectColumn(TourDiscountEventPeer::DATE_END);

	}

	const COUNT = 'COUNT(tour_discount_event.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour_discount_event.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
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
		$objects = TourDiscountEventPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourDiscountEventPeer::populateObjects(TourDiscountEventPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourDiscountEventPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourDiscountEventPeer::getOMClass();
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
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourDiscountEventType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
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

		TourDiscountEventPeer::addSelectColumns($c);
		$startcol = (TourDiscountEventPeer::NUM_COLUMNS - TourDiscountEventPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountEventPeer::getOMClass();

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
										$temp_obj2->addTourDiscountEvent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDiscountEvents();
				$obj2->addTourDiscountEvent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourDiscountEventType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDiscountEventPeer::addSelectColumns($c);
		$startcol = (TourDiscountEventPeer::NUM_COLUMNS - TourDiscountEventPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDiscountEventTypePeer::addSelectColumns($c);

		$c->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountEventPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDiscountEventTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourDiscountEventType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDiscountEvent($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDiscountEvents();
				$obj2->addTourDiscountEvent($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
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

		TourDiscountEventPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountEventPeer::NUM_COLUMNS - TourDiscountEventPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		TourDiscountEventTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourDiscountEventTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountEventPeer::getOMClass();


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
					$temp_obj2->addTourDiscountEvent($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscountEvents();
				$obj2->addTourDiscountEvent($obj1);
			}


					
			$omClass = TourDiscountEventTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourDiscountEventType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTourDiscountEvent($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDiscountEvents();
				$obj3->addTourDiscountEvent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptTourDetail(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourDiscountEventType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountEventPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourDiscountEventPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptTourDetail(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDiscountEventPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountEventPeer::NUM_COLUMNS - TourDiscountEventPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDiscountEventTypePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDiscountEventTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, TourDiscountEventTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountEventPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDiscountEventTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTourDiscountEventType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTourDiscountEvent($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscountEvents();
				$obj2->addTourDiscountEvent($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourDiscountEventType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDiscountEventPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountEventPeer::NUM_COLUMNS - TourDiscountEventPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountEventPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountEventPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTourDetail(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTourDiscountEvent($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscountEvents();
				$obj2->addTourDiscountEvent($obj1);
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
		return TourDiscountEventPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourDiscountEventPeer::ID); 

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
			$comparison = $criteria->getComparison(TourDiscountEventPeer::ID);
			$selectCriteria->add(TourDiscountEventPeer::ID, $criteria->remove(TourDiscountEventPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourDiscountEventPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourDiscountEventPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TourDiscountEvent) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourDiscountEventPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TourDiscountEvent $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourDiscountEventPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourDiscountEventPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourDiscountEventPeer::DATABASE_NAME, TourDiscountEventPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourDiscountEventPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourDiscountEventPeer::DATABASE_NAME);
	
			$criteria->add(TourDiscountEventPeer::ID, $pk);
	

			$v = TourDiscountEventPeer::doSelect($criteria, $con);
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
			$criteria->add(TourDiscountEventPeer::ID, $pks, Criteria::IN);
			$objs = TourDiscountEventPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourDiscountEventPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourDiscountEventMapBuilder');
}
