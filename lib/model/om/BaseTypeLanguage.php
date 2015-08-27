<?php


abstract class BaseTypeLanguage extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $code;

	
	protected $collInfoTourDetailByLanguages;

	
	protected $lastInfoTourDetailByLanguageCriteria = null;

	
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

	
	public function getCode()
	{

        return $this->code;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TypeLanguagePeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = TypeLanguagePeer::NAME;
		}

	} 
	
	public function setCode($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->code !== $v) {
			$this->code = $v;
			$this->modifiedColumns[] = TypeLanguagePeer::CODE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->code = $rs->getString($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TypeLanguage object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TypeLanguagePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TypeLanguagePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TypeLanguagePeer::DATABASE_NAME);
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
					$pk = TypeLanguagePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TypeLanguagePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collInfoTourDetailByLanguages !== null) {
				foreach($this->collInfoTourDetailByLanguages as $referrerFK) {
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


			if (($retval = TypeLanguagePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collInfoTourDetailByLanguages !== null) {
					foreach($this->collInfoTourDetailByLanguages as $referrerFK) {
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
		$pos = TypeLanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCode();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TypeLanguagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getCode(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TypeLanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCode($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TypeLanguagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCode($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TypeLanguagePeer::DATABASE_NAME);

		if ($this->isColumnModified(TypeLanguagePeer::ID)) $criteria->add(TypeLanguagePeer::ID, $this->id);
		if ($this->isColumnModified(TypeLanguagePeer::NAME)) $criteria->add(TypeLanguagePeer::NAME, $this->name);
		if ($this->isColumnModified(TypeLanguagePeer::CODE)) $criteria->add(TypeLanguagePeer::CODE, $this->code);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TypeLanguagePeer::DATABASE_NAME);

		$criteria->add(TypeLanguagePeer::ID, $this->id);

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

		$copyObj->setCode($this->code);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getInfoTourDetailByLanguages() as $relObj) {
				$copyObj->addInfoTourDetailByLanguage($relObj->copy($deepCopy));
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
			self::$peer = new TypeLanguagePeer();
		}
		return self::$peer;
	}

	
	public function initInfoTourDetailByLanguages()
	{
		if ($this->collInfoTourDetailByLanguages === null) {
			$this->collInfoTourDetailByLanguages = array();
		}
	}

	
	public function getInfoTourDetailByLanguages($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collInfoTourDetailByLanguages === null) {
			if ($this->isNew()) {
			   $this->collInfoTourDetailByLanguages = array();
			} else {

				$criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->getId());

				InfoTourDetailByLanguagePeer::addSelectColumns($criteria);
				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->getId());

				InfoTourDetailByLanguagePeer::addSelectColumns($criteria);
				if (!isset($this->lastInfoTourDetailByLanguageCriteria) || !$this->lastInfoTourDetailByLanguageCriteria->equals($criteria)) {
					$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastInfoTourDetailByLanguageCriteria = $criteria;
		return $this->collInfoTourDetailByLanguages;
	}

	
	public function countInfoTourDetailByLanguages($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->getId());

		return InfoTourDetailByLanguagePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addInfoTourDetailByLanguage(InfoTourDetailByLanguage $l)
	{
		$this->collInfoTourDetailByLanguages[] = $l;
		$l->setTypeLanguage($this);
	}


	
	public function getInfoTourDetailByLanguagesJoinTourDetail($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collInfoTourDetailByLanguages === null) {
			if ($this->isNew()) {
				$this->collInfoTourDetailByLanguages = array();
			} else {

				$criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->getId());

				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->getId());

			if (!isset($this->lastInfoTourDetailByLanguageCriteria) || !$this->lastInfoTourDetailByLanguageCriteria->equals($criteria)) {
				$this->collInfoTourDetailByLanguages = InfoTourDetailByLanguagePeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastInfoTourDetailByLanguageCriteria = $criteria;

		return $this->collInfoTourDetailByLanguages;
	}

} 