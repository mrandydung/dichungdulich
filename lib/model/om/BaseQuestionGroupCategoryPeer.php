<?php


abstract class BaseQuestionGroupCategoryPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'question_group_category';

	
	const CLASS_DEFAULT = 'lib.model.QuestionGroupCategory';

	
	const NUM_COLUMNS = 10;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'question_group_category.ID';

	
	const NAME = 'question_group_category.NAME';

	
	const NAME_EN = 'question_group_category.NAME_EN';

	
	const IMAGES_THUMB = 'question_group_category.IMAGES_THUMB';

	
	const IMAGES = 'question_group_category.IMAGES';

	
	const SLOGEN = 'question_group_category.SLOGEN';

	
	const PRIORITY = 'question_group_category.PRIORITY';

	
	const TITLE_SEO = 'question_group_category.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'question_group_category.DESCRIPTION_SEO';

	
	const IMG_SEO = 'question_group_category.IMG_SEO';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'NameEn', 'ImagesThumb', 'Images', 'Slogen', 'Priority', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', ),
		BasePeer::TYPE_COLNAME => array (QuestionGroupCategoryPeer::ID, QuestionGroupCategoryPeer::NAME, QuestionGroupCategoryPeer::NAME_EN, QuestionGroupCategoryPeer::IMAGES_THUMB, QuestionGroupCategoryPeer::IMAGES, QuestionGroupCategoryPeer::SLOGEN, QuestionGroupCategoryPeer::PRIORITY, QuestionGroupCategoryPeer::TITLE_SEO, QuestionGroupCategoryPeer::DESCRIPTION_SEO, QuestionGroupCategoryPeer::IMG_SEO, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'name_en', 'images_thumb', 'images', 'slogen', 'priority', 'title_seo', 'description_seo', 'img_seo', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'NameEn' => 2, 'ImagesThumb' => 3, 'Images' => 4, 'Slogen' => 5, 'Priority' => 6, 'TitleSeo' => 7, 'DescriptionSeo' => 8, 'ImgSeo' => 9, ),
		BasePeer::TYPE_COLNAME => array (QuestionGroupCategoryPeer::ID => 0, QuestionGroupCategoryPeer::NAME => 1, QuestionGroupCategoryPeer::NAME_EN => 2, QuestionGroupCategoryPeer::IMAGES_THUMB => 3, QuestionGroupCategoryPeer::IMAGES => 4, QuestionGroupCategoryPeer::SLOGEN => 5, QuestionGroupCategoryPeer::PRIORITY => 6, QuestionGroupCategoryPeer::TITLE_SEO => 7, QuestionGroupCategoryPeer::DESCRIPTION_SEO => 8, QuestionGroupCategoryPeer::IMG_SEO => 9, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'name_en' => 2, 'images_thumb' => 3, 'images' => 4, 'slogen' => 5, 'priority' => 6, 'title_seo' => 7, 'description_seo' => 8, 'img_seo' => 9, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.QuestionGroupCategoryMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = QuestionGroupCategoryPeer::getTableMap();
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
		return str_replace(QuestionGroupCategoryPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::ID);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::NAME);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::NAME_EN);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::IMAGES_THUMB);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::IMAGES);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::SLOGEN);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::PRIORITY);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::TITLE_SEO);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(QuestionGroupCategoryPeer::IMG_SEO);

	}

	const COUNT = 'COUNT(question_group_category.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT question_group_category.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(QuestionGroupCategoryPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(QuestionGroupCategoryPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = QuestionGroupCategoryPeer::doSelectRS($criteria, $con);
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
		$objects = QuestionGroupCategoryPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return QuestionGroupCategoryPeer::populateObjects(QuestionGroupCategoryPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			QuestionGroupCategoryPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = QuestionGroupCategoryPeer::getOMClass();
		$cls = sfPropel::import($cls);
				while($rs->next()) {
		
			$obj = new $cls();
			$obj->hydrate($rs);
			$results[] = $obj;
			
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
		return QuestionGroupCategoryPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(QuestionGroupCategoryPeer::ID); 

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
			$comparison = $criteria->getComparison(QuestionGroupCategoryPeer::ID);
			$selectCriteria->add(QuestionGroupCategoryPeer::ID, $criteria->remove(QuestionGroupCategoryPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(QuestionGroupCategoryPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(QuestionGroupCategoryPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof QuestionGroupCategory) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(QuestionGroupCategoryPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(QuestionGroupCategory $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(QuestionGroupCategoryPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(QuestionGroupCategoryPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(QuestionGroupCategoryPeer::DATABASE_NAME, QuestionGroupCategoryPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = QuestionGroupCategoryPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(QuestionGroupCategoryPeer::DATABASE_NAME);
	
			$criteria->add(QuestionGroupCategoryPeer::ID, $pk);
	

			$v = QuestionGroupCategoryPeer::doSelect($criteria, $con);
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
			$criteria->add(QuestionGroupCategoryPeer::ID, $pks, Criteria::IN);
			$objs = QuestionGroupCategoryPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseQuestionGroupCategoryPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.QuestionGroupCategoryMapBuilder');
}
