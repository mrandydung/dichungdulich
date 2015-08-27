<?php

class area_tourActions extends sfActions{
	public function executeTour_trong_nuoc($request){
		$diem_den_trong_nuoc_tmp = TourDetailPeer::get_all_tour_trong_nuoc(1,0);
		$this->diem_den_trong_nuoc = $diem_den_trong_nuoc_tmp['are_tour'];
		$this->count_all_tour_trong_nuoc = TourDetailPeer::count_all_tour_trong_nuoc();
		$this->count_all_diem_den_trong_nuoc = HomeDiemDenItemPeer::count_all_dia_diem_trong_nuoc();
	}

	public function executeTour_quoc_te($request){
		$diem_den_quoc_te_tmp = TourDetailPeer::get_all_tour_quoc_te(1,0);
		$this->diem_den_quoc_te = $diem_den_quoc_te_tmp['are_tour'];
		$this->count_all_tour_quoc_te = TourDetailPeer::count_all_tour_quoc_te();
		$this->count_all_diem_den_quoc_te = HomeDiemDenItemPeer::count_all_dia_diem_quoc_te();
	}

	public function executeTour_moi_noi($request){
		$diem_den_moi_noi_tmp = TourDetailPeer::get_all_tour_moi_noi(1,0);
		$this->diem_den_moi_noi = $diem_den_moi_noi_tmp['are_tour'];
		$this->count_all_tour_moi_noi= TourDetailPeer::count_all_tour_moi_noi();
		$this->count_all_diem_den_moi_noi = HomeDiemDenItemPeer::count_all_dia_diem_moi_noi();
	}

  	public function executeRead_more_content_tour_trong_nuoc($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_trong_nuoc = $request->getParameter('select_filter_tour_trong_nuoc');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_trong_nuoc($page,$select_filter_tour_trong_nuoc);

			$diem_den_trong_nuoc = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_trong_nuoc);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeRead_more_content_tour_quoc_te($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_quoc_te = $request->getParameter('select_filter_tour_quoc_te');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_quoc_te($page,$select_filter_tour_quoc_te);

			$diem_den_quoc_te = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_quoc_te);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeRead_more_content_tour_moi_noi($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_moi_noi = $request->getParameter('select_filter_tour_moi_noi');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_moi_noi($page,$select_filter_tour_moi_noi);
			$diem_den_moi_noi = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_moi_noi);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeSelect_filter_tour_trong_nuoc($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_trong_nuoc = $request->getParameter('select_filter_tour_trong_nuoc');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_trong_nuoc($page,$select_filter_tour_trong_nuoc);

			$diem_den_trong_nuoc = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_trong_nuoc);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeSelect_filter_tour_quoc_te($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_quoc_te = $request->getParameter('select_filter_tour_quoc_te');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_quoc_te($page,$select_filter_tour_quoc_te);

			$diem_den_quoc_te = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_quoc_te);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

	public function executeSelect_filter_tour_moi_noi($request){
		$rsAjax = $request->isXmlHttpRequest();
	 	$html = '';
		if($rsAjax){
			$select_filter_tour_moi_noi = $request->getParameter('select_filter_tour_moi_noi');
			$page = $request->getParameter('page');
			$arr = TourDetailPeer::get_all_tour_moi_noi($page,$select_filter_tour_moi_noi);
			$diem_den_quoc_te = $arr['are_tour'];
			$max_page = $arr['max_page'];
		 	$html = TourDetailPeer::return_html_area_tour($diem_den_quoc_te);
		 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
		}
	}

