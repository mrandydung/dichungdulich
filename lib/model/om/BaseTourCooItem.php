<?php


abstract class BaseTourCooItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_id;


	
	protected $name_end;


	
	protected $coo_end;


	
	protected $lat_end;


	
	protected $lng_end;


	
	protected $is_end = false;


	
	protected $created_at;

	
	protected $aTourDetail;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTourId()
	{

        return $this->tour_id;
	}

	
	public function getNameEnd()
	{

        return $this->name_end;
	}

	
	public function getCooEnd()
	{

        return $this->coo_end;
	}

	
	public function getLatEnd()
	{

        return $this->lat_end;
	}

	
	public function getLngEnd()
	{

        return $this->lng_end;
	}

	
	public function getIsEnd()
	{

        return $this->is_end;
	}

	
	public function getCreatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->created_at === null || $this->created_at === '') {
			return null;
		} elseif (!is_int($this->created_at)) {
						$ts = strtotime($this->created_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [created_at] as date/time value: " . var_export($this->created_at, true));
			}
		} else {
			$ts = $this->created_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TourCooItemPeer::ID;
		}

	} 
	
	public function setTourId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_id !== $v) {
			$this->tour_id = $v;
			$this->modifiedColumns[] = TourCooItemPeer::TOUR_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setNameEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_end !== $v) {
			$this->name_end = $v;
			$this->modifiedColumns[] = TourCooItemPeer::NAME_END;
		}

	} 
	
	public function setCooEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_end !== $v) {
			$this->coo_end = $v;
			$this->modifiedColumns[] = TourCooItemPeer::COO_END;
		}

	} 
	
	public function setLatEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lat_end !== $v) {
			$this->lat_end = $v;
			$this->modifiedColumns[] = TourCooItemPeer::LAT_END;
		}

	} 
	
	public function setLngEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lng_end !== $v) {
			$this->lng_end = $v;
			$this->modifiedColumns[] = TourCooItemPeer::LNG_END;
		}

	} 
	
	public function setIsEnd($v)
	{

		if ($this->is_end !== $v || $v === false) {
			$this->is_end = $v;
			$this->modifiedColumns[] = TourCooItemPeer::IS_END;
		}

	} 
	
	public function setCreatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [created_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->created_at !== $ts) {
			$this->created_at = $ts;
			$this->modifiedColumns[] = TourCooItemPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_id = $rs->getInt($startcol + 1);

			$this->name_end = $rs->getString($startcol + 2);

			$this->coo_end = $rs->getString($startcol + 3);

			$this->lat_end = $rs->getString($startcol + 4);

			$this->lng_end = $rs->getString($startcol + 5);

			$this->is_end = $rs->getBoolean($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourCooItem object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourCooItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourCooItemPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourCooItemPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourCooItemPeer::DATABASE_NAME);
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
					$pk = TourCooItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourCooItemPeer::doUpdate($this, $con);
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


			if (($retval = TourCooItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourCooItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTourId();
				break;
			case 2:
				return $this->getNameEnd();
				break;
			case 3:
				return $this->getCooEnd();
				break;
			case 4:
				return $this->getLatEnd();
				break;
			case 5:
				return $this->getLngEnd();
				break;
			case 6:
				return $this->getIsEnd();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourCooItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourId(),
			$keys[2] => $this->getNameEnd(),
			$keys[3] => $this->getCooEnd(),
			$keys[4] => $this->getLatEnd(),
			$keys[5] => $this->getLngEnd(),
			$keys[6] => $this->getIsEnd(),
			$keys[7] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourCooItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTourId($value);
				break;
			case 2:
				$this->setNameEnd($value);
				break;
			case 3:
				$this->setCooEnd($value);
				break;
			case 4:
				$this->setLatEnd($value);
				break;
			case 5:
				$this->setLngEnd($value);
				break;
			case 6:
				$this->setIsEnd($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourCooItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEnd($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCooEnd($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLatEnd($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLngEnd($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIsEnd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourCooItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourCooItemPeer::ID)) $criteria->add(TourCooItemPeer::ID, $this->id);
		if ($this->isColumnModified(TourCooItemPeer::TOUR_ID)) $criteria->add(TourCooItemPeer::TOUR_ID, $this->tour_id);
		if ($this->isColumnModified(TourCooItemPeer::NAME_END)) $criteria->add(TourCooItemPeer::NAME_END, $this->name_end);
		if ($this->isColumnModified(TourCooItemPeer::COO_END)) $criteria->add(TourCooItemPeer::COO_END, $this->coo_end);
		if ($this->isColumnModified(TourCooItemPeer::LAT_END)) $criteria->add(TourCooItemPeer::LAT_END, $this->lat_end);
		if ($this->isColumnModified(TourCooItemPeer::LNG_END)) $criteria->add(TourCooItemPeer::LNG_END, $this->lng_end);
		if ($this->isColumnModified(TourCooItemPeer::IS_END)) $criteria->add(TourCooItemPeer::IS_END, $this->is_end);
		if ($this->isColumnModified(TourCooItemPeer::CREATED_AT)) $criteria->add(TourCooItemPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourCooItemPeer::DATABASE_NAME);

		$criteria->add(TourCooItemPeer::ID, $this->id);

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

		$copyObj->setTourId($this->tour_id);

		$copyObj->setNameEnd($this->name_end);

		$copyObj->setCooEnd($this->coo_end);

		$copyObj->setLatEnd($this->lat_end);

		$copyObj->setLngEnd($this->lng_end);

		$copyObj->setIsEnd($this->is_end);

		$copyObj->setCreatedAt($this->created_at);


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
			self::$peer = new TourCooItemPeer();
		}
		return self::$peer;
	}

	
	public function setTourDetail($v)
	{


		if ($v === null) {
			$this->setTourId(NULL);
		} else {
			$this->setTourId($v->getId());
		}


		$this->aTourDetail = $v;
	}


	
	static $TourDetail = array();
	
	public function getTourDetail($con = null)
	{
		if ($this->aTourDetail === null && ($this->tour_id !== null)) {
						if(!isset(self::$TourDetail[$this->tour_id])){
				self::$TourDetail[$this->tour_id] = TourDetailPeer::retrieveByPK($this->tour_id, $con);
			}
			$this->aTourDetail = self::$TourDetail[$this->tour_id];

			
		}
		return $this->aTourDetail;
	}

} 