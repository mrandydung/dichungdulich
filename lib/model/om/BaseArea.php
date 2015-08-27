<?php


abstract class BaseArea extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;

	
	protected $collHomeDiemDenQuocTes;

	
	protected $lastHomeDiemDenQuocTeCriteria = null;

	
	protected $collHomeDiemDenItems;

	
	protected $lastHomeDiemDenItemCriteria = null;

	
	protected $collHomeDiemDenItemPartners;

	
	protected $lastHomeDiemDenItemPartnerCriteria = null;

	
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
			$this->modifiedColumns[] = AreaPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = AreaPeer::NAME;
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
			throw new PropelException("Error populating Area object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(AreaPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			AreaPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(AreaPeer::DATABASE_NAME);
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
					$pk = AreaPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += AreaPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collHomeDiemDenQuocTes !== null) {
				foreach($this->collHomeDiemDenQuocTes as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHomeDiemDenItems !== null) {
				foreach($this->collHomeDiemDenItems as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHomeDiemDenItemPartners !== null) {
				foreach($this->collHomeDiemDenItemPartners as $referrerFK) {
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


			if (($retval = AreaPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collHomeDiemDenQuocTes !== null) {
					foreach($this->collHomeDiemDenQuocTes as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHomeDiemDenItems !== null) {
					foreach($this->collHomeDiemDenItems as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHomeDiemDenItemPartners !== null) {
					foreach($this->collHomeDiemDenItemPartners as $referrerFK) {
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
		$pos = AreaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = AreaPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = AreaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = AreaPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(AreaPeer::DATABASE_NAME);

		if ($this->isColumnModified(AreaPeer::ID)) $criteria->add(AreaPeer::ID, $this->id);
		if ($this->isColumnModified(AreaPeer::NAME)) $criteria->add(AreaPeer::NAME, $this->name);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(AreaPeer::DATABASE_NAME);

		$criteria->add(AreaPeer::ID, $this->id);

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

			foreach($this->getHomeDiemDenQuocTes() as $relObj) {
				$copyObj->addHomeDiemDenQuocTe($relObj->copy($deepCopy));
			}

			foreach($this->getHomeDiemDenItems() as $relObj) {
				$copyObj->addHomeDiemDenItem($relObj->copy($deepCopy));
			}

			foreach($this->getHomeDiemDenItemPartners() as $relObj) {
				$copyObj->addHomeDiemDenItemPartner($relObj->copy($deepCopy));
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
			self::$peer = new AreaPeer();
		}
		return self::$peer;
	}

	
	public function initHomeDiemDenQuocTes()
	{
		if ($this->collHomeDiemDenQuocTes === null) {
			$this->collHomeDiemDenQuocTes = array();
		}
	}

	
	public function getHomeDiemDenQuocTes($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenQuocTes === null) {
			if ($this->isNew()) {
			   $this->collHomeDiemDenQuocTes = array();
			} else {

				$criteria->add(HomeDiemDenQuocTePeer::AREA_ID, $this->getId());

				HomeDiemDenQuocTePeer::addSelectColumns($criteria);
				$this->collHomeDiemDenQuocTes = HomeDiemDenQuocTePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenQuocTePeer::AREA_ID, $this->getId());

				HomeDiemDenQuocTePeer::addSelectColumns($criteria);
				if (!isset($this->lastHomeDiemDenQuocTeCriteria) || !$this->lastHomeDiemDenQuocTeCriteria->equals($criteria)) {
					$this->collHomeDiemDenQuocTes = HomeDiemDenQuocTePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHomeDiemDenQuocTeCriteria = $criteria;
		return $this->collHomeDiemDenQuocTes;
	}

	
	public function countHomeDiemDenQuocTes($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HomeDiemDenQuocTePeer::AREA_ID, $this->getId());

		return HomeDiemDenQuocTePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenQuocTe(HomeDiemDenQuocTe $l)
	{
		$this->collHomeDiemDenQuocTes[] = $l;
		$l->setArea($this);
	}

	
	public function initHomeDiemDenItems()
	{
		if ($this->collHomeDiemDenItems === null) {
			$this->collHomeDiemDenItems = array();
		}
	}

	
	public function getHomeDiemDenItems($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItems === null) {
			if ($this->isNew()) {
			   $this->collHomeDiemDenItems = array();
			} else {

				$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

				HomeDiemDenItemPeer::addSelectColumns($criteria);
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

				HomeDiemDenItemPeer::addSelectColumns($criteria);
				if (!isset($this->lastHomeDiemDenItemCriteria) || !$this->lastHomeDiemDenItemCriteria->equals($criteria)) {
					$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHomeDiemDenItemCriteria = $criteria;
		return $this->collHomeDiemDenItems;
	}

	
	public function countHomeDiemDenItems($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

		return HomeDiemDenItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenItem(HomeDiemDenItem $l)
	{
		$this->collHomeDiemDenItems[] = $l;
		$l->setArea($this);
	}


	
	public function getHomeDiemDenItemsJoinRegion($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItems === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItems = array();
			} else {

				$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinRegion($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemCriteria) || !$this->lastHomeDiemDenItemCriteria->equals($criteria)) {
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinRegion($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemCriteria = $criteria;

		return $this->collHomeDiemDenItems;
	}


	
	public function getHomeDiemDenItemsJoinCity($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItems === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItems = array();
			} else {

				$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemCriteria) || !$this->lastHomeDiemDenItemCriteria->equals($criteria)) {
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinCity($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemCriteria = $criteria;

		return $this->collHomeDiemDenItems;
	}

	
	public function initHomeDiemDenItemPartners()
	{
		if ($this->collHomeDiemDenItemPartners === null) {
			$this->collHomeDiemDenItemPartners = array();
		}
	}

	
	public function getHomeDiemDenItemPartners($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
			   $this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

				HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

				HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
				if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
					$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;
		return $this->collHomeDiemDenItemPartners;
	}

	
	public function countHomeDiemDenItemPartners($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

		return HomeDiemDenItemPartnerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenItemPartner(HomeDiemDenItemPartner $l)
	{
		$this->collHomeDiemDenItemPartners[] = $l;
		$l->setArea($this);
	}


	
	public function getHomeDiemDenItemPartnersJoinPartner($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinPartner($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}


	
	public function getHomeDiemDenItemPartnersJoinRegion($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}


	
	public function getHomeDiemDenItemPartnersJoinCity($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinCity($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}

} 