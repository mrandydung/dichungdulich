<?php

class homeActions extends sfActions {

    public function executeGet_html_login($request) {
        if (!$request->isXmlHttpRequest()) {
            $this->forward404();
        }
        $select_language = $request->getParameter('select_language');
         $u = $this->getUser();
        $myUserId = $u->getId();
        $html = '';
        $host = myUser::get_partner_id();
        
        if($host == '1'){
            if (!$myUserId) {
                $html = '<ul class="nav navbar-nav dichung_nav"> <li> <a data-toggle="modal" data-target="#dangki" id="click_dangky_home"><span class="dangki"></span>'.LangPeer::getText('Đăng kí').'</a> </li> <li><a data-toggle="modal" data-target="#dangnhap" id="click_dangnhap_home"><span class="dangnhap"></span>'.LangPeer::getText('Đăng nhập').'</a></li><li><a href="#" class="creattrip" id="show_login">'.LangPeer::getText('Tạo chuyến đi').'</a></li></ul>';
            } else {
                $user = DichungUserPeer::retrieveByPk($myUserId, Propel::getConnection('dichung_new'));
                $html = $user->html_user_login();
            }
        }else{
            if (!$myUserId) {
                $html = '<ul class="nav navbar-nav dichung_nav"> <li> <a data-toggle="modal" data-target="#dangki" id="click_dangky_home"><span class="dangki"></span>'.LangPeer::getText('Đăng kí').'</a> </li> <li><a data-toggle="modal" data-target="#dangnhap" id="click_dangnhap_home"><span class="dangnhap"></span>'.LangPeer::getText('Đăng nhập').'</a></li></ul>';
            } else{
                $user = DichungUserPeer::retrieveByPk($myUserId, Propel::getConnection('dichung_new'));
                $html = $user->html_user_login_partner();
            }
        }
        return $this->renderText($html);
    }

    public function executeIndex($request) {
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $host = $request->getHost();
        $this->host = PartnerPeer::get_domain($host);
        if(!$this->host){
            $this->redirect('http://gheptour.vn');
        }
        $this->images_slide = ImagesSlidePeer::get_images_slide($this->host);
        $this->setting_site = SettingSitePeer::get_setting_site($this->host);
        $page_category = PageCategoryPeer::retrieveByPK(1);
        $seo = $u->getSeo();
        $seo->setTitle($this->setting_site->getShowTitleSite());
        $seo->setDescription($this->setting_site->getShowDescriptionSite());
        $seo->setThumb('http://gheptour.vn/' . $page_category->getImgSeo());
        if ($this->setting_site->getPartner()->getTypePartner() == 'main') {
            $tour_tmp = TourDetailPeer::get_tour_ca_nhan();
            $this->tour = $tour_tmp['tour'];
            $this->url_forward_tour_ca_nhan = $tour_tmp['url_forward'];
            $tour_cuoi_tuan_tmp = TourDetailPeer::get_tour_cuoi_tuan();
            $this->tour_cuoi_tuan = $tour_cuoi_tuan_tmp['tour'];
            $this->url_forward_tour_cuoi_tuan = $tour_cuoi_tuan_tmp['url_forward'];
            $tour_doc_dao_tmp = TourDetailPeer::get_tour_doc_dao();
            $this->tour_doc_dao = $tour_doc_dao_tmp['tour'];
            $this->url_forward_tour_doc_dao = $tour_doc_dao_tmp['url_forward'];
        }else{
            $tour_on_homepage_tmp = TourDetailPeer::get_tour_set_on_home_page();
            $this->tour_on_homepage = $tour_on_homepage_tmp['tour'];
        }
    }

    public function executeThe_le_cuoc_thi($request) {
        $this->event = EventPeer::retrieveByPk(1);
    }

