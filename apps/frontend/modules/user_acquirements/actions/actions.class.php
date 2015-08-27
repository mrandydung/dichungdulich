<?php

class user_acquirementsActions extends sfActions
{
	public function executeIndex($request){
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->acquirement = TripAcquirementsPeer::getAllByUserId($user_id);
	}

	public function executeEdit_acquirements($request){
		$this->id_acquirements = $request->getParameter('id_acquirements');
		if(!$this->id_acquirements){
			$this->redirect('@hompage');
		}
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->errors = array();
	 	$html_name_file = array();
		$this->acquirements = TripAcquirementsPeer::retrieveByPK($this->id_acquirements);
		$this->checkbox_acq_detail = 0;
		if($this->acquirements->getEating() || $this->acquirements->getHome() || $this->acquirements->getLocationPlay() || $this->acquirements->getLocationUpTo() || $this->acquirements->getWhatToBy()){
			$this->checkbox_acq_detail = 1;
		}

		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){

		  	$title = trim($request->getParameter('title'));
		  	$end = trim($request->getParameter('end'));
		  	$type_upload = $request->getParameter('type_upload');
		  	$content = trim($request->getParameter('content'));
		  	$coo_end = $request->getParameter('coo_end');
		  	$lat_end = $request->getParameter('lat_end');
		  	$lng_end = $request->getParameter('lng_end');
		  	$url_video = trim($request->getParameter('url_video'));
		  	$eating = trim($request->getParameter('eating'));
		  	$home = trim($request->getParameter('home'));
		  	$location_play = trim($request->getParameter('location_play'));
		  	$location_up_to = trim($request->getParameter('location_up_to'));
		  	$what_to_by = trim($request->getParameter('what_to_by'));
		  	$count_img_acquirements = TripAcquirementsImgPeer::count_img_acquirements($this->id_acquirements);

		  	if(strlen($title) < 6){
		  		$this->errors [] = 'Tiêu đề quá ngắn';
		  		return $this->renderText(json_encode(array('code'=>'1','msg'=>'Tiêu đề quá ngắn')));
		  	}elseif (!$end || !$coo_end) {
		  		$this->errors [] = 'Điểm đến không chính xác';
		  		return $this->renderText(json_encode(array('code'=>'1','msg'=>'Điểm đến không chính xác')));
		  	}elseif (!$content) {
		  		$this->errors [] = 'Bạn chưa nhập nội dung chia sẻ';
		  		return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa nhập nội dung chia sẻ')));
		  	}else{
		  		if($type_upload == '1'){
		  			if(!$count_img_acquirements){
				  		$this->errors [] = 'Bạn không có ảnh cho trải nghiệm ';
				  		return $this->renderText(json_encode(array('code'=>'1','msg'=>'Bạn chưa có ảnh cho trải nghiệm')));
				  	}
		  		}
		  		if($type_upload == '2'){
					$parts = parse_url($url_video);
		  			if (($parts['host'] == 'www.youtube.com') || ($parts['host'] == 'youtu.be')){
		
					}else{
						$this->errors []='Định dạng mã nhúng video youtobe sai .VD : https://www.youtube.com/watch?v=d_8fE-On19I hoặc https://youtu.be/d_8fE-On19I';
						return $this->renderText(json_encode(array('code'=>'1','msg'=>'Định dạng mã nhúng video youtobe sai .VD : https://www.youtube.com/watch?v=d_8fE-On19I hoặc https://youtu.be/d_8fE-On19I')));
					}
		  		}
		  		if(empty($this->errors)){
					$this->acquirements->setUserId($user_id);
					$this->acquirements->setTitle($title);
					$this->acquirements->setEnd($end);
					$this->acquirements->setCooEnd($coo_end);
					$this->acquirements->setLatEnd($lat_end);
					$this->acquirements->setLngEnd($lng_end);
					$this->acquirements->setTypeUploadId($type_upload);
					if($this->type_upload == '2'){
						$parts = parse_url($url_video);
		  				if ($parts['host'] == 'www.youtube.com'){
		  					$param = str_replace("v=","",$parts['query']);
		  					$video = 'https://www.youtube.com/embed/'.$param;
		  				}
		  				if($parts['host'] == 'youtu.be'){
	  						$video = 'https://www.youtube.com/embed'.$parts['path'];
		  				}
						$this->acquirements->setVideoUrl($video);
					}
					$this->acquirements->setContent($content);
					$this->acquirements->setEating($eating);
					$this->acquirements->setHome($home);
					$this->acquirements->setLocationPlay($location_play);
					$this->acquirements->setLocationUpTo($location_up_to);
					$this->acquirements->setWhatToBy($what_to_by);
					$this->acquirements->save();
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật bài chia sẻ kinh nghiệm thành công')));
				}
		  	}
		}
	}

	public function executeDelete_image_acquirements($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$acquirements_item_img_id = $request->getParameter('acquirements_item_img_id');
			$acquirements_item_img = TripAcquirementsImgPeer::retrieveByPK($acquirements_item_img_id);
			$path_name = $acquirements_item_img->getImages();
			$path_name_thumb = $acquirements_item_img->getImagesThumb();
			unlink($path_name);
			unlink($path_name_thumb);
			$acquirements_item_img->delete();
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','div_id' =>$acquirements_item_img_id)));
		}
	}

	public function executeGet_images_acquirements($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$id_acquirements = $request->getParameter('id_acquirements');
			$c = new Criteria();
			$c->addDescendingOrderByColumn(TripAcquirementsImgPeer::ID);
			$c->add(TripAcquirementsImgPeer::TRIP_ACQUIREMENTS_ID,$id_acquirements);
			$rs = TripAcquirementsImgPeer::doSelect($c);
			foreach ($rs as $key => $value) {
				$html.= ' <div class="col-md-2 padding_top anh" id="div_img_'.$value->getId().'">
			            <img style="width:100px;height:100px" src="/'.$value->getImagesThumb().'"/>
			            <div class="xoa_po">
			                <a id="delete_image-'.$value->getId().'" class="delete_image"><span class="xoa"></span></a>
			            </div>
			        </div>';
			}
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','html'=>$html)));
		}
	}

	public function executeUpload($request){
		if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
			$id_acquirements = $request->getParameter('id_acquirements');
			$html = '';
			$file  = $_FILES['image_file'];
			$image_name = $_FILES['image_file']['name']; //file name
			$temp = explode(".", $image_name);
			$extension = strtolower(end($temp));
			$time = time();
			$image_size = $_FILES['image_file']['size']; //file size
			$image_temp = $_FILES['image_file']['tmp_name']; //file tem
			$file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') . "/trip_experience/" .$time.'_'.$image_name;
	    	if (move_uploaded_file($_FILES['image_file']['tmp_name'], $file_url)) {
	            $path_name = 'uploads/trip_experience/'.$time.'_'.$image_name;
	            $html.='<div class="col-md-2 padding_top anh" id="div_img_'.$id_acquirements.'">
							<img style="width:100px;height:100px" src="/'.$path_name.'"/>
							<div class="xoa_po">
								<a id="delete_image-'.$id_acquirements.'" class="delete_image"><span class="xoa"></span></a>
						</div>';
	     		$trip_acquirements_img = new TripAcquirementsImg();
	     		$trip_acquirements_img->setImages($path_name);
	     		$trip_acquirements_img->setImagesThumb($path_name);
	     		$trip_acquirements_img->setTripAcquirementsId($id_acquirements);
	     		$trip_acquirements_img->save();
	         	return $this->renderText($html);
	        }
	        return $this->renderText('Upload Lỗi');
    	}
	}

	public function executeDelete_acquirements($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$u = $this->getUser();
			$user_id = $u->getId();
			$id_acquirements = $request->getParameter('id_acquirements');
			$acquirements = TripAcquirementsPeer::retrieveByPK($id_acquirements);
			$acquirements->delete();
			return $this->renderText(json_encode(array('code'=>1)));
		}
	}
}
