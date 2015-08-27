<?php


abstract class BaseUrlTagFooter extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;


	
	protected $type_url_tag_id;


	
	protected $url;


	
	protected $enabled = false;


	
	protected $created_at;

	
	protected $aTypeUrlTag;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getTypeUrlTagId()
	{

        return $this->type_url_tag_id;
	}

	
	public function getUrl()
	{

        return $this->url;
	}

	
	public function getEnabled()
	{

        return $this->enabled;
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
			$this->modifiedColumns[] = UrlTagFooterPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = UrlTagFooterPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = UrlTagFooterPeer::NAME_EN;
		}

	} 
	
	public function setTypeUrlTagId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_url_tag_id !== $v) {
			$this->type_url_tag_id = $v;
			$this->modifiedColumns[] = UrlTagFooterPeer::TYPE_URL_TAG_ID;
		}

		if ($this->aTypeUrlTag !== null && $this->aTypeUrlTag->getId() !== $v) {
			$this->aTypeUrlTag = null;
		}

	} 
	
	public function setUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->url !== $v) {
			$this->url = $v;
			$this->modifiedColumns[] = UrlTagFooterPeer::URL;
		}

	} 
	
	public function setEnabled($v)
	{

		if ($this->enabled !== $v || $v === false) {
			$this->enabled = $v;
			$this->modifiedColumns[] = UrlTagFooterPeer::ENABLED;
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
			$this->modifiedColumns[] = UrlTagFooterPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->name_en = $rs->getString($startcol + 2);

			$this->type_url_tag_id = $rs->getInt($startcol + 3);

			$this->url = $rs->getString($startcol + 4);

			$this->enabled = $rs->getBoolean($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating UrlTagFooter object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UrlTagFooterPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UrlTagFooterPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UrlTagFooterPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UrlTagFooterPeer::DATABASE_NAME);
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


												
			if ($this->aTypeUrlTag !== null) {
				if ($this->aTypeUrlTag->isModified()) {
					$affectedRows += $this->aTypeUrlTag->save($con);
				}
				$this->setTypeUrlTag($this->aTypeUrlTag);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UrlTagFooterPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UrlTagFooterPeer::doUpdate($this, $con);
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


												
			if ($this->aTypeUrlTag !== null) {
				if (!$this->aTypeUrlTag->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTypeUrlTag->getValidationFailures());
				}
			}


			if (($retval = UrlTagFooterPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UrlTagFooterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getNameEn();
				break;
			case 3:
				return $this->getTypeUrlTagId();
				break;
			case 4:
				return $this->getUrl();
				break;
			case 5:
				return $this->getEnabled();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UrlTagFooterPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
			$keys[3] => $this->getTypeUrlTagId(),
			$keys[4] => $this->getUrl(),
			$keys[5] => $this->getEnabled(),
			$keys[6] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UrlTagFooterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setNameEn($value);
				break;
			case 3:
				$this->setTypeUrlTagId($value);
				break;
			case 4:
				$this->setUrl($value);
				break;
			case 5:
				$this->setEnabled($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UrlTagFooterPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTypeUrlTagId($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUrl($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEnabled($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UrlTagFooterPeer::DATABASE_NAME);

		if ($this->isColumnModified(UrlTagFooterPeer::ID)) $criteria->add(UrlTagFooterPeer::ID, $this->id);
		if ($this->isColumnModified(UrlTagFooterPeer::NAME)) $criteria->add(UrlTagFooterPeer::NAME, $this->name);
		if ($this->isColumnModified(UrlTagFooterPeer::NAME_EN)) $criteria->add(UrlTagFooterPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(UrlTagFooterPeer::TYPE_URL_TAG_ID)) $criteria->add(UrlTagFooterPeer::TYPE_URL_TAG_ID, $this->type_url_tag_id);
		if ($this->isColumnModified(UrlTagFooterPeer::URL)) $criteria->add(UrlTagFooterPeer::URL, $this->url);
		if ($this->isColumnModified(UrlTagFooterPeer::ENABLED)) $criteria->add(UrlTagFooterPeer::ENABLED, $this->enabled);
		if ($this->isColumnModified(UrlTagFooterPeer::CREATED_AT)) $criteria->add(UrlTagFooterPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UrlTagFooterPeer::DATABASE_NAME);

		$criteria->add(UrlTagFooterPeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setTypeUrlTagId($this->type_url_tag_id);

		$copyObj->setUrl($this->url);

		$copyObj->setEnabled($this->enabled);

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
			self::$peer = new UrlTagFooterPeer();
		}
		return self::$peer;
	}

	
	public function setTypeUrlTag($v)
	{


		if ($v === null) {
			$this->setTypeUrlTagId(NULL);
		} else {
			$this->setTypeUrlTagId($v->getId());
		}


		$this->aTypeUrlTag = $v;
	}


	
	static $TypeUrlTag = array();
	
	public function getTypeUrlTag($con = null)
	{
		if ($this->aTypeUrlTag === null && ($this->type_url_tag_id !== null)) {
						if(!isset(self::$TypeUrlTag[$this->type_url_tag_id])){
				self::$TypeUrlTag[$this->type_url_tag_id] = TypeUrlTagPeer::retrieveByPK($this->type_url_tag_id, $con);
			}
			$this->aTypeUrlTag = self::$TypeUrlTag[$this->type_url_tag_id];

			
		}
		return $this->aTypeUrlTag;
	}

} 