<?php

class request_day_start_dateActions extends sfActions
{
	public function executeAdd_new_date_request_service($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$request_day_start_date = $request->getParameter('request_day_start_date');
			$count = TourDateRequestServicePeer::count_request($tour_id,$request_day_start_date);
			if($count){
				return $this->renderText(json_encode(array('code'=>'error','msg'=>'Ngày khởi hành đã tồn tại')));
			}else{
				$tour_date_request_service = new TourDateRequestService();
				$tour_date_request_service->setDate($request_day_start_date);
				$tour_date_request_service->setTourDetailId($tour_id);
				$tour_date_request_service->save();
				$tour_date_request_service_id = $tour_date_request_service->getId();
				$html = '  <div id="item_new_date_request_service-'.$tour_date_request_service_id.'">
		            <div class="col-md-3 col-sm-3 col-xs-3">
		                <input readonly class="form-control time_" value="'.$request_day_start_date.'"/>
		            </div>
		            <div class="col-md-1 col-sm-5 col-xs-5 ">
		               <a class="btn btn_orange_outline save delete_request_day_start_date_add_new" id="delete_request_day_start_date_add_new-'.$tour_date_request_service_id.'">Xóa</a>
		            </div>
		        </div>';
				return $this->renderText(json_encode(array('code'=>'success','html'=>$html)));
			}
		}	
	}

	public function executeDelete_new_date_request_service($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$item_new_date_request_service_id = $request->getParameter('item_new_date_request_service_id');
			$c = new Criteria();
			$c->add(TourDateRequestServicePeer::TOUR_DETAIL_ID,$tour_id);
			$c->add(TourDateRequestServicePeer::ID,$item_new_date_request_service_id);
			TourDateRequestServicePeer::doDelete($c);
			return $this->renderText(json_encode(array('code'=>'success','item_new_date_request_service_id_rp'=>$item_new_date_request_service_id))); 
		}
	}
}
