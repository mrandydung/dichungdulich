<?php


abstract class BaseTourDiscountEventType extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;


	
	protected $value;


	
	protected $date_start;


	
	protected $date_end;

	
	protected $collTourDiscountEvents;

	
	protected $lastTourDiscountEventCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getValue()
	{

        return $this->value;
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
			$this->modifiedColumns[] = TourDiscountEventTypePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TourDiscountEventTypePeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = TourDiscountEventTypePeer::NAME_EN;
		}

	} 
	
	public function setValue($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->value !== $v) {
			$this->value = $v;
			$this->modifiedColumns[] = TourDiscountEventTypePeer::VALUE;
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
			$this->modifiedColumns[] = TourDiscountEventTypePeer::DATE_START;
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
			$this->modifiedColumns[] = TourDiscountEventTypePeer::DATE_END;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->name_en = $rs->getString($startcol + 2);

			$this->value = $rs->getString($startcol + 3);

			$this->date_start = $rs->getDate($startcol + 4, null);

			$this->date_end = $rs->getDate($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourDiscountEventType object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountEventTypePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourDiscountEventTypePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TourDiscountEventTypePeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourDiscountEventTypePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourDiscountEventTypePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDiscountEvents !== null) {
				foreach($this->collTourDiscountEvents as $referrerFK) {
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


			if (($retval = TourDiscountEventTypePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDiscountEvents !== null) {
					foreach($this->collTourDiscountEvents as $referrerFK) {
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
		$pos = TourDiscountEventTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getNameEn();
				break;
			case 3:
				return $this->getValue();
				break;
			case 4:
				return $this->getDateStart();
				break;
			case 5:
				return $this->getDateEnd();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountEventTypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
			$keys[3] => $this->getValue(),
			$keys[4] => $this->getDateStart(),
			$keys[5] => $this->getDateEnd(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountEventTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setNameEn($value);
				break;
			case 3:
				$this->setValue($value);
				break;
			case 4:
				$this->setDateStart($value);
				break;
			case 5:
				$this->setDateEnd($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountEventTypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setValue($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateStart($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDateEnd($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourDiscountEventTypePeer::DATABASE_NAME);

		if ($this->isColumnModified(TourDiscountEventTypePeer::ID)) $criteria->add(TourDiscountEventTypePeer::ID, $this->id);
		if ($this->isColumnModified(TourDiscountEventTypePeer::NAME)) $criteria->add(TourDiscountEventTypePeer::NAME, $this->name);
		if ($this->isColumnModified(TourDiscountEventTypePeer::NAME_EN)) $criteria->add(TourDiscountEventTypePeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(TourDiscountEventTypePeer::VALUE)) $criteria->add(TourDiscountEventTypePeer::VALUE, $this->value);
		if ($this->isColumnModified(TourDiscountEventTypePeer::DATE_START)) $criteria->add(TourDiscountEventTypePeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(TourDiscountEventTypePeer::DATE_END)) $criteria->add(TourDiscountEventTypePeer::DATE_END, $this->date_end);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourDiscountEventTypePeer::DATABASE_NAME);

		$criteria->add(TourDiscountEventTypePeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setValue($this->value);

		$copyObj->setDateStart($this->date_start);

		$copyObj->setDateEnd($this->date_end);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTourDiscountEvents() as $relObj) {
				$copyObj->addTourDiscountEvent($relObj->copy($deepCopy));
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
			self::$peer = new TourDiscountEventTypePeer();
		}
		return self::$peer;
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

				$criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->getId());

				TourDiscountEventPeer::addSelectColumns($criteria);
				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->getId());

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

		$criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->getId());

		return TourDiscountEventPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDiscountEvent(TourDiscountEvent $l)
	{
		$this->collTourDiscountEvents[] = $l;
		$l->setTourDiscountEventType($this);
	}


	
	public function getTourDiscountEventsJoinTourDetail($criteria = null, $con = null)
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

				$criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->getId());

				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDiscountEventPeer::TOUR_DISCOUNT_EVENT_TYPE_ID, $this->getId());

			if (!isset($this->lastTourDiscountEventCriteria) || !$this->lastTourDiscountEventCriteria->equals($criteria)) {
				$this->collTourDiscountEvents = TourDiscountEventPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastTourDiscountEventCriteria = $criteria;

		return $this->collTourDiscountEvents;
	}

} 