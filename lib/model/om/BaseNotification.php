<?php


abstract class BaseNotification extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_send;


	
	protected $user_receiver;


	
	protected $description;


	
	protected $detail;


	
	protected $readed = false;


	
	protected $created_at;

	
	protected $aDichungUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getUserSend()
	{

        return $this->user_send;
	}

	
	public function getUserReceiver()
	{

        return $this->user_receiver;
	}

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getDetail()
	{

        return $this->detail;
	}

	
	public function getReaded()
	{

        return $this->readed;
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
			$this->modifiedColumns[] = NotificationPeer::ID;
		}

	} 
	
	public function setUserSend($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_send !== $v) {
			$this->user_send = $v;
			$this->modifiedColumns[] = NotificationPeer::USER_SEND;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setUserReceiver($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_receiver !== $v) {
			$this->user_receiver = $v;
			$this->modifiedColumns[] = NotificationPeer::USER_RECEIVER;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = NotificationPeer::DESCRIPTION;
		}

	} 
	
	public function setDetail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->detail !== $v) {
			$this->detail = $v;
			$this->modifiedColumns[] = NotificationPeer::DETAIL;
		}

	} 
	
	public function setReaded($v)
	{

		if ($this->readed !== $v || $v === false) {
			$this->readed = $v;
			$this->modifiedColumns[] = NotificationPeer::READED;
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
			$this->modifiedColumns[] = NotificationPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_send = $rs->getInt($startcol + 1);

			$this->user_receiver = $rs->getInt($startcol + 2);

			$this->description = $rs->getString($startcol + 3);

			$this->detail = $rs->getString($startcol + 4);

			$this->readed = $rs->getBoolean($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Notification object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NotificationPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			NotificationPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(NotificationPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NotificationPeer::DATABASE_NAME);
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
					$pk = NotificationPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += NotificationPeer::doUpdate($this, $con);
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


			if (($retval = NotificationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NotificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getUserSend();
				break;
			case 2:
				return $this->getUserReceiver();
				break;
			case 3:
				return $this->getDescription();
				break;
			case 4:
				return $this->getDetail();
				break;
			case 5:
				return $this->getReaded();
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
		$keys = NotificationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserSend(),
			$keys[2] => $this->getUserReceiver(),
			$keys[3] => $this->getDescription(),
			$keys[4] => $this->getDetail(),
			$keys[5] => $this->getReaded(),
			$keys[6] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NotificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setUserSend($value);
				break;
			case 2:
				$this->setUserReceiver($value);
				break;
			case 3:
				$this->setDescription($value);
				break;
			case 4:
				$this->setDetail($value);
				break;
			case 5:
				$this->setReaded($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NotificationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserSend($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserReceiver($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDetail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setReaded($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(NotificationPeer::DATABASE_NAME);

		if ($this->isColumnModified(NotificationPeer::ID)) $criteria->add(NotificationPeer::ID, $this->id);
		if ($this->isColumnModified(NotificationPeer::USER_SEND)) $criteria->add(NotificationPeer::USER_SEND, $this->user_send);
		if ($this->isColumnModified(NotificationPeer::USER_RECEIVER)) $criteria->add(NotificationPeer::USER_RECEIVER, $this->user_receiver);
		if ($this->isColumnModified(NotificationPeer::DESCRIPTION)) $criteria->add(NotificationPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(NotificationPeer::DETAIL)) $criteria->add(NotificationPeer::DETAIL, $this->detail);
		if ($this->isColumnModified(NotificationPeer::READED)) $criteria->add(NotificationPeer::READED, $this->readed);
		if ($this->isColumnModified(NotificationPeer::CREATED_AT)) $criteria->add(NotificationPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NotificationPeer::DATABASE_NAME);

		$criteria->add(NotificationPeer::ID, $this->id);

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

		$copyObj->setUserSend($this->user_send);

		$copyObj->setUserReceiver($this->user_receiver);

		$copyObj->setDescription($this->description);

		$copyObj->setDetail($this->detail);

		$copyObj->setReaded($this->readed);

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
			self::$peer = new NotificationPeer();
		}
		return self::$peer;
	}

	
	public function setDichungUser($v)
	{


		if ($v === null) {
			$this->setUserSend(NULL);
		} else {
			$this->setUserSend($v->getId());
		}


		$this->aDichungUser = $v;
	}


	
	static $DichungUser = array();
	
	public function getDichungUser($con = null)
	{
		if ($this->aDichungUser === null && ($this->user_send !== null)) {
						if(!isset(self::$DichungUser[$this->user_send])){
				self::$DichungUser[$this->user_send] = DichungUserPeer::retrieveByPK($this->user_send, $con);
			}
			$this->aDichungUser = self::$DichungUser[$this->user_send];

			
		}
		return $this->aDichungUser;
	}

} 