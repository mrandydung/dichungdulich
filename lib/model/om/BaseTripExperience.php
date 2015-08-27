<?php


abstract class BaseTripExperience extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $user_id;


	
	protected $title;


	
	protected $end;


	
	protected $coo_end;


	
	protected $lat_end;


	
	protected $lng_end;


	
	protected $type_upload_id;


	
	protected $images;


	
	protected $video_url;


	
	protected $content;


	
	protected $count_view = 0;


	
	protected $count_like = 0;


	
	protected $count_share = 0;


	
	protected $priority = 10;


	
	protected $experience_featured = false;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aDichungUser;

	
	protected $aTypeUpload;

	
	protected $collTripExperienceImgs;

	
	protected $lastTripExperienceImgCriteria = null;

	
	protected $collCommentExperiences;

	
	protected $lastCommentExperienceCriteria = null;

	
	protected $collCommentAcquirementss;

	
	protected $lastCommentAcquirementsCriteria = null;

	
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

	
	public function getEnd()
	{

        return $this->end;
	}

	
	public function getCooEnd()
	{

        return $this->coo_end;
	}

	
	public function getLatEnd()
	{

        return $this->lat_end;
	}

	
	public function getLngEnd()
	{

        return $this->lng_end;
	}

	
	public function getTypeUploadId()
	{

        return $this->type_upload_id;
	}

	
	public function getImages()
	{

        return $this->images;
	}

	
	public function getVideoUrl()
	{

        return $this->video_url;
	}

	
	public function getContent()
	{

        return $this->content;
	}

	
	public function getCountView()
	{

        return $this->count_view;
	}

	
	public function getCountLike()
	{

        return $this->count_like;
	}

	
	public function getCountShare()
	{

        return $this->count_share;
	}

	
	public function getPriority()
	{

        return $this->priority;
	}

	
	public function getExperienceFeatured()
	{

        return $this->experience_featured;
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
			$this->modifiedColumns[] = TripExperiencePeer::ID;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = TripExperiencePeer::USER_ID;
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
			$this->modifiedColumns[] = TripExperiencePeer::TITLE;
		}

	} 
	
	public function setEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->end !== $v) {
			$this->end = $v;
			$this->modifiedColumns[] = TripExperiencePeer::END;
		}

	} 
	
	public function setCooEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_end !== $v) {
			$this->coo_end = $v;
			$this->modifiedColumns[] = TripExperiencePeer::COO_END;
		}

	} 
	
	public function setLatEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lat_end !== $v) {
			$this->lat_end = $v;
			$this->modifiedColumns[] = TripExperiencePeer::LAT_END;
		}

	} 
	
	public function setLngEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lng_end !== $v) {
			$this->lng_end = $v;
			$this->modifiedColumns[] = TripExperiencePeer::LNG_END;
		}

	} 
	
	public function setTypeUploadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_upload_id !== $v) {
			$this->type_upload_id = $v;
			$this->modifiedColumns[] = TripExperiencePeer::TYPE_UPLOAD_ID;
		}

		if ($this->aTypeUpload !== null && $this->aTypeUpload->getId() !== $v) {
			$this->aTypeUpload = null;
		}

	} 
	
	public function setImages($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->images !== $v) {
			$this->images = $v;
			$this->modifiedColumns[] = TripExperiencePeer::IMAGES;
		}

	} 
	
	public function setVideoUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->video_url !== $v) {
			$this->video_url = $v;
			$this->modifiedColumns[] = TripExperiencePeer::VIDEO_URL;
		}

	} 
	
	public function setContent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = TripExperiencePeer::CONTENT;
		}

	} 
	
	public function setCountView($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_view !== $v || $v === 0) {
			$this->count_view = $v;
			$this->modifiedColumns[] = TripExperiencePeer::COUNT_VIEW;
		}

	} 
	
	public function setCountLike($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_like !== $v || $v === 0) {
			$this->count_like = $v;
			$this->modifiedColumns[] = TripExperiencePeer::COUNT_LIKE;
		}

	} 
	
	public function setCountShare($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_share !== $v || $v === 0) {
			$this->count_share = $v;
			$this->modifiedColumns[] = TripExperiencePeer::COUNT_SHARE;
		}

	} 
	
	public function setPriority($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->priority !== $v || $v === 10) {
			$this->priority = $v;
			$this->modifiedColumns[] = TripExperiencePeer::PRIORITY;
		}

	} 
	
	public function setExperienceFeatured($v)
	{

		if ($this->experience_featured !== $v || $v === false) {
			$this->experience_featured = $v;
			$this->modifiedColumns[] = TripExperiencePeer::EXPERIENCE_FEATURED;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = TripExperiencePeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = TripExperiencePeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = TripExperiencePeer::IMG_SEO;
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
			$this->modifiedColumns[] = TripExperiencePeer::CREATED_AT;
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
			$this->modifiedColumns[] = TripExperiencePeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->user_id = $rs->getInt($startcol + 1);

			$this->title = $rs->getString($startcol + 2);

			$this->end = $rs->getString($startcol + 3);

			$this->coo_end = $rs->getString($startcol + 4);

			$this->lat_end = $rs->getString($startcol + 5);

			$this->lng_end = $rs->getString($startcol + 6);

			$this->type_upload_id = $rs->getInt($startcol + 7);

			$this->images = $rs->getString($startcol + 8);

			$this->video_url = $rs->getString($startcol + 9);

			$this->content = $rs->getString($startcol + 10);

			$this->count_view = $rs->getInt($startcol + 11);

			$this->count_like = $rs->getInt($startcol + 12);

			$this->count_share = $rs->getInt($startcol + 13);

			$this->priority = $rs->getInt($startcol + 14);

			$this->experience_featured = $rs->getBoolean($startcol + 15);

			$this->title_seo = $rs->getString($startcol + 16);

			$this->description_seo = $rs->getString($startcol + 17);

			$this->img_seo = $rs->getString($startcol + 18);

			$this->created_at = $rs->getTimestamp($startcol + 19, null);

			$this->updated_at = $rs->getTimestamp($startcol + 20, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 21; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TripExperience object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripExperiencePeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TripExperiencePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TripExperiencePeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TripExperiencePeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripExperiencePeer::DATABASE_NAME);
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

			if ($this->aTypeUpload !== null) {
				if ($this->aTypeUpload->isModified()) {
					$affectedRows += $this->aTypeUpload->save($con);
				}
				$this->setTypeUpload($this->aTypeUpload);
			}


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = TripExperiencePeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TripExperiencePeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTripExperienceImgs !== null) {
				foreach($this->collTripExperienceImgs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentExperiences !== null) {
				foreach($this->collCommentExperiences as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collCommentAcquirementss !== null) {
				foreach($this->collCommentAcquirementss as $referrerFK) {
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

			if ($this->aTypeUpload !== null) {
				if (!$this->aTypeUpload->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTypeUpload->getValidationFailures());
				}
			}


			if (($retval = TripExperiencePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTripExperienceImgs !== null) {
					foreach($this->collTripExperienceImgs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentExperiences !== null) {
					foreach($this->collCommentExperiences as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collCommentAcquirementss !== null) {
					foreach($this->collCommentAcquirementss as $referrerFK) {
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
		$pos = TripExperiencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getEnd();
				break;
			case 4:
				return $this->getCooEnd();
				break;
			case 5:
				return $this->getLatEnd();
				break;
			case 6:
				return $this->getLngEnd();
				break;
			case 7:
				return $this->getTypeUploadId();
				break;
			case 8:
				return $this->getImages();
				break;
			case 9:
				return $this->getVideoUrl();
				break;
			case 10:
				return $this->getContent();
				break;
			case 11:
				return $this->getCountView();
				break;
			case 12:
				return $this->getCountLike();
				break;
			case 13:
				return $this->getCountShare();
				break;
			case 14:
				return $this->getPriority();
				break;
			case 15:
				return $this->getExperienceFeatured();
				break;
			case 16:
				return $this->getTitleSeo();
				break;
			case 17:
				return $this->getDescriptionSeo();
				break;
			case 18:
				return $this->getImgSeo();
				break;
			case 19:
				return $this->getCreatedAt();
				break;
			case 20:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripExperiencePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getEnd(),
			$keys[4] => $this->getCooEnd(),
			$keys[5] => $this->getLatEnd(),
			$keys[6] => $this->getLngEnd(),
			$keys[7] => $this->getTypeUploadId(),
			$keys[8] => $this->getImages(),
			$keys[9] => $this->getVideoUrl(),
			$keys[10] => $this->getContent(),
			$keys[11] => $this->getCountView(),
			$keys[12] => $this->getCountLike(),
			$keys[13] => $this->getCountShare(),
			$keys[14] => $this->getPriority(),
			$keys[15] => $this->getExperienceFeatured(),
			$keys[16] => $this->getTitleSeo(),
			$keys[17] => $this->getDescriptionSeo(),
			$keys[18] => $this->getImgSeo(),
			$keys[19] => $this->getCreatedAt(),
			$keys[20] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripExperiencePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setEnd($value);
				break;
			case 4:
				$this->setCooEnd($value);
				break;
			case 5:
				$this->setLatEnd($value);
				break;
			case 6:
				$this->setLngEnd($value);
				break;
			case 7:
				$this->setTypeUploadId($value);
				break;
			case 8:
				$this->setImages($value);
				break;
			case 9:
				$this->setVideoUrl($value);
				break;
			case 10:
				$this->setContent($value);
				break;
			case 11:
				$this->setCountView($value);
				break;
			case 12:
				$this->setCountLike($value);
				break;
			case 13:
				$this->setCountShare($value);
				break;
			case 14:
				$this->setPriority($value);
				break;
			case 15:
				$this->setExperienceFeatured($value);
				break;
			case 16:
				$this->setTitleSeo($value);
				break;
			case 17:
				$this->setDescriptionSeo($value);
				break;
			case 18:
				$this->setImgSeo($value);
				break;
			case 19:
				$this->setCreatedAt($value);
				break;
			case 20:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripExperiencePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEnd($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCooEnd($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setLatEnd($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLngEnd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTypeUploadId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setImages($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setVideoUrl($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setContent($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setCountView($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCountLike($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCountShare($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setPriority($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setExperienceFeatured($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setTitleSeo($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDescriptionSeo($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setImgSeo($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCreatedAt($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUpdatedAt($arr[$keys[20]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TripExperiencePeer::DATABASE_NAME);

		if ($this->isColumnModified(TripExperiencePeer::ID)) $criteria->add(TripExperiencePeer::ID, $this->id);
		if ($this->isColumnModified(TripExperiencePeer::USER_ID)) $criteria->add(TripExperiencePeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(TripExperiencePeer::TITLE)) $criteria->add(TripExperiencePeer::TITLE, $this->title);
		if ($this->isColumnModified(TripExperiencePeer::END)) $criteria->add(TripExperiencePeer::END, $this->end);
		if ($this->isColumnModified(TripExperiencePeer::COO_END)) $criteria->add(TripExperiencePeer::COO_END, $this->coo_end);
		if ($this->isColumnModified(TripExperiencePeer::LAT_END)) $criteria->add(TripExperiencePeer::LAT_END, $this->lat_end);
		if ($this->isColumnModified(TripExperiencePeer::LNG_END)) $criteria->add(TripExperiencePeer::LNG_END, $this->lng_end);
		if ($this->isColumnModified(TripExperiencePeer::TYPE_UPLOAD_ID)) $criteria->add(TripExperiencePeer::TYPE_UPLOAD_ID, $this->type_upload_id);
		if ($this->isColumnModified(TripExperiencePeer::IMAGES)) $criteria->add(TripExperiencePeer::IMAGES, $this->images);
		if ($this->isColumnModified(TripExperiencePeer::VIDEO_URL)) $criteria->add(TripExperiencePeer::VIDEO_URL, $this->video_url);
		if ($this->isColumnModified(TripExperiencePeer::CONTENT)) $criteria->add(TripExperiencePeer::CONTENT, $this->content);
		if ($this->isColumnModified(TripExperiencePeer::COUNT_VIEW)) $criteria->add(TripExperiencePeer::COUNT_VIEW, $this->count_view);
		if ($this->isColumnModified(TripExperiencePeer::COUNT_LIKE)) $criteria->add(TripExperiencePeer::COUNT_LIKE, $this->count_like);
		if ($this->isColumnModified(TripExperiencePeer::COUNT_SHARE)) $criteria->add(TripExperiencePeer::COUNT_SHARE, $this->count_share);
		if ($this->isColumnModified(TripExperiencePeer::PRIORITY)) $criteria->add(TripExperiencePeer::PRIORITY, $this->priority);
		if ($this->isColumnModified(TripExperiencePeer::EXPERIENCE_FEATURED)) $criteria->add(TripExperiencePeer::EXPERIENCE_FEATURED, $this->experience_featured);
		if ($this->isColumnModified(TripExperiencePeer::TITLE_SEO)) $criteria->add(TripExperiencePeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(TripExperiencePeer::DESCRIPTION_SEO)) $criteria->add(TripExperiencePeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(TripExperiencePeer::IMG_SEO)) $criteria->add(TripExperiencePeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(TripExperiencePeer::CREATED_AT)) $criteria->add(TripExperiencePeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TripExperiencePeer::UPDATED_AT)) $criteria->add(TripExperiencePeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TripExperiencePeer::DATABASE_NAME);

		$criteria->add(TripExperiencePeer::ID, $this->id);

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

		$copyObj->setEnd($this->end);

		$copyObj->setCooEnd($this->coo_end);

		$copyObj->setLatEnd($this->lat_end);

		$copyObj->setLngEnd($this->lng_end);

		$copyObj->setTypeUploadId($this->type_upload_id);

		$copyObj->setImages($this->images);

		$copyObj->setVideoUrl($this->video_url);

		$copyObj->setContent($this->content);

		$copyObj->setCountView($this->count_view);

		$copyObj->setCountLike($this->count_like);

		$copyObj->setCountShare($this->count_share);

		$copyObj->setPriority($this->priority);

		$copyObj->setExperienceFeatured($this->experience_featured);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTripExperienceImgs() as $relObj) {
				$copyObj->addTripExperienceImg($relObj->copy($deepCopy));
			}

			foreach($this->getCommentExperiences() as $relObj) {
				$copyObj->addCommentExperience($relObj->copy($deepCopy));
			}

			foreach($this->getCommentAcquirementss() as $relObj) {
				$copyObj->addCommentAcquirements($relObj->copy($deepCopy));
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
			self::$peer = new TripExperiencePeer();
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

	
	public function setTypeUpload($v)
	{


		if ($v === null) {
			$this->setTypeUploadId(NULL);
		} else {
			$this->setTypeUploadId($v->getId());
		}


		$this->aTypeUpload = $v;
	}


	
	static $TypeUpload = array();
	
	public function getTypeUpload($con = null)
	{
		if ($this->aTypeUpload === null && ($this->type_upload_id !== null)) {
						if(!isset(self::$TypeUpload[$this->type_upload_id])){
				self::$TypeUpload[$this->type_upload_id] = TypeUploadPeer::retrieveByPK($this->type_upload_id, $con);
			}
			$this->aTypeUpload = self::$TypeUpload[$this->type_upload_id];

			
		}
		return $this->aTypeUpload;
	}

	
	public function initTripExperienceImgs()
	{
		if ($this->collTripExperienceImgs === null) {
			$this->collTripExperienceImgs = array();
		}
	}

	
	public function getTripExperienceImgs($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripExperienceImgs === null) {
			if ($this->isNew()) {
			   $this->collTripExperienceImgs = array();
			} else {

				$criteria->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID, $this->getId());

				TripExperienceImgPeer::addSelectColumns($criteria);
				$this->collTripExperienceImgs = TripExperienceImgPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID, $this->getId());

				TripExperienceImgPeer::addSelectColumns($criteria);
				if (!isset($this->lastTripExperienceImgCriteria) || !$this->lastTripExperienceImgCriteria->equals($criteria)) {
					$this->collTripExperienceImgs = TripExperienceImgPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripExperienceImgCriteria = $criteria;
		return $this->collTripExperienceImgs;
	}

	
	public function countTripExperienceImgs($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID, $this->getId());

		return TripExperienceImgPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripExperienceImg(TripExperienceImg $l)
	{
		$this->collTripExperienceImgs[] = $l;
		$l->setTripExperience($this);
	}

	
	public function initCommentExperiences()
	{
		if ($this->collCommentExperiences === null) {
			$this->collCommentExperiences = array();
		}
	}

	
	public function getCommentExperiences($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentExperiences === null) {
			if ($this->isNew()) {
			   $this->collCommentExperiences = array();
			} else {

				$criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->getId());

				CommentExperiencePeer::addSelectColumns($criteria);
				$this->collCommentExperiences = CommentExperiencePeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->getId());

				CommentExperiencePeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentExperienceCriteria) || !$this->lastCommentExperienceCriteria->equals($criteria)) {
					$this->collCommentExperiences = CommentExperiencePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentExperienceCriteria = $criteria;
		return $this->collCommentExperiences;
	}

	
	public function countCommentExperiences($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->getId());

		return CommentExperiencePeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentExperience(CommentExperience $l)
	{
		$this->collCommentExperiences[] = $l;
		$l->setTripExperience($this);
	}


	
	public function getCommentExperiencesJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentExperiences === null) {
			if ($this->isNew()) {
				$this->collCommentExperiences = array();
			} else {

				$criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->getId());

				$this->collCommentExperiences = CommentExperiencePeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID, $this->getId());

			if (!isset($this->lastCommentExperienceCriteria) || !$this->lastCommentExperienceCriteria->equals($criteria)) {
				$this->collCommentExperiences = CommentExperiencePeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastCommentExperienceCriteria = $criteria;

		return $this->collCommentExperiences;
	}

	
	public function initCommentAcquirementss()
	{
		if ($this->collCommentAcquirementss === null) {
			$this->collCommentAcquirementss = array();
		}
	}

	
	public function getCommentAcquirementss($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentAcquirementss === null) {
			if ($this->isNew()) {
			   $this->collCommentAcquirementss = array();
			} else {

				$criteria->add(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

				CommentAcquirementsPeer::addSelectColumns($criteria);
				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

				CommentAcquirementsPeer::addSelectColumns($criteria);
				if (!isset($this->lastCommentAcquirementsCriteria) || !$this->lastCommentAcquirementsCriteria->equals($criteria)) {
					$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastCommentAcquirementsCriteria = $criteria;
		return $this->collCommentAcquirementss;
	}

	
	public function countCommentAcquirementss($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

		return CommentAcquirementsPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addCommentAcquirements(CommentAcquirements $l)
	{
		$this->collCommentAcquirementss[] = $l;
		$l->setTripExperience($this);
	}


	
	public function getCommentAcquirementssJoinDichungUser($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collCommentAcquirementss === null) {
			if ($this->isNew()) {
				$this->collCommentAcquirementss = array();
			} else {

				$criteria->add(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		} else {
									
			$criteria->add(CommentAcquirementsPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

			if (!isset($this->lastCommentAcquirementsCriteria) || !$this->lastCommentAcquirementsCriteria->equals($criteria)) {
				$this->collCommentAcquirementss = CommentAcquirementsPeer::doSelectJoinDichungUser($criteria, $con);
			}
		}
		$this->lastCommentAcquirementsCriteria = $criteria;

		return $this->collCommentAcquirementss;
	}

} 