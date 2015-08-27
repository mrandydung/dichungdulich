<?php


abstract class BaseCity extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $region_id = 0;


	
	protected $on_homepage = false;


	
	protected $homepage_img;


	
	protected $name_old;


	
	protected $name_en;


	
	protected $priority = 10;


	
	protected $name;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collTourDetails;

	
	protected $lastTourDetailCriteria = null;

	
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

	
	public function getRegionId()
	{

        return $this->region_id;
	}

	
	public function getOnHomepage()
	{

        return $this->on_homepage;
	}

	
	public function getHomepageImg()
	{

        return $this->homepage_img;
	}

	
	public function getNameOld()
	{

        return $this->name_old;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getPriority()
	{

        return $this->priority;
	}

	
	public function getName()
	{

        return $this->name;
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

	
	public function getUpdatedAt($format = 'Y-m-d H:i:s')
	{

		if ($this->updated_at === null || $this->updated_at === '') {
			return null;
		} elseif (!is_int($this->updated_at)) {
						$ts = strtotime($this->updated_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [updated_at] as date/time value: " . var_export($this->updated_at, true));
			}
		} else {
			$ts = $this->updated_at;
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
			$this->modifiedColumns[] = CityPeer::ID;
		}

	} 
	
	public function setRegionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->region_id !== $v || $v === 0) {
			$this->region_id = $v;
			$this->modifiedColumns[] = CityPeer::REGION_ID;
		}

	} 
	
	public function setOnHomepage($v)
	{

		if ($this->on_homepage !== $v || $v === false) {
			$this->on_homepage = $v;
			$this->modifiedColumns[] = CityPeer::ON_HOMEPAGE;
		}

	} 
	
	public function setHomepageImg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->homepage_img !== $v) {
			$this->homepage_img = $v;
			$this->modifiedColumns[] = CityPeer::HOMEPAGE_IMG;
		}

	} 
	
	public function setNameOld($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_old !== $v) {
			$this->name_old = $v;
			$this->modifiedColumns[] = CityPeer::NAME_OLD;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = CityPeer::NAME_EN;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = CityPeer::PRIORITY;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = CityPeer::NAME;
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
			$this->modifiedColumns[] = CityPeer::CREATED_AT;
		}

	} 
	
	public function setUpdatedAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [updated_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->updated_at !== $ts) {
			$this->updated_at = $ts;
			$this->modifiedColumns[] = CityPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->region_id = $rs->getInt($startcol + 1);

			$this->on_homepage = $rs->getBoolean($startcol + 2);

			$this->homepage_img = $rs->getString($startcol + 3);

			$this->name_old = $rs->getString($startcol + 4);

			$this->name_en = $rs->getString($startcol + 5);

			$this->priority = $rs->getInt($startcol + 6);

			$this->name = $rs->getString($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->updated_at = $rs->getTimestamp($startcol + 9, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating City object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CityPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CityPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CityPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(CityPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CityPeer::DATABASE_NAME);
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
					$pk = CityPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CityPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDetails !== null) {
				foreach($this->collTourDetails as $referrerFK) {
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


			if (($retval = CityPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDetails !== null) {
					foreach($this->collTourDetails as $referrerFK) {
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
		$pos = CityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getRegionId();
				break;
			case 2:
				return $this->getOnHomepage();
				break;
			case 3:
				return $this->getHomepageImg();
				break;
			case 4:
				return $this->getNameOld();
				break;
			case 5:
				return $this->getNameEn();
				break;
			case 6:
				return $this->getPriority();
				break;
			case 7:
				return $this->getName();
				break;
			case 8:
				return $this->getCreatedAt();
				break;
			case 9:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CityPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRegionId(),
			$keys[2] => $this->getOnHomepage(),
			$keys[3] => $this->getHomepageImg(),
			$keys[4] => $this->getNameOld(),
			$keys[5] => $this->getNameEn(),
			$keys[6] => $this->getPriority(),
			$keys[7] => $this->getName(),
			$keys[8] => $this->getCreatedAt(),
			$keys[9] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CityPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setRegionId($value);
				break;
			case 2:
				$this->setOnHomepage($value);
				break;
			case 3:
				$this->setHomepageImg($value);
				break;
			case 4:
				$this->setNameOld($value);
				break;
			case 5:
				$this->setNameEn($value);
				break;
			case 6:
				$this->setPriority($value);
				break;
			case 7:
				$this->setName($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
			case 9:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CityPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRegionId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOnHomepage($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHomepageImg($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNameOld($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setNameEn($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPriority($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setName($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CityPeer::DATABASE_NAME);

		if ($this->isColumnModified(CityPeer::ID)) $criteria->add(CityPeer::ID, $this->id);
		if ($this->isColumnModified(CityPeer::REGION_ID)) $criteria->add(CityPeer::REGION_ID, $this->region_id);
		if ($this->isColumnModified(CityPeer::ON_HOMEPAGE)) $criteria->add(CityPeer::ON_HOMEPAGE, $this->on_homepage);
		if ($this->isColumnModified(CityPeer::HOMEPAGE_IMG)) $criteria->add(CityPeer::HOMEPAGE_IMG, $this->homepage_img);
		if ($this->isColumnModified(CityPeer::NAME_OLD)) $criteria->add(CityPeer::NAME_OLD, $this->name_old);
		if ($this->isColumnModified(CityPeer::NAME_EN)) $criteria->add(CityPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(CityPeer::PRIORITY)) $criteria->add(CityPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(CityPeer::NAME)) $criteria->add(CityPeer::NAME, $this->name);
		if ($this->isColumnModified(CityPeer::CREATED_AT)) $criteria->add(CityPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(CityPeer::UPDATED_AT)) $criteria->add(CityPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CityPeer::DATABASE_NAME);

		$criteria->add(CityPeer::ID, $this->id);

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

		$copyObj->setRegionId($this->region_id);

		$copyObj->setOnHomepage($this->on_homepage);

		$copyObj->setHomepageImg($this->homepage_img);

		$copyObj->setNameOld($this->name_old);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setPriority($this->priority);

		$copyObj->setName($this->name);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTourDetails() as $relObj) {
				$copyObj->addTourDetail($relObj->copy($deepCopy));
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
			self::$peer = new CityPeer();
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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

		$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setCity($this);
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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTypePricing($criteria = null, $con = null)
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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::CITY_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
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

				$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

				HomeDiemDenItemPeer::addSelectColumns($criteria);
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

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

		$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

		return HomeDiemDenItemPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenItem(HomeDiemDenItem $l)
	{
		$this->collHomeDiemDenItems[] = $l;
		$l->setCity($this);
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

				$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinRegion($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemCriteria) || !$this->lastHomeDiemDenItemCriteria->equals($criteria)) {
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinRegion($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemCriteria = $criteria;

		return $this->collHomeDiemDenItems;
	}


	
	public function getHomeDiemDenItemsJoinArea($criteria = null, $con = null)
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

				$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinArea($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemCriteria) || !$this->lastHomeDiemDenItemCriteria->equals($criteria)) {
				$this->collHomeDiemDenItems = HomeDiemDenItemPeer::doSelectJoinArea($criteria, $con);
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

				$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

				HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

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

		$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

		return HomeDiemDenItemPartnerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenItemPartner(HomeDiemDenItemPartner $l)
	{
		$this->collHomeDiemDenItemPartners[] = $l;
		$l->setCity($this);
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

				$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

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

				$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}


	
	public function getHomeDiemDenItemPartnersJoinArea($criteria = null, $con = null)
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

				$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinArea($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinArea($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}

} 