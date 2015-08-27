<?php


abstract class BasePageFooter extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $row_page_footer_id;


	
	protected $partner_id;


	
	protected $name;


	
	protected $name_en;


	
	protected $content;


	
	protected $content_en;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aRowPageFooter;

	
	protected $aPartner;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getRowPageFooterId()
	{

        return $this->row_page_footer_id;
	}

	
	public function getPartnerId()
	{

        return $this->partner_id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getContent()
	{

        return $this->content;
	}

	
	public function getContentEn()
	{

        return $this->content_en;
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
			$this->modifiedColumns[] = PageFooterPeer::ID;
		}

	} 
	
	public function setRowPageFooterId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->row_page_footer_id !== $v) {
			$this->row_page_footer_id = $v;
			$this->modifiedColumns[] = PageFooterPeer::ROW_PAGE_FOOTER_ID;
		}

		if ($this->aRowPageFooter !== null && $this->aRowPageFooter->getId() !== $v) {
			$this->aRowPageFooter = null;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = PageFooterPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = PageFooterPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = PageFooterPeer::NAME_EN;
		}

	} 
	
	public function setContent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = PageFooterPeer::CONTENT;
		}

	} 
	
	public function setContentEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content_en !== $v) {
			$this->content_en = $v;
			$this->modifiedColumns[] = PageFooterPeer::CONTENT_EN;
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
			$this->modifiedColumns[] = PageFooterPeer::CREATED_AT;
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
			$this->modifiedColumns[] = PageFooterPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->row_page_footer_id = $rs->getInt($startcol + 1);

			$this->partner_id = $rs->getInt($startcol + 2);

			$this->name = $rs->getString($startcol + 3);

			$this->name_en = $rs->getString($startcol + 4);

			$this->content = $rs->getString($startcol + 5);

			$this->content_en = $rs->getString($startcol + 6);

			$this->created_at = $rs->getTimestamp($startcol + 7, null);

			$this->updated_at = $rs->getTimestamp($startcol + 8, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 9; 
		} catch (Exception $e) {
			throw new PropelException("Error populating PageFooter object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PageFooterPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			PageFooterPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(PageFooterPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(PageFooterPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(PageFooterPeer::DATABASE_NAME);
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


												
			if ($this->aRowPageFooter !== null) {
				if ($this->aRowPageFooter->isModified()) {
					$affectedRows += $this->aRowPageFooter->save($con);
				}
				$this->setRowPageFooter($this->aRowPageFooter);
			}

			if ($this->aPartner !== null) {
				if ($this->aPartner->isModified()) {
					$affectedRows += $this->aPartner->save($con);
				}
				$this->setPartner($this->aPartner);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = PageFooterPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += PageFooterPeer::doUpdate($this, $con);
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


												
			if ($this->aRowPageFooter !== null) {
				if (!$this->aRowPageFooter->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aRowPageFooter->getValidationFailures());
				}
			}

			if ($this->aPartner !== null) {
				if (!$this->aPartner->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPartner->getValidationFailures());
				}
			}


			if (($retval = PageFooterPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PageFooterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getRowPageFooterId();
				break;
			case 2:
				return $this->getPartnerId();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getNameEn();
				break;
			case 5:
				return $this->getContent();
				break;
			case 6:
				return $this->getContentEn();
				break;
			case 7:
				return $this->getCreatedAt();
				break;
			case 8:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PageFooterPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getRowPageFooterId(),
			$keys[2] => $this->getPartnerId(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getNameEn(),
			$keys[5] => $this->getContent(),
			$keys[6] => $this->getContentEn(),
			$keys[7] => $this->getCreatedAt(),
			$keys[8] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = PageFooterPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setRowPageFooterId($value);
				break;
			case 2:
				$this->setPartnerId($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setNameEn($value);
				break;
			case 5:
				$this->setContent($value);
				break;
			case 6:
				$this->setContentEn($value);
				break;
			case 7:
				$this->setCreatedAt($value);
				break;
			case 8:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = PageFooterPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setRowPageFooterId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPartnerId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNameEn($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setContent($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setContentEn($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCreatedAt($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUpdatedAt($arr[$keys[8]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(PageFooterPeer::DATABASE_NAME);

		if ($this->isColumnModified(PageFooterPeer::ID)) $criteria->add(PageFooterPeer::ID, $this->id);
		if ($this->isColumnModified(PageFooterPeer::ROW_PAGE_FOOTER_ID)) $criteria->add(PageFooterPeer::ROW_PAGE_FOOTER_ID, $this->row_page_footer_id);
		if ($this->isColumnModified(PageFooterPeer::PARTNER_ID)) $criteria->add(PageFooterPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(PageFooterPeer::NAME)) $criteria->add(PageFooterPeer::NAME, $this->name);
		if ($this->isColumnModified(PageFooterPeer::NAME_EN)) $criteria->add(PageFooterPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(PageFooterPeer::CONTENT)) $criteria->add(PageFooterPeer::CONTENT, $this->content);
		if ($this->isColumnModified(PageFooterPeer::CONTENT_EN)) $criteria->add(PageFooterPeer::CONTENT_EN, $this->content_en);
		if ($this->isColumnModified(PageFooterPeer::CREATED_AT)) $criteria->add(PageFooterPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(PageFooterPeer::UPDATED_AT)) $criteria->add(PageFooterPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(PageFooterPeer::DATABASE_NAME);

		$criteria->add(PageFooterPeer::ID, $this->id);

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

		$copyObj->setRowPageFooterId($this->row_page_footer_id);

		$copyObj->setPartnerId($this->partner_id);

		$copyObj->setName($this->name);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setContent($this->content);

		$copyObj->setContentEn($this->content_en);

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
			self::$peer = new PageFooterPeer();
		}
		return self::$peer;
	}

	
	public function setRowPageFooter($v)
	{


		if ($v === null) {
			$this->setRowPageFooterId(NULL);
		} else {
			$this->setRowPageFooterId($v->getId());
		}


		$this->aRowPageFooter = $v;
	}


	
	static $RowPageFooter = array();
	
	public function getRowPageFooter($con = null)
	{
		if ($this->aRowPageFooter === null && ($this->row_page_footer_id !== null)) {
						if(!isset(self::$RowPageFooter[$this->row_page_footer_id])){
				self::$RowPageFooter[$this->row_page_footer_id] = RowPageFooterPeer::retrieveByPK($this->row_page_footer_id, $con);
			}
			$this->aRowPageFooter = self::$RowPageFooter[$this->row_page_footer_id];

			
		}
		return $this->aRowPageFooter;
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