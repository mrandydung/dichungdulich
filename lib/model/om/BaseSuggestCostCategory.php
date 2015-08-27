<?php


abstract class BaseSuggestCostCategory extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;

	
	protected $collScheduledCostTours;

	
	protected $lastScheduledCostTourCriteria = null;

	
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
			$this->modifiedColumns[] = SuggestCostCategoryPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = SuggestCostCategoryPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = SuggestCostCategoryPeer::NAME_EN;
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
			throw new PropelException("Error populating SuggestCostCategory object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SuggestCostCategoryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SuggestCostCategoryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(SuggestCostCategoryPeer::DATABASE_NAME);
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
					$pk = SuggestCostCategoryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SuggestCostCategoryPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collScheduledCostTours !== null) {
				foreach($this->collScheduledCostTours as $referrerFK) {
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


			if (($retval = SuggestCostCategoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collScheduledCostTours !== null) {
					foreach($this->collScheduledCostTours as $referrerFK) {
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
		$pos = SuggestCostCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = SuggestCostCategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SuggestCostCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = SuggestCostCategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SuggestCostCategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(SuggestCostCategoryPeer::ID)) $criteria->add(SuggestCostCategoryPeer::ID, $this->id);
		if ($this->isColumnModified(SuggestCostCategoryPeer::NAME)) $criteria->add(SuggestCostCategoryPeer::NAME, $this->name);
		if ($this->isColumnModified(SuggestCostCategoryPeer::NAME_EN)) $criteria->add(SuggestCostCategoryPeer::NAME_EN, $this->name_en);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SuggestCostCategoryPeer::DATABASE_NAME);

		$criteria->add(SuggestCostCategoryPeer::ID, $this->id);

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

			foreach($this->getScheduledCostTours() as $relObj) {
				$copyObj->addScheduledCostTour($relObj->copy($deepCopy));
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
			self::$peer = new SuggestCostCategoryPeer();
		}
		return self::$peer;
	}

	
	public function initScheduledCostTours()
	{
		if ($this->collScheduledCostTours === null) {
			$this->collScheduledCostTours = array();
		}
	}

	
	public function getScheduledCostTours($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collScheduledCostTours === null) {
			if ($this->isNew()) {
			   $this->collScheduledCostTours = array();
			} else {

				$criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->getId());

				ScheduledCostTourPeer::addSelectColumns($criteria);
				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->getId());

				ScheduledCostTourPeer::addSelectColumns($criteria);
				if (!isset($this->lastScheduledCostTourCriteria) || !$this->lastScheduledCostTourCriteria->equals($criteria)) {
					$this->collScheduledCostTours = ScheduledCostTourPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastScheduledCostTourCriteria = $criteria;
		return $this->collScheduledCostTours;
	}

	
	public function countScheduledCostTours($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->getId());

		return ScheduledCostTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addScheduledCostTour(ScheduledCostTour $l)
	{
		$this->collScheduledCostTours[] = $l;
		$l->setSuggestCostCategory($this);
	}


	
	public function getScheduledCostToursJoinTourDetail($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collScheduledCostTours === null) {
			if ($this->isNew()) {
				$this->collScheduledCostTours = array();
			} else {

				$criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->getId());

				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(ScheduledCostTourPeer::SUGGEST_COST_CATEGORY_ID, $this->getId());

			if (!isset($this->lastScheduledCostTourCriteria) || !$this->lastScheduledCostTourCriteria->equals($criteria)) {
				$this->collScheduledCostTours = ScheduledCostTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastScheduledCostTourCriteria = $criteria;

		return $this->collScheduledCostTours;
	}

} 