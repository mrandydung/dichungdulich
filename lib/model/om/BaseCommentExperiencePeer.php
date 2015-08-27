<?php


abstract class BaseCommentExperiencePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'comment_experience';

	
	const CLASS_DEFAULT = 'lib.model.CommentExperience';

	
	const NUM_COLUMNS = 6;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'comment_experience.ID';

	
	const TRIP_EXPERIENCE_ID = 'comment_experience.TRIP_EXPERIENCE_ID';

	
	const USER_ID = 'comment_experience.USER_ID';

	
	const COMMENT = 'comment_experience.COMMENT';

	
	const RATING = 'comment_experience.RATING';

	
	const CREATED_AT = 'comment_experience.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TripExperienceId', 'UserId', 'Comment', 'Rating', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (CommentExperiencePeer::ID, CommentExperiencePeer::TRIP_EXPERIENCE_ID, CommentExperiencePeer::USER_ID, CommentExperiencePeer::COMMENT, CommentExperiencePeer::RATING, CommentExperiencePeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'trip_experience_id', 'user_id', 'comment', 'rating', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TripExperienceId' => 1, 'UserId' => 2, 'Comment' => 3, 'Rating' => 4, 'CreatedAt' => 5, ),
		BasePeer::TYPE_COLNAME => array (CommentExperiencePeer::ID => 0, CommentExperiencePeer::TRIP_EXPERIENCE_ID => 1, CommentExperiencePeer::USER_ID => 2, CommentExperiencePeer::COMMENT => 3, CommentExperiencePeer::RATING => 4, CommentExperiencePeer::CREATED_AT => 5, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'trip_experience_id' => 1, 'user_id' => 2, 'comment' => 3, 'rating' => 4, 'created_at' => 5, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.CommentExperienceMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = CommentExperiencePeer::getTableMap();
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
		return str_replace(CommentExperiencePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(CommentExperiencePeer::ID);

		$criteria->addSelectColumn(CommentExperiencePeer::TRIP_EXPERIENCE_ID);

		$criteria->addSelectColumn(CommentExperiencePeer::USER_ID);

		$criteria->addSelectColumn(CommentExperiencePeer::COMMENT);

		$criteria->addSelectColumn(CommentExperiencePeer::RATING);

		$criteria->addSelectColumn(CommentExperiencePeer::CREATED_AT);

	}

	const COUNT = 'COUNT(comment_experience.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT comment_experience.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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
		$objects = CommentExperiencePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return CommentExperiencePeer::populateObjects(CommentExperiencePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			CommentExperiencePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = CommentExperiencePeer::getOMClass();
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
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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

		CommentExperiencePeer::addSelectColumns($c);
		$startcol = (CommentExperiencePeer::NUM_COLUMNS - CommentExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TripExperiencePeer::addSelectColumns($c);

		$c->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentExperiencePeer::getOMClass();

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
										$temp_obj2->addCommentExperience($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentExperiences();
				$obj2->addCommentExperience($obj1); 			}
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

		CommentExperiencePeer::addSelectColumns($c);
		$startcol = (CommentExperiencePeer::NUM_COLUMNS - CommentExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentExperiencePeer::getOMClass();

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
										$temp_obj2->addCommentExperience($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initCommentExperiences();
				$obj2->addCommentExperience($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);

		$criteria->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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

		CommentExperiencePeer::addSelectColumns($c);
		$startcol2 = (CommentExperiencePeer::NUM_COLUMNS - CommentExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripExperiencePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripExperiencePeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);

		$c->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentExperiencePeer::getOMClass();


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
					$temp_obj2->addCommentExperience($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentExperiences();
				$obj2->addCommentExperience($obj1);
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
					$temp_obj3->addCommentExperience($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initCommentExperiences();
				$obj3->addCommentExperience($obj1);
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
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(CommentExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);

		$rs = CommentExperiencePeer::doSelectRS($criteria, $con);
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

		CommentExperiencePeer::addSelectColumns($c);
		$startcol2 = (CommentExperiencePeer::NUM_COLUMNS - CommentExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(CommentExperiencePeer::USER_ID, DichungUserPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentExperiencePeer::getOMClass();

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
					$temp_obj2->addCommentExperience($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentExperiences();
				$obj2->addCommentExperience($obj1);
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

		CommentExperiencePeer::addSelectColumns($c);
		$startcol2 = (CommentExperiencePeer::NUM_COLUMNS - CommentExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TripExperiencePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TripExperiencePeer::NUM_COLUMNS;

		$c->addJoin(CommentExperiencePeer::TRIP_EXPERIENCE_ID, TripExperiencePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = CommentExperiencePeer::getOMClass();

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
					$temp_obj2->addCommentExperience($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initCommentExperiences();
				$obj2->addCommentExperience($obj1);
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
		return CommentExperiencePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(CommentExperiencePeer::ID); 

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
			$comparison = $criteria->getComparison(CommentExperiencePeer::ID);
			$selectCriteria->add(CommentExperiencePeer::ID, $criteria->remove(CommentExperiencePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(CommentExperiencePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(CommentExperiencePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof CommentExperience) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(CommentExperiencePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(CommentExperience $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(CommentExperiencePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(CommentExperiencePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(CommentExperiencePeer::DATABASE_NAME, CommentExperiencePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = CommentExperiencePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(CommentExperiencePeer::DATABASE_NAME);
	
			$criteria->add(CommentExperiencePeer::ID, $pk);
	

			$v = CommentExperiencePeer::doSelect($criteria, $con);
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
			$criteria->add(CommentExperiencePeer::ID, $pks, Criteria::IN);
			$objs = CommentExperiencePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseCommentExperiencePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.CommentExperienceMapBuilder');
}
