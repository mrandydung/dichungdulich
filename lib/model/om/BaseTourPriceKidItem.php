<?php


abstract class BaseTourPriceKidItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_detail_id;


	
	protected $description;


	
	protected $from_age;


	
	protected $to_age;


	
	protected $discount;


	
	protected $price;


	
	protected $created_at;

	
	protected $aTourDetail;

	
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

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getFromAge()
	{

        return $this->from_age;
	}

	
	public function getToAge()
	{

        return $this->to_age;
	}

	
	public function getDiscount()
	{

        return $this->discount;
	}

	
	public function getPrice()
	{

        return $this->price;
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::ID;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::DESCRIPTION;
		}

	} 
	
	public function setFromAge($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->from_age !== $v) {
			$this->from_age = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::FROM_AGE;
		}

	} 
	
	public function setToAge($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->to_age !== $v) {
			$this->to_age = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::TO_AGE;
		}

	} 
	
	public function setDiscount($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->discount !== $v) {
			$this->discount = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::DISCOUNT;
		}

	} 
	
	public function setPrice($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = TourPriceKidItemPeer::PRICE;
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
			$this->modifiedColumns[] = TourPriceKidItemPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_detail_id = $rs->getInt($startcol + 1);

			$this->description = $rs->getString($startcol + 2);

			$this->from_age = $rs->getInt($startcol + 3);

			$this->to_age = $rs->getInt($startcol + 4);

			$this->discount = $rs->getInt($startcol + 5);

			$this->price = $rs->getString($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourPriceKidItem object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPriceKidItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourPriceKidItemPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourPriceKidItemPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPriceKidItemPeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourPriceKidItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourPriceKidItemPeer::doUpdate($this, $con);
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


			if (($retval = TourPriceKidItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPriceKidItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDescription();
				break;
			case 3:
				return $this->getFromAge();
				break;
			case 4:
				return $this->getToAge();
				break;
			case 5:
				return $this->getDiscount();
				break;
			case 6:
				return $this->getPrice();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPriceKidItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourDetailId(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getFromAge(),
			$keys[4] => $this->getToAge(),
			$keys[5] => $this->getDiscount(),
			$keys[6] => $this->getPrice(),
			$keys[7] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPriceKidItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDescription($value);
				break;
			case 3:
				$this->setFromAge($value);
				break;
			case 4:
				$this->setToAge($value);
				break;
			case 5:
				$this->setDiscount($value);
				break;
			case 6:
				$this->setPrice($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPriceKidItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourDetailId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFromAge($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setToAge($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDiscount($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPrice($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourPriceKidItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourPriceKidItemPeer::ID)) $criteria->add(TourPriceKidItemPeer::ID, $this->id);
		if ($this->isColumnModified(TourPriceKidItemPeer::TOUR_DETAIL_ID)) $criteria->add(TourPriceKidItemPeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(TourPriceKidItemPeer::DESCRIPTION)) $criteria->add(TourPriceKidItemPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(TourPriceKidItemPeer::FROM_AGE)) $criteria->add(TourPriceKidItemPeer::FROM_AGE, $this->from_age);
		if ($this->isColumnModified(TourPriceKidItemPeer::TO_AGE)) $criteria->add(TourPriceKidItemPeer::TO_AGE, $this->to_age);
		if ($this->isColumnModified(TourPriceKidItemPeer::DISCOUNT)) $criteria->add(TourPriceKidItemPeer::DISCOUNT, $this->discount);
		if ($this->isColumnModified(TourPriceKidItemPeer::PRICE)) $criteria->add(TourPriceKidItemPeer::PRICE, $this->price);
		if ($this->isColumnModified(TourPriceKidItemPeer::CREATED_AT)) $criteria->add(TourPriceKidItemPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourPriceKidItemPeer::DATABASE_NAME);

		$criteria->add(TourPriceKidItemPeer::ID, $this->id);

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

		$copyObj->setDescription($this->description);

		$copyObj->setFromAge($this->from_age);

		$copyObj->setToAge($this->to_age);

		$copyObj->setDiscount($this->discount);

		$copyObj->setPrice($this->price);

		$copyObj->setCreatedAt($this->created_at);


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
			self::$peer = new TourPriceKidItemPeer();
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

} 