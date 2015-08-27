<?php


abstract class BaseTour extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $enable = false;


	
	protected $user_id;


	
	protected $start;


	
	protected $end;


	
	protected $coo_start;


	
	protected $coo_end;


	
	protected $title;


	
	protected $description;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aDichungUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getEnable()
	{

        return $this->enable;
	}

	
	public function getUserId()
	{

        return $this->user_id;
	}

	
	public function getStart()
	{

        return $this->start;
	}

	
	public function getEnd()
	{

        return $this->end;
	}

	
	public function getCooStart()
	{

        return $this->coo_start;
	}

	
	public function getCooEnd()
	{

        return $this->coo_end;
	}

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getTitleSeo()
	{

        return $this->title_seo;
	}

	
	public function getDescriptionSeo()
	{

        return $this->description_seo;
	}

	
	public function getImgSeo()
	{

        return $this->img_seo;
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
			$this->modifiedColumns[] = TourPeer::ID;
		}

	} 
	
	public function setEnable($v)
	{

		if ($this->enable !== $v || $v === false) {
			$this->enable = $v;
			$this->modifiedColumns[] = TourPeer::ENABLE;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = TourPeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->start !== $v) {
			$this->start = $v;
			$this->modifiedColumns[] = TourPeer::START;
		}

	} 
	
	public function setEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->end !== $v) {
			$this->end = $v;
			$this->modifiedColumns[] = TourPeer::END;
		}

	} 
	
	public function setCooStart($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_start !== $v) {
			$this->coo_start = $v;
			$this->modifiedColumns[] = TourPeer::COO_START;
		}

	} 
	
	public function setCooEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_end !== $v) {
			$this->coo_end = $v;
			$this->modifiedColumns[] = TourPeer::COO_END;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = TourPeer::TITLE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = TourPeer::DESCRIPTION;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = TourPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = TourPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = TourPeer::IMG_SEO;
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
			$this->modifiedColumns[] = TourPeer::CREATED_AT;
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
			$this->modifiedColumns[] = TourPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->enable = $rs->getBoolean($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->start = $rs->getString($startcol + 3);

			$this->end = $rs->getString($startcol + 4);

			$this->coo_start = $rs->getString($startcol + 5);

			$this->coo_end = $rs->getString($startcol + 6);

			$this->title = $rs->getString($startcol + 7);

			$this->description = $rs->getString($startcol + 8);

			$this->title_seo = $rs->getString($startcol + 9);

			$this->description_seo = $rs->getString($startcol + 10);

			$this->img_seo = $rs->getString($startcol + 11);

			$this->created_at = $rs->getTimestamp($startcol + 12, null);

			$this->updated_at = $rs->getTimestamp($startcol + 13, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 14; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Tour object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TourPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TourPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TourPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TourPeer::DATABASE_NAME);
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


												
			if ($this->aDichungUser !== null) {
				if ($this->aDichungUser->isModified()) {
					$affectedRows += $this->aDichungUser->save($con);
				}
				$this->setDichungUser($this->aDichungUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TourPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TourPeer::doUpdate($this, $con);
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


												
			if ($this->aDichungUser !== null) {
				if (!$this->aDichungUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDichungUser->getValidationFailures());
				}
			}


			if (($retval = TourPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getEnable();
				break;
			case 2:
				return $this->getUserId();
				break;
			case 3:
				return $this->getStart();
				break;
			case 4:
				return $this->getEnd();
				break;
			case 5:
				return $this->getCooStart();
				break;
			case 6:
				return $this->getCooEnd();
				break;
			case 7:
				return $this->getTitle();
				break;
			case 8:
				return $this->getDescription();
				break;
			case 9:
				return $this->getTitleSeo();
				break;
			case 10:
				return $this->getDescriptionSeo();
				break;
			case 11:
				return $this->getImgSeo();
				break;
			case 12:
				return $this->getCreatedAt();
				break;
			case 13:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEnable(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getStart(),
			$keys[4] => $this->getEnd(),
			$keys[5] => $this->getCooStart(),
			$keys[6] => $this->getCooEnd(),
			$keys[7] => $this->getTitle(),
			$keys[8] => $this->getDescription(),
			$keys[9] => $this->getTitleSeo(),
			$keys[10] => $this->getDescriptionSeo(),
			$keys[11] => $this->getImgSeo(),
			$keys[12] => $this->getCreatedAt(),
			$keys[13] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setEnable($value);
				break;
			case 2:
				$this->setUserId($value);
				break;
			case 3:
				$this->setStart($value);
				break;
			case 4:
				$this->setEnd($value);
				break;
			case 5:
				$this->setCooStart($value);
				break;
			case 6:
				$this->setCooEnd($value);
				break;
			case 7:
				$this->setTitle($value);
				break;
			case 8:
				$this->setDescription($value);
				break;
			case 9:
				$this->setTitleSeo($value);
				break;
			case 10:
				$this->setDescriptionSeo($value);
				break;
			case 11:
				$this->setImgSeo($value);
				break;
			case 12:
				$this->setCreatedAt($value);
				break;
			case 13:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TourPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEnable($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setStart($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEnd($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCooStart($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCooEnd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTitle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDescription($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setTitleSeo($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDescriptionSeo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setImgSeo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCreatedAt($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUpdatedAt($arr[$keys[13]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TourPeer::DATABASE_NAME);

		if ($this->isColumnModified(TourPeer::ID)) $criteria->add(TourPeer::ID, $this->id);
		if ($this->isColumnModified(TourPeer::ENABLE)) $criteria->add(TourPeer::ENABLE, $this->enable);
		if ($this->isColumnModified(TourPeer::USER_ID)) $criteria->add(TourPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(TourPeer::START)) $criteria->add(TourPeer::START, $this->start);
		if ($this->isColumnModified(TourPeer::END)) $criteria->add(TourPeer::END, $this->end);
		if ($this->isColumnModified(TourPeer::COO_START)) $criteria->add(TourPeer::COO_START, $this->coo_start);
		if ($this->isColumnModified(TourPeer::COO_END)) $criteria->add(TourPeer::COO_END, $this->coo_end);
		if ($this->isColumnModified(TourPeer::TITLE)) $criteria->add(TourPeer::TITLE, $this->title);
		if ($this->isColumnModified(TourPeer::DESCRIPTION)) $criteria->add(TourPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(TourPeer::TITLE_SEO)) $criteria->add(TourPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(TourPeer::DESCRIPTION_SEO)) $criteria->add(TourPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(TourPeer::IMG_SEO)) $criteria->add(TourPeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(TourPeer::CREATED_AT)) $criteria->add(TourPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TourPeer::UPDATED_AT)) $criteria->add(TourPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TourPeer::DATABASE_NAME);

		$criteria->add(TourPeer::ID, $this->id);

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

		$copyObj->setEnable($this->enable);

		$copyObj->setUserId($this->user_id);

		$copyObj->setStart($this->start);

		$copyObj->setEnd($this->end);

		$copyObj->setCooStart($this->coo_start);

		$copyObj->setCooEnd($this->coo_end);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


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
			self::$peer = new TourPeer();
		}
		return self::$peer;
	}

	
	public function setDichungUser($v)
	{


		if ($v === null) {
			$this->setUserId(NULL);
		} else {
			$this->setUserId($v->getId());
		}


		$this->aDichungUser = $v;
	}


	
	static $DichungUser = array();
	
	public function getDichungUser($con = null)
	{
		if ($this->aDichungUser === null && ($this->user_id !== null)) {
						if(!isset(self::$DichungUser[$this->user_id])){
				self::$DichungUser[$this->user_id] = DichungUserPeer::retrieveByPK($this->user_id, $con);
			}
			$this->aDichungUser = self::$DichungUser[$this->user_id];

			
		}
		return $this->aDichungUser;
	}

} 