<?php


abstract class BaseTripAcquirements extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $id;


	
	protected $partner_id;


	
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


	
	protected $eating;


	
	protected $home;


	
	protected $location_play;


	
	protected $location_up_to;


	
	protected $what_to_by;


	
	protected $count_view = 0;


	
	protected $count_like = 0;


	
	protected $count_share = 0;


	
	protected $title_seo;


	
	protected $description_seo;


	
	protected $img_seo;


	
	protected $created_at;


	
	protected $updated_at;

	
	protected $aPartner;

	
	protected $aDichungUser;

	
	protected $aTypeUpload;

	
	protected $collTripAcquirementsImgs;

	
	protected $lastTripAcquirementsImgCriteria = null;

	
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

	
	public function getEating()
	{

        return $this->eating;
	}

	
	public function getHome()
	{

        return $this->home;
	}

	
	public function getLocationPlay()
	{

        return $this->location_play;
	}

	
	public function getLocationUpTo()
	{

        return $this->location_up_to;
	}

	
	public function getWhatToBy()
	{

        return $this->what_to_by;
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
			$this->modifiedColumns[] = TripAcquirementsPeer::ID;
		}

	} 
	
	public function setPartnerId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->partner_id !== $v) {
			$this->partner_id = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::PARTNER_ID;
		}

		if ($this->aPartner !== null && $this->aPartner->getId() !== $v) {
			$this->aPartner = null;
		}

	} 
	
	public function setUserId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v) {
			$this->user_id = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::USER_ID;
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
			$this->modifiedColumns[] = TripAcquirementsPeer::TITLE;
		}

	} 
	
	public function setEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->end !== $v) {
			$this->end = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::END;
		}

	} 
	
	public function setCooEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->coo_end !== $v) {
			$this->coo_end = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::COO_END;
		}

	} 
	
	public function setLatEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lat_end !== $v) {
			$this->lat_end = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::LAT_END;
		}

	} 
	
	public function setLngEnd($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->lng_end !== $v) {
			$this->lng_end = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::LNG_END;
		}

	} 
	
	public function setTypeUploadId($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->type_upload_id !== $v) {
			$this->type_upload_id = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::TYPE_UPLOAD_ID;
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
			$this->modifiedColumns[] = TripAcquirementsPeer::IMAGES;
		}

	} 
	
	public function setVideoUrl($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->video_url !== $v) {
			$this->video_url = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::VIDEO_URL;
		}

	} 
	
	public function setContent($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->content !== $v) {
			$this->content = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::CONTENT;
		}

	} 
	
	public function setEating($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->eating !== $v) {
			$this->eating = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::EATING;
		}

	} 
	
	public function setHome($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->home !== $v) {
			$this->home = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::HOME;
		}

	} 
	
	public function setLocationPlay($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->location_play !== $v) {
			$this->location_play = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::LOCATION_PLAY;
		}

	} 
	
	public function setLocationUpTo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->location_up_to !== $v) {
			$this->location_up_to = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::LOCATION_UP_TO;
		}

	} 
	
	public function setWhatToBy($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->what_to_by !== $v) {
			$this->what_to_by = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::WHAT_TO_BY;
		}

	} 
	
	public function setCountView($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_view !== $v || $v === 0) {
			$this->count_view = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::COUNT_VIEW;
		}

	} 
	
	public function setCountLike($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_like !== $v || $v === 0) {
			$this->count_like = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::COUNT_LIKE;
		}

	} 
	
	public function setCountShare($v)
	{

						if ($v !== null && !is_int($v) && is_numeric($v)) {
			$v = (int) $v;
		}

		if ($this->count_share !== $v || $v === 0) {
			$this->count_share = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::COUNT_SHARE;
		}

	} 
	
	public function setTitleSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->title_seo !== $v) {
			$this->title_seo = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::TITLE_SEO;
		}

	} 
	
	public function setDescriptionSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->description_seo !== $v) {
			$this->description_seo = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::DESCRIPTION_SEO;
		}

	} 
	
	public function setImgSeo($v)
	{

						if ($v !== null && !is_string($v)) {
			$v = (string) $v; 
		}

		if ($this->img_seo !== $v) {
			$this->img_seo = $v;
			$this->modifiedColumns[] = TripAcquirementsPeer::IMG_SEO;
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
			$this->modifiedColumns[] = TripAcquirementsPeer::CREATED_AT;
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
			$this->modifiedColumns[] = TripAcquirementsPeer::UPDATED_AT;
		}

	} 
	
	public function hydrate(ResultSet $rs, $startcol = 1)
	{
		try {

			$this->id = $rs->getInt($startcol + 0);

			$this->partner_id = $rs->getInt($startcol + 1);

			$this->user_id = $rs->getInt($startcol + 2);

			$this->title = $rs->getString($startcol + 3);

			$this->end = $rs->getString($startcol + 4);

			$this->coo_end = $rs->getString($startcol + 5);

			$this->lat_end = $rs->getString($startcol + 6);

			$this->lng_end = $rs->getString($startcol + 7);

			$this->type_upload_id = $rs->getInt($startcol + 8);

			$this->images = $rs->getString($startcol + 9);

			$this->video_url = $rs->getString($startcol + 10);

			$this->content = $rs->getString($startcol + 11);

			$this->eating = $rs->getString($startcol + 12);

			$this->home = $rs->getString($startcol + 13);

			$this->location_play = $rs->getString($startcol + 14);

			$this->location_up_to = $rs->getString($startcol + 15);

			$this->what_to_by = $rs->getString($startcol + 16);

			$this->count_view = $rs->getInt($startcol + 17);

			$this->count_like = $rs->getInt($startcol + 18);

			$this->count_share = $rs->getInt($startcol + 19);

			$this->title_seo = $rs->getString($startcol + 20);

			$this->description_seo = $rs->getString($startcol + 21);

			$this->img_seo = $rs->getString($startcol + 22);

			$this->created_at = $rs->getTimestamp($startcol + 23, null);

			$this->updated_at = $rs->getTimestamp($startcol + 24, null);

			$this->resetModified();

			$this->setNew(false);

						return $startcol + 25; 
		} catch (Exception $e) {
			throw new PropelException("Error populating TripAcquirements object", $e);
		}
	}

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripAcquirementsPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			TripAcquirementsPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
    if ($this->isNew() && !$this->isColumnModified(TripAcquirementsPeer::CREATED_AT))
    {
      $this->setCreatedAt(time());
    }

    if ($this->isModified() && !$this->isColumnModified(TripAcquirementsPeer::UPDATED_AT))
    {
      $this->setUpdatedAt(time());
    }

		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(TripAcquirementsPeer::DATABASE_NAME);
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
					$pk = TripAcquirementsPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += TripAcquirementsPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			if ($this->collTripAcquirementsImgs !== null) {
				foreach($this->collTripAcquirementsImgs as $referrerFK) {
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


												
			if ($this->aPartner !== null) {
				if (!$this->aPartner->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPartner->getValidationFailures());
				}
			}

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


			if (($retval = TripAcquirementsPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTripAcquirementsImgs !== null) {
					foreach($this->collTripAcquirementsImgs as $referrerFK) {
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
		$pos = TripAcquirementsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserId();
				break;
			case 3:
				return $this->getTitle();
				break;
			case 4:
				return $this->getEnd();
				break;
			case 5:
				return $this->getCooEnd();
				break;
			case 6:
				return $this->getLatEnd();
				break;
			case 7:
				return $this->getLngEnd();
				break;
			case 8:
				return $this->getTypeUploadId();
				break;
			case 9:
				return $this->getImages();
				break;
			case 10:
				return $this->getVideoUrl();
				break;
			case 11:
				return $this->getContent();
				break;
			case 12:
				return $this->getEating();
				break;
			case 13:
				return $this->getHome();
				break;
			case 14:
				return $this->getLocationPlay();
				break;
			case 15:
				return $this->getLocationUpTo();
				break;
			case 16:
				return $this->getWhatToBy();
				break;
			case 17:
				return $this->getCountView();
				break;
			case 18:
				return $this->getCountLike();
				break;
			case 19:
				return $this->getCountShare();
				break;
			case 20:
				return $this->getTitleSeo();
				break;
			case 21:
				return $this->getDescriptionSeo();
				break;
			case 22:
				return $this->getImgSeo();
				break;
			case 23:
				return $this->getCreatedAt();
				break;
			case 24:
				return $this->getUpdatedAt();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripAcquirementsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPartnerId(),
			$keys[2] => $this->getUserId(),
			$keys[3] => $this->getTitle(),
			$keys[4] => $this->getEnd(),
			$keys[5] => $this->getCooEnd(),
			$keys[6] => $this->getLatEnd(),
			$keys[7] => $this->getLngEnd(),
			$keys[8] => $this->getTypeUploadId(),
			$keys[9] => $this->getImages(),
			$keys[10] => $this->getVideoUrl(),
			$keys[11] => $this->getContent(),
			$keys[12] => $this->getEating(),
			$keys[13] => $this->getHome(),
			$keys[14] => $this->getLocationPlay(),
			$keys[15] => $this->getLocationUpTo(),
			$keys[16] => $this->getWhatToBy(),
			$keys[17] => $this->getCountView(),
			$keys[18] => $this->getCountLike(),
			$keys[19] => $this->getCountShare(),
			$keys[20] => $this->getTitleSeo(),
			$keys[21] => $this->getDescriptionSeo(),
			$keys[22] => $this->getImgSeo(),
			$keys[23] => $this->getCreatedAt(),
			$keys[24] => $this->getUpdatedAt(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = TripAcquirementsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserId($value);
				break;
			case 3:
				$this->setTitle($value);
				break;
			case 4:
				$this->setEnd($value);
				break;
			case 5:
				$this->setCooEnd($value);
				break;
			case 6:
				$this->setLatEnd($value);
				break;
			case 7:
				$this->setLngEnd($value);
				break;
			case 8:
				$this->setTypeUploadId($value);
				break;
			case 9:
				$this->setImages($value);
				break;
			case 10:
				$this->setVideoUrl($value);
				break;
			case 11:
				$this->setContent($value);
				break;
			case 12:
				$this->setEating($value);
				break;
			case 13:
				$this->setHome($value);
				break;
			case 14:
				$this->setLocationPlay($value);
				break;
			case 15:
				$this->setLocationUpTo($value);
				break;
			case 16:
				$this->setWhatToBy($value);
				break;
			case 17:
				$this->setCountView($value);
				break;
			case 18:
				$this->setCountLike($value);
				break;
			case 19:
				$this->setCountShare($value);
				break;
			case 20:
				$this->setTitleSeo($value);
				break;
			case 21:
				$this->setDescriptionSeo($value);
				break;
			case 22:
				$this->setImgSeo($value);
				break;
			case 23:
				$this->setCreatedAt($value);
				break;
			case 24:
				$this->setUpdatedAt($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = TripAcquirementsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPartnerId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUserId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTitle($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEnd($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCooEnd($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLatEnd($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setLngEnd($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setTypeUploadId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setImages($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setVideoUrl($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setContent($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEating($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setHome($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLocationPlay($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLocationUpTo($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setWhatToBy($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setCountView($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setCountLike($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCountShare($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTitleSeo($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setDescriptionSeo($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setImgSeo($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setCreatedAt($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setUpdatedAt($arr[$keys[24]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(TripAcquirementsPeer::DATABASE_NAME);

		if ($this->isColumnModified(TripAcquirementsPeer::ID)) $criteria->add(TripAcquirementsPeer::ID, $this->id);
		if ($this->isColumnModified(TripAcquirementsPeer::PARTNER_ID)) $criteria->add(TripAcquirementsPeer::PARTNER_ID, $this->partner_id);
		if ($this->isColumnModified(TripAcquirementsPeer::USER_ID)) $criteria->add(TripAcquirementsPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(TripAcquirementsPeer::TITLE)) $criteria->add(TripAcquirementsPeer::TITLE, $this->title);
		if ($this->isColumnModified(TripAcquirementsPeer::END)) $criteria->add(TripAcquirementsPeer::END, $this->end);
		if ($this->isColumnModified(TripAcquirementsPeer::COO_END)) $criteria->add(TripAcquirementsPeer::COO_END, $this->coo_end);
		if ($this->isColumnModified(TripAcquirementsPeer::LAT_END)) $criteria->add(TripAcquirementsPeer::LAT_END, $this->lat_end);
		if ($this->isColumnModified(TripAcquirementsPeer::LNG_END)) $criteria->add(TripAcquirementsPeer::LNG_END, $this->lng_end);
		if ($this->isColumnModified(TripAcquirementsPeer::TYPE_UPLOAD_ID)) $criteria->add(TripAcquirementsPeer::TYPE_UPLOAD_ID, $this->type_upload_id);
		if ($this->isColumnModified(TripAcquirementsPeer::IMAGES)) $criteria->add(TripAcquirementsPeer::IMAGES, $this->images);
		if ($this->isColumnModified(TripAcquirementsPeer::VIDEO_URL)) $criteria->add(TripAcquirementsPeer::VIDEO_URL, $this->video_url);
		if ($this->isColumnModified(TripAcquirementsPeer::CONTENT)) $criteria->add(TripAcquirementsPeer::CONTENT, $this->content);
		if ($this->isColumnModified(TripAcquirementsPeer::EATING)) $criteria->add(TripAcquirementsPeer::EATING, $this->eating);
		if ($this->isColumnModified(TripAcquirementsPeer::HOME)) $criteria->add(TripAcquirementsPeer::HOME, $this->home);
		if ($this->isColumnModified(TripAcquirementsPeer::LOCATION_PLAY)) $criteria->add(TripAcquirementsPeer::LOCATION_PLAY, $this->location_play);
		if ($this->isColumnModified(TripAcquirementsPeer::LOCATION_UP_TO)) $criteria->add(TripAcquirementsPeer::LOCATION_UP_TO, $this->location_up_to);
		if ($this->isColumnModified(TripAcquirementsPeer::WHAT_TO_BY)) $criteria->add(TripAcquirementsPeer::WHAT_TO_BY, $this->what_to_by);
		if ($this->isColumnModified(TripAcquirementsPeer::COUNT_VIEW)) $criteria->add(TripAcquirementsPeer::COUNT_VIEW, $this->count_view);
		if ($this->isColumnModified(TripAcquirementsPeer::COUNT_LIKE)) $criteria->add(TripAcquirementsPeer::COUNT_LIKE, $this->count_like);
		if ($this->isColumnModified(TripAcquirementsPeer::COUNT_SHARE)) $criteria->add(TripAcquirementsPeer::COUNT_SHARE, $this->count_share);
		if ($this->isColumnModified(TripAcquirementsPeer::TITLE_SEO)) $criteria->add(TripAcquirementsPeer::TITLE_SEO, $this->title_seo);
		if ($this->isColumnModified(TripAcquirementsPeer::DESCRIPTION_SEO)) $criteria->add(TripAcquirementsPeer::DESCRIPTION_SEO, $this->description_seo);
		if ($this->isColumnModified(TripAcquirementsPeer::IMG_SEO)) $criteria->add(TripAcquirementsPeer::IMG_SEO, $this->img_seo);
		if ($this->isColumnModified(TripAcquirementsPeer::CREATED_AT)) $criteria->add(TripAcquirementsPeer::CREATED_AT, $this->created_at);
		if ($this->isColumnModified(TripAcquirementsPeer::UPDATED_AT)) $criteria->add(TripAcquirementsPeer::UPDATED_AT, $this->updated_at);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(TripAcquirementsPeer::DATABASE_NAME);

		$criteria->add(TripAcquirementsPeer::ID, $this->id);

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

		$copyObj->setEating($this->eating);

		$copyObj->setHome($this->home);

		$copyObj->setLocationPlay($this->location_play);

		$copyObj->setLocationUpTo($this->location_up_to);

		$copyObj->setWhatToBy($this->what_to_by);

		$copyObj->setCountView($this->count_view);

		$copyObj->setCountLike($this->count_like);

		$copyObj->setCountShare($this->count_share);

		$copyObj->setTitleSeo($this->title_seo);

		$copyObj->setDescriptionSeo($this->description_seo);

		$copyObj->setImgSeo($this->img_seo);

		$copyObj->setCreatedAt($this->created_at);

		$copyObj->setUpdatedAt($this->updated_at);


		if ($deepCopy) {
									$copyObj->setNew(false);

			foreach($this->getTripAcquirementsImgs() as $relObj) {
				$copyObj->addTripAcquirementsImg($relObj->copy($deepCopy));
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
			self::$peer = new TripAcquirementsPeer();
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

	
	public function initTripAcquirementsImgs()
	{
		if ($this->collTripAcquirementsImgs === null) {
			$this->collTripAcquirementsImgs = array();
		}
	}

	
	public function getTripAcquirementsImgs($criteria = null, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collTripAcquirementsImgs === null) {
			if ($this->isNew()) {
			   $this->collTripAcquirementsImgs = array();
			} else {

				$criteria->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

				TripAcquirementsImgPeer::addSelectColumns($criteria);
				$this->collTripAcquirementsImgs = TripAcquirementsImgPeer::doSelect($criteria, $con);
			}
		} else {
						if (!$this->isNew()) {
												

				$criteria->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

				TripAcquirementsImgPeer::addSelectColumns($criteria);
				if (!isset($this->lastTripAcquirementsImgCriteria) || !$this->lastTripAcquirementsImgCriteria->equals($criteria)) {
					$this->collTripAcquirementsImgs = TripAcquirementsImgPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastTripAcquirementsImgCriteria = $criteria;
		return $this->collTripAcquirementsImgs;
	}

	
	public function countTripAcquirementsImgs($criteria = null, $distinct = false, $con = null)
	{
				if ($criteria === null) {
			$criteria = new Criteria();
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		$criteria->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID, $this->getId());

		return TripAcquirementsImgPeer::doCount($criteria, $distinct, $con);
	}

	
	public function addTripAcquirementsImg(TripAcquirementsImg $l)
	{
		$this->collTripAcquirementsImgs[] = $l;
		$l->setTripAcquirements($this);
	}

} 