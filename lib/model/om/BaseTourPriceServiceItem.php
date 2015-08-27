<?php


abstract class BaseTourPriceServiceItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $tour_detail_id;


	
	protected $title;


	
	protected $price;


	
	protected $price_new;


	
	protected $created_at;

	
	protected $aTourDetail;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTourDetailId()
	{

        return $this->tour_detail_id;
	}

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getPrice()
	{

        return $this->price;
	}

	
	public function getPriceNew()
	{

        return $this->price_new;
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
			$this->modifiedColumns[] = TourPriceServiceItemPeer::ID;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = TourPriceServiceItemPeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = TourPriceServiceItemPeer::TITLE;
		}

	} 
	
	public function setPrice($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->price !== $v) {
			$this->price = $v;
			$this->modifiedColumns[] = TourPriceServiceItemPeer::PRICE;
		}

	} 
	
	public function setPriceNew($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->price_new !== $v) {
			$this->price_new = $v;
			$this->modifiedColumns[] = TourPriceServiceItemPeer::PRICE_NEW;
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
			$this->modifiedColumns[] = TourPriceServiceItemPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->tour_detail_id = $rs->getInt($startcol + 1);

			$this->title = $rs->getString($startcol + 2);

			$this->price = $rs->getString($startcol + 3);

			$this->price_new = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TourPriceServiceItem object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPriceServiceItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourPriceServiceItemPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourPriceServiceItemPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPriceServiceItemPeer::DATABASE_NAME);
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
					$pk = TourPriceServiceItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourPriceServiceItemPeer::doUpdate($this, $con);
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


			if (($retval = TourPriceServiceItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPriceServiceItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTourDetailId();
				break;
			case 2:
				return $this->getTitle();
				break;
			case 3:
				return $this->getPrice();
				break;
			case 4:
				return $this->getPriceNew();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPriceServiceItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTourDetailId(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getPrice(),
			$keys[4] => $this->getPriceNew(),
			$keys[5] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPriceServiceItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTourDetailId($value);
				break;
			case 2:
				$this->setTitle($value);
				break;
			case 3:
				$this->setPrice($value);
				break;
			case 4:
				$this->setPriceNew($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPriceServiceItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTourDetailId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPrice($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPriceNew($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourPriceServiceItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourPriceServiceItemPeer::ID)) $criteria->add(TourPriceServiceItemPeer::ID, $this->id);
		if ($this->isColumnModified(TourPriceServiceItemPeer::TOUR_DETAIL_ID)) $criteria->add(TourPriceServiceItemPeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(TourPriceServiceItemPeer::TITLE)) $criteria->add(TourPriceServiceItemPeer::TITLE, $this->title);
		if ($this->isColumnModified(TourPriceServiceItemPeer::PRICE)) $criteria->add(TourPriceServiceItemPeer::PRICE, $this->price);
		if ($this->isColumnModified(TourPriceServiceItemPeer::PRICE_NEW)) $criteria->add(TourPriceServiceItemPeer::PRICE_NEW, $this->price_new);
		if ($this->isColumnModified(TourPriceServiceItemPeer::CREATED_AT)) $criteria->add(TourPriceServiceItemPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourPriceServiceItemPeer::DATABASE_NAME);

		$criteria->add(TourPriceServiceItemPeer::ID, $this->id);

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

		$copyObj->setTourDetailId($this->tour_detail_id);

		$copyObj->setTitle($this->title);

		$copyObj->setPrice($this->price);

		$copyObj->setPriceNew($this->price_new);

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
			self::$peer = new TourPriceServiceItemPeer();
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