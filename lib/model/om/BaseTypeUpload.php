<?php


abstract class BaseTypeUpload extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;

	
	protected $collTripExperiences;

	
	protected $lastTripExperienceCriteria = null;

	
	protected $collTripAcquirementss;

	
	protected $lastTripAcquirementsCriteria = null;

	
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
			$this->modifiedColumns[] = TypeUploadPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TypeUploadPeer::NAME;
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
			throw new PropelException("Error populating TypeUpload object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TypeUploadPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TypeUploadPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TypeUploadPeer::DATABASE_NAME);
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
					$pk = TypeUploadPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TypeUploadPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTripExperiences !== null) {
				foreach($this->collTripExperiences as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTripAcquirementss !== null) {
				foreach($this->collTripAcquirementss as $referrerFK) {
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


			if (($retval = TypeUploadPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTripExperiences !== null) {
					foreach($this->collTripExperiences as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTripAcquirementss !== null) {
					foreach($this->collTripAcquirementss as $referrerFK) {
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
		$pos = TypeUploadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = TypeUploadPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TypeUploadPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = TypeUploadPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TypeUploadPeer::DATABASE_NAME);

		if ($this->isColumnModified(TypeUploadPeer::ID)) $criteria->add(TypeUploadPeer::ID, $this->id);
		if ($this->isColumnModified(TypeUploadPeer::NAME)) $criteria->add(TypeUploadPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TypeUploadPeer::DATABASE_NAME);

		$criteria->add(TypeUploadPeer::ID, $this->id);

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

			foreach($this->getTripExperiences() as $relObj) {
				$copyObj->addTripExperience($relObj->copy($deepCopy));
			}

			foreach($this->getTripAcquirementss() as $relObj) {
				$copyObj->addTripAcquirements($relObj->copy($deepCopy));
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
			self::$peer = new TypeUploadPeer();
		}
		return self::$peer;
	}

	
	public function initTripExperiences()
	{
		if ($this->collTripExperiences === null) {
			$this->collTripExperiences = array();
		}
	}

	
	public function getTripExperiences($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripExperiences === null) {
			if ($this->isNew()) {
			   $this->collTripExperiences = array();
			} else {

				$criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->getId());

				TripExperiencePeer::addSelectColumns($criteria);
				$this->collTripExperiences = TripExperiencePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->getId());

				TripExperiencePeer::addSelectColumns($criteria);
				if (!isset($this->lastTripExperienceCriteria) || !$this->lastTripExperienceCriteria->equals($criteria)) {
					$this->collTripExperiences = TripExperiencePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripExperienceCriteria = $criteria;
		return $this->collTripExperiences;
	}

	
	public function countTripExperiences($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->getId());

		return TripExperiencePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripExperience(TripExperience $l)
	{
		$this->collTripExperiences[] = $l;
		$l->setTypeUpload($this);
	}


	
	public function getTripExperiencesJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripExperiences === null) {
			if ($this->isNew()) {
				$this->collTripExperiences = array();
			} else {

				$criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->getId());

				$this->collTripExperiences = TripExperiencePeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->getId());

			if (!isset($this->lastTripExperienceCriteria) || !$this->lastTripExperienceCriteria->equals($criteria)) {
				$this->collTripExperiences = TripExperiencePeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastTripExperienceCriteria = $criteria;

		return $this->collTripExperiences;
	}

	
	public function initTripAcquirementss()
	{
		if ($this->collTripAcquirementss === null) {
			$this->collTripAcquirementss = array();
		}
	}

	
	public function getTripAcquirementss($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
			   $this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
					$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;
		return $this->collTripAcquirementss;
	}

	
	public function countTripAcquirementss($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

		return TripAcquirementsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripAcquirements(TripAcquirements $l)
	{
		$this->collTripAcquirementss[] = $l;
		$l->setTypeUpload($this);
	}


	
	public function getTripAcquirementssJoinPartner($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}


	
	public function getTripAcquirementssJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}

} 