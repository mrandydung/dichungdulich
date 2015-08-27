<?php


abstract class BaseQuestionGroupCategory extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;


	
	protected $images_thumb;


	
	protected $images;


	
	protected $slogen;


	
	protected $priority = 10;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getName()
	{

        return $this->name;
	}

	
	public function getNameEn()
	{

        return $this->name_en;
	}

	
	public function getImagesThumb()
	{

        return $this->images_thumb;
	}

	
	public function getImages()
	{

        return $this->images;
	}

	
	public function getSlogen()
	{

        return $this->slogen;
	}

	
	public function getPriority()
	{

        return $this->priority;
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

	
	public function setId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::NAME_EN;
		}

	} 
	
	public function setImagesThumb($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images_thumb !== $v) {
			$this->images_thumb = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::IMAGES_THUMB;
		}

	} 
	
	public function setImages($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images !== $v) {
			$this->images = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::IMAGES;
		}

	} 
	
	public function setSlogen($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->slogen !== $v) {
			$this->slogen = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::SLOGEN;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::PRIORITY;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = QuestionGroupCategoryPeer::IMG_SEO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->name_en = $rs->getString($startcol + 2);

			$this->images_thumb = $rs->getString($startcol + 3);

			$this->images = $rs->getString($startcol + 4);

			$this->slogen = $rs->getString($startcol + 5);

			$this->priority = $rs->getInt($startcol + 6);

			$this->title_seo = $rs->getString($startcol + 7);

			$this->description_seo = $rs->getString($startcol + 8);

			$this->img_seo = $rs->getString($startcol + 9);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 10; 
		} catch (Exception $e) {
			throw new PropelException("Error populating QuestionGroupCategory object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(QuestionGroupCategoryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			QuestionGroupCategoryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(QuestionGroupCategoryPeer::DATABASE_NAME);
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
					$pk = QuestionGroupCategoryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += QuestionGroupCategoryPeer::doUpdate($this, $con);
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


			if (($retval = QuestionGroupCategoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionGroupCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getName();
				break;
			case 2:
				return $this->getNameEn();
				break;
			case 3:
				return $this->getImagesThumb();
				break;
			case 4:
				return $this->getImages();
				break;
			case 5:
				return $this->getSlogen();
				break;
			case 6:
				return $this->getPriority();
				break;
			case 7:
				return $this->getTitleSeo();
				break;
			case 8:
				return $this->getDescriptionSeo();
				break;
			case 9:
				return $this->getImgSeo();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionGroupCategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
			$keys[3] => $this->getImagesThumb(),
			$keys[4] => $this->getImages(),
			$keys[5] => $this->getSlogen(),
			$keys[6] => $this->getPriority(),
			$keys[7] => $this->getTitleSeo(),
			$keys[8] => $this->getDescriptionSeo(),
			$keys[9] => $this->getImgSeo(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = QuestionGroupCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setName($value);
				break;
			case 2:
				$this->setNameEn($value);
				break;
			case 3:
				$this->setImagesThumb($value);
				break;
			case 4:
				$this->setImages($value);
				break;
			case 5:
				$this->setSlogen($value);
				break;
			case 6:
				$this->setPriority($value);
				break;
			case 7:
				$this->setTitleSeo($value);
				break;
			case 8:
				$this->setDescriptionSeo($value);
				break;
			case 9:
				$this->setImgSeo($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = QuestionGroupCategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setImagesThumb($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setImages($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSlogen($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setPriority($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTitleSeo($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDescriptionSeo($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setImgSeo($arr[$keys[9]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(QuestionGroupCategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(QuestionGroupCategoryPeer::ID)) $criteria->add(QuestionGroupCategoryPeer::ID, $this->id);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::NAME)) $criteria->add(QuestionGroupCategoryPeer::NAME, $this->name);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::NAME_EN)) $criteria->add(QuestionGroupCategoryPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::IMAGES_THUMB)) $criteria->add(QuestionGroupCategoryPeer::IMAGES_THUMB, $this->images_thumb);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::IMAGES)) $criteria->add(QuestionGroupCategoryPeer::IMAGES, $this->images);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::SLOGEN)) $criteria->add(QuestionGroupCategoryPeer::SLOGEN, $this->slogen);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::PRIORITY)) $criteria->add(QuestionGroupCategoryPeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::TITLE_SEO)) $criteria->add(QuestionGroupCategoryPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::DESCRIPTION_SEO)) $criteria->add(QuestionGroupCategoryPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(QuestionGroupCategoryPeer::IMG_SEO)) $criteria->add(QuestionGroupCategoryPeer::IMG_SEO, $this->img_seo);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(QuestionGroupCategoryPeer::DATABASE_NAME);

		$criteria->add(QuestionGroupCategoryPeer::ID, $this->id);

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

		$copyObj->setName($this->name);

		$copyObj->setNameEn($this->name_en);

		$copyObj->setImagesThumb($this->images_thumb);

		$copyObj->setImages($this->images);

		$copyObj->setSlogen($this->slogen);

		$copyObj->setPriority($this->priority);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);


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
			self::$peer = new QuestionGroupCategoryPeer();
		}
		return self::$peer;
	}

} 