<?php


abstract class BaseTourDiscountType extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;

	
	protected $collTourDiscounts;

	
	protected $lastTourDiscountCriteria = null;

	
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TourDiscountTypePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TourDiscountTypePeer::NAME;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 2; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourDiscountType object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourDiscountTypePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourDiscountTypePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TourDiscountTypePeer::DATABASE_NAME);
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
					$pk = TourDiscountTypePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourDiscountTypePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDiscounts !== null) {
				foreach($this->collTourDiscounts as $referrerFK) {
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


			if (($retval = TourDiscountTypePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDiscounts !== null) {
					foreach($this->collTourDiscounts as $referrerFK) {
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
		$pos = TourDiscountTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountTypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourDiscountTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourDiscountTypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourDiscountTypePeer::DATABASE_NAME);

		if ($this->isColumnModified(TourDiscountTypePeer::ID)) $criteria->add(TourDiscountTypePeer::ID, $this->id);
		if ($this->isColumnModified(TourDiscountTypePeer::NAME)) $criteria->add(TourDiscountTypePeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourDiscountTypePeer::DATABASE_NAME);

		$criteria->add(TourDiscountTypePeer::ID, $this->id);

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


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTourDiscounts() as $relObj) {
				$copyObj->addTourDiscount($relObj->copy($deepCopy));
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
			self::$peer = new TourDiscountTypePeer();
		}
		return self::$peer;
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

				$criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->getId());

				TourDiscountPeer::addSelectColumns($criteria);
				$this->collTourDiscounts = TourDiscountPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->getId());

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

		$criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->getId());

		return TourDiscountPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDiscount(TourDiscount $l)
	{
		$this->collTourDiscounts[] = $l;
		$l->setTourDiscountType($this);
	}


	
	public function getTourDiscountsJoinTourDetail($criteria = null, $con = null)
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

				$criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->getId());

				$this->collTourDiscounts = TourDiscountPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDiscountPeer::TOUR_DISCOUNT_TYPE_ID, $this->getId());

			if (!isset($this->lastTourDiscountCriteria) || !$this->lastTourDiscountCriteria->equals($criteria)) {
				$this->collTourDiscounts = TourDiscountPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastTourDiscountCriteria = $criteria;

		return $this->collTourDiscounts;
	}

} 