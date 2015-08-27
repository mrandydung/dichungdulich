<?php


abstract class BaseTripExperiencePeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'trip_experience';

	
	const CLASS_DEFAULT = 'lib.model.TripExperience';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'trip_experience.ID';

	
	const USER_ID = 'trip_experience.USER_ID';

	
	const TITLE = 'trip_experience.TITLE';

	
	const END = 'trip_experience.END';

	
	const COO_END = 'trip_experience.COO_END';

	
	const LAT_END = 'trip_experience.LAT_END';

	
	const LNG_END = 'trip_experience.LNG_END';

	
	const TYPE_UPLOAD_ID = 'trip_experience.TYPE_UPLOAD_ID';

	
	const IMAGES = 'trip_experience.IMAGES';

	
	const VIDEO_URL = 'trip_experience.VIDEO_URL';

	
	const CONTENT = 'trip_experience.CONTENT';

	
	const COUNT_VIEW = 'trip_experience.COUNT_VIEW';

	
	const COUNT_LIKE = 'trip_experience.COUNT_LIKE';

	
	const COUNT_SHARE = 'trip_experience.COUNT_SHARE';

	
	const PRIORITY = 'trip_experience.PRIORITY';

	
	const EXPERIENCE_FEATURED = 'trip_experience.EXPERIENCE_FEATURED';

	
	const TITLE_SEO = 'trip_experience.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'trip_experience.DESCRIPTION_SEO';

	
	const IMG_SEO = 'trip_experience.IMG_SEO';

	
	const CREATED_AT = 'trip_experience.CREATED_AT';

	
	const UPDATED_AT = 'trip_experience.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Title', 'End', 'CooEnd', 'LatEnd', 'LngEnd', 'TypeUploadId', 'Images', 'VideoUrl', 'Content', 'CountView', 'CountLike', 'CountShare', 'Priority', 'ExperienceFeatured', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (TripExperiencePeer::ID, TripExperiencePeer::USER_ID, TripExperiencePeer::TITLE, TripExperiencePeer::END, TripExperiencePeer::COO_END, TripExperiencePeer::LAT_END, TripExperiencePeer::LNG_END, TripExperiencePeer::TYPE_UPLOAD_ID, TripExperiencePeer::IMAGES, TripExperiencePeer::VIDEO_URL, TripExperiencePeer::CONTENT, TripExperiencePeer::COUNT_VIEW, TripExperiencePeer::COUNT_LIKE, TripExperiencePeer::COUNT_SHARE, TripExperiencePeer::PRIORITY, TripExperiencePeer::EXPERIENCE_FEATURED, TripExperiencePeer::TITLE_SEO, TripExperiencePeer::DESCRIPTION_SEO, TripExperiencePeer::IMG_SEO, TripExperiencePeer::CREATED_AT, TripExperiencePeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'title', 'end', 'coo_end', 'lat_end', 'lng_end', 'type_upload_id', 'images', 'video_url', 'content', 'count_view', 'count_like', 'count_share', 'priority', 'experience_featured', 'title_seo', 'description_seo', 'img_seo', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Title' => 2, 'End' => 3, 'CooEnd' => 4, 'LatEnd' => 5, 'LngEnd' => 6, 'TypeUploadId' => 7, 'Images' => 8, 'VideoUrl' => 9, 'Content' => 10, 'CountView' => 11, 'CountLike' => 12, 'CountShare' => 13, 'Priority' => 14, 'ExperienceFeatured' => 15, 'TitleSeo' => 16, 'DescriptionSeo' => 17, 'ImgSeo' => 18, 'CreatedAt' => 19, 'UpdatedAt' => 20, ),
		BasePeer::TYPE_COLNAME => array (TripExperiencePeer::ID => 0, TripExperiencePeer::USER_ID => 1, TripExperiencePeer::TITLE => 2, TripExperiencePeer::END => 3, TripExperiencePeer::COO_END => 4, TripExperiencePeer::LAT_END => 5, TripExperiencePeer::LNG_END => 6, TripExperiencePeer::TYPE_UPLOAD_ID => 7, TripExperiencePeer::IMAGES => 8, TripExperiencePeer::VIDEO_URL => 9, TripExperiencePeer::CONTENT => 10, TripExperiencePeer::COUNT_VIEW => 11, TripExperiencePeer::COUNT_LIKE => 12, TripExperiencePeer::COUNT_SHARE => 13, TripExperiencePeer::PRIORITY => 14, TripExperiencePeer::EXPERIENCE_FEATURED => 15, TripExperiencePeer::TITLE_SEO => 16, TripExperiencePeer::DESCRIPTION_SEO => 17, TripExperiencePeer::IMG_SEO => 18, TripExperiencePeer::CREATED_AT => 19, TripExperiencePeer::UPDATED_AT => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'title' => 2, 'end' => 3, 'coo_end' => 4, 'lat_end' => 5, 'lng_end' => 6, 'type_upload_id' => 7, 'images' => 8, 'video_url' => 9, 'content' => 10, 'count_view' => 11, 'count_like' => 12, 'count_share' => 13, 'priority' => 14, 'experience_featured' => 15, 'title_seo' => 16, 'description_seo' => 17, 'img_seo' => 18, 'created_at' => 19, 'updated_at' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TripExperienceMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TripExperiencePeer::getTableMap();
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
		return str_replace(TripExperiencePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TripExperiencePeer::ID);

		$criteria->addSelectColumn(TripExperiencePeer::USER_ID);

		$criteria->addSelectColumn(TripExperiencePeer::TITLE);

		$criteria->addSelectColumn(TripExperiencePeer::END);

		$criteria->addSelectColumn(TripExperiencePeer::COO_END);

		$criteria->addSelectColumn(TripExperiencePeer::LAT_END);

		$criteria->addSelectColumn(TripExperiencePeer::LNG_END);

		$criteria->addSelectColumn(TripExperiencePeer::TYPE_UPLOAD_ID);

		$criteria->addSelectColumn(TripExperiencePeer::IMAGES);

		$criteria->addSelectColumn(TripExperiencePeer::VIDEO_URL);

		$criteria->addSelectColumn(TripExperiencePeer::CONTENT);

		$criteria->addSelectColumn(TripExperiencePeer::COUNT_VIEW);

		$criteria->addSelectColumn(TripExperiencePeer::COUNT_LIKE);

		$criteria->addSelectColumn(TripExperiencePeer::COUNT_SHARE);

		$criteria->addSelectColumn(TripExperiencePeer::PRIORITY);

		$criteria->addSelectColumn(TripExperiencePeer::EXPERIENCE_FEATURED);

		$criteria->addSelectColumn(TripExperiencePeer::TITLE_SEO);

		$criteria->addSelectColumn(TripExperiencePeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(TripExperiencePeer::IMG_SEO);

		$criteria->addSelectColumn(TripExperiencePeer::CREATED_AT);

		$criteria->addSelectColumn(TripExperiencePeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(trip_experience.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT trip_experience.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
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
		$objects = TripExperiencePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TripExperiencePeer::populateObjects(TripExperiencePeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TripExperiencePeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TripExperiencePeer::getOMClass();
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
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
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

		TripExperiencePeer::addSelectColumns($c);
		$startcol = (TripExperiencePeer::NUM_COLUMNS - TripExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripExperiencePeer::getOMClass();

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
										$temp_obj2->addTripExperience($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripExperiences();
				$obj2->addTripExperience($obj1); 			}
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

		TripExperiencePeer::addSelectColumns($c);
		$startcol = (TripExperiencePeer::NUM_COLUMNS - TripExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TypeUploadPeer::addSelectColumns($c);

		$c->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripExperiencePeer::getOMClass();

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
										$temp_obj2->addTripExperience($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTripExperiences();
				$obj2->addTripExperience($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
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

		TripExperiencePeer::addSelectColumns($c);
		$startcol2 = (TripExperiencePeer::NUM_COLUMNS - TripExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		TypeUploadPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TypeUploadPeer::NUM_COLUMNS;

		$c->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripExperiencePeer::getOMClass();


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
					$temp_obj2->addTripExperience($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTripExperiences();
				$obj2->addTripExperience($obj1);
			}


					
			$omClass = TypeUploadPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTypeUpload(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTripExperience($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTripExperiences();
				$obj3->addTripExperience($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAllExceptDichungUser(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TripExperiencePeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TripExperiencePeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);

		$rs = TripExperiencePeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doSelectJoinAllExceptDichungUser(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TripExperiencePeer::addSelectColumns($c);
		$startcol2 = (TripExperiencePeer::NUM_COLUMNS - TripExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		TypeUploadPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + TypeUploadPeer::NUM_COLUMNS;

		$c->addJoin(TripExperiencePeer::TYPE_UPLOAD_ID, TypeUploadPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripExperiencePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypeUploadPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getTypeUpload(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addTripExperience($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTripExperiences();
				$obj2->addTripExperience($obj1);
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

		TripExperiencePeer::addSelectColumns($c);
		$startcol2 = (TripExperiencePeer::NUM_COLUMNS - TripExperiencePeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(TripExperiencePeer::USER_ID, DichungUserPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TripExperiencePeer::getOMClass();

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
					$temp_obj2->addTripExperience($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTripExperiences();
				$obj2->addTripExperience($obj1);
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
		return TripExperiencePeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TripExperiencePeer::ID); 

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
			$comparison = $criteria->getComparison(TripExperiencePeer::ID);
			$selectCriteria->add(TripExperiencePeer::ID, $criteria->remove(TripExperiencePeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TripExperiencePeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TripExperiencePeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TripExperience) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TripExperiencePeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TripExperience $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TripExperiencePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TripExperiencePeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TripExperiencePeer::DATABASE_NAME, TripExperiencePeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TripExperiencePeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TripExperiencePeer::DATABASE_NAME);
	
			$criteria->add(TripExperiencePeer::ID, $pk);
	

			$v = TripExperiencePeer::doSelect($criteria, $con);
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
			$criteria->add(TripExperiencePeer::ID, $pks, Criteria::IN);
			$objs = TripExperiencePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTripExperiencePeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TripExperienceMapBuilder');
}
