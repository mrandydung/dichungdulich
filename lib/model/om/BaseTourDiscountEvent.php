<?php


abstract class BaseTourDiscountEvent extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_detail_id;


	
	protected $tour_discount_event_type_id;


	
	protected $name;


	
	protected $value;


	
	protected $discount;


	
	protected $date_start;


	
	protected $date_end;

	
	protected $aTourDetail;

	
	protected $aTourDiscountEventType;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTourDetailId()
	{

        return $this->tour_detail_id;
	}

	
	public function getTourDiscountEventTypeId()
	{

        return $this->tour_discount_event_type_id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getValue()
	{

        return $this->value;
	}

	
	public function getDiscount()
	{

        return $this->discount;
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::ID;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setTourDiscountEventTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_discount_event_type_id !== $v) {
			$this->tour_discount_event_type_id = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID;
		}

		if ($this->aTourDiscountEventType !== null && $this->aTourDiscountEventType->getId() !== $v) {
			$this->aTourDiscountEventType = null;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::NAME;
		}

	} 
	
	public function setValue($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->value !== $v) {
			$this->value = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::VALUE;
		}

	} 
	
	public function setDiscount($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->discount !== $v) {
			$this->discount = $v;
			$this->modifiedColumns[] = TourDiscountEventPeer::DISCOUNT;
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
			$this->modifiedColumns[] = TourDiscountEventPeer::DATE_START;
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
			$this->modifiedColumns[] = TourDiscountEventPeer::DATE_END;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_detail_id = $rs->getInt($startcol + 1);

			$this->tour_discount_event_type_id = $rs->getInt($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->value = $rs->getString($startcol + 4);

			$this->discount = $rs->getInt($startcol + 5);

			$this->date_start = $rs->getDate($startcol + 6, null);

			$this->date_end = $rs->getDate($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourDiscountEvent object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountEventPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourDiscountEventPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountEventPeer::DATABASE_NAME);
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


												
			if ($this->aTourDetail !== null) {
				if ($this->aTourDetail->isModified()) {
					$affectedRows += $this->aTourDetail->save($con);
				}
				$this->setTourDetail($this->aTourDetail);
			}

			if ($this->aTourDiscountEventType !== null) {
				if ($this->aTourDiscountEventType->isModified()) {
					$affectedRows += $this->aTourDiscountEventType->save($con);
				}
				$this->setTourDiscountEventType($this->aTourDiscountEventType);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourDiscountEventPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourDiscountEventPeer::doUpdate($this, $con);
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


												
			if ($this->aTourDetail !== null) {
				if (!$this->aTourDetail->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDetail->getValidationFailures());
				}
			}

			if ($this->aTourDiscountEventType !== null) {
				if (!$this->aTourDiscountEventType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDiscountEventType->getValidationFailures());
				}
			}


			if (($retval = TourDiscountEventPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountEventPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTourDetailId();
				break;
			case 2:
				return $this->getTourDiscountEventTypeId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getValue();
				break;
			case 5:
				return $this->getDiscount();
				break;
			case 6:
				return $this->getDateStart();
				break;
			case 7:
				return $this->getDateEnd();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountEventPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourDetailId(),
			$keys[2] => $this->getTourDiscountEventTypeId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getValue(),
			$keys[5] => $this->getDiscount(),
			$keys[6] => $this->getDateStart(),
			$keys[7] => $this->getDateEnd(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountEventPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTourDetailId($value);
				break;
			case 2:
				$this->setTourDiscountEventTypeId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setValue($value);
				break;
			case 5:
				$this->setDiscount($value);
				break;
			case 6:
				$this->setDateStart($value);
				break;
			case 7:
				$this->setDateEnd($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountEventPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourDetailId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTourDiscountEventTypeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setValue($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDiscount($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDateStart($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDateEnd($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourDiscountEventPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourDiscountEventPeer::ID)) $criteria->add(TourDiscountEventPeer::ID, $this->id);
		if ($this->isColumnModified(TourDiscountEventPeer::TOUR_DETAIL_ID)) $criteria->add(TourDiscountEventPeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID)) $criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->tour_discount_event_type_id);
		if ($this->isColumnModified(TourDiscountEventPeer::NAME)) $criteria->add(TourDiscountEventPeer::NAME, $this->name);
		if ($this->isColumnModified(TourDiscountEventPeer::VALUE)) $criteria->add(TourDiscountEventPeer::VALUE, $this->value);
		if ($this->isColumnModified(TourDiscountEventPeer::DISCOUNT)) $criteria->add(TourDiscountEventPeer::DISCOUNT, $this->discount);
		if ($this->isColumnModified(TourDiscountEventPeer::DATE_START)) $criteria->add(TourDiscountEventPeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(TourDiscountEventPeer::DATE_END)) $criteria->add(TourDiscountEventPeer::DATE_END, $this->date_end);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourDiscountEventPeer::DATABASE_NAME);

		$criteria->add(TourDiscountEventPeer::ID, $this->id);

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

		$copyObj->setTourDetailId($this->tour_detail_id);

		$copyObj->setTourDiscountEventTypeId($this->tour_discount_event_type_id);

		$copyObj->setName($this->name);

		$copyObj->setValue($this->value);

		$copyObj->setDiscount($this->discount);

		$copyObj->setDateStart($this->date_start);

		$copyObj->setDateEnd($this->date_end);


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
			self::$peer = new TourDiscountEventPeer();
		}
		return self::$peer;
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

	
	public function setTourDiscountEventType($v)
	{


		if ($v === null) {
			$this->setTourDiscountEventTypeId(NULL);
		} else {
			$this->setTourDiscountEventTypeId($v->getId());
		}


		$this->aTourDiscountEventType = $v;
	}


	
	static $TourDiscountEventType = array();
	
	public function getTourDiscountEventType($con = null)
	{
		if ($this->aTourDiscountEventType === null && ($this->tour_discount_event_type_id !== null)) {
						if(!isset(self::$TourDiscountEventType[$this->tour_discount_event_type_id])){
				self::$TourDiscountEventType[$this->tour_discount_event_type_id] = TourDiscountEventTypePeer::retrieveByPK($this->tour_discount_event_type_id, $con);
			}
			$this->aTourDiscountEventType = self::$TourDiscountEventType[$this->tour_discount_event_type_id];

			
		}
		return $this->aTourDiscountEventType;
	}

} 