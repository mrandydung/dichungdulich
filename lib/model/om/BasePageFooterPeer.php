<?php


abstract class BasePageFooterPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'page_footer';

	
	const CLASS_DEFAULT = 'lib.model.PageFooter';

	
	const NUM_COLUMNS = 9;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'page_footer.ID';

	
	const ROW_PAGE_FOOTER_ID = 'page_footer.ROW_PAGE_FOOTER_ID';

	
	const PARTNER_ID = 'page_footer.PARTNER_ID';

	
	const NAME = 'page_footer.NAME';

	
	const NAME_EN = 'page_footer.NAME_EN';

	
	const CONTENT = 'page_footer.CONTENT';

	
	const CONTENT_EN = 'page_footer.CONTENT_EN';

	
	const CREATED_AT = 'page_footer.CREATED_AT';

	
	const UPDATED_AT = 'page_footer.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'RowPageFooterId', 'PartnerId', 'Name', 'NameEn', 'Content', 'ContentEn', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (PageFooterPeer::ID, PageFooterPeer::ROW_PAGE_FOOTER_ID, PageFooterPeer::PARTNER_ID, PageFooterPeer::NAME, PageFooterPeer::NAME_EN, PageFooterPeer::CONTENT, PageFooterPeer::CONTENT_EN, PageFooterPeer::CREATED_AT, PageFooterPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'row_page_footer_id', 'partner_id', 'name', 'name_en', 'content', 'content_en', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RowPageFooterId' => 1, 'PartnerId' => 2, 'Name' => 3, 'NameEn' => 4, 'Content' => 5, 'ContentEn' => 6, 'CreatedAt' => 7, 'UpdatedAt' => 8, ),
		BasePeer::TYPE_COLNAME => array (PageFooterPeer::ID => 0, PageFooterPeer::ROW_PAGE_FOOTER_ID => 1, PageFooterPeer::PARTNER_ID => 2, PageFooterPeer::NAME => 3, PageFooterPeer::NAME_EN => 4, PageFooterPeer::CONTENT => 5, PageFooterPeer::CONTENT_EN => 6, PageFooterPeer::CREATED_AT => 7, PageFooterPeer::UPDATED_AT => 8, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'row_page_footer_id' => 1, 'partner_id' => 2, 'name' => 3, 'name_en' => 4, 'content' => 5, 'content_en' => 6, 'created_at' => 7, 'updated_at' => 8, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.PageFooterMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = PageFooterPeer::getTableMap();
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
		return str_replace(PageFooterPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(PageFooterPeer::ID);

		$criteria->addSelectColumn(PageFooterPeer::ROW_PAGE_FOOTER_ID);

		$criteria->addSelectColumn(PageFooterPeer::PARTNER_ID);

		$criteria->addSelectColumn(PageFooterPeer::NAME);

		$criteria->addSelectColumn(PageFooterPeer::NAME_EN);

		$criteria->addSelectColumn(PageFooterPeer::CONTENT);

		$criteria->addSelectColumn(PageFooterPeer::CONTENT_EN);

		$criteria->addSelectColumn(PageFooterPeer::CREATED_AT);

		$criteria->addSelectColumn(PageFooterPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(page_footer.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT page_footer.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
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
		$objects = PageFooterPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return PageFooterPeer::populateObjects(PageFooterPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			PageFooterPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = PageFooterPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinRowPageFooter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinPartner(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinRowPageFooter(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PageFooterPeer::addSelectColumns($c);
		$startcol = (PageFooterPeer::NUM_COLUMNS - PageFooterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		RowPageFooterPeer::addSelectColumns($c);

		$c->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PageFooterPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = RowPageFooterPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getRowPageFooter(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addPageFooter($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initPageFooters();
				$obj2->addPageFooter($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinPartner(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PageFooterPeer::addSelectColumns($c);
		$startcol = (PageFooterPeer::NUM_COLUMNS - PageFooterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PageFooterPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PartnerPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getPartner(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addPageFooter($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initPageFooters();
				$obj2->addPageFooter($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);

		$criteria->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
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

		PageFooterPeer::addSelectColumns($c);
		$startcol2 = (PageFooterPeer::NUM_COLUMNS - PageFooterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RowPageFooterPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RowPageFooterPeer::NUM_COLUMNS;

		PartnerPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + PartnerPeer::NUM_COLUMNS;

		$c->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);

		$c->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PageFooterPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = RowPageFooterPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getRowPageFooter(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addPageFooter($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initPageFooters();
				$obj2->addPageFooter($obj1);
			}


					
			$omClass = PartnerPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getPartner(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addPageFooter($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initPageFooters();
				$obj3->addPageFooter($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptRowPageFooter(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptPartner(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(PageFooterPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(PageFooterPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);

		$rs = PageFooterPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptRowPageFooter(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PageFooterPeer::addSelectColumns($c);
		$startcol2 = (PageFooterPeer::NUM_COLUMNS - PageFooterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		$c->addJoin(PageFooterPeer::PARTNER_ID, PartnerPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PageFooterPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PartnerPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getPartner(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addPageFooter($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initPageFooters();
				$obj2->addPageFooter($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptPartner(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		PageFooterPeer::addSelectColumns($c);
		$startcol2 = (PageFooterPeer::NUM_COLUMNS - PageFooterPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RowPageFooterPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RowPageFooterPeer::NUM_COLUMNS;

		$c->addJoin(PageFooterPeer::ROW_PAGE_FOOTER_ID, RowPageFooterPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = PageFooterPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = RowPageFooterPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getRowPageFooter(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addPageFooter($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initPageFooters();
				$obj2->addPageFooter($obj1);
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
		return PageFooterPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(PageFooterPeer::ID); 

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
			$comparison = $criteria->getComparison(PageFooterPeer::ID);
			$selectCriteria->add(PageFooterPeer::ID, $criteria->remove(PageFooterPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(PageFooterPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(PageFooterPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof PageFooter) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PageFooterPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(PageFooter $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PageFooterPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PageFooterPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(PageFooterPeer::DATABASE_NAME, PageFooterPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = PageFooterPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(PageFooterPeer::DATABASE_NAME);
	
			$criteria->add(PageFooterPeer::ID, $pk);
	

			$v = PageFooterPeer::doSelect($criteria, $con);
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
			$criteria->add(PageFooterPeer::ID, $pks, Criteria::IN);
			$objs = PageFooterPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BasePageFooterPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.PageFooterMapBuilder');
}
