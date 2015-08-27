<?php


abstract class BaseQuestion extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $title;


	
	protected $detail;


	
	protected $question_group_category;


	
	protected $answer;


	
	protected $like_question;


	
	protected $share;


	
	protected $view;


	
	protected $id_like;


	
	protected $date;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $created_at;

	
	protected $aDichungUser;

	
	protected $collQuestionAnswers;

	
	protected $lastQuestionAnswerCriteria = null;

	
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

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getDetail()
	{

        return $this->detail;
	}

	
	public function getQuestionGroupCategory()
	{

        return $this->question_group_category;
	}

	
	public function getAnswer()
	{

        return $this->answer;
	}

	
	public function getLikeQuestion()
	{

        return $this->like_question;
	}

	
	public function getShare()
	{

        return $this->share;
	}

	
	public function getView()
	{

        return $this->view;
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = QuestionPeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = QuestionPeer::USER_ID;
		}

		if ($this->aDichungUser !== null && $this->aDichungUser->getId() !== $v) {
			$this->aDichungUser = null;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = QuestionPeer::TITLE;
		}

	} 
	
	public function setDetail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->detail !== $v) {
			$this->detail = $v;
			$this->modifiedColumns[] = QuestionPeer::DETAIL;
		}

	} 
	
	public function setQuestionGroupCategory($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->question_group_category !== $v) {
			$this->question_group_category = $v;
			$this->modifiedColumns[] = QuestionPeer::QUESTION_GROUP_CATEGORY;
		}

	} 
	
	public function setAnswer($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->answer !== $v) {
			$this->answer = $v;
			$this->modifiedColumns[] = QuestionPeer::ANSWER;
		}

	} 
	
	public function setLikeQuestion($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->like_question !== $v) {
			$this->like_question = $v;
			$this->modifiedColumns[] = QuestionPeer::LIKE_QUESTION;
		}

	} 
	
	public function setShare($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->share !== $v) {
			$this->share = $v;
			$this->modifiedColumns[] = QuestionPeer::SHARE;
		}

	} 
	
	public function setView($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->view !== $v) {
			$this->view = $v;
			$this->modifiedColumns[] = QuestionPeer::VIEW;
		}

	} 
	
	public function setIdLike($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->id_like !== $v) {
			$this->id_like = $v;
			$this->modifiedColumns[] = QuestionPeer::ID_LIKE;
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
			$this->modifiedColumns[] = QuestionPeer::DATE;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = QuestionPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = QuestionPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = QuestionPeer::IMG_SEO;
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
			$this->modifiedColumns[] = QuestionPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->title = $rs->getString($startcol + 2);

			$this->detail = $rs->getString($startcol + 3);

			$this->question_group_category = $rs->getString($startcol + 4);

			$this->answer = $rs->getInt($startcol + 5);

			$this->like_question = $rs->getInt($startcol + 6);

			$this->share = $rs->getInt($startcol + 7);

			$this->view = $rs->getInt($startcol + 8);

			$this->id_like = $rs->getString($startcol + 9);

			$this->date = $rs->getTimestamp($startcol + 10, null);

			$this->title_seo = $rs->getString($startcol + 11);

			$this->description_seo = $rs->getString($startcol + 12);

			$this->img_seo = $rs->getString($startcol + 13);

			$this->created_at = $rs->getTimestamp($startcol + 14, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 15; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Question object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			QuestionPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(QuestionPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionPeer::DATABASE_NAME);
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
					$pk = QuestionPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += QuestionPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collQuestionAnswers !== null) {
				foreach($this->collQuestionAnswers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

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


			if (($retval = QuestionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collQuestionAnswers !== null) {
					foreach($this->collQuestionAnswers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTitle();
				break;
			case 3:
				return $this->getDetail();
				break;
			case 4:
				return $this->getQuestionGroupCategory();
				break;
			case 5:
				return $this->getAnswer();
				break;
			case 6:
				return $this->getLikeQuestion();
				break;
			case 7:
				return $this->getShare();
				break;
			case 8:
				return $this->getView();
				break;
			case 9:
				return $this->getIdLike();
				break;
			case 10:
				return $this->getDate();
				break;
			case 11:
				return $this->getTitleSeo();
				break;
			case 12:
				return $this->getDescriptionSeo();
				break;
			case 13:
				return $this->getImgSeo();
				break;
			case 14:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getDetail(),
			$keys[4] => $this->getQuestionGroupCategory(),
			$keys[5] => $this->getAnswer(),
			$keys[6] => $this->getLikeQuestion(),
			$keys[7] => $this->getShare(),
			$keys[8] => $this->getView(),
			$keys[9] => $this->getIdLike(),
			$keys[10] => $this->getDate(),
			$keys[11] => $this->getTitleSeo(),
			$keys[12] => $this->getDescriptionSeo(),
			$keys[13] => $this->getImgSeo(),
			$keys[14] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTitle($value);
				break;
			case 3:
				$this->setDetail($value);
				break;
			case 4:
				$this->setQuestionGroupCategory($value);
				break;
			case 5:
				$this->setAnswer($value);
				break;
			case 6:
				$this->setLikeQuestion($value);
				break;
			case 7:
				$this->setShare($value);
				break;
			case 8:
				$this->setView($value);
				break;
			case 9:
				$this->setIdLike($value);
				break;
			case 10:
				$this->setDate($value);
				break;
			case 11:
				$this->setTitleSeo($value);
				break;
			case 12:
				$this->setDescriptionSeo($value);
				break;
			case 13:
				$this->setImgSeo($value);
				break;
			case 14:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDetail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setQuestionGroupCategory($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAnswer($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLikeQuestion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setShare($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setView($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIdLike($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDate($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTitleSeo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setDescriptionSeo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setImgSeo($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCreatedAt($arr[$keys[14]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(QuestionPeer::DATABASE_NAME);

		if ($this->isColumnModified(QuestionPeer::ID)) $criteria->add(QuestionPeer::ID, $this->id);
		if ($this->isColumnModified(QuestionPeer::USER_ID)) $criteria->add(QuestionPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(QuestionPeer::TITLE)) $criteria->add(QuestionPeer::TITLE, $this->title);
		if ($this->isColumnModified(QuestionPeer::DETAIL)) $criteria->add(QuestionPeer::DETAIL, $this->detail);
		if ($this->isColumnModified(QuestionPeer::QUESTION_GROUP_CATEGORY)) $criteria->add(QuestionPeer::QUESTION_GROUP_CATEGORY, $this->question_group_category);
		if ($this->isColumnModified(QuestionPeer::ANSWER)) $criteria->add(QuestionPeer::ANSWER, $this->answer);
		if ($this->isColumnModified(QuestionPeer::LIKE_QUESTION)) $criteria->add(QuestionPeer::LIKE_QUESTION, $this->like_question);
		if ($this->isColumnModified(QuestionPeer::SHARE)) $criteria->add(QuestionPeer::SHARE, $this->share);
		if ($this->isColumnModified(QuestionPeer::VIEW)) $criteria->add(QuestionPeer::VIEW, $this->view);
		if ($this->isColumnModified(QuestionPeer::ID_LIKE)) $criteria->add(QuestionPeer::ID_LIKE, $this->id_like);
		if ($this->isColumnModified(QuestionPeer::DATE)) $criteria->add(QuestionPeer::DATE, $this->date);
		if ($this->isColumnModified(QuestionPeer::TITLE_SEO)) $criteria->add(QuestionPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(QuestionPeer::DESCRIPTION_SEO)) $criteria->add(QuestionPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(QuestionPeer::IMG_SEO)) $criteria->add(QuestionPeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(QuestionPeer::CREATED_AT)) $criteria->add(QuestionPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(QuestionPeer::DATABASE_NAME);

		$criteria->add(QuestionPeer::ID, $this->id);

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

		$copyObj->setTitle($this->title);

		$copyObj->setDetail($this->detail);

		$copyObj->setQuestionGroupCategory($this->question_group_category);

		$copyObj->setAnswer($this->answer);

		$copyObj->setLikeQuestion($this->like_question);

		$copyObj->setShare($this->share);

		$copyObj->setView($this->view);

		$copyObj->setIdLike($this->id_like);

		$copyObj->setDate($this->date);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setCreatedAt($this->created_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getQuestionAnswers() as $relObj) {
				$copyObj->addQuestionAnswer($relObj->copy($deepCopy));
			}

		} 

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
			self::$peer = new QuestionPeer();
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

	
	public function initQuestionAnswers()
	{
		if ($this->collQuestionAnswers === null) {
			$this->collQuestionAnswers = array();
		}
	}

	
	public function getQuestionAnswers($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collQuestionAnswers === null) {
			if ($this->isNew()) {
			   $this->collQuestionAnswers = array();
			} else {

				$criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->getId());

				QuestionAnswerPeer::addSelectColumns($criteria);
				$this->collQuestionAnswers = QuestionAnswerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->getId());

				QuestionAnswerPeer::addSelectColumns($criteria);
				if (!isset($this->lastQuestionAnswerCriteria) || !$this->lastQuestionAnswerCriteria->equals($criteria)) {
					$this->collQuestionAnswers = QuestionAnswerPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastQuestionAnswerCriteria = $criteria;
		return $this->collQuestionAnswers;
	}

	
	public function countQuestionAnswers($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->getId());

		return QuestionAnswerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addQuestionAnswer(QuestionAnswer $l)
	{
		$this->collQuestionAnswers[] = $l;
		$l->setQuestion($this);
	}


	
	public function getQuestionAnswersJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collQuestionAnswers === null) {
			if ($this->isNew()) {
				$this->collQuestionAnswers = array();
			} else {

				$criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->getId());

				$this->collQuestionAnswers = QuestionAnswerPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(QuestionAnswerPeer::QUESTION_ID, $this->getId());

			if (!isset($this->lastQuestionAnswerCriteria) || !$this->lastQuestionAnswerCriteria->equals($criteria)) {
				$this->collQuestionAnswers = QuestionAnswerPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastQuestionAnswerCriteria = $criteria;

		return $this->collQuestionAnswers;
	}

} 