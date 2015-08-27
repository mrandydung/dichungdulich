<?php


abstract class BaseInfoTourDetailByLanguage extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $type_language_id = 1;


	
	protected $tour_detail_id = 1;


	
	protected $title;


	
	protected $description;


	
	protected $schedule_simple;


	
	protected $note;


	
	protected $policy_on_prices;


	
	protected $cancellation_policy_tour;


	
	protected $other_note;

	
	protected $aTypeLanguage;

	
	protected $aTourDetail;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTypeLanguageId()
	{

        return $this->type_language_id;
	}

	
	public function getTourDetailId()
	{

        return $this->tour_detail_id;
	}

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getScheduleSimple()
	{

        return $this->schedule_simple;
	}

	
	public function getNote()
	{

        return $this->note;
	}

	
	public function getPolicyOnPrices()
	{

        return $this->policy_on_prices;
	}

	
	public function getCancellationPolicyTour()
	{

        return $this->cancellation_policy_tour;
	}

	
	public function getOtherNote()
	{

        return $this->other_note;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::ID;
		}

	} 
	
	public function setTypeLanguageId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_language_id !== $v || $v === 1) {
			$this->type_language_id = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID;
		}

		if ($this->aTypeLanguage !== null && $this->aTypeLanguage->getId() !== $v) {
			$this->aTypeLanguage = null;
		}

	} 
	
	public function setTourDetailId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->tour_detail_id !== $v || $v === 1) {
			$this->tour_detail_id = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID;
		}

		if ($this->aTourDetail !== null && $this->aTourDetail->getId() !== $v) {
			$this->aTourDetail = null;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::TITLE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::DESCRIPTION;
		}

	} 
	
	public function setScheduleSimple($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->schedule_simple !== $v) {
			$this->schedule_simple = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE;
		}

	} 
	
	public function setNote($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->note !== $v) {
			$this->note = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::NOTE;
		}

	} 
	
	public function setPolicyOnPrices($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->policy_on_prices !== $v) {
			$this->policy_on_prices = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::POLICY_ON_PRICES;
		}

	} 
	
	public function setCancellationPolicyTour($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->cancellation_policy_tour !== $v) {
			$this->cancellation_policy_tour = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR;
		}

	} 
	
	public function setOtherNote($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->other_note !== $v) {
			$this->other_note = $v;
			$this->modifiedColumns[] = InfoTourDetailByLanguagePeer::OTHER_NOTE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->type_language_id = $rs->getInt($startcol + 1);

			$this->tour_detail_id = $rs->getInt($startcol + 2);

			$this->title = $rs->getString($startcol + 3);

			$this->description = $rs->getString($startcol + 4);

			$this->schedule_simple = $rs->getString($startcol + 5);

			$this->note = $rs->getString($startcol + 6);

			$this->policy_on_prices = $rs->getString($startcol + 7);

			$this->cancellation_policy_tour = $rs->getString($startcol + 8);

			$this->other_note = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating InfoTourDetailByLanguage object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InfoTourDetailByLanguagePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			InfoTourDetailByLanguagePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(InfoTourDetailByLanguagePeer::DATABASE_NAME);
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


												
			if ($this->aTypeLanguage !== null) {
				if ($this->aTypeLanguage->isModified()) {
					$affectedRows += $this->aTypeLanguage->save($con);
				}
				$this->setTypeLanguage($this->aTypeLanguage);
			}

			if ($this->aTourDetail !== null) {
				if ($this->aTourDetail->isModified()) {
					$affectedRows += $this->aTourDetail->save($con);
				}
				$this->setTourDetail($this->aTourDetail);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = InfoTourDetailByLanguagePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += InfoTourDetailByLanguagePeer::doUpdate($this, $con);
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


												
			if ($this->aTypeLanguage !== null) {
				if (!$this->aTypeLanguage->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTypeLanguage->getValidationFailures());
				}
			}

			if ($this->aTourDetail !== null) {
				if (!$this->aTourDetail->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTourDetail->getValidationFailures());
				}
			}


			if (($retval = InfoTourDetailByLanguagePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InfoTourDetailByLanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTypeLanguageId();
				break;
			case 2:
				return $this->getTourDetailId();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getDescription();
				break;
			case 5:
				return $this->getScheduleSimple();
				break;
			case 6:
				return $this->getNote();
				break;
			case 7:
				return $this->getPolicyOnPrices();
				break;
			case 8:
				return $this->getCancellationPolicyTour();
				break;
			case 9:
				return $this->getOtherNote();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InfoTourDetailByLanguagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTypeLanguageId(),
			$keys[2] => $this->getTourDetailId(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getDescription(),
			$keys[5] => $this->getScheduleSimple(),
			$keys[6] => $this->getNote(),
			$keys[7] => $this->getPolicyOnPrices(),
			$keys[8] => $this->getCancellationPolicyTour(),
			$keys[9] => $this->getOtherNote(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = InfoTourDetailByLanguagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTypeLanguageId($value);
				break;
			case 2:
				$this->setTourDetailId($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
			case 5:
				$this->setScheduleSimple($value);
				break;
			case 6:
				$this->setNote($value);
				break;
			case 7:
				$this->setPolicyOnPrices($value);
				break;
			case 8:
				$this->setCancellationPolicyTour($value);
				break;
			case 9:
				$this->setOtherNote($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = InfoTourDetailByLanguagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTypeLanguageId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTourDetailId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setScheduleSimple($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNote($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPolicyOnPrices($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setCancellationPolicyTour($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setOtherNote($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(InfoTourDetailByLanguagePeer::DATABASE_NAME);

		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::ID)) $criteria->add(InfoTourDetailByLanguagePeer::ID, $this->id);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID)) $criteria->add(InfoTourDetailByLanguagePeer::TYPE_LANGUAGE_ID, $this->type_language_id);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID)) $criteria->add(InfoTourDetailByLanguagePeer::TOUR_DETAIL_ID, $this->tour_detail_id);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::TITLE)) $criteria->add(InfoTourDetailByLanguagePeer::TITLE, $this->title);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::DESCRIPTION)) $criteria->add(InfoTourDetailByLanguagePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE)) $criteria->add(InfoTourDetailByLanguagePeer::SCHEDULE_SIMPLE, $this->schedule_simple);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::NOTE)) $criteria->add(InfoTourDetailByLanguagePeer::NOTE, $this->note);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::POLICY_ON_PRICES)) $criteria->add(InfoTourDetailByLanguagePeer::POLICY_ON_PRICES, $this->policy_on_prices);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR)) $criteria->add(InfoTourDetailByLanguagePeer::CANCELLATION_POLICY_TOUR, $this->cancellation_policy_tour);
		if ($this->isColumnModified(InfoTourDetailByLanguagePeer::OTHER_NOTE)) $criteria->add(InfoTourDetailByLanguagePeer::OTHER_NOTE, $this->other_note);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(InfoTourDetailByLanguagePeer::DATABASE_NAME);

		$criteria->add(InfoTourDetailByLanguagePeer::ID, $this->id);

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

		$copyObj->setTypeLanguageId($this->type_language_id);

		$copyObj->setTourDetailId($this->tour_detail_id);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setScheduleSimple($this->schedule_simple);

		$copyObj->setNote($this->note);

		$copyObj->setPolicyOnPrices($this->policy_on_prices);

		$copyObj->setCancellationPolicyTour($this->cancellation_policy_tour);

		$copyObj->setOtherNote($this->other_note);


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
			self::$peer = new InfoTourDetailByLanguagePeer();
		}
		return self::$peer;
	}

	
	public function setTypeLanguage($v)
	{


		if ($v === null) {
			$this->setTypeLanguageId('1');
		} else {
			$this->setTypeLanguageId($v->getId());
		}


		$this->aTypeLanguage = $v;
	}


	
	static $TypeLanguage = array();
	
	public function getTypeLanguage($con = null)
	{
		if ($this->aTypeLanguage === null && ($this->type_language_id !== null)) {
						if(!isset(self::$TypeLanguage[$this->type_language_id])){
				self::$TypeLanguage[$this->type_language_id] = TypeLanguagePeer::retrieveByPK($this->type_language_id, $con);
			}
			$this->aTypeLanguage = self::$TypeLanguage[$this->type_language_id];

			
		}
		return $this->aTypeLanguage;
	}

	
	public function setTourDetail($v)
	{


		if ($v === null) {
			$this->setTourDetailId('1');
		} else {
			$this->setTourDetailId($v->getId());
		}


		$this->aTourDetail = $v;
	}


	
	static $TourDetail = array();
	
	public function getTourDetail($con = null)
	{
		if ($this->aTourDetail === null && ($this->tour_detail_id !== null)) {
						if(!isset(self::$TourDetail[$this->tour_detail_id])){
				self::$TourDetail[$this->tour_detail_id] = TourDetailPeer::retrieveByPK($this->tour_detail_id, $con);
			}
			$this->aTourDetail = self::$TourDetail[$this->tour_detail_id];

			
		}
		return $this->aTourDetail;
	}

} 