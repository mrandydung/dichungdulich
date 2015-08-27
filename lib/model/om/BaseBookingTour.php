<?php


abstract class BaseBookingTour extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id;


	
	protected $user_id_sell;


	
	protected $user_id_buy;


	
	protected $tour_detail_id;


	
	protected $code_transaction;


	
	protected $payment_booking_type_id;


	
	protected $price;


	
	protected $price_security_deposit;


	
	protected $name;


	
	protected $phone_number;


	
	protected $note;


	
	protected $ticket;


	
	protected $date_start_tour;


	
	protected $number_adult = 0;


	
	protected $number_kid = 0;


	
	protected $number_baby = 0;


	
	protected $transaction_status_id;


	
	protected $booking_status_id;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aPartner;

	
	protected $aDichungUser;

	
	protected $aTourDetail;

	
	protected $aPaymentBookingType;

	
	protected $aTransactionStatus;

	
	protected $aBookingStatus;

	
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

	
	public function getUserIdSell()
	{

        return $this->user_id_sell;
	}

	
	public function getUserIdBuy()
	{

        return $this->user_id_buy;
	}

	
	public function getTourDetailId()
	{

        return $this->tour_detail_id;
	}

	
	public function getCodeTransaction()
	{

        return $this->code_transaction;
	}

	
	public function getPaymentBookingTypeId()
	{

        return $this->payment_booking_type_id;
	}

	
	public function getPrice()
	{

        return $this->price;
	}

	
	public function getPriceSecurityDeposit()
	{

        return $this->price_security_deposit;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getPhoneNumber()
	{

        return $this->phone_number;
	}

	
	public function getNote()
	{

        return $this->note;
	}

	
	public function getTicket()
	{

        return $this->ticket;
	}

	
	public function getDateStartTour($format = 'Y-m-d')
	{

		if ($this->date_start_tour === null || $this->date_start_tour === '') {
			return null;
		} elseif (!is_int($this->date_start_tour)) {
						$ts = strtotime($this->date_start_tour);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date_start_tour] as date/time value: " . var_export($this->date_start_tour, true));
			}
		} else {
			$ts = $this->date_start_tour;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getNumberAdult()
	{

        return $this->number_adult;
	}

	
	public function getNumberKid()
	{

        return $this->number_kid;
	}

	
	public function getNumberBaby()
	{

        return $this->number_baby;
	}

	
	public function getTransactionStatusId()
	{

        return $this->transaction_status_id;
	}

	
	public function getBookingStatusId()
	{

        return $this->booking_status_id;
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
			$this->modifiedColumns[] = BookingTourPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = BookingTourPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setUserIdSell($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id_sell !== $v) {
			$this->user_id_sell = $v;
			$this->modifiedColumns[] = BookingTourPeer::USER_ID_SELL;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setUserIdBuy($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id_buy !== $v) {
			$this->user_id_buy = $v;
			$this->modifiedColumns[] = BookingTourPeer::USER_ID_BUY;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = BookingTourPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setCodeTransaction($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->code_transaction !== $v) {
			$this->code_transaction = $v;
			$this->modifiedColumns[] = BookingTourPeer::CODE_TRANSACTION;
		}

	} 
	
	public function setPaymentBookingTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->payment_booking_type_id !== $v) {
			$this->payment_booking_type_id = $v;
			$this->modifiedColumns[] = BookingTourPeer::PAYMENT_BOOKING_TYPE_ID;
		}

		if ($this->aPaymentBookingType !== null && $this->aPaymentBookingType->getId() !== $v) {
			$this->aPaymentBookingType = null;
		}

	} 
	
	public function setPrice($v)
	{

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = BookingTourPeer::PRICE;
		}

	} 
	
	public function setPriceSecurityDeposit($v)
	{

		if ($this->price_security_deposit !== $v) {
			$this->price_security_deposit = $v;
			$this->modifiedColumns[] = BookingTourPeer::PRICE_SECURITY_DEPOSIT;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = BookingTourPeer::NAME;
		}

	} 
	
	public function setPhoneNumber($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->phone_number !== $v) {
			$this->phone_number = $v;
			$this->modifiedColumns[] = BookingTourPeer::PHONE_NUMBER;
		}

	} 
	
	public function setNote($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = BookingTourPeer::NOTE;
		}

	} 
	
	public function setTicket($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ticket !== $v) {
			$this->ticket = $v;
			$this->modifiedColumns[] = BookingTourPeer::TICKET;
		}

	} 
	
	public function setDateStartTour($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date_start_tour] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date_start_tour !== $ts) {
			$this->date_start_tour = $ts;
			$this->modifiedColumns[] = BookingTourPeer::DATE_START_TOUR;
		}

	} 
	
	public function setNumberAdult($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_adult !== $v || $v === 0) {
			$this->number_adult = $v;
			$this->modifiedColumns[] = BookingTourPeer::NUMBER_ADULT;
		}

	} 
	
	public function setNumberKid($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_kid !== $v || $v === 0) {
			$this->number_kid = $v;
			$this->modifiedColumns[] = BookingTourPeer::NUMBER_KID;
		}

	} 
	
	public function setNumberBaby($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_baby !== $v || $v === 0) {
			$this->number_baby = $v;
			$this->modifiedColumns[] = BookingTourPeer::NUMBER_BABY;
		}

	} 
	
	public function setTransactionStatusId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->transaction_status_id !== $v) {
			$this->transaction_status_id = $v;
			$this->modifiedColumns[] = BookingTourPeer::TRANSACTION_STATUS_ID;
		}

		if ($this->aTransactionStatus !== null && $this->aTransactionStatus->getId() !== $v) {
			$this->aTransactionStatus = null;
		}

	} 
	
	public function setBookingStatusId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->booking_status_id !== $v) {
			$this->booking_status_id = $v;
			$this->modifiedColumns[] = BookingTourPeer::BOOKING_STATUS_ID;
		}

		if ($this->aBookingStatus !== null && $this->aBookingStatus->getId() !== $v) {
			$this->aBookingStatus = null;
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
			$this->modifiedColumns[] = BookingTourPeer::CREATED_AT;
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
			$this->modifiedColumns[] = BookingTourPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->user_id_sell = $rs->getInt($startcol + 2);

			$this->user_id_buy = $rs->getInt($startcol + 3);

			$this->tour_detail_id = $rs->getInt($startcol + 4);

			$this->code_transaction = $rs->getString($startcol + 5);

			$this->payment_booking_type_id = $rs->getInt($startcol + 6);

			$this->price = $rs->getFloat($startcol + 7);

			$this->price_security_deposit = $rs->getFloat($startcol + 8);

			$this->name = $rs->getString($startcol + 9);

			$this->phone_number = $rs->getString($startcol + 10);

			$this->note = $rs->getString($startcol + 11);

			$this->ticket = $rs->getString($startcol + 12);

			$this->date_start_tour = $rs->getDate($startcol + 13, null);

			$this->number_adult = $rs->getInt($startcol + 14);

			$this->number_kid = $rs->getInt($startcol + 15);

			$this->number_baby = $rs->getInt($startcol + 16);

			$this->transaction_status_id = $rs->getInt($startcol + 17);

			$this->booking_status_id = $rs->getInt($startcol + 18);

			$this->created_at = $rs->getTimestamp($startcol + 19, null);

			$this->updated_at = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating BookingTour object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BookingTourPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BookingTourPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(BookingTourPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(BookingTourPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BookingTourPeer::DATABASE_NAME);
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

			if ($this->aTourDetail !== null) {
				if ($this->aTourDetail->isModified()) {
					$affectedRows += $this->aTourDetail->save($con);
				}
				$this->setTourDetail($this->aTourDetail);
			}

			if ($this->aPaymentBookingType !== null) {
				if ($this->aPaymentBookingType->isModified()) {
					$affectedRows += $this->aPaymentBookingType->save($con);
				}
				$this->setPaymentBookingType($this->aPaymentBookingType);
			}

			if ($this->aTransactionStatus !== null) {
				if ($this->aTransactionStatus->isModified()) {
					$affectedRows += $this->aTransactionStatus->save($con);
				}
				$this->setTransactionStatus($this->aTransactionStatus);
			}

			if ($this->aBookingStatus !== null) {
				if ($this->aBookingStatus->isModified()) {
					$affectedRows += $this->aBookingStatus->save($con);
				}
				$this->setBookingStatus($this->aBookingStatus);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = BookingTourPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BookingTourPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

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

			if ($this->aTourDetail !== null) {
				if (!$this->aTourDetail->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDetail->getValidationFailures());
				}
			}

			if ($this->aPaymentBookingType !== null) {
				if (!$this->aPaymentBookingType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPaymentBookingType->getValidationFailures());
				}
			}

			if ($this->aTransactionStatus !== null) {
				if (!$this->aTransactionStatus->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTransactionStatus->getValidationFailures());
				}
			}

			if ($this->aBookingStatus !== null) {
				if (!$this->aBookingStatus->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBookingStatus->getValidationFailures());
				}
			}


			if (($retval = BookingTourPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BookingTourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserIdSell();
				break;
			case 3:
				return $this->getUserIdBuy();
				break;
			case 4:
				return $this->getTourDetailId();
				break;
			case 5:
				return $this->getCodeTransaction();
				break;
			case 6:
				return $this->getPaymentBookingTypeId();
				break;
			case 7:
				return $this->getPrice();
				break;
			case 8:
				return $this->getPriceSecurityDeposit();
				break;
			case 9:
				return $this->getName();
				break;
			case 10:
				return $this->getPhoneNumber();
				break;
			case 11:
				return $this->getNote();
				break;
			case 12:
				return $this->getTicket();
				break;
			case 13:
				return $this->getDateStartTour();
				break;
			case 14:
				return $this->getNumberAdult();
				break;
			case 15:
				return $this->getNumberKid();
				break;
			case 16:
				return $this->getNumberBaby();
				break;
			case 17:
				return $this->getTransactionStatusId();
				break;
			case 18:
				return $this->getBookingStatusId();
				break;
			case 19:
				return $this->getCreatedAt();
				break;
			case 20:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BookingTourPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getUserIdSell(),
			$keys[3] => $this->getUserIdBuy(),
			$keys[4] => $this->getTourDetailId(),
			$keys[5] => $this->getCodeTransaction(),
			$keys[6] => $this->getPaymentBookingTypeId(),
			$keys[7] => $this->getPrice(),
			$keys[8] => $this->getPriceSecurityDeposit(),
			$keys[9] => $this->getName(),
			$keys[10] => $this->getPhoneNumber(),
			$keys[11] => $this->getNote(),
			$keys[12] => $this->getTicket(),
			$keys[13] => $this->getDateStartTour(),
			$keys[14] => $this->getNumberAdult(),
			$keys[15] => $this->getNumberKid(),
			$keys[16] => $this->getNumberBaby(),
			$keys[17] => $this->getTransactionStatusId(),
			$keys[18] => $this->getBookingStatusId(),
			$keys[19] => $this->getCreatedAt(),
			$keys[20] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BookingTourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserIdSell($value);
				break;
			case 3:
				$this->setUserIdBuy($value);
				break;
			case 4:
				$this->setTourDetailId($value);
				break;
			case 5:
				$this->setCodeTransaction($value);
				break;
			case 6:
				$this->setPaymentBookingTypeId($value);
				break;
			case 7:
				$this->setPrice($value);
				break;
			case 8:
				$this->setPriceSecurityDeposit($value);
				break;
			case 9:
				$this->setName($value);
				break;
			case 10:
				$this->setPhoneNumber($value);
				break;
			case 11:
				$this->setNote($value);
				break;
			case 12:
				$this->setTicket($value);
				break;
			case 13:
				$this->setDateStartTour($value);
				break;
			case 14:
				$this->setNumberAdult($value);
				break;
			case 15:
				$this->setNumberKid($value);
				break;
			case 16:
				$this->setNumberBaby($value);
				break;
			case 17:
				$this->setTransactionStatusId($value);
				break;
			case 18:
				$this->setBookingStatusId($value);
				break;
			case 19:
				$this->setCreatedAt($value);
				break;
			case 20:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BookingTourPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserIdSell($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUserIdBuy($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTourDetailId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCodeTransaction($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPaymentBookingTypeId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPrice($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPriceSecurityDeposit($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setName($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setPhoneNumber($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setNote($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTicket($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDateStartTour($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setNumberAdult($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setNumberKid($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setNumberBaby($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTransactionStatusId($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setBookingStatusId($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCreatedAt($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUpdatedAt($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BookingTourPeer::DATABASE_NAME);

		if ($this->isColumnModified(BookingTourPeer::ID)) $criteria->add(BookingTourPeer::ID, $this->id);
		if ($this->isColumnModified(BookingTourPeer::PARTNER_ID)) $criteria->add(BookingTourPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(BookingTourPeer::USER_ID_SELL)) $criteria->add(BookingTourPeer::USER_ID_SELL, $this->user_id_sell);
		if ($this->isColumnModified(BookingTourPeer::USER_ID_BUY)) $criteria->add(BookingTourPeer::USER_ID_BUY, $this->user_id_buy);
		if ($this->isColumnModified(BookingTourPeer::TOUR_DETAIL_ID)) $criteria->add(BookingTourPeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(BookingTourPeer::CODE_TRANSACTION)) $criteria->add(BookingTourPeer::CODE_TRANSACTION, $this->code_transaction);
		if ($this->isColumnModified(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID)) $criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->payment_booking_type_id);
		if ($this->isColumnModified(BookingTourPeer::PRICE)) $criteria->add(BookingTourPeer::PRICE, $this->price);
		if ($this->isColumnModified(BookingTourPeer::PRICE_SECURITY_DEPOSIT)) $criteria->add(BookingTourPeer::PRICE_SECURITY_DEPOSIT, $this->price_security_deposit);
		if ($this->isColumnModified(BookingTourPeer::NAME)) $criteria->add(BookingTourPeer::NAME, $this->name);
		if ($this->isColumnModified(BookingTourPeer::PHONE_NUMBER)) $criteria->add(BookingTourPeer::PHONE_NUMBER, $this->phone_number);
		if ($this->isColumnModified(BookingTourPeer::NOTE)) $criteria->add(BookingTourPeer::NOTE, $this->note);
		if ($this->isColumnModified(BookingTourPeer::TICKET)) $criteria->add(BookingTourPeer::TICKET, $this->ticket);
		if ($this->isColumnModified(BookingTourPeer::DATE_START_TOUR)) $criteria->add(BookingTourPeer::DATE_START_TOUR, $this->date_start_tour);
		if ($this->isColumnModified(BookingTourPeer::NUMBER_ADULT)) $criteria->add(BookingTourPeer::NUMBER_ADULT, $this->number_adult);
		if ($this->isColumnModified(BookingTourPeer::NUMBER_KID)) $criteria->add(BookingTourPeer::NUMBER_KID, $this->number_kid);
		if ($this->isColumnModified(BookingTourPeer::NUMBER_BABY)) $criteria->add(BookingTourPeer::NUMBER_BABY, $this->number_baby);
		if ($this->isColumnModified(BookingTourPeer::TRANSACTION_STATUS_ID)) $criteria->add(BookingTourPeer::TRANSACTION_STATUS_ID, $this->transaction_status_id);
		if ($this->isColumnModified(BookingTourPeer::BOOKING_STATUS_ID)) $criteria->add(BookingTourPeer::BOOKING_STATUS_ID, $this->booking_status_id);
		if ($this->isColumnModified(BookingTourPeer::CREATED_AT)) $criteria->add(BookingTourPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(BookingTourPeer::UPDATED_AT)) $criteria->add(BookingTourPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BookingTourPeer::DATABASE_NAME);

		$criteria->add(BookingTourPeer::ID, $this->id);

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

		$copyObj->setUserIdSell($this->user_id_sell);

		$copyObj->setUserIdBuy($this->user_id_buy);

		$copyObj->setTourDetailId($this->tour_detail_id);

		$copyObj->setCodeTransaction($this->code_transaction);

		$copyObj->setPaymentBookingTypeId($this->payment_booking_type_id);

		$copyObj->setPrice($this->price);

		$copyObj->setPriceSecurityDeposit($this->price_security_deposit);

		$copyObj->setName($this->name);

		$copyObj->setPhoneNumber($this->phone_number);

		$copyObj->setNote($this->note);

		$copyObj->setTicket($this->ticket);

		$copyObj->setDateStartTour($this->date_start_tour);

		$copyObj->setNumberAdult($this->number_adult);

		$copyObj->setNumberKid($this->number_kid);

		$copyObj->setNumberBaby($this->number_baby);

		$copyObj->setTransactionStatusId($this->transaction_status_id);

		$copyObj->setBookingStatusId($this->booking_status_id);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new BookingTourPeer();
		}
		return self::$peer;
	}

	
	public function setPartner($v)
	{


		if ($v === null) {
			$this->setPartnerId(NULL);
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
			$this->setUserIdSell(NULL);
		} else {
			$this->setUserIdSell($v->getId());
		}


		$this->aDichungUser = $v;
	}


	
	static $DichungUser = array();
	
	public function getDichungUser($con = null)
	{
		if ($this->aDichungUser === null && ($this->user_id_sell !== null)) {
						if(!isset(self::$DichungUser[$this->user_id_sell])){
				self::$DichungUser[$this->user_id_sell] = DichungUserPeer::retrieveByPK($this->user_id_sell, $con);
			}
			$this->aDichungUser = self::$DichungUser[$this->user_id_sell];

			
		}
		return $this->aDichungUser;
	}

	
	public function setTourDetail($v)
	{


		if ($v === null) {
			$this->setTourDetailId(NULL);
		} else {
			$this->setTourDetailId($v->getId());
		}


		$this->aTourDetail = $v;
	}


	
	static $TourDetail = array();
	
	public function getTourDetail($con = null)
	{
		if ($this->aTourDetail === null && ($this->tour_detail_id !== null)) {
						if(!isset(self::$TourDetail[$this->tour_detail_id])){
				self::$TourDetail[$this->tour_detail_id] = TourDetailPeer::retrieveByPK($this->tour_detail_id, $con);
			}
			$this->aTourDetail = self::$TourDetail[$this->tour_detail_id];

			
		}
		return $this->aTourDetail;
	}

	
	public function setPaymentBookingType($v)
	{


		if ($v === null) {
			$this->setPaymentBookingTypeId(NULL);
		} else {
			$this->setPaymentBookingTypeId($v->getId());
		}


		$this->aPaymentBookingType = $v;
	}


	
	static $PaymentBookingType = array();
	
	public function getPaymentBookingType($con = null)
	{
		if ($this->aPaymentBookingType === null && ($this->payment_booking_type_id !== null)) {
						if(!isset(self::$PaymentBookingType[$this->payment_booking_type_id])){
				self::$PaymentBookingType[$this->payment_booking_type_id] = PaymentBookingTypePeer::retrieveByPK($this->payment_booking_type_id, $con);
			}
			$this->aPaymentBookingType = self::$PaymentBookingType[$this->payment_booking_type_id];

			
		}
		return $this->aPaymentBookingType;
	}

	
	public function setTransactionStatus($v)
	{


		if ($v === null) {
			$this->setTransactionStatusId(NULL);
		} else {
			$this->setTransactionStatusId($v->getId());
		}


		$this->aTransactionStatus = $v;
	}


	
	static $TransactionStatus = array();
	
	public function getTransactionStatus($con = null)
	{
		if ($this->aTransactionStatus === null && ($this->transaction_status_id !== null)) {
						if(!isset(self::$TransactionStatus[$this->transaction_status_id])){
				self::$TransactionStatus[$this->transaction_status_id] = TransactionStatusPeer::retrieveByPK($this->transaction_status_id, $con);
			}
			$this->aTransactionStatus = self::$TransactionStatus[$this->transaction_status_id];

			
		}
		return $this->aTransactionStatus;
	}

	
	public function setBookingStatus($v)
	{


		if ($v === null) {
			$this->setBookingStatusId(NULL);
		} else {
			$this->setBookingStatusId($v->getId());
		}


		$this->aBookingStatus = $v;
	}


	
	static $BookingStatus = array();
	
	public function getBookingStatus($con = null)
	{
		if ($this->aBookingStatus === null && ($this->booking_status_id !== null)) {
						if(!isset(self::$BookingStatus[$this->booking_status_id])){
				self::$BookingStatus[$this->booking_status_id] = BookingStatusPeer::retrieveByPK($this->booking_status_id, $con);
			}
			$this->aBookingStatus = self::$BookingStatus[$this->booking_status_id];

			
		}
		return $this->aBookingStatus;
	}

} 