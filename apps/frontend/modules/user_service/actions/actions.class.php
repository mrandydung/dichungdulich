<?php
class user_serviceActions extends sfActions
{
	public function executeIndex($request)
	{
	  	$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		if(!$this->user->check_admin_partner_login() && $this->user->getPartnerId() == '1'){
            $this->redirect('@homepage');
        }
		$this->tour = TourDetailPeer::get_all_tour_by_user($user_id);
	}

	public function executeManager_service($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$submit_delete_tour_id = $request->getParameter('submit_delete_tour_id');
			$submit_dublicate_tour_id = $request->getParameter('submit_dublicate_tour_id');
			$edit_tour_id = $request->getParameter('edit_tour_id');
			if($submit_delete_tour_id){
				$c = new Criteria();
				$c->add(BookingTourPeer::TOUR_DETAIL_ID,$submit_delete_tour_id);
				$count = BookingTourPeer::doCount($c);
				if($count){
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'Dịch vụ này đang phát sinh giao dịch nên hiện tại bạn ko thể xóa','tour_id'=>$submit_delete_tour_id)));
				}else{
					$tour_detail = TourDetailPeer::retrieveByPK($submit_delete_tour_id);
					$tour_detail->delete();
					$c = new Criteria();
					$c->add(TourItemImgPeer::TOUR_DETAIL_ID,$submit_delete_tour_id);
					TourItemImgPeer::doDelete($c);
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','tour_id'=>$submit_delete_tour_id)));
				}
			}
			if($submit_dublicate_tour_id){
				$datepicker_start_dublicate = $request->getParameter('datepicker_start_dublicate');
				$datepicker_end_dublicate = $request->getParameter('datepicker_end_dublicate');
				if(!$datepicker_start_dublicate){
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn ngày bắt đầu')));
				}elseif(!$datepicker_end_dublicate){
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'Bạn chưa chọn ngày kết thúc')));
				}elseif(strtotime($datepicker_start_dublicate) > strtotime($datepicker_end_dublicate)){
					return $this->renderText(json_encode(array('code'=>2,'msg'=>'Ngày bắt đầu và ngày kết thúc không hợp lệ')));
				}else{

					$tour_detail = TourDetailPeer::retrieveByPK($submit_dublicate_tour_id);
					$tour_detail_dublicate = new TourDetail();
					$tour_detail_dublicate->setUserId($tour_detail->getUserId());
					$tour_detail_dublicate->setStart($tour_detail->getStart());
					$tour_detail_dublicate->setEnd($tour_detail->getEnd());
					$tour_detail_dublicate->setTitle($tour_detail->getTitle());
					$tour_detail_dublicate->setDescription($tour_detail->getDescription());
					$tour_detail_dublicate->setTitleSeo(strip_tags($tour_detail->getTitle(),''));
					$tour_detail_dublicate->setDescriptionSeo(strip_tags($tour_detail->getDescription(),''));
					$tour_detail_dublicate->setTourTypeId($tour_detail->getTourTypeId());
					$tour_detail_dublicate->setTimeTypeId($tour_detail->getTimeTypeId());
					$tour_detail_dublicate->setTimeCategoryDayId($tour_detail->getTimeCategoryDayId());
					$tour_detail_dublicate->setDetail($tour_detail->getDetail());
					$tour_detail_dublicate->setDateStart($datepicker_start_dublicate);
					$tour_detail_dublicate->setDateEnd($datepicker_end_dublicate);
					$tour_detail_dublicate->setHourStart($tour_detail->getHourStart());
					$tour_detail_dublicate->setHourDay($tour_detail->getHourDay());
					$tour_detail_dublicate->setHourWeek($tour_detail->getHourWeek());
					$tour_detail_dublicate->setDayInWeek($tour_detail->getDayInWeek());
					$tour_detail_dublicate->setPrice($tour_detail->getPrice());
					$tour_detail_dublicate->setPriceBaby($tour_detail->getPriceBaby());
					$tour_detail_dublicate->setPriceKid($tour_detail->getPriceKid());
					$tour_detail_dublicate->setPaymentTypeId($tour_detail->getPaymentTypeId());
					$tour_detail_dublicate->setNumberSeat($tour_detail->getNumberSeat());
					$tour_detail_dublicate->setAllowBookingFast($tour_detail->getAllowBookingFast());
					$tour_detail_dublicate->setNote($tour_detail->getNote());
					$tour_detail_dublicate->setEnabled(1);
					$tour_detail_dublicate->setSuccessCreated(1);
					$tour_detail_dublicate->save();
					$tour_detail_dublicate_id = $tour_detail_dublicate->getId();
					$img = $tour_detail->getImgThumb($submit_dublicate_tour_id);
					$host = $request->getHost();
				  	$get_file = file_get_contents('http://'.$host.'/'.$img);
                    $file_name = time().'_'.myUtil::strToSlug($tour_detail->getTitle());                       		
                    if($get_file !== false){
                        file_put_contents('uploads/folder/'.$file_name.'.png', $get_file);
						$tour_item_img = new TourItemImg();
						$tour_item_img->setImages('uploads/folder/'.$file_name.'.png');
						$tour_item_img->setTourDetailId($tour_detail_dublicate_id);
						$tour_item_img->save();
                    }
					return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok'.$host.'/'.$img)));
				}
			}
			if($edit_tour_id){
				$tour = TourDetailPeer::retrieveByPK($edit_tour_id);
				$host = $request->getHost();
				sfLoader::loadHelpers('Url');
				$url = 'http://'.$host.url_for('tripManager/index?name='.myUtil::strToSlug($tour->getTitle()).'&tour_id='.$edit_tour_id);
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'ok','url'=> $url)));
			}
		}
	}
}
