<?php


abstract class BaseConfigSocialNetworkPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'config_social_network';

	
	const CLASS_DEFAULT = 'lib.model.ConfigSocialNetwork';

	
	const NUM_COLUMNS = 7;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'config_social_network.ID';

	
	const PARTNER_ID = 'config_social_network.PARTNER_ID';

	
	const LINK_FACEBOOK = 'config_social_network.LINK_FACEBOOK';

	
	const LINK_GOOGLE = 'config_social_network.LINK_GOOGLE';

	
	const LINK_INSTAGRAM = 'config_social_network.LINK_INSTAGRAM';

	
	const LINK_PINTEREST = 'config_social_network.LINK_PINTEREST';

	
	const LINK_YOUTUBE = 'config_social_network.LINK_YOUTUBE';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'LinkFacebook', 'LinkGoogle', 'LinkInstagram', 'LinkPinterest', 'LinkYoutube', ),
		BasePeer::TYPE_COLNAME => array (ConfigSocialNetworkPeer::ID, ConfigSocialNetworkPeer::PARTNER_ID, ConfigSocialNetworkPeer::LINK_FACEBOOK, ConfigSocialNetworkPeer::LINK_GOOGLE, ConfigSocialNetworkPeer::LINK_INSTAGRAM, ConfigSocialNetworkPeer::LINK_PINTEREST, ConfigSocialNetworkPeer::LINK_YOUTUBE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'link_facebook', 'link_google', 'link_instagram', 'link_pinterest', 'link_youtube', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'LinkFacebook' => 2, 'LinkGoogle' => 3, 'LinkInstagram' => 4, 'LinkPinterest' => 5, 'LinkYoutube' => 6, ),
		BasePeer::TYPE_COLNAME => array (ConfigSocialNetworkPeer::ID => 0, ConfigSocialNetworkPeer::PARTNER_ID => 1, ConfigSocialNetworkPeer::LINK_FACEBOOK => 2, ConfigSocialNetworkPeer::LINK_GOOGLE => 3, ConfigSocialNetworkPeer::LINK_INSTAGRAM => 4, ConfigSocialNetworkPeer::LINK_PINTEREST => 5, ConfigSocialNetworkPeer::LINK_YOUTUBE => 6, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'link_facebook' => 2, 'link_google' => 3, 'link_instagram' => 4, 'link_pinterest' => 5, 'link_youtube' => 6, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.ConfigSocialNetworkMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = ConfigSocialNetworkPeer::getTableMap();
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
		return str_replace(ConfigSocialNetworkPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::ID);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::PARTNER_ID);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::LINK_FACEBOOK);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::LINK_GOOGLE);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::LINK_INSTAGRAM);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::LINK_PINTEREST);

		$criteria->addSelectColumn(ConfigSocialNetworkPeer::LINK_YOUTUBE);

	}

	const COUNT = 'COUNT(config_social_network.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT config_social_network.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = ConfigSocialNetworkPeer::doSelectRS($criteria, $con);
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
		$objects = ConfigSocialNetworkPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return ConfigSocialNetworkPeer::populateObjects(ConfigSocialNetworkPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			ConfigSocialNetworkPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = ConfigSocialNetworkPeer::getOMClass();
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
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ConfigSocialNetworkPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = ConfigSocialNetworkPeer::doSelectRS($criteria, $con);
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

		ConfigSocialNetworkPeer::addSelectColumns($c);
		$startcol = (ConfigSocialNetworkPeer::NUM_COLUMNS - ConfigSocialNetworkPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(ConfigSocialNetworkPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ConfigSocialNetworkPeer::getOMClass();

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
										$temp_obj2->addConfigSocialNetwork($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initConfigSocialNetworks();
				$obj2->addConfigSocialNetwork($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(ConfigSocialNetworkPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(ConfigSocialNetworkPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = ConfigSocialNetworkPeer::doSelectRS($criteria, $con);
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

		ConfigSocialNetworkPeer::addSelectColumns($c);
		$startcol2 = (ConfigSocialNetworkPeer::NUM_COLUMNS - ConfigSocialNetworkPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		$c->addJoin(ConfigSocialNetworkPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = ConfigSocialNetworkPeer::getOMClass();


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
					$temp_obj2->addConfigSocialNetwork($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initConfigSocialNetworks();
				$obj2->addConfigSocialNetwork($obj1);
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
		return ConfigSocialNetworkPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(ConfigSocialNetworkPeer::ID); 

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
			$comparison = $criteria->getComparison(ConfigSocialNetworkPeer::ID);
			$selectCriteria->add(ConfigSocialNetworkPeer::ID, $criteria->remove(ConfigSocialNetworkPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(ConfigSocialNetworkPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(ConfigSocialNetworkPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof ConfigSocialNetwork) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(ConfigSocialNetworkPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(ConfigSocialNetwork $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(ConfigSocialNetworkPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(ConfigSocialNetworkPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(ConfigSocialNetworkPeer::DATABASE_NAME, ConfigSocialNetworkPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = ConfigSocialNetworkPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(ConfigSocialNetworkPeer::DATABASE_NAME);
	
			$criteria->add(ConfigSocialNetworkPeer::ID, $pk);
	

			$v = ConfigSocialNetworkPeer::doSelect($criteria, $con);
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
			$criteria->add(ConfigSocialNetworkPeer::ID, $pks, Criteria::IN);
			$objs = ConfigSocialNetworkPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseConfigSocialNetworkPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.ConfigSocialNetworkMapBuilder');
}
