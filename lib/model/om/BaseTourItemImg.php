<?php


abstract class BaseTourItemImg extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $images;


	
	protected $tour_id;


	
	protected $tour_detail_id;

	
	protected $aTourDetail;

	
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

	
	public function getTourId()
	{

        return $this->tour_id;
	}

	
	public function getTourDetailId()
	{

        return $this->tour_detail_id;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TourItemImgPeer::ID;
		}

	} 
	
	public function setImages($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images !== $v) {
			$this->images = $v;
			$this->modifiedColumns[] = TourItemImgPeer::IMAGES;
		}

	} 
	
	public function setTourId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_id !== $v) {
			$this->tour_id = $v;
			$this->modifiedColumns[] = TourItemImgPeer::TOUR_ID;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = TourItemImgPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->images = $rs->getString($startcol + 1);

			$this->tour_id = $rs->getInt($startcol + 2);

			$this->tour_detail_id = $rs->getInt($startcol + 3);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 4; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourItemImg object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourItemImgPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourItemImgPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(TourItemImgPeer::DATABASE_NAME);
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


												
			if ($this->aTourDetail !== null) {
				if ($this->aTourDetail->isModified()) {
					$affectedRows += $this->aTourDetail->save($con);
				}
				$this->setTourDetail($this->aTourDetail);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourItemImgPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourItemImgPeer::doUpdate($this, $con);
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


												
			if ($this->aTourDetail !== null) {
				if (!$this->aTourDetail->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDetail->getValidationFailures());
				}
			}


			if (($retval = TourItemImgPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourItemImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTourId();
				break;
			case 3:
				return $this->getTourDetailId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourItemImgPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getImages(),
			$keys[2] => $this->getTourId(),
			$keys[3] => $this->getTourDetailId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourItemImgPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTourId($value);
				break;
			case 3:
				$this->setTourDetailId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourItemImgPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setImages($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTourId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTourDetailId($arr[$keys[3]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourItemImgPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourItemImgPeer::ID)) $criteria->add(TourItemImgPeer::ID, $this->id);
		if ($this->isColumnModified(TourItemImgPeer::IMAGES)) $criteria->add(TourItemImgPeer::IMAGES, $this->images);
		if ($this->isColumnModified(TourItemImgPeer::TOUR_ID)) $criteria->add(TourItemImgPeer::TOUR_ID, $this->tour_id);
		if ($this->isColumnModified(TourItemImgPeer::TOUR_DETAIL_ID)) $criteria->add(TourItemImgPeer::TOUR_DETAIL_ID, $this->tour_detail_id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourItemImgPeer::DATABASE_NAME);

		$criteria->add(TourItemImgPeer::ID, $this->id);

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

		$copyObj->setTourId($this->tour_id);

		$copyObj->setTourDetailId($this->tour_detail_id);


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
			self::$peer = new TourItemImgPeer();
		}
		return self::$peer;
	}

	
	public function setTourDetail($v)
	{


		if ($v === null) {
			$this->setTourDetailId(NULL);
		} else {
			$this->setTourDetailId($v->getId());
		}


		$this->aTourDetail = $v;
	}


	
	static $TourDetail = array();
	
	public function getTourDetail($con = null)
	{
		if ($this->aTourDetail === null && ($this->tour_detail_id !== null)) {
						if(!isset(self::$TourDetail[$this->tour_detail_id])){
				self::$TourDetail[$this->tour_detail_id] = TourDetailPeer::retrieveByPK($this->tour_detail_id, $con);
			}
			$this->aTourDetail = self::$TourDetail[$this->tour_detail_id];

			
		}
		return $this->aTourDetail;
	}

} 