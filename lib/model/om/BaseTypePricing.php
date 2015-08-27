<?php


abstract class BaseTypePricing extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;

	
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

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TypePricingPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TypePricingPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = TypePricingPeer::NAME_EN;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->name_en = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TypePricing object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TypePricingPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TypePricingPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TypePricingPeer::DATABASE_NAME);
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
					$pk = TypePricingPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TypePricingPeer::doUpdate($this, $con);
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


			if (($retval = TypePricingPeer::doValidate($this, $columns)) !== true) {
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
		$pos = TypePricingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TypePricingPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TypePricingPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TypePricingPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TypePricingPeer::DATABASE_NAME);

		if ($this->isColumnModified(TypePricingPeer::ID)) $criteria->add(TypePricingPeer::ID, $this->id);
		if ($this->isColumnModified(TypePricingPeer::NAME)) $criteria->add(TypePricingPeer::NAME, $this->name);
		if ($this->isColumnModified(TypePricingPeer::NAME_EN)) $criteria->add(TypePricingPeer::NAME_EN, $this->name_en);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TypePricingPeer::DATABASE_NAME);

		$criteria->add(TypePricingPeer::ID, $this->id);

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
			self::$peer = new TypePricingPeer();
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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

		$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setTypePricing($this);
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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourType($criteria = null, $con = null)
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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::TYPE_PRICING_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}

} 