<?php


abstract class BaseTourType extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name = '1';

	
	protected $collTourDetails;

	
	protected $lastTourDetailCriteria = null;

	
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
			$this->modifiedColumns[] = TourTypePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v || $v === '1') {
			$this->name = $v;
			$this->modifiedColumns[] = TourTypePeer::NAME;
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
			throw new PropelException("Error populating TourType object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourTypePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourTypePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TourTypePeer::DATABASE_NAME);
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
					$pk = TourTypePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourTypePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDetails !== null) {
				foreach($this->collTourDetails as $referrerFK) {
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


			if (($retval = TourTypePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDetails !== null) {
					foreach($this->collTourDetails as $referrerFK) {
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
		$pos = TourTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = TourTypePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourTypePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = TourTypePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourTypePeer::DATABASE_NAME);

		if ($this->isColumnModified(TourTypePeer::ID)) $criteria->add(TourTypePeer::ID, $this->id);
		if ($this->isColumnModified(TourTypePeer::NAME)) $criteria->add(TourTypePeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourTypePeer::DATABASE_NAME);

		$criteria->add(TourTypePeer::ID, $this->id);

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

			foreach($this->getTourDetails() as $relObj) {
				$copyObj->addTourDetail($relObj->copy($deepCopy));
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
			self::$peer = new TourTypePeer();
		}
		return self::$peer;
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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

		$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setTourType($this);
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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinDichungUser($criteria = null, $con = null)
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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TOUR_TYPE_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}

} 