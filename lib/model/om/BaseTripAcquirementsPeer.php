<?php


abstract class BaseTripAcquirementsPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'trip_acquirements';

	
	const CLASS_DEFAULT = 'lib.model.TripAcquirements';

	
	const NUM_COLUMNS = 25;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'trip_acquirements.ID';

	
	const PARTNER_ID = 'trip_acquirements.PARTNER_ID';

	
	const USER_ID = 'trip_acquirements.USER_ID';

	
	const TITLE = 'trip_acquirements.TITLE';

	
	const END = 'trip_acquirements.END';

	
	const COO_END = 'trip_acquirements.COO_END';

	
	const LAT_END = 'trip_acquirements.LAT_END';

	
	const LNG_END = 'trip_acquirements.LNG_END';

	
	const TYPE_UPLOAD_ID = 'trip_acquirements.TYPE_UPLOAD_ID';

	
	const IMAGES = 'trip_acquirements.IMAGES';

	
	const VIDEO_URL = 'trip_acquirements.VIDEO_URL';

	
	const CONTENT = 'trip_acquirements.CONTENT';

	
	const EATING = 'trip_acquirements.EATING';

	
	const HOME = 'trip_acquirements.HOME';

	
	const LOCATION_PLAY = 'trip_acquirements.LOCATION_PLAY';

	
	const LOCATION_UP_TO = 'trip_acquirements.LOCATION_UP_TO';

	
	const WHAT_TO_BY = 'trip_acquirements.WHAT_TO_BY';

	
	const COUNT_VIEW = 'trip_acquirements.COUNT_VIEW';

	
	const COUNT_LIKE = 'trip_acquirements.COUNT_LIKE';

	
	const COUNT_SHARE = 'trip_acquirements.COUNT_SHARE';

	
	const TITLE_SEO = 'trip_acquirements.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'trip_acquirements.DESCRIPTION_SEO';

	
	const IMG_SEO = 'trip_acquirements.IMG_SEO';

	
	const CREATED_AT = 'trip_acquirements.CREATED_AT';

	
	const UPDATED_AT = 'trip_acquirements.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'UserId', 'Title', 'End', 'CooEnd', 'LatEnd', 'LngEnd', 'TypeUploadId', 'Images', 'VideoUrl', 'Content', 'Eating', 'Home', 'LocationPlay', 'LocationUpTo', 'WhatToBy', 'CountView', 'CountLike', 'CountShare', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (TripAcquirementsPeer::ID, TripAcquirementsPeer::PARTNER_ID, TripAcquirementsPeer::USER_ID, TripAcquirementsPeer::TITLE, TripAcquirementsPeer::END, TripAcquirementsPeer::COO_END, TripAcquirementsPeer::LAT_END, TripAcquirementsPeer::LNG_END, TripAcquirementsPeer::TYPE_UPLOAD_ID, TripAcquirementsPeer::IMAGES, TripAcquirementsPeer::VIDEO_URL, TripAcquirementsPeer::CONTENT, TripAcquirementsPeer::EATING, TripAcquirementsPeer::HOME, TripAcquirementsPeer::LOCATION_PLAY, TripAcquirementsPeer::LOCATION_UP_TO, TripAcquirementsPeer::WHAT_TO_BY, TripAcquirementsPeer::COUNT_VIEW, TripAcquirementsPeer::COUNT_LIKE, TripAcquirementsPeer::COUNT_SHARE, TripAcquirementsPeer::TITLE_SEO, TripAcquirementsPeer::DESCRIPTION_SEO, TripAcquirementsPeer::IMG_SEO, TripAcquirementsPeer::CREATED_AT, TripAcquirementsPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'user_id', 'title', 'end', 'coo_end', 'lat_end', 'lng_end', 'type_upload_id', 'images', 'video_url', 'content', 'eating', 'home', 'location_play', 'location_up_to', 'what_to_by', 'count_view', 'count_like', 'count_share', 'title_seo', 'description_seo', 'img_seo', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'UserId' => 2, 'Title' => 3, 'End' => 4, 'CooEnd' => 5, 'LatEnd' => 6, 'LngEnd' => 7, 'TypeUploadId' => 8, 'Images' => 9, 'VideoUrl' => 10, 'Content' => 11, 'Eating' => 12, 'Home' => 13, 'LocationPlay' => 14, 'LocationUpTo' => 15, 'WhatToBy' => 16, 'CountView' => 17, 'CountLike' => 18, 'CountShare' => 19, 'TitleSeo' => 20, 'DescriptionSeo' => 21, 'ImgSeo' => 22, 'CreatedAt' => 23, 'UpdatedAt' => 24, ),
		BasePeer::TYPE_COLNAME => array (TripAcquirementsPeer::ID => 0, TripAcquirementsPeer::PARTNER_ID => 1, TripAcquirementsPeer::USER_ID => 2, TripAcquirementsPeer::TITLE => 3, TripAcquirementsPeer::END => 4, TripAcquirementsPeer::COO_END => 5, TripAcquirementsPeer::LAT_END => 6, TripAcquirementsPeer::LNG_END => 7, TripAcquirementsPeer::TYPE_UPLOAD_ID => 8, TripAcquirementsPeer::IMAGES => 9, TripAcquirementsPeer::VIDEO_URL => 10, TripAcquirementsPeer::CONTENT => 11, TripAcquirementsPeer::EATING => 12, TripAcquirementsPeer::HOME => 13, TripAcquirementsPeer::LOCATION_PLAY => 14, TripAcquirementsPeer::LOCATION_UP_TO => 15, TripAcquirementsPeer::WHAT_TO_BY => 16, TripAcquirementsPeer::COUNT_VIEW => 17, TripAcquirementsPeer::COUNT_LIKE => 18, TripAcquirementsPeer::COUNT_SHARE => 19, TripAcquirementsPeer::TITLE_SEO => 20, TripAcquirementsPeer::DESCRIPTION_SEO => 21, TripAcquirementsPeer::IMG_SEO => 22, TripAcquirementsPeer::CREATED_AT => 23, TripAcquirementsPeer::UPDATED_AT => 24, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'user_id' => 2, 'title' => 3, 'end' => 4, 'coo_end' => 5, 'lat_end' => 6, 'lng_end' => 7, 'type_upload_id' => 8, 'images' => 9, 'video_url' => 10, 'content' => 11, 'eating' => 12, 'home' => 13, 'location_play' => 14, 'location_up_to' => 15, 'what_to_by' => 16, 'count_view' => 17, 'count_like' => 18, 'count_share' => 19, 'title_seo' => 20, 'description_seo' => 21, 'img_seo' => 22, 'created_at' => 23, 'updated_at' => 24, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TripAcquirementsMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TripAcquirementsPeer::getTableMap();
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
		return str_replace(TripAcquirementsPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TripAcquirementsPeer::ID);

		$criteria->addSelectColumn(TripAcquirementsPeer::PARTNER_ID);

		$criteria->addSelectColumn(TripAcquirementsPeer::USER_ID);

		$criteria->addSelectColumn(TripAcquirementsPeer::TITLE);

		$criteria->addSelectColumn(TripAcquirementsPeer::END);

		$criteria->addSelectColumn(TripAcquirementsPeer::COO_END);

		$criteria->addSelectColumn(TripAcquirementsPeer::LAT_END);

		$criteria->addSelectColumn(TripAcquirementsPeer::LNG_END);

		$criteria->addSelectColumn(TripAcquirementsPeer::TYPE_UPLOAD_ID);

		$criteria->addSelectColumn(TripAcquirementsPeer::IMAGES);

		$criteria->addSelectColumn(TripAcquirementsPeer::VIDEO_URL);

		$criteria->addSelectColumn(TripAcquirementsPeer::CONTENT);

		$criteria->addSelectColumn(TripAcquirementsPeer::EATING);

		$criteria->addSelectColumn(TripAcquirementsPeer::HOME);

		$criteria->addSelectColumn(TripAcquirementsPeer::LOCATION_PLAY);

		$criteria->addSelectColumn(TripAcquirementsPeer::LOCATION_UP_TO);

		$criteria->addSelectColumn(TripAcquirementsPeer::WHAT_TO_BY);

		$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_VIEW);

		$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_LIKE);

		$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_SHARE);

		$criteria->addSelectColumn(TripAcquirementsPeer::TITLE_SEO);

		$criteria->addSelectColumn(TripAcquirementsPeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(TripAcquirementsPeer::IMG_SEO);

		$criteria->addSelectColumn(TripAcquirementsPeer::CREATED_AT);

		$criteria->addSelectColumn(TripAcquirementsPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(trip_acquirements.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT trip_acquirements.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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
		$objects = TripAcquirementsPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TripAcquirementsPeer::populateObjects(TripAcquirementsPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TripAcquirementsPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TripAcquirementsPeer::getOMClass();
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
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTypeUpload(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

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
										$temp_obj2->addTripAcquirements($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1); 			}
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

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

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
										$temp_obj2->addTripAcquirements($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTypeUpload(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TypeUploadPeer::addSelectColumns($c);

		$c->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypeUploadPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTypeUpload(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTripAcquirements($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TypeUploadPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TypeUploadPeer::NUM_COLUMNS;

		$c->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();


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
					$temp_obj2->addTripAcquirements($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1);
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
					$temp_obj3->addTripAcquirements($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTripAcquirementss();
				$obj3->addTripAcquirements($obj1);
			}


					
			$omClass = TypeUploadPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTypeUpload(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTripAcquirements($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initTripAcquirementss();
				$obj4->addTripAcquirements($obj1);
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
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTypeUpload(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripAcquirementsPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$rs = TripAcquirementsPeer::doSelectRS($criteria, $con);
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

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		TypeUploadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TypeUploadPeer::NUM_COLUMNS;

		$c->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

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
					$temp_obj2->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1);
			}

			$omClass = TypeUploadPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTypeUpload(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTripAcquirementss();
				$obj3->addTripAcquirements($obj1);
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

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		TypeUploadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TypeUploadPeer::NUM_COLUMNS;

		$c->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TripAcquirementsPeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

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
					$temp_obj2->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1);
			}

			$omClass = TypeUploadPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTypeUpload(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTripAcquirementss();
				$obj3->addTripAcquirements($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTypeUpload(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TripAcquirementsPeer::addSelectColumns($c);
		$startcol2 = (TripAcquirementsPeer::NUM_COLUMNS - TripAcquirementsPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(TripAcquirementsPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TripAcquirementsPeer::USER_ID, DichungUserPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripAcquirementsPeer::getOMClass();

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
					$temp_obj2->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTripAcquirementss();
				$obj2->addTripAcquirements($obj1);
			}

			$omClass = DichungUserPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getDichungUser(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTripAcquirements($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTripAcquirementss();
				$obj3->addTripAcquirements($obj1);
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
		return TripAcquirementsPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TripAcquirementsPeer::ID); 

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
			$comparison = $criteria->getComparison(TripAcquirementsPeer::ID);
			$selectCriteria->add(TripAcquirementsPeer::ID, $criteria->remove(TripAcquirementsPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TripAcquirementsPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TripAcquirementsPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TripAcquirements) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TripAcquirementsPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TripAcquirements $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TripAcquirementsPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TripAcquirementsPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TripAcquirementsPeer::DATABASE_NAME, TripAcquirementsPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TripAcquirementsPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TripAcquirementsPeer::DATABASE_NAME);
	
			$criteria->add(TripAcquirementsPeer::ID, $pk);
	

			$v = TripAcquirementsPeer::doSelect($criteria, $con);
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
			$criteria->add(TripAcquirementsPeer::ID, $pks, Criteria::IN);
			$objs = TripAcquirementsPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTripAcquirementsPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TripAcquirementsMapBuilder');
}
