<?php


abstract class BaseHomeDiemDenItem extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $region_id = 1;


	
	protected $area_id = 1;


	
	protected $city_id = 0;


	
	protected $name;


	
	protected $address;


	
	protected $img;


	
	protected $img_search;


	
	protected $google_address;


	
	protected $google_position;


	
	protected $keyword;


	
	protected $priority = 10;


	
	protected $hide = false;


	
	protected $content_about;


	
	protected $enable_domestic = false;


	
	protected $enable_international = false;


	
	protected $enable_featured = false;

	
	protected $aRegion;

	
	protected $aArea;

	
	protected $aCity;

	
	protected $collTourDetails;

	
	protected $lastTourDetailCriteria = null;

	
	protected $collBlogs;

	
	protected $lastBlogCriteria = null;

	
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

	
	public function getImgSearch()
	{

        return $this->img_search;
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

	
	public function getPriority()
	{

        return $this->priority;
	}

	
	public function getHide()
	{

        return $this->hide;
	}

	
	public function getContentAbout()
	{

        return $this->content_about;
	}

	
	public function getEnableDomestic()
	{

        return $this->enable_domestic;
	}

	
	public function getEnableInternational()
	{

        return $this->enable_international;
	}

	
	public function getEnableFeatured()
	{

        return $this->enable_featured;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::ID;
		}

	} 
	
	public function setRegionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->region_id !== $v || $v === 1) {
			$this->region_id = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::REGION_ID;
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
			$this->modifiedColumns[] = HomeDiemDenItemPeer::AREA_ID;
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
			$this->modifiedColumns[] = HomeDiemDenItemPeer::CITY_ID;
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
			$this->modifiedColumns[] = HomeDiemDenItemPeer::NAME;
		}

	} 
	
	public function setAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::ADDRESS;
		}

	} 
	
	public function setImg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img !== $v) {
			$this->img = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::IMG;
		}

	} 
	
	public function setImgSearch($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_search !== $v) {
			$this->img_search = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::IMG_SEARCH;
		}

	} 
	
	public function setGoogleAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_address !== $v) {
			$this->google_address = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::GOOGLE_ADDRESS;
		}

	} 
	
	public function setGooglePosition($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_position !== $v) {
			$this->google_position = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::GOOGLE_POSITION;
		}

	} 
	
	public function setKeyword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyword !== $v) {
			$this->keyword = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::KEYWORD;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::PRIORITY;
		}

	} 
	
	public function setHide($v)
	{

		if ($this->hide !== $v || $v === false) {
			$this->hide = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::HIDE;
		}

	} 
	
	public function setContentAbout($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content_about !== $v) {
			$this->content_about = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::CONTENT_ABOUT;
		}

	} 
	
	public function setEnableDomestic($v)
	{

		if ($this->enable_domestic !== $v || $v === false) {
			$this->enable_domestic = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::ENABLE_DOMESTIC;
		}

	} 
	
	public function setEnableInternational($v)
	{

		if ($this->enable_international !== $v || $v === false) {
			$this->enable_international = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::ENABLE_INTERNATIONAL;
		}

	} 
	
	public function setEnableFeatured($v)
	{

		if ($this->enable_featured !== $v || $v === false) {
			$this->enable_featured = $v;
			$this->modifiedColumns[] = HomeDiemDenItemPeer::ENABLE_FEATURED;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->region_id = $rs->getInt($startcol + 1);

			$this->area_id = $rs->getInt($startcol + 2);

			$this->city_id = $rs->getInt($startcol + 3);

			$this->name = $rs->getString($startcol + 4);

			$this->address = $rs->getString($startcol + 5);

			$this->img = $rs->getString($startcol + 6);

			$this->img_search = $rs->getString($startcol + 7);

			$this->google_address = $rs->getString($startcol + 8);

			$this->google_position = $rs->getString($startcol + 9);

			$this->keyword = $rs->getString($startcol + 10);

			$this->priority = $rs->getInt($startcol + 11);

			$this->hide = $rs->getBoolean($startcol + 12);

			$this->content_about = $rs->getString($startcol + 13);

			$this->enable_domestic = $rs->getBoolean($startcol + 14);

			$this->enable_international = $rs->getBoolean($startcol + 15);

			$this->enable_featured = $rs->getBoolean($startcol + 16);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 17; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HomeDiemDenItem object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HomeDiemDenItemPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HomeDiemDenItemPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HomeDiemDenItemPeer::DATABASE_NAME);
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
					$pk = HomeDiemDenItemPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HomeDiemDenItemPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTourDetails !== null) {
				foreach($this->collTourDetails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBlogs !== null) {
				foreach($this->collBlogs as $referrerFK) {
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


			if (($retval = HomeDiemDenItemPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTourDetails !== null) {
					foreach($this->collTourDetails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBlogs !== null) {
					foreach($this->collBlogs as $referrerFK) {
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
		$pos = HomeDiemDenItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAreaId();
				break;
			case 3:
				return $this->getCityId();
				break;
			case 4:
				return $this->getName();
				break;
			case 5:
				return $this->getAddress();
				break;
			case 6:
				return $this->getImg();
				break;
			case 7:
				return $this->getImgSearch();
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
				return $this->getPriority();
				break;
			case 12:
				return $this->getHide();
				break;
			case 13:
				return $this->getContentAbout();
				break;
			case 14:
				return $this->getEnableDomestic();
				break;
			case 15:
				return $this->getEnableInternational();
				break;
			case 16:
				return $this->getEnableFeatured();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenItemPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRegionId(),
			$keys[2] => $this->getAreaId(),
			$keys[3] => $this->getCityId(),
			$keys[4] => $this->getName(),
			$keys[5] => $this->getAddress(),
			$keys[6] => $this->getImg(),
			$keys[7] => $this->getImgSearch(),
			$keys[8] => $this->getGoogleAddress(),
			$keys[9] => $this->getGooglePosition(),
			$keys[10] => $this->getKeyword(),
			$keys[11] => $this->getPriority(),
			$keys[12] => $this->getHide(),
			$keys[13] => $this->getContentAbout(),
			$keys[14] => $this->getEnableDomestic(),
			$keys[15] => $this->getEnableInternational(),
			$keys[16] => $this->getEnableFeatured(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HomeDiemDenItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAreaId($value);
				break;
			case 3:
				$this->setCityId($value);
				break;
			case 4:
				$this->setName($value);
				break;
			case 5:
				$this->setAddress($value);
				break;
			case 6:
				$this->setImg($value);
				break;
			case 7:
				$this->setImgSearch($value);
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
				$this->setPriority($value);
				break;
			case 12:
				$this->setHide($value);
				break;
			case 13:
				$this->setContentAbout($value);
				break;
			case 14:
				$this->setEnableDomestic($value);
				break;
			case 15:
				$this->setEnableInternational($value);
				break;
			case 16:
				$this->setEnableFeatured($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenItemPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRegionId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAreaId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCityId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddress($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setImg($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setImgSearch($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGoogleAddress($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setGooglePosition($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setKeyword($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPriority($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setHide($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setContentAbout($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEnableDomestic($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setEnableInternational($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setEnableFeatured($arr[$keys[16]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HomeDiemDenItemPeer::DATABASE_NAME);

		if ($this->isColumnModified(HomeDiemDenItemPeer::ID)) $criteria->add(HomeDiemDenItemPeer::ID, $this->id);
		if ($this->isColumnModified(HomeDiemDenItemPeer::REGION_ID)) $criteria->add(HomeDiemDenItemPeer::REGION_ID, $this->region_id);
		if ($this->isColumnModified(HomeDiemDenItemPeer::AREA_ID)) $criteria->add(HomeDiemDenItemPeer::AREA_ID, $this->area_id);
		if ($this->isColumnModified(HomeDiemDenItemPeer::CITY_ID)) $criteria->add(HomeDiemDenItemPeer::CITY_ID, $this->city_id);
		if ($this->isColumnModified(HomeDiemDenItemPeer::NAME)) $criteria->add(HomeDiemDenItemPeer::NAME, $this->name);
		if ($this->isColumnModified(HomeDiemDenItemPeer::ADDRESS)) $criteria->add(HomeDiemDenItemPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(HomeDiemDenItemPeer::IMG)) $criteria->add(HomeDiemDenItemPeer::IMG, $this->img);
		if ($this->isColumnModified(HomeDiemDenItemPeer::IMG_SEARCH)) $criteria->add(HomeDiemDenItemPeer::IMG_SEARCH, $this->img_search);
		if ($this->isColumnModified(HomeDiemDenItemPeer::GOOGLE_ADDRESS)) $criteria->add(HomeDiemDenItemPeer::GOOGLE_ADDRESS, $this->google_address);
		if ($this->isColumnModified(HomeDiemDenItemPeer::GOOGLE_POSITION)) $criteria->add(HomeDiemDenItemPeer::GOOGLE_POSITION, $this->google_position);
		if ($this->isColumnModified(HomeDiemDenItemPeer::KEYWORD)) $criteria->add(HomeDiemDenItemPeer::KEYWORD, $this->keyword);
		if ($this->isColumnModified(HomeDiemDenItemPeer::PRIORITY)) $criteria->add(HomeDiemDenItemPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(HomeDiemDenItemPeer::HIDE)) $criteria->add(HomeDiemDenItemPeer::HIDE, $this->hide);
		if ($this->isColumnModified(HomeDiemDenItemPeer::CONTENT_ABOUT)) $criteria->add(HomeDiemDenItemPeer::CONTENT_ABOUT, $this->content_about);
		if ($this->isColumnModified(HomeDiemDenItemPeer::ENABLE_DOMESTIC)) $criteria->add(HomeDiemDenItemPeer::ENABLE_DOMESTIC, $this->enable_domestic);
		if ($this->isColumnModified(HomeDiemDenItemPeer::ENABLE_INTERNATIONAL)) $criteria->add(HomeDiemDenItemPeer::ENABLE_INTERNATIONAL, $this->enable_international);
		if ($this->isColumnModified(HomeDiemDenItemPeer::ENABLE_FEATURED)) $criteria->add(HomeDiemDenItemPeer::ENABLE_FEATURED, $this->enable_featured);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HomeDiemDenItemPeer::DATABASE_NAME);

		$criteria->add(HomeDiemDenItemPeer::ID, $this->id);

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

		$copyObj->setAreaId($this->area_id);

		$copyObj->setCityId($this->city_id);

		$copyObj->setName($this->name);

		$copyObj->setAddress($this->address);

		$copyObj->setImg($this->img);

		$copyObj->setImgSearch($this->img_search);

		$copyObj->setGoogleAddress($this->google_address);

		$copyObj->setGooglePosition($this->google_position);

		$copyObj->setKeyword($this->keyword);

		$copyObj->setPriority($this->priority);

		$copyObj->setHide($this->hide);

		$copyObj->setContentAbout($this->content_about);

		$copyObj->setEnableDomestic($this->enable_domestic);

		$copyObj->setEnableInternational($this->enable_international);

		$copyObj->setEnableFeatured($this->enable_featured);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTourDetails() as $relObj) {
				$copyObj->addTourDetail($relObj->copy($deepCopy));
			}

			foreach($this->getBlogs() as $relObj) {
				$copyObj->addBlog($relObj->copy($deepCopy));
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
			self::$peer = new HomeDiemDenItemPeer();
		}
		return self::$peer;
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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

		$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setHomeDiemDenItem($this);
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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPartner($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinCity($criteria = null, $con = null)
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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

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

				$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}

	
	public function initBlogs()
	{
		if ($this->collBlogs === null) {
			$this->collBlogs = array();
		}
	}

	
	public function getBlogs($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
			   $this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				$this->collBlogs = BlogPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
					$this->collBlogs = BlogPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBlogCriteria = $criteria;
		return $this->collBlogs;
	}

	
	public function countBlogs($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

		return BlogPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlog(Blog $l)
	{
		$this->collBlogs[] = $l;
		$l->setHomeDiemDenItem($this);
	}


	
	public function getBlogsJoinBlogMenuCategory($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
				$this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

				$this->collBlogs = BlogPeer::doSelectJoinBlogMenuCategory($criteria, $con);
			}
		} else {
									
			$criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->getId());

			if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
				$this->collBlogs = BlogPeer::doSelectJoinBlogMenuCategory($criteria, $con);
			}
		}
		$this->lastBlogCriteria = $criteria;

		return $this->collBlogs;
	}

} 