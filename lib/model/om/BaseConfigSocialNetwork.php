<?php


abstract class BaseConfigSocialNetwork extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id;


	
	protected $link_facebook;


	
	protected $link_google;


	
	protected $link_instagram;


	
	protected $link_pinterest;


	
	protected $link_youtube;

	
	protected $aPartner;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getPartnerId()
	{

        return $this->partner_id;
	}

	
	public function getLinkFacebook()
	{

        return $this->link_facebook;
	}

	
	public function getLinkGoogle()
	{

        return $this->link_google;
	}

	
	public function getLinkInstagram()
	{

        return $this->link_instagram;
	}

	
	public function getLinkPinterest()
	{

        return $this->link_pinterest;
	}

	
	public function getLinkYoutube()
	{

        return $this->link_youtube;
	}

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setLinkFacebook($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link_facebook !== $v) {
			$this->link_facebook = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::LINK_FACEBOOK;
		}

	} 
	
	public function setLinkGoogle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link_google !== $v) {
			$this->link_google = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::LINK_GOOGLE;
		}

	} 
	
	public function setLinkInstagram($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link_instagram !== $v) {
			$this->link_instagram = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::LINK_INSTAGRAM;
		}

	} 
	
	public function setLinkPinterest($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link_pinterest !== $v) {
			$this->link_pinterest = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::LINK_PINTEREST;
		}

	} 
	
	public function setLinkYoutube($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->link_youtube !== $v) {
			$this->link_youtube = $v;
			$this->modifiedColumns[] = ConfigSocialNetworkPeer::LINK_YOUTUBE;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->link_facebook = $rs->getString($startcol + 2);

			$this->link_google = $rs->getString($startcol + 3);

			$this->link_instagram = $rs->getString($startcol + 4);

			$this->link_pinterest = $rs->getString($startcol + 5);

			$this->link_youtube = $rs->getString($startcol + 6);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 7; 
		} catch (Exception $e) {
			throw new PropelException("Error populating ConfigSocialNetwork object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(ConfigSocialNetworkPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			ConfigSocialNetworkPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(ConfigSocialNetworkPeer::DATABASE_NAME);
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
					$pk = ConfigSocialNetworkPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += ConfigSocialNetworkPeer::doUpdate($this, $con);
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


			if (($retval = ConfigSocialNetworkPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ConfigSocialNetworkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPartnerId();
				break;
			case 2:
				return $this->getLinkFacebook();
				break;
			case 3:
				return $this->getLinkGoogle();
				break;
			case 4:
				return $this->getLinkInstagram();
				break;
			case 5:
				return $this->getLinkPinterest();
				break;
			case 6:
				return $this->getLinkYoutube();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ConfigSocialNetworkPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getLinkFacebook(),
			$keys[3] => $this->getLinkGoogle(),
			$keys[4] => $this->getLinkInstagram(),
			$keys[5] => $this->getLinkPinterest(),
			$keys[6] => $this->getLinkYoutube(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = ConfigSocialNetworkPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPartnerId($value);
				break;
			case 2:
				$this->setLinkFacebook($value);
				break;
			case 3:
				$this->setLinkGoogle($value);
				break;
			case 4:
				$this->setLinkInstagram($value);
				break;
			case 5:
				$this->setLinkPinterest($value);
				break;
			case 6:
				$this->setLinkYoutube($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = ConfigSocialNetworkPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLinkFacebook($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setLinkGoogle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setLinkInstagram($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLinkPinterest($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLinkYoutube($arr[$keys[6]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(ConfigSocialNetworkPeer::DATABASE_NAME);

		if ($this->isColumnModified(ConfigSocialNetworkPeer::ID)) $criteria->add(ConfigSocialNetworkPeer::ID, $this->id);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::PARTNER_ID)) $criteria->add(ConfigSocialNetworkPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::LINK_FACEBOOK)) $criteria->add(ConfigSocialNetworkPeer::LINK_FACEBOOK, $this->link_facebook);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::LINK_GOOGLE)) $criteria->add(ConfigSocialNetworkPeer::LINK_GOOGLE, $this->link_google);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::LINK_INSTAGRAM)) $criteria->add(ConfigSocialNetworkPeer::LINK_INSTAGRAM, $this->link_instagram);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::LINK_PINTEREST)) $criteria->add(ConfigSocialNetworkPeer::LINK_PINTEREST, $this->link_pinterest);
		if ($this->isColumnModified(ConfigSocialNetworkPeer::LINK_YOUTUBE)) $criteria->add(ConfigSocialNetworkPeer::LINK_YOUTUBE, $this->link_youtube);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(ConfigSocialNetworkPeer::DATABASE_NAME);

		$criteria->add(ConfigSocialNetworkPeer::ID, $this->id);

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

		$copyObj->setPartnerId($this->partner_id);

		$copyObj->setLinkFacebook($this->link_facebook);

		$copyObj->setLinkGoogle($this->link_google);

		$copyObj->setLinkInstagram($this->link_instagram);

		$copyObj->setLinkPinterest($this->link_pinterest);

		$copyObj->setLinkYoutube($this->link_youtube);


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
			self::$peer = new ConfigSocialNetworkPeer();
		}
		return self::$peer;
	}

	
	public function setPartner($v)
	{


		if ($v === null) {
			$this->setPartnerId(NULL);
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