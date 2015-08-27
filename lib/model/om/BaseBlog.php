<?php


abstract class BaseBlog extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $blog_menu_category_id;


	
	protected $home_diem_den_item_id;


	
	protected $title;


	
	protected $description;


	
	protected $detail;


	
	protected $ads_demo;


	
	protected $tag;


	
	protected $images_thumb;


	
	protected $date;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $set_highlight = false;


	
	protected $view = 0;


	
	protected $created_at;

	
	protected $aBlogMenuCategory;

	
	protected $aHomeDiemDenItem;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

	
	public function getId()
	{

        return $this->id;
	}

	
	public function getBlogMenuCategoryId()
	{

        return $this->blog_menu_category_id;
	}

	
	public function getHomeDiemDenItemId()
	{

        return $this->home_diem_den_item_id;
	}

	
	public function getTitle()
	{

        return $this->title;
	}

	
	public function getDescription()
	{

        return $this->description;
	}

	
	public function getDetail()
	{

        return $this->detail;
	}

	
	public function getAdsDemo()
	{

        return $this->ads_demo;
	}

	
	public function getTag()
	{

        return $this->tag;
	}

	
	public function getImagesThumb()
	{

        return $this->images_thumb;
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

	
	public function getSetHighlight()
	{

        return $this->set_highlight;
	}

	
	public function getView()
	{

        return $this->view;
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
			$this->modifiedColumns[] = BlogPeer::ID;
		}

	} 
	
	public function setBlogMenuCategoryId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->blog_menu_category_id !== $v) {
			$this->blog_menu_category_id = $v;
			$this->modifiedColumns[] = BlogPeer::BLOG_MENU_CATEGORY_ID;
		}

		if ($this->aBlogMenuCategory !== null && $this->aBlogMenuCategory->getId() !== $v) {
			$this->aBlogMenuCategory = null;
		}

	} 
	
	public function setHomeDiemDenItemId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->home_diem_den_item_id !== $v) {
			$this->home_diem_den_item_id = $v;
			$this->modifiedColumns[] = BlogPeer::HOME_DIEM_DEN_ITEM_ID;
		}

		if ($this->aHomeDiemDenItem !== null && $this->aHomeDiemDenItem->getId() !== $v) {
			$this->aHomeDiemDenItem = null;
		}

	} 
	
	public function setTitle($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = BlogPeer::TITLE;
		}

	} 
	
	public function setDescription($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = BlogPeer::DESCRIPTION;
		}

	} 
	
	public function setDetail($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->detail !== $v) {
			$this->detail = $v;
			$this->modifiedColumns[] = BlogPeer::DETAIL;
		}

	} 
	
	public function setAdsDemo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->ads_demo !== $v) {
			$this->ads_demo = $v;
			$this->modifiedColumns[] = BlogPeer::ADS_DEMO;
		}

	} 
	
	public function setTag($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->tag !== $v) {
			$this->tag = $v;
			$this->modifiedColumns[] = BlogPeer::TAG;
		}

	} 
	
	public function setImagesThumb($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images_thumb !== $v) {
			$this->images_thumb = $v;
			$this->modifiedColumns[] = BlogPeer::IMAGES_THUMB;
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
			$this->modifiedColumns[] = BlogPeer::DATE;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = BlogPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = BlogPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = BlogPeer::IMG_SEO;
		}

	} 
	
	public function setSetHighlight($v)
	{

		if ($this->set_highlight !== $v || $v === false) {
			$this->set_highlight = $v;
			$this->modifiedColumns[] = BlogPeer::SET_HIGHLIGHT;
		}

	} 
	
	public function setView($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->view !== $v || $v === 0) {
			$this->view = $v;
			$this->modifiedColumns[] = BlogPeer::VIEW;
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
			$this->modifiedColumns[] = BlogPeer::CREATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->blog_menu_category_id = $rs->getInt($startcol + 1);

			$this->home_diem_den_item_id = $rs->getInt($startcol + 2);

			$this->title = $rs->getString($startcol + 3);

			$this->description = $rs->getString($startcol + 4);

			$this->detail = $rs->getString($startcol + 5);

			$this->ads_demo = $rs->getString($startcol + 6);

			$this->tag = $rs->getString($startcol + 7);

			$this->images_thumb = $rs->getString($startcol + 8);

			$this->date = $rs->getTimestamp($startcol + 9, null);

			$this->title_seo = $rs->getString($startcol + 10);

			$this->description_seo = $rs->getString($startcol + 11);

			$this->img_seo = $rs->getString($startcol + 12);

			$this->set_highlight = $rs->getBoolean($startcol + 13);

			$this->view = $rs->getInt($startcol + 14);

			$this->created_at = $rs->getTimestamp($startcol + 15, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 16; 
		} catch (Exception $e) {
			throw new PropelException("Error populating Blog object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BlogPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BlogPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(BlogPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BlogPeer::DATABASE_NAME);
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


												
			if ($this->aBlogMenuCategory !== null) {
				if ($this->aBlogMenuCategory->isModified()) {
					$affectedRows += $this->aBlogMenuCategory->save($con);
				}
				$this->setBlogMenuCategory($this->aBlogMenuCategory);
			}

			if ($this->aHomeDiemDenItem !== null) {
				if ($this->aHomeDiemDenItem->isModified()) {
					$affectedRows += $this->aHomeDiemDenItem->save($con);
				}
				$this->setHomeDiemDenItem($this->aHomeDiemDenItem);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = BlogPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BlogPeer::doUpdate($this, $con);
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


												
			if ($this->aBlogMenuCategory !== null) {
				if (!$this->aBlogMenuCategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBlogMenuCategory->getValidationFailures());
				}
			}

			if ($this->aHomeDiemDenItem !== null) {
				if (!$this->aHomeDiemDenItem->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aHomeDiemDenItem->getValidationFailures());
				}
			}


			if (($retval = BlogPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BlogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getBlogMenuCategoryId();
				break;
			case 2:
				return $this->getHomeDiemDenItemId();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getDescription();
				break;
			case 5:
				return $this->getDetail();
				break;
			case 6:
				return $this->getAdsDemo();
				break;
			case 7:
				return $this->getTag();
				break;
			case 8:
				return $this->getImagesThumb();
				break;
			case 9:
				return $this->getDate();
				break;
			case 10:
				return $this->getTitleSeo();
				break;
			case 11:
				return $this->getDescriptionSeo();
				break;
			case 12:
				return $this->getImgSeo();
				break;
			case 13:
				return $this->getSetHighlight();
				break;
			case 14:
				return $this->getView();
				break;
			case 15:
				return $this->getCreatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getBlogMenuCategoryId(),
			$keys[2] => $this->getHomeDiemDenItemId(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getDescription(),
			$keys[5] => $this->getDetail(),
			$keys[6] => $this->getAdsDemo(),
			$keys[7] => $this->getTag(),
			$keys[8] => $this->getImagesThumb(),
			$keys[9] => $this->getDate(),
			$keys[10] => $this->getTitleSeo(),
			$keys[11] => $this->getDescriptionSeo(),
			$keys[12] => $this->getImgSeo(),
			$keys[13] => $this->getSetHighlight(),
			$keys[14] => $this->getView(),
			$keys[15] => $this->getCreatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BlogPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setBlogMenuCategoryId($value);
				break;
			case 2:
				$this->setHomeDiemDenItemId($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setDescription($value);
				break;
			case 5:
				$this->setDetail($value);
				break;
			case 6:
				$this->setAdsDemo($value);
				break;
			case 7:
				$this->setTag($value);
				break;
			case 8:
				$this->setImagesThumb($value);
				break;
			case 9:
				$this->setDate($value);
				break;
			case 10:
				$this->setTitleSeo($value);
				break;
			case 11:
				$this->setDescriptionSeo($value);
				break;
			case 12:
				$this->setImgSeo($value);
				break;
			case 13:
				$this->setSetHighlight($value);
				break;
			case 14:
				$this->setView($value);
				break;
			case 15:
				$this->setCreatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBlogMenuCategoryId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHomeDiemDenItemId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDetail($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAdsDemo($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTag($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setImagesThumb($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTitleSeo($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDescriptionSeo($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setImgSeo($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setSetHighlight($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setView($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCreatedAt($arr[$keys[15]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BlogPeer::DATABASE_NAME);

		if ($this->isColumnModified(BlogPeer::ID)) $criteria->add(BlogPeer::ID, $this->id);
		if ($this->isColumnModified(BlogPeer::BLOG_MENU_CATEGORY_ID)) $criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->blog_menu_category_id);
		if ($this->isColumnModified(BlogPeer::HOME_DIEM_DEN_ITEM_ID)) $criteria->add(BlogPeer::HOME_DIEM_DEN_ITEM_ID, $this->home_diem_den_item_id);
		if ($this->isColumnModified(BlogPeer::TITLE)) $criteria->add(BlogPeer::TITLE, $this->title);
		if ($this->isColumnModified(BlogPeer::DESCRIPTION)) $criteria->add(BlogPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(BlogPeer::DETAIL)) $criteria->add(BlogPeer::DETAIL, $this->detail);
		if ($this->isColumnModified(BlogPeer::ADS_DEMO)) $criteria->add(BlogPeer::ADS_DEMO, $this->ads_demo);
		if ($this->isColumnModified(BlogPeer::TAG)) $criteria->add(BlogPeer::TAG, $this->tag);
		if ($this->isColumnModified(BlogPeer::IMAGES_THUMB)) $criteria->add(BlogPeer::IMAGES_THUMB, $this->images_thumb);
		if ($this->isColumnModified(BlogPeer::DATE)) $criteria->add(BlogPeer::DATE, $this->date);
		if ($this->isColumnModified(BlogPeer::TITLE_SEO)) $criteria->add(BlogPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(BlogPeer::DESCRIPTION_SEO)) $criteria->add(BlogPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(BlogPeer::IMG_SEO)) $criteria->add(BlogPeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(BlogPeer::SET_HIGHLIGHT)) $criteria->add(BlogPeer::SET_HIGHLIGHT, $this->set_highlight);
		if ($this->isColumnModified(BlogPeer::VIEW)) $criteria->add(BlogPeer::VIEW, $this->view);
		if ($this->isColumnModified(BlogPeer::CREATED_AT)) $criteria->add(BlogPeer::CREATED_AT, $this->created_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BlogPeer::DATABASE_NAME);

		$criteria->add(BlogPeer::ID, $this->id);

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

		$copyObj->setBlogMenuCategoryId($this->blog_menu_category_id);

		$copyObj->setHomeDiemDenItemId($this->home_diem_den_item_id);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setDetail($this->detail);

		$copyObj->setAdsDemo($this->ads_demo);

		$copyObj->setTag($this->tag);

		$copyObj->setImagesThumb($this->images_thumb);

		$copyObj->setDate($this->date);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setSetHighlight($this->set_highlight);

		$copyObj->setView($this->view);

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
			self::$peer = new BlogPeer();
		}
		return self::$peer;
	}

	
	public function setBlogMenuCategory($v)
	{


		if ($v === null) {
			$this->setBlogMenuCategoryId(NULL);
		} else {
			$this->setBlogMenuCategoryId($v->getId());
		}


		$this->aBlogMenuCategory = $v;
	}


	
	static $BlogMenuCategory = array();
	
	public function getBlogMenuCategory($con = null)
	{
		if ($this->aBlogMenuCategory === null && ($this->blog_menu_category_id !== null)) {
						if(!isset(self::$BlogMenuCategory[$this->blog_menu_category_id])){
				self::$BlogMenuCategory[$this->blog_menu_category_id] = BlogMenuCategoryPeer::retrieveByPK($this->blog_menu_category_id, $con);
			}
			$this->aBlogMenuCategory = self::$BlogMenuCategory[$this->blog_menu_category_id];

			
		}
		return $this->aBlogMenuCategory;
	}

	
	public function setHomeDiemDenItem($v)
	{


		if ($v === null) {
			$this->setHomeDiemDenItemId(NULL);
		} else {
			$this->setHomeDiemDenItemId($v->getId());
		}


		$this->aHomeDiemDenItem = $v;
	}


	
	static $HomeDiemDenItem = array();
	
	public function getHomeDiemDenItem($con = null)
	{
		if ($this->aHomeDiemDenItem === null && ($this->home_diem_den_item_id !== null)) {
						if(!isset(self::$HomeDiemDenItem[$this->home_diem_den_item_id])){
				self::$HomeDiemDenItem[$this->home_diem_den_item_id] = HomeDiemDenItemPeer::retrieveByPK($this->home_diem_den_item_id, $con);
			}
			$this->aHomeDiemDenItem = self::$HomeDiemDenItem[$this->home_diem_den_item_id];

			
		}
		return $this->aHomeDiemDenItem;
	}

} 