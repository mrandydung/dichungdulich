<?php


abstract class BaseTourDiscount extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_detail_id;


	
	protected $tour_discount_type_id;


	
	protected $discount = 0;


	
	protected $date_start;


	
	protected $date_end;


	
	protected $number_discount;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aTourDetail;

	
	protected $aTourDiscountType;

	
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

	
	public function getTourDiscountTypeId()
	{

        return $this->tour_discount_type_id;
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

	
	public function getNumberDiscount()
	{

        return $this->number_discount;
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
			$this->modifiedColumns[] = TourDiscountPeer::ID;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = TourDiscountPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setTourDiscountTypeId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_discount_type_id !== $v) {
			$this->tour_discount_type_id = $v;
			$this->modifiedColumns[] = TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID;
		}

		if ($this->aTourDiscountType !== null && $this->aTourDiscountType->getId() !== $v) {
			$this->aTourDiscountType = null;
		}

	} 
	
	public function setDiscount($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->discount !== $v || $v === 0) {
			$this->discount = $v;
			$this->modifiedColumns[] = TourDiscountPeer::DISCOUNT;
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
			$this->modifiedColumns[] = TourDiscountPeer::DATE_START;
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
			$this->modifiedColumns[] = TourDiscountPeer::DATE_END;
		}

	} 
	
	public function setNumberDiscount($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->number_discount !== $v) {
			$this->number_discount = $v;
			$this->modifiedColumns[] = TourDiscountPeer::NUMBER_DISCOUNT;
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
			$this->modifiedColumns[] = TourDiscountPeer::CREATED_AT;
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
			$this->modifiedColumns[] = TourDiscountPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_detail_id = $rs->getInt($startcol + 1);

			$this->tour_discount_type_id = $rs->getInt($startcol + 2);

			$this->discount = $rs->getInt($startcol + 3);

			$this->date_start = $rs->getDate($startcol + 4, null);

			$this->date_end = $rs->getDate($startcol + 5, null);

			$this->number_discount = $rs->getInt($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->updated_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourDiscount object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourDiscountPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourDiscountPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TourDiscountPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountPeer::DATABASE_NAME);
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

			if ($this->aTourDiscountType !== null) {
				if ($this->aTourDiscountType->isModified()) {
					$affectedRows += $this->aTourDiscountType->save($con);
				}
				$this->setTourDiscountType($this->aTourDiscountType);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourDiscountPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourDiscountPeer::doUpdate($this, $con);
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

			if ($this->aTourDiscountType !== null) {
				if (!$this->aTourDiscountType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDiscountType->getValidationFailures());
				}
			}


			if (($retval = TourDiscountPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTourDiscountTypeId();
				break;
			case 3:
				return $this->getDiscount();
				break;
			case 4:
				return $this->getDateStart();
				break;
			case 5:
				return $this->getDateEnd();
				break;
			case 6:
				return $this->getNumberDiscount();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			case 8:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourDetailId(),
			$keys[2] => $this->getTourDiscountTypeId(),
			$keys[3] => $this->getDiscount(),
			$keys[4] => $this->getDateStart(),
			$keys[5] => $this->getDateEnd(),
			$keys[6] => $this->getNumberDiscount(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTourDiscountTypeId($value);
				break;
			case 3:
				$this->setDiscount($value);
				break;
			case 4:
				$this->setDateStart($value);
				break;
			case 5:
				$this->setDateEnd($value);
				break;
			case 6:
				$this->setNumberDiscount($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
			case 8:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourDetailId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTourDiscountTypeId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDiscount($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateStart($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateEnd($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNumberDiscount($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourDiscountPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourDiscountPeer::ID)) $criteria->add(TourDiscountPeer::ID, $this->id);
		if ($this->isColumnModified(TourDiscountPeer::TOUR_DETAIL_ID)) $criteria->add(TourDiscountPeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID)) $criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->tour_discount_type_id);
		if ($this->isColumnModified(TourDiscountPeer::DISCOUNT)) $criteria->add(TourDiscountPeer::DISCOUNT, $this->discount);
		if ($this->isColumnModified(TourDiscountPeer::DATE_START)) $criteria->add(TourDiscountPeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(TourDiscountPeer::DATE_END)) $criteria->add(TourDiscountPeer::DATE_END, $this->date_end);
		if ($this->isColumnModified(TourDiscountPeer::NUMBER_DISCOUNT)) $criteria->add(TourDiscountPeer::NUMBER_DISCOUNT, $this->number_discount);
		if ($this->isColumnModified(TourDiscountPeer::CREATED_AT)) $criteria->add(TourDiscountPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TourDiscountPeer::UPDATED_AT)) $criteria->add(TourDiscountPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourDiscountPeer::DATABASE_NAME);

		$criteria->add(TourDiscountPeer::ID, $this->id);

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

		$copyObj->setTourDiscountTypeId($this->tour_discount_type_id);

		$copyObj->setDiscount($this->discount);

		$copyObj->setDateStart($this->date_start);

		$copyObj->setDateEnd($this->date_end);

		$copyObj->setNumberDiscount($this->number_discount);

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
			self::$peer = new TourDiscountPeer();
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

	
	public function setTourDiscountType($v)
	{


		if ($v === null) {
			$this->setTourDiscountTypeId(NULL);
		} else {
			$this->setTourDiscountTypeId($v->getId());
		}


		$this->aTourDiscountType = $v;
	}


	
	static $TourDiscountType = array();
	
	public function getTourDiscountType($con = null)
	{
		if ($this->aTourDiscountType === null && ($this->tour_discount_type_id !== null)) {
						if(!isset(self::$TourDiscountType[$this->tour_discount_type_id])){
				self::$TourDiscountType[$this->tour_discount_type_id] = TourDiscountTypePeer::retrieveByPK($this->tour_discount_type_id, $con);
			}
			$this->aTourDiscountType = self::$TourDiscountType[$this->tour_discount_type_id];

			
		}
		return $this->aTourDiscountType;
	}

} 