<?php


abstract class BaseTripAcquirementsImg extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $images;


	
	protected $images_thumb;


	
	protected $trip_acquirements_id;

	
	protected $aTripAcquirements;

	
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

	
	public function getImagesThumb()
	{

        return $this->images_thumb;
	}

	
	public function getTripAcquirementsId()
	{

        return $this->trip_acquirements_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TripAcquirementsImgPeer::ID;
		}

	} 
	
	public function setImages($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images !== $v) {
			$this->images = $v;
			$this->modifiedColumns[] = TripAcquirementsImgPeer::IMAGES;
		}

	} 
	
	public function setImagesThumb($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images_thumb !== $v) {
			$this->images_thumb = $v;
			$this->modifiedColumns[] = TripAcquirementsImgPeer::IMAGES_THUMB;
		}

	} 
	
	public function setTripAcquirementsId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->trip_acquirements_id !== $v) {
			$this->trip_acquirements_id = $v;
			$this->modifiedColumns[] = TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID;
		}

		if ($this->aTripAcquirements !== null && $this->aTripAcquirements->getId() !== $v) {
			$this->aTripAcquirements = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->images = $rs->getString($startcol + 1);

			$this->images_thumb = $rs->getString($startcol + 2);

			$this->trip_acquirements_id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TripAcquirementsImg object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripAcquirementsImgPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TripAcquirementsImgPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TripAcquirementsImgPeer::DATABASE_NAME);
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


												
			if ($this->aTripAcquirements !== null) {
				if ($this->aTripAcquirements->isModified()) {
					$affectedRows += $this->aTripAcquirements->save($con);
				}
				$this->setTripAcquirements($this->aTripAcquirements);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TripAcquirementsImgPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TripAcquirementsImgPeer::doUpdate($this, $con);
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


												
			if ($this->aTripAcquirements !== null) {
				if (!$this->aTripAcquirements->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTripAcquirements->getValidationFailures());
				}
			}


			if (($retval = TripAcquirementsImgPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripAcquirementsImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getImagesThumb();
				break;
			case 3:
				return $this->getTripAcquirementsId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripAcquirementsImgPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getImages(),
			$keys[2] => $this->getImagesThumb(),
			$keys[3] => $this->getTripAcquirementsId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripAcquirementsImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setImagesThumb($value);
				break;
			case 3:
				$this->setTripAcquirementsId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripAcquirementsImgPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setImages($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setImagesThumb($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTripAcquirementsId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TripAcquirementsImgPeer::DATABASE_NAME);

		if ($this->isColumnModified(TripAcquirementsImgPeer::ID)) $criteria->add(TripAcquirementsImgPeer::ID, $this->id);
		if ($this->isColumnModified(TripAcquirementsImgPeer::IMAGES)) $criteria->add(TripAcquirementsImgPeer::IMAGES, $this->images);
		if ($this->isColumnModified(TripAcquirementsImgPeer::IMAGES_THUMB)) $criteria->add(TripAcquirementsImgPeer::IMAGES_THUMB, $this->images_thumb);
		if ($this->isColumnModified(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID)) $criteria->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, $this->trip_acquirements_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TripAcquirementsImgPeer::DATABASE_NAME);

		$criteria->add(TripAcquirementsImgPeer::ID, $this->id);

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

		$copyObj->setImagesThumb($this->images_thumb);

		$copyObj->setTripAcquirementsId($this->trip_acquirements_id);


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
			self::$peer = new TripAcquirementsImgPeer();
		}
		return self::$peer;
	}

	
	public function setTripAcquirements($v)
	{


		if ($v === null) {
			$this->setTripAcquirementsId(NULL);
		} else {
			$this->setTripAcquirementsId($v->getId());
		}


		$this->aTripAcquirements = $v;
	}


	
	static $TripAcquirements = array();
	
	public function getTripAcquirements($con = null)
	{
		if ($this->aTripAcquirements === null && ($this->trip_acquirements_id !== null)) {
						if(!isset(self::$TripAcquirements[$this->trip_acquirements_id])){
				self::$TripAcquirements[$this->trip_acquirements_id] = TripAcquirementsPeer::retrieveByPK($this->trip_acquirements_id, $con);
			}
			$this->aTripAcquirements = self::$TripAcquirements[$this->trip_acquirements_id];

			
		}
		return $this->aTripAcquirements;
	}

} 