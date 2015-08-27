<?php



class DichungUserMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.DichungUserMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('dichung_user');
		$tMap->setPhpName('DichungUser');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('PARTNER_ID', 'PartnerId', 'int', CreoleTypes::INTEGER, 'partner', 'ID', false, null);

		$tMap->addForeignKey('USER_TYPE_ID', 'UserTypeId', 'int', CreoleTypes::INTEGER, 'user_type', 'ID', false, null);

		$tMap->addColumn('FULLNAME', 'Fullname', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PASSWORD', 'Password', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('MD5_PASSWORD', 'Md5Password', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('ACTIVE', 'Active', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('LOCKED', 'Locked', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('EMAIL', 'Email', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('PHONE_NUMBER', 'PhoneNumber', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('HOTLINE', 'Hotline', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('WEBSITE', 'Website', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('FAX', 'Fax', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VEHICLE_ID', 'VehicleId', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('VERIFIED_PHONE', 'VerifiedPhone', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('VERIFIED_EMAIL', 'VerifiedEmail', 'boolean', CreoleTypes::BOOLEAN, true, null);

		$tMap->addColumn('ADDRESS', 'Address', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('XANG', 'Xang', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('AWARD_XANG', 'AwardXang', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('ANNOUNCEMENT', 'Announcement', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('GENDER', 'Gender', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('SURVEY', 'Survey', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('AVATAR', 'Avatar', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('CAR_AVATAR', 'CarAvatar', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('ABOUT', 'About', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('SMOKE', 'Smoke', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CAR_NAME', 'CarName', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_MODEL', 'CarModel', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('CAR_YEAR', 'CarYear', 'string', CreoleTypes::VARCHAR, false, 10);

		$tMap->addColumn('CAR_DESCRIPTION', 'CarDescription', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('BANK_NAME', 'BankName', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('BANK_BRANCH', 'BankBranch', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('BANK_CODE', 'BankCode', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('BANK_OWNER', 'BankOwner', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('PAYPAL', 'Paypal', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('MUSIC', 'Music', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('INTEREST', 'Interest', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('WORK', 'Work', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('EDUCATION', 'Education', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('LOCATION', 'Location', 'string', CreoleTypes::VARCHAR, false, 1000);

		$tMap->addColumn('MARRIED', 'Married', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('DOB', 'Dob', 'int', CreoleTypes::DATE, false, null);

		$tMap->addColumn('INVITE_USER', 'InviteUser', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('INVITE_TIME', 'InviteTime', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('DOMAIN', 'Domain', 'string', CreoleTypes::VARCHAR, false, 20);

		$tMap->addColumn('RESPONSIBILITY', 'Responsibility', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('FB_UID', 'FbUid', 'string', CreoleTypes::BIGINT, false, null);

		$tMap->addColumn('FB_USERNAME', 'FbUsername', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addColumn('FB_URL', 'FbUrl', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('FB_SPIC', 'FbSpic', 'string', CreoleTypes::VARCHAR, false, 600);

		$tMap->addColumn('FB_LPIC', 'FbLpic', 'string', CreoleTypes::VARCHAR, false, 600);

		$tMap->addColumn('FB_FRIEND_COUNT', 'FbFriendCount', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('GOOGLE_PLUS_URL', 'GooglePlusUrl', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('ZING_URL', 'ZingUrl', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('SKYPE_URL', 'SkypeUrl', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('YAHOO_URL', 'YahooUrl', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('EMAIL_TOKEN', 'EmailToken', 'string', CreoleTypes::VARCHAR, false, 300);

		$tMap->addColumn('SLUG', 'Slug', 'string', CreoleTypes::VARCHAR, false, 100);

		$tMap->addForeignKey('JOB_ID', 'JobId', 'int', CreoleTypes::INTEGER, 'job', 'ID', false, null);

		$tMap->addForeignKey('OLD_RANGE_ID', 'OldRangeId', 'int', CreoleTypes::INTEGER, 'old_range', 'ID', false, null);

		$tMap->addColumn('RECEIVE_BOOK_REQUIRE_EMAIL', 'ReceiveBookRequireEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_BOOK_REQUIRE_SMS', 'ReceiveBookRequireSms', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_BOOKER_INFO_EMAIL', 'ReceiveBookerInfoEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_BOOKER_INFO_SMS', 'ReceiveBookerInfoSms', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_COMMENT_EMAIL', 'ReceiveCommentEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_COMMENT_SMS', 'ReceiveCommentSms', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_FINISH_EMAIL', 'ReceiveFinishEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_FINISH_SMS', 'ReceiveFinishSms', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_MATCHING_EMAIL', 'ReceiveMatchingEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('RECEIVE_MATCHING_SMS', 'ReceiveMatchingSms', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('CONTACT', 'Contact', 'string', CreoleTypes::LONGVARCHAR, false, null);

		$tMap->addColumn('PUBLIC_EMAIL_PHONE', 'PublicEmailPhone', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('PUBLIC_EMAIL', 'PublicEmail', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('PUBLIC_PHONE', 'PublicPhone', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('IMAGE_VERIFY', 'ImageVerify', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VERIFIED_IMAGE', 'VerifiedImage', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('DRIVE_LICENSE', 'DriveLicense', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('VERIFIED_DRIVE_LICENSE', 'VerifiedDriveLicense', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('TRAFFIC_LAW', 'TrafficLaw', 'boolean', CreoleTypes::BOOLEAN, false, null);

		$tMap->addColumn('POINT', 'Point', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addForeignKey('POINT_LEVEL_ID', 'PointLevelId', 'int', CreoleTypes::INTEGER, 'point_level', 'ID', false, null);

		$tMap->addColumn('OVERALL_SCORE', 'OverallScore', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('AUTHENTICITY', 'Authenticity', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('NETWORK_QUALITY', 'NetworkQuality', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('FINANCIAL_CREDIBILITY', 'FinancialCredibility', 'string', CreoleTypes::VARCHAR, false, 200);

		$tMap->addColumn('LIKE_QUESTION', 'LikeQuestion', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('ANSWER_QUESTION', 'AnswerQuestion', 'int', CreoleTypes::INTEGER, false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

		$tMap->addColumn('UPDATED_AT', 'UpdatedAt', 'int', CreoleTypes::TIMESTAMP, false, null);

	} 
} 