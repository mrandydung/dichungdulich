<?php


abstract class BaseBlogMenuCategory extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $name;


	
	protected $name_en;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;

	
	protected $collBlogs;

	
	protected $lastBlogCriteria = null;

	
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
			$this->modifiedColumns[] = BlogMenuCategoryPeer::ID;
		}

	} 
	
	public function setName($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = BlogMenuCategoryPeer::NAME;
		}

	} 
	
	public function setNameEn($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->name_en !== $v) {
			$this->name_en = $v;
			$this->modifiedColumns[] = BlogMenuCategoryPeer::NAME_EN;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = BlogMenuCategoryPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = BlogMenuCategoryPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = BlogMenuCategoryPeer::IMG_SEO;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->name = $rs->getString($startcol + 1);

			$this->name_en = $rs->getString($startcol + 2);

			$this->title_seo = $rs->getString($startcol + 3);

			$this->description_seo = $rs->getString($startcol + 4);

			$this->img_seo = $rs->getString($startcol + 5);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 6; 
		} catch (Exception $e) {
			throw new PropelException("Error populating BlogMenuCategory object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(BlogMenuCategoryPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			BlogMenuCategoryPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(BlogMenuCategoryPeer::DATABASE_NAME);
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
					$pk = BlogMenuCategoryPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += BlogMenuCategoryPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collBlogs !== null) {
				foreach($this->collBlogs as $referrerFK) {
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


			if (($retval = BlogMenuCategoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collBlogs !== null) {
					foreach($this->collBlogs as $referrerFK) {
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
		$pos = BlogMenuCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getTitleSeo();
				break;
			case 4:
				return $this->getDescriptionSeo();
				break;
			case 5:
				return $this->getImgSeo();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogMenuCategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getNameEn(),
			$keys[3] => $this->getTitleSeo(),
			$keys[4] => $this->getDescriptionSeo(),
			$keys[5] => $this->getImgSeo(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = BlogMenuCategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setTitleSeo($value);
				break;
			case 4:
				$this->setDescriptionSeo($value);
				break;
			case 5:
				$this->setImgSeo($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = BlogMenuCategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNameEn($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitleSeo($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDescriptionSeo($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setImgSeo($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(BlogMenuCategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(BlogMenuCategoryPeer::ID)) $criteria->add(BlogMenuCategoryPeer::ID, $this->id);
		if ($this->isColumnModified(BlogMenuCategoryPeer::NAME)) $criteria->add(BlogMenuCategoryPeer::NAME, $this->name);
		if ($this->isColumnModified(BlogMenuCategoryPeer::NAME_EN)) $criteria->add(BlogMenuCategoryPeer::NAME_EN, $this->name_en);
		if ($this->isColumnModified(BlogMenuCategoryPeer::TITLE_SEO)) $criteria->add(BlogMenuCategoryPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(BlogMenuCategoryPeer::DESCRIPTION_SEO)) $criteria->add(BlogMenuCategoryPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(BlogMenuCategoryPeer::IMG_SEO)) $criteria->add(BlogMenuCategoryPeer::IMG_SEO, $this->img_seo);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(BlogMenuCategoryPeer::DATABASE_NAME);

		$criteria->add(BlogMenuCategoryPeer::ID, $this->id);

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

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getBlogs() as $relObj) {
				$copyObj->addBlog($relObj->copy($deepCopy));
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
			self::$peer = new BlogMenuCategoryPeer();
		}
		return self::$peer;
	}

	
	public function initBlogs()
	{
		if ($this->collBlogs === null) {
			$this->collBlogs = array();
		}
	}

	
	public function getBlogs($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
			   $this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				$this->collBlogs = BlogPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->getId());

				BlogPeer::addSelectColumns($criteria);
				if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
					$this->collBlogs = BlogPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastBlogCriteria = $criteria;
		return $this->collBlogs;
	}

	
	public function countBlogs($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->getId());

		return BlogPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addBlog(Blog $l)
	{
		$this->collBlogs[] = $l;
		$l->setBlogMenuCategory($this);
	}


	
	public function getBlogsJoinHomeDiemDenItem($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collBlogs === null) {
			if ($this->isNew()) {
				$this->collBlogs = array();
			} else {

				$criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->getId());

				$this->collBlogs = BlogPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		} else {
									
			$criteria->add(BlogPeer::BLOG_MENU_CATEGORY_ID, $this->getId());

			if (!isset($this->lastBlogCriteria) || !$this->lastBlogCriteria->equals($criteria)) {
				$this->collBlogs = BlogPeer::doSelectJoinHomeDiemDenItem($criteria, $con);
			}
		}
		$this->lastBlogCriteria = $criteria;

		return $this->collBlogs;
	}

} 