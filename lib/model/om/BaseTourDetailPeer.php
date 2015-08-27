<?php


abstract class BaseTourDetailPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'tour_detail';

	
	const CLASS_DEFAULT = 'lib.model.TourDetail';

	
	const NUM_COLUMNS = 61;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'tour_detail.ID';

	
	const PARTNER_ID = 'tour_detail.PARTNER_ID';

	
	const ENABLE = 'tour_detail.ENABLE';

	
	const USER_ID = 'tour_detail.USER_ID';

	
	const TOUR_TYPE_ID = 'tour_detail.TOUR_TYPE_ID';

	
	const HOME_DIEM_DEN_ITEM_ID = 'tour_detail.HOME_DIEM_DEN_ITEM_ID';

	
	const AREA_ID = 'tour_detail.AREA_ID';

	
	const REGION_ID = 'tour_detail.REGION_ID';

	
	const CITY_ID = 'tour_detail.CITY_ID';

	
	const TIME_TYPE_ID = 'tour_detail.TIME_TYPE_ID';

	
	const TIME_CATEGORY_DAY_ID = 'tour_detail.TIME_CATEGORY_DAY_ID';

	
	const TYPE_PRICING_ID = 'tour_detail.TYPE_PRICING_ID';

	
	const TYPE_PRICING_SERVICE_ID = 'tour_detail.TYPE_PRICING_SERVICE_ID';

	
	const START = 'tour_detail.START';

	
	const END = 'tour_detail.END';

	
	const COO_START = 'tour_detail.COO_START';

	
	const LAT_START = 'tour_detail.LAT_START';

	
	const LNG_START = 'tour_detail.LNG_START';

	
	const COO_END = 'tour_detail.COO_END';

	
	const LAT_END = 'tour_detail.LAT_END';

	
	const LNG_END = 'tour_detail.LNG_END';

	
	const DETAIL = 'tour_detail.DETAIL';

	
	const DATE_START = 'tour_detail.DATE_START';

	
	const DATE_END = 'tour_detail.DATE_END';

	
	const HOUR_START = 'tour_detail.HOUR_START';

	
	const HOUR_DAY = 'tour_detail.HOUR_DAY';

	
	const HOUR_WEEK = 'tour_detail.HOUR_WEEK';

	
	const DAY_IN_WEEK = 'tour_detail.DAY_IN_WEEK';

	
	const PRICE = 'tour_detail.PRICE';

	
	const PRICE_BABY = 'tour_detail.PRICE_BABY';

	
	const PRICE_KID = 'tour_detail.PRICE_KID';

	
	const PAYMENT_TYPE_ID = 'tour_detail.PAYMENT_TYPE_ID';

	
	const SECURITY_DEPOSIT = 'tour_detail.SECURITY_DEPOSIT';

	
	const SUM_NUMBER_SEAT = 'tour_detail.SUM_NUMBER_SEAT';

	
	const NUMBER_SEAT_MIN = 'tour_detail.NUMBER_SEAT_MIN';

	
	const NUMBER_SEAT = 'tour_detail.NUMBER_SEAT';

	
	const NUMBER_SEAT_BOOKING = 'tour_detail.NUMBER_SEAT_BOOKING';

	
	const ALLOW_BOOKING_FAST = 'tour_detail.ALLOW_BOOKING_FAST';

	
	const NOTE = 'tour_detail.NOTE';

	
	const UTILITIES = 'tour_detail.UTILITIES';

	
	const SORTING = 'tour_detail.SORTING';

	
	const ACTIVITIES = 'tour_detail.ACTIVITIES';

	
	const TOUR_OPTION_GENDER = 'tour_detail.TOUR_OPTION_GENDER';

	
	const TOUR_OBJECT_FIT = 'tour_detail.TOUR_OBJECT_FIT';

	
	const ENABLED = 'tour_detail.ENABLED';

	
	const PRIORITY = 'tour_detail.PRIORITY';

	
	const POLICY_PRICE = 'tour_detail.POLICY_PRICE';

	
	const POLICY_TICKET = 'tour_detail.POLICY_TICKET';

	
	const SUCCESS_CREATED = 'tour_detail.SUCCESS_CREATED';

	
	const TOUR_FEATURED = 'tour_detail.TOUR_FEATURED';

	
	const TOUR_FAVOURITE = 'tour_detail.TOUR_FAVOURITE';

	
	const TOUR_WEEKEND = 'tour_detail.TOUR_WEEKEND';

	
	const ON_HOMEPAGE = 'tour_detail.ON_HOMEPAGE';

	
	const TITLE = 'tour_detail.TITLE';

	
	const DESCRIPTION = 'tour_detail.DESCRIPTION';

	
	const TITLE_SEO = 'tour_detail.TITLE_SEO';

	
	const DESCRIPTION_SEO = 'tour_detail.DESCRIPTION_SEO';

	
	const IMG_SEO = 'tour_detail.IMG_SEO';

	
	const KEYWORD = 'tour_detail.KEYWORD';

	
	const CREATED_AT = 'tour_detail.CREATED_AT';

	
	const UPDATED_AT = 'tour_detail.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'Enable', 'UserId', 'TourTypeId', 'HomeDiemDenItemId', 'AreaId', 'RegionId', 'CityId', 'TimeTypeId', 'TimeCategoryDayId', 'TypePricingId', 'TypePricingServiceId', 'Start', 'End', 'CooStart', 'LatStart', 'LngStart', 'CooEnd', 'LatEnd', 'LngEnd', 'Detail', 'DateStart', 'DateEnd', 'HourStart', 'HourDay', 'HourWeek', 'DayInWeek', 'Price', 'PriceBaby', 'PriceKid', 'PaymentTypeId', 'SecurityDeposit', 'SumNumberSeat', 'NumberSeatMin', 'NumberSeat', 'NumberSeatBooking', 'AllowBookingFast', 'Note', 'Utilities', 'Sorting', 'Activities', 'TourOptionGender', 'TourObjectFit', 'Enabled', 'Priority', 'PolicyPrice', 'PolicyTicket', 'SuccessCreated', 'TourFeatured', 'TourFavourite', 'TourWeekend', 'OnHomepage', 'Title', 'Description', 'TitleSeo', 'DescriptionSeo', 'ImgSeo', 'Keyword', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (TourDetailPeer::ID, TourDetailPeer::PARTNER_ID, TourDetailPeer::ENABLE, TourDetailPeer::USER_ID, TourDetailPeer::TOUR_TYPE_ID, TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, TourDetailPeer::AREA_ID, TourDetailPeer::REGION_ID, TourDetailPeer::CITY_ID, TourDetailPeer::TIME_TYPE_ID, TourDetailPeer::TIME_CATEGORY_DAY_ID, TourDetailPeer::TYPE_PRICING_ID, TourDetailPeer::TYPE_PRICING_SERVICE_ID, TourDetailPeer::START, TourDetailPeer::END, TourDetailPeer::COO_START, TourDetailPeer::LAT_START, TourDetailPeer::LNG_START, TourDetailPeer::COO_END, TourDetailPeer::LAT_END, TourDetailPeer::LNG_END, TourDetailPeer::DETAIL, TourDetailPeer::DATE_START, TourDetailPeer::DATE_END, TourDetailPeer::HOUR_START, TourDetailPeer::HOUR_DAY, TourDetailPeer::HOUR_WEEK, TourDetailPeer::DAY_IN_WEEK, TourDetailPeer::PRICE, TourDetailPeer::PRICE_BABY, TourDetailPeer::PRICE_KID, TourDetailPeer::PAYMENT_TYPE_ID, TourDetailPeer::SECURITY_DEPOSIT, TourDetailPeer::SUM_NUMBER_SEAT, TourDetailPeer::NUMBER_SEAT_MIN, TourDetailPeer::NUMBER_SEAT, TourDetailPeer::NUMBER_SEAT_BOOKING, TourDetailPeer::ALLOW_BOOKING_FAST, TourDetailPeer::NOTE, TourDetailPeer::UTILITIES, TourDetailPeer::SORTING, TourDetailPeer::ACTIVITIES, TourDetailPeer::TOUR_OPTION_GENDER, TourDetailPeer::TOUR_OBJECT_FIT, TourDetailPeer::ENABLED, TourDetailPeer::PRIORITY, TourDetailPeer::POLICY_PRICE, TourDetailPeer::POLICY_TICKET, TourDetailPeer::SUCCESS_CREATED, TourDetailPeer::TOUR_FEATURED, TourDetailPeer::TOUR_FAVOURITE, TourDetailPeer::TOUR_WEEKEND, TourDetailPeer::ON_HOMEPAGE, TourDetailPeer::TITLE, TourDetailPeer::DESCRIPTION, TourDetailPeer::TITLE_SEO, TourDetailPeer::DESCRIPTION_SEO, TourDetailPeer::IMG_SEO, TourDetailPeer::KEYWORD, TourDetailPeer::CREATED_AT, TourDetailPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'enable', 'user_id', 'tour_type_id', 'home_diem_den_item_id', 'area_id', 'region_id', 'city_id', 'time_type_id', 'time_category_day_id', 'type_pricing_id', 'type_pricing_service_id', 'start', 'end', 'coo_start', 'lat_start', 'lng_start', 'coo_end', 'lat_end', 'lng_end', 'detail', 'date_start', 'date_end', 'hour_start', 'hour_day', 'hour_week', 'day_in_week', 'price', 'price_baby', 'price_kid', 'payment_type_id', 'security_deposit', 'sum_number_seat', 'number_seat_min', 'number_seat', 'number_seat_booking', 'allow_booking_fast', 'note', 'utilities', 'sorting', 'activities', 'tour_option_gender', 'tour_object_fit', 'enabled', 'priority', 'policy_price', 'policy_ticket', 'success_created', 'tour_featured', 'tour_favourite', 'tour_weekend', 'on_homepage', 'title', 'description', 'title_seo', 'description_seo', 'img_seo', 'keyword', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'Enable' => 2, 'UserId' => 3, 'TourTypeId' => 4, 'HomeDiemDenItemId' => 5, 'AreaId' => 6, 'RegionId' => 7, 'CityId' => 8, 'TimeTypeId' => 9, 'TimeCategoryDayId' => 10, 'TypePricingId' => 11, 'TypePricingServiceId' => 12, 'Start' => 13, 'End' => 14, 'CooStart' => 15, 'LatStart' => 16, 'LngStart' => 17, 'CooEnd' => 18, 'LatEnd' => 19, 'LngEnd' => 20, 'Detail' => 21, 'DateStart' => 22, 'DateEnd' => 23, 'HourStart' => 24, 'HourDay' => 25, 'HourWeek' => 26, 'DayInWeek' => 27, 'Price' => 28, 'PriceBaby' => 29, 'PriceKid' => 30, 'PaymentTypeId' => 31, 'SecurityDeposit' => 32, 'SumNumberSeat' => 33, 'NumberSeatMin' => 34, 'NumberSeat' => 35, 'NumberSeatBooking' => 36, 'AllowBookingFast' => 37, 'Note' => 38, 'Utilities' => 39, 'Sorting' => 40, 'Activities' => 41, 'TourOptionGender' => 42, 'TourObjectFit' => 43, 'Enabled' => 44, 'Priority' => 45, 'PolicyPrice' => 46, 'PolicyTicket' => 47, 'SuccessCreated' => 48, 'TourFeatured' => 49, 'TourFavourite' => 50, 'TourWeekend' => 51, 'OnHomepage' => 52, 'Title' => 53, 'Description' => 54, 'TitleSeo' => 55, 'DescriptionSeo' => 56, 'ImgSeo' => 57, 'Keyword' => 58, 'CreatedAt' => 59, 'UpdatedAt' => 60, ),
		BasePeer::TYPE_COLNAME => array (TourDetailPeer::ID => 0, TourDetailPeer::PARTNER_ID => 1, TourDetailPeer::ENABLE => 2, TourDetailPeer::USER_ID => 3, TourDetailPeer::TOUR_TYPE_ID => 4, TourDetailPeer::HOME_DIEM_DEN_ITEM_ID => 5, TourDetailPeer::AREA_ID => 6, TourDetailPeer::REGION_ID => 7, TourDetailPeer::CITY_ID => 8, TourDetailPeer::TIME_TYPE_ID => 9, TourDetailPeer::TIME_CATEGORY_DAY_ID => 10, TourDetailPeer::TYPE_PRICING_ID => 11, TourDetailPeer::TYPE_PRICING_SERVICE_ID => 12, TourDetailPeer::START => 13, TourDetailPeer::END => 14, TourDetailPeer::COO_START => 15, TourDetailPeer::LAT_START => 16, TourDetailPeer::LNG_START => 17, TourDetailPeer::COO_END => 18, TourDetailPeer::LAT_END => 19, TourDetailPeer::LNG_END => 20, TourDetailPeer::DETAIL => 21, TourDetailPeer::DATE_START => 22, TourDetailPeer::DATE_END => 23, TourDetailPeer::HOUR_START => 24, TourDetailPeer::HOUR_DAY => 25, TourDetailPeer::HOUR_WEEK => 26, TourDetailPeer::DAY_IN_WEEK => 27, TourDetailPeer::PRICE => 28, TourDetailPeer::PRICE_BABY => 29, TourDetailPeer::PRICE_KID => 30, TourDetailPeer::PAYMENT_TYPE_ID => 31, TourDetailPeer::SECURITY_DEPOSIT => 32, TourDetailPeer::SUM_NUMBER_SEAT => 33, TourDetailPeer::NUMBER_SEAT_MIN => 34, TourDetailPeer::NUMBER_SEAT => 35, TourDetailPeer::NUMBER_SEAT_BOOKING => 36, TourDetailPeer::ALLOW_BOOKING_FAST => 37, TourDetailPeer::NOTE => 38, TourDetailPeer::UTILITIES => 39, TourDetailPeer::SORTING => 40, TourDetailPeer::ACTIVITIES => 41, TourDetailPeer::TOUR_OPTION_GENDER => 42, TourDetailPeer::TOUR_OBJECT_FIT => 43, TourDetailPeer::ENABLED => 44, TourDetailPeer::PRIORITY => 45, TourDetailPeer::POLICY_PRICE => 46, TourDetailPeer::POLICY_TICKET => 47, TourDetailPeer::SUCCESS_CREATED => 48, TourDetailPeer::TOUR_FEATURED => 49, TourDetailPeer::TOUR_FAVOURITE => 50, TourDetailPeer::TOUR_WEEKEND => 51, TourDetailPeer::ON_HOMEPAGE => 52, TourDetailPeer::TITLE => 53, TourDetailPeer::DESCRIPTION => 54, TourDetailPeer::TITLE_SEO => 55, TourDetailPeer::DESCRIPTION_SEO => 56, TourDetailPeer::IMG_SEO => 57, TourDetailPeer::KEYWORD => 58, TourDetailPeer::CREATED_AT => 59, TourDetailPeer::UPDATED_AT => 60, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'enable' => 2, 'user_id' => 3, 'tour_type_id' => 4, 'home_diem_den_item_id' => 5, 'area_id' => 6, 'region_id' => 7, 'city_id' => 8, 'time_type_id' => 9, 'time_category_day_id' => 10, 'type_pricing_id' => 11, 'type_pricing_service_id' => 12, 'start' => 13, 'end' => 14, 'coo_start' => 15, 'lat_start' => 16, 'lng_start' => 17, 'coo_end' => 18, 'lat_end' => 19, 'lng_end' => 20, 'detail' => 21, 'date_start' => 22, 'date_end' => 23, 'hour_start' => 24, 'hour_day' => 25, 'hour_week' => 26, 'day_in_week' => 27, 'price' => 28, 'price_baby' => 29, 'price_kid' => 30, 'payment_type_id' => 31, 'security_deposit' => 32, 'sum_number_seat' => 33, 'number_seat_min' => 34, 'number_seat' => 35, 'number_seat_booking' => 36, 'allow_booking_fast' => 37, 'note' => 38, 'utilities' => 39, 'sorting' => 40, 'activities' => 41, 'tour_option_gender' => 42, 'tour_object_fit' => 43, 'enabled' => 44, 'priority' => 45, 'policy_price' => 46, 'policy_ticket' => 47, 'success_created' => 48, 'tour_featured' => 49, 'tour_favourite' => 50, 'tour_weekend' => 51, 'on_homepage' => 52, 'title' => 53, 'description' => 54, 'title_seo' => 55, 'description_seo' => 56, 'img_seo' => 57, 'keyword' => 58, 'created_at' => 59, 'updated_at' => 60, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.TourDetailMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = TourDetailPeer::getTableMap();
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
		return str_replace(TourDetailPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(TourDetailPeer::ID);

		$criteria->addSelectColumn(TourDetailPeer::PARTNER_ID);

		$criteria->addSelectColumn(TourDetailPeer::ENABLE);

		$criteria->addSelectColumn(TourDetailPeer::USER_ID);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_TYPE_ID);

		$criteria->addSelectColumn(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID);

		$criteria->addSelectColumn(TourDetailPeer::AREA_ID);

		$criteria->addSelectColumn(TourDetailPeer::REGION_ID);

		$criteria->addSelectColumn(TourDetailPeer::CITY_ID);

		$criteria->addSelectColumn(TourDetailPeer::TIME_TYPE_ID);

		$criteria->addSelectColumn(TourDetailPeer::TIME_CATEGORY_DAY_ID);

		$criteria->addSelectColumn(TourDetailPeer::TYPE_PRICING_ID);

		$criteria->addSelectColumn(TourDetailPeer::TYPE_PRICING_SERVICE_ID);

		$criteria->addSelectColumn(TourDetailPeer::START);

		$criteria->addSelectColumn(TourDetailPeer::END);

		$criteria->addSelectColumn(TourDetailPeer::COO_START);

		$criteria->addSelectColumn(TourDetailPeer::LAT_START);

		$criteria->addSelectColumn(TourDetailPeer::LNG_START);

		$criteria->addSelectColumn(TourDetailPeer::COO_END);

		$criteria->addSelectColumn(TourDetailPeer::LAT_END);

		$criteria->addSelectColumn(TourDetailPeer::LNG_END);

		$criteria->addSelectColumn(TourDetailPeer::DETAIL);

		$criteria->addSelectColumn(TourDetailPeer::DATE_START);

		$criteria->addSelectColumn(TourDetailPeer::DATE_END);

		$criteria->addSelectColumn(TourDetailPeer::HOUR_START);

		$criteria->addSelectColumn(TourDetailPeer::HOUR_DAY);

		$criteria->addSelectColumn(TourDetailPeer::HOUR_WEEK);

		$criteria->addSelectColumn(TourDetailPeer::DAY_IN_WEEK);

		$criteria->addSelectColumn(TourDetailPeer::PRICE);

		$criteria->addSelectColumn(TourDetailPeer::PRICE_BABY);

		$criteria->addSelectColumn(TourDetailPeer::PRICE_KID);

		$criteria->addSelectColumn(TourDetailPeer::PAYMENT_TYPE_ID);

		$criteria->addSelectColumn(TourDetailPeer::SECURITY_DEPOSIT);

		$criteria->addSelectColumn(TourDetailPeer::SUM_NUMBER_SEAT);

		$criteria->addSelectColumn(TourDetailPeer::NUMBER_SEAT_MIN);

		$criteria->addSelectColumn(TourDetailPeer::NUMBER_SEAT);

		$criteria->addSelectColumn(TourDetailPeer::NUMBER_SEAT_BOOKING);

		$criteria->addSelectColumn(TourDetailPeer::ALLOW_BOOKING_FAST);

		$criteria->addSelectColumn(TourDetailPeer::NOTE);

		$criteria->addSelectColumn(TourDetailPeer::UTILITIES);

		$criteria->addSelectColumn(TourDetailPeer::SORTING);

		$criteria->addSelectColumn(TourDetailPeer::ACTIVITIES);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_OPTION_GENDER);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_OBJECT_FIT);

		$criteria->addSelectColumn(TourDetailPeer::ENABLED);

		$criteria->addSelectColumn(TourDetailPeer::PRIORITY);

		$criteria->addSelectColumn(TourDetailPeer::POLICY_PRICE);

		$criteria->addSelectColumn(TourDetailPeer::POLICY_TICKET);

		$criteria->addSelectColumn(TourDetailPeer::SUCCESS_CREATED);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_FEATURED);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_FAVOURITE);

		$criteria->addSelectColumn(TourDetailPeer::TOUR_WEEKEND);

		$criteria->addSelectColumn(TourDetailPeer::ON_HOMEPAGE);

		$criteria->addSelectColumn(TourDetailPeer::TITLE);

		$criteria->addSelectColumn(TourDetailPeer::DESCRIPTION);

		$criteria->addSelectColumn(TourDetailPeer::TITLE_SEO);

		$criteria->addSelectColumn(TourDetailPeer::DESCRIPTION_SEO);

		$criteria->addSelectColumn(TourDetailPeer::IMG_SEO);

		$criteria->addSelectColumn(TourDetailPeer::KEYWORD);

		$criteria->addSelectColumn(TourDetailPeer::CREATED_AT);

		$criteria->addSelectColumn(TourDetailPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(tour_detail.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT tour_detail.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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
		$objects = TourDetailPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return TourDetailPeer::populateObjects(TourDetailPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			TourDetailPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = TourDetailPeer::getOMClass();
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinHomeDiemDenItem(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourTimeType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTourTimeCategoryDay(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTypePricing(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinTypePricingService(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinPaymentType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
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

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		DichungUserPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourTypePeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinHomeDiemDenItem(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		HomeDiemDenItemPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = HomeDiemDenItemPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
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

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		CityPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourTimeType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourTimeTypePeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourTimeTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourTimeType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTourTimeCategoryDay(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TourTimeCategoryDayPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TourTimeCategoryDayPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTypePricing(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TypePricingPeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypePricingPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTypePricing(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinTypePricingService(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		TypePricingServicePeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = TypePricingServicePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getTypePricingService(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinPaymentType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PaymentTypePeer::addSelectColumns($c);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PaymentTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getPaymentType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addTourDetail($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol12 = $startcol11 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();


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
					$temp_obj2->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}


					
			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}


					
			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}


					
			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}


					
			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7 = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeType(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}


					
			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8 = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}


					
			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9 = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricing(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}


					
			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10 = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getTypePricingService(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}


					
			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj11 = new $cls();
			$obj11->hydrate($rs, $startcol11);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj11 = $temp_obj1->getPaymentType(); 				if ($temp_obj11->getPrimaryKey() === $obj11->getPrimaryKey()) {
					$newObject = false;
					$temp_obj11->addTourDetail($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj11->initTourDetails();
				$obj11->addTourDetail($obj1);
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptHomeDiemDenItem(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourTimeType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTourTimeCategoryDay(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTypePricing(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptTypePricingService(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptPaymentType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(TourDetailPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(TourDetailPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$criteria->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$criteria->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$criteria->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$criteria->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$rs = TourDetailPeer::doSelectRS($criteria, $con);
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

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		DichungUserPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCity(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTourTimeType(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
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

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getTourType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCity(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTourTimeType(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCity(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTourTimeType(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptHomeDiemDenItem(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getCity(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTourTimeType(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
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

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol7 = $startcol6 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getTourTimeType(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourTimeType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTourTimeCategoryDay(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeTypePeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeType(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTypePricing(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTypePricing(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingServicePeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeType(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricingService(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptTypePricingService(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingPeer::NUM_COLUMNS;

		PaymentTypePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + PaymentTypePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::PAYMENT_TYPE_ID, PaymentTypePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeType(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricing(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = PaymentTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getPaymentType(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptPaymentType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		TourDetailPeer::addSelectColumns($c);
		$startcol2 = (TourDetailPeer::NUM_COLUMNS - TourDetailPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		DichungUserPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + DichungUserPeer::NUM_COLUMNS;

		TourTypePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + TourTypePeer::NUM_COLUMNS;

		HomeDiemDenItemPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + HomeDiemDenItemPeer::NUM_COLUMNS;

		CityPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + CityPeer::NUM_COLUMNS;

		TourTimeTypePeer::addSelectColumns($c);
		$startcol8 = $startcol7 + TourTimeTypePeer::NUM_COLUMNS;

		TourTimeCategoryDayPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + TourTimeCategoryDayPeer::NUM_COLUMNS;

		TypePricingPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + TypePricingPeer::NUM_COLUMNS;

		TypePricingServicePeer::addSelectColumns($c);
		$startcol11 = $startcol10 + TypePricingServicePeer::NUM_COLUMNS;

		$c->addJoin(TourDetailPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(TourDetailPeer::USER_ID, DichungUserPeer::ID);

		$c->addJoin(TourDetailPeer::TOUR_TYPE_ID, TourTypePeer::ID);

		$c->addJoin(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, HomeDiemDenItemPeer::ID);

		$c->addJoin(TourDetailPeer::CITY_ID, CityPeer::ID);

		$c->addJoin(TourDetailPeer::TIME_TYPE_ID, TourTimeTypePeer::ID);

		$c->addJoin(TourDetailPeer::TIME_CATEGORY_DAY_ID, TourTimeCategoryDayPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_ID, TypePricingPeer::ID);

		$c->addJoin(TourDetailPeer::TYPE_PRICING_SERVICE_ID, TypePricingServicePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = TourDetailPeer::getOMClass();

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
					$temp_obj2->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initTourDetails();
				$obj2->addTourDetail($obj1);
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
					$temp_obj3->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initTourDetails();
				$obj3->addTourDetail($obj1);
			}

			$omClass = TourTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getTourType(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initTourDetails();
				$obj4->addTourDetail($obj1);
			}

			$omClass = HomeDiemDenItemPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getHomeDiemDenItem(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initTourDetails();
				$obj5->addTourDetail($obj1);
			}

			$omClass = CityPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6  = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getCity(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj6->initTourDetails();
				$obj6->addTourDetail($obj1);
			}

			$omClass = TourTimeTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj7  = new $cls();
			$obj7->hydrate($rs, $startcol7);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj7 = $temp_obj1->getTourTimeType(); 				if ($temp_obj7->getPrimaryKey() === $obj7->getPrimaryKey()) {
					$newObject = false;
					$temp_obj7->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj7->initTourDetails();
				$obj7->addTourDetail($obj1);
			}

			$omClass = TourTimeCategoryDayPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj8  = new $cls();
			$obj8->hydrate($rs, $startcol8);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj8 = $temp_obj1->getTourTimeCategoryDay(); 				if ($temp_obj8->getPrimaryKey() === $obj8->getPrimaryKey()) {
					$newObject = false;
					$temp_obj8->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj8->initTourDetails();
				$obj8->addTourDetail($obj1);
			}

			$omClass = TypePricingPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj9  = new $cls();
			$obj9->hydrate($rs, $startcol9);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj9 = $temp_obj1->getTypePricing(); 				if ($temp_obj9->getPrimaryKey() === $obj9->getPrimaryKey()) {
					$newObject = false;
					$temp_obj9->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj9->initTourDetails();
				$obj9->addTourDetail($obj1);
			}

			$omClass = TypePricingServicePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj10  = new $cls();
			$obj10->hydrate($rs, $startcol10);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj10 = $temp_obj1->getTypePricingService(); 				if ($temp_obj10->getPrimaryKey() === $obj10->getPrimaryKey()) {
					$newObject = false;
					$temp_obj10->addTourDetail($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj10->initTourDetails();
				$obj10->addTourDetail($obj1);
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
		return TourDetailPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(TourDetailPeer::ID); 

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
			$comparison = $criteria->getComparison(TourDetailPeer::ID);
			$selectCriteria->add(TourDetailPeer::ID, $criteria->remove(TourDetailPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(TourDetailPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(TourDetailPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof TourDetail) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(TourDetailPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(TourDetail $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(TourDetailPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(TourDetailPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(TourDetailPeer::DATABASE_NAME, TourDetailPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = TourDetailPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(TourDetailPeer::DATABASE_NAME);
	
			$criteria->add(TourDetailPeer::ID, $pk);
	

			$v = TourDetailPeer::doSelect($criteria, $con);
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
			$criteria->add(TourDetailPeer::ID, $pks, Criteria::IN);
			$objs = TourDetailPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseTourDetailPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.TourDetailMapBuilder');
}
