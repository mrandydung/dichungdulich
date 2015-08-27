<?php


abstract class BaseDichungUser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id = 1;


	
	protected $user_type_id = 1;


	
	protected $fullname;


	
	protected $password;


	
	protected $md5_password;


	
	protected $active = false;


	
	protected $locked = false;


	
	protected $email;


	
	protected $phone_number;


	
	protected $hotline;


	
	protected $website;


	
	protected $fax;


	
	protected $vehicle_id = 0;


	
	protected $verified_phone = false;


	
	protected $verified_email = false;


	
	protected $address;


	
	protected $xang = '1000';


	
	protected $award_xang = '0';


	
	protected $announcement = true;


	
	protected $gender = 1;


	
	protected $survey = true;


	
	protected $avatar = '/uploads/avatar/avatar.png';


	
	protected $car_avatar;


	
	protected $about;


	
	protected $smoke = false;


	
	protected $car_name;


	
	protected $car_model;


	
	protected $car_year;


	
	protected $car_description;


	
	protected $bank_name;


	
	protected $bank_branch;


	
	protected $bank_code;


	
	protected $bank_owner;


	
	protected $paypal;


	
	protected $music;


	
	protected $interest;


	
	protected $work;


	
	protected $education;


	
	protected $location;


	
	protected $married = true;


	
	protected $dob;


	
	protected $invite_user;


	
	protected $invite_time;


	
	protected $domain;


	
	protected $responsibility;


	
	protected $fb_uid;


	
	protected $fb_username;


	
	protected $fb_url;


	
	protected $fb_spic;


	
	protected $fb_lpic;


	
	protected $fb_friend_count = 0;


	
	protected $google_plus_url;


	
	protected $zing_url;


	
	protected $skype_url;


	
	protected $yahoo_url;


	
	protected $email_token;


	
	protected $slug;


	
	protected $job_id;


	
	protected $old_range_id;


	
	protected $receive_book_require_email = false;


	
	protected $receive_book_require_sms = true;


	
	protected $receive_booker_info_email = false;


	
	protected $receive_booker_info_sms = true;


	
	protected $receive_comment_email = true;


	
	protected $receive_comment_sms = true;


	
	protected $receive_finish_email = true;


	
	protected $receive_finish_sms = true;


	
	protected $receive_matching_email = true;


	
	protected $receive_matching_sms = true;


	
	protected $contact;


	
	protected $public_email_phone = false;


	
	protected $public_email = false;


	
	protected $public_phone = false;


	
	protected $image_verify;


	
	protected $verified_image = false;


	
	protected $drive_license;


	
	protected $verified_drive_license = false;


	
	protected $traffic_law = false;


	
	protected $point = 0;


	
	protected $point_level_id = 1;


	
	protected $overall_score = '0';


	
	protected $authenticity = '0';


	
	protected $network_quality = '0';


	
	protected $financial_credibility = '0';


	
	protected $like_question = 0;


	
	protected $answer_question = 0;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aPartner;

	
	protected $aUserType;

	
	protected $aJob;

	
	protected $aOldRange;

	
	protected $aPointLevel;

	
	protected $collTourDetails;

	
	protected $lastTourDetailCriteria = null;

	
	protected $collBookingTours;

	
	protected $lastBookingTourCriteria = null;

	
	protected $collNotifications;

	
	protected $lastNotificationCriteria = null;

	
	protected $collMessages;

	
	protected $lastMessageCriteria = null;

	
	protected $collTripExperiences;

	
	protected $lastTripExperienceCriteria = null;

	
	protected $collCommentTours;

	
	protected $lastCommentTourCriteria = null;

	
	protected $collCommentExperiences;

	
	protected $lastCommentExperienceCriteria = null;

	
	protected $collCommentAcquirementss;

	
	protected $lastCommentAcquirementsCriteria = null;

	
	protected $collUserSendVerifyInfos;

	
	protected $lastUserSendVerifyInfoCriteria = null;

	
	protected $collTripAcquirementss;

	
	protected $lastTripAcquirementsCriteria = null;

	
	protected $collQuestions;

	
	protected $lastQuestionCriteria = null;

	
	protected $collQuestionAnswers;

	
	protected $lastQuestionAnswerCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getPartnerId()
	{

        return $this->partner_id;
	}

	
	public function getUserTypeId()
	{

        return $this->user_type_id;
	}

	
	public function getFullname()
	{

        return $this->fullname;
	}

	
	public function getPassword()
	{

        return $this->password;
	}

	
	public function getMd5Password()
	{

        return $this->md5_password;
	}

	
	public function getActive()
	{

        return $this->active;
	}

	
	public function getLocked()
	{

        return $this->locked;
	}

	
	public function getEmail()
	{

        return $this->email;
	}

	
	public function getPhoneNumber()
	{

        return $this->phone_number;
	}

	
	public function getHotline()
	{

        return $this->hotline;
	}

	
	public function getWebsite()
	{

        return $this->website;
	}

	
	public function getFax()
	{

        return $this->fax;
	}

	
	public function getVehicleId()
	{

        return $this->vehicle_id;
	}

	
	public function getVerifiedPhone()
	{

        return $this->verified_phone;
	}

	
	public function getVerifiedEmail()
	{

        return $this->verified_email;
	}

	
	public function getAddress()
	{

        return $this->address;
	}

	
	public function getXang()
	{

        return $this->xang;
	}

	
	public function getAwardXang()
	{

        return $this->award_xang;
	}

	
	public function getAnnouncement()
	{

        return $this->announcement;
	}

	
	public function getGender()
	{

        return $this->gender;
	}

	
	public function getSurvey()
	{

        return $this->survey;
	}

	
	public function getAvatar()
	{

        return $this->avatar;
	}

	
	public function getCarAvatar()
	{

        return $this->car_avatar;
	}

	
	public function getAbout()
	{

        return $this->about;
	}

	
	public function getSmoke()
	{

        return $this->smoke;
	}

	
	public function getCarName()
	{

        return $this->car_name;
	}

	
	public function getCarModel()
	{

        return $this->car_model;
	}

	
	public function getCarYear()
	{

        return $this->car_year;
	}

	
	public function getCarDescription()
	{

        return $this->car_description;
	}

	
	public function getBankName()
	{

        return $this->bank_name;
	}

	
	public function getBankBranch()
	{

        return $this->bank_branch;
	}

	
	public function getBankCode()
	{

        return $this->bank_code;
	}

	
	public function getBankOwner()
	{

        return $this->bank_owner;
	}

	
	public function getPaypal()
	{

        return $this->paypal;
	}

	
	public function getMusic()
	{

        return $this->music;
	}

	
	public function getInterest()
	{

        return $this->interest;
	}

	
	public function getWork()
	{

        return $this->work;
	}

	
	public function getEducation()
	{

        return $this->education;
	}

	
	public function getLocation()
	{

        return $this->location;
	}

	
	public function getMarried()
	{

        return $this->married;
	}

	
	public function getDob($format = 'Y-m-d')
	{

		if ($this->dob === null || $this->dob === '') {
			return null;
		} elseif (!is_int($this->dob)) {
						$ts = strtotime($this->dob);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [dob] as date/time value: " . var_export($this->dob, true));
			}
		} else {
			$ts = $this->dob;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getInviteUser()
	{

        return $this->invite_user;
	}

	
	public function getInviteTime($format = 'Y-m-d H:i:s')
	{

		if ($this->invite_time === null || $this->invite_time === '') {
			return null;
		} elseif (!is_int($this->invite_time)) {
						$ts = strtotime($this->invite_time);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [invite_time] as date/time value: " . var_export($this->invite_time, true));
			}
		} else {
			$ts = $this->invite_time;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDomain()
	{

        return $this->domain;
	}

	
	public function getResponsibility()
	{

        return $this->responsibility;
	}

	
	public function getFbUid()
	{

        return $this->fb_uid;
	}

	
	public function getFbUsername()
	{

        return $this->fb_username;
	}

	
	public function getFbUrl()
	{

        return $this->fb_url;
	}

	
	public function getFbSpic()
	{

        return $this->fb_spic;
	}

	
	public function getFbLpic()
	{

        return $this->fb_lpic;
	}

	
	public function getFbFriendCount()
	{

        return $this->fb_friend_count;
	}

	
	public function getGooglePlusUrl()
	{

        return $this->google_plus_url;
	}

	
	public function getZingUrl()
	{

        return $this->zing_url;
	}

	
	public function getSkypeUrl()
	{

        return $this->skype_url;
	}

	
	public function getYahooUrl()
	{

        return $this->yahoo_url;
	}

	
	public function getEmailToken()
	{

        return $this->email_token;
	}

	
	public function getSlug()
	{

        return $this->slug;
	}

	
	public function getJobId()
	{

        return $this->job_id;
	}

	
	public function getOldRangeId()
	{

        return $this->old_range_id;
	}

	
	public function getReceiveBookRequireEmail()
	{

        return $this->receive_book_require_email;
	}

	
	public function getReceiveBookRequireSms()
	{

        return $this->receive_book_require_sms;
	}

	
	public function getReceiveBookerInfoEmail()
	{

        return $this->receive_booker_info_email;
	}

	
	public function getReceiveBookerInfoSms()
	{

        return $this->receive_booker_info_sms;
	}

	
	public function getReceiveCommentEmail()
	{

        return $this->receive_comment_email;
	}

	
	public function getReceiveCommentSms()
	{

        return $this->receive_comment_sms;
	}

	
	public function getReceiveFinishEmail()
	{

        return $this->receive_finish_email;
	}

	
	public function getReceiveFinishSms()
	{

        return $this->receive_finish_sms;
	}

	
	public function getReceiveMatchingEmail()
	{

        return $this->receive_matching_email;
	}

	
	public function getReceiveMatchingSms()
	{

        return $this->receive_matching_sms;
	}

	
	public function getContact()
	{

        return $this->contact;
	}

	
	public function getPublicEmailPhone()
	{

        return $this->public_email_phone;
	}

	
	public function getPublicEmail()
	{

        return $this->public_email;
	}

	
	public function getPublicPhone()
	{

        return $this->public_phone;
	}

	
	public function getImageVerify()
	{

        return $this->image_verify;
	}

	
	public function getVerifiedImage()
	{

        return $this->verified_image;
	}

	
	public function getDriveLicense()
	{

        return $this->drive_license;
	}

	
	public function getVerifiedDriveLicense()
	{

        return $this->verified_drive_license;
	}

	
	public function getTrafficLaw()
	{

        return $this->traffic_law;
	}

	
	public function getPoint()
	{

        return $this->point;
	}

	
	public function getPointLevelId()
	{

        return $this->point_level_id;
	}

	
	public function getOverallScore()
	{

        return $this->overall_score;
	}

	
	public function getAuthenticity()
	{

        return $this->authenticity;
	}

	
	public function getNetworkQuality()
	{

        return $this->network_quality;
	}

	
	public function getFinancialCredibility()
	{

        return $this->financial_credibility;
	}

	
	public function getLikeQuestion()
	{

        return $this->like_question;
	}

	
	public function getAnswerQuestion()
	{

        return $this->answer_question;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DichungUserPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v || $v === 1) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setUserTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_type_id !== $v || $v === 1) {
			$this->user_type_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::USER_TYPE_ID;
		}

		if ($this->aUserType !== null && $this->aUserType->getId() !== $v) {
			$this->aUserType = null;
		}

	} 
	
	public function setFullname($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fullname !== $v) {
			$this->fullname = $v;
			$this->modifiedColumns[] = DichungUserPeer::FULLNAME;
		}

	} 
	
	public function setPassword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v) {
			$this->password = $v;
			$this->modifiedColumns[] = DichungUserPeer::PASSWORD;
		}

	} 
	
	public function setMd5Password($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->md5_password !== $v) {
			$this->md5_password = $v;
			$this->modifiedColumns[] = DichungUserPeer::MD5_PASSWORD;
		}

	} 
	
	public function setActive($v)
	{

		if ($this->active !== $v || $v === false) {
			$this->active = $v;
			$this->modifiedColumns[] = DichungUserPeer::ACTIVE;
		}

	} 
	
	public function setLocked($v)
	{

		if ($this->locked !== $v || $v === false) {
			$this->locked = $v;
			$this->modifiedColumns[] = DichungUserPeer::LOCKED;
		}

	} 
	
	public function setEmail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = DichungUserPeer::EMAIL;
		}

	} 
	
	public function setPhoneNumber($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone_number !== $v) {
			$this->phone_number = $v;
			$this->modifiedColumns[] = DichungUserPeer::PHONE_NUMBER;
		}

	} 
	
	public function setHotline($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hotline !== $v) {
			$this->hotline = $v;
			$this->modifiedColumns[] = DichungUserPeer::HOTLINE;
		}

	} 
	
	public function setWebsite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->website !== $v) {
			$this->website = $v;
			$this->modifiedColumns[] = DichungUserPeer::WEBSITE;
		}

	} 
	
	public function setFax($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = DichungUserPeer::FAX;
		}

	} 
	
	public function setVehicleId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->vehicle_id !== $v || $v === 0) {
			$this->vehicle_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::VEHICLE_ID;
		}

	} 
	
	public function setVerifiedPhone($v)
	{

		if ($this->verified_phone !== $v || $v === false) {
			$this->verified_phone = $v;
			$this->modifiedColumns[] = DichungUserPeer::VERIFIED_PHONE;
		}

	} 
	
	public function setVerifiedEmail($v)
	{

		if ($this->verified_email !== $v || $v === false) {
			$this->verified_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::VERIFIED_EMAIL;
		}

	} 
	
	public function setAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = DichungUserPeer::ADDRESS;
		}

	} 
	
	public function setXang($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->xang !== $v || $v === '1000') {
			$this->xang = $v;
			$this->modifiedColumns[] = DichungUserPeer::XANG;
		}

	} 
	
	public function setAwardXang($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->award_xang !== $v || $v === '0') {
			$this->award_xang = $v;
			$this->modifiedColumns[] = DichungUserPeer::AWARD_XANG;
		}

	} 
	
	public function setAnnouncement($v)
	{

		if ($this->announcement !== $v || $v === true) {
			$this->announcement = $v;
			$this->modifiedColumns[] = DichungUserPeer::ANNOUNCEMENT;
		}

	} 
	
	public function setGender($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->gender !== $v || $v === 1) {
			$this->gender = $v;
			$this->modifiedColumns[] = DichungUserPeer::GENDER;
		}

	} 
	
	public function setSurvey($v)
	{

		if ($this->survey !== $v || $v === true) {
			$this->survey = $v;
			$this->modifiedColumns[] = DichungUserPeer::SURVEY;
		}

	} 
	
	public function setAvatar($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->avatar !== $v || $v === '/uploads/avatar/avatar.png') {
			$this->avatar = $v;
			$this->modifiedColumns[] = DichungUserPeer::AVATAR;
		}

	} 
	
	public function setCarAvatar($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_avatar !== $v) {
			$this->car_avatar = $v;
			$this->modifiedColumns[] = DichungUserPeer::CAR_AVATAR;
		}

	} 
	
	public function setAbout($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->about !== $v) {
			$this->about = $v;
			$this->modifiedColumns[] = DichungUserPeer::ABOUT;
		}

	} 
	
	public function setSmoke($v)
	{

		if ($this->smoke !== $v || $v === false) {
			$this->smoke = $v;
			$this->modifiedColumns[] = DichungUserPeer::SMOKE;
		}

	} 
	
	public function setCarName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_name !== $v) {
			$this->car_name = $v;
			$this->modifiedColumns[] = DichungUserPeer::CAR_NAME;
		}

	} 
	
	public function setCarModel($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_model !== $v) {
			$this->car_model = $v;
			$this->modifiedColumns[] = DichungUserPeer::CAR_MODEL;
		}

	} 
	
	public function setCarYear($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_year !== $v) {
			$this->car_year = $v;
			$this->modifiedColumns[] = DichungUserPeer::CAR_YEAR;
		}

	} 
	
	public function setCarDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->car_description !== $v) {
			$this->car_description = $v;
			$this->modifiedColumns[] = DichungUserPeer::CAR_DESCRIPTION;
		}

	} 
	
	public function setBankName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank_name !== $v) {
			$this->bank_name = $v;
			$this->modifiedColumns[] = DichungUserPeer::BANK_NAME;
		}

	} 
	
	public function setBankBranch($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank_branch !== $v) {
			$this->bank_branch = $v;
			$this->modifiedColumns[] = DichungUserPeer::BANK_BRANCH;
		}

	} 
	
	public function setBankCode($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank_code !== $v) {
			$this->bank_code = $v;
			$this->modifiedColumns[] = DichungUserPeer::BANK_CODE;
		}

	} 
	
	public function setBankOwner($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->bank_owner !== $v) {
			$this->bank_owner = $v;
			$this->modifiedColumns[] = DichungUserPeer::BANK_OWNER;
		}

	} 
	
	public function setPaypal($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->paypal !== $v) {
			$this->paypal = $v;
			$this->modifiedColumns[] = DichungUserPeer::PAYPAL;
		}

	} 
	
	public function setMusic($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->music !== $v) {
			$this->music = $v;
			$this->modifiedColumns[] = DichungUserPeer::MUSIC;
		}

	} 
	
	public function setInterest($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->interest !== $v) {
			$this->interest = $v;
			$this->modifiedColumns[] = DichungUserPeer::INTEREST;
		}

	} 
	
	public function setWork($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->work !== $v) {
			$this->work = $v;
			$this->modifiedColumns[] = DichungUserPeer::WORK;
		}

	} 
	
	public function setEducation($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->education !== $v) {
			$this->education = $v;
			$this->modifiedColumns[] = DichungUserPeer::EDUCATION;
		}

	} 
	
	public function setLocation($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->location !== $v) {
			$this->location = $v;
			$this->modifiedColumns[] = DichungUserPeer::LOCATION;
		}

	} 
	
	public function setMarried($v)
	{

		if ($this->married !== $v || $v === true) {
			$this->married = $v;
			$this->modifiedColumns[] = DichungUserPeer::MARRIED;
		}

	} 
	
	public function setDob($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [dob] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->dob !== $ts) {
			$this->dob = $ts;
			$this->modifiedColumns[] = DichungUserPeer::DOB;
		}

	} 
	
	public function setInviteUser($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->invite_user !== $v) {
			$this->invite_user = $v;
			$this->modifiedColumns[] = DichungUserPeer::INVITE_USER;
		}

	} 
	
	public function setInviteTime($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [invite_time] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->invite_time !== $ts) {
			$this->invite_time = $ts;
			$this->modifiedColumns[] = DichungUserPeer::INVITE_TIME;
		}

	} 
	
	public function setDomain($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->domain !== $v) {
			$this->domain = $v;
			$this->modifiedColumns[] = DichungUserPeer::DOMAIN;
		}

	} 
	
	public function setResponsibility($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->responsibility !== $v) {
			$this->responsibility = $v;
			$this->modifiedColumns[] = DichungUserPeer::RESPONSIBILITY;
		}

	} 
	
	public function setFbUid($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fb_uid !== $v) {
			$this->fb_uid = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_UID;
		}

	} 
	
	public function setFbUsername($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fb_username !== $v) {
			$this->fb_username = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_USERNAME;
		}

	} 
	
	public function setFbUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fb_url !== $v) {
			$this->fb_url = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_URL;
		}

	} 
	
	public function setFbSpic($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fb_spic !== $v) {
			$this->fb_spic = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_SPIC;
		}

	} 
	
	public function setFbLpic($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->fb_lpic !== $v) {
			$this->fb_lpic = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_LPIC;
		}

	} 
	
	public function setFbFriendCount($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->fb_friend_count !== $v || $v === 0) {
			$this->fb_friend_count = $v;
			$this->modifiedColumns[] = DichungUserPeer::FB_FRIEND_COUNT;
		}

	} 
	
	public function setGooglePlusUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_plus_url !== $v) {
			$this->google_plus_url = $v;
			$this->modifiedColumns[] = DichungUserPeer::GOOGLE_PLUS_URL;
		}

	} 
	
	public function setZingUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->zing_url !== $v) {
			$this->zing_url = $v;
			$this->modifiedColumns[] = DichungUserPeer::ZING_URL;
		}

	} 
	
	public function setSkypeUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->skype_url !== $v) {
			$this->skype_url = $v;
			$this->modifiedColumns[] = DichungUserPeer::SKYPE_URL;
		}

	} 
	
	public function setYahooUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->yahoo_url !== $v) {
			$this->yahoo_url = $v;
			$this->modifiedColumns[] = DichungUserPeer::YAHOO_URL;
		}

	} 
	
	public function setEmailToken($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->email_token !== $v) {
			$this->email_token = $v;
			$this->modifiedColumns[] = DichungUserPeer::EMAIL_TOKEN;
		}

	} 
	
	public function setSlug($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->slug !== $v) {
			$this->slug = $v;
			$this->modifiedColumns[] = DichungUserPeer::SLUG;
		}

	} 
	
	public function setJobId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->job_id !== $v) {
			$this->job_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::JOB_ID;
		}

		if ($this->aJob !== null && $this->aJob->getId() !== $v) {
			$this->aJob = null;
		}

	} 
	
	public function setOldRangeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->old_range_id !== $v) {
			$this->old_range_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::OLD_RANGE_ID;
		}

		if ($this->aOldRange !== null && $this->aOldRange->getId() !== $v) {
			$this->aOldRange = null;
		}

	} 
	
	public function setReceiveBookRequireEmail($v)
	{

		if ($this->receive_book_require_email !== $v || $v === false) {
			$this->receive_book_require_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL;
		}

	} 
	
	public function setReceiveBookRequireSms($v)
	{

		if ($this->receive_book_require_sms !== $v || $v === true) {
			$this->receive_book_require_sms = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS;
		}

	} 
	
	public function setReceiveBookerInfoEmail($v)
	{

		if ($this->receive_booker_info_email !== $v || $v === false) {
			$this->receive_booker_info_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL;
		}

	} 
	
	public function setReceiveBookerInfoSms($v)
	{

		if ($this->receive_booker_info_sms !== $v || $v === true) {
			$this->receive_booker_info_sms = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_BOOKER_INFO_SMS;
		}

	} 
	
	public function setReceiveCommentEmail($v)
	{

		if ($this->receive_comment_email !== $v || $v === true) {
			$this->receive_comment_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_COMMENT_EMAIL;
		}

	} 
	
	public function setReceiveCommentSms($v)
	{

		if ($this->receive_comment_sms !== $v || $v === true) {
			$this->receive_comment_sms = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_COMMENT_SMS;
		}

	} 
	
	public function setReceiveFinishEmail($v)
	{

		if ($this->receive_finish_email !== $v || $v === true) {
			$this->receive_finish_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_FINISH_EMAIL;
		}

	} 
	
	public function setReceiveFinishSms($v)
	{

		if ($this->receive_finish_sms !== $v || $v === true) {
			$this->receive_finish_sms = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_FINISH_SMS;
		}

	} 
	
	public function setReceiveMatchingEmail($v)
	{

		if ($this->receive_matching_email !== $v || $v === true) {
			$this->receive_matching_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_MATCHING_EMAIL;
		}

	} 
	
	public function setReceiveMatchingSms($v)
	{

		if ($this->receive_matching_sms !== $v || $v === true) {
			$this->receive_matching_sms = $v;
			$this->modifiedColumns[] = DichungUserPeer::RECEIVE_MATCHING_SMS;
		}

	} 
	
	public function setContact($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->contact !== $v) {
			$this->contact = $v;
			$this->modifiedColumns[] = DichungUserPeer::CONTACT;
		}

	} 
	
	public function setPublicEmailPhone($v)
	{

		if ($this->public_email_phone !== $v || $v === false) {
			$this->public_email_phone = $v;
			$this->modifiedColumns[] = DichungUserPeer::PUBLIC_EMAIL_PHONE;
		}

	} 
	
	public function setPublicEmail($v)
	{

		if ($this->public_email !== $v || $v === false) {
			$this->public_email = $v;
			$this->modifiedColumns[] = DichungUserPeer::PUBLIC_EMAIL;
		}

	} 
	
	public function setPublicPhone($v)
	{

		if ($this->public_phone !== $v || $v === false) {
			$this->public_phone = $v;
			$this->modifiedColumns[] = DichungUserPeer::PUBLIC_PHONE;
		}

	} 
	
	public function setImageVerify($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image_verify !== $v) {
			$this->image_verify = $v;
			$this->modifiedColumns[] = DichungUserPeer::IMAGE_VERIFY;
		}

	} 
	
	public function setVerifiedImage($v)
	{

		if ($this->verified_image !== $v || $v === false) {
			$this->verified_image = $v;
			$this->modifiedColumns[] = DichungUserPeer::VERIFIED_IMAGE;
		}

	} 
	
	public function setDriveLicense($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->drive_license !== $v) {
			$this->drive_license = $v;
			$this->modifiedColumns[] = DichungUserPeer::DRIVE_LICENSE;
		}

	} 
	
	public function setVerifiedDriveLicense($v)
	{

		if ($this->verified_drive_license !== $v || $v === false) {
			$this->verified_drive_license = $v;
			$this->modifiedColumns[] = DichungUserPeer::VERIFIED_DRIVE_LICENSE;
		}

	} 
	
	public function setTrafficLaw($v)
	{

		if ($this->traffic_law !== $v || $v === false) {
			$this->traffic_law = $v;
			$this->modifiedColumns[] = DichungUserPeer::TRAFFIC_LAW;
		}

	} 
	
	public function setPoint($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->point !== $v || $v === 0) {
			$this->point = $v;
			$this->modifiedColumns[] = DichungUserPeer::POINT;
		}

	} 
	
	public function setPointLevelId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->point_level_id !== $v || $v === 1) {
			$this->point_level_id = $v;
			$this->modifiedColumns[] = DichungUserPeer::POINT_LEVEL_ID;
		}

		if ($this->aPointLevel !== null && $this->aPointLevel->getId() !== $v) {
			$this->aPointLevel = null;
		}

	} 
	
	public function setOverallScore($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->overall_score !== $v || $v === '0') {
			$this->overall_score = $v;
			$this->modifiedColumns[] = DichungUserPeer::OVERALL_SCORE;
		}

	} 
	
	public function setAuthenticity($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->authenticity !== $v || $v === '0') {
			$this->authenticity = $v;
			$this->modifiedColumns[] = DichungUserPeer::AUTHENTICITY;
		}

	} 
	
	public function setNetworkQuality($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->network_quality !== $v || $v === '0') {
			$this->network_quality = $v;
			$this->modifiedColumns[] = DichungUserPeer::NETWORK_QUALITY;
		}

	} 
	
	public function setFinancialCredibility($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->financial_credibility !== $v || $v === '0') {
			$this->financial_credibility = $v;
			$this->modifiedColumns[] = DichungUserPeer::FINANCIAL_CREDIBILITY;
		}

	} 
	
	public function setLikeQuestion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->like_question !== $v || $v === 0) {
			$this->like_question = $v;
			$this->modifiedColumns[] = DichungUserPeer::LIKE_QUESTION;
		}

	} 
	
	public function setAnswerQuestion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->answer_question !== $v || $v === 0) {
			$this->answer_question = $v;
			$this->modifiedColumns[] = DichungUserPeer::ANSWER_QUESTION;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = DichungUserPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = DichungUserPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->user_type_id = $rs->getInt($startcol + 2);

			$this->fullname = $rs->getString($startcol + 3);

			$this->password = $rs->getString($startcol + 4);

			$this->md5_password = $rs->getString($startcol + 5);

			$this->active = $rs->getBoolean($startcol + 6);

			$this->locked = $rs->getBoolean($startcol + 7);

			$this->email = $rs->getString($startcol + 8);

			$this->phone_number = $rs->getString($startcol + 9);

			$this->hotline = $rs->getString($startcol + 10);

			$this->website = $rs->getString($startcol + 11);

			$this->fax = $rs->getString($startcol + 12);

			$this->vehicle_id = $rs->getInt($startcol + 13);

			$this->verified_phone = $rs->getBoolean($startcol + 14);

			$this->verified_email = $rs->getBoolean($startcol + 15);

			$this->address = $rs->getString($startcol + 16);

			$this->xang = $rs->getString($startcol + 17);

			$this->award_xang = $rs->getString($startcol + 18);

			$this->announcement = $rs->getBoolean($startcol + 19);

			$this->gender = $rs->getInt($startcol + 20);

			$this->survey = $rs->getBoolean($startcol + 21);

			$this->avatar = $rs->getString($startcol + 22);

			$this->car_avatar = $rs->getString($startcol + 23);

			$this->about = $rs->getString($startcol + 24);

			$this->smoke = $rs->getBoolean($startcol + 25);

			$this->car_name = $rs->getString($startcol + 26);

			$this->car_model = $rs->getString($startcol + 27);

			$this->car_year = $rs->getString($startcol + 28);

			$this->car_description = $rs->getString($startcol + 29);

			$this->bank_name = $rs->getString($startcol + 30);

			$this->bank_branch = $rs->getString($startcol + 31);

			$this->bank_code = $rs->getString($startcol + 32);

			$this->bank_owner = $rs->getString($startcol + 33);

			$this->paypal = $rs->getString($startcol + 34);

			$this->music = $rs->getString($startcol + 35);

			$this->interest = $rs->getString($startcol + 36);

			$this->work = $rs->getString($startcol + 37);

			$this->education = $rs->getString($startcol + 38);

			$this->location = $rs->getString($startcol + 39);

			$this->married = $rs->getBoolean($startcol + 40);

			$this->dob = $rs->getDate($startcol + 41, null);

			$this->invite_user = $rs->getInt($startcol + 42);

			$this->invite_time = $rs->getTimestamp($startcol + 43, null);

			$this->domain = $rs->getString($startcol + 44);

			$this->responsibility = $rs->getInt($startcol + 45);

			$this->fb_uid = $rs->getString($startcol + 46);

			$this->fb_username = $rs->getString($startcol + 47);

			$this->fb_url = $rs->getString($startcol + 48);

			$this->fb_spic = $rs->getString($startcol + 49);

			$this->fb_lpic = $rs->getString($startcol + 50);

			$this->fb_friend_count = $rs->getInt($startcol + 51);

			$this->google_plus_url = $rs->getString($startcol + 52);

			$this->zing_url = $rs->getString($startcol + 53);

			$this->skype_url = $rs->getString($startcol + 54);

			$this->yahoo_url = $rs->getString($startcol + 55);

			$this->email_token = $rs->getString($startcol + 56);

			$this->slug = $rs->getString($startcol + 57);

			$this->job_id = $rs->getInt($startcol + 58);

			$this->old_range_id = $rs->getInt($startcol + 59);

			$this->receive_book_require_email = $rs->getBoolean($startcol + 60);

			$this->receive_book_require_sms = $rs->getBoolean($startcol + 61);

			$this->receive_booker_info_email = $rs->getBoolean($startcol + 62);

			$this->receive_booker_info_sms = $rs->getBoolean($startcol + 63);

			$this->receive_comment_email = $rs->getBoolean($startcol + 64);

			$this->receive_comment_sms = $rs->getBoolean($startcol + 65);

			$this->receive_finish_email = $rs->getBoolean($startcol + 66);

			$this->receive_finish_sms = $rs->getBoolean($startcol + 67);

			$this->receive_matching_email = $rs->getBoolean($startcol + 68);

			$this->receive_matching_sms = $rs->getBoolean($startcol + 69);

			$this->contact = $rs->getString($startcol + 70);

			$this->public_email_phone = $rs->getBoolean($startcol + 71);

			$this->public_email = $rs->getBoolean($startcol + 72);

			$this->public_phone = $rs->getBoolean($startcol + 73);

			$this->image_verify = $rs->getString($startcol + 74);

			$this->verified_image = $rs->getBoolean($startcol + 75);

			$this->drive_license = $rs->getString($startcol + 76);

			$this->verified_drive_license = $rs->getBoolean($startcol + 77);

			$this->traffic_law = $rs->getBoolean($startcol + 78);

			$this->point = $rs->getInt($startcol + 79);

			$this->point_level_id = $rs->getInt($startcol + 80);

			$this->overall_score = $rs->getString($startcol + 81);

			$this->authenticity = $rs->getString($startcol + 82);

			$this->network_quality = $rs->getString($startcol + 83);

			$this->financial_credibility = $rs->getString($startcol + 84);

			$this->like_question = $rs->getInt($startcol + 85);

			$this->answer_question = $rs->getInt($startcol + 86);

			$this->created_at = $rs->getTimestamp($startcol + 87, null);

			$this->updated_at = $rs->getTimestamp($startcol + 88, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 89; 
		} catch (Exception $e) {
			throw new PropelException("Error populating DichungUser object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DichungUserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			DichungUserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(DichungUserPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(DichungUserPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DichungUserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


												
			if ($this->aPartner !== null) {
				if ($this->aPartner->isModified()) {
					$affectedRows += $this->aPartner->save($con);
				}
				$this->setPartner($this->aPartner);
			}

			if ($this->aUserType !== null) {
				if ($this->aUserType->isModified()) {
					$affectedRows += $this->aUserType->save($con);
				}
				$this->setUserType($this->aUserType);
			}

			if ($this->aJob !== null) {
				if ($this->aJob->isModified()) {
					$affectedRows += $this->aJob->save($con);
				}
				$this->setJob($this->aJob);
			}

			if ($this->aOldRange !== null) {
				if ($this->aOldRange->isModified()) {
					$affectedRows += $this->aOldRange->save($con);
				}
				$this->setOldRange($this->aOldRange);
			}

			if ($this->aPointLevel !== null) {
				if ($this->aPointLevel->isModified()) {
					$affectedRows += $this->aPointLevel->save($con);
				}
				$this->setPointLevel($this->aPointLevel);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = DichungUserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += DichungUserPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDetails !== null) {
				foreach($this->collTourDetails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBookingTours !== null) {
				foreach($this->collBookingTours as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNotifications !== null) {
				foreach($this->collNotifications as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collMessages !== null) {
				foreach($this->collMessages as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTripExperiences !== null) {
				foreach($this->collTripExperiences as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentTours !== null) {
				foreach($this->collCommentTours as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentExperiences !== null) {
				foreach($this->collCommentExperiences as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentAcquirementss !== null) {
				foreach($this->collCommentAcquirementss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserSendVerifyInfos !== null) {
				foreach($this->collUserSendVerifyInfos as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTripAcquirementss !== null) {
				foreach($this->collTripAcquirementss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collQuestions !== null) {
				foreach($this->collQuestions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collQuestionAnswers !== null) {
				foreach($this->collQuestionAnswers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


												
			if ($this->aPartner !== null) {
				if (!$this->aPartner->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPartner->getValidationFailures());
				}
			}

			if ($this->aUserType !== null) {
				if (!$this->aUserType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUserType->getValidationFailures());
				}
			}

			if ($this->aJob !== null) {
				if (!$this->aJob->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aJob->getValidationFailures());
				}
			}

			if ($this->aOldRange !== null) {
				if (!$this->aOldRange->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aOldRange->getValidationFailures());
				}
			}

			if ($this->aPointLevel !== null) {
				if (!$this->aPointLevel->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPointLevel->getValidationFailures());
				}
			}


			if (($retval = DichungUserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDetails !== null) {
					foreach($this->collTourDetails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBookingTours !== null) {
					foreach($this->collBookingTours as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNotifications !== null) {
					foreach($this->collNotifications as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collMessages !== null) {
					foreach($this->collMessages as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTripExperiences !== null) {
					foreach($this->collTripExperiences as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentTours !== null) {
					foreach($this->collCommentTours as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentExperiences !== null) {
					foreach($this->collCommentExperiences as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentAcquirementss !== null) {
					foreach($this->collCommentAcquirementss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserSendVerifyInfos !== null) {
					foreach($this->collUserSendVerifyInfos as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTripAcquirementss !== null) {
					foreach($this->collTripAcquirementss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collQuestions !== null) {
					foreach($this->collQuestions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collQuestionAnswers !== null) {
					foreach($this->collQuestionAnswers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DichungUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPartnerId();
				break;
			case 2:
				return $this->getUserTypeId();
				break;
			case 3:
				return $this->getFullname();
				break;
			case 4:
				return $this->getPassword();
				break;
			case 5:
				return $this->getMd5Password();
				break;
			case 6:
				return $this->getActive();
				break;
			case 7:
				return $this->getLocked();
				break;
			case 8:
				return $this->getEmail();
				break;
			case 9:
				return $this->getPhoneNumber();
				break;
			case 10:
				return $this->getHotline();
				break;
			case 11:
				return $this->getWebsite();
				break;
			case 12:
				return $this->getFax();
				break;
			case 13:
				return $this->getVehicleId();
				break;
			case 14:
				return $this->getVerifiedPhone();
				break;
			case 15:
				return $this->getVerifiedEmail();
				break;
			case 16:
				return $this->getAddress();
				break;
			case 17:
				return $this->getXang();
				break;
			case 18:
				return $this->getAwardXang();
				break;
			case 19:
				return $this->getAnnouncement();
				break;
			case 20:
				return $this->getGender();
				break;
			case 21:
				return $this->getSurvey();
				break;
			case 22:
				return $this->getAvatar();
				break;
			case 23:
				return $this->getCarAvatar();
				break;
			case 24:
				return $this->getAbout();
				break;
			case 25:
				return $this->getSmoke();
				break;
			case 26:
				return $this->getCarName();
				break;
			case 27:
				return $this->getCarModel();
				break;
			case 28:
				return $this->getCarYear();
				break;
			case 29:
				return $this->getCarDescription();
				break;
			case 30:
				return $this->getBankName();
				break;
			case 31:
				return $this->getBankBranch();
				break;
			case 32:
				return $this->getBankCode();
				break;
			case 33:
				return $this->getBankOwner();
				break;
			case 34:
				return $this->getPaypal();
				break;
			case 35:
				return $this->getMusic();
				break;
			case 36:
				return $this->getInterest();
				break;
			case 37:
				return $this->getWork();
				break;
			case 38:
				return $this->getEducation();
				break;
			case 39:
				return $this->getLocation();
				break;
			case 40:
				return $this->getMarried();
				break;
			case 41:
				return $this->getDob();
				break;
			case 42:
				return $this->getInviteUser();
				break;
			case 43:
				return $this->getInviteTime();
				break;
			case 44:
				return $this->getDomain();
				break;
			case 45:
				return $this->getResponsibility();
				break;
			case 46:
				return $this->getFbUid();
				break;
			case 47:
				return $this->getFbUsername();
				break;
			case 48:
				return $this->getFbUrl();
				break;
			case 49:
				return $this->getFbSpic();
				break;
			case 50:
				return $this->getFbLpic();
				break;
			case 51:
				return $this->getFbFriendCount();
				break;
			case 52:
				return $this->getGooglePlusUrl();
				break;
			case 53:
				return $this->getZingUrl();
				break;
			case 54:
				return $this->getSkypeUrl();
				break;
			case 55:
				return $this->getYahooUrl();
				break;
			case 56:
				return $this->getEmailToken();
				break;
			case 57:
				return $this->getSlug();
				break;
			case 58:
				return $this->getJobId();
				break;
			case 59:
				return $this->getOldRangeId();
				break;
			case 60:
				return $this->getReceiveBookRequireEmail();
				break;
			case 61:
				return $this->getReceiveBookRequireSms();
				break;
			case 62:
				return $this->getReceiveBookerInfoEmail();
				break;
			case 63:
				return $this->getReceiveBookerInfoSms();
				break;
			case 64:
				return $this->getReceiveCommentEmail();
				break;
			case 65:
				return $this->getReceiveCommentSms();
				break;
			case 66:
				return $this->getReceiveFinishEmail();
				break;
			case 67:
				return $this->getReceiveFinishSms();
				break;
			case 68:
				return $this->getReceiveMatchingEmail();
				break;
			case 69:
				return $this->getReceiveMatchingSms();
				break;
			case 70:
				return $this->getContact();
				break;
			case 71:
				return $this->getPublicEmailPhone();
				break;
			case 72:
				return $this->getPublicEmail();
				break;
			case 73:
				return $this->getPublicPhone();
				break;
			case 74:
				return $this->getImageVerify();
				break;
			case 75:
				return $this->getVerifiedImage();
				break;
			case 76:
				return $this->getDriveLicense();
				break;
			case 77:
				return $this->getVerifiedDriveLicense();
				break;
			case 78:
				return $this->getTrafficLaw();
				break;
			case 79:
				return $this->getPoint();
				break;
			case 80:
				return $this->getPointLevelId();
				break;
			case 81:
				return $this->getOverallScore();
				break;
			case 82:
				return $this->getAuthenticity();
				break;
			case 83:
				return $this->getNetworkQuality();
				break;
			case 84:
				return $this->getFinancialCredibility();
				break;
			case 85:
				return $this->getLikeQuestion();
				break;
			case 86:
				return $this->getAnswerQuestion();
				break;
			case 87:
				return $this->getCreatedAt();
				break;
			case 88:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DichungUserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getUserTypeId(),
			$keys[3] => $this->getFullname(),
			$keys[4] => $this->getPassword(),
			$keys[5] => $this->getMd5Password(),
			$keys[6] => $this->getActive(),
			$keys[7] => $this->getLocked(),
			$keys[8] => $this->getEmail(),
			$keys[9] => $this->getPhoneNumber(),
			$keys[10] => $this->getHotline(),
			$keys[11] => $this->getWebsite(),
			$keys[12] => $this->getFax(),
			$keys[13] => $this->getVehicleId(),
			$keys[14] => $this->getVerifiedPhone(),
			$keys[15] => $this->getVerifiedEmail(),
			$keys[16] => $this->getAddress(),
			$keys[17] => $this->getXang(),
			$keys[18] => $this->getAwardXang(),
			$keys[19] => $this->getAnnouncement(),
			$keys[20] => $this->getGender(),
			$keys[21] => $this->getSurvey(),
			$keys[22] => $this->getAvatar(),
			$keys[23] => $this->getCarAvatar(),
			$keys[24] => $this->getAbout(),
			$keys[25] => $this->getSmoke(),
			$keys[26] => $this->getCarName(),
			$keys[27] => $this->getCarModel(),
			$keys[28] => $this->getCarYear(),
			$keys[29] => $this->getCarDescription(),
			$keys[30] => $this->getBankName(),
			$keys[31] => $this->getBankBranch(),
			$keys[32] => $this->getBankCode(),
			$keys[33] => $this->getBankOwner(),
			$keys[34] => $this->getPaypal(),
			$keys[35] => $this->getMusic(),
			$keys[36] => $this->getInterest(),
			$keys[37] => $this->getWork(),
			$keys[38] => $this->getEducation(),
			$keys[39] => $this->getLocation(),
			$keys[40] => $this->getMarried(),
			$keys[41] => $this->getDob(),
			$keys[42] => $this->getInviteUser(),
			$keys[43] => $this->getInviteTime(),
			$keys[44] => $this->getDomain(),
			$keys[45] => $this->getResponsibility(),
			$keys[46] => $this->getFbUid(),
			$keys[47] => $this->getFbUsername(),
			$keys[48] => $this->getFbUrl(),
			$keys[49] => $this->getFbSpic(),
			$keys[50] => $this->getFbLpic(),
			$keys[51] => $this->getFbFriendCount(),
			$keys[52] => $this->getGooglePlusUrl(),
			$keys[53] => $this->getZingUrl(),
			$keys[54] => $this->getSkypeUrl(),
			$keys[55] => $this->getYahooUrl(),
			$keys[56] => $this->getEmailToken(),
			$keys[57] => $this->getSlug(),
			$keys[58] => $this->getJobId(),
			$keys[59] => $this->getOldRangeId(),
			$keys[60] => $this->getReceiveBookRequireEmail(),
			$keys[61] => $this->getReceiveBookRequireSms(),
			$keys[62] => $this->getReceiveBookerInfoEmail(),
			$keys[63] => $this->getReceiveBookerInfoSms(),
			$keys[64] => $this->getReceiveCommentEmail(),
			$keys[65] => $this->getReceiveCommentSms(),
			$keys[66] => $this->getReceiveFinishEmail(),
			$keys[67] => $this->getReceiveFinishSms(),
			$keys[68] => $this->getReceiveMatchingEmail(),
			$keys[69] => $this->getReceiveMatchingSms(),
			$keys[70] => $this->getContact(),
			$keys[71] => $this->getPublicEmailPhone(),
			$keys[72] => $this->getPublicEmail(),
			$keys[73] => $this->getPublicPhone(),
			$keys[74] => $this->getImageVerify(),
			$keys[75] => $this->getVerifiedImage(),
			$keys[76] => $this->getDriveLicense(),
			$keys[77] => $this->getVerifiedDriveLicense(),
			$keys[78] => $this->getTrafficLaw(),
			$keys[79] => $this->getPoint(),
			$keys[80] => $this->getPointLevelId(),
			$keys[81] => $this->getOverallScore(),
			$keys[82] => $this->getAuthenticity(),
			$keys[83] => $this->getNetworkQuality(),
			$keys[84] => $this->getFinancialCredibility(),
			$keys[85] => $this->getLikeQuestion(),
			$keys[86] => $this->getAnswerQuestion(),
			$keys[87] => $this->getCreatedAt(),
			$keys[88] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DichungUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPartnerId($value);
				break;
			case 2:
				$this->setUserTypeId($value);
				break;
			case 3:
				$this->setFullname($value);
				break;
			case 4:
				$this->setPassword($value);
				break;
			case 5:
				$this->setMd5Password($value);
				break;
			case 6:
				$this->setActive($value);
				break;
			case 7:
				$this->setLocked($value);
				break;
			case 8:
				$this->setEmail($value);
				break;
			case 9:
				$this->setPhoneNumber($value);
				break;
			case 10:
				$this->setHotline($value);
				break;
			case 11:
				$this->setWebsite($value);
				break;
			case 12:
				$this->setFax($value);
				break;
			case 13:
				$this->setVehicleId($value);
				break;
			case 14:
				$this->setVerifiedPhone($value);
				break;
			case 15:
				$this->setVerifiedEmail($value);
				break;
			case 16:
				$this->setAddress($value);
				break;
			case 17:
				$this->setXang($value);
				break;
			case 18:
				$this->setAwardXang($value);
				break;
			case 19:
				$this->setAnnouncement($value);
				break;
			case 20:
				$this->setGender($value);
				break;
			case 21:
				$this->setSurvey($value);
				break;
			case 22:
				$this->setAvatar($value);
				break;
			case 23:
				$this->setCarAvatar($value);
				break;
			case 24:
				$this->setAbout($value);
				break;
			case 25:
				$this->setSmoke($value);
				break;
			case 26:
				$this->setCarName($value);
				break;
			case 27:
				$this->setCarModel($value);
				break;
			case 28:
				$this->setCarYear($value);
				break;
			case 29:
				$this->setCarDescription($value);
				break;
			case 30:
				$this->setBankName($value);
				break;
			case 31:
				$this->setBankBranch($value);
				break;
			case 32:
				$this->setBankCode($value);
				break;
			case 33:
				$this->setBankOwner($value);
				break;
			case 34:
				$this->setPaypal($value);
				break;
			case 35:
				$this->setMusic($value);
				break;
			case 36:
				$this->setInterest($value);
				break;
			case 37:
				$this->setWork($value);
				break;
			case 38:
				$this->setEducation($value);
				break;
			case 39:
				$this->setLocation($value);
				break;
			case 40:
				$this->setMarried($value);
				break;
			case 41:
				$this->setDob($value);
				break;
			case 42:
				$this->setInviteUser($value);
				break;
			case 43:
				$this->setInviteTime($value);
				break;
			case 44:
				$this->setDomain($value);
				break;
			case 45:
				$this->setResponsibility($value);
				break;
			case 46:
				$this->setFbUid($value);
				break;
			case 47:
				$this->setFbUsername($value);
				break;
			case 48:
				$this->setFbUrl($value);
				break;
			case 49:
				$this->setFbSpic($value);
				break;
			case 50:
				$this->setFbLpic($value);
				break;
			case 51:
				$this->setFbFriendCount($value);
				break;
			case 52:
				$this->setGooglePlusUrl($value);
				break;
			case 53:
				$this->setZingUrl($value);
				break;
			case 54:
				$this->setSkypeUrl($value);
				break;
			case 55:
				$this->setYahooUrl($value);
				break;
			case 56:
				$this->setEmailToken($value);
				break;
			case 57:
				$this->setSlug($value);
				break;
			case 58:
				$this->setJobId($value);
				break;
			case 59:
				$this->setOldRangeId($value);
				break;
			case 60:
				$this->setReceiveBookRequireEmail($value);
				break;
			case 61:
				$this->setReceiveBookRequireSms($value);
				break;
			case 62:
				$this->setReceiveBookerInfoEmail($value);
				break;
			case 63:
				$this->setReceiveBookerInfoSms($value);
				break;
			case 64:
				$this->setReceiveCommentEmail($value);
				break;
			case 65:
				$this->setReceiveCommentSms($value);
				break;
			case 66:
				$this->setReceiveFinishEmail($value);
				break;
			case 67:
				$this->setReceiveFinishSms($value);
				break;
			case 68:
				$this->setReceiveMatchingEmail($value);
				break;
			case 69:
				$this->setReceiveMatchingSms($value);
				break;
			case 70:
				$this->setContact($value);
				break;
			case 71:
				$this->setPublicEmailPhone($value);
				break;
			case 72:
				$this->setPublicEmail($value);
				break;
			case 73:
				$this->setPublicPhone($value);
				break;
			case 74:
				$this->setImageVerify($value);
				break;
			case 75:
				$this->setVerifiedImage($value);
				break;
			case 76:
				$this->setDriveLicense($value);
				break;
			case 77:
				$this->setVerifiedDriveLicense($value);
				break;
			case 78:
				$this->setTrafficLaw($value);
				break;
			case 79:
				$this->setPoint($value);
				break;
			case 80:
				$this->setPointLevelId($value);
				break;
			case 81:
				$this->setOverallScore($value);
				break;
			case 82:
				$this->setAuthenticity($value);
				break;
			case 83:
				$this->setNetworkQuality($value);
				break;
			case 84:
				$this->setFinancialCredibility($value);
				break;
			case 85:
				$this->setLikeQuestion($value);
				break;
			case 86:
				$this->setAnswerQuestion($value);
				break;
			case 87:
				$this->setCreatedAt($value);
				break;
			case 88:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DichungUserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserTypeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFullname($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPassword($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setMd5Password($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setActive($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLocked($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEmail($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPhoneNumber($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHotline($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setWebsite($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFax($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setVehicleId($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setVerifiedPhone($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setVerifiedEmail($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setAddress($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setXang($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setAwardXang($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setAnnouncement($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setGender($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setSurvey($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setAvatar($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCarAvatar($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setAbout($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setSmoke($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setCarName($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setCarModel($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCarYear($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setCarDescription($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setBankName($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setBankBranch($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setBankCode($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setBankOwner($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setPaypal($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setMusic($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setInterest($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setWork($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setEducation($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setLocation($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setMarried($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setDob($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setInviteUser($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setInviteTime($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setDomain($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setResponsibility($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setFbUid($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setFbUsername($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setFbUrl($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setFbSpic($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setFbLpic($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setFbFriendCount($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setGooglePlusUrl($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setZingUrl($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setSkypeUrl($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setYahooUrl($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setEmailToken($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setSlug($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setJobId($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setOldRangeId($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setReceiveBookRequireEmail($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setReceiveBookRequireSms($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setReceiveBookerInfoEmail($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setReceiveBookerInfoSms($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setReceiveCommentEmail($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setReceiveCommentSms($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setReceiveFinishEmail($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setReceiveFinishSms($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setReceiveMatchingEmail($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setReceiveMatchingSms($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setContact($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setPublicEmailPhone($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setPublicEmail($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setPublicPhone($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setImageVerify($arr[$keys[74]]);
		if (array_key_exists($keys[75], $arr)) $this->setVerifiedImage($arr[$keys[75]]);
		if (array_key_exists($keys[76], $arr)) $this->setDriveLicense($arr[$keys[76]]);
		if (array_key_exists($keys[77], $arr)) $this->setVerifiedDriveLicense($arr[$keys[77]]);
		if (array_key_exists($keys[78], $arr)) $this->setTrafficLaw($arr[$keys[78]]);
		if (array_key_exists($keys[79], $arr)) $this->setPoint($arr[$keys[79]]);
		if (array_key_exists($keys[80], $arr)) $this->setPointLevelId($arr[$keys[80]]);
		if (array_key_exists($keys[81], $arr)) $this->setOverallScore($arr[$keys[81]]);
		if (array_key_exists($keys[82], $arr)) $this->setAuthenticity($arr[$keys[82]]);
		if (array_key_exists($keys[83], $arr)) $this->setNetworkQuality($arr[$keys[83]]);
		if (array_key_exists($keys[84], $arr)) $this->setFinancialCredibility($arr[$keys[84]]);
		if (array_key_exists($keys[85], $arr)) $this->setLikeQuestion($arr[$keys[85]]);
		if (array_key_exists($keys[86], $arr)) $this->setAnswerQuestion($arr[$keys[86]]);
		if (array_key_exists($keys[87], $arr)) $this->setCreatedAt($arr[$keys[87]]);
		if (array_key_exists($keys[88], $arr)) $this->setUpdatedAt($arr[$keys[88]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(DichungUserPeer::DATABASE_NAME);

		if ($this->isColumnModified(DichungUserPeer::ID)) $criteria->add(DichungUserPeer::ID, $this->id);
		if ($this->isColumnModified(DichungUserPeer::PARTNER_ID)) $criteria->add(DichungUserPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(DichungUserPeer::USER_TYPE_ID)) $criteria->add(DichungUserPeer::USER_TYPE_ID, $this->user_type_id);
		if ($this->isColumnModified(DichungUserPeer::FULLNAME)) $criteria->add(DichungUserPeer::FULLNAME, $this->fullname);
		if ($this->isColumnModified(DichungUserPeer::PASSWORD)) $criteria->add(DichungUserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(DichungUserPeer::MD5_PASSWORD)) $criteria->add(DichungUserPeer::MD5_PASSWORD, $this->md5_password);
		if ($this->isColumnModified(DichungUserPeer::ACTIVE)) $criteria->add(DichungUserPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(DichungUserPeer::LOCKED)) $criteria->add(DichungUserPeer::LOCKED, $this->locked);
		if ($this->isColumnModified(DichungUserPeer::EMAIL)) $criteria->add(DichungUserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(DichungUserPeer::PHONE_NUMBER)) $criteria->add(DichungUserPeer::PHONE_NUMBER, $this->phone_number);
		if ($this->isColumnModified(DichungUserPeer::HOTLINE)) $criteria->add(DichungUserPeer::HOTLINE, $this->hotline);
		if ($this->isColumnModified(DichungUserPeer::WEBSITE)) $criteria->add(DichungUserPeer::WEBSITE, $this->website);
		if ($this->isColumnModified(DichungUserPeer::FAX)) $criteria->add(DichungUserPeer::FAX, $this->fax);
		if ($this->isColumnModified(DichungUserPeer::VEHICLE_ID)) $criteria->add(DichungUserPeer::VEHICLE_ID, $this->vehicle_id);
		if ($this->isColumnModified(DichungUserPeer::VERIFIED_PHONE)) $criteria->add(DichungUserPeer::VERIFIED_PHONE, $this->verified_phone);
		if ($this->isColumnModified(DichungUserPeer::VERIFIED_EMAIL)) $criteria->add(DichungUserPeer::VERIFIED_EMAIL, $this->verified_email);
		if ($this->isColumnModified(DichungUserPeer::ADDRESS)) $criteria->add(DichungUserPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(DichungUserPeer::XANG)) $criteria->add(DichungUserPeer::XANG, $this->xang);
		if ($this->isColumnModified(DichungUserPeer::AWARD_XANG)) $criteria->add(DichungUserPeer::AWARD_XANG, $this->award_xang);
		if ($this->isColumnModified(DichungUserPeer::ANNOUNCEMENT)) $criteria->add(DichungUserPeer::ANNOUNCEMENT, $this->announcement);
		if ($this->isColumnModified(DichungUserPeer::GENDER)) $criteria->add(DichungUserPeer::GENDER, $this->gender);
		if ($this->isColumnModified(DichungUserPeer::SURVEY)) $criteria->add(DichungUserPeer::SURVEY, $this->survey);
		if ($this->isColumnModified(DichungUserPeer::AVATAR)) $criteria->add(DichungUserPeer::AVATAR, $this->avatar);
		if ($this->isColumnModified(DichungUserPeer::CAR_AVATAR)) $criteria->add(DichungUserPeer::CAR_AVATAR, $this->car_avatar);
		if ($this->isColumnModified(DichungUserPeer::ABOUT)) $criteria->add(DichungUserPeer::ABOUT, $this->about);
		if ($this->isColumnModified(DichungUserPeer::SMOKE)) $criteria->add(DichungUserPeer::SMOKE, $this->smoke);
		if ($this->isColumnModified(DichungUserPeer::CAR_NAME)) $criteria->add(DichungUserPeer::CAR_NAME, $this->car_name);
		if ($this->isColumnModified(DichungUserPeer::CAR_MODEL)) $criteria->add(DichungUserPeer::CAR_MODEL, $this->car_model);
		if ($this->isColumnModified(DichungUserPeer::CAR_YEAR)) $criteria->add(DichungUserPeer::CAR_YEAR, $this->car_year);
		if ($this->isColumnModified(DichungUserPeer::CAR_DESCRIPTION)) $criteria->add(DichungUserPeer::CAR_DESCRIPTION, $this->car_description);
		if ($this->isColumnModified(DichungUserPeer::BANK_NAME)) $criteria->add(DichungUserPeer::BANK_NAME, $this->bank_name);
		if ($this->isColumnModified(DichungUserPeer::BANK_BRANCH)) $criteria->add(DichungUserPeer::BANK_BRANCH, $this->bank_branch);
		if ($this->isColumnModified(DichungUserPeer::BANK_CODE)) $criteria->add(DichungUserPeer::BANK_CODE, $this->bank_code);
		if ($this->isColumnModified(DichungUserPeer::BANK_OWNER)) $criteria->add(DichungUserPeer::BANK_OWNER, $this->bank_owner);
		if ($this->isColumnModified(DichungUserPeer::PAYPAL)) $criteria->add(DichungUserPeer::PAYPAL, $this->paypal);
		if ($this->isColumnModified(DichungUserPeer::MUSIC)) $criteria->add(DichungUserPeer::MUSIC, $this->music);
		if ($this->isColumnModified(DichungUserPeer::INTEREST)) $criteria->add(DichungUserPeer::INTEREST, $this->interest);
		if ($this->isColumnModified(DichungUserPeer::WORK)) $criteria->add(DichungUserPeer::WORK, $this->work);
		if ($this->isColumnModified(DichungUserPeer::EDUCATION)) $criteria->add(DichungUserPeer::EDUCATION, $this->education);
		if ($this->isColumnModified(DichungUserPeer::LOCATION)) $criteria->add(DichungUserPeer::LOCATION, $this->location);
		if ($this->isColumnModified(DichungUserPeer::MARRIED)) $criteria->add(DichungUserPeer::MARRIED, $this->married);
		if ($this->isColumnModified(DichungUserPeer::DOB)) $criteria->add(DichungUserPeer::DOB, $this->dob);
		if ($this->isColumnModified(DichungUserPeer::INVITE_USER)) $criteria->add(DichungUserPeer::INVITE_USER, $this->invite_user);
		if ($this->isColumnModified(DichungUserPeer::INVITE_TIME)) $criteria->add(DichungUserPeer::INVITE_TIME, $this->invite_time);
		if ($this->isColumnModified(DichungUserPeer::DOMAIN)) $criteria->add(DichungUserPeer::DOMAIN, $this->domain);
		if ($this->isColumnModified(DichungUserPeer::RESPONSIBILITY)) $criteria->add(DichungUserPeer::RESPONSIBILITY, $this->responsibility);
		if ($this->isColumnModified(DichungUserPeer::FB_UID)) $criteria->add(DichungUserPeer::FB_UID, $this->fb_uid);
		if ($this->isColumnModified(DichungUserPeer::FB_USERNAME)) $criteria->add(DichungUserPeer::FB_USERNAME, $this->fb_username);
		if ($this->isColumnModified(DichungUserPeer::FB_URL)) $criteria->add(DichungUserPeer::FB_URL, $this->fb_url);
		if ($this->isColumnModified(DichungUserPeer::FB_SPIC)) $criteria->add(DichungUserPeer::FB_SPIC, $this->fb_spic);
		if ($this->isColumnModified(DichungUserPeer::FB_LPIC)) $criteria->add(DichungUserPeer::FB_LPIC, $this->fb_lpic);
		if ($this->isColumnModified(DichungUserPeer::FB_FRIEND_COUNT)) $criteria->add(DichungUserPeer::FB_FRIEND_COUNT, $this->fb_friend_count);
		if ($this->isColumnModified(DichungUserPeer::GOOGLE_PLUS_URL)) $criteria->add(DichungUserPeer::GOOGLE_PLUS_URL, $this->google_plus_url);
		if ($this->isColumnModified(DichungUserPeer::ZING_URL)) $criteria->add(DichungUserPeer::ZING_URL, $this->zing_url);
		if ($this->isColumnModified(DichungUserPeer::SKYPE_URL)) $criteria->add(DichungUserPeer::SKYPE_URL, $this->skype_url);
		if ($this->isColumnModified(DichungUserPeer::YAHOO_URL)) $criteria->add(DichungUserPeer::YAHOO_URL, $this->yahoo_url);
		if ($this->isColumnModified(DichungUserPeer::EMAIL_TOKEN)) $criteria->add(DichungUserPeer::EMAIL_TOKEN, $this->email_token);
		if ($this->isColumnModified(DichungUserPeer::SLUG)) $criteria->add(DichungUserPeer::SLUG, $this->slug);
		if ($this->isColumnModified(DichungUserPeer::JOB_ID)) $criteria->add(DichungUserPeer::JOB_ID, $this->job_id);
		if ($this->isColumnModified(DichungUserPeer::OLD_RANGE_ID)) $criteria->add(DichungUserPeer::OLD_RANGE_ID, $this->old_range_id);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL)) $criteria->add(DichungUserPeer::RECEIVE_BOOK_REQUIRE_EMAIL, $this->receive_book_require_email);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS)) $criteria->add(DichungUserPeer::RECEIVE_BOOK_REQUIRE_SMS, $this->receive_book_require_sms);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL)) $criteria->add(DichungUserPeer::RECEIVE_BOOKER_INFO_EMAIL, $this->receive_booker_info_email);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_BOOKER_INFO_SMS)) $criteria->add(DichungUserPeer::RECEIVE_BOOKER_INFO_SMS, $this->receive_booker_info_sms);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_COMMENT_EMAIL)) $criteria->add(DichungUserPeer::RECEIVE_COMMENT_EMAIL, $this->receive_comment_email);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_COMMENT_SMS)) $criteria->add(DichungUserPeer::RECEIVE_COMMENT_SMS, $this->receive_comment_sms);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_FINISH_EMAIL)) $criteria->add(DichungUserPeer::RECEIVE_FINISH_EMAIL, $this->receive_finish_email);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_FINISH_SMS)) $criteria->add(DichungUserPeer::RECEIVE_FINISH_SMS, $this->receive_finish_sms);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_MATCHING_EMAIL)) $criteria->add(DichungUserPeer::RECEIVE_MATCHING_EMAIL, $this->receive_matching_email);
		if ($this->isColumnModified(DichungUserPeer::RECEIVE_MATCHING_SMS)) $criteria->add(DichungUserPeer::RECEIVE_MATCHING_SMS, $this->receive_matching_sms);
		if ($this->isColumnModified(DichungUserPeer::CONTACT)) $criteria->add(DichungUserPeer::CONTACT, $this->contact);
		if ($this->isColumnModified(DichungUserPeer::PUBLIC_EMAIL_PHONE)) $criteria->add(DichungUserPeer::PUBLIC_EMAIL_PHONE, $this->public_email_phone);
		if ($this->isColumnModified(DichungUserPeer::PUBLIC_EMAIL)) $criteria->add(DichungUserPeer::PUBLIC_EMAIL, $this->public_email);
		if ($this->isColumnModified(DichungUserPeer::PUBLIC_PHONE)) $criteria->add(DichungUserPeer::PUBLIC_PHONE, $this->public_phone);
		if ($this->isColumnModified(DichungUserPeer::IMAGE_VERIFY)) $criteria->add(DichungUserPeer::IMAGE_VERIFY, $this->image_verify);
		if ($this->isColumnModified(DichungUserPeer::VERIFIED_IMAGE)) $criteria->add(DichungUserPeer::VERIFIED_IMAGE, $this->verified_image);
		if ($this->isColumnModified(DichungUserPeer::DRIVE_LICENSE)) $criteria->add(DichungUserPeer::DRIVE_LICENSE, $this->drive_license);
		if ($this->isColumnModified(DichungUserPeer::VERIFIED_DRIVE_LICENSE)) $criteria->add(DichungUserPeer::VERIFIED_DRIVE_LICENSE, $this->verified_drive_license);
		if ($this->isColumnModified(DichungUserPeer::TRAFFIC_LAW)) $criteria->add(DichungUserPeer::TRAFFIC_LAW, $this->traffic_law);
		if ($this->isColumnModified(DichungUserPeer::POINT)) $criteria->add(DichungUserPeer::POINT, $this->point);
		if ($this->isColumnModified(DichungUserPeer::POINT_LEVEL_ID)) $criteria->add(DichungUserPeer::POINT_LEVEL_ID, $this->point_level_id);
		if ($this->isColumnModified(DichungUserPeer::OVERALL_SCORE)) $criteria->add(DichungUserPeer::OVERALL_SCORE, $this->overall_score);
		if ($this->isColumnModified(DichungUserPeer::AUTHENTICITY)) $criteria->add(DichungUserPeer::AUTHENTICITY, $this->authenticity);
		if ($this->isColumnModified(DichungUserPeer::NETWORK_QUALITY)) $criteria->add(DichungUserPeer::NETWORK_QUALITY, $this->network_quality);
		if ($this->isColumnModified(DichungUserPeer::FINANCIAL_CREDIBILITY)) $criteria->add(DichungUserPeer::FINANCIAL_CREDIBILITY, $this->financial_credibility);
		if ($this->isColumnModified(DichungUserPeer::LIKE_QUESTION)) $criteria->add(DichungUserPeer::LIKE_QUESTION, $this->like_question);
		if ($this->isColumnModified(DichungUserPeer::ANSWER_QUESTION)) $criteria->add(DichungUserPeer::ANSWER_QUESTION, $this->answer_question);
		if ($this->isColumnModified(DichungUserPeer::CREATED_AT)) $criteria->add(DichungUserPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(DichungUserPeer::UPDATED_AT)) $criteria->add(DichungUserPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DichungUserPeer::DATABASE_NAME);

		$criteria->add(DichungUserPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setPartnerId($this->partner_id);

		$copyObj->setUserTypeId($this->user_type_id);

		$copyObj->setFullname($this->fullname);

		$copyObj->setPassword($this->password);

		$copyObj->setMd5Password($this->md5_password);

		$copyObj->setActive($this->active);

		$copyObj->setLocked($this->locked);

		$copyObj->setEmail($this->email);

		$copyObj->setPhoneNumber($this->phone_number);

		$copyObj->setHotline($this->hotline);

		$copyObj->setWebsite($this->website);

		$copyObj->setFax($this->fax);

		$copyObj->setVehicleId($this->vehicle_id);

		$copyObj->setVerifiedPhone($this->verified_phone);

		$copyObj->setVerifiedEmail($this->verified_email);

		$copyObj->setAddress($this->address);

		$copyObj->setXang($this->xang);

		$copyObj->setAwardXang($this->award_xang);

		$copyObj->setAnnouncement($this->announcement);

		$copyObj->setGender($this->gender);

		$copyObj->setSurvey($this->survey);

		$copyObj->setAvatar($this->avatar);

		$copyObj->setCarAvatar($this->car_avatar);

		$copyObj->setAbout($this->about);

		$copyObj->setSmoke($this->smoke);

		$copyObj->setCarName($this->car_name);

		$copyObj->setCarModel($this->car_model);

		$copyObj->setCarYear($this->car_year);

		$copyObj->setCarDescription($this->car_description);

		$copyObj->setBankName($this->bank_name);

		$copyObj->setBankBranch($this->bank_branch);

		$copyObj->setBankCode($this->bank_code);

		$copyObj->setBankOwner($this->bank_owner);

		$copyObj->setPaypal($this->paypal);

		$copyObj->setMusic($this->music);

		$copyObj->setInterest($this->interest);

		$copyObj->setWork($this->work);

		$copyObj->setEducation($this->education);

		$copyObj->setLocation($this->location);

		$copyObj->setMarried($this->married);

		$copyObj->setDob($this->dob);

		$copyObj->setInviteUser($this->invite_user);

		$copyObj->setInviteTime($this->invite_time);

		$copyObj->setDomain($this->domain);

		$copyObj->setResponsibility($this->responsibility);

		$copyObj->setFbUid($this->fb_uid);

		$copyObj->setFbUsername($this->fb_username);

		$copyObj->setFbUrl($this->fb_url);

		$copyObj->setFbSpic($this->fb_spic);

		$copyObj->setFbLpic($this->fb_lpic);

		$copyObj->setFbFriendCount($this->fb_friend_count);

		$copyObj->setGooglePlusUrl($this->google_plus_url);

		$copyObj->setZingUrl($this->zing_url);

		$copyObj->setSkypeUrl($this->skype_url);

		$copyObj->setYahooUrl($this->yahoo_url);

		$copyObj->setEmailToken($this->email_token);

		$copyObj->setSlug($this->slug);

		$copyObj->setJobId($this->job_id);

		$copyObj->setOldRangeId($this->old_range_id);

		$copyObj->setReceiveBookRequireEmail($this->receive_book_require_email);

		$copyObj->setReceiveBookRequireSms($this->receive_book_require_sms);

		$copyObj->setReceiveBookerInfoEmail($this->receive_booker_info_email);

		$copyObj->setReceiveBookerInfoSms($this->receive_booker_info_sms);

		$copyObj->setReceiveCommentEmail($this->receive_comment_email);

		$copyObj->setReceiveCommentSms($this->receive_comment_sms);

		$copyObj->setReceiveFinishEmail($this->receive_finish_email);

		$copyObj->setReceiveFinishSms($this->receive_finish_sms);

		$copyObj->setReceiveMatchingEmail($this->receive_matching_email);

		$copyObj->setReceiveMatchingSms($this->receive_matching_sms);

		$copyObj->setContact($this->contact);

		$copyObj->setPublicEmailPhone($this->public_email_phone);

		$copyObj->setPublicEmail($this->public_email);

		$copyObj->setPublicPhone($this->public_phone);

		$copyObj->setImageVerify($this->image_verify);

		$copyObj->setVerifiedImage($this->verified_image);

		$copyObj->setDriveLicense($this->drive_license);

		$copyObj->setVerifiedDriveLicense($this->verified_drive_license);

		$copyObj->setTrafficLaw($this->traffic_law);

		$copyObj->setPoint($this->point);

		$copyObj->setPointLevelId($this->point_level_id);

		$copyObj->setOverallScore($this->overall_score);

		$copyObj->setAuthenticity($this->authenticity);

		$copyObj->setNetworkQuality($this->network_quality);

		$copyObj->setFinancialCredibility($this->financial_credibility);

		$copyObj->setLikeQuestion($this->like_question);

		$copyObj->setAnswerQuestion($this->answer_question);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTourDetails() as $relObj) {
				$copyObj->addTourDetail($relObj->copy($deepCopy));
			}

			foreach($this->getBookingTours() as $relObj) {
				$copyObj->addBookingTour($relObj->copy($deepCopy));
			}

			foreach($this->getNotifications() as $relObj) {
				$copyObj->addNotification($relObj->copy($deepCopy));
			}

			foreach($this->getMessages() as $relObj) {
				$copyObj->addMessage($relObj->copy($deepCopy));
			}

			foreach($this->getTripExperiences() as $relObj) {
				$copyObj->addTripExperience($relObj->copy($deepCopy));
			}

			foreach($this->getCommentTours() as $relObj) {
				$copyObj->addCommentTour($relObj->copy($deepCopy));
			}

			foreach($this->getCommentExperiences() as $relObj) {
				$copyObj->addCommentExperience($relObj->copy($deepCopy));
			}

			foreach($this->getCommentAcquirementss() as $relObj) {
				$copyObj->addCommentAcquirements($relObj->copy($deepCopy));
			}

			foreach($this->getUserSendVerifyInfos() as $relObj) {
				$copyObj->addUserSendVerifyInfo($relObj->copy($deepCopy));
			}

			foreach($this->getTripAcquirementss() as $relObj) {
				$copyObj->addTripAcquirements($relObj->copy($deepCopy));
			}

			foreach($this->getQuestions() as $relObj) {
				$copyObj->addQuestion($relObj->copy($deepCopy));
			}

			foreach($this->getQuestionAnswers() as $relObj) {
				$copyObj->addQuestionAnswer($relObj->copy($deepCopy));
			}

		} 

		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DichungUserPeer();
		}
		return self::$peer;
	}

	
	public function setPartner($v)
	{


		if ($v === null) {
			$this->setPartnerId('1');
		} else {
			$this->setPartnerId($v->getId());
		}


		$this->aPartner = $v;
	}


	
	static $Partner = array();
	
	public function getPartner($con = null)
	{
		if ($this->aPartner === null && ($this->partner_id !== null)) {
						if(!isset(self::$Partner[$this->partner_id])){
				self::$Partner[$this->partner_id] = PartnerPeer::retrieveByPK($this->partner_id, $con);
			}
			$this->aPartner = self::$Partner[$this->partner_id];

			
		}
		return $this->aPartner;
	}

	
	public function setUserType($v)
	{


		if ($v === null) {
			$this->setUserTypeId('1');
		} else {
			$this->setUserTypeId($v->getId());
		}


		$this->aUserType = $v;
	}


	
	static $UserType = array();
	
	public function getUserType($con = null)
	{
		if ($this->aUserType === null && ($this->user_type_id !== null)) {
						if(!isset(self::$UserType[$this->user_type_id])){
				self::$UserType[$this->user_type_id] = UserTypePeer::retrieveByPK($this->user_type_id, $con);
			}
			$this->aUserType = self::$UserType[$this->user_type_id];

			
		}
		return $this->aUserType;
	}

	
	public function setJob($v)
	{


		if ($v === null) {
			$this->setJobId(NULL);
		} else {
			$this->setJobId($v->getId());
		}


		$this->aJob = $v;
	}


	
	static $Job = array();
	
	public function getJob($con = null)
	{
		if ($this->aJob === null && ($this->job_id !== null)) {
						if(!isset(self::$Job[$this->job_id])){
				self::$Job[$this->job_id] = JobPeer::retrieveByPK($this->job_id, $con);
			}
			$this->aJob = self::$Job[$this->job_id];

			
		}
		return $this->aJob;
	}

	
	public function setOldRange($v)
	{


		if ($v === null) {
			$this->setOldRangeId(NULL);
		} else {
			$this->setOldRangeId($v->getId());
		}


		$this->aOldRange = $v;
	}


	
	static $OldRange = array();
	
	public function getOldRange($con = null)
	{
		if ($this->aOldRange === null && ($this->old_range_id !== null)) {
						if(!isset(self::$OldRange[$this->old_range_id])){
				self::$OldRange[$this->old_range_id] = OldRangePeer::retrieveByPK($this->old_range_id, $con);
			}
			$this->aOldRange = self::$OldRange[$this->old_range_id];

			
		}
		return $this->aOldRange;
	}

	
	public function setPointLevel($v)
	{


		if ($v === null) {
			$this->setPointLevelId('1');
		} else {
			$this->setPointLevelId($v->getId());
		}


		$this->aPointLevel = $v;
	}


	
	static $PointLevel = array();
	
	public function getPointLevel($con = null)
	{
		if ($this->aPointLevel === null && ($this->point_level_id !== null)) {
						if(!isset(self::$PointLevel[$this->point_level_id])){
				self::$PointLevel[$this->point_level_id] = PointLevelPeer::retrieveByPK($this->point_level_id, $con);
			}
			$this->aPointLevel = self::$PointLevel[$this->point_level_id];

			
		}
		return $this->aPointLevel;
	}

	
	public function initTourDetails()
	{
		if ($this->collTourDetails === null) {
			$this->collTourDetails = array();
		}
	}

	
	public function getTourDetails($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
			   $this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
					$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourDetailCriteria = $criteria;
		return $this->collTourDetails;
	}

	
	public function countTourDetails($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourDetailPeer::USER_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getTourDetailsJoinPartner($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinHomeDiemDenItem($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinCity($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourTimeType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourTimeCategoryDay($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTypePricing($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTypePricingService($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinPaymentType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::USER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::USER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}

	
	public function initBookingTours()
	{
		if ($this->collBookingTours === null) {
			$this->collBookingTours = array();
		}
	}

	
	public function getBookingTours($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
			   $this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
					$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBookingTourCriteria = $criteria;
		return $this->collBookingTours;
	}

	
	public function countBookingTours($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

		return BookingTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBookingTour(BookingTour $l)
	{
		$this->collBookingTours[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getBookingToursJoinPartner($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinTourDetail($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinPaymentBookingType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPaymentBookingType($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinPaymentBookingType($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinTransactionStatus($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinBookingStatus($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::USER_ID_SELL, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}

	
	public function initNotifications()
	{
		if ($this->collNotifications === null) {
			$this->collNotifications = array();
		}
	}

	
	public function getNotifications($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNotifications === null) {
			if ($this->isNew()) {
			   $this->collNotifications = array();
			} else {

				$criteria->add(NotificationPeer::USER_SEND, $this->getId());

				NotificationPeer::addSelectColumns($criteria);
				$this->collNotifications = NotificationPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(NotificationPeer::USER_SEND, $this->getId());

				NotificationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNotificationCriteria) || !$this->lastNotificationCriteria->equals($criteria)) {
					$this->collNotifications = NotificationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNotificationCriteria = $criteria;
		return $this->collNotifications;
	}

	
	public function countNotifications($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(NotificationPeer::USER_SEND, $this->getId());

		return NotificationPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addNotification(Notification $l)
	{
		$this->collNotifications[] = $l;
		$l->setDichungUser($this);
	}

	
	public function initMessages()
	{
		if ($this->collMessages === null) {
			$this->collMessages = array();
		}
	}

	
	public function getMessages($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collMessages === null) {
			if ($this->isNew()) {
			   $this->collMessages = array();
			} else {

				$criteria->add(MessagePeer::USER_SEND, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				$this->collMessages = MessagePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(MessagePeer::USER_SEND, $this->getId());

				MessagePeer::addSelectColumns($criteria);
				if (!isset($this->lastMessageCriteria) || !$this->lastMessageCriteria->equals($criteria)) {
					$this->collMessages = MessagePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastMessageCriteria = $criteria;
		return $this->collMessages;
	}

	
	public function countMessages($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(MessagePeer::USER_SEND, $this->getId());

		return MessagePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addMessage(Message $l)
	{
		$this->collMessages[] = $l;
		$l->setDichungUser($this);
	}

	
	public function initTripExperiences()
	{
		if ($this->collTripExperiences === null) {
			$this->collTripExperiences = array();
		}
	}

	
	public function getTripExperiences($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripExperiences === null) {
			if ($this->isNew()) {
			   $this->collTripExperiences = array();
			} else {

				$criteria->add(TripExperiencePeer::USER_ID, $this->getId());

				TripExperiencePeer::addSelectColumns($criteria);
				$this->collTripExperiences = TripExperiencePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripExperiencePeer::USER_ID, $this->getId());

				TripExperiencePeer::addSelectColumns($criteria);
				if (!isset($this->lastTripExperienceCriteria) || !$this->lastTripExperienceCriteria->equals($criteria)) {
					$this->collTripExperiences = TripExperiencePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripExperienceCriteria = $criteria;
		return $this->collTripExperiences;
	}

	
	public function countTripExperiences($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripExperiencePeer::USER_ID, $this->getId());

		return TripExperiencePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripExperience(TripExperience $l)
	{
		$this->collTripExperiences[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getTripExperiencesJoinTypeUpload($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripExperiences === null) {
			if ($this->isNew()) {
				$this->collTripExperiences = array();
			} else {

				$criteria->add(TripExperiencePeer::USER_ID, $this->getId());

				$this->collTripExperiences = TripExperiencePeer::doSelectJoinTypeUpload($criteria, $con);
			}
		} else {
									
			$criteria->add(TripExperiencePeer::USER_ID, $this->getId());

			if (!isset($this->lastTripExperienceCriteria) || !$this->lastTripExperienceCriteria->equals($criteria)) {
				$this->collTripExperiences = TripExperiencePeer::doSelectJoinTypeUpload($criteria, $con);
			}
		}
		$this->lastTripExperienceCriteria = $criteria;

		return $this->collTripExperiences;
	}

	
	public function initCommentTours()
	{
		if ($this->collCommentTours === null) {
			$this->collCommentTours = array();
		}
	}

	
	public function getCommentTours($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentTours === null) {
			if ($this->isNew()) {
			   $this->collCommentTours = array();
			} else {

				$criteria->add(CommentTourPeer::USER_ID, $this->getId());

				CommentTourPeer::addSelectColumns($criteria);
				$this->collCommentTours = CommentTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentTourPeer::USER_ID, $this->getId());

				CommentTourPeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentTourCriteria) || !$this->lastCommentTourCriteria->equals($criteria)) {
					$this->collCommentTours = CommentTourPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentTourCriteria = $criteria;
		return $this->collCommentTours;
	}

	
	public function countCommentTours($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentTourPeer::USER_ID, $this->getId());

		return CommentTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentTour(CommentTour $l)
	{
		$this->collCommentTours[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getCommentToursJoinTourDetail($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentTours === null) {
			if ($this->isNew()) {
				$this->collCommentTours = array();
			} else {

				$criteria->add(CommentTourPeer::USER_ID, $this->getId());

				$this->collCommentTours = CommentTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentTourPeer::USER_ID, $this->getId());

			if (!isset($this->lastCommentTourCriteria) || !$this->lastCommentTourCriteria->equals($criteria)) {
				$this->collCommentTours = CommentTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastCommentTourCriteria = $criteria;

		return $this->collCommentTours;
	}

	
	public function initCommentExperiences()
	{
		if ($this->collCommentExperiences === null) {
			$this->collCommentExperiences = array();
		}
	}

	
	public function getCommentExperiences($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentExperiences === null) {
			if ($this->isNew()) {
			   $this->collCommentExperiences = array();
			} else {

				$criteria->add(CommentExperiencePeer::USER_ID, $this->getId());

				CommentExperiencePeer::addSelectColumns($criteria);
				$this->collCommentExperiences = CommentExperiencePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentExperiencePeer::USER_ID, $this->getId());

				CommentExperiencePeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentExperienceCriteria) || !$this->lastCommentExperienceCriteria->equals($criteria)) {
					$this->collCommentExperiences = CommentExperiencePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentExperienceCriteria = $criteria;
		return $this->collCommentExperiences;
	}

	
	public function countCommentExperiences($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentExperiencePeer::USER_ID, $this->getId());

		return CommentExperiencePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentExperience(CommentExperience $l)
	{
		$this->collCommentExperiences[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getCommentExperiencesJoinTripExperience($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentExperiences === null) {
			if ($this->isNew()) {
				$this->collCommentExperiences = array();
			} else {

				$criteria->add(CommentExperiencePeer::USER_ID, $this->getId());

				$this->collCommentExperiences = CommentExperiencePeer::doSelectJoinTripExperience($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentExperiencePeer::USER_ID, $this->getId());

			if (!isset($this->lastCommentExperienceCriteria) || !$this->lastCommentExperienceCriteria->equals($criteria)) {
				$this->collCommentExperiences = CommentExperiencePeer::doSelectJoinTripExperience($criteria, $con);
			}
		}
		$this->lastCommentExperienceCriteria = $criteria;

		return $this->collCommentExperiences;
	}

	
	public function initCommentAcquirementss()
	{
		if ($this->collCommentAcquirementss === null) {
			$this->collCommentAcquirementss = array();
		}
	}

	
	public function getCommentAcquirementss($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentAcquirementss === null) {
			if ($this->isNew()) {
			   $this->collCommentAcquirementss = array();
			} else {

				$criteria->add(CommentAcquirementsPeer::USER_ID, $this->getId());

				CommentAcquirementsPeer::addSelectColumns($criteria);
				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentAcquirementsPeer::USER_ID, $this->getId());

				CommentAcquirementsPeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentAcquirementsCriteria) || !$this->lastCommentAcquirementsCriteria->equals($criteria)) {
					$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentAcquirementsCriteria = $criteria;
		return $this->collCommentAcquirementss;
	}

	
	public function countCommentAcquirementss($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentAcquirementsPeer::USER_ID, $this->getId());

		return CommentAcquirementsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentAcquirements(CommentAcquirements $l)
	{
		$this->collCommentAcquirementss[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getCommentAcquirementssJoinTripExperience($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentAcquirementss === null) {
			if ($this->isNew()) {
				$this->collCommentAcquirementss = array();
			} else {

				$criteria->add(CommentAcquirementsPeer::USER_ID, $this->getId());

				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelectJoinTripExperience($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentAcquirementsPeer::USER_ID, $this->getId());

			if (!isset($this->lastCommentAcquirementsCriteria) || !$this->lastCommentAcquirementsCriteria->equals($criteria)) {
				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelectJoinTripExperience($criteria, $con);
			}
		}
		$this->lastCommentAcquirementsCriteria = $criteria;

		return $this->collCommentAcquirementss;
	}

	
	public function initUserSendVerifyInfos()
	{
		if ($this->collUserSendVerifyInfos === null) {
			$this->collUserSendVerifyInfos = array();
		}
	}

	
	public function getUserSendVerifyInfos($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserSendVerifyInfos === null) {
			if ($this->isNew()) {
			   $this->collUserSendVerifyInfos = array();
			} else {

				$criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->getId());

				UserSendVerifyInfoPeer::addSelectColumns($criteria);
				$this->collUserSendVerifyInfos = UserSendVerifyInfoPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->getId());

				UserSendVerifyInfoPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserSendVerifyInfoCriteria) || !$this->lastUserSendVerifyInfoCriteria->equals($criteria)) {
					$this->collUserSendVerifyInfos = UserSendVerifyInfoPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserSendVerifyInfoCriteria = $criteria;
		return $this->collUserSendVerifyInfos;
	}

	
	public function countUserSendVerifyInfos($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->getId());

		return UserSendVerifyInfoPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserSendVerifyInfo(UserSendVerifyInfo $l)
	{
		$this->collUserSendVerifyInfos[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getUserSendVerifyInfosJoinVerifyType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserSendVerifyInfos === null) {
			if ($this->isNew()) {
				$this->collUserSendVerifyInfos = array();
			} else {

				$criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->getId());

				$this->collUserSendVerifyInfos = UserSendVerifyInfoPeer::doSelectJoinVerifyType($criteria, $con);
			}
		} else {
									
			$criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->getId());

			if (!isset($this->lastUserSendVerifyInfoCriteria) || !$this->lastUserSendVerifyInfoCriteria->equals($criteria)) {
				$this->collUserSendVerifyInfos = UserSendVerifyInfoPeer::doSelectJoinVerifyType($criteria, $con);
			}
		}
		$this->lastUserSendVerifyInfoCriteria = $criteria;

		return $this->collUserSendVerifyInfos;
	}

	
	public function initTripAcquirementss()
	{
		if ($this->collTripAcquirementss === null) {
			$this->collTripAcquirementss = array();
		}
	}

	
	public function getTripAcquirementss($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
			   $this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
					$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;
		return $this->collTripAcquirementss;
	}

	
	public function countTripAcquirementss($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

		return TripAcquirementsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripAcquirements(TripAcquirements $l)
	{
		$this->collTripAcquirementss[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getTripAcquirementssJoinPartner($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}


	
	public function getTripAcquirementssJoinTypeUpload($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinTypeUpload($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::USER_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinTypeUpload($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}

	
	public function initQuestions()
	{
		if ($this->collQuestions === null) {
			$this->collQuestions = array();
		}
	}

	
	public function getQuestions($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collQuestions === null) {
			if ($this->isNew()) {
			   $this->collQuestions = array();
			} else {

				$criteria->add(QuestionPeer::USER_ID, $this->getId());

				QuestionPeer::addSelectColumns($criteria);
				$this->collQuestions = QuestionPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(QuestionPeer::USER_ID, $this->getId());

				QuestionPeer::addSelectColumns($criteria);
				if (!isset($this->lastQuestionCriteria) || !$this->lastQuestionCriteria->equals($criteria)) {
					$this->collQuestions = QuestionPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastQuestionCriteria = $criteria;
		return $this->collQuestions;
	}

	
	public function countQuestions($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(QuestionPeer::USER_ID, $this->getId());

		return QuestionPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addQuestion(Question $l)
	{
		$this->collQuestions[] = $l;
		$l->setDichungUser($this);
	}

	
	public function initQuestionAnswers()
	{
		if ($this->collQuestionAnswers === null) {
			$this->collQuestionAnswers = array();
		}
	}

	
	public function getQuestionAnswers($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collQuestionAnswers === null) {
			if ($this->isNew()) {
			   $this->collQuestionAnswers = array();
			} else {

				$criteria->add(QuestionAnswerPeer::USER_ID, $this->getId());

				QuestionAnswerPeer::addSelectColumns($criteria);
				$this->collQuestionAnswers = QuestionAnswerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(QuestionAnswerPeer::USER_ID, $this->getId());

				QuestionAnswerPeer::addSelectColumns($criteria);
				if (!isset($this->lastQuestionAnswerCriteria) || !$this->lastQuestionAnswerCriteria->equals($criteria)) {
					$this->collQuestionAnswers = QuestionAnswerPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastQuestionAnswerCriteria = $criteria;
		return $this->collQuestionAnswers;
	}

	
	public function countQuestionAnswers($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(QuestionAnswerPeer::USER_ID, $this->getId());

		return QuestionAnswerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addQuestionAnswer(QuestionAnswer $l)
	{
		$this->collQuestionAnswers[] = $l;
		$l->setDichungUser($this);
	}


	
	public function getQuestionAnswersJoinQuestion($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collQuestionAnswers === null) {
			if ($this->isNew()) {
				$this->collQuestionAnswers = array();
			} else {

				$criteria->add(QuestionAnswerPeer::USER_ID, $this->getId());

				$this->collQuestionAnswers = QuestionAnswerPeer::doSelectJoinQuestion($criteria, $con);
			}
		} else {
									
			$criteria->add(QuestionAnswerPeer::USER_ID, $this->getId());

			if (!isset($this->lastQuestionAnswerCriteria) || !$this->lastQuestionAnswerCriteria->equals($criteria)) {
				$this->collQuestionAnswers = QuestionAnswerPeer::doSelectJoinQuestion($criteria, $con);
			}
		}
		$this->lastQuestionAnswerCriteria = $criteria;

		return $this->collQuestionAnswers;
	}

} 