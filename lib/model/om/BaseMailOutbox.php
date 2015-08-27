<?php


abstract class BaseMailOutbox extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $send_to;


	
	protected $send_from;


	
	protected $send_from_name;


	
	protected $message;


	
	protected $title;


	
	protected $created_at;


	
	protected $sent_at;


	
	protected $priority = 10;


	
	protected $status = 0;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getSendTo()
	{

        return $this->send_to;
	}

	
	public function getSendFrom()
	{

        return $this->send_from;
	}

	
	public function getSendFromName()
	{

        return $this->send_from_name;
	}

	
	public function getMessage()
	{

        return $this->message;
	}

	
	public function getTitle()
	{

        return $this->title;
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

	
	public function getSentAt($format = 'Y-m-d H:i:s')
	{

		if ($this->sent_at === null || $this->sent_at === '') {
			return null;
		} elseif (!is_int($this->sent_at)) {
						$ts = strtotime($this->sent_at);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [sent_at] as date/time value: " . var_export($this->sent_at, true));
			}
		} else {
			$ts = $this->sent_at;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
	}

	
	public function getPriority()
	{

        return $this->priority;
	}

	
	public function getStatus()
	{

        return $this->status;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = MailOutboxPeer::ID;
		}

	} 
	
	public function setSendTo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->send_to !== $v) {
			$this->send_to = $v;
			$this->modifiedColumns[] = MailOutboxPeer::SEND_TO;
		}

	} 
	
	public function setSendFrom($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->send_from !== $v) {
			$this->send_from = $v;
			$this->modifiedColumns[] = MailOutboxPeer::SEND_FROM;
		}

	} 
	
	public function setSendFromName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->send_from_name !== $v) {
			$this->send_from_name = $v;
			$this->modifiedColumns[] = MailOutboxPeer::SEND_FROM_NAME;
		}

	} 
	
	public function setMessage($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->message !== $v) {
			$this->message = $v;
			$this->modifiedColumns[] = MailOutboxPeer::MESSAGE;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = MailOutboxPeer::TITLE;
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
			$this->modifiedColumns[] = MailOutboxPeer::CREATED_AT;
		}

	} 
	
	public function setSentAt($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [sent_at] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->sent_at !== $ts) {
			$this->sent_at = $ts;
			$this->modifiedColumns[] = MailOutboxPeer::SENT_AT;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = MailOutboxPeer::PRIORITY;
		}

	} 
	
	public function setStatus($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->status !== $v || $v === 0) {
			$this->status = $v;
			$this->modifiedColumns[] = MailOutboxPeer::STATUS;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->send_to = $rs->getString($startcol + 1);

			$this->send_from = $rs->getString($startcol + 2);

			$this->send_from_name = $rs->getString($startcol + 3);

			$this->message = $rs->getString($startcol + 4);

			$this->title = $rs->getString($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->sent_at = $rs->getTimestamp($startcol + 7, null);

			$this->priority = $rs->getInt($startcol + 8);

			$this->status = $rs->getInt($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating MailOutbox object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MailOutboxPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			MailOutboxPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(MailOutboxPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(MailOutboxPeer::DATABASE_NAME);
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
					$pk = MailOutboxPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += MailOutboxPeer::doUpdate($this, $con);
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


			if (($retval = MailOutboxPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MailOutboxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSendTo();
				break;
			case 2:
				return $this->getSendFrom();
				break;
			case 3:
				return $this->getSendFromName();
				break;
			case 4:
				return $this->getMessage();
				break;
			case 5:
				return $this->getTitle();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
				return $this->getSentAt();
				break;
			case 8:
				return $this->getPriority();
				break;
			case 9:
				return $this->getStatus();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MailOutboxPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSendTo(),
			$keys[2] => $this->getSendFrom(),
			$keys[3] => $this->getSendFromName(),
			$keys[4] => $this->getMessage(),
			$keys[5] => $this->getTitle(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getSentAt(),
			$keys[8] => $this->getPriority(),
			$keys[9] => $this->getStatus(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = MailOutboxPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSendTo($value);
				break;
			case 2:
				$this->setSendFrom($value);
				break;
			case 3:
				$this->setSendFromName($value);
				break;
			case 4:
				$this->setMessage($value);
				break;
			case 5:
				$this->setTitle($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
				$this->setSentAt($value);
				break;
			case 8:
				$this->setPriority($value);
				break;
			case 9:
				$this->setStatus($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = MailOutboxPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSendTo($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSendFrom($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSendFromName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setMessage($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setTitle($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSentAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPriority($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatus($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(MailOutboxPeer::DATABASE_NAME);

		if ($this->isColumnModified(MailOutboxPeer::ID)) $criteria->add(MailOutboxPeer::ID, $this->id);
		if ($this->isColumnModified(MailOutboxPeer::SEND_TO)) $criteria->add(MailOutboxPeer::SEND_TO, $this->send_to);
		if ($this->isColumnModified(MailOutboxPeer::SEND_FROM)) $criteria->add(MailOutboxPeer::SEND_FROM, $this->send_from);
		if ($this->isColumnModified(MailOutboxPeer::SEND_FROM_NAME)) $criteria->add(MailOutboxPeer::SEND_FROM_NAME, $this->send_from_name);
		if ($this->isColumnModified(MailOutboxPeer::MESSAGE)) $criteria->add(MailOutboxPeer::MESSAGE, $this->message);
		if ($this->isColumnModified(MailOutboxPeer::TITLE)) $criteria->add(MailOutboxPeer::TITLE, $this->title);
		if ($this->isColumnModified(MailOutboxPeer::CREATED_AT)) $criteria->add(MailOutboxPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(MailOutboxPeer::SENT_AT)) $criteria->add(MailOutboxPeer::SENT_AT, $this->sent_at);
		if ($this->isColumnModified(MailOutboxPeer::PRIORITY)) $criteria->add(MailOutboxPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(MailOutboxPeer::STATUS)) $criteria->add(MailOutboxPeer::STATUS, $this->status);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(MailOutboxPeer::DATABASE_NAME);

		$criteria->add(MailOutboxPeer::ID, $this->id);

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

		$copyObj->setSendTo($this->send_to);

		$copyObj->setSendFrom($this->send_from);

		$copyObj->setSendFromName($this->send_from_name);

		$copyObj->setMessage($this->message);

		$copyObj->setTitle($this->title);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setSentAt($this->sent_at);

		$copyObj->setPriority($this->priority);

		$copyObj->setStatus($this->status);


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
			self::$peer = new MailOutboxPeer();
		}
		return self::$peer;
	}

} 