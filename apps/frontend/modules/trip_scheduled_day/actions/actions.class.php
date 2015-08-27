<?php
class trip_scheduled_dayActions extends sfActions
{
	public function executeUpload_img_day($request){
		if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
			$tour_id = $request->getParameter('tour_id');
			$day = $request->getParameter('day');
			$html = '';
			$file = $_FILES['imageInputDay'];
			$image_name = trim($_FILES['imageInputDay']['name']); //file name
			$temp = explode(".", $image_name);
			$extension = strtolower(end($temp));
			$image_size = $_FILES['imageInputDay']['size']; //file size
			$image_temp = $_FILES['imageInputDay']['tmp_name']; //file tem
			$time = time();
			$file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') . "/img_scheduled_day/" .$time.'_'.$image_name;
	    	if (move_uploaded_file($_FILES['imageInputDay']['tmp_name'], $file_url)) {
	            // $get_file = file_get_contents('http://dichung.vn/thumbnail/index.php?src='.$file_url.'&w=640&h=320&zc=1&q=100');
	            $path_name = 'uploads/img_scheduled_day/'.$time.'_'.$image_name;
	            $html.='<div class="col-md-2 padding_top anh" id="div_img_day_'.$tour_id.'">
							<img style="width:100px;height:100px" src="/'.$path_name.'"/>
							<div class="xoa_po">
								<a id="delete_image-'.$tour_id.'" class="delete_image"><span class="xoa"></span></a>
						</div>';
	     		$tour_item_img_schedule_day = new TourItemImgScheduleDay();
 		   		$tour_item_img_schedule_day->setTourDetailId($tour_id);
	     		$tour_item_img_schedule_day->setImages($path_name);
	     		$tour_item_img_schedule_day->setDay($day);
	     		$tour_item_img_schedule_day->save();
	         	return $this->renderText($html);
	        }
	        return $this->renderText('Upload Lỗi'.$file);
    	}
	}
	public function executeGet_img_tour_scheduled_day($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$day_item = $request->getParameter('day_item');
			$c = new Criteria();
			$c->addDescendingOrderByColumn(TourItemImgScheduleDayPeer::ID);
			$c->add(TourItemImgScheduleDayPeer::TOUR_DETAIL_ID,$tour_id);
			$c->add(TourItemImgScheduleDayPeer::DAY,$day_item);
			$rs = TourItemImgScheduleDayPeer::doSelect($c);
			foreach ($rs as $key => $value) {
				$html.= ' <div class="col-md-2 padding_top anh" id="div_img_day_'.$value->getId().'">
			            <img style="width:100px;height:100px" src="/'.$value->getImages().'"/>
			            <div class="xoa_po">
			                <a id="delete_image_day-'.$value->getId().'" class="delete_image_day"><span class="xoa"></span></a>
			            </div>
			        </div>';
			}
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
		}
	}

	public function executeAdd_schedule_day($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$tour_id = $request->getParameter('tour_id');
			$day_item = $request->getParameter('day_item');
			$title_day = trim($request->getParameter('title_day'));
			$description_day = trim($request->getParameter('description_day'));
			$vehicle_day = $request->getParameter('vehicle_day');
			if(!$title_day){
				return $this->renderText(json_encode(array('code'=>'error','msg'=>'Bạn chưa nhập tiêu đề cho ngày hiện tại')));
			}
			elseif(!$vehicle_day){
				return $this->renderText(json_encode(array('code'=>'error','msg'=>'Bạn chưa chọn phương tiện cho ngày hiện tại')));
			}
			elseif(!$description_day){
				return $this->renderText(json_encode(array('code'=>'error','msg'=>'Bạn chưa nhập nội dung cho ngày hiện tại')));
			}else{
				$count = TourItemScheduleDayPeer::count_schedule_day($tour_id,$day_item);
				if($count){
					$tour_item_schedule_day = TourItemScheduleDayPeer::get_schedule_day($tour_id,$day_item);
					$tour_item_schedule_day->setTourDetailId($tour_id);
					$tour_item_schedule_day->setDay($day_item);
					$tour_item_schedule_day->setTitle($title_day);
					$tour_item_schedule_day->setDescription($description_day);
					$tour_item_schedule_day->setVehicle(json_encode($vehicle_day));
					$tour_item_schedule_day->save();
				}else{
					$tour_item_schedule_day = new TourItemScheduleDay();
					$tour_item_schedule_day->setTourDetailId($tour_id);
					$tour_item_schedule_day->setDay($day_item);
					$tour_item_schedule_day->setTitle($title_day);
					$tour_item_schedule_day->setDescription($description_day);
					$tour_item_schedule_day->setVehicle(json_encode($vehicle_day));
					$tour_item_schedule_day->save();
				}
				return $this->renderText(json_encode(array('code'=>'success','msg'=>'Cập nhật lịch trình ngày hiện tại thành công')));
			}
		}
	}

	public function executeDelete_image_day($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$item_img_day_id = $request->getParameter('item_img_day_id');
			$tour_item_img_schedule_day = TourItemImgScheduleDayPeer::retrieveByPK($item_img_day_id);
			$path_name = $tour_item_img_schedule_day->getImages();
			unlink($path_name);
			$tour_item_img_schedule_day->delete();
			return $this->renderText(json_encode(array('code'=>'success','msg'=>'ok','div_id' =>$item_img_day_id)));
		}
	}

	public function executeGet_day_scheduled_day($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
			$day_item = $request->getParameter('day_item');
			$day_item_next = (int)$day_item + 1;
			$schedule_day_one = TourItemScheduleDayPeer::get_schedule_day($tour_id,(int)$day_item + 1);
			if(!$schedule_day_one){
				$title_schedule_day = '';
				$vehicle_arr = array();
				$description_schedule_day = '';
			}else{
				$title_schedule_day = $schedule_day_one->getTitle();
				$description_schedule_day = $schedule_day_one->getDescription();
				$vehicle_arr = json_decode($schedule_day_one->getVehicle());
			}
			$vehicle = VehiclePeer::get_all();
			$all_img_schedule_day = TourItemImgScheduleDayPeer::get_all_by_day($tour_id,$day_item_next);
			if(!$all_img_schedule_day){
				$all_img_schedule_day = array();
			}
			if($tour_detail->getTimeCategoryDayId() == $day_item_next){
				$finish = 1;
			}else{
				$finish = 0;
			}
			$html = TourItemScheduleDayPeer::return_html_next_prev_day($day_item_next,$title_schedule_day,$description_schedule_day,$vehicle,$vehicle_arr,$tour_id,$all_img_schedule_day);		
	    	return $this->renderText(json_encode(array('code'=>'success','msg'=>'ok','html' =>$html,'day_item_next'=>$day_item_next,'finish'=>$finish)));    
			
		}
	}

	public function executeGet_day_scheduled_day_prev($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
			$day_item = $request->getParameter('day_item');
			$day_item_prev = (int)$day_item - 1;
			$schedule_day_one = TourItemScheduleDayPeer::get_schedule_day($tour_id,$day_item_prev);
			if(!$schedule_day_one){
				$title_schedule_day = '';
				$vehicle_arr = array();
				$description_schedule_day = '';
			}else{
				$title_schedule_day = $schedule_day_one->getTitle();
				$description_schedule_day = $schedule_day_one->getDescription();
				$vehicle_arr = json_decode($schedule_day_one->getVehicle());
			}
			$vehicle = VehiclePeer::get_all();
			$all_img_schedule_day = TourItemImgScheduleDayPeer::get_all_by_day($tour_id,$day_item_prev);
			if(!$all_img_schedule_day){
				$all_img_schedule_day = array();
			}
			if($tour_detail->getTimeCategoryDayId() == $day_item){
				$finish = 1;
			}else{
				$finish = 0;
			}
			$html = TourItemScheduleDayPeer::return_html_next_prev_day($day_item_prev,$title_schedule_day,$description_schedule_day,$vehicle,$vehicle_arr,$tour_id,$all_img_schedule_day);
	    	return $this->renderText(json_encode(array('code'=>'success','msg'=>'ok','html' =>$html,'day_item_prev'=>$day_item_prev,'finish'=>$finish)));    
			
		}
	}

	public function executeSelect_item_schedule_day_change($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
			$day_item = $request->getParameter('day_item');
			$schedule_day_one = TourItemScheduleDayPeer::get_schedule_day($tour_id,$day_item);
			if(!$schedule_day_one){
				$title_schedule_day = '';
				$vehicle_arr = array();
				$description_schedule_day = '';
			}else{
				$title_schedule_day = $schedule_day_one->getTitle();
				$description_schedule_day = $schedule_day_one->getDescription();
				$vehicle_arr = json_decode($schedule_day_one->getVehicle());
			}
			$vehicle = VehiclePeer::get_all();
			$all_img_schedule_day = TourItemImgScheduleDayPeer::get_all_by_day($tour_id,$day_item);
			if(!$all_img_schedule_day){
				$all_img_schedule_day = array();
			}
			if($tour_detail->getTimeCategoryDayId() == $day_item){
				$finish_end = 1;
			}else{
				$finish_end = 0;
			}

			$html = TourItemScheduleDayPeer::return_html_next_prev_day($day_item,$title_schedule_day,$description_schedule_day,$vehicle,$vehicle_arr,$tour_id,$all_img_schedule_day);
	    	return $this->renderText(json_encode(array('code'=>'success','msg'=>'ok','html' =>$html,'day_item'=>$day_item,'finish_end'=>$finish_end)));
		}
	}

	public function executeGet_day_scheduled_day_first($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$tour_id = $request->getParameter('tour_id');
			$tour_detail = TourDetailPeer::retrieveByPK($tour_id);
			$day_item = 1;
			$schedule_day_one = TourItemScheduleDayPeer::get_schedule_day($tour_id,$day_item);
			if(!$schedule_day_one){
				$title_schedule_day = '';
				$vehicle_arr = array();
				$description_schedule_day = '';
			}else{
				$title_schedule_day = $schedule_day_one->getTitle();
				$description_schedule_day = $schedule_day_one->getDescription();
				$vehicle_arr = json_decode($schedule_day_one->getVehicle());
			}
			$vehicle = VehiclePeer::get_all();
			$all_img_schedule_day = TourItemImgScheduleDayPeer::get_all_by_day($tour_id,$day_item);
			if(!$all_img_schedule_day){
				$all_img_schedule_day = array();
			}
			$html_div_next_prev .='<a class="previous disabled">&larr; '.LangPeer::getText('Ngày trước').'</a> 
				    <span class="day">
				      <strong>            
				          <select style="border-radius: 5px;height: 30px;" id="select_item_schedule_day">';
			              	for($i = 1; $i <= $tour_detail->getTimeCategoryDayId();$i++){
								$html_div_next_prev.='<option value="'.$i.'">'.LangPeer::getText('Ngày').' '.$i.'</option>';
			              	}
			$html_div_next_prev.='</select>
				      </strong>
				    </span>';
		   			if($tour_detail->getTimeCategoryDayId() != '1'){
						$html_div_next_prev.='<a class="next" id="button_next_day">';
					}else{
			$html_div_next_prev.='<a class="next disabled">';
		    		}
			$html_div_next_prev.= LangPeer::getText('Ngày tiếp theo').' &rarr;</a>';
			$html = TourItemScheduleDayPeer::return_html_next_prev_day($day_item,$title_schedule_day,$description_schedule_day,$vehicle,$vehicle_arr,$tour_id,$all_img_schedule_day);
			return $this->renderText(json_encode(array('code'=>'success','msg'=>'ok','html' =>$html,'html_div_next_prev'=>$html_div_next_prev,'day_item'=>$day_item)));
		}
	} 
}
