<?php



class TourDetailMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.TourDetailMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('tour_detail');
		$tMap->setPhpName('TourDetail');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addColumn('ENABLE', 'Enable', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addForeignKey('TOUR_TYPE_ID', 'TourTypeId', 'int', CreoleTypes::INTEGER, 'tour_type', 'ID', false, null);

		$tMap->addForeignKey('HOME_DIEM_DEN_ITEM_ID', 'HomeDiemDenItemId', 'int', CreoleTypes::INTEGER, 'home_diem_den_item', 'ID', false, null);

		$tMap->addColumn('AREA_ID', 'AreaId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('REGION_ID', 'RegionId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('CITY_ID', 'CityId', 'int', CreoleTypes::INTEGER, 'city', 'ID', false, null);

		$tMap->addForeignKey('TIME_TYPE_ID', 'TimeTypeId', 'int', CreoleTypes::INTEGER, 'tour_time_type', 'ID', false, null);

		$tMap->addForeignKey('TIME_CATEGORY_DAY_ID', 'TimeCategoryDayId', 'int', CreoleTypes::INTEGER, 'tour_time_category_day', 'ID', false, null);

		$tMap->addForeignKey('TYPE_PRICING_ID', 'TypePricingId', 'int', CreoleTypes::INTEGER, 'type_pricing', 'ID', false, null);

		$tMap->addForeignKey('TYPE_PRICING_SERVICE_ID', 'TypePricingServiceId', 'int', CreoleTypes::INTEGER, 'type_pricing_service', 'ID', false, null);

		$tMap->addColumn('START', 'Start', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('END', 'End', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('COO_START', 'CooStart', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LAT_START', 'LatStart', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LNG_START', 'LngStart', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('COO_END', 'CooEnd', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('LAT_END', 'LatEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('LNG_END', 'LngEnd', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DETAIL', 'Detail', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_START', 'DateStart', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('DATE_END', 'DateEnd', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('HOUR_START', 'HourStart', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HOUR_DAY', 'HourDay', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('HOUR_WEEK', 'HourWeek', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('DAY_IN_WEEK', 'DayInWeek', 'string', CreoleTypes::VARCHAR, false, 50);

		$tMap->addColumn('PRICE', 'Price', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('PRICE_BABY', 'PriceBaby', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('PRICE_KID', 'PriceKid', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addForeignKey('PAYMENT_TYPE_ID', 'PaymentTypeId', 'int', CreoleTypes::INTEGER, 'payment_type', 'ID', false, null);

		$tMap->addColumn('SECURITY_DEPOSIT', 'SecurityDeposit', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SUM_NUMBER_SEAT', 'SumNumberSeat', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NUMBER_SEAT_MIN', 'NumberSeatMin', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NUMBER_SEAT', 'NumberSeat', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NUMBER_SEAT_BOOKING', 'NumberSeatBooking', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ALLOW_BOOKING_FAST', 'AllowBookingFast', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('NOTE', 'Note', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('UTILITIES', 'Utilities', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SORTING', 'Sorting', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ACTIVITIES', 'Activities', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TOUR_OPTION_GENDER', 'TourOptionGender', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TOUR_OBJECT_FIT', 'TourObjectFit', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('ENABLED', 'Enabled', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('PRIORITY', 'Priority', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('POLICY_PRICE', 'PolicyPrice', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('POLICY_TICKET', 'PolicyTicket', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('SUCCESS_CREATED', 'SuccessCreated', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TOUR_FEATURED', 'TourFeatured', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TOUR_FAVOURITE', 'TourFavourite', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TOUR_WEEKEND', 'TourWeekend', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('ON_HOMEPAGE', 'OnHomepage', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TITLE', 'Title', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION', 'Description', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TITLE_SEO', 'TitleSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('DESCRIPTION_SEO', 'DescriptionSeo', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('IMG_SEO', 'ImgSeo', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('KEYWORD', 'Keyword', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 