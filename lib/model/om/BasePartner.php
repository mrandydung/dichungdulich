<?php


abstract class BasePartner extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $type_partner;


	
	protected $name;


	
	protected $name_en;


	
	protected $link;


	
	protected $logo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $collImagesSlides;

	
	protected $lastImagesSlideCriteria = null;

	
	protected $collSettingSites;

	
	protected $lastSettingSiteCriteria = null;

	
	protected $collDichungUsers;

	
	protected $lastDichungUserCriteria = null;

	
	protected $collHusers;

	
	protected $lastHuserCriteria = null;

	
	protected $collTourDetails;

	
	protected $lastTourDetailCriteria = null;

	
	protected $collBookingTours;

	
	protected $lastBookingTourCriteria = null;

	
	protected $collHomeDiemDenItemPartners;

	
	protected $lastHomeDiemDenItemPartnerCriteria = null;

	
	protected $collRowPageFooters;

	
	protected $lastRowPageFooterCriteria = null;

	
	protected $collPageFooters;

	
	protected $lastPageFooterCriteria = null;

	
	protected $collContactFooters;

	
	protected $lastContactFooterCriteria = null;

	
	protected $collTripAcquirementss;

	
	protected $lastTripAcquirementsCriteria = null;

	
	protected $collUserRegisterAcceptEmails;

	
	protected $lastUserRegisterAcceptEmailCriteria = null;

	
	protected $collConfigSocialNetworks;

	
	protected $lastConfigSocialNetworkCriteria = null;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getTypePartner()
	{

        return $this->type_partner;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getLink()
	{

        return $this->link;
	}

	
	public function getLogo()
	{

        return $this->logo;
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
			$this->modifiedColumns[] = PartnerPeer::ID;
		}

	} 
	
	public function setTypePartner($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->type_partner !== $v) {
			$this->type_partner = $v;
			$this->modifiedColumns[] = PartnerPeer::TYPE_PARTNER;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = PartnerPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = PartnerPeer::NAME_EN;
		}

	} 
	
	public function setLink($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link !== $v) {
			$this->link = $v;
			$this->modifiedColumns[] = PartnerPeer::LINK;
		}

	} 
	
	public function setLogo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->logo !== $v) {
			$this->logo = $v;
			$this->modifiedColumns[] = PartnerPeer::LOGO;
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
			$this->modifiedColumns[] = PartnerPeer::CREATED_AT;
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
			$this->modifiedColumns[] = PartnerPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->type_partner = $rs->getString($startcol + 1);

			$this->name = $rs->getString($startcol + 2);

			$this->name_en = $rs->getString($startcol + 3);

			$this->link = $rs->getString($startcol + 4);

			$this->logo = $rs->getString($startcol + 5);

			$this->created_at = $rs->getTimestamp($startcol + 6, null);

			$this->updated_at = $rs->getTimestamp($startcol + 7, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 8; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Partner object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PartnerPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PartnerPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(PartnerPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(PartnerPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PartnerPeer::DATABASE_NAME);
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
					$pk = PartnerPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PartnerPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collImagesSlides !== null) {
				foreach($this->collImagesSlides as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collSettingSites !== null) {
				foreach($this->collSettingSites as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDichungUsers !== null) {
				foreach($this->collDichungUsers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHusers !== null) {
				foreach($this->collHusers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTourDetails !== null) {
				foreach($this->collTourDetails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBookingTours !== null) {
				foreach($this->collBookingTours as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collHomeDiemDenItemPartners !== null) {
				foreach($this->collHomeDiemDenItemPartners as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collRowPageFooters !== null) {
				foreach($this->collRowPageFooters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPageFooters !== null) {
				foreach($this->collPageFooters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collContactFooters !== null) {
				foreach($this->collContactFooters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collTripAcquirementss !== null) {
				foreach($this->collTripAcquirementss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserRegisterAcceptEmails !== null) {
				foreach($this->collUserRegisterAcceptEmails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collConfigSocialNetworks !== null) {
				foreach($this->collConfigSocialNetworks as $referrerFK) {
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


			if (($retval = PartnerPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collImagesSlides !== null) {
					foreach($this->collImagesSlides as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collSettingSites !== null) {
					foreach($this->collSettingSites as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDichungUsers !== null) {
					foreach($this->collDichungUsers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHusers !== null) {
					foreach($this->collHusers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTourDetails !== null) {
					foreach($this->collTourDetails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBookingTours !== null) {
					foreach($this->collBookingTours as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collHomeDiemDenItemPartners !== null) {
					foreach($this->collHomeDiemDenItemPartners as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collRowPageFooters !== null) {
					foreach($this->collRowPageFooters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPageFooters !== null) {
					foreach($this->collPageFooters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collContactFooters !== null) {
					foreach($this->collContactFooters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collTripAcquirementss !== null) {
					foreach($this->collTripAcquirementss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserRegisterAcceptEmails !== null) {
					foreach($this->collUserRegisterAcceptEmails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collConfigSocialNetworks !== null) {
					foreach($this->collConfigSocialNetworks as $referrerFK) {
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
		$pos = PartnerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getTypePartner();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getNameEn();
				break;
			case 4:
				return $this->getLink();
				break;
			case 5:
				return $this->getLogo();
				break;
			case 6:
				return $this->getCreatedAt();
				break;
			case 7:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PartnerPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getTypePartner(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getNameEn(),
			$keys[4] => $this->getLink(),
			$keys[5] => $this->getLogo(),
			$keys[6] => $this->getCreatedAt(),
			$keys[7] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PartnerPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setTypePartner($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setNameEn($value);
				break;
			case 4:
				$this->setLink($value);
				break;
			case 5:
				$this->setLogo($value);
				break;
			case 6:
				$this->setCreatedAt($value);
				break;
			case 7:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PartnerPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setTypePartner($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNameEn($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLink($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLogo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PartnerPeer::DATABASE_NAME);

		if ($this->isColumnModified(PartnerPeer::ID)) $criteria->add(PartnerPeer::ID, $this->id);
		if ($this->isColumnModified(PartnerPeer::TYPE_PARTNER)) $criteria->add(PartnerPeer::TYPE_PARTNER, $this->type_partner);
		if ($this->isColumnModified(PartnerPeer::NAME)) $criteria->add(PartnerPeer::NAME, $this->name);
		if ($this->isColumnModified(PartnerPeer::NAME_EN)) $criteria->add(PartnerPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(PartnerPeer::LINK)) $criteria->add(PartnerPeer::LINK, $this->link);
		if ($this->isColumnModified(PartnerPeer::LOGO)) $criteria->add(PartnerPeer::LOGO, $this->logo);
		if ($this->isColumnModified(PartnerPeer::CREATED_AT)) $criteria->add(PartnerPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(PartnerPeer::UPDATED_AT)) $criteria->add(PartnerPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PartnerPeer::DATABASE_NAME);

		$criteria->add(PartnerPeer::ID, $this->id);

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

		$copyObj->setTypePartner($this->type_partner);

		$copyObj->setName($this->name);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setLink($this->link);

		$copyObj->setLogo($this->logo);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getImagesSlides() as $relObj) {
				$copyObj->addImagesSlide($relObj->copy($deepCopy));
			}

			foreach($this->getSettingSites() as $relObj) {
				$copyObj->addSettingSite($relObj->copy($deepCopy));
			}

			foreach($this->getDichungUsers() as $relObj) {
				$copyObj->addDichungUser($relObj->copy($deepCopy));
			}

			foreach($this->getHusers() as $relObj) {
				$copyObj->addHuser($relObj->copy($deepCopy));
			}

			foreach($this->getTourDetails() as $relObj) {
				$copyObj->addTourDetail($relObj->copy($deepCopy));
			}

			foreach($this->getBookingTours() as $relObj) {
				$copyObj->addBookingTour($relObj->copy($deepCopy));
			}

			foreach($this->getHomeDiemDenItemPartners() as $relObj) {
				$copyObj->addHomeDiemDenItemPartner($relObj->copy($deepCopy));
			}

			foreach($this->getRowPageFooters() as $relObj) {
				$copyObj->addRowPageFooter($relObj->copy($deepCopy));
			}

			foreach($this->getPageFooters() as $relObj) {
				$copyObj->addPageFooter($relObj->copy($deepCopy));
			}

			foreach($this->getContactFooters() as $relObj) {
				$copyObj->addContactFooter($relObj->copy($deepCopy));
			}

			foreach($this->getTripAcquirementss() as $relObj) {
				$copyObj->addTripAcquirements($relObj->copy($deepCopy));
			}

			foreach($this->getUserRegisterAcceptEmails() as $relObj) {
				$copyObj->addUserRegisterAcceptEmail($relObj->copy($deepCopy));
			}

			foreach($this->getConfigSocialNetworks() as $relObj) {
				$copyObj->addConfigSocialNetwork($relObj->copy($deepCopy));
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
			self::$peer = new PartnerPeer();
		}
		return self::$peer;
	}

	
	public function initImagesSlides()
	{
		if ($this->collImagesSlides === null) {
			$this->collImagesSlides = array();
		}
	}

	
	public function getImagesSlides($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collImagesSlides === null) {
			if ($this->isNew()) {
			   $this->collImagesSlides = array();
			} else {

				$criteria->add(ImagesSlidePeer::PARTNER_ID, $this->getId());

				ImagesSlidePeer::addSelectColumns($criteria);
				$this->collImagesSlides = ImagesSlidePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ImagesSlidePeer::PARTNER_ID, $this->getId());

				ImagesSlidePeer::addSelectColumns($criteria);
				if (!isset($this->lastImagesSlideCriteria) || !$this->lastImagesSlideCriteria->equals($criteria)) {
					$this->collImagesSlides = ImagesSlidePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastImagesSlideCriteria = $criteria;
		return $this->collImagesSlides;
	}

	
	public function countImagesSlides($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ImagesSlidePeer::PARTNER_ID, $this->getId());

		return ImagesSlidePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addImagesSlide(ImagesSlide $l)
	{
		$this->collImagesSlides[] = $l;
		$l->setPartner($this);
	}

	
	public function initSettingSites()
	{
		if ($this->collSettingSites === null) {
			$this->collSettingSites = array();
		}
	}

	
	public function getSettingSites($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collSettingSites === null) {
			if ($this->isNew()) {
			   $this->collSettingSites = array();
			} else {

				$criteria->add(SettingSitePeer::PARTNER_ID, $this->getId());

				SettingSitePeer::addSelectColumns($criteria);
				$this->collSettingSites = SettingSitePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(SettingSitePeer::PARTNER_ID, $this->getId());

				SettingSitePeer::addSelectColumns($criteria);
				if (!isset($this->lastSettingSiteCriteria) || !$this->lastSettingSiteCriteria->equals($criteria)) {
					$this->collSettingSites = SettingSitePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastSettingSiteCriteria = $criteria;
		return $this->collSettingSites;
	}

	
	public function countSettingSites($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(SettingSitePeer::PARTNER_ID, $this->getId());

		return SettingSitePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addSettingSite(SettingSite $l)
	{
		$this->collSettingSites[] = $l;
		$l->setPartner($this);
	}

	
	public function initDichungUsers()
	{
		if ($this->collDichungUsers === null) {
			$this->collDichungUsers = array();
		}
	}

	
	public function getDichungUsers($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDichungUsers === null) {
			if ($this->isNew()) {
			   $this->collDichungUsers = array();
			} else {

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				DichungUserPeer::addSelectColumns($criteria);
				$this->collDichungUsers = DichungUserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				DichungUserPeer::addSelectColumns($criteria);
				if (!isset($this->lastDichungUserCriteria) || !$this->lastDichungUserCriteria->equals($criteria)) {
					$this->collDichungUsers = DichungUserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastDichungUserCriteria = $criteria;
		return $this->collDichungUsers;
	}

	
	public function countDichungUsers($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

		return DichungUserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addDichungUser(DichungUser $l)
	{
		$this->collDichungUsers[] = $l;
		$l->setPartner($this);
	}


	
	public function getDichungUsersJoinUserType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDichungUsers === null) {
			if ($this->isNew()) {
				$this->collDichungUsers = array();
			} else {

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				$this->collDichungUsers = DichungUserPeer::doSelectJoinUserType($criteria, $con);
			}
		} else {
									
			$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastDichungUserCriteria) || !$this->lastDichungUserCriteria->equals($criteria)) {
				$this->collDichungUsers = DichungUserPeer::doSelectJoinUserType($criteria, $con);
			}
		}
		$this->lastDichungUserCriteria = $criteria;

		return $this->collDichungUsers;
	}


	
	public function getDichungUsersJoinJob($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDichungUsers === null) {
			if ($this->isNew()) {
				$this->collDichungUsers = array();
			} else {

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				$this->collDichungUsers = DichungUserPeer::doSelectJoinJob($criteria, $con);
			}
		} else {
									
			$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastDichungUserCriteria) || !$this->lastDichungUserCriteria->equals($criteria)) {
				$this->collDichungUsers = DichungUserPeer::doSelectJoinJob($criteria, $con);
			}
		}
		$this->lastDichungUserCriteria = $criteria;

		return $this->collDichungUsers;
	}


	
	public function getDichungUsersJoinOldRange($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDichungUsers === null) {
			if ($this->isNew()) {
				$this->collDichungUsers = array();
			} else {

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				$this->collDichungUsers = DichungUserPeer::doSelectJoinOldRange($criteria, $con);
			}
		} else {
									
			$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastDichungUserCriteria) || !$this->lastDichungUserCriteria->equals($criteria)) {
				$this->collDichungUsers = DichungUserPeer::doSelectJoinOldRange($criteria, $con);
			}
		}
		$this->lastDichungUserCriteria = $criteria;

		return $this->collDichungUsers;
	}


	
	public function getDichungUsersJoinPointLevel($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collDichungUsers === null) {
			if ($this->isNew()) {
				$this->collDichungUsers = array();
			} else {

				$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

				$this->collDichungUsers = DichungUserPeer::doSelectJoinPointLevel($criteria, $con);
			}
		} else {
									
			$criteria->add(DichungUserPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastDichungUserCriteria) || !$this->lastDichungUserCriteria->equals($criteria)) {
				$this->collDichungUsers = DichungUserPeer::doSelectJoinPointLevel($criteria, $con);
			}
		}
		$this->lastDichungUserCriteria = $criteria;

		return $this->collDichungUsers;
	}

	
	public function initHusers()
	{
		if ($this->collHusers === null) {
			$this->collHusers = array();
		}
	}

	
	public function getHusers($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHusers === null) {
			if ($this->isNew()) {
			   $this->collHusers = array();
			} else {

				$criteria->add(HuserPeer::PARTNER_ID, $this->getId());

				HuserPeer::addSelectColumns($criteria);
				$this->collHusers = HuserPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HuserPeer::PARTNER_ID, $this->getId());

				HuserPeer::addSelectColumns($criteria);
				if (!isset($this->lastHuserCriteria) || !$this->lastHuserCriteria->equals($criteria)) {
					$this->collHusers = HuserPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHuserCriteria = $criteria;
		return $this->collHusers;
	}

	
	public function countHusers($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HuserPeer::PARTNER_ID, $this->getId());

		return HuserPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHuser(Huser $l)
	{
		$this->collHusers[] = $l;
		$l->setPartner($this);
	}

	
	public function initTourDetails()
	{
		if ($this->collTourDetails === null) {
			$this->collTourDetails = array();
		}
	}

	
	public function getTourDetails($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
			   $this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				TourDetailPeer::addSelectColumns($criteria);
				if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
					$this->collTourDetails = TourDetailPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTourDetailCriteria = $criteria;
		return $this->collTourDetails;
	}

	
	public function countTourDetails($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

		return TourDetailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTourDetail(TourDetail $l)
	{
		$this->collTourDetails[] = $l;
		$l->setPartner($this);
	}


	
	public function getTourDetailsJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinHomeDiemDenItem($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinCity($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinCity($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourTimeType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTourTimeCategoryDay($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTourTimeCategoryDay($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTypePricing($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricing($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinTypePricingService($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinTypePricingService($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}


	
	public function getTourDetailsJoinPaymentType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTourDetails === null) {
			if ($this->isNew()) {
				$this->collTourDetails = array();
			} else {

				$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		} else {
									
			$criteria->add(TourDetailPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTourDetailCriteria) || !$this->lastTourDetailCriteria->equals($criteria)) {
				$this->collTourDetails = TourDetailPeer::doSelectJoinPaymentType($criteria, $con);
			}
		}
		$this->lastTourDetailCriteria = $criteria;

		return $this->collTourDetails;
	}

	
	public function initBookingTours()
	{
		if ($this->collBookingTours === null) {
			$this->collBookingTours = array();
		}
	}

	
	public function getBookingTours($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
			   $this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				BookingTourPeer::addSelectColumns($criteria);
				if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
					$this->collBookingTours = BookingTourPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBookingTourCriteria = $criteria;
		return $this->collBookingTours;
	}

	
	public function countBookingTours($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

		return BookingTourPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBookingTour(BookingTour $l)
	{
		$this->collBookingTours[] = $l;
		$l->setPartner($this);
	}


	
	public function getBookingToursJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinTourDetail($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinTourDetail($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinPaymentBookingType($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinPaymentBookingType($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinPaymentBookingType($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinTransactionStatus($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinTransactionStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}


	
	public function getBookingToursJoinBookingStatus($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBookingTours === null) {
			if ($this->isNew()) {
				$this->collBookingTours = array();
			} else {

				$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		} else {
									
			$criteria->add(BookingTourPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastBookingTourCriteria) || !$this->lastBookingTourCriteria->equals($criteria)) {
				$this->collBookingTours = BookingTourPeer::doSelectJoinBookingStatus($criteria, $con);
			}
		}
		$this->lastBookingTourCriteria = $criteria;

		return $this->collBookingTours;
	}

	
	public function initHomeDiemDenItemPartners()
	{
		if ($this->collHomeDiemDenItemPartners === null) {
			$this->collHomeDiemDenItemPartners = array();
		}
	}

	
	public function getHomeDiemDenItemPartners($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
			   $this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

				HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

				HomeDiemDenItemPartnerPeer::addSelectColumns($criteria);
				if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
					$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;
		return $this->collHomeDiemDenItemPartners;
	}

	
	public function countHomeDiemDenItemPartners($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

		return HomeDiemDenItemPartnerPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addHomeDiemDenItemPartner(HomeDiemDenItemPartner $l)
	{
		$this->collHomeDiemDenItemPartners[] = $l;
		$l->setPartner($this);
	}


	
	public function getHomeDiemDenItemPartnersJoinRegion($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinRegion($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}


	
	public function getHomeDiemDenItemPartnersJoinArea($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinArea($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinArea($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}


	
	public function getHomeDiemDenItemPartnersJoinCity($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collHomeDiemDenItemPartners === null) {
			if ($this->isNew()) {
				$this->collHomeDiemDenItemPartners = array();
			} else {

				$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinCity($criteria, $con);
			}
		} else {
									
			$criteria->add(HomeDiemDenItemPartnerPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastHomeDiemDenItemPartnerCriteria) || !$this->lastHomeDiemDenItemPartnerCriteria->equals($criteria)) {
				$this->collHomeDiemDenItemPartners = HomeDiemDenItemPartnerPeer::doSelectJoinCity($criteria, $con);
			}
		}
		$this->lastHomeDiemDenItemPartnerCriteria = $criteria;

		return $this->collHomeDiemDenItemPartners;
	}

	
	public function initRowPageFooters()
	{
		if ($this->collRowPageFooters === null) {
			$this->collRowPageFooters = array();
		}
	}

	
	public function getRowPageFooters($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collRowPageFooters === null) {
			if ($this->isNew()) {
			   $this->collRowPageFooters = array();
			} else {

				$criteria->add(RowPageFooterPeer::PARTNER_ID, $this->getId());

				RowPageFooterPeer::addSelectColumns($criteria);
				$this->collRowPageFooters = RowPageFooterPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(RowPageFooterPeer::PARTNER_ID, $this->getId());

				RowPageFooterPeer::addSelectColumns($criteria);
				if (!isset($this->lastRowPageFooterCriteria) || !$this->lastRowPageFooterCriteria->equals($criteria)) {
					$this->collRowPageFooters = RowPageFooterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastRowPageFooterCriteria = $criteria;
		return $this->collRowPageFooters;
	}

	
	public function countRowPageFooters($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(RowPageFooterPeer::PARTNER_ID, $this->getId());

		return RowPageFooterPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addRowPageFooter(RowPageFooter $l)
	{
		$this->collRowPageFooters[] = $l;
		$l->setPartner($this);
	}

	
	public function initPageFooters()
	{
		if ($this->collPageFooters === null) {
			$this->collPageFooters = array();
		}
	}

	
	public function getPageFooters($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPageFooters === null) {
			if ($this->isNew()) {
			   $this->collPageFooters = array();
			} else {

				$criteria->add(PageFooterPeer::PARTNER_ID, $this->getId());

				PageFooterPeer::addSelectColumns($criteria);
				$this->collPageFooters = PageFooterPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(PageFooterPeer::PARTNER_ID, $this->getId());

				PageFooterPeer::addSelectColumns($criteria);
				if (!isset($this->lastPageFooterCriteria) || !$this->lastPageFooterCriteria->equals($criteria)) {
					$this->collPageFooters = PageFooterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastPageFooterCriteria = $criteria;
		return $this->collPageFooters;
	}

	
	public function countPageFooters($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(PageFooterPeer::PARTNER_ID, $this->getId());

		return PageFooterPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addPageFooter(PageFooter $l)
	{
		$this->collPageFooters[] = $l;
		$l->setPartner($this);
	}


	
	public function getPageFootersJoinRowPageFooter($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collPageFooters === null) {
			if ($this->isNew()) {
				$this->collPageFooters = array();
			} else {

				$criteria->add(PageFooterPeer::PARTNER_ID, $this->getId());

				$this->collPageFooters = PageFooterPeer::doSelectJoinRowPageFooter($criteria, $con);
			}
		} else {
									
			$criteria->add(PageFooterPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastPageFooterCriteria) || !$this->lastPageFooterCriteria->equals($criteria)) {
				$this->collPageFooters = PageFooterPeer::doSelectJoinRowPageFooter($criteria, $con);
			}
		}
		$this->lastPageFooterCriteria = $criteria;

		return $this->collPageFooters;
	}

	
	public function initContactFooters()
	{
		if ($this->collContactFooters === null) {
			$this->collContactFooters = array();
		}
	}

	
	public function getContactFooters($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collContactFooters === null) {
			if ($this->isNew()) {
			   $this->collContactFooters = array();
			} else {

				$criteria->add(ContactFooterPeer::PARTNER_ID, $this->getId());

				ContactFooterPeer::addSelectColumns($criteria);
				$this->collContactFooters = ContactFooterPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ContactFooterPeer::PARTNER_ID, $this->getId());

				ContactFooterPeer::addSelectColumns($criteria);
				if (!isset($this->lastContactFooterCriteria) || !$this->lastContactFooterCriteria->equals($criteria)) {
					$this->collContactFooters = ContactFooterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastContactFooterCriteria = $criteria;
		return $this->collContactFooters;
	}

	
	public function countContactFooters($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ContactFooterPeer::PARTNER_ID, $this->getId());

		return ContactFooterPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addContactFooter(ContactFooter $l)
	{
		$this->collContactFooters[] = $l;
		$l->setPartner($this);
	}

	
	public function initTripAcquirementss()
	{
		if ($this->collTripAcquirementss === null) {
			$this->collTripAcquirementss = array();
		}
	}

	
	public function getTripAcquirementss($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
			   $this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

				TripAcquirementsPeer::addSelectColumns($criteria);
				if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
					$this->collTripAcquirementss = TripAcquirementsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;
		return $this->collTripAcquirementss;
	}

	
	public function countTripAcquirementss($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

		return TripAcquirementsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripAcquirements(TripAcquirements $l)
	{
		$this->collTripAcquirementss[] = $l;
		$l->setPartner($this);
	}


	
	public function getTripAcquirementssJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}


	
	public function getTripAcquirementssJoinTypeUpload($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementss === null) {
			if ($this->isNew()) {
				$this->collTripAcquirementss = array();
			} else {

				$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinTypeUpload($criteria, $con);
			}
		} else {
									
			$criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->getId());

			if (!isset($this->lastTripAcquirementsCriteria) || !$this->lastTripAcquirementsCriteria->equals($criteria)) {
				$this->collTripAcquirementss = TripAcquirementsPeer::doSelectJoinTypeUpload($criteria, $con);
			}
		}
		$this->lastTripAcquirementsCriteria = $criteria;

		return $this->collTripAcquirementss;
	}

	
	public function initUserRegisterAcceptEmails()
	{
		if ($this->collUserRegisterAcceptEmails === null) {
			$this->collUserRegisterAcceptEmails = array();
		}
	}

	
	public function getUserRegisterAcceptEmails($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collUserRegisterAcceptEmails === null) {
			if ($this->isNew()) {
			   $this->collUserRegisterAcceptEmails = array();
			} else {

				$criteria->add(UserRegisterAcceptEmailPeer::PARTNER_ID, $this->getId());

				UserRegisterAcceptEmailPeer::addSelectColumns($criteria);
				$this->collUserRegisterAcceptEmails = UserRegisterAcceptEmailPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(UserRegisterAcceptEmailPeer::PARTNER_ID, $this->getId());

				UserRegisterAcceptEmailPeer::addSelectColumns($criteria);
				if (!isset($this->lastUserRegisterAcceptEmailCriteria) || !$this->lastUserRegisterAcceptEmailCriteria->equals($criteria)) {
					$this->collUserRegisterAcceptEmails = UserRegisterAcceptEmailPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastUserRegisterAcceptEmailCriteria = $criteria;
		return $this->collUserRegisterAcceptEmails;
	}

	
	public function countUserRegisterAcceptEmails($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(UserRegisterAcceptEmailPeer::PARTNER_ID, $this->getId());

		return UserRegisterAcceptEmailPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addUserRegisterAcceptEmail(UserRegisterAcceptEmail $l)
	{
		$this->collUserRegisterAcceptEmails[] = $l;
		$l->setPartner($this);
	}

	
	public function initConfigSocialNetworks()
	{
		if ($this->collConfigSocialNetworks === null) {
			$this->collConfigSocialNetworks = array();
		}
	}

	
	public function getConfigSocialNetworks($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collConfigSocialNetworks === null) {
			if ($this->isNew()) {
			   $this->collConfigSocialNetworks = array();
			} else {

				$criteria->add(ConfigSocialNetworkPeer::PARTNER_ID, $this->getId());

				ConfigSocialNetworkPeer::addSelectColumns($criteria);
				$this->collConfigSocialNetworks = ConfigSocialNetworkPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(ConfigSocialNetworkPeer::PARTNER_ID, $this->getId());

				ConfigSocialNetworkPeer::addSelectColumns($criteria);
				if (!isset($this->lastConfigSocialNetworkCriteria) || !$this->lastConfigSocialNetworkCriteria->equals($criteria)) {
					$this->collConfigSocialNetworks = ConfigSocialNetworkPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastConfigSocialNetworkCriteria = $criteria;
		return $this->collConfigSocialNetworks;
	}

	
	public function countConfigSocialNetworks($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(ConfigSocialNetworkPeer::PARTNER_ID, $this->getId());

		return ConfigSocialNetworkPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addConfigSocialNetwork(ConfigSocialNetwork $l)
	{
		$this->collConfigSocialNetworks[] = $l;
		$l->setPartner($this);
	}

} 