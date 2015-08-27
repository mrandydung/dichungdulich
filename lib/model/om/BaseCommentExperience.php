<?php


abstract class BaseCommentExperience extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $trip_experience_id;


	
	protected $user_id;


	
	protected $comment;


	
	protected $rating = 0;


	
	protected $created_at;

	
	protected $aTripExperience;

	
	protected $aDichungUser;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTripExperienceId()
	{

        return $this->trip_experience_id;
	}

	
	public function getUserId()
	{

        return $this->user_id;
	}

	
	public function getComment()
	{

        return $this->comment;
	}

	
	public function getRating()
	{

        return $this->rating;
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
			$this->modifiedColumns[] = CommentExperiencePeer::ID;
		}

	} 
	
	public function setTripExperienceId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->trip_experience_id !== $v) {
			$this->trip_experience_id = $v;
			$this->modifiedColumns[] = CommentExperiencePeer::TRIP_EXPERIENCE_ID;
		}

		if ($this->aTripExperience !== null && $this->aTripExperience->getId() !== $v) {
			$this->aTripExperience = null;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = CommentExperiencePeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setComment($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->comment !== $v) {
			$this->comment = $v;
			$this->modifiedColumns[] = CommentExperiencePeer::COMMENT;
		}

	} 
	
	public function setRating($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->rating !== $v || $v === 0) {
			$this->rating = $v;
			$this->modifiedColumns[] = CommentExperiencePeer::RATING;
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
			$this->modifiedColumns[] = CommentExperiencePeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->trip_experience_id = $rs->getInt($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->comment = $rs->getString($startcol + 3);

			$this->rating = $rs->getInt($startcol + 4);

			$this->created_at = $rs->getTimestamp($startcol + 5, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating CommentExperience object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentExperiencePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CommentExperiencePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(CommentExperiencePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CommentExperiencePeer::DATABASE_NAME);
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


												
			if ($this->aTripExperience !== null) {
				if ($this->aTripExperience->isModified()) {
					$affectedRows += $this->aTripExperience->save($con);
				}
				$this->setTripExperience($this->aTripExperience);
			}

			if ($this->aDichungUser !== null) {
				if ($this->aDichungUser->isModified()) {
					$affectedRows += $this->aDichungUser->save($con);
				}
				$this->setDichungUser($this->aDichungUser);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CommentExperiencePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CommentExperiencePeer::doUpdate($this, $con);
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


												
			if ($this->aTripExperience !== null) {
				if (!$this->aTripExperience->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTripExperience->getValidationFailures());
				}
			}

			if ($this->aDichungUser !== null) {
				if (!$this->aDichungUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDichungUser->getValidationFailures());
				}
			}


			if (($retval = CommentExperiencePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentExperiencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTripExperienceId();
				break;
			case 2:
				return $this->getUserId();
				break;
			case 3:
				return $this->getComment();
				break;
			case 4:
				return $this->getRating();
				break;
			case 5:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommentExperiencePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTripExperienceId(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getComment(),
			$keys[4] => $this->getRating(),
			$keys[5] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CommentExperiencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTripExperienceId($value);
				break;
			case 2:
				$this->setUserId($value);
				break;
			case 3:
				$this->setComment($value);
				break;
			case 4:
				$this->setRating($value);
				break;
			case 5:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CommentExperiencePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTripExperienceId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setComment($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setRating($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CommentExperiencePeer::DATABASE_NAME);

		if ($this->isColumnModified(CommentExperiencePeer::ID)) $criteria->add(CommentExperiencePeer::ID, $this->id);
		if ($this->isColumnModified(CommentExperiencePeer::TRIP_EXPERIENCE_ID)) $criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->trip_experience_id);
		if ($this->isColumnModified(CommentExperiencePeer::USER_ID)) $criteria->add(CommentExperiencePeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(CommentExperiencePeer::COMMENT)) $criteria->add(CommentExperiencePeer::COMMENT, $this->comment);
		if ($this->isColumnModified(CommentExperiencePeer::RATING)) $criteria->add(CommentExperiencePeer::RATING, $this->rating);
		if ($this->isColumnModified(CommentExperiencePeer::CREATED_AT)) $criteria->add(CommentExperiencePeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CommentExperiencePeer::DATABASE_NAME);

		$criteria->add(CommentExperiencePeer::ID, $this->id);

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

		$copyObj->setTripExperienceId($this->trip_experience_id);

		$copyObj->setUserId($this->user_id);

		$copyObj->setComment($this->comment);

		$copyObj->setRating($this->rating);

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
			self::$peer = new CommentExperiencePeer();
		}
		return self::$peer;
	}

	
	public function setTripExperience($v)
	{


		if ($v === null) {
			$this->setTripExperienceId(NULL);
		} else {
			$this->setTripExperienceId($v->getId());
		}


		$this->aTripExperience = $v;
	}


	
	static $TripExperience = array();
	
	public function getTripExperience($con = null)
	{
		if ($this->aTripExperience === null && ($this->trip_experience_id !== null)) {
						if(!isset(self::$TripExperience[$this->trip_experience_id])){
				self::$TripExperience[$this->trip_experience_id] = TripExperiencePeer::retrieveByPK($this->trip_experience_id, $con);
			}
			$this->aTripExperience = self::$TripExperience[$this->trip_experience_id];

			
		}
		return $this->aTripExperience;
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