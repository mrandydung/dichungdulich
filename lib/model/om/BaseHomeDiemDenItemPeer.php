<?php


abstract class BaseHomeDiemDenItemPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'home_diem_den_item';

	
	const CLASS_DEFAULT = 'lib.model.HomeDiemDenItem';

	
	const NUM_COLUMNS = 17;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'home_diem_den_item.ID';

	
	const REGION_ID = 'home_diem_den_item.REGION_ID';

	
	const AREA_ID = 'home_diem_den_item.AREA_ID';

	
	const CITY_ID = 'home_diem_den_item.CITY_ID';

	
	const NAME = 'home_diem_den_item.NAME';

	
	const ADDRESS = 'home_diem_den_item.ADDRESS';

	
	const IMG = 'home_diem_den_item.IMG';

	
	const IMG_SEARCH = 'home_diem_den_item.IMG_SEARCH';

	
	const GOOGLE_ADDRESS = 'home_diem_den_item.GOOGLE_ADDRESS';

	
	const GOOGLE_POSITION = 'home_diem_den_item.GOOGLE_POSITION';

	
	const KEYWORD = 'home_diem_den_item.KEYWORD';

	
	const PRIORITY = 'home_diem_den_item.PRIORITY';

	
	const HIDE = 'home_diem_den_item.HIDE';

	
	const CONTENT_ABOUT = 'home_diem_den_item.CONTENT_ABOUT';

	
	const ENABLE_DOMESTIC = 'home_diem_den_item.ENABLE_DOMESTIC';

	
	const ENABLE_INTERNATIONAL = 'home_diem_den_item.ENABLE_INTERNATIONAL';

	
	const ENABLE_FEATURED = 'home_diem_den_item.ENABLE_FEATURED';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'RegionId', 'AreaId', 'CityId', 'Name', 'Address', 'Img', 'ImgSearch', 'GoogleAddress', 'GooglePosition', 'Keyword', 'Priority', 'Hide', 'ContentAbout', 'EnableDomestic', 'EnableInternational', 'EnableFeatured', ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenItemPeer::ID, HomeDiemDenItemPeer::REGION_ID, HomeDiemDenItemPeer::AREA_ID, HomeDiemDenItemPeer::CITY_ID, HomeDiemDenItemPeer::NAME, HomeDiemDenItemPeer::ADDRESS, HomeDiemDenItemPeer::IMG, HomeDiemDenItemPeer::IMG_SEARCH, HomeDiemDenItemPeer::GOOGLE_ADDRESS, HomeDiemDenItemPeer::GOOGLE_POSITION, HomeDiemDenItemPeer::KEYWORD, HomeDiemDenItemPeer::PRIORITY, HomeDiemDenItemPeer::HIDE, HomeDiemDenItemPeer::CONTENT_ABOUT, HomeDiemDenItemPeer::ENABLE_DOMESTIC, HomeDiemDenItemPeer::ENABLE_INTERNATIONAL, HomeDiemDenItemPeer::ENABLE_FEATURED, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'region_id', 'area_id', 'city_id', 'name', 'address', 'img', 'img_search', 'google_address', 'google_position', 'keyword', 'priority', 'hide', 'content_about', 'enable_domestic', 'enable_international', 'enable_featured', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RegionId' => 1, 'AreaId' => 2, 'CityId' => 3, 'Name' => 4, 'Address' => 5, 'Img' => 6, 'ImgSearch' => 7, 'GoogleAddress' => 8, 'GooglePosition' => 9, 'Keyword' => 10, 'Priority' => 11, 'Hide' => 12, 'ContentAbout' => 13, 'EnableDomestic' => 14, 'EnableInternational' => 15, 'EnableFeatured' => 16, ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenItemPeer::ID => 0, HomeDiemDenItemPeer::REGION_ID => 1, HomeDiemDenItemPeer::AREA_ID => 2, HomeDiemDenItemPeer::CITY_ID => 3, HomeDiemDenItemPeer::NAME => 4, HomeDiemDenItemPeer::ADDRESS => 5, HomeDiemDenItemPeer::IMG => 6, HomeDiemDenItemPeer::IMG_SEARCH => 7, HomeDiemDenItemPeer::GOOGLE_ADDRESS => 8, HomeDiemDenItemPeer::GOOGLE_POSITION => 9, HomeDiemDenItemPeer::KEYWORD => 10, HomeDiemDenItemPeer::PRIORITY => 11, HomeDiemDenItemPeer::HIDE => 12, HomeDiemDenItemPeer::CONTENT_ABOUT => 13, HomeDiemDenItemPeer::ENABLE_DOMESTIC => 14, HomeDiemDenItemPeer::ENABLE_INTERNATIONAL => 15, HomeDiemDenItemPeer::ENABLE_FEATURED => 16, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'region_id' => 1, 'area_id' => 2, 'city_id' => 3, 'name' => 4, 'address' => 5, 'img' => 6, 'img_search' => 7, 'google_address' => 8, 'google_position' => 9, 'keyword' => 10, 'priority' => 11, 'hide' => 12, 'content_about' => 13, 'enable_domestic' => 14, 'enable_international' => 15, 'enable_featured' => 16, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.HomeDiemDenItemMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HomeDiemDenItemPeer::getTableMap();
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
		return str_replace(HomeDiemDenItemPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HomeDiemDenItemPeer::ID);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::REGION_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::AREA_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::CITY_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::NAME);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::IMG);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::IMG_SEARCH);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::GOOGLE_ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::GOOGLE_POSITION);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::KEYWORD);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::PRIORITY);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::HIDE);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::CONTENT_ABOUT);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::ENABLE_DOMESTIC);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::ENABLE_INTERNATIONAL);

		$criteria->addSelectColumn(HomeDiemDenItemPeer::ENABLE_FEATURED);

	}

	const COUNT = 'COUNT(home_diem_den_item.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT home_diem_den_item.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
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
		$objects = HomeDiemDenItemPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HomeDiemDenItemPeer::populateObjects(HomeDiemDenItemPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HomeDiemDenItemPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HomeDiemDenItemPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinRegion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinArea(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinCity(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinRegion(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		RegionPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = RegionPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getRegion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addHomeDiemDenItem($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinArea(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AreaPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

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
										$temp_obj2->addHomeDiemDenItem($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinCity(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CityPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = CityPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getCity(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addHomeDiemDenItem($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
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

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RegionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RegionPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AreaPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$c->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getRegion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenItem($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1);
			}


					
			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArea(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItem($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItems();
				$obj3->addHomeDiemDenItem($obj1);
			}


					
			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCity(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItem($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItems();
				$obj4->addHomeDiemDenItem($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptRegion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptArea(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptCity(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenItemPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptRegion(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		AreaPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + AreaPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);

		$c->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getArea(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCity(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItems();
				$obj3->addHomeDiemDenItem($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptArea(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RegionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RegionPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPeer::CITY_ID, CityPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getRegion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getCity(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItems();
				$obj3->addHomeDiemDenItem($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptCity(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPeer::NUM_COLUMNS - HomeDiemDenItemPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RegionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RegionPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AreaPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPeer::AREA_ID, AreaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getRegion(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItems();
				$obj2->addHomeDiemDenItem($obj1);
			}

			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getArea(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItem($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItems();
				$obj3->addHomeDiemDenItem($obj1);
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
		return HomeDiemDenItemPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HomeDiemDenItemPeer::ID); 

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
			$comparison = $criteria->getComparison(HomeDiemDenItemPeer::ID);
			$selectCriteria->add(HomeDiemDenItemPeer::ID, $criteria->remove(HomeDiemDenItemPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HomeDiemDenItemPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HomeDiemDenItemPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HomeDiemDenItem) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HomeDiemDenItemPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HomeDiemDenItem $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HomeDiemDenItemPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HomeDiemDenItemPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HomeDiemDenItemPeer::DATABASE_NAME, HomeDiemDenItemPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HomeDiemDenItemPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(HomeDiemDenItemPeer::DATABASE_NAME);
	
			$criteria->add(HomeDiemDenItemPeer::ID, $pk);
	

			$v = HomeDiemDenItemPeer::doSelect($criteria, $con);
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
			$criteria->add(HomeDiemDenItemPeer::ID, $pks, Criteria::IN);
			$objs = HomeDiemDenItemPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHomeDiemDenItemPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.HomeDiemDenItemMapBuilder');
}
