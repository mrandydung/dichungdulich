<?php


abstract class BaseTripExperienceImg extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $images;


	
	protected $trip_experience_id;

	
	protected $aTripExperience;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getImages()
	{

        return $this->images;
	}

	
	public function getTripExperienceId()
	{

        return $this->trip_experience_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TripExperienceImgPeer::ID;
		}

	} 
	
	public function setImages($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images !== $v) {
			$this->images = $v;
			$this->modifiedColumns[] = TripExperienceImgPeer::IMAGES;
		}

	} 
	
	public function setTripExperienceId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->trip_experience_id !== $v) {
			$this->trip_experience_id = $v;
			$this->modifiedColumns[] = TripExperienceImgPeer::TRIP_EXPERIENCE_ID;
		}

		if ($this->aTripExperience !== null && $this->aTripExperience->getId() !== $v) {
			$this->aTripExperience = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->images = $rs->getString($startcol + 1);

			$this->trip_experience_id = $rs->getInt($startcol + 2);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 3; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TripExperienceImg object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripExperienceImgPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TripExperienceImgPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TripExperienceImgPeer::DATABASE_NAME);
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


												
			if ($this->aTripExperience !== null) {
				if ($this->aTripExperience->isModified()) {
					$affectedRows += $this->aTripExperience->save($con);
				}
				$this->setTripExperience($this->aTripExperience);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TripExperienceImgPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TripExperienceImgPeer::doUpdate($this, $con);
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


												
			if ($this->aTripExperience !== null) {
				if (!$this->aTripExperience->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTripExperience->getValidationFailures());
				}
			}


			if (($retval = TripExperienceImgPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripExperienceImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getImages();
				break;
			case 2:
				return $this->getTripExperienceId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripExperienceImgPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getImages(),
			$keys[2] => $this->getTripExperienceId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripExperienceImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setImages($value);
				break;
			case 2:
				$this->setTripExperienceId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripExperienceImgPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setImages($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTripExperienceId($arr[$keys[2]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TripExperienceImgPeer::DATABASE_NAME);

		if ($this->isColumnModified(TripExperienceImgPeer::ID)) $criteria->add(TripExperienceImgPeer::ID, $this->id);
		if ($this->isColumnModified(TripExperienceImgPeer::IMAGES)) $criteria->add(TripExperienceImgPeer::IMAGES, $this->images);
		if ($this->isColumnModified(TripExperienceImgPeer::TRIP_EXPERIENCE_ID)) $criteria->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID, $this->trip_experience_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TripExperienceImgPeer::DATABASE_NAME);

		$criteria->add(TripExperienceImgPeer::ID, $this->id);

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

		$copyObj->setImages($this->images);

		$copyObj->setTripExperienceId($this->trip_experience_id);


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
			self::$peer = new TripExperienceImgPeer();
		}
		return self::$peer;
	}

	
	public function setTripExperience($v)
	{


		if ($v === null) {
			$this->setTripExperienceId(NULL);
		} else {
			$this->setTripExperienceId($v->getId());
		}


		$this->aTripExperience = $v;
	}


	
	static $TripExperience = array();
	
	public function getTripExperience($con = null)
	{
		if ($this->aTripExperience === null && ($this->trip_experience_id !== null)) {
						if(!isset(self::$TripExperience[$this->trip_experience_id])){
				self::$TripExperience[$this->trip_experience_id] = TripExperiencePeer::retrieveByPK($this->trip_experience_id, $con);
			}
			$this->aTripExperience = self::$TripExperience[$this->trip_experience_id];

			
		}
		return $this->aTripExperience;
	}

} 