<?php


abstract class BaseCommentAcquirementsPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'comment_acquirements';

	
	const CLASS_DEFAULT = 'lib.model.CommentAcquirements';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'comment_acquirements.ID';

	
	const TRIP_ACQUIREMENTS_ID = 'comment_acquirements.TRIP_ACQUIREMENTS_ID';

	
	const USER_ID = 'comment_acquirements.USER_ID';

	
	const COMMENT = 'comment_acquirements.COMMENT';

	
	const RATING = 'comment_acquirements.RATING';

	
	const CREATED_AT = 'comment_acquirements.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TripAcquirementsId', 'UserId', 'Comment', 'Rating', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (CommentAcquirementsPeer::ID, CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, CommentAcquirementsPeer::USER_ID, CommentAcquirementsPeer::COMMENT, CommentAcquirementsPeer::RATING, CommentAcquirementsPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trip_acquirements_id', 'user_id', 'comment', 'rating', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TripAcquirementsId' => 1, 'UserId' => 2, 'Comment' => 3, 'Rating' => 4, 'CreatedAt' => 5, ),
		BasePeer::TYPE_COLNAME => array (CommentAcquirementsPeer::ID => 0, CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID => 1, CommentAcquirementsPeer::USER_ID => 2, CommentAcquirementsPeer::COMMENT => 3, CommentAcquirementsPeer::RATING => 4, CommentAcquirementsPeer::CREATED_AT => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trip_acquirements_id' => 1, 'user_id' => 2, 'comment' => 3, 'rating' => 4, 'created_at' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.CommentAcquirementsMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CommentAcquirementsPeer::getTableMap();
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
		return str_replace(CommentAcquirementsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CommentAcquirementsPeer::ID);

		$criteria->addSelectColumn(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID);

		$criteria->addSelectColumn(CommentAcquirementsPeer::USER_ID);

		$criteria->addSelectColumn(CommentAcquirementsPeer::COMMENT);

		$criteria->addSelectColumn(CommentAcquirementsPeer::RATING);

		$criteria->addSelectColumn(CommentAcquirementsPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(comment_acquirements.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT comment_acquirements.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
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
		$objects = CommentAcquirementsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CommentAcquirementsPeer::populateObjects(CommentAcquirementsPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CommentAcquirementsPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CommentAcquirementsPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTripExperience(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinDichungUser(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTripExperience(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CommentAcquirementsPeer::addSelectColumns($c);
		$startcol = (CommentAcquirementsPeer::NUM_COLUMNS - CommentAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TripExperiencePeer::addSelectColumns($c);

		$c->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TripExperiencePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTripExperience(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCommentAcquirements($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentAcquirementss();
				$obj2->addCommentAcquirements($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinDichungUser(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CommentAcquirementsPeer::addSelectColumns($c);
		$startcol = (CommentAcquirementsPeer::NUM_COLUMNS - CommentAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getDichungUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addCommentAcquirements($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentAcquirementss();
				$obj2->addCommentAcquirements($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);

		$criteria->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
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

		CommentAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (CommentAcquirementsPeer::NUM_COLUMNS - CommentAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripExperiencePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripExperiencePeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);

		$c->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentAcquirementsPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TripExperiencePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTripExperience(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCommentAcquirements($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentAcquirementss();
				$obj2->addCommentAcquirements($obj1);
			}


					
			$omClass = DichungUserPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getDichungUser(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addCommentAcquirements($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initCommentAcquirementss();
				$obj3->addCommentAcquirements($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptTripExperience(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptDichungUser(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);

		$rs = CommentAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptTripExperience(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CommentAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (CommentAcquirementsPeer::NUM_COLUMNS - CommentAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(CommentAcquirementsPeer::USER_ID, DichungUserPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = DichungUserPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDichungUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCommentAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentAcquirementss();
				$obj2->addCommentAcquirements($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptDichungUser(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		CommentAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (CommentAcquirementsPeer::NUM_COLUMNS - CommentAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripExperiencePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripExperiencePeer::NUM_COLUMNS;

		$c->addJoin(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, TripExperiencePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TripExperiencePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTripExperience(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addCommentAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentAcquirementss();
				$obj2->addCommentAcquirements($obj1);
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
		return CommentAcquirementsPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CommentAcquirementsPeer::ID); 

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
			$comparison = $criteria->getComparison(CommentAcquirementsPeer::ID);
			$selectCriteria->add(CommentAcquirementsPeer::ID, $criteria->remove(CommentAcquirementsPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CommentAcquirementsPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CommentAcquirementsPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CommentAcquirements) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CommentAcquirementsPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CommentAcquirements $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CommentAcquirementsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CommentAcquirementsPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CommentAcquirementsPeer::DATABASE_NAME, CommentAcquirementsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CommentAcquirementsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(CommentAcquirementsPeer::DATABASE_NAME);
	
			$criteria->add(CommentAcquirementsPeer::ID, $pk);
	

			$v = CommentAcquirementsPeer::doSelect($criteria, $con);
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
			$criteria->add(CommentAcquirementsPeer::ID, $pks, Criteria::IN);
			$objs = CommentAcquirementsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCommentAcquirementsPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.CommentAcquirementsMapBuilder');
}
