<?php


abstract class BaseScheduledCostTour extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_id;


	
	protected $suggest_cost_category_id;


	
	protected $price = '0';


	
	protected $description;


	
	protected $created_at;

	
	protected $aTourDetail;

	
	protected $aSuggestCostCategory;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTourId()
	{

        return $this->tour_id;
	}

	
	public function getSuggestCostCategoryId()
	{

        return $this->suggest_cost_category_id;
	}

	
	public function getPrice()
	{

        return $this->price;
	}

	
	public function getDescription()
	{

        return $this->description;
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
			$this->modifiedColumns[] = ScheduledCostTourPeer::ID;
		}

	} 
	
	public function setTourId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_id !== $v) {
			$this->tour_id = $v;
			$this->modifiedColumns[] = ScheduledCostTourPeer::TOUR_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setSuggestCostCategoryId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->suggest_cost_category_id !== $v) {
			$this->suggest_cost_category_id = $v;
			$this->modifiedColumns[] = ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID;
		}

		if ($this->aSuggestCostCategory !== null && $this->aSuggestCostCategory->getId() !== $v) {
			$this->aSuggestCostCategory = null;
		}

	} 
	
	public function setPrice($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->price !== $v || $v === '0') {
			$this->price = $v;
			$this->modifiedColumns[] = ScheduledCostTourPeer::PRICE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = ScheduledCostTourPeer::DESCRIPTION;
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
			$this->modifiedColumns[] = ScheduledCostTourPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_id = $rs->getInt($startcol + 1);

			$this->suggest_cost_category_id = $rs->getInt($startcol + 2);

			$this->price = $rs->getString($startcol + 3);

			$this->description = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ScheduledCostTour object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ScheduledCostTourPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ScheduledCostTourPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(ScheduledCostTourPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ScheduledCostTourPeer::DATABASE_NAME);
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

			if ($this->aSuggestCostCategory !== null) {
				if ($this->aSuggestCostCategory->isModified()) {
					$affectedRows += $this->aSuggestCostCategory->save($con);
				}
				$this->setSuggestCostCategory($this->aSuggestCostCategory);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ScheduledCostTourPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ScheduledCostTourPeer::doUpdate($this, $con);
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

			if ($this->aSuggestCostCategory !== null) {
				if (!$this->aSuggestCostCategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aSuggestCostCategory->getValidationFailures());
				}
			}


			if (($retval = ScheduledCostTourPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ScheduledCostTourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTourId();
				break;
			case 2:
				return $this->getSuggestCostCategoryId();
				break;
			case 3:
				return $this->getPrice();
				break;
			case 4:
				return $this->getDescription();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ScheduledCostTourPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourId(),
			$keys[2] => $this->getSuggestCostCategoryId(),
			$keys[3] => $this->getPrice(),
			$keys[4] => $this->getDescription(),
			$keys[5] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ScheduledCostTourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTourId($value);
				break;
			case 2:
				$this->setSuggestCostCategoryId($value);
				break;
			case 3:
				$this->setPrice($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ScheduledCostTourPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSuggestCostCategoryId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrice($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ScheduledCostTourPeer::DATABASE_NAME);

		if ($this->isColumnModified(ScheduledCostTourPeer::ID)) $criteria->add(ScheduledCostTourPeer::ID, $this->id);
		if ($this->isColumnModified(ScheduledCostTourPeer::TOUR_ID)) $criteria->add(ScheduledCostTourPeer::TOUR_ID, $this->tour_id);
		if ($this->isColumnModified(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID)) $criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->suggest_cost_category_id);
		if ($this->isColumnModified(ScheduledCostTourPeer::PRICE)) $criteria->add(ScheduledCostTourPeer::PRICE, $this->price);
		if ($this->isColumnModified(ScheduledCostTourPeer::DESCRIPTION)) $criteria->add(ScheduledCostTourPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(ScheduledCostTourPeer::CREATED_AT)) $criteria->add(ScheduledCostTourPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ScheduledCostTourPeer::DATABASE_NAME);

		$criteria->add(ScheduledCostTourPeer::ID, $this->id);

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

		$copyObj->setTourId($this->tour_id);

		$copyObj->setSuggestCostCategoryId($this->suggest_cost_category_id);

		$copyObj->setPrice($this->price);

		$copyObj->setDescription($this->description);

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
			self::$peer = new ScheduledCostTourPeer();
		}
		return self::$peer;
	}

	
	public function setTourDetail($v)
	{


		if ($v === null) {
			$this->setTourId(NULL);
		} else {
			$this->setTourId($v->getId());
		}


		$this->aTourDetail = $v;
	}


	
	static $TourDetail = array();
	
	public function getTourDetail($con = null)
	{
		if ($this->aTourDetail === null && ($this->tour_id !== null)) {
						if(!isset(self::$TourDetail[$this->tour_id])){
				self::$TourDetail[$this->tour_id] = TourDetailPeer::retrieveByPK($this->tour_id, $con);
			}
			$this->aTourDetail = self::$TourDetail[$this->tour_id];

			
		}
		return $this->aTourDetail;
	}

	
	public function setSuggestCostCategory($v)
	{


		if ($v === null) {
			$this->setSuggestCostCategoryId(NULL);
		} else {
			$this->setSuggestCostCategoryId($v->getId());
		}


		$this->aSuggestCostCategory = $v;
	}


	
	static $SuggestCostCategory = array();
	
	public function getSuggestCostCategory($con = null)
	{
		if ($this->aSuggestCostCategory === null && ($this->suggest_cost_category_id !== null)) {
						if(!isset(self::$SuggestCostCategory[$this->suggest_cost_category_id])){
				self::$SuggestCostCategory[$this->suggest_cost_category_id] = SuggestCostCategoryPeer::retrieveByPK($this->suggest_cost_category_id, $con);
			}
			$this->aSuggestCostCategory = self::$SuggestCostCategory[$this->suggest_cost_category_id];

			
		}
		return $this->aSuggestCostCategory;
	}

} 