<?php


abstract class BaseQuestionPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'question';

	
	const CLASS_DEFAULT = 'lib.model.Question';

	
	const NUM_COLUMNS = 15;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'question.ID';

	
	const USER_ID = 'question.USER_ID';

	
	const TITLE = 'question.TITLE';

	
	const DETAIL = 'question.DETAIL';

	
	const QUESTION_GROUP_CATEGORY = 'question.QUESTION_GROUP_CATEGORY';

	
	const ANSWER = 'question.ANSWER';

	
	const LIKE_QUESTION = 'question.LIKE_QUESTION';

	
	const SHARE = 'question.SHARE';

	
	const VIEW = 'question.VIEW';

	
	const ID_LIKE = 'question.ID_LIKE';

	
	const DATE = 'question.DATE';

	
	const TITLE_SEO = 'question.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'question.DESCRIPTION_SEO';

	
	const IMG_SEO = 'question.IMG_SEO';

	
	const CREATED_AT = 'question.CREATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Title', 'Detail', 'QuestionGroupCategory', 'Answer', 'LikeQuestion', 'Share', 'View', 'IdLike', 'Date', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', 'CreatedAt', ),
		BasePeer::TYPE_COLNAME => array (QuestionPeer::ID, QuestionPeer::USER_ID, QuestionPeer::TITLE, QuestionPeer::DETAIL, QuestionPeer::QUESTION_GROUP_CATEGORY, QuestionPeer::ANSWER, QuestionPeer::LIKE_QUESTION, QuestionPeer::SHARE, QuestionPeer::VIEW, QuestionPeer::ID_LIKE, QuestionPeer::DATE, QuestionPeer::TITLE_SEO, QuestionPeer::DESCRIPTION_SEO, QuestionPeer::IMG_SEO, QuestionPeer::CREATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'title', 'detail', 'question_group_category', 'answer', 'like_question', 'share', 'view', 'id_like', 'date', 'title_seo', 'description_seo', 'img_seo', 'created_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Title' => 2, 'Detail' => 3, 'QuestionGroupCategory' => 4, 'Answer' => 5, 'LikeQuestion' => 6, 'Share' => 7, 'View' => 8, 'IdLike' => 9, 'Date' => 10, 'TitleSeo' => 11, 'DescriptionSeo' => 12, 'ImgSeo' => 13, 'CreatedAt' => 14, ),
		BasePeer::TYPE_COLNAME => array (QuestionPeer::ID => 0, QuestionPeer::USER_ID => 1, QuestionPeer::TITLE => 2, QuestionPeer::DETAIL => 3, QuestionPeer::QUESTION_GROUP_CATEGORY => 4, QuestionPeer::ANSWER => 5, QuestionPeer::LIKE_QUESTION => 6, QuestionPeer::SHARE => 7, QuestionPeer::VIEW => 8, QuestionPeer::ID_LIKE => 9, QuestionPeer::DATE => 10, QuestionPeer::TITLE_SEO => 11, QuestionPeer::DESCRIPTION_SEO => 12, QuestionPeer::IMG_SEO => 13, QuestionPeer::CREATED_AT => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'title' => 2, 'detail' => 3, 'question_group_category' => 4, 'answer' => 5, 'like_question' => 6, 'share' => 7, 'view' => 8, 'id_like' => 9, 'date' => 10, 'title_seo' => 11, 'description_seo' => 12, 'img_seo' => 13, 'created_at' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.QuestionMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = QuestionPeer::getTableMap();
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
		return str_replace(QuestionPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(QuestionPeer::ID);

		$criteria->addSelectColumn(QuestionPeer::USER_ID);

		$criteria->addSelectColumn(QuestionPeer::TITLE);

		$criteria->addSelectColumn(QuestionPeer::DETAIL);

		$criteria->addSelectColumn(QuestionPeer::QUESTION_GROUP_CATEGORY);

		$criteria->addSelectColumn(QuestionPeer::ANSWER);

		$criteria->addSelectColumn(QuestionPeer::LIKE_QUESTION);

		$criteria->addSelectColumn(QuestionPeer::SHARE);

		$criteria->addSelectColumn(QuestionPeer::VIEW);

		$criteria->addSelectColumn(QuestionPeer::ID_LIKE);

		$criteria->addSelectColumn(QuestionPeer::DATE);

		$criteria->addSelectColumn(QuestionPeer::TITLE_SEO);

		$criteria->addSelectColumn(QuestionPeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(QuestionPeer::IMG_SEO);

		$criteria->addSelectColumn(QuestionPeer::CREATED_AT);

	}

	const COUNT = 'COUNT(question.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT question.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(QuestionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(QuestionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = QuestionPeer::doSelectRS($criteria, $con);
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
		$objects = QuestionPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return QuestionPeer::populateObjects(QuestionPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			QuestionPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = QuestionPeer::getOMClass();
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
			$criteria->addSelectColumn(QuestionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(QuestionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(QuestionPeer::USER_ID, DichungUserPeer::ID);

		$rs = QuestionPeer::doSelectRS($criteria, $con);
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

		QuestionPeer::addSelectColumns($c);
		$startcol = (QuestionPeer::NUM_COLUMNS - QuestionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(QuestionPeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = QuestionPeer::getOMClass();

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
										$temp_obj2->addQuestion($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initQuestions();
				$obj2->addQuestion($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(QuestionPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(QuestionPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(QuestionPeer::USER_ID, DichungUserPeer::ID);

		$rs = QuestionPeer::doSelectRS($criteria, $con);
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

		QuestionPeer::addSelectColumns($c);
		$startcol2 = (QuestionPeer::NUM_COLUMNS - QuestionPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		$c->addJoin(QuestionPeer::USER_ID, DichungUserPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = QuestionPeer::getOMClass();


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
					$temp_obj2->addQuestion($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initQuestions();
				$obj2->addQuestion($obj1);
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
		return QuestionPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(QuestionPeer::ID); 

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
			$comparison = $criteria->getComparison(QuestionPeer::ID);
			$selectCriteria->add(QuestionPeer::ID, $criteria->remove(QuestionPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(QuestionPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(QuestionPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof Question) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(QuestionPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(Question $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(QuestionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(QuestionPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(QuestionPeer::DATABASE_NAME, QuestionPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = QuestionPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(QuestionPeer::DATABASE_NAME);
	
			$criteria->add(QuestionPeer::ID, $pk);
	

			$v = QuestionPeer::doSelect($criteria, $con);
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
			$criteria->add(QuestionPeer::ID, $pks, Criteria::IN);
			$objs = QuestionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseQuestionPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.QuestionMapBuilder');
}
