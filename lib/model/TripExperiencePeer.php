<?php

/**
 * Subclass for performing query and update operations on the 'trip_experience' table.
 *
 * 
 *
 * @package lib.model
 */ 
class TripExperiencePeer extends BaseTripExperiencePeer
{
	public static function getAll(){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->addSelectColumn(self::ID);
		$c->addSelectColumn(self::USER_ID);
		$c->addSelectColumn(self::TITLE);
		$c->addSelectColumn(self::END);
		$c->addSelectColumn(self::TYPE_UPLOAD_ID);
		$c->addSelectColumn(self::IMAGES);
		$c->addSelectColumn(self::VIDEO_URL);
		$c->addSelectColumn(self::COUNT_VIEW);
		$c->addSelectColumn(self::COUNT_LIKE);
		$c->addSelectColumn(self::COUNT_SHARE);
		$pager = new sfPropelPager('TripExperience', 9);
      	$pager->setPeerMethod('doSelectRs');
      	$pager->setPage(1);
	    $pager->setCriteria($c);
	    $pager->init();
	   
	    $rs = $pager->getResults();
    	sfLoader::loadHelpers('Url');
		$arr = array();
		while ($rs->next()) {
			$id = $rs->get(1);
			$user_id = $rs->get(2);
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$fullname = $user->getFullname();
			$title = $rs->get(3);
			$url = url_for('@experience_detail?name='.myUtil::strToSlug($title).'&id='.$id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$end = $rs->get(4);
			$type_upload_id = $rs->get(5);
			$rs_images = TripExperienceImgPeer::get_img_thumb($id);
			if($rs_images){
				$images = '/'.$rs_images->getImages();
			}else{
				$images = 0;
			}
			$video_url = $rs->get(7);
			$video = '<iframe width="100%" height="204px" src="'.$video_url.'" frameborder="0" allowfullscreen></iframe>';
			$count_view = $rs->get(8);
			$count_like =  $rs->get(9);
			$count_share =  $rs->get(10);
			$arr [] = array('id'=>$id,'url'=>$url,'type_upload_id'=>$type_upload_id,'title'=>$title,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'end'=>$end,'video'=>$video,'images'=>$images,'count_view'=>$count_view,'count_like'=>$count_like,'count_share'=>$count_share);
		}
		 $max_page = $pager->getLastPage();
		return array('experience'=>$arr,'max_page'=>$max_page);
	}

	public static function read_more_loading($select_filter_experience,$page){
		$c = new Criteria();
		if($select_filter_experience){
			$c->addDescendingOrderByColumn(self::COUNT_VIEW);
		}else{
			$c->addDescendingOrderByColumn(self::ID);
		}
		$c->addSelectColumn(self::ID);
		$c->addSelectColumn(self::USER_ID);
		$c->addSelectColumn(self::TITLE);
		$c->addSelectColumn(self::END);
		$c->addSelectColumn(self::TYPE_UPLOAD_ID);
		$c->addSelectColumn(self::IMAGES);
		$c->addSelectColumn(self::VIDEO_URL);
		$c->addSelectColumn(self::COUNT_VIEW);
		$c->addSelectColumn(self::COUNT_LIKE);
		$c->addSelectColumn(self::COUNT_SHARE);
		$pager = new sfPropelPager('TripExperience', 9);
      	$pager->setPeerMethod('doSelectRs');
      	$pager->setPage($page);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
    	sfLoader::loadHelpers('Url');
		$arr = array();
		while ($rs->next()) {
			$id = $rs->get(1);
			$user_id = $rs->get(2);
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$fullname = $user->getFullname();
			$title = $rs->get(3);
			$url = url_for('@experience_detail?name='.myUtil::strToSlug($title).'&id='.$id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$end = $rs->get(4);
			$type_upload_id = $rs->get(5);
			$rs_images = TripExperienceImgPeer::get_img_thumb($id);
			if($rs_images){
				$images = '/'.$rs_images->getImages();
			}else{
				$images = 0;
			}
			$video_url = $rs->get(7);
			$video = '<iframe width="100%" height="204px" src="'.$video_url.'" frameborder="0" allowfullscreen></iframe>';
			$count_view = $rs->get(8);
			$count_like =  $rs->get(9);
			$count_share =  $rs->get(10);
			$arr [] = array('id'=>$id,'url'=>$url,'type_upload_id'=>$type_upload_id,'title'=>$title,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'end'=>$end,'video'=>$video,'images'=>$images,'count_view'=>$count_view,'count_like'=>$count_like,'count_share'=>$count_share);
		}
		$max_page = $pager->getLastPage();
		return array('experience'=>$arr,'max_page'=>$max_page);
	}

	public static function getMinMaxCoo($coo)
	{
		list($lat,$lng) = explode(",", $coo);
		$radius = 20;
		$range = 0.325*$radius; 
		$lat_range = $range/69.172;  
		$lon_range = abs($range/(cos($lat) * 69.172));  
		$min_lat = number_format($lat - $lat_range, "4", ".", "");  
		$max_lat = number_format($lat + $lat_range, "4", ".", "");  
		$min_lon = number_format($lng - $lon_range, "4", ".", "");  
		$max_lon = number_format($lng + $lon_range, "4", ".", ""); 
		return array('min_lat'=>$min_lat,'max_lat'=>$max_lat,'min_lon'=>$min_lon,'max_lon'=>$max_lon);
	}

	public static function search_end($select_filter_experience,$search_end){
		$coo = HomeDiemDenItemPeer::return_coo($search_end);
		$c = new Criteria();
		if($select_filter_experience){
			$c->addDescendingOrderByColumn(self::COUNT_VIEW);
		}else{
			$c->addDescendingOrderByColumn(self::ID);
		}
		if($coo)
		{	
            $arr_coo = self::getMinMaxCoo($coo);
            $min_lat = $arr_coo['min_lat'];
            $max_lat = $arr_coo['max_lat'];  
            $min_lon = $arr_coo['min_lon'];  
            $max_lon = $arr_coo['max_lon'];  
            $c->add(self::LAT_END,$min_lat,Criteria::GREATER_EQUAL);
            $c->addAnd(self::LAT_END,$max_lat,Criteria::LESS_EQUAL);
            $c->add(self::LNG_END,$min_lon,Criteria::GREATER_EQUAL);
            $c->addAnd(self::LNG_END,$max_lon,Criteria::LESS_EQUAL);
            
		}
		$c->addSelectColumn(self::ID);
		$c->addSelectColumn(self::USER_ID);
		$c->addSelectColumn(self::TITLE);
		$c->addSelectColumn(self::END);
		$c->addSelectColumn(self::TYPE_UPLOAD_ID);
		$c->addSelectColumn(self::IMAGES);
		$c->addSelectColumn(self::VIDEO_URL);
		$c->addSelectColumn(self::COUNT_VIEW);
		$c->addSelectColumn(self::COUNT_LIKE);
		$c->addSelectColumn(self::COUNT_SHARE);
		$pager = new sfPropelPager('TripExperience', 15);
      	$pager->setPeerMethod('doSelectRs');
      	$pager->setPage($page);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
    	sfLoader::loadHelpers('Url');
		$arr = array();
		while ($rs->next()) {
			$id = $rs->get(1);
			$user_id = $rs->get(2);
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$fullname = $user->getFullname();
			$title = $rs->get(3);
			$url = url_for('@experience_detail?name='.myUtil::strToSlug($title).'&id='.$id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$end = $rs->get(4);
			$type_upload_id = $rs->get(5);
			$rs_images = TripExperienceImgPeer::get_img_thumb($id);
			if($rs_images){
				$images = '/'.$rs_images->getImages();
			}else{
				$images = 0;
			}
			$video_url = $rs->get(7);
			$video = '<iframe width="100%" height="204px" src="'.$video_url.'" frameborder="0" allowfullscreen></iframe>';
			$count_view = $rs->get(8);
			$count_like =  $rs->get(9);
			$count_share =  $rs->get(10);
			$arr [] = array('id'=>$id,'url'=>$url,'type_upload_id'=>$type_upload_id,'title'=>$title,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'end'=>$end,'video'=>$video,'images'=>$images,'count_view'=>$count_view,'count_like'=>$count_like,'count_share'=>$count_share);
		}
		$max_page = $pager->getLastPage();
		return array('experience'=>$arr,'max_page'=>$max_page);
	}



	public static function get_experience_noi_bat(){
		$c = new Criteria();
		$c->addAscendingOrderByColumn(self::PRIORITY);
		$c->add(self::TYPE_UPLOAD_ID,1);
		$c->add(self::EXPERIENCE_FEATURED,1);
		$c->addSelectColumn(self::ID);
		$c->addSelectColumn(self::USER_ID);
		$c->addSelectColumn(self::TITLE);
		$c->addSelectColumn(self::END);
		$c->addSelectColumn(self::TYPE_UPLOAD_ID);
		$c->addSelectColumn(self::IMAGES);
		$c->addSelectColumn(self::VIDEO_URL);
		$c->addSelectColumn(self::COUNT_VIEW);
		$c->addSelectColumn(self::COUNT_LIKE);
		$c->addSelectColumn(self::COUNT_SHARE);
		$pager = new sfPropelPager('TripExperience', 9);
      	$pager->setPeerMethod('doSelectRs');
      	$pager->setPage(1);
	    $pager->setCriteria($c);
	    $pager->init();
	    $rs = $pager->getResults();
    	sfLoader::loadHelpers('Url');
		$arr = array();
		while ($rs->next()) {
			$id = $rs->get(1);
			$user_id = $rs->get(2);
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://gheptour.vn/thumbnail/index.php?src=http://dichung.vn'.$avatar.'&w=52&h=52&q=100';
			}
			$fullname = $user->getFullname();
			$title = $rs->get(3);
			$url = url_for('@experience_detail?name='.myUtil::strToSlug($title).'&id='.$id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$end = $rs->get(4);
			$type_upload_id = $rs->get(5);
			$rs_images = TripExperienceImgPeer::get_img_thumb($id);
			if($rs_images){
				$images = 'http://gheptour.vn/thumbnail/index.php?src='.$rs_images->getImages().'&w=308&h=200&q=100';
			}else{
				$images = 0;
			}
			$video_url = $rs->get(7);
			$video = '<iframe width="100%" height="204px" src="'.$video_url.'" frameborder="0" allowfullscreen></iframe>';
			$count_view = $rs->get(8);
			$count_like =  $rs->get(9);
			$count_share =  $rs->get(10);
			$arr [] = array('id'=>$id,'url'=>$url,'type_upload_id'=>$type_upload_id,'title'=>$title,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'end'=>$end,'video'=>$video,'images'=>$images,'count_view'=>$count_view,'count_like'=>$count_like,'count_share'=>$count_share);
		}
		return $arr;
	}

	public static function getAllByUserId($user_id){
		$c = new Criteria();
		$c->addDescendingOrderByColumn(self::ID);
		$c->add(self::USER_ID,$user_id);
		$c->addSelectColumn(self::ID);
		$c->addSelectColumn(self::USER_ID);
		$c->addSelectColumn(self::TITLE);
		$c->addSelectColumn(self::END);
		$c->addSelectColumn(self::TYPE_UPLOAD_ID);
		$c->addSelectColumn(self::IMAGES);
		$c->addSelectColumn(self::VIDEO_URL);
		$c->addSelectColumn(self::COUNT_VIEW);
		$c->addSelectColumn(self::COUNT_LIKE);
		$c->addSelectColumn(self::COUNT_SHARE);
		$rs = self::doSelectRs($c);
    	sfLoader::loadHelpers('Url');
		$arr = array();
		while ($rs->next()) {
			$id = $rs->get(1);
			$user_id = $rs->get(2);
			$user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
			$avatar = $user->getAvatar();
			if(substr($avatar,0,8) == '/uploads'){
				$avatar = 'http://dichung.vn'.$avatar;
			}
			$fullname = $user->getFullname();
			$title = $rs->get(3);
			$url = url_for('@experience_detail?name='.myUtil::strToSlug($title).'&id='.$id);
			$url_edit = url_for('@edit_experience?name='.myUtil::strToSlug($title).'&id_experience='.$id);
			$url_user = url_for('@user_profile_default?name='.myUtil::strToSlug($fullname).'&user_id='.$user_id);
			$end = $rs->get(4);
			$type_upload_id = $rs->get(5);
			$rs_images = TripExperienceImgPeer::get_img_thumb($id);
			if($rs_images){
				$images = '/'.$rs_images->getImages();
			}else{
				$images = 0;
			}
			$video_url = $rs->get(7);
			$video = '<iframe width="100%" height="204px" src="'.$video_url.'" frameborder="0" allowfullscreen></iframe>';
			$count_view = $rs->get(8);
			$count_like = $rs->get(9);
			$count_share =$rs->get(10);			
			$arr [] = array('id'=>$id,'url'=>$url,'url_edit'=>$url_edit,'type_upload_id'=>$type_upload_id,'title'=>$title,'avatar'=>$avatar,'fullname'=>$fullname,'url_user'=>$url_user,'end'=>$end,'video'=>$video,'images'=>$images,'count_view'=>$count_view,'count_like'=>$count_like,'count_share'=>$count_share);
		}
		return $arr;
	}
	
	public static function facebook_count($url){
	    $fql  = "SELECT share_count, like_count, comment_count ";
	    $fql .= " FROM link_stat WHERE url = '$url'";
	 
	    $fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=" . urlencode($fql);
	    $response = file_get_contents($fqlURL);
	    return json_decode($response);
	}

	public static function getAll_count_FB($arrayOfPages){
		// $arrayOfPages = array("http://gheptour.vn/trai-nghiem-chuyen-di/test-trai-nghiem-chuyen-di-34.html", "http://gheptour.vn/trai-nghiem-chuyen-di/test-trai-nghiem-chuyen-di-33.html","http://gheptour.vn/trai-nghiem-chuyen-di/test-trai-nghiem-chuyen-di-32.html");
		$arr = '';
		for($i = 0; $i < count($arrayOfPages); $i++){
			if($i == count($arrayOfPages) - 1){
				$arr .= "'".$arrayOfPages[$i]."'";
			}else{
				$arr .= "'".$arrayOfPages[$i]."',";
			}
		}
		$fql = 'SELECT url,like_count,share_count FROM link_stat WHERE url IN ('.$arr.')';
	    $fqlURL = "https://api.facebook.com/method/fql.query?format=json&query=".urlencode($fql);
	    $response = file_get_contents($fqlURL);
	    return json_decode($response);

	}

	public static function return_html_search($experience){
		$html = '';
		foreach ($experience as $key => $value) {
			$html .= '<div class="col-md-4 box_1x">
			    <div class="exp_infor_bg">';
				if($value['type_upload_id'] == '1'){
			        $html .='<a href="'.$value['url'].'" target="_blank"><img src="'.$value['images'].'" width="100%" height="205px" style="margin-bottom: 5px" /></a>';
			       }else{
			       $html .= $value['video'];
		       	}
			    $html.= '<div class="exp_infor_user" style="width: 100%;height:100px">
			            <a href="'.$value['url_user'].'" target="_blank"><img src="'.$value['avatar'].'" class="ava" width="60px" height="60px" ></a>
			            <p><a class="text-uppercase trip" href="'.$value['url'].'" target="_blank">'.$value['title'].'</a></p>
			            <a class="text-uppercase username" href="'.$value['url_user'].'" target="_blank">'.$value['fullname'].'</a>
			            <h5 style="padding-left: 25%"><small><span class="location"></span>'.$value['end'].'</small></h5>
			        </div>
			        <div class="statistic">
			            <div class="row">
			                <div class="col-md-12 text-center">
			                    <h5><img src="/img/view_sl.png"><small> '.$value['count_view'].'</small></h5>
			                </div>
			                <div class="clear"></div>
			            </div>
			        </div>
			    </div>
			</div>';
		}
		return $html;
	}
}
