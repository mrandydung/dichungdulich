<?php


abstract class BasePaymentBookingType extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;

	
	protected $collBookingTours;

	
	protected $lastBookingTourCriteria = null;

	
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
			$this->modifiedColumns[] = PaymentBookingTypePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = PaymentBookingTypePeer::NAME;
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
			throw new PropelException("Error populating PaymentBookingType object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PaymentBookingTypePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PaymentBookingTypePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(PaymentBookingTypePeer::DATABASE_NAME);
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
					$pk = PaymentBookingTypePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PaymentBookingTypePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collBookingTours !== null) {
				foreach($this->collBookingTours as $referrerFK) {
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


			if (($retval = PaymentBookingTypePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collBookingTours !== null) {
					foreach($this->collBookingTours as $referrerFK) {
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
		$pos = PaymentBookingTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = PaymentBookingTypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PaymentBookingTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = PaymentBookingTypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PaymentBookingTypePeer::DATABASE_NAME);

		if ($this->isColumnModified(PaymentBookingTypePeer::ID)) $criteria->add(PaymentBookingTypePeer::ID, $this->id);
		if ($this->isColumnModified(PaymentBookingTypePeer::NAME)) $criteria->add(PaymentBookingTypePeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PaymentBookingTypePeer::DATABASE_NAME);

		$criteria->add(PaymentBookingTypePeer::ID, $this->id);

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

			foreach($this->getBookingTours() as $relObj) {
				$copyObj->addBookingTour($relObj->copy($deepCopy));
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
			self::$peer = new PaymentBookingTypePeer();
		}
		return self::$peer;
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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

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

		$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

		return BookingTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBookingTour(BookingTour $l)
	{
		$this->collBookingTours[] = $l;
		$l->setPaymentBookingType($this);
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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

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

				$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PAYMENT_BOOKING_TYPE_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}

} 