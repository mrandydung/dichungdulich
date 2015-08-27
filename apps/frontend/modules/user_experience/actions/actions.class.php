<?php
class user_experienceActions extends sfActions
{
	public function executeIndex($request){
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->experience = TripExperiencePeer::getAllByUserId($user_id);
	}

	public function executeDelete_experience($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$u = $this->getUser();
			$user_id = $u->getId();
			$id_experience = $request->getParameter('id_experience');
			$c = new Criteria();
			$c->add(CommentExperiencePeer::TRIP_EXPERIENCE_ID,$id_experience);
			$c->add(CommentExperiencePeer::USER_ID,$user_id);
			CommentExperiencePeer::doDelete($c);
			$experience = TripExperiencePeer::retrieveByPK($id_experience);
			$experience->delete();
			return $this->renderText(json_encode(array('code'=>1)));
		}
	}

	public function executeGet_images_experience($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$html = '';
			$id_experience = $request->getParameter('id_experience');
			$c = new Criteria();
			$c->addDescendingOrderByColumn(TripExperienceImgPeer::ID);
			$c->add(TripExperienceImgPeer::TRIP_EXPERIENCE_ID,$id_experience);
			$rs = TripExperienceImgPeer::doSelect($c);
			foreach ($rs as $key => $value) {
				$html.= ' <div class="col-md-2 padding_top anh" id="div_img_'.$value->getId().'">
			            <img style="width:100px;height:100px" src="/'.$value->getImages().'"/>
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
			$id_experience = $request->getParameter('id_experience');
			$html = '';
			$file  = $_FILES['image_file'];
			$image_name = $_FILES['image_file']['name']; //file name
			$temp = explode(".", $image_name);
			$extension = strtolower(end($temp));
			$image_size = $_FILES['image_file']['size']; //file size
			$image_temp = $_FILES['image_file']['tmp_name']; //file tem
			$file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') . "/trip_experience/" .time().'_'.$image_name;
	    	if (move_uploaded_file($_FILES['image_file']['tmp_name'], $file_url)) {
	            // $get_file = file_get_contents('http://dichung.vn/thumbnail/index.php?src='.$file_url.'&w=640&h=320&zc=1&q=100');
	            $path_name = 'uploads/trip_experience/'.time().'_'.$image_name;
	            $html.='<div class="col-md-2 padding_top anh" id="div_img_'.$id_experience.'">
							<img style="width:100px;height:100px" src="/'.$path_name.'"/>
							<div class="xoa_po">
								<a id="delete_image-'.$id_experience.'" class="delete_image"><span class="xoa"></span></a>
						</div>';
	     		$trip_experience_img = new TripExperienceImg();
	     		$trip_experience_img->setImages($path_name);
	     		$trip_experience_img->setTripExperienceId($id_experience);
	     		$trip_experience_img->save();
	         	return $this->renderText($html);
	        }
	        return $this->renderText('Upload Lỗi');
    	}
	}


	public function executeDelete_image_experience($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$trip_experience_img_id = $request->getParameter('tour_item_img_id');
			$trip_experience_img = TripExperienceImgPeer::retrieveByPK($trip_experience_img_id);
			$path_name = $trip_experience_img->getImages();
			unlink($path_name);
			$trip_experience_img->delete();
			return $this->renderText(json_encode(array('code'=>'1','msg'=>'ok','div_id' =>$trip_experience_img_id)));
		}
	}

	public function executeEdit_experience($request){
		$this->id_experience = $request->getParameter('id_experience');
		if(!$this->id_experience){
			$this->redirect('@hompage');
		}
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->errors = array();
	 	$html_name_file = array();
		$this->experience = TripExperiencePeer::retrieveByPK($this->id_experience);
		$this->images = explode(',',$this->experience->getImages());
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
		  	$count_img_experience = TripExperienceImgPeer::count_img_experience($this->id_experience);
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
		  			if(!$count_img_experience){
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

					$this->experience->setUserId($user_id);
					$this->experience->setTitle($title);
					$this->experience->setEnd($end);
					$this->experience->setCooEnd($coo_end);
					$this->experience->setLatEnd($lat_end);
					$this->experience->setLngEnd($lng_end);
					$this->experience->setTypeUploadId($type_upload);
					if($this->type_upload == '2'){
						$parts = parse_url($url_video);
		  				if ($parts['host'] == 'www.youtube.com'){
		  					$param = str_replace("v=","",$parts['query']);
		  					$video = 'https://www.youtube.com/embed/'.$param;
		  				}
		  				if($parts['host'] == 'youtu.be'){
	  						$video = 'https://www.youtube.com/embed'.$parts['path'];
		  				}
						$this->experience->setVideoUrl($video);
					}
					$this->experience->setContent($content);
					$this->experience->save();
					return $this->renderText(json_encode(array('code'=>'2','msg'=>'Cập nhật bài chia sẻ trải nghiệm thành công')));
				}
		  	}
		}
	}
}
