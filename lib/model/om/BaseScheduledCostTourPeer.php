<?php


abstract class BaseScheduledCostTourPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'scheduled_cost_tour';

	
	const CLASS_DEFAULT = 'lib.model.ScheduledCostTour';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'scheduled_cost_tour.ID';

	
	const TOUR_ID = 'scheduled_cost_tour.TOUR_ID';

	
	const SUGGEST_COST_CATEGORY_ID = 'scheduled_cost_tour.SUGGEST_COST_CATEGORY_ID';

	
	const PRICE = 'scheduled_cost_tour.PRICE';

	
	const DESCRIPTION = 'scheduled_cost_tour.DESCRIPTION';

	
	const CREATED_AT = 'scheduled_cost_tour.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TourId', 'SuggestCostCategoryId', 'Price', 'Description', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (ScheduledCostTourPeer::ID, ScheduledCostTourPeer::TOUR_ID, ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, ScheduledCostTourPeer::PRICE, ScheduledCostTourPeer::DESCRIPTION, ScheduledCostTourPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'tour_id', 'suggest_cost_category_id', 'price', 'description', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TourId' => 1, 'SuggestCostCategoryId' => 2, 'Price' => 3, 'Description' => 4, 'CreatedAt' => 5, ),
		BasePeer::TYPE_COLNAME => array (ScheduledCostTourPeer::ID => 0, ScheduledCostTourPeer::TOUR_ID => 1, ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID => 2, ScheduledCostTourPeer::PRICE => 3, ScheduledCostTourPeer::DESCRIPTION => 4, ScheduledCostTourPeer::CREATED_AT => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'tour_id' => 1, 'suggest_cost_category_id' => 2, 'price' => 3, 'description' => 4, 'created_at' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.ScheduledCostTourMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ScheduledCostTourPeer::getTableMap();
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
		return str_replace(ScheduledCostTourPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ScheduledCostTourPeer::ID);

		$criteria->addSelectColumn(ScheduledCostTourPeer::TOUR_ID);

		$criteria->addSelectColumn(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID);

		$criteria->addSelectColumn(ScheduledCostTourPeer::PRICE);

		$criteria->addSelectColumn(ScheduledCostTourPeer::DESCRIPTION);

		$criteria->addSelectColumn(ScheduledCostTourPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(scheduled_cost_tour.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT scheduled_cost_tour.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
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
		$objects = ScheduledCostTourPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ScheduledCostTourPeer::populateObjects(ScheduledCostTourPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ScheduledCostTourPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ScheduledCostTourPeer::getOMClass();
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
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinSuggestCostCategory(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
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

		ScheduledCostTourPeer::addSelectColumns($c);
		$startcol = (ScheduledCostTourPeer::NUM_COLUMNS - ScheduledCostTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ScheduledCostTourPeer::getOMClass();

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
										$temp_obj2->addScheduledCostTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initScheduledCostTours();
				$obj2->addScheduledCostTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinSuggestCostCategory(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ScheduledCostTourPeer::addSelectColumns($c);
		$startcol = (ScheduledCostTourPeer::NUM_COLUMNS - ScheduledCostTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		SuggestCostCategoryPeer::addSelectColumns($c);

		$c->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ScheduledCostTourPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SuggestCostCategoryPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getSuggestCostCategory(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addScheduledCostTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initScheduledCostTours();
				$obj2->addScheduledCostTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);

		$criteria->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
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

		ScheduledCostTourPeer::addSelectColumns($c);
		$startcol2 = (ScheduledCostTourPeer::NUM_COLUMNS - ScheduledCostTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		SuggestCostCategoryPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + SuggestCostCategoryPeer::NUM_COLUMNS;

		$c->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);

		$c->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ScheduledCostTourPeer::getOMClass();


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
					$temp_obj2->addScheduledCostTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initScheduledCostTours();
				$obj2->addScheduledCostTour($obj1);
			}


					
			$omClass = SuggestCostCategoryPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getSuggestCostCategory(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addScheduledCostTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initScheduledCostTours();
				$obj3->addScheduledCostTour($obj1);
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
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptSuggestCostCategory(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ScheduledCostTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);

		$rs = ScheduledCostTourPeer::doSelectRS($criteria, $con);
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

		ScheduledCostTourPeer::addSelectColumns($c);
		$startcol2 = (ScheduledCostTourPeer::NUM_COLUMNS - ScheduledCostTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		SuggestCostCategoryPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + SuggestCostCategoryPeer::NUM_COLUMNS;

		$c->addJoin(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, SuggestCostCategoryPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ScheduledCostTourPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = SuggestCostCategoryPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getSuggestCostCategory(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addScheduledCostTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initScheduledCostTours();
				$obj2->addScheduledCostTour($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptSuggestCostCategory(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		ScheduledCostTourPeer::addSelectColumns($c);
		$startcol2 = (ScheduledCostTourPeer::NUM_COLUMNS - ScheduledCostTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(ScheduledCostTourPeer::TOUR_ID, TourDetailPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ScheduledCostTourPeer::getOMClass();

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
					$temp_obj2->addScheduledCostTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initScheduledCostTours();
				$obj2->addScheduledCostTour($obj1);
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
		return ScheduledCostTourPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ScheduledCostTourPeer::ID); 

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
			$comparison = $criteria->getComparison(ScheduledCostTourPeer::ID);
			$selectCriteria->add(ScheduledCostTourPeer::ID, $criteria->remove(ScheduledCostTourPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ScheduledCostTourPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ScheduledCostTourPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ScheduledCostTour) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ScheduledCostTourPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ScheduledCostTour $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ScheduledCostTourPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ScheduledCostTourPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ScheduledCostTourPeer::DATABASE_NAME, ScheduledCostTourPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ScheduledCostTourPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(ScheduledCostTourPeer::DATABASE_NAME);
	
			$criteria->add(ScheduledCostTourPeer::ID, $pk);
	

			$v = ScheduledCostTourPeer::doSelect($criteria, $con);
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
			$criteria->add(ScheduledCostTourPeer::ID, $pks, Criteria::IN);
			$objs = ScheduledCostTourPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseScheduledCostTourPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.ScheduledCostTourMapBuilder');
}
