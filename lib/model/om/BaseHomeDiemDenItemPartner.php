<?php


abstract class BaseHomeDiemDenItemPartner extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id = 1;


	
	protected $region_id = 1;


	
	protected $area_id = 1;


	
	protected $city_id = 0;


	
	protected $name;


	
	protected $address;


	
	protected $img;


	
	protected $google_address;


	
	protected $google_position;


	
	protected $keyword;


	
	protected $on_homepage = false;


	
	protected $priority = 10;


	
	protected $created_at;

	
	protected $aPartner;

	
	protected $aRegion;

	
	protected $aArea;

	
	protected $aCity;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getPartnerId()
	{

        return $this->partner_id;
	}

	
	public function getRegionId()
	{

        return $this->region_id;
	}

	
	public function getAreaId()
	{

        return $this->area_id;
	}

	
	public function getCityId()
	{

        return $this->city_id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getAddress()
	{

        return $this->address;
	}

	
	public function getImg()
	{

        return $this->img;
	}

	
	public function getGoogleAddress()
	{

        return $this->google_address;
	}

	
	public function getGooglePosition()
	{

        return $this->google_position;
	}

	
	public function getKeyword()
	{

        return $this->keyword;
	}

	
	public function getOnHomepage()
	{

        return $this->on_homepage;
	}

	
	public function getPriority()
	{

        return $this->priority;
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
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v || $v === 1) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setRegionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->region_id !== $v || $v === 1) {
			$this->region_id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::REGION_ID;
		}

		if ($this->aRegion !== null && $this->aRegion->getId() !== $v) {
			$this->aRegion = null;
		}

	} 
	
	public function setAreaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->area_id !== $v || $v === 1) {
			$this->area_id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::AREA_ID;
		}

		if ($this->aArea !== null && $this->aArea->getId() !== $v) {
			$this->aArea = null;
		}

	} 
	
	public function setCityId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->city_id !== $v || $v === 0) {
			$this->city_id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::CITY_ID;
		}

		if ($this->aCity !== null && $this->aCity->getId() !== $v) {
			$this->aCity = null;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::NAME;
		}

	} 
	
	public function setAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::ADDRESS;
		}

	} 
	
	public function setImg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img !== $v) {
			$this->img = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::IMG;
		}

	} 
	
	public function setGoogleAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_address !== $v) {
			$this->google_address = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS;
		}

	} 
	
	public function setGooglePosition($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_position !== $v) {
			$this->google_position = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::GOOGLE_POSITION;
		}

	} 
	
	public function setKeyword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyword !== $v) {
			$this->keyword = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::KEYWORD;
		}

	} 
	
	public function setOnHomepage($v)
	{

		if ($this->on_homepage !== $v || $v === false) {
			$this->on_homepage = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::ON_HOMEPAGE;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::PRIORITY;
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
			$this->modifiedColumns[] = HomeDiemDenItemPartnerPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->region_id = $rs->getInt($startcol + 2);

			$this->area_id = $rs->getInt($startcol + 3);

			$this->city_id = $rs->getInt($startcol + 4);

			$this->name = $rs->getString($startcol + 5);

			$this->address = $rs->getString($startcol + 6);

			$this->img = $rs->getString($startcol + 7);

			$this->google_address = $rs->getString($startcol + 8);

			$this->google_position = $rs->getString($startcol + 9);

			$this->keyword = $rs->getString($startcol + 10);

			$this->on_homepage = $rs->getBoolean($startcol + 11);

			$this->priority = $rs->getInt($startcol + 12);

			$this->created_at = $rs->getTimestamp($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HomeDiemDenItemPartner object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HomeDiemDenItemPartnerPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HomeDiemDenItemPartnerPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(HomeDiemDenItemPartnerPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HomeDiemDenItemPartnerPeer::DATABASE_NAME);
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


												
			if ($this->aPartner !== null) {
				if ($this->aPartner->isModified()) {
					$affectedRows += $this->aPartner->save($con);
				}
				$this->setPartner($this->aPartner);
			}

			if ($this->aRegion !== null) {
				if ($this->aRegion->isModified()) {
					$affectedRows += $this->aRegion->save($con);
				}
				$this->setRegion($this->aRegion);
			}

			if ($this->aArea !== null) {
				if ($this->aArea->isModified()) {
					$affectedRows += $this->aArea->save($con);
				}
				$this->setArea($this->aArea);
			}

			if ($this->aCity !== null) {
				if ($this->aCity->isModified()) {
					$affectedRows += $this->aCity->save($con);
				}
				$this->setCity($this->aCity);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HomeDiemDenItemPartnerPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HomeDiemDenItemPartnerPeer::doUpdate($this, $con);
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


												
			if ($this->aPartner !== null) {
				if (!$this->aPartner->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPartner->getValidationFailures());
				}
			}

			if ($this->aRegion !== null) {
				if (!$this->aRegion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRegion->getValidationFailures());
				}
			}

			if ($this->aArea !== null) {
				if (!$this->aArea->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aArea->getValidationFailures());
				}
			}

			if ($this->aCity !== null) {
				if (!$this->aCity->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCity->getValidationFailures());
				}
			}


			if (($retval = HomeDiemDenItemPartnerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HomeDiemDenItemPartnerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPartnerId();
				break;
			case 2:
				return $this->getRegionId();
				break;
			case 3:
				return $this->getAreaId();
				break;
			case 4:
				return $this->getCityId();
				break;
			case 5:
				return $this->getName();
				break;
			case 6:
				return $this->getAddress();
				break;
			case 7:
				return $this->getImg();
				break;
			case 8:
				return $this->getGoogleAddress();
				break;
			case 9:
				return $this->getGooglePosition();
				break;
			case 10:
				return $this->getKeyword();
				break;
			case 11:
				return $this->getOnHomepage();
				break;
			case 12:
				return $this->getPriority();
				break;
			case 13:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenItemPartnerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getRegionId(),
			$keys[3] => $this->getAreaId(),
			$keys[4] => $this->getCityId(),
			$keys[5] => $this->getName(),
			$keys[6] => $this->getAddress(),
			$keys[7] => $this->getImg(),
			$keys[8] => $this->getGoogleAddress(),
			$keys[9] => $this->getGooglePosition(),
			$keys[10] => $this->getKeyword(),
			$keys[11] => $this->getOnHomepage(),
			$keys[12] => $this->getPriority(),
			$keys[13] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HomeDiemDenItemPartnerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPartnerId($value);
				break;
			case 2:
				$this->setRegionId($value);
				break;
			case 3:
				$this->setAreaId($value);
				break;
			case 4:
				$this->setCityId($value);
				break;
			case 5:
				$this->setName($value);
				break;
			case 6:
				$this->setAddress($value);
				break;
			case 7:
				$this->setImg($value);
				break;
			case 8:
				$this->setGoogleAddress($value);
				break;
			case 9:
				$this->setGooglePosition($value);
				break;
			case 10:
				$this->setKeyword($value);
				break;
			case 11:
				$this->setOnHomepage($value);
				break;
			case 12:
				$this->setPriority($value);
				break;
			case 13:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenItemPartnerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setRegionId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAreaId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCityId($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setName($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAddress($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setImg($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGoogleAddress($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGooglePosition($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setKeyword($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setOnHomepage($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setPriority($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCreatedAt($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HomeDiemDenItemPartnerPeer::DATABASE_NAME);

		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::ID)) $criteria->add(HomeDiemDenItemPartnerPeer::ID, $this->id);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::PARTNER_ID)) $criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::REGION_ID)) $criteria->add(HomeDiemDenItemPartnerPeer::REGION_ID, $this->region_id);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::AREA_ID)) $criteria->add(HomeDiemDenItemPartnerPeer::AREA_ID, $this->area_id);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::CITY_ID)) $criteria->add(HomeDiemDenItemPartnerPeer::CITY_ID, $this->city_id);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::NAME)) $criteria->add(HomeDiemDenItemPartnerPeer::NAME, $this->name);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::ADDRESS)) $criteria->add(HomeDiemDenItemPartnerPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::IMG)) $criteria->add(HomeDiemDenItemPartnerPeer::IMG, $this->img);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS)) $criteria->add(HomeDiemDenItemPartnerPeer::GOOGLE_ADDRESS, $this->google_address);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::GOOGLE_POSITION)) $criteria->add(HomeDiemDenItemPartnerPeer::GOOGLE_POSITION, $this->google_position);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::KEYWORD)) $criteria->add(HomeDiemDenItemPartnerPeer::KEYWORD, $this->keyword);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::ON_HOMEPAGE)) $criteria->add(HomeDiemDenItemPartnerPeer::ON_HOMEPAGE, $this->on_homepage);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::PRIORITY)) $criteria->add(HomeDiemDenItemPartnerPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(HomeDiemDenItemPartnerPeer::CREATED_AT)) $criteria->add(HomeDiemDenItemPartnerPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HomeDiemDenItemPartnerPeer::DATABASE_NAME);

		$criteria->add(HomeDiemDenItemPartnerPeer::ID, $this->id);

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

		$copyObj->setPartnerId($this->partner_id);

		$copyObj->setRegionId($this->region_id);

		$copyObj->setAreaId($this->area_id);

		$copyObj->setCityId($this->city_id);

		$copyObj->setName($this->name);

		$copyObj->setAddress($this->address);

		$copyObj->setImg($this->img);

		$copyObj->setGoogleAddress($this->google_address);

		$copyObj->setGooglePosition($this->google_position);

		$copyObj->setKeyword($this->keyword);

		$copyObj->setOnHomepage($this->on_homepage);

		$copyObj->setPriority($this->priority);

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
			self::$peer = new HomeDiemDenItemPartnerPeer();
		}
		return self::$peer;
	}

	
	public function setPartner($v)
	{


		if ($v === null) {
			$this->setPartnerId('1');
		} else {
			$this->setPartnerId($v->getId());
		}


		$this->aPartner = $v;
	}


	
	static $Partner = array();
	
	public function getPartner($con = null)
	{
		if ($this->aPartner === null && ($this->partner_id !== null)) {
						if(!isset(self::$Partner[$this->partner_id])){
				self::$Partner[$this->partner_id] = PartnerPeer::retrieveByPK($this->partner_id, $con);
			}
			$this->aPartner = self::$Partner[$this->partner_id];

			
		}
		return $this->aPartner;
	}

	
	public function setRegion($v)
	{


		if ($v === null) {
			$this->setRegionId('1');
		} else {
			$this->setRegionId($v->getId());
		}


		$this->aRegion = $v;
	}


	
	static $Region = array();
	
	public function getRegion($con = null)
	{
		if ($this->aRegion === null && ($this->region_id !== null)) {
						if(!isset(self::$Region[$this->region_id])){
				self::$Region[$this->region_id] = RegionPeer::retrieveByPK($this->region_id, $con);
			}
			$this->aRegion = self::$Region[$this->region_id];

			
		}
		return $this->aRegion;
	}

	
	public function setArea($v)
	{


		if ($v === null) {
			$this->setAreaId('1');
		} else {
			$this->setAreaId($v->getId());
		}


		$this->aArea = $v;
	}


	
	static $Area = array();
	
	public function getArea($con = null)
	{
		if ($this->aArea === null && ($this->area_id !== null)) {
						if(!isset(self::$Area[$this->area_id])){
				self::$Area[$this->area_id] = AreaPeer::retrieveByPK($this->area_id, $con);
			}
			$this->aArea = self::$Area[$this->area_id];

			
		}
		return $this->aArea;
	}

	
	public function setCity($v)
	{


		if ($v === null) {
			$this->setCityId('0');
		} else {
			$this->setCityId($v->getId());
		}


		$this->aCity = $v;
	}


	
	static $City = array();
	
	public function getCity($con = null)
	{
		if ($this->aCity === null && ($this->city_id !== null)) {
						if(!isset(self::$City[$this->city_id])){
				self::$City[$this->city_id] = CityPeer::retrieveByPK($this->city_id, $con);
			}
			$this->aCity = self::$City[$this->city_id];

			
		}
		return $this->aCity;
	}

} 