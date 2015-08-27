<?php


abstract class BaseHomeDiemDenItemPartnerPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'home_diem_den_item_partner';

	
	const CLASS_DEFAULT = 'lib.model.HomeDiemDenItemPartner';

	
	const NUM_COLUMNS = 14;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'home_diem_den_item_partner.ID';

	
	const PARTNER_ID = 'home_diem_den_item_partner.PARTNER_ID';

	
	const REGION_ID = 'home_diem_den_item_partner.REGION_ID';

	
	const AREA_ID = 'home_diem_den_item_partner.AREA_ID';

	
	const CITY_ID = 'home_diem_den_item_partner.CITY_ID';

	
	const NAME = 'home_diem_den_item_partner.NAME';

	
	const ADDRESS = 'home_diem_den_item_partner.ADDRESS';

	
	const IMG = 'home_diem_den_item_partner.IMG';

	
	const GOOGLE_ADDRESS = 'home_diem_den_item_partner.GOOGLE_ADDRESS';

	
	const GOOGLE_POSITION = 'home_diem_den_item_partner.GOOGLE_POSITION';

	
	const KEYWORD = 'home_diem_den_item_partner.KEYWORD';

	
	const ON_HOMEPAGE = 'home_diem_den_item_partner.ON_HOMEPAGE';

	
	const PRIORITY = 'home_diem_den_item_partner.PRIORITY';

	
	const CREATED_AT = 'home_diem_den_item_partner.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'RegionId', 'AreaId', 'CityId', 'Name', 'Address', 'Img', 'GoogleAddress', 'GooglePosition', 'Keyword', 'OnHomepage', 'Priority', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenItemPartnerPeer::ID, HomeDiemDenItemPartnerPeer::PARTNER_ID, HomeDiemDenItemPartnerPeer::REGION_ID, HomeDiemDenItemPartnerPeer::AREA_ID, HomeDiemDenItemPartnerPeer::CITY_ID, HomeDiemDenItemPartnerPeer::NAME, HomeDiemDenItemPartnerPeer::ADDRESS, HomeDiemDenItemPartnerPeer::IMG, HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS, HomeDiemDenItemPartnerPeer::GOOGLE_POSITION, HomeDiemDenItemPartnerPeer::KEYWORD, HomeDiemDenItemPartnerPeer::ON_HOMEPAGE, HomeDiemDenItemPartnerPeer::PRIORITY, HomeDiemDenItemPartnerPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'region_id', 'area_id', 'city_id', 'name', 'address', 'img', 'google_address', 'google_position', 'keyword', 'on_homepage', 'priority', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'RegionId' => 2, 'AreaId' => 3, 'CityId' => 4, 'Name' => 5, 'Address' => 6, 'Img' => 7, 'GoogleAddress' => 8, 'GooglePosition' => 9, 'Keyword' => 10, 'OnHomepage' => 11, 'Priority' => 12, 'CreatedAt' => 13, ),
		BasePeer::TYPE_COLNAME => array (HomeDiemDenItemPartnerPeer::ID => 0, HomeDiemDenItemPartnerPeer::PARTNER_ID => 1, HomeDiemDenItemPartnerPeer::REGION_ID => 2, HomeDiemDenItemPartnerPeer::AREA_ID => 3, HomeDiemDenItemPartnerPeer::CITY_ID => 4, HomeDiemDenItemPartnerPeer::NAME => 5, HomeDiemDenItemPartnerPeer::ADDRESS => 6, HomeDiemDenItemPartnerPeer::IMG => 7, HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS => 8, HomeDiemDenItemPartnerPeer::GOOGLE_POSITION => 9, HomeDiemDenItemPartnerPeer::KEYWORD => 10, HomeDiemDenItemPartnerPeer::ON_HOMEPAGE => 11, HomeDiemDenItemPartnerPeer::PRIORITY => 12, HomeDiemDenItemPartnerPeer::CREATED_AT => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'region_id' => 2, 'area_id' => 3, 'city_id' => 4, 'name' => 5, 'address' => 6, 'img' => 7, 'google_address' => 8, 'google_position' => 9, 'keyword' => 10, 'on_homepage' => 11, 'priority' => 12, 'created_at' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.HomeDiemDenItemPartnerMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = HomeDiemDenItemPartnerPeer::getTableMap();
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
		return str_replace(HomeDiemDenItemPartnerPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::ID);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::PARTNER_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::REGION_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::AREA_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::CITY_ID);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::NAME);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::IMG);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::GOOGLE_POSITION);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::KEYWORD);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::ON_HOMEPAGE);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::PRIORITY);

		$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(home_diem_den_item_partner.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT home_diem_den_item_partner.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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
		$objects = HomeDiemDenItemPartnerPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return HomeDiemDenItemPartnerPeer::populateObjects(HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = HomeDiemDenItemPartnerPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
		}
		return $results;
	}

	
	public static function doCountJoinPartner(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinRegion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinPartner(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
										$temp_obj2->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinRegion(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		RegionPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
										$temp_obj2->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1); 			}
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

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		AreaPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
										$temp_obj2->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1); 			}
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

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CityPeer::addSelectColumns($c);

		$c->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
										$temp_obj2->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		RegionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + RegionPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AreaPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);


					
			$omClass = PartnerPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getPartner(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1);
			}


					
			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getRegion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItemPartners();
				$obj3->addHomeDiemDenItemPartner($obj1);
			}


					
			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getArea(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItemPartners();
				$obj4->addHomeDiemDenItemPartner($obj1);
			}


					
			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCity(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addHomeDiemDenItemPartner($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initHomeDiemDenItemPartners();
				$obj5->addHomeDiemDenItemPartner($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptPartner(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptRegion(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(HomeDiemDenItemPartnerPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$criteria->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$rs = HomeDiemDenItemPartnerPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptPartner(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		RegionPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + RegionPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AreaPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
					$temp_obj2->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1);
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
					$temp_obj3->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItemPartners();
				$obj3->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCity(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItemPartners();
				$obj4->addHomeDiemDenItemPartner($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptRegion(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + AreaPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
					$temp_obj2->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1);
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
					$temp_obj3->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItemPartners();
				$obj3->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCity(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItemPartners();
				$obj4->addHomeDiemDenItemPartner($obj1);
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

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		RegionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + RegionPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + CityPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::CITY_ID, CityPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
					$temp_obj2->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getRegion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItemPartners();
				$obj3->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getCity(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItemPartners();
				$obj4->addHomeDiemDenItemPartner($obj1);
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

		HomeDiemDenItemPartnerPeer::addSelectColumns($c);
		$startcol2 = (HomeDiemDenItemPartnerPeer::NUM_COLUMNS - HomeDiemDenItemPartnerPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		RegionPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + RegionPeer::NUM_COLUMNS;

		AreaPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + AreaPeer::NUM_COLUMNS;

		$c->addJoin(HomeDiemDenItemPartnerPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::REGION_ID, RegionPeer::ID);

		$c->addJoin(HomeDiemDenItemPartnerPeer::AREA_ID, AreaPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = HomeDiemDenItemPartnerPeer::getOMClass();

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
					$temp_obj2->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initHomeDiemDenItemPartners();
				$obj2->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = RegionPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getRegion(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initHomeDiemDenItemPartners();
				$obj3->addHomeDiemDenItemPartner($obj1);
			}

			$omClass = AreaPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getArea(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addHomeDiemDenItemPartner($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initHomeDiemDenItemPartners();
				$obj4->addHomeDiemDenItemPartner($obj1);
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
		return HomeDiemDenItemPartnerPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(HomeDiemDenItemPartnerPeer::ID); 

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
			$comparison = $criteria->getComparison(HomeDiemDenItemPartnerPeer::ID);
			$selectCriteria->add(HomeDiemDenItemPartnerPeer::ID, $criteria->remove(HomeDiemDenItemPartnerPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(HomeDiemDenItemPartnerPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(HomeDiemDenItemPartnerPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof HomeDiemDenItemPartner) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(HomeDiemDenItemPartnerPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(HomeDiemDenItemPartner $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(HomeDiemDenItemPartnerPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(HomeDiemDenItemPartnerPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(HomeDiemDenItemPartnerPeer::DATABASE_NAME, HomeDiemDenItemPartnerPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = HomeDiemDenItemPartnerPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(HomeDiemDenItemPartnerPeer::DATABASE_NAME);
	
			$criteria->add(HomeDiemDenItemPartnerPeer::ID, $pk);
	

			$v = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
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
			$criteria->add(HomeDiemDenItemPartnerPeer::ID, $pks, Criteria::IN);
			$objs = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseHomeDiemDenItemPartnerPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.HomeDiemDenItemPartnerMapBuilder');
}