  	public function executeSearch_end_trong_nuoc($request){
        $rsAjax = $request->isXmlHttpRequest();
        if($rsAjax)
        {
            $search_end = trim($request->getParameter('search_end'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($search_end));  
            $arr_region = array('1','2','3');
            $c = new Criteria();
            $c->add(HomeDiemDenItemPeer::NAME, "%".$terms."%", Criteria::LIKE);
            $c->add(HomeDiemDenItemPeer::REGION_ID,$arr_region,Criteria::IN);
            $rs = HomeDiemDenItemPeer::doSelect($c);
            $arr = array();
            foreach ($rs as $key => $value) {
               $arr [] = $value->getName();
            }
            return $this->renderText(json_encode($arr));
        }
  	}

	public function executeSearch_end_quoc_te($request){
        $rsAjax = $request->isXmlHttpRequest();
        if($rsAjax)
        {
            $search_end = trim($request->getParameter('search_end_quoc_te'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($search_end));  

            $c = new Criteria();
            $c->add(HomeDiemDenItemPeer::NAME, "%".$terms."%", Criteria::LIKE);
            $c->add(HomeDiemDenItemPeer::AREA_ID,1,Criteria::NOT_EQUAL);
            $rs = HomeDiemDenItemPeer::doSelect($c);
            $arr = array();
            foreach ($rs as $key => $value) {
               $arr [] = $value->getName();
            }
            return $this->renderText(json_encode($arr));
        }
  	}

  	public function executeSearch_end_moi_noi($request){
        $rsAjax = $request->isXmlHttpRequest();
        if($rsAjax)
        {
            $search_end = trim($request->getParameter('search_end_moi_noi'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($search_end));  
            $c = new Criteria();
            $c->add(HomeDiemDenItemPeer::NAME, "%".$terms."%", Criteria::LIKE);
            $c->add(HomeDiemDenItemPeer::ENABLE_FEATURED,1,Criteria::EQUAL);
            $rs = HomeDiemDenItemPeer::doSelect($c);
            $arr = array();
            foreach ($rs as $key => $value) {
               $arr [] = $value->getName();
            }
            return $this->renderText(json_encode($arr));
        }
  	}

  public function executeSubmit_search_text_end_trong_nuoc($request){
 	$rsAjax = $request->isXmlHttpRequest();
    if($rsAjax){
    	$end_trong_nuoc = $request->getParameter('end_trong_nuoc');
    	$select_filter_tour_trong_nuoc = $request->getParameter('select_filter_tour_trong_nuoc');
		$page = $request->getParameter('page');
    	$arr = TourDetailPeer::get_text_search_tour_trong_nuoc($page,$select_filter_tour_trong_nuoc,$end_trong_nuoc);
    	$diem_den_trong_nuoc = $arr['are_tour'];
		$max_page = $arr['max_page'];
	 	$html = TourDetailPeer::return_html_area_tour($diem_den_trong_nuoc);
	 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
    }
  }

  public function executeSubmit_search_text_end_quoc_te($request){
 	$rsAjax = $request->isXmlHttpRequest();
    if($rsAjax){
    	$end_quoc_te = $request->getParameter('end_quoc_te');
    	$select_filter_tour_quoc_te = $request->getParameter('select_filter_tour_quoc_te');
		$page = $request->getParameter('page');
    	$arr = TourDetailPeer::get_text_search_tour_quoc_te($page,$select_filter_tour_quoc_te,$end_quoc_te);
    	$diem_den_quoc_te = $arr['are_tour'];
		$max_page = $arr['max_page'];
	 	$html = TourDetailPeer::return_html_area_tour($diem_den_quoc_te);
	 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
    }
  }

   public function executeSubmit_search_text_end_moi_noi($request){
 	$rsAjax = $request->isXmlHttpRequest();
    if($rsAjax){
    	$end_moi_noi = $request->getParameter('end_moi_noi');
    	$select_filter_tour_moi_noi = $request->getParameter('select_filter_tour_moi_noi');
		$page = $request->getParameter('page');
    	$arr = TourDetailPeer::get_text_search_tour_moi_noi($page,$select_filter_tour_moi_noi,$end_moi_noi);
    	$diem_den_quoc_te = $arr['are_tour'];
		$max_page = $arr['max_page'];
	 	$html = TourDetailPeer::return_html_area_tour($diem_den_quoc_te);
	 	return $this->renderText(json_encode(array('code'=> 1,'msg'=>'ok','html'=>$html,'max_page'=>$max_page)));
    }
  }

	public function executeUpdate_diem_den_item_tour($request){
		$c = new Criteria();
		$c->add(TourDetailPeer::SUCCESS_CREATED,true);
		$c->add(TourDetailPeer::ENABLED,true);
		$c->addSelectColumn(TourDetailPeer::ID);
		$c->addSelectColumn(TourDetailPeer::END);
		$rs = TourDetailPeer::doSelectRS($c);
		while ($rs->next()) {
			$tour_id = $rs->get(1);
			$end = trim($rs->get(2));
			$c = new Criteria();
			$c->add(HomeDiemDenItemPeer::NAME,'%'.$end.'%',Criteria::LIKE);
			$c->setLimit(1);
			$rs_home = HomeDiemDenItemPeer::doSelect($c);
			if($rs_home){
				foreach ($rs_home as $key => $value) {
					$home_id = $value->getId();
					$key_word = $value->getKeyword();
					$city_id = $value->getCityId();
					$region_id = $value->getRegionId();
					$area_id = $value->getAreaId();
					$tour = TourDetailPeer::retrieveByPK($tour_id);
					if($end){
						$tour->setHomeDiemDenItemId($home_id);
						$tour->setAreaId($area_id);
						$tour->setCityId($city_id);
						$tour->setKeyword($key_word);
						$tour->setRegionId($region_id);
					}else{
						$tour->setHomeDiemDenItemId(0);
						$tour->setAreaId(0);
						$tour->setCityId(0);
						$tour->setKeyword('');
						$tour->setRegionId(0);
					}
				
					$tour->save();
				}
			}
		}
	}



}
