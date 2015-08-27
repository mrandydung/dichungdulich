<?php

class TourPeer extends BaseTourPeer
{
	public static function get_all_tour_by_user($user_id){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::USER_ID,$user_id);
		$rs = self::doSelect($c);
		$tour = array();

		foreach ($rs as $key => $value) {
			$tour_id = $value->getId();
			$tour_detail_id = TourDetailPeer::getTour_detail_id($tour_id);
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$title = $value->getTitle();
			$description = $value->getDescription();
			$img_thumb = $value->getImgThumb($tour_detail_id);
		 	if(!$img_thumb){
					$img_thumb = 'images/chuyendi.png';
			 }
			$date_start = $tour_detail->getDateStart();
			$date_end = $tour_detail->getDateEnd();
			$time_type_id = $tour_detail->getTimeTypeId();
			if($tour_detail->getTourTypeId() == '2'){
				$url_manager = $value->getDetailUrlEditTour();
			}else{
				$url_manager = $value->getDetailUrlEditTourPersonal();
			}
			$url = $value->getDetailUrlTour();
			if($tour_detail->getSuccessCreated()){
				$tour []= array('tour_id'=>$tour_id,'url'=>$url,'time_type_id'=>$time_type_id,'title'=>$title,'description'=>$description,'date_start'=>$date_start,'date_end'=>$date_end,'img'=>$img_thumb,'url_manager'=>$url_manager);
			}
		}
		return $tour;
	}

	public static function get_all_tour_by_featured($user_id){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::USER_ID,$user_id);
		$rs = self::doSelect($c);
		$tour = array();
		$date_now = date('Y-m-d');
		foreach ($rs as $key => $value) {
			$tour_id = $value->getId();
			$tour_detail_id = TourDetailPeer::getTour_detail_id($tour_id);
			$tour_detail = TourDetailPeer::retrieveByPK($tour_detail_id);
			$title = $value->getTitle();
			$description = $value->getDescription();
			$img_thumb = $value->getImgThumb($tour_detail_id);
		 	if(!$img_thumb){
					$img_thumb = 'images/chuyendi.png';
			 }
			$date_start = $tour_detail->getDateStart();
			$date_end = $tour_detail->getDateEnd();
			$time_type_id = $tour_detail->getTimeTypeId();
			if($tour_detail->getTourTypeId() == '2'){
				$url_manager = $value->getDetailUrlEditTour();
			}else{
				$url_manager = $value->getDetailUrlEditTourPersonal();
			}
			$url = $value->getDetailUrlTour();
			if($tour_detail->getSuccessCreated()){
				if($time_type_id == '1'){
			 		if(strtotime($date_start) >= strtotime($date_now)){
			 			$tour []= array('tour_id'=>$tour_id,'url'=>$url,'time_type_id'=>$time_type_id,'title'=>$title,'description'=>strip_tags((mb_substr($description,0,250,"utf-8")),''),'date_start'=>$date_start,'date_end'=>$date_end,'img'=>$img_thumb,'url_manager'=>$url_manager);
			 		}
			 	}else{
			 		$tour []= array('tour_id'=>$tour_id,'url'=>$url,'time_type_id'=>$time_type_id,'title'=>$title,'description'=>$description,'date_start'=>$date_start,'date_end'=>$date_end,'img'=>$img_thumb,'url_manager'=>$url_manager);
			 	}
			}
		}
		return $tour;
	}
}
