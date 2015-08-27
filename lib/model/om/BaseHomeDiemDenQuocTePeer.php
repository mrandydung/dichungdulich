<?php


abstract class BaseHomeDiemDenQuocTePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'home_diem_den_quoc_te';

	
	const CLASS_DEFAULT = 'lib.model.HomeDiemDenQuocTe';

	
	const NUM_COLUMNS = 12;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'home_diem_den_quoc_te.ID';

	
	const AREA_ID = 'home_diem_den_quoc_te.AREA_ID';

	
	const NAME = 'home_diem_den_quoc_te.NAME';

	
	const IMG = 'home_diem_den_quoc_te.IMG';

	
	const IMG_SEARCH = 'home_diem_den_quoc_te.IMG_SEARCH';

	
	const ADDRESS = 'home_diem_den_quoc_te.ADDRESS';

	
	const GOOGLE_ADDRESS = 'home_diem_den_quoc_te.GOOGLE_ADDRESS';

	
	const GOOGLE_POSITION = 'home_diem_den_quoc_te.GOOGLE_POSITION';

	
	const KEYWORD = 'home_diem_den_quoc_te.KEYWORD';

	
	const PRIORITY = 'home_diem_den_quoc_te.PRIORITY';

	
	const HIDE = 'home_diem_den_quoc_te.HIDE';

	
	const CONTENT_ABOUT = 'home_diem_den_quoc_te.CONTENT_ABOUT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'AreaId', 'Name', 'Img', 'ImgSearch', 'Address', 'GoogleAddress', 'GooglePosition', 'Keyword', 'Priority', 'Hide', 'ContentAbout', ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenQuocTePeer::ID, HomeDiemDenQuocTePeer::AREA_ID, HomeDiemDenQuocTePeer::NAME, HomeDiemDenQuocTePeer::IMG, HomeDiemDenQuocTePeer::IMG_SEARCH, HomeDiemDenQuocTePeer::ADDRESS, HomeDiemDenQuocTePeer::GOOGLE_ADDRESS, HomeDiemDenQuocTePeer::GOOGLE_POSITION, HomeDiemDenQuocTePeer::KEYWORD, HomeDiemDenQuocTePeer::PRIORITY, HomeDiemDenQuocTePeer::HIDE, HomeDiemDenQuocTePeer::CONTENT_ABOUT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'area_id', 'name', 'img', 'img_search', 'address', 'google_address', 'google_position', 'keyword', 'priority', 'hide', 'content_about', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'AreaId' => 1, 'Name' => 2, 'Img' => 3, 'ImgSearch' => 4, 'Address' => 5, 'GoogleAddress' => 6, 'GooglePosition' => 7, 'Keyword' => 8, 'Priority' => 9, 'Hide' => 10, 'ContentAbout' => 11, ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenQuocTePeer::ID => 0, HomeDiemDenQuocTePeer::AREA_ID => 1, HomeDiemDenQuocTePeer::NAME => 2, HomeDiemDenQuocTePeer::IMG => 3, HomeDiemDenQuocTePeer::IMG_SEARCH => 4, HomeDiemDenQuocTePeer::ADDRESS => 5, HomeDiemDenQuocTePeer::GOOGLE_ADDRESS => 6, HomeDiemDenQuocTePeer::GOOGLE_POSITION => 7, HomeDiemDenQuocTePeer::KEYWORD => 8, HomeDiemDenQuocTePeer::PRIORITY => 9, HomeDiemDenQuocTePeer::HIDE => 10, HomeDiemDenQuocTePeer::CONTENT_ABOUT => 11, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'area_id' => 1, 'name' => 2, 'img' => 3, 'img_search' => 4, 'address' => 5, 'google_address' => 6, 'google_position' => 7, 'keyword' => 8, 'priority' => 9, 'hide' => 10, 'content_about' => 11, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.HomeDiemDenQuocTeMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HomeDiemDenQuocTePeer::getTableMap();
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
		return str_replace(HomeDiemDenQuocTePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::ID);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::AREA_ID);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::NAME);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::IMG);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::IMG_SEARCH);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::GOOGLE_ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::GOOGLE_POSITION);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::KEYWORD);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::PRIORITY);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::HIDE);

		$criteria->addSelectColumn(HomeDiemDenQuocTePeer::CONTENT_ABOUT);

	}

	const COUNT = 'COUNT(home_diem_den_quoc_te.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT home_diem_den_quoc_te.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HomeDiemDenQuocTePeer::doSelectRS($criteria, $con);
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
		$objects = HomeDiemDenQuocTePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HomeDiemDenQuocTePeer::populateObjects(HomeDiemDenQuocTePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HomeDiemDenQuocTePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HomeDiemDenQuocTePeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinArea(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenQuocTePeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenQuocTePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinArea(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenQuocTePeer::addSelectColumns($c);
		$startcol = (HomeDiemDenQuocTePeer::NUM_COLUMNS - HomeDiemDenQuocTePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AreaPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenQuocTePeer::AREA_ID, AreaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenQuocTePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AreaPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getArea(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addHomeDiemDenQuocTe($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenQuocTes();
				$obj2->addHomeDiemDenQuocTe($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenQuocTePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenQuocTePeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenQuocTePeer::doSelectRS($criteria, $con);
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

		HomeDiemDenQuocTePeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenQuocTePeer::NUM_COLUMNS - HomeDiemDenQuocTePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AreaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AreaPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenQuocTePeer::AREA_ID, AreaPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenQuocTePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArea(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenQuocTe($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenQuocTes();
				$obj2->addHomeDiemDenQuocTe($obj1);
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
		return HomeDiemDenQuocTePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HomeDiemDenQuocTePeer::ID); 

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
			$comparison = $criteria->getComparison(HomeDiemDenQuocTePeer::ID);
			$selectCriteria->add(HomeDiemDenQuocTePeer::ID, $criteria->remove(HomeDiemDenQuocTePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HomeDiemDenQuocTePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HomeDiemDenQuocTePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HomeDiemDenQuocTe) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HomeDiemDenQuocTePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HomeDiemDenQuocTe $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HomeDiemDenQuocTePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HomeDiemDenQuocTePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HomeDiemDenQuocTePeer::DATABASE_NAME, HomeDiemDenQuocTePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HomeDiemDenQuocTePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(HomeDiemDenQuocTePeer::DATABASE_NAME);
	
			$criteria->add(HomeDiemDenQuocTePeer::ID, $pk);
	

			$v = HomeDiemDenQuocTePeer::doSelect($criteria, $con);
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
			$criteria->add(HomeDiemDenQuocTePeer::ID, $pks, Criteria::IN);
			$objs = HomeDiemDenQuocTePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHomeDiemDenQuocTePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.HomeDiemDenQuocTeMapBuilder');
}
