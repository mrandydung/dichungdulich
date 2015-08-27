<?php
class trip_acquirementsActions extends sfActions
{	
	public function executeIndex($request){
		$u = $this->getUser();
		$this->user_id = $u->getId();
		$arr = TripAcquirementsPeer::getAll();
		$this->acquirements = $arr['acquirements'];
		$u->setAttribute('acquirements',$this->acquirements);
	}

	public function executeAcquirements_detail($request){
		$this->user_id = 0;
		$u = $this->getUser();
		$this->user_id = $u->getId();
		$acquirements_id = $request->getParameter('id');
		if(!$acquirements_id){
			$this->redirect('@acquirements');
		}
		$count_view = $u->getAttribute('count_view_session_acquirement'.$acquirements_id);
		$this->acquirements = TripAcquirementsPeer::retrieveByPK($acquirements_id);
	    $seo = $u->getSeo();
	    $seo->setTitle($this->acquirements->getTitleSeo());
	    $seo->setDescription(strip_tags($this->acquirements->getDescriptionSeo()));
	    $seo->setThumb('http://gheptour.vn/'.$this->acquirements->getImagesThumb());
		$user_id = $this->acquirements->getUserId();
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->url = $request->getUri();
		if(!$count_view){
			$this->acquirements->setCountView($this->acquirements->getCountView() + 1);
			$this->acquirements->save();
			$u->setAttribute('count_view_session_acquirement'.$acquirements_id,'1');
		}
		$this->comment_acquirements = CommentAcquirementsPeer::getAll($acquirements_id);
	}
    
