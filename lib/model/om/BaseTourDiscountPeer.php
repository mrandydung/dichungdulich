<?php


abstract class BaseTourDiscountPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour_discount';

	
	const CLASS_DEFAULT = 'lib.model.TourDiscount';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour_discount.ID';

	
	const TOUR_DETAIL_ID = 'tour_discount.TOUR_DETAIL_ID';

	
	const TOUR_DISCOUNT_TYPE_ID = 'tour_discount.TOUR_DISCOUNT_TYPE_ID';

	
	const DISCOUNT = 'tour_discount.DISCOUNT';

	
	const DATE_START = 'tour_discount.DATE_START';

	
	const DATE_END = 'tour_discount.DATE_END';

	
	const NUMBER_DISCOUNT = 'tour_discount.NUMBER_DISCOUNT';

	
	const CREATED_AT = 'tour_discount.CREATED_AT';

	
	const UPDATED_AT = 'tour_discount.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TourDetailId', 'TourDiscountTypeId', 'Discount', 'DateStart', 'DateEnd', 'NumberDiscount', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (TourDiscountPeer::ID, TourDiscountPeer::TOUR_DETAIL_ID, TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountPeer::DISCOUNT, TourDiscountPeer::DATE_START, TourDiscountPeer::DATE_END, TourDiscountPeer::NUMBER_DISCOUNT, TourDiscountPeer::CREATED_AT, TourDiscountPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'tour_detail_id', 'tour_discount_type_id', 'discount', 'date_start', 'date_end', 'number_discount', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TourDetailId' => 1, 'TourDiscountTypeId' => 2, 'Discount' => 3, 'DateStart' => 4, 'DateEnd' => 5, 'NumberDiscount' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ),
		BasePeer::TYPE_COLNAME => array (TourDiscountPeer::ID => 0, TourDiscountPeer::TOUR_DETAIL_ID => 1, TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID => 2, TourDiscountPeer::DISCOUNT => 3, TourDiscountPeer::DATE_START => 4, TourDiscountPeer::DATE_END => 5, TourDiscountPeer::NUMBER_DISCOUNT => 6, TourDiscountPeer::CREATED_AT => 7, TourDiscountPeer::UPDATED_AT => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'tour_detail_id' => 1, 'tour_discount_type_id' => 2, 'discount' => 3, 'date_start' => 4, 'date_end' => 5, 'number_discount' => 6, 'created_at' => 7, 'updated_at' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourDiscountMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourDiscountPeer::getTableMap();
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
		return str_replace(TourDiscountPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourDiscountPeer::ID);

		$criteria->addSelectColumn(TourDiscountPeer::TOUR_DETAIL_ID);

		$criteria->addSelectColumn(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID);

		$criteria->addSelectColumn(TourDiscountPeer::DISCOUNT);

		$criteria->addSelectColumn(TourDiscountPeer::DATE_START);

		$criteria->addSelectColumn(TourDiscountPeer::DATE_END);

		$criteria->addSelectColumn(TourDiscountPeer::NUMBER_DISCOUNT);

		$criteria->addSelectColumn(TourDiscountPeer::CREATED_AT);

		$criteria->addSelectColumn(TourDiscountPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(tour_discount.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour_discount.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
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
		$objects = TourDiscountPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourDiscountPeer::populateObjects(TourDiscountPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourDiscountPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourDiscountPeer::getOMClass();
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
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourDiscountType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
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

		TourDiscountPeer::addSelectColumns($c);
		$startcol = (TourDiscountPeer::NUM_COLUMNS - TourDiscountPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountPeer::getOMClass();

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
										$temp_obj2->addTourDiscount($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDiscounts();
				$obj2->addTourDiscount($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourDiscountType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDiscountPeer::addSelectColumns($c);
		$startcol = (TourDiscountPeer::NUM_COLUMNS - TourDiscountPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDiscountTypePeer::addSelectColumns($c);

		$c->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDiscountTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourDiscountType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDiscount($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDiscounts();
				$obj2->addTourDiscount($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
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

		TourDiscountPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountPeer::NUM_COLUMNS - TourDiscountPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		TourDiscountTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourDiscountTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountPeer::getOMClass();


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
					$temp_obj2->addTourDiscount($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscounts();
				$obj2->addTourDiscount($obj1);
			}


					
			$omClass = TourDiscountTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourDiscountType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTourDiscount($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDiscounts();
				$obj3->addTourDiscount($obj1);
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
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourDiscountType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDiscountPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = TourDiscountPeer::doSelectRS($criteria, $con);
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

		TourDiscountPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountPeer::NUM_COLUMNS - TourDiscountPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDiscountTypePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDiscountTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, TourDiscountTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourDiscountTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTourDiscountType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTourDiscount($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscounts();
				$obj2->addTourDiscount($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourDiscountType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDiscountPeer::addSelectColumns($c);
		$startcol2 = (TourDiscountPeer::NUM_COLUMNS - TourDiscountPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(TourDiscountPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDiscountPeer::getOMClass();

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
					$temp_obj2->addTourDiscount($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDiscounts();
				$obj2->addTourDiscount($obj1);
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
		return TourDiscountPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourDiscountPeer::ID); 

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
			$comparison = $criteria->getComparison(TourDiscountPeer::ID);
			$selectCriteria->add(TourDiscountPeer::ID, $criteria->remove(TourDiscountPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourDiscountPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourDiscountPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TourDiscount) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourDiscountPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TourDiscount $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourDiscountPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourDiscountPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourDiscountPeer::DATABASE_NAME, TourDiscountPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourDiscountPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourDiscountPeer::DATABASE_NAME);
	
			$criteria->add(TourDiscountPeer::ID, $pk);
	

			$v = TourDiscountPeer::doSelect($criteria, $con);
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
			$criteria->add(TourDiscountPeer::ID, $pks, Criteria::IN);
			$objs = TourDiscountPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourDiscountPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourDiscountMapBuilder');
}
