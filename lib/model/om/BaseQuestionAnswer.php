<?php


abstract class BaseQuestionAnswer extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $question_id;


	
	protected $content;


	
	protected $like_question;


	
	protected $id_like;


	
	protected $date;


	
	protected $created_at;

	
	protected $aDichungUser;

	
	protected $aQuestion;

	
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

	
	public function getQuestionId()
	{

        return $this->question_id;
	}

	
	public function getContent()
	{

        return $this->content;
	}

	
	public function getLikeQuestion()
	{

        return $this->like_question;
	}

	
	public function getIdLike()
	{

        return $this->id_like;
	}

	
	public function getDate($format = 'Y-m-d H:i:s')
	{

		if ($this->date === null || $this->date === '') {
			return null;
		} elseif (!is_int($this->date)) {
						$ts = strtotime($this->date);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse value of [date] as date/time value: " . var_export($this->date, true));
			}
		} else {
			$ts = $this->date;
		}
		if ($format === null) {
			return $ts;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $ts);
		} else {
			return date($format, $ts);
		}
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
			$this->modifiedColumns[] = QuestionAnswerPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = QuestionAnswerPeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setQuestionId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->question_id !== $v) {
			$this->question_id = $v;
			$this->modifiedColumns[] = QuestionAnswerPeer::QUESTION_ID;
		}

		if ($this->aQuestion !== null && $this->aQuestion->getId() !== $v) {
			$this->aQuestion = null;
		}

	} 
	
	public function setContent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = QuestionAnswerPeer::CONTENT;
		}

	} 
	
	public function setLikeQuestion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->like_question !== $v) {
			$this->like_question = $v;
			$this->modifiedColumns[] = QuestionAnswerPeer::LIKE_QUESTION;
		}

	} 
	
	public function setIdLike($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id_like !== $v) {
			$this->id_like = $v;
			$this->modifiedColumns[] = QuestionAnswerPeer::ID_LIKE;
		}

	} 
	
	public function setDate($v)
	{

		if ($v !== null && !is_int($v)) {
			$ts = strtotime($v);
			if ($ts === -1 || $ts === false) { 				throw new PropelException("Unable to parse date/time value for [date] from input: " . var_export($v, true));
			}
		} else {
			$ts = $v;
		}
		if ($this->date !== $ts) {
			$this->date = $ts;
			$this->modifiedColumns[] = QuestionAnswerPeer::DATE;
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
			$this->modifiedColumns[] = QuestionAnswerPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->question_id = $rs->getInt($startcol + 2);

			$this->content = $rs->getString($startcol + 3);

			$this->like_question = $rs->getInt($startcol + 4);

			$this->id_like = $rs->getString($startcol + 5);

			$this->date = $rs->getTimestamp($startcol + 6, null);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating QuestionAnswer object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionAnswerPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			QuestionAnswerPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(QuestionAnswerPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionAnswerPeer::DATABASE_NAME);
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

			if ($this->aQuestion !== null) {
				if ($this->aQuestion->isModified()) {
					$affectedRows += $this->aQuestion->save($con);
				}
				$this->setQuestion($this->aQuestion);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = QuestionAnswerPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += QuestionAnswerPeer::doUpdate($this, $con);
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

			if ($this->aQuestion !== null) {
				if (!$this->aQuestion->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aQuestion->getValidationFailures());
				}
			}


			if (($retval = QuestionAnswerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionAnswerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getQuestionId();
				break;
			case 3:
				return $this->getContent();
				break;
			case 4:
				return $this->getLikeQuestion();
				break;
			case 5:
				return $this->getIdLike();
				break;
			case 6:
				return $this->getDate();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionAnswerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getQuestionId(),
			$keys[3] => $this->getContent(),
			$keys[4] => $this->getLikeQuestion(),
			$keys[5] => $this->getIdLike(),
			$keys[6] => $this->getDate(),
			$keys[7] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionAnswerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setQuestionId($value);
				break;
			case 3:
				$this->setContent($value);
				break;
			case 4:
				$this->setLikeQuestion($value);
				break;
			case 5:
				$this->setIdLike($value);
				break;
			case 6:
				$this->setDate($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionAnswerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setQuestionId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setContent($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLikeQuestion($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIdLike($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDate($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(QuestionAnswerPeer::DATABASE_NAME);

		if ($this->isColumnModified(QuestionAnswerPeer::ID)) $criteria->add(QuestionAnswerPeer::ID, $this->id);
		if ($this->isColumnModified(QuestionAnswerPeer::USER_ID)) $criteria->add(QuestionAnswerPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(QuestionAnswerPeer::QUESTION_ID)) $criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->question_id);
		if ($this->isColumnModified(QuestionAnswerPeer::CONTENT)) $criteria->add(QuestionAnswerPeer::CONTENT, $this->content);
		if ($this->isColumnModified(QuestionAnswerPeer::LIKE_QUESTION)) $criteria->add(QuestionAnswerPeer::LIKE_QUESTION, $this->like_question);
		if ($this->isColumnModified(QuestionAnswerPeer::ID_LIKE)) $criteria->add(QuestionAnswerPeer::ID_LIKE, $this->id_like);
		if ($this->isColumnModified(QuestionAnswerPeer::DATE)) $criteria->add(QuestionAnswerPeer::DATE, $this->date);
		if ($this->isColumnModified(QuestionAnswerPeer::CREATED_AT)) $criteria->add(QuestionAnswerPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(QuestionAnswerPeer::DATABASE_NAME);

		$criteria->add(QuestionAnswerPeer::ID, $this->id);

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

		$copyObj->setQuestionId($this->question_id);

		$copyObj->setContent($this->content);

		$copyObj->setLikeQuestion($this->like_question);

		$copyObj->setIdLike($this->id_like);

		$copyObj->setDate($this->date);

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
			self::$peer = new QuestionAnswerPeer();
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

	
	public function setQuestion($v)
	{


		if ($v === null) {
			$this->setQuestionId(NULL);
		} else {
			$this->setQuestionId($v->getId());
		}


		$this->aQuestion = $v;
	}


	
	static $Question = array();
	
	public function getQuestion($con = null)
	{
		if ($this->aQuestion === null && ($this->question_id !== null)) {
						if(!isset(self::$Question[$this->question_id])){
				self::$Question[$this->question_id] = QuestionPeer::retrieveByPK($this->question_id, $con);
			}
			$this->aQuestion = self::$Question[$this->question_id];

			
		}
		return $this->aQuestion;
	}

} 