    public function executeRender_address_json($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $c = new Criteria();
            $c->addSelectColumn(HomeDiemDenItemPeer::NAME);
            $rs = HomeDiemDenItemPeer::doSelectRS($c);
            $name = array();
            while ($rs->next()) {
                $name[] = $rs->get(1);
            }
            return $this->renderText(json_encode($name));
        }
    }

    public function executeSearch_end($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $search_end = trim($request->getParameter('search_end'));
            $terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($search_end));
            $c = new Criteria();
            $c->add(HomeDiemDenItemPeer::KEYWORD, "%" . $terms . "%", Criteria::LIKE);
            $rs = HomeDiemDenItemPeer::doSelect($c);
            $arr = array();
            foreach ($rs as $key => $value) {
                $arr [] = $value->getName();
            }
            return $this->renderText(json_encode($arr));
        }
    }

    public function executeFacebook_connect($request) {
        $u = $this->getUser();
        if ($request->hasParameter('invite')) {
            $u->setAttribute('invite_facebook', 1);
        }
        $perms = array(
            'fbconnect' => 0,
            'canvas' => 1,
            'scope' => 'publish_stream,email,user_birthday,user_likes'
        );
        $facebook = myUtil::getFacebookApi();
        $uid = $facebook->getUser();

        if ($request->hasParameter('verify')) {
            $u->setAttribute('fb_verify', 1, 'member');
        }

        if ($request->hasParameter('app_request')) {
            $u->setAttribute('app_request', 1, 'member');
        }

        if ($request->hasParameter('app_request_type')) {
            $u->setAttribute('app_request_type', $request->getParameter('app_request_type'), 'member');
        }


        $app_request = $u->getAttribute('app_request', 0, 'member');
        $app_request_type = $u->getAttribute('app_request_type', 'thi_sat_hach', 'member');

        $verify = $u->getAttribute('fb_verify', 0, 'member') && $u->isAuthenticated();

        if (!$u->isAuthenticated() || $verify) {

            if ($uid) {
                $u->getAttributeHolder()->remove('fb_verify', 'member');
                try {

                    $user = $facebook->api('/me');

                    $api_call = array(
                        'method' => 'users.getinfo',
                        'uids' => $uid,
                        'fields' => 'pic_square, pic_big, education');
                    $upic = $facebook->api($api_call);
                } catch (Exception $e) {
                    
                }

                if (!empty($user)) {

                    if (!isset($user['email'])) {
                        return $this->renderText('<script>alert(\'Bạn đang sử dụng chế độ ẩn email của Facebook nên không thể xác thực\'); window.close();</script>');
                    }

                    if ($app_request && ($app_request_type == 'thi_sat_hach')) {

                        $log = new ThisathachLog;
                        $log->fromArray(array(
                            'Email' => $user['email'],
                            'Fullname' => $user['username']));
                        $log->save();
                        $this->getUser()->setAttribute('log_id', $log->getId(), 'tsh');
                        $this->getUser()->setAttribute('step', 2, 'tsh');
                        myUtil::subcribeEmail($log->getEmail(), $log->getFullname(), myUtil::SUBCRIBE_KEY_APPS);

                        return $this->renderText('<script>window.opener.location.reload(true);  window.close();</script>');
                    } else {
                        $upic = $upic[0];

                        $c = new Criteria;
                        $c->add(DichungUserPeer::EMAIL, $user['email']);
                        $du = DichungUserPeer::doSelectOne($c);

                        $g = $user['gender'];
                        $verifiedEmail = $user['verified'];
                        if (!$du || !$du->getVerifiedPhone() || $verify) {

                            //education
                            $strEdu = array();
                            foreach ($upic['education'] as $edu) {
                                $strEdu[] = $edu['school']['name'];
                            }


                            $gConf = array('male' => 1, 'female' => 2);
                            $gender = !isset($gConf[$g]) ? 1 : $gConf[$g];

                            $dob = @$user['birthday'];
                            if ($dob) {
                                list($m, $d, $y) = explode('/', $dob);
                                $dob = $y . '-' . $m . '-' . $d;
                            }

                            if (!$verify) {
                                if (!$du) {
                                    $du = new DichungUser;
                                    $content = file_get_contents($upic['pic_big']);
                                    if ($content !== false) {
                                        file_put_contents('uploads/avatar/dichung-member-' . myUtil::strToSlug($user['username']) . '.jpg', $content);
                                        $avatar = '/uploads/avatar/dichung-member-' . myUtil::strToSlug($user['username']) . '.jpg';
                                    } else {

                                        $avatar = '/uploads/avatar/avatar.png';
                                    }
                                    $du->fromArray(array('Email' => $user['email'],
                                        'FbUid' => $user['id'],
                                        'FbUsername' => $user['username'],
                                        'FbUrl' => $user['link'],
                                        'FbSpic' => $upic['pic_square'],
                                        'FbLpic' => $upic['pic_big'],
                                        'Avatar' => $avatar,
                                        'Fullname' => $user['name'],
                                        'Dob' => $dob,
                                        'Gender' => $gender,
                                        'Location' => @$user['location']['name'],
                                        'Work' => @$user['work'][0]['employer']['name'],
                                        'Education' => implode(',', $strEdu),
                                        'VerifiedEmail' => $verifiedEmail,
                                        'Active' => $verifiedEmail));
                                    $du->save();

                                    $this->getUser()->setFlash('notice', 'Bạn đã mở tài khoản thành công.<br/>' .
                                            'Hãy xác thực số điện thoại để có thể liên lạc với người bạn đường.<br/>' .
                                            'Chúng tôi chỉ công bố số điện thoại này khi bạn cho phép'
                                            //'Hãy xác thực số điện thoại để có thể liên lạc với người bạn đường bằng cách Soạn '.ItemPeer::getOneByName('ACTIVE', 'CMD')->getDescription().' gửi tới '.ItemPeer::getOneByName('ACTIVE', 'SN')->getDescription().' hoặc nhập vào chuỗi ký tự chúng tôi nhắn cho bạn.'
                                    );
                                    //subcribe
                                    myUtil::subcribeEmail($du->getEmail(), $du->getFullname());
                                } else {
                                    $du->setVerifiedEmail(true);
                                    $du->save();

                                    $c = new Criteria;
                                    $c->add(DichungUserPeer::EMAIL, $user['email']);
                                    $c->add(DichungUserPeer::VERIFIED_EMAIL, 0);
                                    DichungUserPeer::doDelete($c);
                                }
                            } else {

                                $acc = $u->getAccount();
                                if (!$acc->getFbUid()) {
                                    $acc->fromArray(array(
                                        'FbUid' => $user['id'],
                                        'FbUsername' => $user['username'],
                                        'FbUrl' => $user['link'],
                                        'FbSpic' => $upic['pic_square'],
                                        'FbLpic' => $upic['pic_big'],
                                        'Avatar' => $upic['pic_big'],
                                        'Fullname' => $user['name'],
                                        'Dob' => $dob,
                                        'Gender' => $gender,
                                        'Location' => @$user['location']['name'],
                                        'Work' => @$user['work'][0]['employer']['name'],
                                        'Education' => implode(',', $strEdu),
                                        'VerifiedEmail' => $verifiedEmail));
                                    $acc->save();

                                    //subcribe
                                    myUtil::subcribeEmail($acc->getEmail(), $acc->getFullname());
                                }
                            }
                        }


                        $du->setFbUrl($user['link']);
                        $du->setFbUid($user['id']);
                        $du->setVerifiedEmail($verifiedEmail);
                        $du->save();

                        $u->setAttribute('facebook_user', 1, 'member');
                        $u->doLogin($du);
                    }
                } else {
                    # For testing purposes, if there was an error, let's kill the script  
                    die("There was an error.");
                }
            } else {
                $this->getController()->redirect($facebook->getLoginUrl($perms));
                exit;
            }
        }
        if (!$u->getAttribute('invite_facebook', 0)) {
            return $this->renderText('<script>var loc = top.opener.location; if(loc.href.indexOf("ride/create") == -1){loc.reload();}  window.opener.logged = true; window.opener.jQuery("#overlay,.ui-dialog").remove(); window.close();</script>');
        } else {
            $u->getAttributeHolder()->remove('invite_facebook');
            if (empty($uid)) {
                $this->getController()->redirect($facebook->getLoginUrl($perms));
                exit;
            } else {
                try {


                    $friends = $facebook->api('/me/friends');
                    $data = array();

                    foreach (@$friends['data'] as $f) {

                        $data [] = '<div class="fb_friend" id="' . $f['id'] . '" onclick="selectFbFriend(this)"><img src="//graph.facebook.com/' . $f['id'] . '/picture"><div class="friend_name">' . $f['name'] . '</div></div>';
                    }
                    return $this->renderText("<script type='text/javascript' src='/jqueryui/js/jquery-1.6.2.min.js'></script>" .
                                    "<script>" .
                                    "window.opener.$('#facebox #wrap_fb').html('" . str_replace('\'', '', implode('', $data)) . "');" .
                                    "window.close();" .
                                    "</script>");
                } catch (Exception $e) {
                    $this->getController()->redirect($facebook->getLoginUrl($perms));
                    exit;
                }
            }
        }
        return sfView::NONE;
    }

    public function executeEmail_register_accept_info($request) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date_now = date('d-m-Y H:i:s');
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $email_register_accept_info = trim($request->getParameter('email_register_accept_info'));
            if (!myUtil::isEmail($email_register_accept_info)) {
                return $this->renderText(json_encode(array('code' => 'error', 'msg' => 'Định dạng email ko đúng')));
            } else {
                $count_email = UserRegisterAcceptEmailPeer::count_email_user($email_register_accept_info);
                if ($count_email) {
                    return $this->renderText(json_encode(array('code' => 'error', 'msg' => 'Email đã đăng kí nhận thông tin tour du lịch. ')));
                } else {
                    $UserRegisterAcceptEmail = new UserRegisterAcceptEmail();
                    $UserRegisterAcceptEmail->setEmail($email_register_accept_info);
                    $UserRegisterAcceptEmail->setDate($date_now);
                    $partner_id = myUser::get_partner_id();
                    $UserRegisterAcceptEmail->setPartnerId($partner_id);
                    $UserRegisterAcceptEmail->save();
                    return $this->renderText(json_encode(array('code' => 'success', 'msg' => 'Đăng ký email nhận thông tin du lịch thành công')));
                }
            }
        }
    }

    public function executeOnbeforeunload($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            
        }
    }

}
