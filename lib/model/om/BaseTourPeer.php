<?php


abstract class BaseTourPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour';

	
	const CLASS_DEFAULT = 'lib.model.Tour';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour.ID';

	
	const ENABLE = 'tour.ENABLE';

	
	const USER_ID = 'tour.USER_ID';

	
	const START = 'tour.START';

	
	const END = 'tour.END';

	
	const COO_START = 'tour.COO_START';

	
	const COO_END = 'tour.COO_END';

	
	const TITLE = 'tour.TITLE';

	
	const DESCRIPTION = 'tour.DESCRIPTION';

	
	const TITLE_SEO = 'tour.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'tour.DESCRIPTION_SEO';

	
	const IMG_SEO = 'tour.IMG_SEO';

	
	const CREATED_AT = 'tour.CREATED_AT';

	
	const UPDATED_AT = 'tour.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Enable', 'UserId', 'Start', 'End', 'CooStart', 'CooEnd', 'Title', 'Description', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (TourPeer::ID, TourPeer::ENABLE, TourPeer::USER_ID, TourPeer::START, TourPeer::END, TourPeer::COO_START, TourPeer::COO_END, TourPeer::TITLE, TourPeer::DESCRIPTION, TourPeer::TITLE_SEO, TourPeer::DESCRIPTION_SEO, TourPeer::IMG_SEO, TourPeer::CREATED_AT, TourPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'enable', 'user_id', 'start', 'end', 'coo_start', 'coo_end', 'title', 'description', 'title_seo', 'description_seo', 'img_seo', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Enable' => 1, 'UserId' => 2, 'Start' => 3, 'End' => 4, 'CooStart' => 5, 'CooEnd' => 6, 'Title' => 7, 'Description' => 8, 'TitleSeo' => 9, 'DescriptionSeo' => 10, 'ImgSeo' => 11, 'CreatedAt' => 12, 'UpdatedAt' => 13, ),
		BasePeer::TYPE_COLNAME => array (TourPeer::ID => 0, TourPeer::ENABLE => 1, TourPeer::USER_ID => 2, TourPeer::START => 3, TourPeer::END => 4, TourPeer::COO_START => 5, TourPeer::COO_END => 6, TourPeer::TITLE => 7, TourPeer::DESCRIPTION => 8, TourPeer::TITLE_SEO => 9, TourPeer::DESCRIPTION_SEO => 10, TourPeer::IMG_SEO => 11, TourPeer::CREATED_AT => 12, TourPeer::UPDATED_AT => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'enable' => 1, 'user_id' => 2, 'start' => 3, 'end' => 4, 'coo_start' => 5, 'coo_end' => 6, 'title' => 7, 'description' => 8, 'title_seo' => 9, 'description_seo' => 10, 'img_seo' => 11, 'created_at' => 12, 'updated_at' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourPeer::getTableMap();
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
		return str_replace(TourPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourPeer::ID);

		$criteria->addSelectColumn(TourPeer::ENABLE);

		$criteria->addSelectColumn(TourPeer::USER_ID);

		$criteria->addSelectColumn(TourPeer::START);

		$criteria->addSelectColumn(TourPeer::END);

		$criteria->addSelectColumn(TourPeer::COO_START);

		$criteria->addSelectColumn(TourPeer::COO_END);

		$criteria->addSelectColumn(TourPeer::TITLE);

		$criteria->addSelectColumn(TourPeer::DESCRIPTION);

		$criteria->addSelectColumn(TourPeer::TITLE_SEO);

		$criteria->addSelectColumn(TourPeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(TourPeer::IMG_SEO);

		$criteria->addSelectColumn(TourPeer::CREATED_AT);

		$criteria->addSelectColumn(TourPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(tour.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourPeer::doSelectRS($criteria, $con);
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
		$objects = TourPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourPeer::populateObjects(TourPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinDichungUser(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourPeer::USER_ID, DichungUserPeer::ID);

		$rs = TourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinDichungUser(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourPeer::addSelectColumns($c);
		$startcol = (TourPeer::NUM_COLUMNS - TourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(TourPeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourPeer::getOMClass();

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
										$temp_obj2->addTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTours();
				$obj2->addTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourPeer::USER_ID, DichungUserPeer::ID);

		$rs = TourPeer::doSelectRS($criteria, $con);
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

		TourPeer::addSelectColumns($c);
		$startcol2 = (TourPeer::NUM_COLUMNS - TourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(TourPeer::USER_ID, DichungUserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = DichungUserPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getDichungUser(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTours();
				$obj2->addTour($obj1);
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
		return TourPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourPeer::ID); 

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
			$comparison = $criteria->getComparison(TourPeer::ID);
			$selectCriteria->add(TourPeer::ID, $criteria->remove(TourPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Tour) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Tour $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourPeer::DATABASE_NAME, TourPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourPeer::DATABASE_NAME);
	
			$criteria->add(TourPeer::ID, $pk);
	

			$v = TourPeer::doSelect($criteria, $con);
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
			$criteria->add(TourPeer::ID, $pks, Criteria::IN);
			$objs = TourPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourMapBuilder');
}
