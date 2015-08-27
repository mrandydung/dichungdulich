<?php


abstract class BaseDichungUserPeer {

	
	const DATABASE_NAME = 'propel';

	
	const TABLE_NAME = 'dichung_user';

	
	const CLASS_DEFAULT = 'lib.model.DichungUser';

	
	const NUM_COLUMNS = 89;

	
	const NUM_LAZY_LOAD_COLUMNS = 0;


	
	const ID = 'dichung_user.ID';

	
	const PARTNER_ID = 'dichung_user.PARTNER_ID';

	
	const USER_TYPE_ID = 'dichung_user.USER_TYPE_ID';

	
	const FULLNAME = 'dichung_user.FULLNAME';

	
	const PASSWORD = 'dichung_user.PASSWORD';

	
	const MD5_PASSWORD = 'dichung_user.MD5_PASSWORD';

	
	const ACTIVE = 'dichung_user.ACTIVE';

	
	const LOCKED = 'dichung_user.LOCKED';

	
	const EMAIL = 'dichung_user.EMAIL';

	
	const PHONE_NUMBER = 'dichung_user.PHONE_NUMBER';

	
	const HOTLINE = 'dichung_user.HOTLINE';

	
	const WEBSITE = 'dichung_user.WEBSITE';

	
	const FAX = 'dichung_user.FAX';

	
	const VEHICLE_ID = 'dichung_user.VEHICLE_ID';

	
	const VERIFIED_PHONE = 'dichung_user.VERIFIED_PHONE';

	
	const VERIFIED_EMAIL = 'dichung_user.VERIFIED_EMAIL';

	
	const ADDRESS = 'dichung_user.ADDRESS';

	
	const XANG = 'dichung_user.XANG';

	
	const AWARD_XANG = 'dichung_user.AWARD_XANG';

	
	const ANNOUNCEMENT = 'dichung_user.ANNOUNCEMENT';

	
	const GENDER = 'dichung_user.GENDER';

	
	const SURVEY = 'dichung_user.SURVEY';

	
	const AVATAR = 'dichung_user.AVATAR';

	
	const CAR_AVATAR = 'dichung_user.CAR_AVATAR';

	
	const ABOUT = 'dichung_user.ABOUT';

	
	const SMOKE = 'dichung_user.SMOKE';

	
	const CAR_NAME = 'dichung_user.CAR_NAME';

	
	const CAR_MODEL = 'dichung_user.CAR_MODEL';

	
	const CAR_YEAR = 'dichung_user.CAR_YEAR';

	
	const CAR_DESCRIPTION = 'dichung_user.CAR_DESCRIPTION';

	
	const BANK_NAME = 'dichung_user.BANK_NAME';

	
	const BANK_BRANCH = 'dichung_user.BANK_BRANCH';

	
	const BANK_CODE = 'dichung_user.BANK_CODE';

	
	const BANK_OWNER = 'dichung_user.BANK_OWNER';

	
	const PAYPAL = 'dichung_user.PAYPAL';

	
	const MUSIC = 'dichung_user.MUSIC';

	
	const INTEREST = 'dichung_user.INTEREST';

	
	const WORK = 'dichung_user.WORK';

	
	const EDUCATION = 'dichung_user.EDUCATION';

	
	const LOCATION = 'dichung_user.LOCATION';

	
	const MARRIED = 'dichung_user.MARRIED';

	
	const DOB = 'dichung_user.DOB';

	
	const INVITE_USER = 'dichung_user.INVITE_USER';

	
	const INVITE_TIME = 'dichung_user.INVITE_TIME';

	
	const DOMAIN = 'dichung_user.DOMAIN';

	
	const RESPONSIBILITY = 'dichung_user.RESPONSIBILITY';

	
	const FB_UID = 'dichung_user.FB_UID';

	
	const FB_USERNAME = 'dichung_user.FB_USERNAME';

	
	const FB_URL = 'dichung_user.FB_URL';

	
	const FB_SPIC = 'dichung_user.FB_SPIC';

	
	const FB_LPIC = 'dichung_user.FB_LPIC';

	
	const FB_FRIEND_COUNT = 'dichung_user.FB_FRIEND_COUNT';

	
	const GOOGLE_PLUS_URL = 'dichung_user.GOOGLE_PLUS_URL';

	
	const ZING_URL = 'dichung_user.ZING_URL';

	
	const SKYPE_URL = 'dichung_user.SKYPE_URL';

	
	const YAHOO_URL = 'dichung_user.YAHOO_URL';

	
	const EMAIL_TOKEN = 'dichung_user.EMAIL_TOKEN';

	
	const SLUG = 'dichung_user.SLUG';

	
	const JOB_ID = 'dichung_user.JOB_ID';

	
	const OLD_RANGE_ID = 'dichung_user.OLD_RANGE_ID';

	
	const RECEIVE_BOOK_REQUIRE_EMAIL = 'dichung_user.RECEIVE_BOOK_REQUIRE_EMAIL';

	
	const RECEIVE_BOOK_REQUIRE_SMS = 'dichung_user.RECEIVE_BOOK_REQUIRE_SMS';

	
	const RECEIVE_BOOKER_INFO_EMAIL = 'dichung_user.RECEIVE_BOOKER_INFO_EMAIL';

	
	const RECEIVE_BOOKER_INFO_SMS = 'dichung_user.RECEIVE_BOOKER_INFO_SMS';

	
	const RECEIVE_COMMENT_EMAIL = 'dichung_user.RECEIVE_COMMENT_EMAIL';

	
	const RECEIVE_COMMENT_SMS = 'dichung_user.RECEIVE_COMMENT_SMS';

	
	const RECEIVE_FINISH_EMAIL = 'dichung_user.RECEIVE_FINISH_EMAIL';

	
	const RECEIVE_FINISH_SMS = 'dichung_user.RECEIVE_FINISH_SMS';

	
	const RECEIVE_MATCHING_EMAIL = 'dichung_user.RECEIVE_MATCHING_EMAIL';

	
	const RECEIVE_MATCHING_SMS = 'dichung_user.RECEIVE_MATCHING_SMS';

	
	const CONTACT = 'dichung_user.CONTACT';

	
	const PUBLIC_EMAIL_PHONE = 'dichung_user.PUBLIC_EMAIL_PHONE';

	
	const PUBLIC_EMAIL = 'dichung_user.PUBLIC_EMAIL';

	
	const PUBLIC_PHONE = 'dichung_user.PUBLIC_PHONE';

	
	const IMAGE_VERIFY = 'dichung_user.IMAGE_VERIFY';

	
	const VERIFIED_IMAGE = 'dichung_user.VERIFIED_IMAGE';

	
	const DRIVE_LICENSE = 'dichung_user.DRIVE_LICENSE';

	
	const VERIFIED_DRIVE_LICENSE = 'dichung_user.VERIFIED_DRIVE_LICENSE';

	
	const TRAFFIC_LAW = 'dichung_user.TRAFFIC_LAW';

	
	const POINT = 'dichung_user.POINT';

	
	const POINT_LEVEL_ID = 'dichung_user.POINT_LEVEL_ID';

	
	const OVERALL_SCORE = 'dichung_user.OVERALL_SCORE';

	
	const AUTHENTICITY = 'dichung_user.AUTHENTICITY';

	
	const NETWORK_QUALITY = 'dichung_user.NETWORK_QUALITY';

	
	const FINANCIAL_CREDIBILITY = 'dichung_user.FINANCIAL_CREDIBILITY';

	
	const LIKE_QUESTION = 'dichung_user.LIKE_QUESTION';

	
	const ANSWER_QUESTION = 'dichung_user.ANSWER_QUESTION';

	
	const CREATED_AT = 'dichung_user.CREATED_AT';

	
	const UPDATED_AT = 'dichung_user.UPDATED_AT';

	
	private static $phpNameMap = null;


	
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PartnerId', 'UserTypeId', 'Fullname', 'Password', 'Md5Password', 'Active', 'Locked', 'Email', 'PhoneNumber', 'Hotline', 'Website', 'Fax', 'VehicleId', 'VerifiedPhone', 'VerifiedEmail', 'Address', 'Xang', 'AwardXang', 'Announcement', 'Gender', 'Survey', 'Avatar', 'CarAvatar', 'About', 'Smoke', 'CarName', 'CarModel', 'CarYear', 'CarDescription', 'BankName', 'BankBranch', 'BankCode', 'BankOwner', 'Paypal', 'Music', 'Interest', 'Work', 'Education', 'Location', 'Married', 'Dob', 'InviteUser', 'InviteTime', 'Domain', 'Responsibility', 'FbUid', 'FbUsername', 'FbUrl', 'FbSpic', 'FbLpic', 'FbFriendCount', 'GooglePlusUrl', 'ZingUrl', 'SkypeUrl', 'YahooUrl', 'EmailToken', 'Slug', 'JobId', 'OldRangeId', 'ReceiveBookRequireEmail', 'ReceiveBookRequireSms', 'ReceiveBookerInfoEmail', 'ReceiveBookerInfoSms', 'ReceiveCommentEmail', 'ReceiveCommentSms', 'ReceiveFinishEmail', 'ReceiveFinishSms', 'ReceiveMatchingEmail', 'ReceiveMatchingSms', 'Contact', 'PublicEmailPhone', 'PublicEmail', 'PublicPhone', 'ImageVerify', 'VerifiedImage', 'DriveLicense', 'VerifiedDriveLicense', 'TrafficLaw', 'Point', 'PointLevelId', 'OverallScore', 'Authenticity', 'NetworkQuality', 'FinancialCredibility', 'LikeQuestion', 'AnswerQuestion', 'CreatedAt', 'UpdatedAt', ),
		BasePeer::TYPE_COLNAME => array (DichungUserPeer::ID, DichungUserPeer::PARTNER_ID, DichungUserPeer::USER_TYPE_ID, DichungUserPeer::FULLNAME, DichungUserPeer::PASSWORD, DichungUserPeer::MD5_PASSWORD, DichungUserPeer::ACTIVE, DichungUserPeer::LOCKED, DichungUserPeer::EMAIL, DichungUserPeer::PHONE_NUMBER, DichungUserPeer::HOTLINE, DichungUserPeer::WEBSITE, DichungUserPeer::FAX, DichungUserPeer::VEHICLE_ID, DichungUserPeer::VERIFIED_PHONE, DichungUserPeer::VERIFIED_EMAIL, DichungUserPeer::ADDRESS, DichungUserPeer::XANG, DichungUserPeer::AWARD_XANG, DichungUserPeer::ANNOUNCEMENT, DichungUserPeer::GENDER, DichungUserPeer::SURVEY, DichungUserPeer::AVATAR, DichungUserPeer::CAR_AVATAR, DichungUserPeer::ABOUT, DichungUserPeer::SMOKE, DichungUserPeer::CAR_NAME, DichungUserPeer::CAR_MODEL, DichungUserPeer::CAR_YEAR, DichungUserPeer::CAR_DESCRIPTION, DichungUserPeer::BANK_NAME, DichungUserPeer::BANK_BRANCH, DichungUserPeer::BANK_CODE, DichungUserPeer::BANK_OWNER, DichungUserPeer::PAYPAL, DichungUserPeer::MUSIC, DichungUserPeer::INTEREST, DichungUserPeer::WORK, DichungUserPeer::EDUCATION, DichungUserPeer::LOCATION, DichungUserPeer::MARRIED, DichungUserPeer::DOB, DichungUserPeer::INVITE_USER, DichungUserPeer::INVITE_TIME, DichungUserPeer::DOMAIN, DichungUserPeer::RESPONSIBILITY, DichungUserPeer::FB_UID, DichungUserPeer::FB_USERNAME, DichungUserPeer::FB_URL, DichungUserPeer::FB_SPIC, DichungUserPeer::FB_LPIC, DichungUserPeer::FB_FRIEND_COUNT, DichungUserPeer::GOOGLE_PLUS_URL, DichungUserPeer::ZING_URL, DichungUserPeer::SKYPE_URL, DichungUserPeer::YAHOO_URL, DichungUserPeer::EMAIL_TOKEN, DichungUserPeer::SLUG, DichungUserPeer::JOB_ID, DichungUserPeer::OLD_RANGE_ID, DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL, DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS, DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL, DichungUserPeer::RECEIVE_BOOKER_INFO_SMS, DichungUserPeer::RECEIVE_COMMENT_EMAIL, DichungUserPeer::RECEIVE_COMMENT_SMS, DichungUserPeer::RECEIVE_FINISH_EMAIL, DichungUserPeer::RECEIVE_FINISH_SMS, DichungUserPeer::RECEIVE_MATCHING_EMAIL, DichungUserPeer::RECEIVE_MATCHING_SMS, DichungUserPeer::CONTACT, DichungUserPeer::PUBLIC_EMAIL_PHONE, DichungUserPeer::PUBLIC_EMAIL, DichungUserPeer::PUBLIC_PHONE, DichungUserPeer::IMAGE_VERIFY, DichungUserPeer::VERIFIED_IMAGE, DichungUserPeer::DRIVE_LICENSE, DichungUserPeer::VERIFIED_DRIVE_LICENSE, DichungUserPeer::TRAFFIC_LAW, DichungUserPeer::POINT, DichungUserPeer::POINT_LEVEL_ID, DichungUserPeer::OVERALL_SCORE, DichungUserPeer::AUTHENTICITY, DichungUserPeer::NETWORK_QUALITY, DichungUserPeer::FINANCIAL_CREDIBILITY, DichungUserPeer::LIKE_QUESTION, DichungUserPeer::ANSWER_QUESTION, DichungUserPeer::CREATED_AT, DichungUserPeer::UPDATED_AT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'partner_id', 'user_type_id', 'fullname', 'password', 'md5_password', 'active', 'locked', 'email', 'phone_number', 'hotline', 'website', 'fax', 'vehicle_id', 'verified_phone', 'verified_email', 'address', 'xang', 'award_xang', 'announcement', 'gender', 'survey', 'avatar', 'car_avatar', 'about', 'smoke', 'car_name', 'car_model', 'car_year', 'car_description', 'bank_name', 'bank_branch', 'bank_code', 'bank_owner', 'paypal', 'music', 'interest', 'work', 'education', 'location', 'married', 'dob', 'invite_user', 'invite_time', 'domain', 'responsibility', 'fb_uid', 'fb_username', 'fb_url', 'fb_spic', 'fb_lpic', 'fb_friend_count', 'google_plus_url', 'zing_url', 'skype_url', 'yahoo_url', 'email_token', 'slug', 'job_id', 'old_range_id', 'receive_book_require_email', 'receive_book_require_sms', 'receive_booker_info_email', 'receive_booker_info_sms', 'receive_comment_email', 'receive_comment_sms', 'receive_finish_email', 'receive_finish_sms', 'receive_matching_email', 'receive_matching_sms', 'contact', 'public_email_phone', 'public_email', 'public_phone', 'image_verify', 'verified_image', 'drive_license', 'verified_drive_license', 'traffic_law', 'point', 'point_level_id', 'overall_score', 'authenticity', 'network_quality', 'financial_credibility', 'like_question', 'answer_question', 'created_at', 'updated_at', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
	);

	
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PartnerId' => 1, 'UserTypeId' => 2, 'Fullname' => 3, 'Password' => 4, 'Md5Password' => 5, 'Active' => 6, 'Locked' => 7, 'Email' => 8, 'PhoneNumber' => 9, 'Hotline' => 10, 'Website' => 11, 'Fax' => 12, 'VehicleId' => 13, 'VerifiedPhone' => 14, 'VerifiedEmail' => 15, 'Address' => 16, 'Xang' => 17, 'AwardXang' => 18, 'Announcement' => 19, 'Gender' => 20, 'Survey' => 21, 'Avatar' => 22, 'CarAvatar' => 23, 'About' => 24, 'Smoke' => 25, 'CarName' => 26, 'CarModel' => 27, 'CarYear' => 28, 'CarDescription' => 29, 'BankName' => 30, 'BankBranch' => 31, 'BankCode' => 32, 'BankOwner' => 33, 'Paypal' => 34, 'Music' => 35, 'Interest' => 36, 'Work' => 37, 'Education' => 38, 'Location' => 39, 'Married' => 40, 'Dob' => 41, 'InviteUser' => 42, 'InviteTime' => 43, 'Domain' => 44, 'Responsibility' => 45, 'FbUid' => 46, 'FbUsername' => 47, 'FbUrl' => 48, 'FbSpic' => 49, 'FbLpic' => 50, 'FbFriendCount' => 51, 'GooglePlusUrl' => 52, 'ZingUrl' => 53, 'SkypeUrl' => 54, 'YahooUrl' => 55, 'EmailToken' => 56, 'Slug' => 57, 'JobId' => 58, 'OldRangeId' => 59, 'ReceiveBookRequireEmail' => 60, 'ReceiveBookRequireSms' => 61, 'ReceiveBookerInfoEmail' => 62, 'ReceiveBookerInfoSms' => 63, 'ReceiveCommentEmail' => 64, 'ReceiveCommentSms' => 65, 'ReceiveFinishEmail' => 66, 'ReceiveFinishSms' => 67, 'ReceiveMatchingEmail' => 68, 'ReceiveMatchingSms' => 69, 'Contact' => 70, 'PublicEmailPhone' => 71, 'PublicEmail' => 72, 'PublicPhone' => 73, 'ImageVerify' => 74, 'VerifiedImage' => 75, 'DriveLicense' => 76, 'VerifiedDriveLicense' => 77, 'TrafficLaw' => 78, 'Point' => 79, 'PointLevelId' => 80, 'OverallScore' => 81, 'Authenticity' => 82, 'NetworkQuality' => 83, 'FinancialCredibility' => 84, 'LikeQuestion' => 85, 'AnswerQuestion' => 86, 'CreatedAt' => 87, 'UpdatedAt' => 88, ),
		BasePeer::TYPE_COLNAME => array (DichungUserPeer::ID => 0, DichungUserPeer::PARTNER_ID => 1, DichungUserPeer::USER_TYPE_ID => 2, DichungUserPeer::FULLNAME => 3, DichungUserPeer::PASSWORD => 4, DichungUserPeer::MD5_PASSWORD => 5, DichungUserPeer::ACTIVE => 6, DichungUserPeer::LOCKED => 7, DichungUserPeer::EMAIL => 8, DichungUserPeer::PHONE_NUMBER => 9, DichungUserPeer::HOTLINE => 10, DichungUserPeer::WEBSITE => 11, DichungUserPeer::FAX => 12, DichungUserPeer::VEHICLE_ID => 13, DichungUserPeer::VERIFIED_PHONE => 14, DichungUserPeer::VERIFIED_EMAIL => 15, DichungUserPeer::ADDRESS => 16, DichungUserPeer::XANG => 17, DichungUserPeer::AWARD_XANG => 18, DichungUserPeer::ANNOUNCEMENT => 19, DichungUserPeer::GENDER => 20, DichungUserPeer::SURVEY => 21, DichungUserPeer::AVATAR => 22, DichungUserPeer::CAR_AVATAR => 23, DichungUserPeer::ABOUT => 24, DichungUserPeer::SMOKE => 25, DichungUserPeer::CAR_NAME => 26, DichungUserPeer::CAR_MODEL => 27, DichungUserPeer::CAR_YEAR => 28, DichungUserPeer::CAR_DESCRIPTION => 29, DichungUserPeer::BANK_NAME => 30, DichungUserPeer::BANK_BRANCH => 31, DichungUserPeer::BANK_CODE => 32, DichungUserPeer::BANK_OWNER => 33, DichungUserPeer::PAYPAL => 34, DichungUserPeer::MUSIC => 35, DichungUserPeer::INTEREST => 36, DichungUserPeer::WORK => 37, DichungUserPeer::EDUCATION => 38, DichungUserPeer::LOCATION => 39, DichungUserPeer::MARRIED => 40, DichungUserPeer::DOB => 41, DichungUserPeer::INVITE_USER => 42, DichungUserPeer::INVITE_TIME => 43, DichungUserPeer::DOMAIN => 44, DichungUserPeer::RESPONSIBILITY => 45, DichungUserPeer::FB_UID => 46, DichungUserPeer::FB_USERNAME => 47, DichungUserPeer::FB_URL => 48, DichungUserPeer::FB_SPIC => 49, DichungUserPeer::FB_LPIC => 50, DichungUserPeer::FB_FRIEND_COUNT => 51, DichungUserPeer::GOOGLE_PLUS_URL => 52, DichungUserPeer::ZING_URL => 53, DichungUserPeer::SKYPE_URL => 54, DichungUserPeer::YAHOO_URL => 55, DichungUserPeer::EMAIL_TOKEN => 56, DichungUserPeer::SLUG => 57, DichungUserPeer::JOB_ID => 58, DichungUserPeer::OLD_RANGE_ID => 59, DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL => 60, DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS => 61, DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL => 62, DichungUserPeer::RECEIVE_BOOKER_INFO_SMS => 63, DichungUserPeer::RECEIVE_COMMENT_EMAIL => 64, DichungUserPeer::RECEIVE_COMMENT_SMS => 65, DichungUserPeer::RECEIVE_FINISH_EMAIL => 66, DichungUserPeer::RECEIVE_FINISH_SMS => 67, DichungUserPeer::RECEIVE_MATCHING_EMAIL => 68, DichungUserPeer::RECEIVE_MATCHING_SMS => 69, DichungUserPeer::CONTACT => 70, DichungUserPeer::PUBLIC_EMAIL_PHONE => 71, DichungUserPeer::PUBLIC_EMAIL => 72, DichungUserPeer::PUBLIC_PHONE => 73, DichungUserPeer::IMAGE_VERIFY => 74, DichungUserPeer::VERIFIED_IMAGE => 75, DichungUserPeer::DRIVE_LICENSE => 76, DichungUserPeer::VERIFIED_DRIVE_LICENSE => 77, DichungUserPeer::TRAFFIC_LAW => 78, DichungUserPeer::POINT => 79, DichungUserPeer::POINT_LEVEL_ID => 80, DichungUserPeer::OVERALL_SCORE => 81, DichungUserPeer::AUTHENTICITY => 82, DichungUserPeer::NETWORK_QUALITY => 83, DichungUserPeer::FINANCIAL_CREDIBILITY => 84, DichungUserPeer::LIKE_QUESTION => 85, DichungUserPeer::ANSWER_QUESTION => 86, DichungUserPeer::CREATED_AT => 87, DichungUserPeer::UPDATED_AT => 88, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'partner_id' => 1, 'user_type_id' => 2, 'fullname' => 3, 'password' => 4, 'md5_password' => 5, 'active' => 6, 'locked' => 7, 'email' => 8, 'phone_number' => 9, 'hotline' => 10, 'website' => 11, 'fax' => 12, 'vehicle_id' => 13, 'verified_phone' => 14, 'verified_email' => 15, 'address' => 16, 'xang' => 17, 'award_xang' => 18, 'announcement' => 19, 'gender' => 20, 'survey' => 21, 'avatar' => 22, 'car_avatar' => 23, 'about' => 24, 'smoke' => 25, 'car_name' => 26, 'car_model' => 27, 'car_year' => 28, 'car_description' => 29, 'bank_name' => 30, 'bank_branch' => 31, 'bank_code' => 32, 'bank_owner' => 33, 'paypal' => 34, 'music' => 35, 'interest' => 36, 'work' => 37, 'education' => 38, 'location' => 39, 'married' => 40, 'dob' => 41, 'invite_user' => 42, 'invite_time' => 43, 'domain' => 44, 'responsibility' => 45, 'fb_uid' => 46, 'fb_username' => 47, 'fb_url' => 48, 'fb_spic' => 49, 'fb_lpic' => 50, 'fb_friend_count' => 51, 'google_plus_url' => 52, 'zing_url' => 53, 'skype_url' => 54, 'yahoo_url' => 55, 'email_token' => 56, 'slug' => 57, 'job_id' => 58, 'old_range_id' => 59, 'receive_book_require_email' => 60, 'receive_book_require_sms' => 61, 'receive_booker_info_email' => 62, 'receive_booker_info_sms' => 63, 'receive_comment_email' => 64, 'receive_comment_sms' => 65, 'receive_finish_email' => 66, 'receive_finish_sms' => 67, 'receive_matching_email' => 68, 'receive_matching_sms' => 69, 'contact' => 70, 'public_email_phone' => 71, 'public_email' => 72, 'public_phone' => 73, 'image_verify' => 74, 'verified_image' => 75, 'drive_license' => 76, 'verified_drive_license' => 77, 'traffic_law' => 78, 'point' => 79, 'point_level_id' => 80, 'overall_score' => 81, 'authenticity' => 82, 'network_quality' => 83, 'financial_credibility' => 84, 'like_question' => 85, 'answer_question' => 86, 'created_at' => 87, 'updated_at' => 88, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
	);

	
	public static function getMapBuilder()
	{
		return BasePeer::getMapBuilder('lib.model.map.DichungUserMapBuilder');
	}
	
