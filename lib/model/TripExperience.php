<?php

/**
 * Subclass for representing a row from the 'trip_experience' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TripExperience extends BaseTripExperience
{
	public function toSlug(){
        return myUtil::strToSlug($this->getTitle());
    }
	public function getDetailUrl(){
   		sfLoader::loadHelpers('Url');
    	return !myUtil::isEn()?url_for('@experience_detail?id='.$this->getId()):url_for('@experience_detail?id='.$this->getId());
	}

	public function getImagesThumb(){
		$id_experience = $this->getId();
		$rs_images = TripExperienceImgPeer::get_img_thumb($id_experience);
		if($rs_images){
			$images = '/'.$rs_images->getImages();
		}else{
			$images = 0;
		}
		return $images;
	}

	public  function get_img_thumb_slide(){
		$id_experience = $this->getId();
		$c = new Criteria();
		$c->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID,$id_experience);
		$rs =  TripExperienceImgPeer::doSelect($c);
		return $rs;
	}

	public function getUsername(){
		$user_id = $this->getUserId();
		$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		return $user->getFullname();
	}
}
