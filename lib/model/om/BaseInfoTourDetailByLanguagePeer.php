<?php


abstract class BaseInfoTourDetailByLanguagePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'info_tour_detail_by_language';

	
	const CLASS_DEFAULT = 'lib.model.InfoTourDetailByLanguage';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'info_tour_detail_by_language.ID';

	
	const TYPE_LANGUAGE_ID = 'info_tour_detail_by_language.TYPE_LANGUAGE_ID';

	
	const TOUR_DETAIL_ID = 'info_tour_detail_by_language.TOUR_DETAIL_ID';

	
	const TITLE = 'info_tour_detail_by_language.TITLE';

	
	const DESCRIPTION = 'info_tour_detail_by_language.DESCRIPTION';

	
	const SCHEDULE_SIMPLE = 'info_tour_detail_by_language.SCHEDULE_SIMPLE';

	
	const NOTE = 'info_tour_detail_by_language.NOTE';

	
	const POLICY_ON_PRICES = 'info_tour_detail_by_language.POLICY_ON_PRICES';

	
	const CANCELLATION_POLICY_TOUR = 'info_tour_detail_by_language.CANCELLATION_POLICY_TOUR';

	
	const OTHER_NOTE = 'info_tour_detail_by_language.OTHER_NOTE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'TypeLanguageId', 'TourDetailId', 'Title', 'Description', 'ScheduleSimple', 'Note', 'PolicyOnPrices', 'CancellationPolicyTour', 'OtherNote', ),
		BasePeer::TYPE_COLNAME => array (InfoTourDetailByLanguagePeer::ID, InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, InfoTourDetailByLanguagePeer::TITLE, InfoTourDetailByLanguagePeer::DESCRIPTION, InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE, InfoTourDetailByLanguagePeer::NOTE, InfoTourDetailByLanguagePeer::POLICY_ON_PRICES, InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR, InfoTourDetailByLanguagePeer::OTHER_NOTE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'type_language_id', 'tour_detail_id', 'title', 'description', 'schedule_simple', 'note', 'policy_on_prices', 'cancellation_policy_tour', 'other_note', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'TypeLanguageId' => 1, 'TourDetailId' => 2, 'Title' => 3, 'Description' => 4, 'ScheduleSimple' => 5, 'Note' => 6, 'PolicyOnPrices' => 7, 'CancellationPolicyTour' => 8, 'OtherNote' => 9, ),
		BasePeer::TYPE_COLNAME => array (InfoTourDetailByLanguagePeer::ID => 0, InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID => 1, InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID => 2, InfoTourDetailByLanguagePeer::TITLE => 3, InfoTourDetailByLanguagePeer::DESCRIPTION => 4, InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE => 5, InfoTourDetailByLanguagePeer::NOTE => 6, InfoTourDetailByLanguagePeer::POLICY_ON_PRICES => 7, InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR => 8, InfoTourDetailByLanguagePeer::OTHER_NOTE => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'type_language_id' => 1, 'tour_detail_id' => 2, 'title' => 3, 'description' => 4, 'schedule_simple' => 5, 'note' => 6, 'policy_on_prices' => 7, 'cancellation_policy_tour' => 8, 'other_note' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.InfoTourDetailByLanguageMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = InfoTourDetailByLanguagePeer::getTableMap();
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
		return str_replace(InfoTourDetailByLanguagePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::ID);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::TITLE);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::DESCRIPTION);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::NOTE);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::POLICY_ON_PRICES);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR);

		$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::OTHER_NOTE);

	}

	const COUNT = 'COUNT(info_tour_detail_by_language.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT info_tour_detail_by_language.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
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
		$objects = InfoTourDetailByLanguagePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return InfoTourDetailByLanguagePeer::populateObjects(InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			InfoTourDetailByLanguagePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = InfoTourDetailByLanguagePeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinTypeLanguage(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourDetail(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinTypeLanguage(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		InfoTourDetailByLanguagePeer::addSelectColumns($c);
		$startcol = (InfoTourDetailByLanguagePeer::NUM_COLUMNS - InfoTourDetailByLanguagePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TypeLanguagePeer::addSelectColumns($c);

		$c->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = InfoTourDetailByLanguagePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypeLanguagePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTypeLanguage(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addInfoTourDetailByLanguage($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initInfoTourDetailByLanguages();
				$obj2->addInfoTourDetailByLanguage($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourDetail(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		InfoTourDetailByLanguagePeer::addSelectColumns($c);
		$startcol = (InfoTourDetailByLanguagePeer::NUM_COLUMNS - InfoTourDetailByLanguagePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = InfoTourDetailByLanguagePeer::getOMClass();

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
										$temp_obj2->addInfoTourDetailByLanguage($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initInfoTourDetailByLanguages();
				$obj2->addInfoTourDetailByLanguage($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
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

		InfoTourDetailByLanguagePeer::addSelectColumns($c);
		$startcol2 = (InfoTourDetailByLanguagePeer::NUM_COLUMNS - InfoTourDetailByLanguagePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TypeLanguagePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TypeLanguagePeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);

		$c->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = InfoTourDetailByLanguagePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = TypeLanguagePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTypeLanguage(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addInfoTourDetailByLanguage($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initInfoTourDetailByLanguages();
				$obj2->addInfoTourDetailByLanguage($obj1);
			}


					
			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourDetail(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addInfoTourDetailByLanguage($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initInfoTourDetailByLanguages();
				$obj3->addInfoTourDetailByLanguage($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptTypeLanguage(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourDetail(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(InfoTourDetailByLanguagePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);

		$rs = InfoTourDetailByLanguagePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptTypeLanguage(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		InfoTourDetailByLanguagePeer::addSelectColumns($c);
		$startcol2 = (InfoTourDetailByLanguagePeer::NUM_COLUMNS - InfoTourDetailByLanguagePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TourDetailPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TourDetailPeer::NUM_COLUMNS;

		$c->addJoin(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, TourDetailPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = InfoTourDetailByLanguagePeer::getOMClass();

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
					$temp_obj2->addInfoTourDetailByLanguage($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initInfoTourDetailByLanguages();
				$obj2->addInfoTourDetailByLanguage($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourDetail(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		InfoTourDetailByLanguagePeer::addSelectColumns($c);
		$startcol2 = (InfoTourDetailByLanguagePeer::NUM_COLUMNS - InfoTourDetailByLanguagePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TypeLanguagePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TypeLanguagePeer::NUM_COLUMNS;

		$c->addJoin(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, TypeLanguagePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = InfoTourDetailByLanguagePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypeLanguagePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTypeLanguage(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addInfoTourDetailByLanguage($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initInfoTourDetailByLanguages();
				$obj2->addInfoTourDetailByLanguage($obj1);
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
		return InfoTourDetailByLanguagePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(InfoTourDetailByLanguagePeer::ID); 

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
			$comparison = $criteria->getComparison(InfoTourDetailByLanguagePeer::ID);
			$selectCriteria->add(InfoTourDetailByLanguagePeer::ID, $criteria->remove(InfoTourDetailByLanguagePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(InfoTourDetailByLanguagePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(InfoTourDetailByLanguagePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof InfoTourDetailByLanguage) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(InfoTourDetailByLanguagePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(InfoTourDetailByLanguage $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(InfoTourDetailByLanguagePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(InfoTourDetailByLanguagePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(InfoTourDetailByLanguagePeer::DATABASE_NAME, InfoTourDetailByLanguagePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = InfoTourDetailByLanguagePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(InfoTourDetailByLanguagePeer::DATABASE_NAME);
	
			$criteria->add(InfoTourDetailByLanguagePeer::ID, $pk);
	

			$v = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
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
			$criteria->add(InfoTourDetailByLanguagePeer::ID, $pks, Criteria::IN);
			$objs = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseInfoTourDetailByLanguagePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.InfoTourDetailByLanguageMapBuilder');
}
