<?php
class trip_experienceActions extends sfActions
{
	public function executeIndex($request){
		$u = $this->getUser();
		$this->user_id = $u->getId();
		$arr = TripExperiencePeer::getAll();
		$this->experience = $arr['experience'];
		$u->setAttribute('experience_session',$this->experience);
	}

	public function executeSelect_filter_experience($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			if($select_filter_experience){
				$experience = $u->getAttribute('experience_session');
			 	$array = array();
				 foreach($experience as $key => $row) {
                    $array[$key] = $row['count_view'];
                }
               	array_multisort($array,SORT_DESC, $experience);
               	$html = TripExperiencePeer::return_html_search($experience);
				return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html)));
			}else{
			 	$this->renderText(json_encode(array('code'=> 2,'msg'=>'ok')));
			}
		}
	}

	public function executeRead_more_content($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			$page = $request->getParameter('page');
			$arr = TripExperiencePeer::read_more_loading($select_filter_experience,$page);
			$experience = $arr['experience'];
			$max_page = $arr['max_page'];
			$u->setAttribute('experience_session',$experience);
		 	$html = TripExperiencePeer::return_html_search($experience);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeButton_search($request){
		$rsAjax = $request->isXmlHttpRequest();
		$u = $this->getUser();
	 	$html = '';
		if($rsAjax){
			$select_filter_experience = $request->getParameter('select_filter_experience');
			$search_end = $request->getParameter('search_end');	
			$arr = TripExperiencePeer::search_end($select_filter_experience,$search_end);
			$experience = $arr['experience'];
			$max_page = $arr['max_page'];
		 	$html = TripExperiencePeer::return_html_search($experience);
		 	if($html){
		 		$u->setAttribute('experience_session',$experience);
		 		return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		 	}else{
		 		return $this->renderText(json_encode(array('code'=> 2,'msg'=>'ok')));
		 	}
		}
	}

	public function executeExperience_detail($request){
		$this->user_id = 0;
		$u = $this->getUser();
		$this->user_id = $u->getId();
		$experience_id = $request->getParameter('id');
		if(!$experience_id){
			$this->redirect('@experience');
		}
		$count_view = $u->getAttribute('count_view_session_'.$experience_id);
		$this->experience = TripExperiencePeer::retrieveByPK($experience_id);
	    $seo = $u->getSeo();
	    $seo->setTitle($this->experience->getTitleSeo());
	    $seo->setDescription($this->experience->getDescriptionSeo());
	    $seo->setThumb('http://gheptour.vn/'.$this->experience->getImagesThumb());
		$user_id = $this->experience->getUserId();
		$this->user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
		$this->url = $request->getUri();
		if(!$count_view){
			$this->experience->setCountView($this->experience->getCountView() + 1);
			$this->experience->save();
			$u->setAttribute('count_view_session_'.$experience_id,'1');
		}
		$this->comment_experience = CommentExperiencePeer::getAll($experience_id);
	}

	public function executeCreate_experience($request){
		$u = $this->getUser();
		$user_id = $u->getId();
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->errors = array();
	 	$html_name_file = array();
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
						 	 	$file_url = sfConfig::get('sf_upload_dir') . "/" . sfConfig::get('app_folder_pdf') ."/trip_experience/".$time.md5($file_name).'.'.$extension;
	                        	if (move_uploaded_file($_FILES['files']['tmp_name'][$key], $file_url)) {
	                        		$host = $request->getHost();
	                        		$file_url_domain = $host. "/uploads/trip_experience/".$time.md5($file_name).'.'.$extension;
	                                $get_file = file_get_contents('http://dichung.vn/thumbnail/index.php?src='.$file_url_domain.'&w=690&h=420&zc=1&q=100');   		
	                                if($get_file !== false){
	                                    file_put_contents('/uploads/trip_experience/'.$time.md5($file_name).'_690_420'.'.'.$extension, $get_file);
	                                    $html_name_file[]= 'uploads/trip_experience/'.$time.md5($file_name).'_690_420'.'.'.$extension;       
	                                    unlink('uploads/trip_experience/'.md5($file_name).'.'.$extension);
	                                }else{
                                	   $html_name_file[]= 'uploads/trip_experience/'.$time.md5($file_name).'.'.$extension;  
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
					$trip_experience = new TripExperience();
					$trip_experience->setUserId($user_id);
					$trip_experience->setTitle($this->title);
					$trip_experience->setEnd($this->end);
					$trip_experience->setCooEnd($this->coo_end);
					$trip_experience->setLatEnd($this->lat_end);
					$trip_experience->setLngEnd($this->lng_end);
					$trip_experience->setTypeUploadId($this->type_upload);
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
					$trip_experience->setContent($this->content);
					$trip_experience->save();
					$id_trip_experience = $trip_experience->getId();
					if($this->type_upload == '1'){
						foreach ($html_name_file as $key => $value) {
							$trip_experience_img = new TripExperienceImg();
							$trip_experience_img->setImages($value);
							$trip_experience_img->setTripExperienceId($id_trip_experience);
							$trip_experience_img->save();
						}
					}
					$this->redirect('@experience');
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
			$experience_id = $request->getParameter('experience_id');
			$content_comment = trim($request->getParameter('content_comment'));
			if(!$content_comment){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa nhập nhận xét')));
			}else{
				$comment_experience = new CommentExperience();
				$comment_experience->setTripExperienceId($experience_id);
				$comment_experience->setUserId($user_id);
				$comment_experience->setComment($content_comment);
				$comment_experience->setRating($rating_tongthe);
				$comment_experience->save();
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'ok')));
			}
		}
	}

}
