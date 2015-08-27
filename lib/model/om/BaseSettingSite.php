<?php


abstract class BaseSettingSite extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id = 1;


	
	protected $slogen_slide;


	
	protected $slogen_slide_en;


	
	protected $title_site;


	
	protected $title_site_en;


	
	protected $description_site;


	
	protected $description_site_en;


	
	protected $created_at;

	
	protected $aPartner;

	
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

	
	public function getSlogenSlide()
	{

        return $this->slogen_slide;
	}

	
	public function getSlogenSlideEn()
	{

        return $this->slogen_slide_en;
	}

	
	public function getTitleSite()
	{

        return $this->title_site;
	}

	
	public function getTitleSiteEn()
	{

        return $this->title_site_en;
	}

	
	public function getDescriptionSite()
	{

        return $this->description_site;
	}

	
	public function getDescriptionSiteEn()
	{

        return $this->description_site_en;
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
			$this->modifiedColumns[] = SettingSitePeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v || $v === 1) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = SettingSitePeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setSlogenSlide($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->slogen_slide !== $v) {
			$this->slogen_slide = $v;
			$this->modifiedColumns[] = SettingSitePeer::SLOGEN_SLIDE;
		}

	} 
	
	public function setSlogenSlideEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->slogen_slide_en !== $v) {
			$this->slogen_slide_en = $v;
			$this->modifiedColumns[] = SettingSitePeer::SLOGEN_SLIDE_EN;
		}

	} 
	
	public function setTitleSite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_site !== $v) {
			$this->title_site = $v;
			$this->modifiedColumns[] = SettingSitePeer::TITLE_SITE;
		}

	} 
	
	public function setTitleSiteEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_site_en !== $v) {
			$this->title_site_en = $v;
			$this->modifiedColumns[] = SettingSitePeer::TITLE_SITE_EN;
		}

	} 
	
	public function setDescriptionSite($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_site !== $v) {
			$this->description_site = $v;
			$this->modifiedColumns[] = SettingSitePeer::DESCRIPTION_SITE;
		}

	} 
	
	public function setDescriptionSiteEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_site_en !== $v) {
			$this->description_site_en = $v;
			$this->modifiedColumns[] = SettingSitePeer::DESCRIPTION_SITE_EN;
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
			$this->modifiedColumns[] = SettingSitePeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->slogen_slide = $rs->getString($startcol + 2);

			$this->slogen_slide_en = $rs->getString($startcol + 3);

			$this->title_site = $rs->getString($startcol + 4);

			$this->title_site_en = $rs->getString($startcol + 5);

			$this->description_site = $rs->getString($startcol + 6);

			$this->description_site_en = $rs->getString($startcol + 7);

			$this->created_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating SettingSite object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SettingSitePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			SettingSitePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(SettingSitePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(SettingSitePeer::DATABASE_NAME);
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


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = SettingSitePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += SettingSitePeer::doUpdate($this, $con);
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


			if (($retval = SettingSitePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SettingSitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSlogenSlide();
				break;
			case 3:
				return $this->getSlogenSlideEn();
				break;
			case 4:
				return $this->getTitleSite();
				break;
			case 5:
				return $this->getTitleSiteEn();
				break;
			case 6:
				return $this->getDescriptionSite();
				break;
			case 7:
				return $this->getDescriptionSiteEn();
				break;
			case 8:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SettingSitePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getSlogenSlide(),
			$keys[3] => $this->getSlogenSlideEn(),
			$keys[4] => $this->getTitleSite(),
			$keys[5] => $this->getTitleSiteEn(),
			$keys[6] => $this->getDescriptionSite(),
			$keys[7] => $this->getDescriptionSiteEn(),
			$keys[8] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = SettingSitePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSlogenSlide($value);
				break;
			case 3:
				$this->setSlogenSlideEn($value);
				break;
			case 4:
				$this->setTitleSite($value);
				break;
			case 5:
				$this->setTitleSiteEn($value);
				break;
			case 6:
				$this->setDescriptionSite($value);
				break;
			case 7:
				$this->setDescriptionSiteEn($value);
				break;
			case 8:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = SettingSitePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSlogenSlide($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSlogenSlideEn($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTitleSite($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTitleSiteEn($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDescriptionSite($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDescriptionSiteEn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(SettingSitePeer::DATABASE_NAME);

		if ($this->isColumnModified(SettingSitePeer::ID)) $criteria->add(SettingSitePeer::ID, $this->id);
		if ($this->isColumnModified(SettingSitePeer::PARTNER_ID)) $criteria->add(SettingSitePeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(SettingSitePeer::SLOGEN_SLIDE)) $criteria->add(SettingSitePeer::SLOGEN_SLIDE, $this->slogen_slide);
		if ($this->isColumnModified(SettingSitePeer::SLOGEN_SLIDE_EN)) $criteria->add(SettingSitePeer::SLOGEN_SLIDE_EN, $this->slogen_slide_en);
		if ($this->isColumnModified(SettingSitePeer::TITLE_SITE)) $criteria->add(SettingSitePeer::TITLE_SITE, $this->title_site);
		if ($this->isColumnModified(SettingSitePeer::TITLE_SITE_EN)) $criteria->add(SettingSitePeer::TITLE_SITE_EN, $this->title_site_en);
		if ($this->isColumnModified(SettingSitePeer::DESCRIPTION_SITE)) $criteria->add(SettingSitePeer::DESCRIPTION_SITE, $this->description_site);
		if ($this->isColumnModified(SettingSitePeer::DESCRIPTION_SITE_EN)) $criteria->add(SettingSitePeer::DESCRIPTION_SITE_EN, $this->description_site_en);
		if ($this->isColumnModified(SettingSitePeer::CREATED_AT)) $criteria->add(SettingSitePeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(SettingSitePeer::DATABASE_NAME);

		$criteria->add(SettingSitePeer::ID, $this->id);

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

		$copyObj->setSlogenSlide($this->slogen_slide);

		$copyObj->setSlogenSlideEn($this->slogen_slide_en);

		$copyObj->setTitleSite($this->title_site);

		$copyObj->setTitleSiteEn($this->title_site_en);

		$copyObj->setDescriptionSite($this->description_site);

		$copyObj->setDescriptionSiteEn($this->description_site_en);

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
			self::$peer = new SettingSitePeer();
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

} 