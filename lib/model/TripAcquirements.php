<?php

/**
 * Subclass for representing a row from the 'trip_acquirements' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TripAcquirements extends BaseTripAcquirements
{
    public function getImagesThumb(){
		$id_experience = $this->getId();
		$rs_images = TripAcquirementsImgPeer::get_img_thumb($id_experience);
		if($rs_images){
			$images = '/'.$rs_images->getImagesThumb();
		}else{
			$images = 0;
		}
		return $images;
	}
    
    public  function get_img_thumb_slide(){
		$id_acquirement = $this->getId();
		$c = new Criteria();
		$c->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID,$id_acquirement);
		$rs =  TripAcquirementsImgPeer::doSelect($c);
		return $rs;
	}
}
