<?php

class find_tourActions extends sfActions {

    public function executeFind_tour($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $coo_start = 0;
            $time_tour_search = $request->getParameter('time_tour_search');
            $price_tour_search = $request->getParameter('price_tour_search');
            $booking_form_to_address = trim($request->getParameter('booking_form_pick_address'));
            $coo_start = $request->getParameter('coo_start');
            if (!$coo_start) {
                $coo_start = 0;
            }
            $booking_form_to_address = trim($request->getParameter('booking_form_to_address'));
            $select_filter_find_tour = $request->getParameter('select_filter_find_tour');
            $home_item_id = $request->getParameter('home_item_id');
            if ($home_item_id) {
                $home_item = HomeDiemDenItemPeer::retrieveByPK($home_item_id);
                $booking_form_to_address = $home_item->getName();
            }
            $booking_form_start_date = $request->getParameter('booking_form_start_date');
            $select_filter_find_tour = $request->getParameter('select_filter_find_tour');
            $doi_tuong_tour_search = $request->getParameter('doi_tuong_tour_search');
            $tour_noi_bat_search = $request->getParameter('tour_noi_bat_search');
            $loai_tour_search = $request->getParameter('loai_tour_search');
            $doi_tuong_phu_hop_search = $request->getParameter('doi_tuong_phu_hop_search');
            $page = $request->getParameter('page');
            $tour_find = TourDetailPeer::find_tour_search($coo_start, $booking_form_to_address, $select_filter_find_tour, $booking_form_start_date, $time_tour_search, $price_tour_search, $page, $doi_tuong_tour_search, $tour_noi_bat_search, $doi_tuong_phu_hop_search, $loai_tour_search);
            $tour = $tour_find['tour'];
            $pager = $tour_find['page'];
            $count_all_tour = $tour_find['count'];
            $sorting = $tour_find['sorting'];
            $activities = $tour_find['activities'];
            $sorting_hotro = array();
            $sorting_activities = array();
            $count_max_sorting = TourSortingPeer::doCount(new Criteria());
            $count_max_activities = TourActivitiesPeer::doCount(new Criteria());
            foreach ($sorting as $key => $value_sorting) {
                if ($value_sorting) {
                    foreach ($value_sorting as $key => $val_sorting) {
                        if (isset($val_sorting->id)) {
                            for ($i = 1; $i <= $count_max_sorting; $i++) {
                                if ($val_sorting->id == $i) {
                                    $sorting_hotro[$i][] = $val_sorting->id;
                                }
                            }
                        }
                    }
                }
            }
            foreach ($activities as $key => $value) {
                if ($value) {
                    foreach ($value as $key => $val) {
                        if (isset($val->id)) {
                            for ($i = 1; $i <= $count_max_activities; $i++) {
                                if ($val->id == $i) {
                                    $sorting_activities[$i][] = $val->id;
                                }
                            }
                        }
                    }
                }
            }
            $html = TourDetailPeer::return_html_search_select($tour);
            $html_pager = TourDetailPeer::return_html_pager($pager, $page);
            $html_sorting_hotro = TourDetailPeer::return_html_sorting_hinh_thuc_du_lich($sorting_hotro);
            $html_sorting_activities = TourDetailPeer::return_html_sorting_hoat_dong_du_lich($sorting_activities);
            $u = $this->getUser();
            $u->setAttribute('tour_find', $tour);
            return $this->renderText(json_encode(array('code' => 1, 'sorting_hotro' => $sorting_hotro, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'], 'html_sorting_hotro' => $html_sorting_hotro, 'html_sorting_activities' => $html_sorting_activities, 'booking_form_to_address' => $booking_form_to_address, 'html_pager' => $html_pager, 'count_all_tour' => $count_all_tour)));
        }
    }

    public function executeFilter_sorting_tour($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $arr_sorting = $request->getParameter('arr_sorting');
            $arr_activities = $request->getParameter('arr_activities');
            $u = $this->getUser();
            $tour_find = $u->getAttribute('tour_find');
            $sorting = array();
            $count_t = array();
            if (!$arr_sorting && !$arr_activities) {
                $html = TourDetailPeer::return_html_search_select($tour_find);
                return $this->renderText(json_encode(array('code' => 1, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'])));
            }
            if ($arr_sorting) {
                foreach ($tour_find as $key => $value) {
                    $sorting = $value['sorting'];
                    foreach ($sorting as $val) {
                        foreach ($arr_sorting as $val_sort) {
                            if ($val->id == $val_sort && !in_array($tour_find[$key], $count_t)) {
                                $count_t [] = $tour_find[$key];
                            }
                        }
                    }
                }
            }
            if ($arr_activities) {
                foreach ($tour_find as $key => $value) {
                    $activities = $value['activities'];
                    foreach ($activities as $val) {
                        foreach ($arr_activities as $val_activities) {
                            if ($val->id == $val_activities && !in_array($tour_find[$key], $count_t)) {
                                $count_t [] = $tour_find[$key];
                            }
                        }
                    }
                }
            }
            $html = TourDetailPeer::return_html_search_select($count_t);
            return $this->renderText(json_encode(array('code' => 1, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'])));
        }
    }

    public function executeChange_tour_trong_nuoc($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $region_id = $request->getParameter('region_id');
            $select_filter_find_tour = $request->getParameter('select_filter_find_tour');
            $page = $request->getParameter('page');
            $area_id = $request->getParameter('area_id');
            $tour_find = TourDetailPeer::change_khu_vuc($region_id, $area_id, $page, $select_filter_find_tour);
            $tour = $tour_find['tour'];
            $pager = $tour_find['page'];
            $count_all_tour = $tour_find['count'];
            $sorting = $tour_find['sorting'];
            $activities = $tour_find['activities'];
            $sorting_hotro = array();
            $sorting_activities = array();
            $count_max_sorting = TourSortingPeer::doCount(new Criteria());
            $count_max_activities = TourActivitiesPeer::doCount(new Criteria());
            foreach ($sorting as $key => $value_sorting) {
                if ($value_sorting) {
                    foreach ($value_sorting as $key => $val_sorting) {
                        if (isset($val_sorting->id)) {
                            for ($i = 1; $i <= $count_max_sorting; $i++) {
                                if ($val_sorting->id == $i) {
                                    $sorting_hotro[$i][] = $val_sorting->id;
                                }
                            }
                        }
                    }
                }
            }
            foreach ($activities as $key => $value) {
                if ($value) {
                    foreach ($value as $key => $val) {
                        if (isset($val->id)) {
                            for ($i = 1; $i <= $count_max_activities; $i++) {
                                if ($val->id == $i) {
                                    $sorting_activities[$i][] = $val->id;
                                }
                            }
                        }
                    }
                }
            }
            $html = TourDetailPeer::return_html_search_select($tour);
            $html_pager = TourDetailPeer::return_html_pager_khuvuc($pager, $page);
            $html_sorting_hotro = TourDetailPeer::return_html_sorting_hinh_thuc_du_lich($sorting_hotro);
            $html_sorting_activities = TourDetailPeer::return_html_sorting_hoat_dong_du_lich($sorting_activities);
            $u = $this->getUser();
            $u->setAttribute('tour_find', $tour);
            return $this->renderText(json_encode(array('code' => 1, 'sorting_hotro' => $sorting_hotro, 'html_line_view' => $html['html_line_view'], 'html_grid_view' => $html['html_grid_view'], 'html_sorting_hotro' => $html_sorting_hotro, 'html_sorting_activities' => $html_sorting_activities, 'booking_form_to_address' => $booking_form_to_address, 'html_pager' => $html_pager, 'count_all_tour' => $count_all_tour)));
        }
    }

}
