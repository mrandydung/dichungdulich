<?php


abstract class BaseTourCooItemPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour_coo_item';

	
	const CLASS_DEFAULT = 'lib.model.TourCooItem';

	
	const NUM_COLUMNS = 8;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour_coo_item.ID';

	
	const TOUR_ID = 'tour_coo_item.TOUR_ID';

	
	const NAME_END = 'tour_coo_item.NAME_END';

	
	const COO_END = 'tour_coo_item.COO_END';

	
	const LAT_END = 'tour_coo_item.LAT_END';

	
	const LNG_END = 'tour_coo_item.LNG_END';

	
	const IS_END = 'tour_coo_item.IS_END';

	
	const CREATED_AT = 'tour_coo_item.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TourId', 'NameEnd', 'CooEnd', 'LatEnd', 'LngEnd', 'IsEnd', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (TourCooItemPeer::ID, TourCooItemPeer::TOUR_ID, TourCooItemPeer::NAME_END, TourCooItemPeer::COO_END, TourCooItemPeer::LAT_END, TourCooItemPeer::LNG_END, TourCooItemPeer::IS_END, TourCooItemPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'tour_id', 'name_end', 'coo_end', 'lat_end', 'lng_end', 'is_end', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TourId' => 1, 'NameEnd' => 2, 'CooEnd' => 3, 'LatEnd' => 4, 'LngEnd' => 5, 'IsEnd' => 6, 'CreatedAt' => 7, ),
		BasePeer::TYPE_COLNAME => array (TourCooItemPeer::ID => 0, TourCooItemPeer::TOUR_ID => 1, TourCooItemPeer::NAME_END => 2, TourCooItemPeer::COO_END => 3, TourCooItemPeer::LAT_END => 4, TourCooItemPeer::LNG_END => 5, TourCooItemPeer::IS_END => 6, TourCooItemPeer::CREATED_AT => 7, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'tour_id' => 1, 'name_end' => 2, 'coo_end' => 3, 'lat_end' => 4, 'lng_end' => 5, 'is_end' => 6, 'created_at' => 7, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourCooItemMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourCooItemPeer::getTableMap();
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
		return str_replace(TourCooItemPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourCooItemPeer::ID);

		$criteria->addSelectColumn(TourCooItemPeer::TOUR_ID);

		$criteria->addSelectColumn(TourCooItemPeer::NAME_END);

		$criteria->addSelectColumn(TourCooItemPeer::COO_END);

		$criteria->addSelectColumn(TourCooItemPeer::LAT_END);

		$criteria->addSelectColumn(TourCooItemPeer::LNG_END);

		$criteria->addSelectColumn(TourCooItemPeer::IS_END);

		$criteria->addSelectColumn(TourCooItemPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(tour_coo_item.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour_coo_item.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourCooItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourCooItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourCooItemPeer::doSelectRS($criteria, $con);
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
		$objects = TourCooItemPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourCooItemPeer::populateObjects(TourCooItemPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourCooItemPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourCooItemPeer::getOMClass();
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
			$criteria->addSelectColumn(TourCooItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourCooItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourCooItemPeer::TOUR_ID, TourDetailPeer::ID);

		$rs = TourCooItemPeer::doSelectRS($criteria, $con);
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

		TourCooItemPeer::addSelectColumns($c);
		$startcol = (TourCooItemPeer::NUM_COLUMNS - TourCooItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(TourCooItemPeer::TOUR_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourCooItemPeer::getOMClass();

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
										$temp_obj2->addTourCooItem($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourCooItems();
				$obj2->addTourCooItem($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourCooItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourCooItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourCooItemPeer::TOUR_ID, TourDetailPeer::ID);

		$rs = TourCooItemPeer::doSelectRS($criteria, $con);
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

		TourCooItemPeer::addSelectColumns($c);
		$startcol2 = (TourCooItemPeer::NUM_COLUMNS - TourCooItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(TourCooItemPeer::TOUR_ID, TourDetailPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourCooItemPeer::getOMClass();


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
					$temp_obj2->addTourCooItem($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTourCooItems();
				$obj2->addTourCooItem($obj1);
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
		return TourCooItemPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourCooItemPeer::ID); 

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
			$comparison = $criteria->getComparison(TourCooItemPeer::ID);
			$selectCriteria->add(TourCooItemPeer::ID, $criteria->remove(TourCooItemPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourCooItemPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourCooItemPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TourCooItem) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourCooItemPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TourCooItem $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourCooItemPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourCooItemPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourCooItemPeer::DATABASE_NAME, TourCooItemPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourCooItemPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourCooItemPeer::DATABASE_NAME);
	
			$criteria->add(TourCooItemPeer::ID, $pk);
	

			$v = TourCooItemPeer::doSelect($criteria, $con);
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
			$criteria->add(TourCooItemPeer::ID, $pks, Criteria::IN);
			$objs = TourCooItemPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourCooItemPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourCooItemMapBuilder');
}
