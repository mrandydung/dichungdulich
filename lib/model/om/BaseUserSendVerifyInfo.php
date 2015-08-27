<?php


abstract class BaseUserSendVerifyInfo extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $type_verify_id;


	
	protected $verified = false;


	
	protected $image;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aDichungUser;

	
	protected $aVerifyType;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getUserId()
	{

        return $this->user_id;
	}

	
	public function getTypeVerifyId()
	{

        return $this->type_verify_id;
	}

	
	public function getVerified()
	{

        return $this->verified;
	}

	
	public function getImage()
	{

        return $this->image;
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
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setTypeVerifyId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_verify_id !== $v) {
			$this->type_verify_id = $v;
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::TYPE_VERIFY_ID;
		}

		if ($this->aVerifyType !== null && $this->aVerifyType->getId() !== $v) {
			$this->aVerifyType = null;
		}

	} 
	
	public function setVerified($v)
	{

		if ($this->verified !== $v || $v === false) {
			$this->verified = $v;
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::VERIFIED;
		}

	} 
	
	public function setImage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->image !== $v) {
			$this->image = $v;
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::IMAGE;
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
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::CREATED_AT;
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
			$this->modifiedColumns[] = UserSendVerifyInfoPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->type_verify_id = $rs->getInt($startcol + 2);

			$this->verified = $rs->getBoolean($startcol + 3);

			$this->image = $rs->getString($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->updated_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating UserSendVerifyInfo object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserSendVerifyInfoPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			UserSendVerifyInfoPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(UserSendVerifyInfoPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(UserSendVerifyInfoPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(UserSendVerifyInfoPeer::DATABASE_NAME);
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

			if ($this->aVerifyType !== null) {
				if ($this->aVerifyType->isModified()) {
					$affectedRows += $this->aVerifyType->save($con);
				}
				$this->setVerifyType($this->aVerifyType);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = UserSendVerifyInfoPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += UserSendVerifyInfoPeer::doUpdate($this, $con);
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

			if ($this->aVerifyType !== null) {
				if (!$this->aVerifyType->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aVerifyType->getValidationFailures());
				}
			}


			if (($retval = UserSendVerifyInfoPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserSendVerifyInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserId();
				break;
			case 2:
				return $this->getTypeVerifyId();
				break;
			case 3:
				return $this->getVerified();
				break;
			case 4:
				return $this->getImage();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			case 6:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserSendVerifyInfoPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getTypeVerifyId(),
			$keys[3] => $this->getVerified(),
			$keys[4] => $this->getImage(),
			$keys[5] => $this->getCreatedAt(),
			$keys[6] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = UserSendVerifyInfoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserId($value);
				break;
			case 2:
				$this->setTypeVerifyId($value);
				break;
			case 3:
				$this->setVerified($value);
				break;
			case 4:
				$this->setImage($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
			case 6:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = UserSendVerifyInfoPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTypeVerifyId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setVerified($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setImage($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(UserSendVerifyInfoPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserSendVerifyInfoPeer::ID)) $criteria->add(UserSendVerifyInfoPeer::ID, $this->id);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::USER_ID)) $criteria->add(UserSendVerifyInfoPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::TYPE_VERIFY_ID)) $criteria->add(UserSendVerifyInfoPeer::TYPE_VERIFY_ID, $this->type_verify_id);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::VERIFIED)) $criteria->add(UserSendVerifyInfoPeer::VERIFIED, $this->verified);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::IMAGE)) $criteria->add(UserSendVerifyInfoPeer::IMAGE, $this->image);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::CREATED_AT)) $criteria->add(UserSendVerifyInfoPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(UserSendVerifyInfoPeer::UPDATED_AT)) $criteria->add(UserSendVerifyInfoPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(UserSendVerifyInfoPeer::DATABASE_NAME);

		$criteria->add(UserSendVerifyInfoPeer::ID, $this->id);

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

		$copyObj->setUserId($this->user_id);

		$copyObj->setTypeVerifyId($this->type_verify_id);

		$copyObj->setVerified($this->verified);

		$copyObj->setImage($this->image);

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
			self::$peer = new UserSendVerifyInfoPeer();
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

	
	public function setVerifyType($v)
	{


		if ($v === null) {
			$this->setTypeVerifyId(NULL);
		} else {
			$this->setTypeVerifyId($v->getId());
		}


		$this->aVerifyType = $v;
	}


	
	static $VerifyType = array();
	
	public function getVerifyType($con = null)
	{
		if ($this->aVerifyType === null && ($this->type_verify_id !== null)) {
						if(!isset(self::$VerifyType[$this->type_verify_id])){
				self::$VerifyType[$this->type_verify_id] = VerifyTypePeer::retrieveByPK($this->type_verify_id, $con);
			}
			$this->aVerifyType = self::$VerifyType[$this->type_verify_id];

			
		}
		return $this->aVerifyType;
	}

} 