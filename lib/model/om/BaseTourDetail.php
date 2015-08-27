<?php


abstract class BaseTourDetail extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id = 1;


	
	protected $enable = false;


	
	protected $user_id;


	
	protected $tour_type_id;


	
	protected $home_diem_den_item_id;


	
	protected $area_id;


	
	protected $region_id;


	
	protected $city_id;


	
	protected $time_type_id = 0;


	
	protected $time_category_day_id = 0;


	
	protected $type_pricing_id = 1;


	
	protected $type_pricing_service_id = 1;


	
	protected $start;


	
	protected $end;


	
	protected $coo_start;


	
	protected $lat_start;


	
	protected $lng_start;


	
	protected $coo_end;


	
	protected $lat_end;


	
	protected $lng_end;


	
	protected $detail;


	
	protected $date_start;


	
	protected $date_end;


	
	protected $hour_start;


	
	protected $hour_day;


	
	protected $hour_week;


	
	protected $day_in_week;


	
	protected $price;


	
	protected $price_baby = 0;


	
	protected $price_kid = 0;


	
	protected $payment_type_id = 1;


	
	protected $security_deposit = 10;


	
	protected $sum_number_seat;


	
	protected $number_seat_min = 1;


	
	protected $number_seat;


	
	protected $number_seat_booking = 0;


	
	protected $allow_booking_fast = false;


	
	protected $note;


	
	protected $utilities;


	
	protected $sorting;


	
	protected $activities;


	
	protected $tour_option_gender;


	
	protected $tour_object_fit;


	
	protected $enabled = false;


	
	protected $priority = 10;


	
	protected $policy_price;


	
	protected $policy_ticket;


	
	protected $success_created = false;


	
	protected $tour_featured = false;


	
	protected $tour_favourite = false;


	
	protected $tour_weekend = false;


	
	protected $on_homepage = false;


	
	protected $title;


	
	protected $description;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $keyword;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aPartner;

	
	protected $aDichungUser;

	
	protected $aTourType;

	
	protected $aHomeDiemDenItem;

	
	protected $aCity;

	
	protected $aTourTimeType;

	
	protected $aTourTimeCategoryDay;

	
	protected $aTypePricing;

	
	protected $aTypePricingService;

	
	protected $aPaymentType;

	
	protected $collInfoTourDetailByLanguages;

	
	protected $lastInfoTourDetailByLanguageCriteria = null;

	
	protected $collTourDiscounts;

	
	protected $lastTourDiscountCriteria = null;

	
	protected $collTourItemImgs;

	
	protected $lastTourItemImgCriteria = null;

	
	protected $collBookingTours;

	
	protected $lastBookingTourCriteria = null;

	
	protected $collCommentTours;

	
	protected $lastCommentTourCriteria = null;

	
	protected $collScheduledCostTours;

	
	protected $lastScheduledCostTourCriteria = null;

	
	protected $collTourCooItems;

	
	protected $lastTourCooItemCriteria = null;

	
	protected $collTourPriceKidItems;

	
	protected $lastTourPriceKidItemCriteria = null;

	
	protected $collTourPriceServiceItems;

	
	protected $lastTourPriceServiceItemCriteria = null;

	
	protected $collTourDiscountEvents;

	
	protected $lastTourDiscountEventCriteria = null;

	
	protected $collTourItemScheduleDays;

	
	protected $lastTourItemScheduleDayCriteria = null;

	
	protected $collTourItemImgScheduleDays;

	
	protected $lastTourItemImgScheduleDayCriteria = null;

	
	protected $collTourDateRequestServices;

	
	protected $lastTourDateRequestServiceCriteria = null;

	
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

	
	public function getEnable()
	{

        return $this->enable;
	}

	
	public function getUserId()
	{

        return $this->user_id;
	}

	
	public function getTourTypeId()
	{

        return $this->tour_type_id;
	}

	
	public function getHomeDiemDenItemId()
	{

        return $this->home_diem_den_item_id;
	}

	
	public function getAreaId()
	{

        return $this->area_id;
	}

	
	public function getRegionId()
	{

        return $this->region_id;
	}

	
	public function getCityId()
	{

        return $this->city_id;
	}

	
	public function getTimeTypeId()
	{

        return $this->time_type_id;
	}

	
	public function getTimeCategoryDayId()
	{

        return $this->time_category_day_id;
	}

	
	public function getTypePricingId()
	{

        return $this->type_pricing_id;
	}

	
	public function getTypePricingServiceId()
	{

        return $this->type_pricing_service_id;
	}

	
	public function getStart()
	{

        return $this->start;
	}

	
	public function getEnd()
	{

        return $this->end;
	}

	
	public function getCooStart()
	{

        return $this->coo_start;
	}

	
	public function getLatStart()
	{

        return $this->lat_start;
	}

	
	public function getLngStart()
	{

        return $this->lng_start;
	}

	
	public function getCooEnd()
	{

        return $this->coo_end;
	}

	
	public function getLatEnd()
	{

        return $this->lat_end;
	}

	
	public function getLngEnd()
	{

        return $this->lng_end;
	}

	
	public function getDetail()
	{

        return $this->detail;
	}

	
	public function getDateStart($format = 'Y-m-d')
	{

		if ($this->date_start === null || $this->date_start === '') {
			return null;
		} elseif (!is_int($this->date_start)) {
						$ts = strtotime($this->date_start);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_start] as date/time value: " . var_export($this->date_start, true));
			}
		} else {
			$ts = $this->date_start;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getDateEnd($format = 'Y-m-d')
	{

		if ($this->date_end === null || $this->date_end === '') {
			return null;
		} elseif (!is_int($this->date_end)) {
						$ts = strtotime($this->date_end);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_end] as date/time value: " . var_export($this->date_end, true));
			}
		} else {
			$ts = $this->date_end;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getHourStart()
	{

        return $this->hour_start;
	}

	
	public function getHourDay()
	{

        return $this->hour_day;
	}

	
	public function getHourWeek()
	{

        return $this->hour_week;
	}

	
	public function getDayInWeek()
	{

        return $this->day_in_week;
	}

	
	public function getPrice()
	{

        return $this->price;
	}

	
	public function getPriceBaby()
	{

        return $this->price_baby;
	}

	
	public function getPriceKid()
	{

        return $this->price_kid;
	}

	
	public function getPaymentTypeId()
	{

        return $this->payment_type_id;
	}

	
	public function getSecurityDeposit()
	{

        return $this->security_deposit;
	}

	
	public function getSumNumberSeat()
	{

        return $this->sum_number_seat;
	}

	
	public function getNumberSeatMin()
	{

        return $this->number_seat_min;
	}

	
	public function getNumberSeat()
	{

        return $this->number_seat;
	}

	
	public function getNumberSeatBooking()
	{

        return $this->number_seat_booking;
	}

	
	public function getAllowBookingFast()
	{

        return $this->allow_booking_fast;
	}

	
	public function getNote()
	{

        return $this->note;
	}

	
	public function getUtilities()
	{

        return $this->utilities;
	}

	
	public function getSorting()
	{

        return $this->sorting;
	}

	
	public function getActivities()
	{

        return $this->activities;
	}

	
	public function getTourOptionGender()
	{

        return $this->tour_option_gender;
	}

	
	public function getTourObjectFit()
	{

        return $this->tour_object_fit;
	}

	
	public function getEnabled()
	{

        return $this->enabled;
	}

	
	public function getPriority()
	{

        return $this->priority;
	}

	
	public function getPolicyPrice()
	{

        return $this->policy_price;
	}

	
	public function getPolicyTicket()
	{

        return $this->policy_ticket;
	}

	
	public function getSuccessCreated()
	{

        return $this->success_created;
	}

	
	public function getTourFeatured()
	{

        return $this->tour_featured;
	}

	
	public function getTourFavourite()
	{

        return $this->tour_favourite;
	}

	
	public function getTourWeekend()
	{

        return $this->tour_weekend;
	}

	
	public function getOnHomepage()
	{

        return $this->on_homepage;
	}

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getTitleSeo()
	{

        return $this->title_seo;
	}

	
	public function getDescriptionSeo()
	{

        return $this->description_seo;
	}

	
	public function getImgSeo()
	{

        return $this->img_seo;
	}

	
	public function getKeyword()
	{

        return $this->keyword;
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
			$this->modifiedColumns[] = TourDetailPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v || $v === 1) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setEnable($v)
	{

		if ($this->enable !== $v || $v === false) {
			$this->enable = $v;
			$this->modifiedColumns[] = TourDetailPeer::ENABLE;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setTourTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_type_id !== $v) {
			$this->tour_type_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_TYPE_ID;
		}

		if ($this->aTourType !== null && $this->aTourType->getId() !== $v) {
			$this->aTourType = null;
		}

	} 
	
	public function setHomeDiemDenItemId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->home_diem_den_item_id !== $v) {
			$this->home_diem_den_item_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::HOME_DIEM_DEN_ITEM_ID;
		}

		if ($this->aHomeDiemDenItem !== null && $this->aHomeDiemDenItem->getId() !== $v) {
			$this->aHomeDiemDenItem = null;
		}

	} 
	
	public function setAreaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->area_id !== $v) {
			$this->area_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::AREA_ID;
		}

	} 
	
	public function setRegionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->region_id !== $v) {
			$this->region_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::REGION_ID;
		}

	} 
	
	public function setCityId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->city_id !== $v) {
			$this->city_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::CITY_ID;
		}

		if ($this->aCity !== null && $this->aCity->getId() !== $v) {
			$this->aCity = null;
		}

	} 
	
	public function setTimeTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->time_type_id !== $v || $v === 0) {
			$this->time_type_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::TIME_TYPE_ID;
		}

		if ($this->aTourTimeType !== null && $this->aTourTimeType->getId() !== $v) {
			$this->aTourTimeType = null;
		}

	} 
	
	public function setTimeCategoryDayId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->time_category_day_id !== $v || $v === 0) {
			$this->time_category_day_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::TIME_CATEGORY_DAY_ID;
		}

		if ($this->aTourTimeCategoryDay !== null && $this->aTourTimeCategoryDay->getId() !== $v) {
			$this->aTourTimeCategoryDay = null;
		}

	} 
	
	public function setTypePricingId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_pricing_id !== $v || $v === 1) {
			$this->type_pricing_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::TYPE_PRICING_ID;
		}

		if ($this->aTypePricing !== null && $this->aTypePricing->getId() !== $v) {
			$this->aTypePricing = null;
		}

	} 
	
	public function setTypePricingServiceId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_pricing_service_id !== $v || $v === 1) {
			$this->type_pricing_service_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::TYPE_PRICING_SERVICE_ID;
		}

		if ($this->aTypePricingService !== null && $this->aTypePricingService->getId() !== $v) {
			$this->aTypePricingService = null;
		}

	} 
	
	public function setStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->start !== $v) {
			$this->start = $v;
			$this->modifiedColumns[] = TourDetailPeer::START;
		}

	} 
	
	public function setEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->end !== $v) {
			$this->end = $v;
			$this->modifiedColumns[] = TourDetailPeer::END;
		}

	} 
	
	public function setCooStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_start !== $v) {
			$this->coo_start = $v;
			$this->modifiedColumns[] = TourDetailPeer::COO_START;
		}

	} 
	
	public function setLatStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lat_start !== $v) {
			$this->lat_start = $v;
			$this->modifiedColumns[] = TourDetailPeer::LAT_START;
		}

	} 
	
	public function setLngStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lng_start !== $v) {
			$this->lng_start = $v;
			$this->modifiedColumns[] = TourDetailPeer::LNG_START;
		}

	} 
	
	public function setCooEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_end !== $v) {
			$this->coo_end = $v;
			$this->modifiedColumns[] = TourDetailPeer::COO_END;
		}

	} 
	
	public function setLatEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lat_end !== $v) {
			$this->lat_end = $v;
			$this->modifiedColumns[] = TourDetailPeer::LAT_END;
		}

	} 
	
	public function setLngEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lng_end !== $v) {
			$this->lng_end = $v;
			$this->modifiedColumns[] = TourDetailPeer::LNG_END;
		}

	} 
	
	public function setDetail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->detail !== $v) {
			$this->detail = $v;
			$this->modifiedColumns[] = TourDetailPeer::DETAIL;
		}

	} 
	
	public function setDateStart($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_start] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_start !== $ts) {
			$this->date_start = $ts;
			$this->modifiedColumns[] = TourDetailPeer::DATE_START;
		}

	} 
	
	public function setDateEnd($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_end] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_end !== $ts) {
			$this->date_end = $ts;
			$this->modifiedColumns[] = TourDetailPeer::DATE_END;
		}

	} 
	
	public function setHourStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hour_start !== $v) {
			$this->hour_start = $v;
			$this->modifiedColumns[] = TourDetailPeer::HOUR_START;
		}

	} 
	
	public function setHourDay($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hour_day !== $v) {
			$this->hour_day = $v;
			$this->modifiedColumns[] = TourDetailPeer::HOUR_DAY;
		}

	} 
	
	public function setHourWeek($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->hour_week !== $v) {
			$this->hour_week = $v;
			$this->modifiedColumns[] = TourDetailPeer::HOUR_WEEK;
		}

	} 
	
	public function setDayInWeek($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->day_in_week !== $v) {
			$this->day_in_week = $v;
			$this->modifiedColumns[] = TourDetailPeer::DAY_IN_WEEK;
		}

	} 
	
	public function setPrice($v)
	{

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = TourDetailPeer::PRICE;
		}

	} 
	
	public function setPriceBaby($v)
	{

		if ($this->price_baby !== $v || $v === 0) {
			$this->price_baby = $v;
			$this->modifiedColumns[] = TourDetailPeer::PRICE_BABY;
		}

	} 
	
	public function setPriceKid($v)
	{

		if ($this->price_kid !== $v || $v === 0) {
			$this->price_kid = $v;
			$this->modifiedColumns[] = TourDetailPeer::PRICE_KID;
		}

	} 
	
	public function setPaymentTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->payment_type_id !== $v || $v === 1) {
			$this->payment_type_id = $v;
			$this->modifiedColumns[] = TourDetailPeer::PAYMENT_TYPE_ID;
		}

		if ($this->aPaymentType !== null && $this->aPaymentType->getId() !== $v) {
			$this->aPaymentType = null;
		}

	} 
	
	public function setSecurityDeposit($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->security_deposit !== $v || $v === 10) {
			$this->security_deposit = $v;
			$this->modifiedColumns[] = TourDetailPeer::SECURITY_DEPOSIT;
		}

	} 
	
	public function setSumNumberSeat($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->sum_number_seat !== $v) {
			$this->sum_number_seat = $v;
			$this->modifiedColumns[] = TourDetailPeer::SUM_NUMBER_SEAT;
		}

	} 
	
	public function setNumberSeatMin($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_seat_min !== $v || $v === 1) {
			$this->number_seat_min = $v;
			$this->modifiedColumns[] = TourDetailPeer::NUMBER_SEAT_MIN;
		}

	} 
	
	public function setNumberSeat($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_seat !== $v) {
			$this->number_seat = $v;
			$this->modifiedColumns[] = TourDetailPeer::NUMBER_SEAT;
		}

	} 
	
	public function setNumberSeatBooking($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_seat_booking !== $v || $v === 0) {
			$this->number_seat_booking = $v;
			$this->modifiedColumns[] = TourDetailPeer::NUMBER_SEAT_BOOKING;
		}

	} 
	
	public function setAllowBookingFast($v)
	{

		if ($this->allow_booking_fast !== $v || $v === false) {
			$this->allow_booking_fast = $v;
			$this->modifiedColumns[] = TourDetailPeer::ALLOW_BOOKING_FAST;
		}

	} 
	
	public function setNote($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = TourDetailPeer::NOTE;
		}

	} 
	
	public function setUtilities($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->utilities !== $v) {
			$this->utilities = $v;
			$this->modifiedColumns[] = TourDetailPeer::UTILITIES;
		}

	} 
	
	public function setSorting($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->sorting !== $v) {
			$this->sorting = $v;
			$this->modifiedColumns[] = TourDetailPeer::SORTING;
		}

	} 
	
	public function setActivities($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->activities !== $v) {
			$this->activities = $v;
			$this->modifiedColumns[] = TourDetailPeer::ACTIVITIES;
		}

	} 
	
	public function setTourOptionGender($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tour_option_gender !== $v) {
			$this->tour_option_gender = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_OPTION_GENDER;
		}

	} 
	
	public function setTourObjectFit($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tour_object_fit !== $v) {
			$this->tour_object_fit = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_OBJECT_FIT;
		}

	} 
	
	public function setEnabled($v)
	{

		if ($this->enabled !== $v || $v === false) {
			$this->enabled = $v;
			$this->modifiedColumns[] = TourDetailPeer::ENABLED;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = TourDetailPeer::PRIORITY;
		}

	} 
	
	public function setPolicyPrice($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->policy_price !== $v) {
			$this->policy_price = $v;
			$this->modifiedColumns[] = TourDetailPeer::POLICY_PRICE;
		}

	} 
	
	public function setPolicyTicket($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->policy_ticket !== $v) {
			$this->policy_ticket = $v;
			$this->modifiedColumns[] = TourDetailPeer::POLICY_TICKET;
		}

	} 
	
	public function setSuccessCreated($v)
	{

		if ($this->success_created !== $v || $v === false) {
			$this->success_created = $v;
			$this->modifiedColumns[] = TourDetailPeer::SUCCESS_CREATED;
		}

	} 
	
	public function setTourFeatured($v)
	{

		if ($this->tour_featured !== $v || $v === false) {
			$this->tour_featured = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_FEATURED;
		}

	} 
	
	public function setTourFavourite($v)
	{

		if ($this->tour_favourite !== $v || $v === false) {
			$this->tour_favourite = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_FAVOURITE;
		}

	} 
	
	public function setTourWeekend($v)
	{

		if ($this->tour_weekend !== $v || $v === false) {
			$this->tour_weekend = $v;
			$this->modifiedColumns[] = TourDetailPeer::TOUR_WEEKEND;
		}

	} 
	
	public function setOnHomepage($v)
	{

		if ($this->on_homepage !== $v || $v === false) {
			$this->on_homepage = $v;
			$this->modifiedColumns[] = TourDetailPeer::ON_HOMEPAGE;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = TourDetailPeer::TITLE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = TourDetailPeer::DESCRIPTION;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = TourDetailPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = TourDetailPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = TourDetailPeer::IMG_SEO;
		}

	} 
	
	public function setKeyword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyword !== $v) {
			$this->keyword = $v;
			$this->modifiedColumns[] = TourDetailPeer::KEYWORD;
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
			$this->modifiedColumns[] = TourDetailPeer::CREATED_AT;
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
			$this->modifiedColumns[] = TourDetailPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->enable = $rs->getBoolean($startcol + 2);

			$this->user_id = $rs->getInt($startcol + 3);

			$this->tour_type_id = $rs->getInt($startcol + 4);

			$this->home_diem_den_item_id = $rs->getInt($startcol + 5);

			$this->area_id = $rs->getInt($startcol + 6);

			$this->region_id = $rs->getInt($startcol + 7);

			$this->city_id = $rs->getInt($startcol + 8);

			$this->time_type_id = $rs->getInt($startcol + 9);

			$this->time_category_day_id = $rs->getInt($startcol + 10);

			$this->type_pricing_id = $rs->getInt($startcol + 11);

			$this->type_pricing_service_id = $rs->getInt($startcol + 12);

			$this->start = $rs->getString($startcol + 13);

			$this->end = $rs->getString($startcol + 14);

			$this->coo_start = $rs->getString($startcol + 15);

			$this->lat_start = $rs->getString($startcol + 16);

			$this->lng_start = $rs->getString($startcol + 17);

			$this->coo_end = $rs->getString($startcol + 18);

			$this->lat_end = $rs->getString($startcol + 19);

			$this->lng_end = $rs->getString($startcol + 20);

			$this->detail = $rs->getString($startcol + 21);

			$this->date_start = $rs->getDate($startcol + 22, null);

			$this->date_end = $rs->getDate($startcol + 23, null);

			$this->hour_start = $rs->getString($startcol + 24);

			$this->hour_day = $rs->getString($startcol + 25);

			$this->hour_week = $rs->getString($startcol + 26);

			$this->day_in_week = $rs->getString($startcol + 27);

			$this->price = $rs->getFloat($startcol + 28);

			$this->price_baby = $rs->getFloat($startcol + 29);

			$this->price_kid = $rs->getFloat($startcol + 30);

			$this->payment_type_id = $rs->getInt($startcol + 31);

			$this->security_deposit = $rs->getInt($startcol + 32);

			$this->sum_number_seat = $rs->getInt($startcol + 33);

			$this->number_seat_min = $rs->getInt($startcol + 34);

			$this->number_seat = $rs->getInt($startcol + 35);

			$this->number_seat_booking = $rs->getInt($startcol + 36);

			$this->allow_booking_fast = $rs->getBoolean($startcol + 37);

			$this->note = $rs->getString($startcol + 38);

			$this->utilities = $rs->getString($startcol + 39);

			$this->sorting = $rs->getString($startcol + 40);

			$this->activities = $rs->getString($startcol + 41);

			$this->tour_option_gender = $rs->getString($startcol + 42);

			$this->tour_object_fit = $rs->getString($startcol + 43);

			$this->enabled = $rs->getBoolean($startcol + 44);

			$this->priority = $rs->getInt($startcol + 45);

			$this->policy_price = $rs->getString($startcol + 46);

			$this->policy_ticket = $rs->getString($startcol + 47);

			$this->success_created = $rs->getBoolean($startcol + 48);

			$this->tour_featured = $rs->getBoolean($startcol + 49);

			$this->tour_favourite = $rs->getBoolean($startcol + 50);

			$this->tour_weekend = $rs->getBoolean($startcol + 51);

			$this->on_homepage = $rs->getBoolean($startcol + 52);

			$this->title = $rs->getString($startcol + 53);

			$this->description = $rs->getString($startcol + 54);

			$this->title_seo = $rs->getString($startcol + 55);

			$this->description_seo = $rs->getString($startcol + 56);

			$this->img_seo = $rs->getString($startcol + 57);

			$this->keyword = $rs->getString($startcol + 58);

			$this->created_at = $rs->getTimestamp($startcol + 59, null);

			$this->updated_at = $rs->getTimestamp($startcol + 60, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 61; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourDetail object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDetailPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourDetailPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourDetailPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TourDetailPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDetailPeer::DATABASE_NAME);
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

			if ($this->aDichungUser !== null) {
				if ($this->aDichungUser->isModified()) {
					$affectedRows += $this->aDichungUser->save($con);
				}
				$this->setDichungUser($this->aDichungUser);
			}

			if ($this->aTourType !== null) {
				if ($this->aTourType->isModified()) {
					$affectedRows += $this->aTourType->save($con);
				}
				$this->setTourType($this->aTourType);
			}

			if ($this->aHomeDiemDenItem !== null) {
				if ($this->aHomeDiemDenItem->isModified()) {
					$affectedRows += $this->aHomeDiemDenItem->save($con);
				}
				$this->setHomeDiemDenItem($this->aHomeDiemDenItem);
			}

			if ($this->aCity !== null) {
				if ($this->aCity->isModified()) {
					$affectedRows += $this->aCity->save($con);
				}
				$this->setCity($this->aCity);
			}

			if ($this->aTourTimeType !== null) {
				if ($this->aTourTimeType->isModified()) {
					$affectedRows += $this->aTourTimeType->save($con);
				}
				$this->setTourTimeType($this->aTourTimeType);
			}

			if ($this->aTourTimeCategoryDay !== null) {
				if ($this->aTourTimeCategoryDay->isModified()) {
					$affectedRows += $this->aTourTimeCategoryDay->save($con);
				}
				$this->setTourTimeCategoryDay($this->aTourTimeCategoryDay);
			}

			if ($this->aTypePricing !== null) {
				if ($this->aTypePricing->isModified()) {
					$affectedRows += $this->aTypePricing->save($con);
				}
				$this->setTypePricing($this->aTypePricing);
			}

			if ($this->aTypePricingService !== null) {
				if ($this->aTypePricingService->isModified()) {
					$affectedRows += $this->aTypePricingService->save($con);
				}
				$this->setTypePricingService($this->aTypePricingService);
			}

			if ($this->aPaymentType !== null) {
				if ($this->aPaymentType->isModified()) {
					$affectedRows += $this->aPaymentType->save($con);
				}
				$this->setPaymentType($this->aPaymentType);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourDetailPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourDetailPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collInfoTourDetailByLanguages !== null) {
				foreach($this->collInfoTourDetailByLanguages as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourDiscounts !== null) {
				foreach($this->collTourDiscounts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourItemImgs !== null) {
				foreach($this->collTourItemImgs as $referrerFK) {
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

			if ($this->collCommentTours !== null) {
				foreach($this->collCommentTours as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collScheduledCostTours !== null) {
				foreach($this->collScheduledCostTours as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourCooItems !== null) {
				foreach($this->collTourCooItems as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourPriceKidItems !== null) {
				foreach($this->collTourPriceKidItems as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourPriceServiceItems !== null) {
				foreach($this->collTourPriceServiceItems as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourDiscountEvents !== null) {
				foreach($this->collTourDiscountEvents as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourItemScheduleDays !== null) {
				foreach($this->collTourItemScheduleDays as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourItemImgScheduleDays !== null) {
				foreach($this->collTourItemImgScheduleDays as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourDateRequestServices !== null) {
				foreach($this->collTourDateRequestServices as $referrerFK) {
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

			if ($this->aDichungUser !== null) {
				if (!$this->aDichungUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDichungUser->getValidationFailures());
				}
			}

			if ($this->aTourType !== null) {
				if (!$this->aTourType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourType->getValidationFailures());
				}
			}

			if ($this->aHomeDiemDenItem !== null) {
				if (!$this->aHomeDiemDenItem->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHomeDiemDenItem->getValidationFailures());
				}
			}

			if ($this->aCity !== null) {
				if (!$this->aCity->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCity->getValidationFailures());
				}
			}

			if ($this->aTourTimeType !== null) {
				if (!$this->aTourTimeType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourTimeType->getValidationFailures());
				}
			}

			if ($this->aTourTimeCategoryDay !== null) {
				if (!$this->aTourTimeCategoryDay->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourTimeCategoryDay->getValidationFailures());
				}
			}

			if ($this->aTypePricing !== null) {
				if (!$this->aTypePricing->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTypePricing->getValidationFailures());
				}
			}

			if ($this->aTypePricingService !== null) {
				if (!$this->aTypePricingService->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTypePricingService->getValidationFailures());
				}
			}

			if ($this->aPaymentType !== null) {
				if (!$this->aPaymentType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPaymentType->getValidationFailures());
				}
			}


			if (($retval = TourDetailPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collInfoTourDetailByLanguages !== null) {
					foreach($this->collInfoTourDetailByLanguages as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourDiscounts !== null) {
					foreach($this->collTourDiscounts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourItemImgs !== null) {
					foreach($this->collTourItemImgs as $referrerFK) {
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

				if ($this->collCommentTours !== null) {
					foreach($this->collCommentTours as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collScheduledCostTours !== null) {
					foreach($this->collScheduledCostTours as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourCooItems !== null) {
					foreach($this->collTourCooItems as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourPriceKidItems !== null) {
					foreach($this->collTourPriceKidItems as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourPriceServiceItems !== null) {
					foreach($this->collTourPriceServiceItems as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourDiscountEvents !== null) {
					foreach($this->collTourDiscountEvents as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourItemScheduleDays !== null) {
					foreach($this->collTourItemScheduleDays as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourItemImgScheduleDays !== null) {
					foreach($this->collTourItemImgScheduleDays as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourDateRequestServices !== null) {
					foreach($this->collTourDateRequestServices as $referrerFK) {
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
		$pos = TourDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getEnable();
				break;
			case 3:
				return $this->getUserId();
				break;
			case 4:
				return $this->getTourTypeId();
				break;
			case 5:
				return $this->getHomeDiemDenItemId();
				break;
			case 6:
				return $this->getAreaId();
				break;
			case 7:
				return $this->getRegionId();
				break;
			case 8:
				return $this->getCityId();
				break;
			case 9:
				return $this->getTimeTypeId();
				break;
			case 10:
				return $this->getTimeCategoryDayId();
				break;
			case 11:
				return $this->getTypePricingId();
				break;
			case 12:
				return $this->getTypePricingServiceId();
				break;
			case 13:
				return $this->getStart();
				break;
			case 14:
				return $this->getEnd();
				break;
			case 15:
				return $this->getCooStart();
				break;
			case 16:
				return $this->getLatStart();
				break;
			case 17:
				return $this->getLngStart();
				break;
			case 18:
				return $this->getCooEnd();
				break;
			case 19:
				return $this->getLatEnd();
				break;
			case 20:
				return $this->getLngEnd();
				break;
			case 21:
				return $this->getDetail();
				break;
			case 22:
				return $this->getDateStart();
				break;
			case 23:
				return $this->getDateEnd();
				break;
			case 24:
				return $this->getHourStart();
				break;
			case 25:
				return $this->getHourDay();
				break;
			case 26:
				return $this->getHourWeek();
				break;
			case 27:
				return $this->getDayInWeek();
				break;
			case 28:
				return $this->getPrice();
				break;
			case 29:
				return $this->getPriceBaby();
				break;
			case 30:
				return $this->getPriceKid();
				break;
			case 31:
				return $this->getPaymentTypeId();
				break;
			case 32:
				return $this->getSecurityDeposit();
				break;
			case 33:
				return $this->getSumNumberSeat();
				break;
			case 34:
				return $this->getNumberSeatMin();
				break;
			case 35:
				return $this->getNumberSeat();
				break;
			case 36:
				return $this->getNumberSeatBooking();
				break;
			case 37:
				return $this->getAllowBookingFast();
				break;
			case 38:
				return $this->getNote();
				break;
			case 39:
				return $this->getUtilities();
				break;
			case 40:
				return $this->getSorting();
				break;
			case 41:
				return $this->getActivities();
				break;
			case 42:
				return $this->getTourOptionGender();
				break;
			case 43:
				return $this->getTourObjectFit();
				break;
			case 44:
				return $this->getEnabled();
				break;
			case 45:
				return $this->getPriority();
				break;
			case 46:
				return $this->getPolicyPrice();
				break;
			case 47:
				return $this->getPolicyTicket();
				break;
			case 48:
				return $this->getSuccessCreated();
				break;
			case 49:
				return $this->getTourFeatured();
				break;
			case 50:
				return $this->getTourFavourite();
				break;
			case 51:
				return $this->getTourWeekend();
				break;
			case 52:
				return $this->getOnHomepage();
				break;
			case 53:
				return $this->getTitle();
				break;
			case 54:
				return $this->getDescription();
				break;
			case 55:
				return $this->getTitleSeo();
				break;
			case 56:
				return $this->getDescriptionSeo();
				break;
			case 57:
				return $this->getImgSeo();
				break;
			case 58:
				return $this->getKeyword();
				break;
			case 59:
				return $this->getCreatedAt();
				break;
			case 60:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDetailPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getEnable(),
			$keys[3] => $this->getUserId(),
			$keys[4] => $this->getTourTypeId(),
			$keys[5] => $this->getHomeDiemDenItemId(),
			$keys[6] => $this->getAreaId(),
			$keys[7] => $this->getRegionId(),
			$keys[8] => $this->getCityId(),
			$keys[9] => $this->getTimeTypeId(),
			$keys[10] => $this->getTimeCategoryDayId(),
			$keys[11] => $this->getTypePricingId(),
			$keys[12] => $this->getTypePricingServiceId(),
			$keys[13] => $this->getStart(),
			$keys[14] => $this->getEnd(),
			$keys[15] => $this->getCooStart(),
			$keys[16] => $this->getLatStart(),
			$keys[17] => $this->getLngStart(),
			$keys[18] => $this->getCooEnd(),
			$keys[19] => $this->getLatEnd(),
			$keys[20] => $this->getLngEnd(),
			$keys[21] => $this->getDetail(),
			$keys[22] => $this->getDateStart(),
			$keys[23] => $this->getDateEnd(),
			$keys[24] => $this->getHourStart(),
			$keys[25] => $this->getHourDay(),
			$keys[26] => $this->getHourWeek(),
			$keys[27] => $this->getDayInWeek(),
			$keys[28] => $this->getPrice(),
			$keys[29] => $this->getPriceBaby(),
			$keys[30] => $this->getPriceKid(),
			$keys[31] => $this->getPaymentTypeId(),
			$keys[32] => $this->getSecurityDeposit(),
			$keys[33] => $this->getSumNumberSeat(),
			$keys[34] => $this->getNumberSeatMin(),
			$keys[35] => $this->getNumberSeat(),
			$keys[36] => $this->getNumberSeatBooking(),
			$keys[37] => $this->getAllowBookingFast(),
			$keys[38] => $this->getNote(),
			$keys[39] => $this->getUtilities(),
			$keys[40] => $this->getSorting(),
			$keys[41] => $this->getActivities(),
			$keys[42] => $this->getTourOptionGender(),
			$keys[43] => $this->getTourObjectFit(),
			$keys[44] => $this->getEnabled(),
			$keys[45] => $this->getPriority(),
			$keys[46] => $this->getPolicyPrice(),
			$keys[47] => $this->getPolicyTicket(),
			$keys[48] => $this->getSuccessCreated(),
			$keys[49] => $this->getTourFeatured(),
			$keys[50] => $this->getTourFavourite(),
			$keys[51] => $this->getTourWeekend(),
			$keys[52] => $this->getOnHomepage(),
			$keys[53] => $this->getTitle(),
			$keys[54] => $this->getDescription(),
			$keys[55] => $this->getTitleSeo(),
			$keys[56] => $this->getDescriptionSeo(),
			$keys[57] => $this->getImgSeo(),
			$keys[58] => $this->getKeyword(),
			$keys[59] => $this->getCreatedAt(),
			$keys[60] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDetailPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setEnable($value);
				break;
			case 3:
				$this->setUserId($value);
				break;
			case 4:
				$this->setTourTypeId($value);
				break;
			case 5:
				$this->setHomeDiemDenItemId($value);
				break;
			case 6:
				$this->setAreaId($value);
				break;
			case 7:
				$this->setRegionId($value);
				break;
			case 8:
				$this->setCityId($value);
				break;
			case 9:
				$this->setTimeTypeId($value);
				break;
			case 10:
				$this->setTimeCategoryDayId($value);
				break;
			case 11:
				$this->setTypePricingId($value);
				break;
			case 12:
				$this->setTypePricingServiceId($value);
				break;
			case 13:
				$this->setStart($value);
				break;
			case 14:
				$this->setEnd($value);
				break;
			case 15:
				$this->setCooStart($value);
				break;
			case 16:
				$this->setLatStart($value);
				break;
			case 17:
				$this->setLngStart($value);
				break;
			case 18:
				$this->setCooEnd($value);
				break;
			case 19:
				$this->setLatEnd($value);
				break;
			case 20:
				$this->setLngEnd($value);
				break;
			case 21:
				$this->setDetail($value);
				break;
			case 22:
				$this->setDateStart($value);
				break;
			case 23:
				$this->setDateEnd($value);
				break;
			case 24:
				$this->setHourStart($value);
				break;
			case 25:
				$this->setHourDay($value);
				break;
			case 26:
				$this->setHourWeek($value);
				break;
			case 27:
				$this->setDayInWeek($value);
				break;
			case 28:
				$this->setPrice($value);
				break;
			case 29:
				$this->setPriceBaby($value);
				break;
			case 30:
				$this->setPriceKid($value);
				break;
			case 31:
				$this->setPaymentTypeId($value);
				break;
			case 32:
				$this->setSecurityDeposit($value);
				break;
			case 33:
				$this->setSumNumberSeat($value);
				break;
			case 34:
				$this->setNumberSeatMin($value);
				break;
			case 35:
				$this->setNumberSeat($value);
				break;
			case 36:
				$this->setNumberSeatBooking($value);
				break;
			case 37:
				$this->setAllowBookingFast($value);
				break;
			case 38:
				$this->setNote($value);
				break;
			case 39:
				$this->setUtilities($value);
				break;
			case 40:
				$this->setSorting($value);
				break;
			case 41:
				$this->setActivities($value);
				break;
			case 42:
				$this->setTourOptionGender($value);
				break;
			case 43:
				$this->setTourObjectFit($value);
				break;
			case 44:
				$this->setEnabled($value);
				break;
			case 45:
				$this->setPriority($value);
				break;
			case 46:
				$this->setPolicyPrice($value);
				break;
			case 47:
				$this->setPolicyTicket($value);
				break;
			case 48:
				$this->setSuccessCreated($value);
				break;
			case 49:
				$this->setTourFeatured($value);
				break;
			case 50:
				$this->setTourFavourite($value);
				break;
			case 51:
				$this->setTourWeekend($value);
				break;
			case 52:
				$this->setOnHomepage($value);
				break;
			case 53:
				$this->setTitle($value);
				break;
			case 54:
				$this->setDescription($value);
				break;
			case 55:
				$this->setTitleSeo($value);
				break;
			case 56:
				$this->setDescriptionSeo($value);
				break;
			case 57:
				$this->setImgSeo($value);
				break;
			case 58:
				$this->setKeyword($value);
				break;
			case 59:
				$this->setCreatedAt($value);
				break;
			case 60:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDetailPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setEnable($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTourTypeId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHomeDiemDenItemId($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAreaId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRegionId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCityId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTimeTypeId($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTimeCategoryDayId($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTypePricingId($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTypePricingServiceId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setStart($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEnd($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCooStart($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setLatStart($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setLngStart($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCooEnd($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setLatEnd($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLngEnd($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDetail($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDateStart($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setDateEnd($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setHourStart($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setHourDay($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setHourWeek($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setDayInWeek($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setPrice($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setPriceBaby($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setPriceKid($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setPaymentTypeId($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setSecurityDeposit($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setSumNumberSeat($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setNumberSeatMin($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setNumberSeat($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setNumberSeatBooking($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setAllowBookingFast($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setNote($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setUtilities($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setSorting($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setActivities($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setTourOptionGender($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setTourObjectFit($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setEnabled($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setPriority($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setPolicyPrice($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setPolicyTicket($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setSuccessCreated($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setTourFeatured($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setTourFavourite($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setTourWeekend($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setOnHomepage($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setTitle($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setDescription($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setTitleSeo($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setDescriptionSeo($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setImgSeo($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setKeyword($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setCreatedAt($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setUpdatedAt($arr[$keys[60]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourDetailPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourDetailPeer::ID)) $criteria->add(TourDetailPeer::ID, $this->id);
		if ($this->isColumnModified(TourDetailPeer::PARTNER_ID)) $criteria->add(TourDetailPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(TourDetailPeer::ENABLE)) $criteria->add(TourDetailPeer::ENABLE, $this->enable);
		if ($this->isColumnModified(TourDetailPeer::USER_ID)) $criteria->add(TourDetailPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(TourDetailPeer::TOUR_TYPE_ID)) $criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->tour_type_id);
		if ($this->isColumnModified(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID)) $criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->home_diem_den_item_id);
		if ($this->isColumnModified(TourDetailPeer::AREA_ID)) $criteria->add(TourDetailPeer::AREA_ID, $this->area_id);
		if ($this->isColumnModified(TourDetailPeer::REGION_ID)) $criteria->add(TourDetailPeer::REGION_ID, $this->region_id);
		if ($this->isColumnModified(TourDetailPeer::CITY_ID)) $criteria->add(TourDetailPeer::CITY_ID, $this->city_id);
		if ($this->isColumnModified(TourDetailPeer::TIME_TYPE_ID)) $criteria->add(TourDetailPeer::TIME_TYPE_ID, $this->time_type_id);
		if ($this->isColumnModified(TourDetailPeer::TIME_CATEGORY_DAY_ID)) $criteria->add(TourDetailPeer::TIME_CATEGORY_DAY_ID, $this->time_category_day_id);
		if ($this->isColumnModified(TourDetailPeer::TYPE_PRICING_ID)) $criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->type_pricing_id);
		if ($this->isColumnModified(TourDetailPeer::TYPE_PRICING_SERVICE_ID)) $criteria->add(TourDetailPeer::TYPE_PRICING_SERVICE_ID, $this->type_pricing_service_id);
		if ($this->isColumnModified(TourDetailPeer::START)) $criteria->add(TourDetailPeer::START, $this->start);
		if ($this->isColumnModified(TourDetailPeer::END)) $criteria->add(TourDetailPeer::END, $this->end);
		if ($this->isColumnModified(TourDetailPeer::COO_START)) $criteria->add(TourDetailPeer::COO_START, $this->coo_start);
		if ($this->isColumnModified(TourDetailPeer::LAT_START)) $criteria->add(TourDetailPeer::LAT_START, $this->lat_start);
		if ($this->isColumnModified(TourDetailPeer::LNG_START)) $criteria->add(TourDetailPeer::LNG_START, $this->lng_start);
		if ($this->isColumnModified(TourDetailPeer::COO_END)) $criteria->add(TourDetailPeer::COO_END, $this->coo_end);
		if ($this->isColumnModified(TourDetailPeer::LAT_END)) $criteria->add(TourDetailPeer::LAT_END, $this->lat_end);
		if ($this->isColumnModified(TourDetailPeer::LNG_END)) $criteria->add(TourDetailPeer::LNG_END, $this->lng_end);
		if ($this->isColumnModified(TourDetailPeer::DETAIL)) $criteria->add(TourDetailPeer::DETAIL, $this->detail);
		if ($this->isColumnModified(TourDetailPeer::DATE_START)) $criteria->add(TourDetailPeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(TourDetailPeer::DATE_END)) $criteria->add(TourDetailPeer::DATE_END, $this->date_end);
		if ($this->isColumnModified(TourDetailPeer::HOUR_START)) $criteria->add(TourDetailPeer::HOUR_START, $this->hour_start);
		if ($this->isColumnModified(TourDetailPeer::HOUR_DAY)) $criteria->add(TourDetailPeer::HOUR_DAY, $this->hour_day);
		if ($this->isColumnModified(TourDetailPeer::HOUR_WEEK)) $criteria->add(TourDetailPeer::HOUR_WEEK, $this->hour_week);
		if ($this->isColumnModified(TourDetailPeer::DAY_IN_WEEK)) $criteria->add(TourDetailPeer::DAY_IN_WEEK, $this->day_in_week);
		if ($this->isColumnModified(TourDetailPeer::PRICE)) $criteria->add(TourDetailPeer::PRICE, $this->price);
		if ($this->isColumnModified(TourDetailPeer::PRICE_BABY)) $criteria->add(TourDetailPeer::PRICE_BABY, $this->price_baby);
		if ($this->isColumnModified(TourDetailPeer::PRICE_KID)) $criteria->add(TourDetailPeer::PRICE_KID, $this->price_kid);
		if ($this->isColumnModified(TourDetailPeer::PAYMENT_TYPE_ID)) $criteria->add(TourDetailPeer::PAYMENT_TYPE_ID, $this->payment_type_id);
		if ($this->isColumnModified(TourDetailPeer::SECURITY_DEPOSIT)) $criteria->add(TourDetailPeer::SECURITY_DEPOSIT, $this->security_deposit);
		if ($this->isColumnModified(TourDetailPeer::SUM_NUMBER_SEAT)) $criteria->add(TourDetailPeer::SUM_NUMBER_SEAT, $this->sum_number_seat);
		if ($this->isColumnModified(TourDetailPeer::NUMBER_SEAT_MIN)) $criteria->add(TourDetailPeer::NUMBER_SEAT_MIN, $this->number_seat_min);
		if ($this->isColumnModified(TourDetailPeer::NUMBER_SEAT)) $criteria->add(TourDetailPeer::NUMBER_SEAT, $this->number_seat);
		if ($this->isColumnModified(TourDetailPeer::NUMBER_SEAT_BOOKING)) $criteria->add(TourDetailPeer::NUMBER_SEAT_BOOKING, $this->number_seat_booking);
		if ($this->isColumnModified(TourDetailPeer::ALLOW_BOOKING_FAST)) $criteria->add(TourDetailPeer::ALLOW_BOOKING_FAST, $this->allow_booking_fast);
		if ($this->isColumnModified(TourDetailPeer::NOTE)) $criteria->add(TourDetailPeer::NOTE, $this->note);
		if ($this->isColumnModified(TourDetailPeer::UTILITIES)) $criteria->add(TourDetailPeer::UTILITIES, $this->utilities);
		if ($this->isColumnModified(TourDetailPeer::SORTING)) $criteria->add(TourDetailPeer::SORTING, $this->sorting);
		if ($this->isColumnModified(TourDetailPeer::ACTIVITIES)) $criteria->add(TourDetailPeer::ACTIVITIES, $this->activities);
		if ($this->isColumnModified(TourDetailPeer::TOUR_OPTION_GENDER)) $criteria->add(TourDetailPeer::TOUR_OPTION_GENDER, $this->tour_option_gender);
		if ($this->isColumnModified(TourDetailPeer::TOUR_OBJECT_FIT)) $criteria->add(TourDetailPeer::TOUR_OBJECT_FIT, $this->tour_object_fit);
		if ($this->isColumnModified(TourDetailPeer::ENABLED)) $criteria->add(TourDetailPeer::ENABLED, $this->enabled);
		if ($this->isColumnModified(TourDetailPeer::PRIORITY)) $criteria->add(TourDetailPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(TourDetailPeer::POLICY_PRICE)) $criteria->add(TourDetailPeer::POLICY_PRICE, $this->policy_price);
		if ($this->isColumnModified(TourDetailPeer::POLICY_TICKET)) $criteria->add(TourDetailPeer::POLICY_TICKET, $this->policy_ticket);
		if ($this->isColumnModified(TourDetailPeer::SUCCESS_CREATED)) $criteria->add(TourDetailPeer::SUCCESS_CREATED, $this->success_created);
		if ($this->isColumnModified(TourDetailPeer::TOUR_FEATURED)) $criteria->add(TourDetailPeer::TOUR_FEATURED, $this->tour_featured);
		if ($this->isColumnModified(TourDetailPeer::TOUR_FAVOURITE)) $criteria->add(TourDetailPeer::TOUR_FAVOURITE, $this->tour_favourite);
		if ($this->isColumnModified(TourDetailPeer::TOUR_WEEKEND)) $criteria->add(TourDetailPeer::TOUR_WEEKEND, $this->tour_weekend);
		if ($this->isColumnModified(TourDetailPeer::ON_HOMEPAGE)) $criteria->add(TourDetailPeer::ON_HOMEPAGE, $this->on_homepage);
		if ($this->isColumnModified(TourDetailPeer::TITLE)) $criteria->add(TourDetailPeer::TITLE, $this->title);
		if ($this->isColumnModified(TourDetailPeer::DESCRIPTION)) $criteria->add(TourDetailPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(TourDetailPeer::TITLE_SEO)) $criteria->add(TourDetailPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(TourDetailPeer::DESCRIPTION_SEO)) $criteria->add(TourDetailPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(TourDetailPeer::IMG_SEO)) $criteria->add(TourDetailPeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(TourDetailPeer::KEYWORD)) $criteria->add(TourDetailPeer::KEYWORD, $this->keyword);
		if ($this->isColumnModified(TourDetailPeer::CREATED_AT)) $criteria->add(TourDetailPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TourDetailPeer::UPDATED_AT)) $criteria->add(TourDetailPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourDetailPeer::DATABASE_NAME);

		$criteria->add(TourDetailPeer::ID, $this->id);

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

		$copyObj->setEnable($this->enable);

		$copyObj->setUserId($this->user_id);

		$copyObj->setTourTypeId($this->tour_type_id);

		$copyObj->setHomeDiemDenItemId($this->home_diem_den_item_id);

		$copyObj->setAreaId($this->area_id);

		$copyObj->setRegionId($this->region_id);

		$copyObj->setCityId($this->city_id);

		$copyObj->setTimeTypeId($this->time_type_id);

		$copyObj->setTimeCategoryDayId($this->time_category_day_id);

		$copyObj->setTypePricingId($this->type_pricing_id);

		$copyObj->setTypePricingServiceId($this->type_pricing_service_id);

		$copyObj->setStart($this->start);

		$copyObj->setEnd($this->end);

		$copyObj->setCooStart($this->coo_start);

		$copyObj->setLatStart($this->lat_start);

		$copyObj->setLngStart($this->lng_start);

		$copyObj->setCooEnd($this->coo_end);

		$copyObj->setLatEnd($this->lat_end);

		$copyObj->setLngEnd($this->lng_end);

		$copyObj->setDetail($this->detail);

		$copyObj->setDateStart($this->date_start);

		$copyObj->setDateEnd($this->date_end);

		$copyObj->setHourStart($this->hour_start);

		$copyObj->setHourDay($this->hour_day);

		$copyObj->setHourWeek($this->hour_week);

		$copyObj->setDayInWeek($this->day_in_week);

		$copyObj->setPrice($this->price);

		$copyObj->setPriceBaby($this->price_baby);

		$copyObj->setPriceKid($this->price_kid);

		$copyObj->setPaymentTypeId($this->payment_type_id);

		$copyObj->setSecurityDeposit($this->security_deposit);

		$copyObj->setSumNumberSeat($this->sum_number_seat);

		$copyObj->setNumberSeatMin($this->number_seat_min);

		$copyObj->setNumberSeat($this->number_seat);

		$copyObj->setNumberSeatBooking($this->number_seat_booking);

		$copyObj->setAllowBookingFast($this->allow_booking_fast);

		$copyObj->setNote($this->note);

		$copyObj->setUtilities($this->utilities);

		$copyObj->setSorting($this->sorting);

		$copyObj->setActivities($this->activities);

		$copyObj->setTourOptionGender($this->tour_option_gender);

		$copyObj->setTourObjectFit($this->tour_object_fit);

		$copyObj->setEnabled($this->enabled);

		$copyObj->setPriority($this->priority);

		$copyObj->setPolicyPrice($this->policy_price);

		$copyObj->setPolicyTicket($this->policy_ticket);

		$copyObj->setSuccessCreated($this->success_created);

		$copyObj->setTourFeatured($this->tour_featured);

		$copyObj->setTourFavourite($this->tour_favourite);

		$copyObj->setTourWeekend($this->tour_weekend);

		$copyObj->setOnHomepage($this->on_homepage);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setKeyword($this->keyword);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getInfoTourDetailByLanguages() as $relObj) {
				$copyObj->addInfoTourDetailByLanguage($relObj->copy($deepCopy));
			}

			foreach($this->getTourDiscounts() as $relObj) {
				$copyObj->addTourDiscount($relObj->copy($deepCopy));
			}

			foreach($this->getTourItemImgs() as $relObj) {
				$copyObj->addTourItemImg($relObj->copy($deepCopy));
			}

			foreach($this->getBookingTours() as $relObj) {
				$copyObj->addBookingTour($relObj->copy($deepCopy));
			}

			foreach($this->getCommentTours() as $relObj) {
				$copyObj->addCommentTour($relObj->copy($deepCopy));
			}

			foreach($this->getScheduledCostTours() as $relObj) {
				$copyObj->addScheduledCostTour($relObj->copy($deepCopy));
			}

			foreach($this->getTourCooItems() as $relObj) {
				$copyObj->addTourCooItem($relObj->copy($deepCopy));
			}

			foreach($this->getTourPriceKidItems() as $relObj) {
				$copyObj->addTourPriceKidItem($relObj->copy($deepCopy));
			}

			foreach($this->getTourPriceServiceItems() as $relObj) {
				$copyObj->addTourPriceServiceItem($relObj->copy($deepCopy));
			}

			foreach($this->getTourDiscountEvents() as $relObj) {
				$copyObj->addTourDiscountEvent($relObj->copy($deepCopy));
			}

			foreach($this->getTourItemScheduleDays() as $relObj) {
				$copyObj->addTourItemScheduleDay($relObj->copy($deepCopy));
			}

			foreach($this->getTourItemImgScheduleDays() as $relObj) {
				$copyObj->addTourItemImgScheduleDay($relObj->copy($deepCopy));
			}

			foreach($this->getTourDateRequestServices() as $relObj) {
				$copyObj->addTourDateRequestService($relObj->copy($deepCopy));
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
			self::$peer = new TourDetailPeer();
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

	
	public function setDichungUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}


		$this->aDichungUser = $v;
	}


	
	static $DichungUser = array();
	
	public function getDichungUser($con = null)
	{
		if ($this->aDichungUser === null && ($this->user_id !== null)) {
						if(!isset(self::$DichungUser[$this->user_id])){
				self::$DichungUser[$this->user_id] = DichungUserPeer::retrieveByPK($this->user_id, $con);
			}
			$this->aDichungUser = self::$DichungUser[$this->user_id];

			
		}
		return $this->aDichungUser;
	}

	
	public function setTourType($v)
	{


		if ($v === null) {
			$this->setTourTypeId(NULL);
		} else {
			$this->setTourTypeId($v->getId());
		}


		$this->aTourType = $v;
	}


	
	static $TourType = array();
	
	public function getTourType($con = null)
	{
		if ($this->aTourType === null && ($this->tour_type_id !== null)) {
						if(!isset(self::$TourType[$this->tour_type_id])){
				self::$TourType[$this->tour_type_id] = TourTypePeer::retrieveByPK($this->tour_type_id, $con);
			}
			$this->aTourType = self::$TourType[$this->tour_type_id];

			
		}
		return $this->aTourType;
	}

	
	public function setHomeDiemDenItem($v)
	{


		if ($v === null) {
			$this->setHomeDiemDenItemId(NULL);
		} else {
			$this->setHomeDiemDenItemId($v->getId());
		}


		$this->aHomeDiemDenItem = $v;
	}


	
	static $HomeDiemDenItem = array();
	
	public function getHomeDiemDenItem($con = null)
	{
		if ($this->aHomeDiemDenItem === null && ($this->home_diem_den_item_id !== null)) {
						if(!isset(self::$HomeDiemDenItem[$this->home_diem_den_item_id])){
				self::$HomeDiemDenItem[$this->home_diem_den_item_id] = HomeDiemDenItemPeer::retrieveByPK($this->home_diem_den_item_id, $con);
			}
			$this->aHomeDiemDenItem = self::$HomeDiemDenItem[$this->home_diem_den_item_id];

			
		}
		return $this->aHomeDiemDenItem;
	}

	
	public function setCity($v)
	{


		if ($v === null) {
			$this->setCityId(NULL);
		} else {
			$this->setCityId($v->getId());
		}


		$this->aCity = $v;
	}


	
	static $City = array();
	
	public function getCity($con = null)
	{
		if ($this->aCity === null && ($this->city_id !== null)) {
						if(!isset(self::$City[$this->city_id])){
				self::$City[$this->city_id] = CityPeer::retrieveByPK($this->city_id, $con);
			}
			$this->aCity = self::$City[$this->city_id];

			
		}
		return $this->aCity;
	}

	
	public function setTourTimeType($v)
	{


		if ($v === null) {
			$this->setTimeTypeId('0');
		} else {
			$this->setTimeTypeId($v->getId());
		}


		$this->aTourTimeType = $v;
	}


	
	static $TourTimeType = array();
	
	public function getTourTimeType($con = null)
	{
		if ($this->aTourTimeType === null && ($this->time_type_id !== null)) {
						if(!isset(self::$TourTimeType[$this->time_type_id])){
				self::$TourTimeType[$this->time_type_id] = TourTimeTypePeer::retrieveByPK($this->time_type_id, $con);
			}
			$this->aTourTimeType = self::$TourTimeType[$this->time_type_id];

			
		}
		return $this->aTourTimeType;
	}

	
	public function setTourTimeCategoryDay($v)
	{


		if ($v === null) {
			$this->setTimeCategoryDayId('0');
		} else {
			$this->setTimeCategoryDayId($v->getId());
		}


		$this->aTourTimeCategoryDay = $v;
	}


	
	static $TourTimeCategoryDay = array();
	
	public function getTourTimeCategoryDay($con = null)
	{
		if ($this->aTourTimeCategoryDay === null && ($this->time_category_day_id !== null)) {
						if(!isset(self::$TourTimeCategoryDay[$this->time_category_day_id])){
				self::$TourTimeCategoryDay[$this->time_category_day_id] = TourTimeCategoryDayPeer::retrieveByPK($this->time_category_day_id, $con);
			}
			$this->aTourTimeCategoryDay = self::$TourTimeCategoryDay[$this->time_category_day_id];

			
		}
		return $this->aTourTimeCategoryDay;
	}

	
	public function setTypePricing($v)
	{


		if ($v === null) {
			$this->setTypePricingId('1');
		} else {
			$this->setTypePricingId($v->getId());
		}


		$this->aTypePricing = $v;
	}


	
	static $TypePricing = array();
	
	public function getTypePricing($con = null)
	{
		if ($this->aTypePricing === null && ($this->type_pricing_id !== null)) {
						if(!isset(self::$TypePricing[$this->type_pricing_id])){
				self::$TypePricing[$this->type_pricing_id] = TypePricingPeer::retrieveByPK($this->type_pricing_id, $con);
			}
			$this->aTypePricing = self::$TypePricing[$this->type_pricing_id];

			
		}
		return $this->aTypePricing;
	}

	
	public function setTypePricingService($v)
	{


		if ($v === null) {
			$this->setTypePricingServiceId('1');
		} else {
			$this->setTypePricingServiceId($v->getId());
		}


		$this->aTypePricingService = $v;
	}


	
	static $TypePricingService = array();
	
	public function getTypePricingService($con = null)
	{
		if ($this->aTypePricingService === null && ($this->type_pricing_service_id !== null)) {
						if(!isset(self::$TypePricingService[$this->type_pricing_service_id])){
				self::$TypePricingService[$this->type_pricing_service_id] = TypePricingServicePeer::retrieveByPK($this->type_pricing_service_id, $con);
			}
			$this->aTypePricingService = self::$TypePricingService[$this->type_pricing_service_id];

			
		}
		return $this->aTypePricingService;
	}

	
	public function setPaymentType($v)
	{


		if ($v === null) {
			$this->setPaymentTypeId('1');
		} else {
			$this->setPaymentTypeId($v->getId());
		}


		$this->aPaymentType = $v;
	}


	
	static $PaymentType = array();
	
	public function getPaymentType($con = null)
	{
		if ($this->aPaymentType === null && ($this->payment_type_id !== null)) {
						if(!isset(self::$PaymentType[$this->payment_type_id])){
				self::$PaymentType[$this->payment_type_id] = PaymentTypePeer::retrieveByPK($this->payment_type_id, $con);
			}
			$this->aPaymentType = self::$PaymentType[$this->payment_type_id];

			
		}
		return $this->aPaymentType;
	}

	
	public function initInfoTourDetailByLanguages()
	{
		if ($this->collInfoTourDetailByLanguages === null) {
			$this->collInfoTourDetailByLanguages = array();
		}
	}

	
	public function getInfoTourDetailByLanguages($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collInfoTourDetailByLanguages === null) {
			if ($this->isNew()) {
			   $this->collInfoTourDetailByLanguages = array();
			} else {

				$criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->getId());

				InfoTourDetailByLanguagePeer::addSelectColumns($criteria);
				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->getId());

				InfoTourDetailByLanguagePeer::addSelectColumns($criteria);
				if (!isset($this->lastInfoTourDetailByLanguageCriteria) || !$this->lastInfoTourDetailByLanguageCriteria->equals($criteria)) {
					$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastInfoTourDetailByLanguageCriteria = $criteria;
		return $this->collInfoTourDetailByLanguages;
	}

	
	public function countInfoTourDetailByLanguages($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->getId());

		return InfoTourDetailByLanguagePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addInfoTourDetailByLanguage(InfoTourDetailByLanguage $l)
	{
		$this->collInfoTourDetailByLanguages[] = $l;
		$l->setTourDetail($this);
	}


	
	public function getInfoTourDetailByLanguagesJoinTypeLanguage($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collInfoTourDetailByLanguages === null) {
			if ($this->isNew()) {
				$this->collInfoTourDetailByLanguages = array();
			} else {

				$criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->getId());

				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelectJoinTypeLanguage($criteria, $con);
			}
		} else {
									
			$criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastInfoTourDetailByLanguageCriteria) || !$this->lastInfoTourDetailByLanguageCriteria->equals($criteria)) {
				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelectJoinTypeLanguage($criteria, $con);
			}
		}
		$this->lastInfoTourDetailByLanguageCriteria = $criteria;

		return $this->collInfoTourDetailByLanguages;
	}

	
	public function initTourDiscounts()
	{
		if ($this->collTourDiscounts === null) {
			$this->collTourDiscounts = array();
		}
	}

	
	public function getTourDiscounts($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDiscounts === null) {
			if ($this->isNew()) {
			   $this->collTourDiscounts = array();
			} else {

				$criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());

				TourDiscountPeer::addSelectColumns($criteria);
				$this->collTourDiscounts = TourDiscountPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());

				TourDiscountPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourDiscountCriteria) || !$this->lastTourDiscountCriteria->equals($criteria)) {
					$this->collTourDiscounts = TourDiscountPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourDiscountCriteria = $criteria;
		return $this->collTourDiscounts;
	}

	
	public function countTourDiscounts($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());

		return TourDiscountPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDiscount(TourDiscount $l)
	{
		$this->collTourDiscounts[] = $l;
		$l->setTourDetail($this);
	}


	
	public function getTourDiscountsJoinTourDiscountType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDiscounts === null) {
			if ($this->isNew()) {
				$this->collTourDiscounts = array();
			} else {

				$criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collTourDiscounts = TourDiscountPeer::doSelectJoinTourDiscountType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastTourDiscountCriteria) || !$this->lastTourDiscountCriteria->equals($criteria)) {
				$this->collTourDiscounts = TourDiscountPeer::doSelectJoinTourDiscountType($criteria, $con);
			}
		}
		$this->lastTourDiscountCriteria = $criteria;

		return $this->collTourDiscounts;
	}

	
	public function initTourItemImgs()
	{
		if ($this->collTourItemImgs === null) {
			$this->collTourItemImgs = array();
		}
	}

	
	public function getTourItemImgs($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourItemImgs === null) {
			if ($this->isNew()) {
			   $this->collTourItemImgs = array();
			} else {

				$criteria->add(TourItemImgPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemImgPeer::addSelectColumns($criteria);
				$this->collTourItemImgs = TourItemImgPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourItemImgPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemImgPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourItemImgCriteria) || !$this->lastTourItemImgCriteria->equals($criteria)) {
					$this->collTourItemImgs = TourItemImgPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourItemImgCriteria = $criteria;
		return $this->collTourItemImgs;
	}

	
	public function countTourItemImgs($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourItemImgPeer::TOUR_DETAIL_ID, $this->getId());

		return TourItemImgPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourItemImg(TourItemImg $l)
	{
		$this->collTourItemImgs[] = $l;
		$l->setTourDetail($this);
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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

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

		$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

		return BookingTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBookingTour(BookingTour $l)
	{
		$this->collBookingTours[] = $l;
		$l->setTourDetail($this);
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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinDichungUser($criteria = null, $con = null)
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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPaymentBookingType($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

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

				$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
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

				$criteria->add(CommentTourPeer::TOUR_ID, $this->getId());

				CommentTourPeer::addSelectColumns($criteria);
				$this->collCommentTours = CommentTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentTourPeer::TOUR_ID, $this->getId());

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

		$criteria->add(CommentTourPeer::TOUR_ID, $this->getId());

		return CommentTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentTour(CommentTour $l)
	{
		$this->collCommentTours[] = $l;
		$l->setTourDetail($this);
	}


	
	public function getCommentToursJoinDichungUser($criteria = null, $con = null)
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

				$criteria->add(CommentTourPeer::TOUR_ID, $this->getId());

				$this->collCommentTours = CommentTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentTourPeer::TOUR_ID, $this->getId());

			if (!isset($this->lastCommentTourCriteria) || !$this->lastCommentTourCriteria->equals($criteria)) {
				$this->collCommentTours = CommentTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastCommentTourCriteria = $criteria;

		return $this->collCommentTours;
	}

	
	public function initScheduledCostTours()
	{
		if ($this->collScheduledCostTours === null) {
			$this->collScheduledCostTours = array();
		}
	}

	
	public function getScheduledCostTours($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collScheduledCostTours === null) {
			if ($this->isNew()) {
			   $this->collScheduledCostTours = array();
			} else {

				$criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->getId());

				ScheduledCostTourPeer::addSelectColumns($criteria);
				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->getId());

				ScheduledCostTourPeer::addSelectColumns($criteria);
				if (!isset($this->lastScheduledCostTourCriteria) || !$this->lastScheduledCostTourCriteria->equals($criteria)) {
					$this->collScheduledCostTours = ScheduledCostTourPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastScheduledCostTourCriteria = $criteria;
		return $this->collScheduledCostTours;
	}

	
	public function countScheduledCostTours($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->getId());

		return ScheduledCostTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addScheduledCostTour(ScheduledCostTour $l)
	{
		$this->collScheduledCostTours[] = $l;
		$l->setTourDetail($this);
	}


	
	public function getScheduledCostToursJoinSuggestCostCategory($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collScheduledCostTours === null) {
			if ($this->isNew()) {
				$this->collScheduledCostTours = array();
			} else {

				$criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->getId());

				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelectJoinSuggestCostCategory($criteria, $con);
			}
		} else {
									
			$criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->getId());

			if (!isset($this->lastScheduledCostTourCriteria) || !$this->lastScheduledCostTourCriteria->equals($criteria)) {
				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelectJoinSuggestCostCategory($criteria, $con);
			}
		}
		$this->lastScheduledCostTourCriteria = $criteria;

		return $this->collScheduledCostTours;
	}

	
	public function initTourCooItems()
	{
		if ($this->collTourCooItems === null) {
			$this->collTourCooItems = array();
		}
	}

	
	public function getTourCooItems($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourCooItems === null) {
			if ($this->isNew()) {
			   $this->collTourCooItems = array();
			} else {

				$criteria->add(TourCooItemPeer::TOUR_ID, $this->getId());

				TourCooItemPeer::addSelectColumns($criteria);
				$this->collTourCooItems = TourCooItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourCooItemPeer::TOUR_ID, $this->getId());

				TourCooItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourCooItemCriteria) || !$this->lastTourCooItemCriteria->equals($criteria)) {
					$this->collTourCooItems = TourCooItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourCooItemCriteria = $criteria;
		return $this->collTourCooItems;
	}

	
	public function countTourCooItems($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourCooItemPeer::TOUR_ID, $this->getId());

		return TourCooItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourCooItem(TourCooItem $l)
	{
		$this->collTourCooItems[] = $l;
		$l->setTourDetail($this);
	}

	
	public function initTourPriceKidItems()
	{
		if ($this->collTourPriceKidItems === null) {
			$this->collTourPriceKidItems = array();
		}
	}

	
	public function getTourPriceKidItems($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourPriceKidItems === null) {
			if ($this->isNew()) {
			   $this->collTourPriceKidItems = array();
			} else {

				$criteria->add(TourPriceKidItemPeer::TOUR_DETAIL_ID, $this->getId());

				TourPriceKidItemPeer::addSelectColumns($criteria);
				$this->collTourPriceKidItems = TourPriceKidItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourPriceKidItemPeer::TOUR_DETAIL_ID, $this->getId());

				TourPriceKidItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourPriceKidItemCriteria) || !$this->lastTourPriceKidItemCriteria->equals($criteria)) {
					$this->collTourPriceKidItems = TourPriceKidItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourPriceKidItemCriteria = $criteria;
		return $this->collTourPriceKidItems;
	}

	
	public function countTourPriceKidItems($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourPriceKidItemPeer::TOUR_DETAIL_ID, $this->getId());

		return TourPriceKidItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourPriceKidItem(TourPriceKidItem $l)
	{
		$this->collTourPriceKidItems[] = $l;
		$l->setTourDetail($this);
	}

	
	public function initTourPriceServiceItems()
	{
		if ($this->collTourPriceServiceItems === null) {
			$this->collTourPriceServiceItems = array();
		}
	}

	
	public function getTourPriceServiceItems($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourPriceServiceItems === null) {
			if ($this->isNew()) {
			   $this->collTourPriceServiceItems = array();
			} else {

				$criteria->add(TourPriceServiceItemPeer::TOUR_DETAIL_ID, $this->getId());

				TourPriceServiceItemPeer::addSelectColumns($criteria);
				$this->collTourPriceServiceItems = TourPriceServiceItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourPriceServiceItemPeer::TOUR_DETAIL_ID, $this->getId());

				TourPriceServiceItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourPriceServiceItemCriteria) || !$this->lastTourPriceServiceItemCriteria->equals($criteria)) {
					$this->collTourPriceServiceItems = TourPriceServiceItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourPriceServiceItemCriteria = $criteria;
		return $this->collTourPriceServiceItems;
	}

	
	public function countTourPriceServiceItems($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourPriceServiceItemPeer::TOUR_DETAIL_ID, $this->getId());

		return TourPriceServiceItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourPriceServiceItem(TourPriceServiceItem $l)
	{
		$this->collTourPriceServiceItems[] = $l;
		$l->setTourDetail($this);
	}

	
	public function initTourDiscountEvents()
	{
		if ($this->collTourDiscountEvents === null) {
			$this->collTourDiscountEvents = array();
		}
	}

	
	public function getTourDiscountEvents($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDiscountEvents === null) {
			if ($this->isNew()) {
			   $this->collTourDiscountEvents = array();
			} else {

				$criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->getId());

				TourDiscountEventPeer::addSelectColumns($criteria);
				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->getId());

				TourDiscountEventPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourDiscountEventCriteria) || !$this->lastTourDiscountEventCriteria->equals($criteria)) {
					$this->collTourDiscountEvents = TourDiscountEventPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourDiscountEventCriteria = $criteria;
		return $this->collTourDiscountEvents;
	}

	
	public function countTourDiscountEvents($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->getId());

		return TourDiscountEventPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDiscountEvent(TourDiscountEvent $l)
	{
		$this->collTourDiscountEvents[] = $l;
		$l->setTourDetail($this);
	}


	
	public function getTourDiscountEventsJoinTourDiscountEventType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDiscountEvents === null) {
			if ($this->isNew()) {
				$this->collTourDiscountEvents = array();
			} else {

				$criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->getId());

				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelectJoinTourDiscountEventType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->getId());

			if (!isset($this->lastTourDiscountEventCriteria) || !$this->lastTourDiscountEventCriteria->equals($criteria)) {
				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelectJoinTourDiscountEventType($criteria, $con);
			}
		}
		$this->lastTourDiscountEventCriteria = $criteria;

		return $this->collTourDiscountEvents;
	}

	
	public function initTourItemScheduleDays()
	{
		if ($this->collTourItemScheduleDays === null) {
			$this->collTourItemScheduleDays = array();
		}
	}

	
	public function getTourItemScheduleDays($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourItemScheduleDays === null) {
			if ($this->isNew()) {
			   $this->collTourItemScheduleDays = array();
			} else {

				$criteria->add(TourItemScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemScheduleDayPeer::addSelectColumns($criteria);
				$this->collTourItemScheduleDays = TourItemScheduleDayPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourItemScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemScheduleDayPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourItemScheduleDayCriteria) || !$this->lastTourItemScheduleDayCriteria->equals($criteria)) {
					$this->collTourItemScheduleDays = TourItemScheduleDayPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourItemScheduleDayCriteria = $criteria;
		return $this->collTourItemScheduleDays;
	}

	
	public function countTourItemScheduleDays($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourItemScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

		return TourItemScheduleDayPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourItemScheduleDay(TourItemScheduleDay $l)
	{
		$this->collTourItemScheduleDays[] = $l;
		$l->setTourDetail($this);
	}

	
	public function initTourItemImgScheduleDays()
	{
		if ($this->collTourItemImgScheduleDays === null) {
			$this->collTourItemImgScheduleDays = array();
		}
	}

	
	public function getTourItemImgScheduleDays($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourItemImgScheduleDays === null) {
			if ($this->isNew()) {
			   $this->collTourItemImgScheduleDays = array();
			} else {

				$criteria->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemImgScheduleDayPeer::addSelectColumns($criteria);
				$this->collTourItemImgScheduleDays = TourItemImgScheduleDayPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

				TourItemImgScheduleDayPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourItemImgScheduleDayCriteria) || !$this->lastTourItemImgScheduleDayCriteria->equals($criteria)) {
					$this->collTourItemImgScheduleDays = TourItemImgScheduleDayPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourItemImgScheduleDayCriteria = $criteria;
		return $this->collTourItemImgScheduleDays;
	}

	
	public function countTourItemImgScheduleDays($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID, $this->getId());

		return TourItemImgScheduleDayPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourItemImgScheduleDay(TourItemImgScheduleDay $l)
	{
		$this->collTourItemImgScheduleDays[] = $l;
		$l->setTourDetail($this);
	}

	
	public function initTourDateRequestServices()
	{
		if ($this->collTourDateRequestServices === null) {
			$this->collTourDateRequestServices = array();
		}
	}

	
	public function getTourDateRequestServices($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDateRequestServices === null) {
			if ($this->isNew()) {
			   $this->collTourDateRequestServices = array();
			} else {

				$criteria->add(TourDateRequestServicePeer::TOUR_DETAIL_ID, $this->getId());

				TourDateRequestServicePeer::addSelectColumns($criteria);
				$this->collTourDateRequestServices = TourDateRequestServicePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDateRequestServicePeer::TOUR_DETAIL_ID, $this->getId());

				TourDateRequestServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastTourDateRequestServiceCriteria) || !$this->lastTourDateRequestServiceCriteria->equals($criteria)) {
					$this->collTourDateRequestServices = TourDateRequestServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourDateRequestServiceCriteria = $criteria;
		return $this->collTourDateRequestServices;
	}

	
	public function countTourDateRequestServices($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourDateRequestServicePeer::TOUR_DETAIL_ID, $this->getId());

		return TourDateRequestServicePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDateRequestService(TourDateRequestService $l)
	{
		$this->collTourDateRequestServices[] = $l;
		$l->setTourDetail($this);
	}

} 