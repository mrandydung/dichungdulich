<?php


abstract class BaseBookingTourPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'booking_tour';

	
	const CLASS_DEFAULT = 'lib.model.BookingTour';

	
	const NUM_COLUMNS = 21;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'booking_tour.ID';

	
	const PARTNER_ID = 'booking_tour.PARTNER_ID';

	
	const USER_ID_SELL = 'booking_tour.USER_ID_SELL';

	
	const USER_ID_BUY = 'booking_tour.USER_ID_BUY';

	
	const TOUR_DETAIL_ID = 'booking_tour.TOUR_DETAIL_ID';

	
	const CODE_TRANSACTION = 'booking_tour.CODE_TRANSACTION';

	
	const PAYMENT_BOOKING_TYPE_ID = 'booking_tour.PAYMENT_BOOKING_TYPE_ID';

	
	const PRICE = 'booking_tour.PRICE';

	
	const PRICE_SECURITY_DEPOSIT = 'booking_tour.PRICE_SECURITY_DEPOSIT';

	
	const NAME = 'booking_tour.NAME';

	
	const PHONE_NUMBER = 'booking_tour.PHONE_NUMBER';

	
	const NOTE = 'booking_tour.NOTE';

	
	const TICKET = 'booking_tour.TICKET';

	
	const DATE_START_TOUR = 'booking_tour.DATE_START_TOUR';

	
	const NUMBER_ADULT = 'booking_tour.NUMBER_ADULT';

	
	const NUMBER_KID = 'booking_tour.NUMBER_KID';

	
	const NUMBER_BABY = 'booking_tour.NUMBER_BABY';

	
	const TRANSACTION_STATUS_ID = 'booking_tour.TRANSACTION_STATUS_ID';

	
	const BOOKING_STATUS_ID = 'booking_tour.BOOKING_STATUS_ID';

	
	const CREATED_AT = 'booking_tour.CREATED_AT';

	
	const UPDATED_AT = 'booking_tour.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'UserIdSell', 'UserIdBuy', 'TourDetailId', 'CodeTransaction', 'PaymentBookingTypeId', 'Price', 'PriceSecurityDeposit', 'Name', 'PhoneNumber', 'Note', 'Ticket', 'DateStartTour', 'NumberAdult', 'NumberKid', 'NumberBaby', 'TransactionStatusId', 'BookingStatusId', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (BookingTourPeer::ID, BookingTourPeer::PARTNER_ID, BookingTourPeer::USER_ID_SELL, BookingTourPeer::USER_ID_BUY, BookingTourPeer::TOUR_DETAIL_ID, BookingTourPeer::CODE_TRANSACTION, BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, BookingTourPeer::PRICE, BookingTourPeer::PRICE_SECURITY_DEPOSIT, BookingTourPeer::NAME, BookingTourPeer::PHONE_NUMBER, BookingTourPeer::NOTE, BookingTourPeer::TICKET, BookingTourPeer::DATE_START_TOUR, BookingTourPeer::NUMBER_ADULT, BookingTourPeer::NUMBER_KID, BookingTourPeer::NUMBER_BABY, BookingTourPeer::TRANSACTION_STATUS_ID, BookingTourPeer::BOOKING_STATUS_ID, BookingTourPeer::CREATED_AT, BookingTourPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'user_id_sell', 'user_id_buy', 'tour_detail_id', 'code_transaction', 'payment_booking_type_id', 'price', 'price_security_deposit', 'name', 'phone_number', 'note', 'ticket', 'date_start_tour', 'number_adult', 'number_kid', 'number_baby', 'transaction_status_id', 'booking_status_id', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'UserIdSell' => 2, 'UserIdBuy' => 3, 'TourDetailId' => 4, 'CodeTransaction' => 5, 'PaymentBookingTypeId' => 6, 'Price' => 7, 'PriceSecurityDeposit' => 8, 'Name' => 9, 'PhoneNumber' => 10, 'Note' => 11, 'Ticket' => 12, 'DateStartTour' => 13, 'NumberAdult' => 14, 'NumberKid' => 15, 'NumberBaby' => 16, 'TransactionStatusId' => 17, 'BookingStatusId' => 18, 'CreatedAt' => 19, 'UpdatedAt' => 20, ),
		BasePeer::TYPE_COLNAME => array (BookingTourPeer::ID => 0, BookingTourPeer::PARTNER_ID => 1, BookingTourPeer::USER_ID_SELL => 2, BookingTourPeer::USER_ID_BUY => 3, BookingTourPeer::TOUR_DETAIL_ID => 4, BookingTourPeer::CODE_TRANSACTION => 5, BookingTourPeer::PAYMENT_BOOKING_TYPE_ID => 6, BookingTourPeer::PRICE => 7, BookingTourPeer::PRICE_SECURITY_DEPOSIT => 8, BookingTourPeer::NAME => 9, BookingTourPeer::PHONE_NUMBER => 10, BookingTourPeer::NOTE => 11, BookingTourPeer::TICKET => 12, BookingTourPeer::DATE_START_TOUR => 13, BookingTourPeer::NUMBER_ADULT => 14, BookingTourPeer::NUMBER_KID => 15, BookingTourPeer::NUMBER_BABY => 16, BookingTourPeer::TRANSACTION_STATUS_ID => 17, BookingTourPeer::BOOKING_STATUS_ID => 18, BookingTourPeer::CREATED_AT => 19, BookingTourPeer::UPDATED_AT => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'user_id_sell' => 2, 'user_id_buy' => 3, 'tour_detail_id' => 4, 'code_transaction' => 5, 'payment_booking_type_id' => 6, 'price' => 7, 'price_security_deposit' => 8, 'name' => 9, 'phone_number' => 10, 'note' => 11, 'ticket' => 12, 'date_start_tour' => 13, 'number_adult' => 14, 'number_kid' => 15, 'number_baby' => 16, 'transaction_status_id' => 17, 'booking_status_id' => 18, 'created_at' => 19, 'updated_at' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.BookingTourMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = BookingTourPeer::getTableMap();
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
		return str_replace(BookingTourPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(BookingTourPeer::ID);

		$criteria->addSelectColumn(BookingTourPeer::PARTNER_ID);

		$criteria->addSelectColumn(BookingTourPeer::USER_ID_SELL);

		$criteria->addSelectColumn(BookingTourPeer::USER_ID_BUY);

		$criteria->addSelectColumn(BookingTourPeer::TOUR_DETAIL_ID);

		$criteria->addSelectColumn(BookingTourPeer::CODE_TRANSACTION);

		$criteria->addSelectColumn(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID);

		$criteria->addSelectColumn(BookingTourPeer::PRICE);

		$criteria->addSelectColumn(BookingTourPeer::PRICE_SECURITY_DEPOSIT);

		$criteria->addSelectColumn(BookingTourPeer::NAME);

		$criteria->addSelectColumn(BookingTourPeer::PHONE_NUMBER);

		$criteria->addSelectColumn(BookingTourPeer::NOTE);

		$criteria->addSelectColumn(BookingTourPeer::TICKET);

		$criteria->addSelectColumn(BookingTourPeer::DATE_START_TOUR);

		$criteria->addSelectColumn(BookingTourPeer::NUMBER_ADULT);

		$criteria->addSelectColumn(BookingTourPeer::NUMBER_KID);

		$criteria->addSelectColumn(BookingTourPeer::NUMBER_BABY);

		$criteria->addSelectColumn(BookingTourPeer::TRANSACTION_STATUS_ID);

		$criteria->addSelectColumn(BookingTourPeer::BOOKING_STATUS_ID);

		$criteria->addSelectColumn(BookingTourPeer::CREATED_AT);

		$criteria->addSelectColumn(BookingTourPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(booking_tour.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT booking_tour.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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
		$objects = BookingTourPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return BookingTourPeer::populateObjects(BookingTourPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			BookingTourPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = BookingTourPeer::getOMClass();
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinPaymentBookingType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTransactionStatus(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinBookingStatus(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
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

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
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

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourDetailPeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinPaymentBookingType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PaymentBookingTypePeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PaymentBookingTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTransactionStatus(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TransactionStatusPeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TransactionStatusPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinBookingStatus(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		BookingStatusPeer::addSelectColumns($c);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = BookingStatusPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getBookingStatus(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addBookingTour($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourDetailPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PaymentBookingTypePeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TransactionStatusPeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();


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
					$temp_obj2->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
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
					$temp_obj3->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}


					
			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourDetail(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}


					
			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}


					
			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
			}


					
			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7 = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getBookingStatus(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addBookingTour($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj7->initBookingTours();
				$obj7->addBookingTour($obj1);
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptPaymentBookingType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTransactionStatus(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptBookingStatus(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(BookingTourPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(BookingTourPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$criteria->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$criteria->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$criteria->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$rs = BookingTourPeer::doSelectRS($criteria, $con);
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

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourDetailPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + PaymentBookingTypePeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + TransactionStatusPeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
			}

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourDetail(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getBookingStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
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

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourDetailPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + PaymentBookingTypePeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + TransactionStatusPeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
			}

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourDetail(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getBookingStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
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

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + PaymentBookingTypePeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + TransactionStatusPeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
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
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getBookingStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptPaymentBookingType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourDetailPeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + TransactionStatusPeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
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
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourDetail(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getBookingStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTransactionStatus(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourDetailPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PaymentBookingTypePeer::NUM_COLUMNS;

		BookingStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + BookingStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::BOOKING_STATUS_ID, BookingStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
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
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourDetail(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = BookingStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getBookingStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptBookingStatus(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		BookingTourPeer::addSelectColumns($c);
		$startcol2 = (BookingTourPeer::NUM_COLUMNS - BookingTourPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourDetailPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourDetailPeer::NUM_COLUMNS;

		PaymentBookingTypePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PaymentBookingTypePeer::NUM_COLUMNS;

		TransactionStatusPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TransactionStatusPeer::NUM_COLUMNS;

		$c->addJoin(BookingTourPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(BookingTourPeer::USER_ID_SELL, DichungUserPeer::ID);

		$c->addJoin(BookingTourPeer::TOUR_DETAIL_ID, TourDetailPeer::ID);

		$c->addJoin(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, PaymentBookingTypePeer::ID);

		$c->addJoin(BookingTourPeer::TRANSACTION_STATUS_ID, TransactionStatusPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = BookingTourPeer::getOMClass();

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
					$temp_obj2->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initBookingTours();
				$obj2->addBookingTour($obj1);
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
					$temp_obj3->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initBookingTours();
				$obj3->addBookingTour($obj1);
			}

			$omClass = TourDetailPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourDetail(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initBookingTours();
				$obj4->addBookingTour($obj1);
			}

			$omClass = PaymentBookingTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPaymentBookingType(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initBookingTours();
				$obj5->addBookingTour($obj1);
			}

			$omClass = TransactionStatusPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTransactionStatus(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addBookingTour($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initBookingTours();
				$obj6->addBookingTour($obj1);
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
		return BookingTourPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(BookingTourPeer::ID); 

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
			$comparison = $criteria->getComparison(BookingTourPeer::ID);
			$selectCriteria->add(BookingTourPeer::ID, $criteria->remove(BookingTourPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(BookingTourPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(BookingTourPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof BookingTour) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(BookingTourPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(BookingTour $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(BookingTourPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(BookingTourPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(BookingTourPeer::DATABASE_NAME, BookingTourPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = BookingTourPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(BookingTourPeer::DATABASE_NAME);
	
			$criteria->add(BookingTourPeer::ID, $pk);
	

			$v = BookingTourPeer::doSelect($criteria, $con);
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
			$criteria->add(BookingTourPeer::ID, $pks, Criteria::IN);
			$objs = BookingTourPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseBookingTourPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.BookingTourMapBuilder');
}
