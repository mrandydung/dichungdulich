<?php

/**
 * Subclass for representing a row from the 'tour' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Tour extends BaseTour
{
    public function __toString(){
        return $this->getTitle();
    }

 	public function toSlug(){
        return myUtil::strToSlug($this->getTitle());
    }
	public function getDetailUrl(){
   		sfLoader::loadHelpers('Url');
    	return !myUtil::isEn()?url_for('@trip_manager?tour_id='.$this->getId()):url_for('@trip_manager?tour_id='.$this->getId());
	}
    public function getDetailUrlPersonal(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn()?url_for('@trip_manager_personal?tour_id='.$this->getId()):url_for('@trip_manager_personal?tour_id='.$this->getId());
    }
    public function getDetailUrlTour(){
        sfLoader::loadHelpers('Url');
        return url_for('@detailTour?name='.$this->toSlug().'&id='.$this->getId());
    }

    public function getDetailUrlTourPreview(){
        sfLoader::loadHelpers('Url');
        return url_for('@detail_tour_preview?name='.$this->toSlug().'&id='.$this->getId());
    }

    public function getDetailUrlEditTour(){
        sfLoader::loadHelpers('Url');
        return url_for('@trip_manager?name='.$this->toSlug().'&tour_id='.$this->getId());
    }
    public function getDetailUrlEditTourPersonal(){
        sfLoader::loadHelpers('Url');
        return url_for('@trip_manager_personal?name='.$this->toSlug().'&tour_id='.$this->getId());
    }

    public function getImgThumbs(){
        $tour_id = $this->getId();
        $c = new Criteria();
        $c->add(TourItemImgPeer::TOUR_ID,$tour_id);
        $c->setLimit(1);
        $rs = TourItemImgPeer::doSelect($c);
        foreach ($rs as $key => $value) {
            return $value->getImages();
        }
    }

    public function getImgThumb($tour_detail_id){
        $tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
        $tour_id = $tour_detail->getTourId();
        $c = new Criteria();
        $c->add(TourItemImgPeer::TOUR_ID,$tour_id);
        $c->setLimit(1);
        $rs = TourItemImgPeer::doSelect($c);
        foreach ($rs as $key => $value) {
            return $value->getImages();
        }
    }
}
