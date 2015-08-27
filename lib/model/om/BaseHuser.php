<?php


abstract class BaseHuser extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $credential_id = 0;


	
	protected $username;


	
	protected $password;


	
	protected $active = true;


	
	protected $is_admin = false;


	
	protected $is_moderater = false;


	
	protected $is_partner = false;


	
	protected $partner_id = 1;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aPartner;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getCredentialId()
	{

        return $this->credential_id;
	}

	
	public function getUsername()
	{

        return $this->username;
	}

	
	public function getPassword()
	{

        return $this->password;
	}

	
	public function getActive()
	{

        return $this->active;
	}

	
	public function getIsAdmin()
	{

        return $this->is_admin;
	}

	
	public function getIsModerater()
	{

        return $this->is_moderater;
	}

	
	public function getIsPartner()
	{

        return $this->is_partner;
	}

	
	public function getPartnerId()
	{

        return $this->partner_id;
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
			$this->modifiedColumns[] = HuserPeer::ID;
		}

	} 
	
	public function setCredentialId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->credential_id !== $v || $v === 0) {
			$this->credential_id = $v;
			$this->modifiedColumns[] = HuserPeer::CREDENTIAL_ID;
		}

	} 
	
	public function setUsername($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->username !== $v) {
			$this->username = $v;
			$this->modifiedColumns[] = HuserPeer::USERNAME;
		}

	} 
	
	public function setPassword($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->password !== $v) {
			$this->password = $v;
			$this->modifiedColumns[] = HuserPeer::PASSWORD;
		}

	} 
	
	public function setActive($v)
	{

		if ($this->active !== $v || $v === true) {
			$this->active = $v;
			$this->modifiedColumns[] = HuserPeer::ACTIVE;
		}

	} 
	
	public function setIsAdmin($v)
	{

		if ($this->is_admin !== $v || $v === false) {
			$this->is_admin = $v;
			$this->modifiedColumns[] = HuserPeer::IS_ADMIN;
		}

	} 
	
	public function setIsModerater($v)
	{

		if ($this->is_moderater !== $v || $v === false) {
			$this->is_moderater = $v;
			$this->modifiedColumns[] = HuserPeer::IS_MODERATER;
		}

	} 
	
	public function setIsPartner($v)
	{

		if ($this->is_partner !== $v || $v === false) {
			$this->is_partner = $v;
			$this->modifiedColumns[] = HuserPeer::IS_PARTNER;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v || $v === 1) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = HuserPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
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
			$this->modifiedColumns[] = HuserPeer::CREATED_AT;
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
			$this->modifiedColumns[] = HuserPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->credential_id = $rs->getInt($startcol + 1);

			$this->username = $rs->getString($startcol + 2);

			$this->password = $rs->getString($startcol + 3);

			$this->active = $rs->getBoolean($startcol + 4);

			$this->is_admin = $rs->getBoolean($startcol + 5);

			$this->is_moderater = $rs->getBoolean($startcol + 6);

			$this->is_partner = $rs->getBoolean($startcol + 7);

			$this->partner_id = $rs->getInt($startcol + 8);

			$this->created_at = $rs->getTimestamp($startcol + 9, null);

			$this->updated_at = $rs->getTimestamp($startcol + 10, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 11; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Huser object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HuserPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			HuserPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(HuserPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(HuserPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(HuserPeer::DATABASE_NAME);
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
					$pk = HuserPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += HuserPeer::doUpdate($this, $con);
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


			if (($retval = HuserPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HuserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getCredentialId();
				break;
			case 2:
				return $this->getUsername();
				break;
			case 3:
				return $this->getPassword();
				break;
			case 4:
				return $this->getActive();
				break;
			case 5:
				return $this->getIsAdmin();
				break;
			case 6:
				return $this->getIsModerater();
				break;
			case 7:
				return $this->getIsPartner();
				break;
			case 8:
				return $this->getPartnerId();
				break;
			case 9:
				return $this->getCreatedAt();
				break;
			case 10:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HuserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCredentialId(),
			$keys[2] => $this->getUsername(),
			$keys[3] => $this->getPassword(),
			$keys[4] => $this->getActive(),
			$keys[5] => $this->getIsAdmin(),
			$keys[6] => $this->getIsModerater(),
			$keys[7] => $this->getIsPartner(),
			$keys[8] => $this->getPartnerId(),
			$keys[9] => $this->getCreatedAt(),
			$keys[10] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = HuserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setCredentialId($value);
				break;
			case 2:
				$this->setUsername($value);
				break;
			case 3:
				$this->setPassword($value);
				break;
			case 4:
				$this->setActive($value);
				break;
			case 5:
				$this->setIsAdmin($value);
				break;
			case 6:
				$this->setIsModerater($value);
				break;
			case 7:
				$this->setIsPartner($value);
				break;
			case 8:
				$this->setPartnerId($value);
				break;
			case 9:
				$this->setCreatedAt($value);
				break;
			case 10:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = HuserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCredentialId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUsername($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPassword($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setActive($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIsAdmin($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setIsModerater($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setIsPartner($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPartnerId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCreatedAt($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUpdatedAt($arr[$keys[10]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(HuserPeer::DATABASE_NAME);

		if ($this->isColumnModified(HuserPeer::ID)) $criteria->add(HuserPeer::ID, $this->id);
		if ($this->isColumnModified(HuserPeer::CREDENTIAL_ID)) $criteria->add(HuserPeer::CREDENTIAL_ID, $this->credential_id);
		if ($this->isColumnModified(HuserPeer::USERNAME)) $criteria->add(HuserPeer::USERNAME, $this->username);
		if ($this->isColumnModified(HuserPeer::PASSWORD)) $criteria->add(HuserPeer::PASSWORD, $this->password);
		if ($this->isColumnModified(HuserPeer::ACTIVE)) $criteria->add(HuserPeer::ACTIVE, $this->active);
		if ($this->isColumnModified(HuserPeer::IS_ADMIN)) $criteria->add(HuserPeer::IS_ADMIN, $this->is_admin);
		if ($this->isColumnModified(HuserPeer::IS_MODERATER)) $criteria->add(HuserPeer::IS_MODERATER, $this->is_moderater);
		if ($this->isColumnModified(HuserPeer::IS_PARTNER)) $criteria->add(HuserPeer::IS_PARTNER, $this->is_partner);
		if ($this->isColumnModified(HuserPeer::PARTNER_ID)) $criteria->add(HuserPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(HuserPeer::CREATED_AT)) $criteria->add(HuserPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(HuserPeer::UPDATED_AT)) $criteria->add(HuserPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(HuserPeer::DATABASE_NAME);

		$criteria->add(HuserPeer::ID, $this->id);

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

		$copyObj->setCredentialId($this->credential_id);

		$copyObj->setUsername($this->username);

		$copyObj->setPassword($this->password);

		$copyObj->setActive($this->active);

		$copyObj->setIsAdmin($this->is_admin);

		$copyObj->setIsModerater($this->is_moderater);

		$copyObj->setIsPartner($this->is_partner);

		$copyObj->setPartnerId($this->partner_id);

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
			self::$peer = new HuserPeer();
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