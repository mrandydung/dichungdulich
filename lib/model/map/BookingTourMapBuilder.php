<?php



class BookingTourMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.BookingTourMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('booking_tour');
		$tMap->setPhpName('BookingTour');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addForeignKey('USER_ID_SELL', 'UserIdSell', 'int', CreoleTypes::INTEGER, 'dichung_user', 'ID', false, null);

		$tMap->addColumn('USER_ID_BUY', 'UserIdBuy', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('TOUR_DETAIL_ID', 'TourDetailId', 'int', CreoleTypes::INTEGER, 'tour_detail', 'ID', false, null);

		$tMap->addColumn('CODE_TRANSACTION', 'CodeTransaction', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addForeignKey('PAYMENT_BOOKING_TYPE_ID', 'PaymentBookingTypeId', 'int', CreoleTypes::INTEGER, 'payment_booking_type', 'ID', false, null);

		$tMap->addColumn('PRICE', 'Price', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('PRICE_SECURITY_DEPOSIT', 'PriceSecurityDeposit', 'double', CreoleTypes::DOUBLE, false, null);

		$tMap->addColumn('NAME', 'Name', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PHONE_NUMBER', 'PhoneNumber', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('NOTE', 'Note', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('TICKET', 'Ticket', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('DATE_START_TOUR', 'DateStartTour', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('NUMBER_ADULT', 'NumberAdult', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NUMBER_KID', 'NumberKid', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('NUMBER_BABY', 'NumberBaby', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('TRANSACTION_STATUS_ID', 'TransactionStatusId', 'int', CreoleTypes::INTEGER, 'transaction_status', 'ID', false, null);

		$tMap->addForeignKey('BOOKING_STATUS_ID', 'BookingStatusId', 'int', CreoleTypes::INTEGER, 'booking_status', 'ID', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 