	public static function getPhpNameMap()
	{
		if (self::$phpNameMap === null) {
			$map = DichungUserPeer::getTableMap();
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
		return str_replace(DichungUserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(DichungUserPeer::ID);

		$criteria->addSelectColumn(DichungUserPeer::PARTNER_ID);

		$criteria->addSelectColumn(DichungUserPeer::USER_TYPE_ID);

		$criteria->addSelectColumn(DichungUserPeer::FULLNAME);

		$criteria->addSelectColumn(DichungUserPeer::PASSWORD);

		$criteria->addSelectColumn(DichungUserPeer::MD5_PASSWORD);

		$criteria->addSelectColumn(DichungUserPeer::ACTIVE);

		$criteria->addSelectColumn(DichungUserPeer::LOCKED);

		$criteria->addSelectColumn(DichungUserPeer::EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::PHONE_NUMBER);

		$criteria->addSelectColumn(DichungUserPeer::HOTLINE);

		$criteria->addSelectColumn(DichungUserPeer::WEBSITE);

		$criteria->addSelectColumn(DichungUserPeer::FAX);

		$criteria->addSelectColumn(DichungUserPeer::VEHICLE_ID);

		$criteria->addSelectColumn(DichungUserPeer::VERIFIED_PHONE);

		$criteria->addSelectColumn(DichungUserPeer::VERIFIED_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::ADDRESS);

		$criteria->addSelectColumn(DichungUserPeer::XANG);

		$criteria->addSelectColumn(DichungUserPeer::AWARD_XANG);

		$criteria->addSelectColumn(DichungUserPeer::ANNOUNCEMENT);

		$criteria->addSelectColumn(DichungUserPeer::GENDER);

		$criteria->addSelectColumn(DichungUserPeer::SURVEY);

		$criteria->addSelectColumn(DichungUserPeer::AVATAR);

		$criteria->addSelectColumn(DichungUserPeer::CAR_AVATAR);

		$criteria->addSelectColumn(DichungUserPeer::ABOUT);

		$criteria->addSelectColumn(DichungUserPeer::SMOKE);

		$criteria->addSelectColumn(DichungUserPeer::CAR_NAME);

		$criteria->addSelectColumn(DichungUserPeer::CAR_MODEL);

		$criteria->addSelectColumn(DichungUserPeer::CAR_YEAR);

		$criteria->addSelectColumn(DichungUserPeer::CAR_DESCRIPTION);

		$criteria->addSelectColumn(DichungUserPeer::BANK_NAME);

		$criteria->addSelectColumn(DichungUserPeer::BANK_BRANCH);

		$criteria->addSelectColumn(DichungUserPeer::BANK_CODE);

		$criteria->addSelectColumn(DichungUserPeer::BANK_OWNER);

		$criteria->addSelectColumn(DichungUserPeer::PAYPAL);

		$criteria->addSelectColumn(DichungUserPeer::MUSIC);

		$criteria->addSelectColumn(DichungUserPeer::INTEREST);

		$criteria->addSelectColumn(DichungUserPeer::WORK);

		$criteria->addSelectColumn(DichungUserPeer::EDUCATION);

		$criteria->addSelectColumn(DichungUserPeer::LOCATION);

		$criteria->addSelectColumn(DichungUserPeer::MARRIED);

		$criteria->addSelectColumn(DichungUserPeer::DOB);

		$criteria->addSelectColumn(DichungUserPeer::INVITE_USER);

		$criteria->addSelectColumn(DichungUserPeer::INVITE_TIME);

		$criteria->addSelectColumn(DichungUserPeer::DOMAIN);

		$criteria->addSelectColumn(DichungUserPeer::RESPONSIBILITY);

		$criteria->addSelectColumn(DichungUserPeer::FB_UID);

		$criteria->addSelectColumn(DichungUserPeer::FB_USERNAME);

		$criteria->addSelectColumn(DichungUserPeer::FB_URL);

		$criteria->addSelectColumn(DichungUserPeer::FB_SPIC);

		$criteria->addSelectColumn(DichungUserPeer::FB_LPIC);

		$criteria->addSelectColumn(DichungUserPeer::FB_FRIEND_COUNT);

		$criteria->addSelectColumn(DichungUserPeer::GOOGLE_PLUS_URL);

		$criteria->addSelectColumn(DichungUserPeer::ZING_URL);

		$criteria->addSelectColumn(DichungUserPeer::SKYPE_URL);

		$criteria->addSelectColumn(DichungUserPeer::YAHOO_URL);

		$criteria->addSelectColumn(DichungUserPeer::EMAIL_TOKEN);

		$criteria->addSelectColumn(DichungUserPeer::SLUG);

		$criteria->addSelectColumn(DichungUserPeer::JOB_ID);

		$criteria->addSelectColumn(DichungUserPeer::OLD_RANGE_ID);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_BOOKER_INFO_SMS);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_COMMENT_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_COMMENT_SMS);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_FINISH_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_FINISH_SMS);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_MATCHING_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::RECEIVE_MATCHING_SMS);

		$criteria->addSelectColumn(DichungUserPeer::CONTACT);

		$criteria->addSelectColumn(DichungUserPeer::PUBLIC_EMAIL_PHONE);

		$criteria->addSelectColumn(DichungUserPeer::PUBLIC_EMAIL);

		$criteria->addSelectColumn(DichungUserPeer::PUBLIC_PHONE);

		$criteria->addSelectColumn(DichungUserPeer::IMAGE_VERIFY);

		$criteria->addSelectColumn(DichungUserPeer::VERIFIED_IMAGE);

		$criteria->addSelectColumn(DichungUserPeer::DRIVE_LICENSE);

		$criteria->addSelectColumn(DichungUserPeer::VERIFIED_DRIVE_LICENSE);

		$criteria->addSelectColumn(DichungUserPeer::TRAFFIC_LAW);

		$criteria->addSelectColumn(DichungUserPeer::POINT);

		$criteria->addSelectColumn(DichungUserPeer::POINT_LEVEL_ID);

		$criteria->addSelectColumn(DichungUserPeer::OVERALL_SCORE);

		$criteria->addSelectColumn(DichungUserPeer::AUTHENTICITY);

		$criteria->addSelectColumn(DichungUserPeer::NETWORK_QUALITY);

		$criteria->addSelectColumn(DichungUserPeer::FINANCIAL_CREDIBILITY);

		$criteria->addSelectColumn(DichungUserPeer::LIKE_QUESTION);

		$criteria->addSelectColumn(DichungUserPeer::ANSWER_QUESTION);

		$criteria->addSelectColumn(DichungUserPeer::CREATED_AT);

		$criteria->addSelectColumn(DichungUserPeer::UPDATED_AT);

	}

	const COUNT = 'COUNT(dichung_user.ID)';
	const COUNT_DISTINCT = 'COUNT(DISTINCT dichung_user.ID)';

	
	public static function doCount(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
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
		$objects = DichungUserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	
	public static function doSelect(Criteria $criteria, $con = null)
	{
		return DichungUserPeer::populateObjects(DichungUserPeer::doSelectRS($criteria, $con));
	}
	
	public static function doSelectRS(Criteria $criteria, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if (!$criteria->getSelectColumns()) {
			$criteria = clone $criteria;
			DichungUserPeer::addSelectColumns($criteria);
		}

				$criteria->setDbName(self::DATABASE_NAME);

						return BasePeer::doSelect($criteria, $con);
	}
	
	public static function populateObjects(ResultSet $rs)
	{
		$results = array();
	
				$cls = DichungUserPeer::getOMClass();
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
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinUserType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinJob(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinOldRange(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinPointLevel(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
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

		DichungUserPeer::addSelectColumns($c);
		$startcol = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PartnerPeer::addSelectColumns($c);

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

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
										$temp_obj2->addDichungUser($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinUserType(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		UserTypePeer::addSelectColumns($c);

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserTypePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getUserType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDichungUser($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinJob(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		JobPeer::addSelectColumns($c);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = JobPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getJob(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDichungUser($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinOldRange(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		OldRangePeer::addSelectColumns($c);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = OldRangePeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getOldRange(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDichungUser($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinPointLevel(Criteria $c, $con = null)
	{
		$c = clone $c;

				if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;
		PointLevelPeer::addSelectColumns($c);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);
		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = PointLevelPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj2 = new $cls();
			$obj2->hydrate($rs, $startcol);

			$newObject = true;
			foreach($results as $temp_obj1) {
				$temp_obj2 = $temp_obj1->getPointLevel(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
										$temp_obj2->addDichungUser($obj1); 					break;
				}
			}
			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1); 			}
			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, $con = null)
	{
		$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
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

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		UserTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserTypePeer::NUM_COLUMNS;

		JobPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + JobPeer::NUM_COLUMNS;

		OldRangePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + OldRangePeer::NUM_COLUMNS;

		PointLevelPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + PointLevelPeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();


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
					$temp_obj2->addDichungUser($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}


					
			$omClass = UserTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3 = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}


					
			$omClass = JobPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4 = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getJob(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}


					
			$omClass = OldRangePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5 = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getOldRange(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
			}


					
			$omClass = PointLevelPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj6 = new $cls();
			$obj6->hydrate($rs, $startcol6);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj6 = $temp_obj1->getPointLevel(); 				if ($temp_obj6->getPrimaryKey() === $obj6->getPrimaryKey()) {
					$newObject = false;
					$temp_obj6->addDichungUser($obj1); 					break;
				}
			}

			if ($newObject) {
				$obj6->initDichungUsers();
				$obj6->addDichungUser($obj1);
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
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptUserType(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptJob(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptOldRange(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$criteria->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
		if ($rs->next()) {
			return $rs->getInt(1);
		} else {
						return 0;
		}
	}


	
	public static function doCountJoinAllExceptPointLevel(Criteria $criteria, $distinct = false, $con = null)
	{
				$criteria = clone $criteria;

				$criteria->clearSelectColumns()->clearOrderByColumns();
		if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->addSelectColumn(DichungUserPeer::COUNT_DISTINCT);
		} else {
			$criteria->addSelectColumn(DichungUserPeer::COUNT);
		}

				foreach($criteria->getGroupByColumns() as $column)
		{
			$criteria->addSelectColumn($column);
		}

		$criteria->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$criteria->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$criteria->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$criteria->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$rs = DichungUserPeer::doSelectRS($criteria, $con);
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

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		UserTypePeer::addSelectColumns($c);
		$startcol3 = $startcol2 + UserTypePeer::NUM_COLUMNS;

		JobPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + JobPeer::NUM_COLUMNS;

		OldRangePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + OldRangePeer::NUM_COLUMNS;

		PointLevelPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PointLevelPeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

			$cls = sfPropel::import($omClass);
			$obj1 = new $cls();
			$obj1->hydrate($rs);

			$omClass = UserTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj2  = new $cls();
			$obj2->hydrate($rs, $startcol2);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj2 = $temp_obj1->getUserType(); 				if ($temp_obj2->getPrimaryKey() === $obj2->getPrimaryKey()) {
					$newObject = false;
					$temp_obj2->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}

			$omClass = JobPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getJob(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}

			$omClass = OldRangePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getOldRange(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}

			$omClass = PointLevelPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPointLevel(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptUserType(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		JobPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + JobPeer::NUM_COLUMNS;

		OldRangePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + OldRangePeer::NUM_COLUMNS;

		PointLevelPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PointLevelPeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

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
					$temp_obj2->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}

			$omClass = JobPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getJob(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}

			$omClass = OldRangePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getOldRange(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}

			$omClass = PointLevelPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPointLevel(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptJob(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		UserTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserTypePeer::NUM_COLUMNS;

		OldRangePeer::addSelectColumns($c);
		$startcol5 = $startcol4 + OldRangePeer::NUM_COLUMNS;

		PointLevelPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PointLevelPeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

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
					$temp_obj2->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}

			$omClass = UserTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}

			$omClass = OldRangePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getOldRange(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}

			$omClass = PointLevelPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPointLevel(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptOldRange(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		UserTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserTypePeer::NUM_COLUMNS;

		JobPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + JobPeer::NUM_COLUMNS;

		PointLevelPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + PointLevelPeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$c->addJoin(DichungUserPeer::POINT_LEVEL_ID, PointLevelPeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

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
					$temp_obj2->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}

			$omClass = UserTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}

			$omClass = JobPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getJob(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}

			$omClass = PointLevelPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getPointLevel(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
			}

			$results[] = $obj1;
		}
		return $results;
	}


	
	public static function doSelectJoinAllExceptPointLevel(Criteria $c, $con = null)
	{
		$c = clone $c;

								if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		DichungUserPeer::addSelectColumns($c);
		$startcol2 = (DichungUserPeer::NUM_COLUMNS - DichungUserPeer::NUM_LAZY_LOAD_COLUMNS) + 1;

		PartnerPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + PartnerPeer::NUM_COLUMNS;

		UserTypePeer::addSelectColumns($c);
		$startcol4 = $startcol3 + UserTypePeer::NUM_COLUMNS;

		JobPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + JobPeer::NUM_COLUMNS;

		OldRangePeer::addSelectColumns($c);
		$startcol6 = $startcol5 + OldRangePeer::NUM_COLUMNS;

		$c->addJoin(DichungUserPeer::PARTNER_ID, PartnerPeer::ID);

		$c->addJoin(DichungUserPeer::USER_TYPE_ID, UserTypePeer::ID);

		$c->addJoin(DichungUserPeer::JOB_ID, JobPeer::ID);

		$c->addJoin(DichungUserPeer::OLD_RANGE_ID, OldRangePeer::ID);


		$rs = BasePeer::doSelect($c, $con);
		$results = array();

		while($rs->next()) {

			$omClass = DichungUserPeer::getOMClass();

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
					$temp_obj2->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj2->initDichungUsers();
				$obj2->addDichungUser($obj1);
			}

			$omClass = UserTypePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj3  = new $cls();
			$obj3->hydrate($rs, $startcol3);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj3 = $temp_obj1->getUserType(); 				if ($temp_obj3->getPrimaryKey() === $obj3->getPrimaryKey()) {
					$newObject = false;
					$temp_obj3->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj3->initDichungUsers();
				$obj3->addDichungUser($obj1);
			}

			$omClass = JobPeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj4  = new $cls();
			$obj4->hydrate($rs, $startcol4);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj4 = $temp_obj1->getJob(); 				if ($temp_obj4->getPrimaryKey() === $obj4->getPrimaryKey()) {
					$newObject = false;
					$temp_obj4->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj4->initDichungUsers();
				$obj4->addDichungUser($obj1);
			}

			$omClass = OldRangePeer::getOMClass();


			$cls = sfPropel::import($omClass);
			$obj5  = new $cls();
			$obj5->hydrate($rs, $startcol5);

			$newObject = true;
			for ($j=0, $resCount=count($results); $j < $resCount; $j++) {
				$temp_obj1 = $results[$j];
				$temp_obj5 = $temp_obj1->getOldRange(); 				if ($temp_obj5->getPrimaryKey() === $obj5->getPrimaryKey()) {
					$newObject = false;
					$temp_obj5->addDichungUser($obj1);
					break;
				}
			}

			if ($newObject) {
				$obj5->initDichungUsers();
				$obj5->addDichungUser($obj1);
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
		return DichungUserPeer::CLASS_DEFAULT;
	}

	
	public static function doInsert($values, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(self::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} else {
			$criteria = $values->buildCriteria(); 		}

		$criteria->remove(DichungUserPeer::ID); 

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
			$comparison = $criteria->getComparison(DichungUserPeer::ID);
			$selectCriteria->add(DichungUserPeer::ID, $criteria->remove(DichungUserPeer::ID), $comparison);

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
			$affectedRows += BasePeer::doDeleteAll(DichungUserPeer::TABLE_NAME, $con);
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
			$con = Propel::getConnection(DichungUserPeer::DATABASE_NAME);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; 		} elseif ($values instanceof DichungUser) {

			$criteria = $values->buildPkeyCriteria();
		} else {
						$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DichungUserPeer::ID, (array) $values, Criteria::IN);
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

	
	public static function doValidate(DichungUser $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DichungUserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DichungUserPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(DichungUserPeer::DATABASE_NAME, DichungUserPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = DichungUserPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
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

			$criteria = new Criteria(DichungUserPeer::DATABASE_NAME);
	
			$criteria->add(DichungUserPeer::ID, $pk);
	

			$v = DichungUserPeer::doSelect($criteria, $con);
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
			$criteria->add(DichungUserPeer::ID, $pks, Criteria::IN);
			$objs = DichungUserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} 
if (Propel::isInit()) {
			try {
		BaseDichungUserPeer::getMapBuilder();
	} catch (Exception $e) {
		Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
	}
} else {
			Propel::registerMapBuilder('lib.model.map.DichungUserMapBuilder');
}