    public function executeRead_more_content($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			$page = $request->getParameter('page');
			$arr = TripAcquirementsPeer::read_more_loading($select_filter_experience,$page);
			$acquirements = $arr['acquirements'];
			$max_page = $arr['max_page'];
			$u->setAttribute('acquirements_session',$acquirements);
		 	$html = TripAcquirementsPeer::return_html_search($acquirements);
		 	return $this->renderText(json_encode(array('code'=> 1,'max_page'=>$max_page,'msg'=>'ok','html'=>$html)));
		}
	}
    
    public function executeSelect_filter_experience($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			if($select_filter_experience){
				$arr = TripAcquirementsPeer::read_more_loading($select_filter_experience,1);
				$acquirements = $arr['acquirements'];
				$html = TripAcquirementsPeer::return_html_search($acquirements);
				return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html)));
			}
			else{
			 	$this->renderText(json_encode(array('code'=> 2,'msg'=>'ok')));
			}
		}
	}
    
    public function executeButton_search($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			$search_end = $request->getParameter('search_end');	
			$arr = TripAcquirementsPeer::search_end($select_filter_experience,$search_end);
			$acquirements = $arr['acquirements'];
			$max_page = $arr['max_page'];
		 	$html = TripAcquirementsPeer::return_html_search($acquirements);
		 	if($html){
		 		$u->setAttribute('experience_session',$acquirements);
		 		return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		 	}else{
		 		return $this->renderText(json_encode(array('code'=> 2,'msg'=>'ok')));
		 	}
		}
	}

	public function executeCreate_accquirements($request){
			$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->errors = array();
	 	$html_name_file = array();
	 	$html_name_file_thumb = array();
	 	$this->type_upload = 1;
		if($request->isMethod('POST')){
		  	$file = $_FILES['files'];
		  	$this->title = trim($request->getParameter('title'));
		  	$this->end = trim($request->getParameter('end'));
		  	$this->type_upload = $request->getParameter('type_upload');
		  	$this->content = trim($request->getParameter('content'));
		  	$this->coo_end = $request->getParameter('coo_end');
		  	$this->lat_end = $request->getParameter('lat_end');
		  	$this->lng_end = $request->getParameter('lng_end');
		  	$this->url_video = trim($request->getParameter('url_video'));
		  	$this->eating = trim($request->getParameter('eating'));
		  	$this->home = trim($request->getParameter('home'));
		  	$this->location_play = trim($request->getParameter('location_play'));
		  	$this->location_up_to = trim($request->getParameter('location_up_to'));
		  	$this->what_to_by = trim($request->getParameter('what_to_by'));
		  	if(strlen($this->title) < 6){
		  		$this->errors [] = 'Tiêu đề quá ngắn';
		  		return false;
		  	}elseif (!$this->end || !$this->coo_end) {
		  		$this->errors [] = 'Điểm đến không chính xác';
		  		return false;
		  	}elseif (!$this->content) {
		  		$this->errors [] = 'Bạn chưa nhập nội dung chia sẻ';
		  		return false;
		  	}else{
		  		if($this->type_upload == '1'){
		  			foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){		
						$file_name = $_FILES['files']['name'][$key];
						$allowedExts = array("jpeg", "jpg", "png");
						$temp = explode(".", $file_name);
						$extension = strtolower(end($temp));
						$file_size =$_FILES['files']['size'][$key];
						$file_tmp =	$_FILES['files']['tmp_name'][$key];
						$file_type=	$_FILES['files']['type'][$key];
					    $file_upload_err = $_FILES['files']['error'][$key];		 
				    	$count_file = count(($_FILES['files']['tmp_name']));	  				
						if($file_size > 5000000){
							$this->errors[]='Kích cỡ file ảnh không được lớn hơn 5Mb !';
							return false;
						}
					   	if($count_file > 10)
					    {
				    		$_FILES['files']['tmp_name'] = '';
					    	$this->errors [] ='Chỉ được upload tối đa 10 ảnh !';	
					    	return false;				    	
					    }
						
						elseif((!$file_type == "image/gif") || (!$file_type == "image/jpeg") || (!$file_type == "image/jpg") || (!$file_type == "image/pjpeg") || (!$file_type == "image/x-png") || (!$file_type == "image/png")){
	                        $this->errors[] = "Bạn chưa chọn ảnh upload hoặc Tập tin của bạn không nằm trong định dạng được sử dụng vui lòng kiểm tra lại !";
	                    	return false;
		                   
						}
						elseif(!in_array($extension, $allowedExts)){
	                        $this->errors[] = "Tập tin của bạn có phần mở rộng không phù hợp vui lòng kiểm tra lại !";
						 	return false; 
		                	
						}
						elseif($file_upload_err > 0){
	                        $this->errors[] = "Tập tin của bạn có lỗi vui lòng kiểm tra lại !";
		 				 	return false;
						}
						else{
							if(empty($this->errors)){
								$time = time();
						 	 	$file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') ."/trip_acquirements/".$time.md5($file_name).'.'.$extension;
	                        	if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $file_url)) {
	                        		$host = $request->getHost();
	                        		$file_url_domain = "/uploads/trip_acquirements/".$time.md5($file_name).'.'.$extension;
	                                $get_file = file_get_contents('http://'.$host.'/thumbnail/index.php?src='.$file_url_domain.'&w=640&h=350&q=100'); 
	                                $get_file_thumb = file_get_contents('http://'.$host.'/thumbnail/index.php?src='.$file_url_domain.'&w=308&h=205&q=100');     		
	                                if($get_file !== false){
	                                    file_put_contents('uploads/trip_acquirements/'.$time.md5($file_name).'_690_420'.'.'.$extension, $get_file);
	                                    file_put_contents('uploads/trip_acquirements/'.$time.md5($file_name).'_308_205'.'.'.$extension, $get_file_thumb);
	                                    $html_name_file[]= 'uploads/trip_acquirements/'.$time.md5($file_name).'_690_420'.'.'.$extension; 
                                     	$html_name_file_thumb[]= 'uploads/trip_acquirements/'.$time.md5($file_name).'_308_205'.'.'.$extension;             
	                                    unlink('uploads/trip_acquirements/'.$time.md5($file_name).'.'.$extension);
	                                }else{
                                	   $html_name_file[]= 'uploads/trip_acquirements/'.$time.md5($file_name).'.'.$extension;  
	                                }
	                        	}
	                        	else{
								 	$this->errors[] = "Đăng bài lỗi !";
								 	echo '<script>alert("Đăng bài lỗi !");</script>';
								}
							}
						}
					}	
		  		}
		  		if($this->type_upload == '2'){
					$parts = parse_url($this->url_video);
		  			if (($parts['host'] == 'www.youtube.com') || ($parts['host'] == 'youtu.be')){
		
					}else{
						$this->errors []='Định dạng mã nhúng video youtobe sai .VD : https://www.youtube.com/watch?v=d_8fE-On19I hoặc https://youtu.be/d_8fE-On19I';
					}
		  		}
		  		if(empty($this->errors)){
					$trip_acquirements= new TripAcquirements();
					$trip_acquirements->setUserId($user_id);
					$trip_acquirements->setTitle($this->title);
					$trip_acquirements->setTitleSeo($this->title);
					$trip_acquirements->setEnd($this->end);
					$trip_acquirements->setCooEnd($this->coo_end);
					$trip_acquirements->setLatEnd($this->lat_end);
					$trip_acquirements->setLngEnd($this->lng_end);
					$trip_acquirements->setTypeUploadId($this->type_upload);
					if($this->type_upload == '2'){
						$parts = parse_url($this->url_video);
		  				if ($parts['host'] == 'www.youtube.com'){
		  					$param = str_replace("v=","",$parts['query']);
		  					$video = 'https://www.youtube.com/embed/'.$param;
		  				}
		  				if($parts['host'] == 'youtu.be'){
	  						$video = 'https://www.youtube.com/embed'.$parts['path'];
		  				}
						$trip_experience->setVideoUrl($video);
					}
					$trip_acquirements->setContent($this->content);
					$trip_acquirements->setDescriptionSeo(strip_tags($this->content,''));
					$trip_acquirements->setEating($this->eating);
					$trip_acquirements->setHome($this->home);
					$trip_acquirements->setLocationPlay($this->location_play);
					$trip_acquirements->setLocationUpTo($this->location_up_to);
					$trip_acquirements->setWhatToBy($this->what_to_by);
					$partner_id = myUser::get_partner_id();
					$trip_acquirements->setPartnerId($partner_id);
					$trip_acquirements->save();
					$id_trip_acquirements = $trip_acquirements->getId();
					if($this->type_upload == '1'){
						foreach ($html_name_file as $key => $value) {
							$trip_acquirements_img = new TripAcquirementsImg();
							$trip_acquirements_img->setImages($value);
							$trip_acquirements_img->setImagesThumb($html_name_file_thumb[$key]);
							$trip_acquirements_img->setTripAcquirementsId($id_trip_acquirements);
							$trip_acquirements_img->save();
						}
					}
					$this->redirect('@user_acquirements');
				}
		  	}
		}
	}

	public function executeSubmit_rating($request){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$u = $this->getUser();
			$user_id = $u->getId();
			$rating_tongthe = $request->getParameter('rating_tongthe');
			$acquirements_id = $request->getParameter('acquirements_id');
			$content_comment = trim($request->getParameter('content_comment'));
			if(!$content_comment){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa nhập nhận xét')));
			}else{
				$comment_acquirements = new CommentAcquirements();
				$comment_acquirements->setTripAcquirementsId($acquirements_id);
				$comment_acquirements->setUserId($user_id);
				$comment_acquirements->setComment($content_comment);
				$comment_acquirements->setRating($rating_tongthe);
				$comment_acquirements->save();
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
			}
		}
	}
}
