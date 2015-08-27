<?php


abstract class BaseHomeDiemDenQuocTe extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $area_id;


	
	protected $name;


	
	protected $img;


	
	protected $img_search;


	
	protected $address;


	
	protected $google_address;


	
	protected $google_position;


	
	protected $keyword;


	
	protected $priority = 10;


	
	protected $hide = false;


	
	protected $content_about;

	
	protected $aArea;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getAreaId()
	{

        return $this->area_id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getImg()
	{

        return $this->img;
	}

	
	public function getImgSearch()
	{

        return $this->img_search;
	}

	
	public function getAddress()
	{

        return $this->address;
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::ID;
		}

	} 
	
	public function setAreaId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->area_id !== $v) {
			$this->area_id = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::AREA_ID;
		}

		if ($this->aArea !== null && $this->aArea->getId() !== $v) {
			$this->aArea = null;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::NAME;
		}

	} 
	
	public function setImg($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img !== $v) {
			$this->img = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::IMG;
		}

	} 
	
	public function setImgSearch($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_search !== $v) {
			$this->img_search = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::IMG_SEARCH;
		}

	} 
	
	public function setAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::ADDRESS;
		}

	} 
	
	public function setGoogleAddress($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_address !== $v) {
			$this->google_address = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::GOOGLE_ADDRESS;
		}

	} 
	
	public function setGooglePosition($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->google_position !== $v) {
			$this->google_position = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::GOOGLE_POSITION;
		}

	} 
	
	public function setKeyword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->keyword !== $v) {
			$this->keyword = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::KEYWORD;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::PRIORITY;
		}

	} 
	
	public function setHide($v)
	{

		if ($this->hide !== $v || $v === false) {
			$this->hide = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::HIDE;
		}

	} 
	
	public function setContentAbout($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content_about !== $v) {
			$this->content_about = $v;
			$this->modifiedColumns[] = HomeDiemDenQuocTePeer::CONTENT_ABOUT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->area_id = $rs->getInt($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->img = $rs->getString($startcol + 3);

			$this->img_search = $rs->getString($startcol + 4);

			$this->address = $rs->getString($startcol + 5);

			$this->google_address = $rs->getString($startcol + 6);

			$this->google_position = $rs->getString($startcol + 7);

			$this->keyword = $rs->getString($startcol + 8);

			$this->priority = $rs->getInt($startcol + 9);

			$this->hide = $rs->getBoolean($startcol + 10);

			$this->content_about = $rs->getString($startcol + 11);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 12; 
		} catch (Exception $e) {
			throw new PropelException("Error populating HomeDiemDenQuocTe object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HomeDiemDenQuocTePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HomeDiemDenQuocTePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(HomeDiemDenQuocTePeer::DATABASE_NAME);
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


												
			if ($this->aArea !== null) {
				if ($this->aArea->isModified()) {
					$affectedRows += $this->aArea->save($con);
				}
				$this->setArea($this->aArea);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = HomeDiemDenQuocTePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HomeDiemDenQuocTePeer::doUpdate($this, $con);
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


												
			if ($this->aArea !== null) {
				if (!$this->aArea->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aArea->getValidationFailures());
				}
			}


			if (($retval = HomeDiemDenQuocTePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HomeDiemDenQuocTePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getAreaId();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getImg();
				break;
			case 4:
				return $this->getImgSearch();
				break;
			case 5:
				return $this->getAddress();
				break;
			case 6:
				return $this->getGoogleAddress();
				break;
			case 7:
				return $this->getGooglePosition();
				break;
			case 8:
				return $this->getKeyword();
				break;
			case 9:
				return $this->getPriority();
				break;
			case 10:
				return $this->getHide();
				break;
			case 11:
				return $this->getContentAbout();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenQuocTePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getAreaId(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getImg(),
			$keys[4] => $this->getImgSearch(),
			$keys[5] => $this->getAddress(),
			$keys[6] => $this->getGoogleAddress(),
			$keys[7] => $this->getGooglePosition(),
			$keys[8] => $this->getKeyword(),
			$keys[9] => $this->getPriority(),
			$keys[10] => $this->getHide(),
			$keys[11] => $this->getContentAbout(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HomeDiemDenQuocTePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setAreaId($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setImg($value);
				break;
			case 4:
				$this->setImgSearch($value);
				break;
			case 5:
				$this->setAddress($value);
				break;
			case 6:
				$this->setGoogleAddress($value);
				break;
			case 7:
				$this->setGooglePosition($value);
				break;
			case 8:
				$this->setKeyword($value);
				break;
			case 9:
				$this->setPriority($value);
				break;
			case 10:
				$this->setHide($value);
				break;
			case 11:
				$this->setContentAbout($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HomeDiemDenQuocTePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAreaId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setImg($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setImgSearch($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddress($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setGoogleAddress($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setGooglePosition($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setKeyword($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPriority($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHide($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setContentAbout($arr[$keys[11]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HomeDiemDenQuocTePeer::DATABASE_NAME);

		if ($this->isColumnModified(HomeDiemDenQuocTePeer::ID)) $criteria->add(HomeDiemDenQuocTePeer::ID, $this->id);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::AREA_ID)) $criteria->add(HomeDiemDenQuocTePeer::AREA_ID, $this->area_id);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::NAME)) $criteria->add(HomeDiemDenQuocTePeer::NAME, $this->name);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::IMG)) $criteria->add(HomeDiemDenQuocTePeer::IMG, $this->img);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::IMG_SEARCH)) $criteria->add(HomeDiemDenQuocTePeer::IMG_SEARCH, $this->img_search);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::ADDRESS)) $criteria->add(HomeDiemDenQuocTePeer::ADDRESS, $this->address);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::GOOGLE_ADDRESS)) $criteria->add(HomeDiemDenQuocTePeer::GOOGLE_ADDRESS, $this->google_address);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::GOOGLE_POSITION)) $criteria->add(HomeDiemDenQuocTePeer::GOOGLE_POSITION, $this->google_position);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::KEYWORD)) $criteria->add(HomeDiemDenQuocTePeer::KEYWORD, $this->keyword);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::PRIORITY)) $criteria->add(HomeDiemDenQuocTePeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::HIDE)) $criteria->add(HomeDiemDenQuocTePeer::HIDE, $this->hide);
		if ($this->isColumnModified(HomeDiemDenQuocTePeer::CONTENT_ABOUT)) $criteria->add(HomeDiemDenQuocTePeer::CONTENT_ABOUT, $this->content_about);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HomeDiemDenQuocTePeer::DATABASE_NAME);

		$criteria->add(HomeDiemDenQuocTePeer::ID, $this->id);

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

		$copyObj->setAreaId($this->area_id);

		$copyObj->setName($this->name);

		$copyObj->setImg($this->img);

		$copyObj->setImgSearch($this->img_search);

		$copyObj->setAddress($this->address);

		$copyObj->setGoogleAddress($this->google_address);

		$copyObj->setGooglePosition($this->google_position);

		$copyObj->setKeyword($this->keyword);

		$copyObj->setPriority($this->priority);

		$copyObj->setHide($this->hide);

		$copyObj->setContentAbout($this->content_about);


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
			self::$peer = new HomeDiemDenQuocTePeer();
		}
		return self::$peer;
	}

	
	public function setArea($v)
	{


		if ($v === null) {
			$this->setAreaId(NULL);
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

} 