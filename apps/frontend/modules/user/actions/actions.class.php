<?php

class userActions extends sfActions {

    public function executeLogin($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $username_li = $request->getParameter('username_li');
            $password_li = $request->getParameter('password_li');
            if (!myUtil::isEmail($username_li)) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Email đăng nhập không đúng!')));
            } elseif (strlen(trim($password_li)) < 6) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu đăng nhập quá ngắn !')));
            } else {
                $c = new Criteria();
                $c->add(DichungUserPeer::EMAIL, $username_li, Criteria::EQUAL);
                $c->add(DichungUserPeer::PASSWORD, md5($password_li), Criteria::EQUAL);
                $count = DichungUserPeer::doSelectOne($c, Propel::getConnection('dichung_new'));
                if ($count) {
                    $member = DichungUserPeer::doSelectOne($c, Propel::getConnection('dichung_new'));
                    $u = $this->getUser();
                    $u->doLogin($member);

                    return $this->renderText(json_encode(array('code' => 2, 'msg' => 'ok!')));
                } else {
                    return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Thông tin đăng nhập không đúng !')));
                }
            }
        }
    }

    public function executeRegister($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            // $username = $request->getParameter('username');
            $password = $request->getParameter('password');
            $password_rp = $request->getParameter('password_rp');
            $email = $request->getParameter('email');
            // $captcha = $request->getParameter('captcha');
            // $myCaptchaValidator = new captchaValidator($this->getContext());
            // $myCaptchaValidator->initialize( $this->getContext());
            $checkbox_submit = $request->getParameter('checkbox_submit');
            $captcha_error = '';
            if (!myUtil::isEmail($email)) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Định dạng email ko đúng!')));
            } elseif (!strlen(trim($password))) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Bạn hãy nhập mật khẩu !')));
            } elseif (strlen(trim($password)) < 6) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu đăng nhập quá ngắn !')));
            } elseif (trim($password) !== trim($password_rp)) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu đăng nhập và mật khẩu xác nhận không khớp nhau !')));
            }
            // elseif (!strlen($captcha) || !$myCaptchaValidator->execute($captcha, $captcha_error)){
            // 	return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn đã nhập sai mã xác nhận !')));
            // }
            elseif (!$checkbox_submit) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Bạn chưa đồng ý với các điều khoản sử dụng của dichung !')));
            } else {
                if (DichungUserPeer::countEmail($email) !== 0) {
                    return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Địa chỉ email này đã được sử dụng !')));
                } else {
                    $arr = explode('@', $email);
                    $member = new DichungUser();
                    $member->setFullname($arr['0']);
                    $member->setPassword(md5($password));
                    $member->setEmail($email);
                    $member->setDomain('gheptour.vn');
                    $member->save(Propel::getConnection('dichung_new'));
                    $u = $this->getUser();
                    $u->doLogin($member);
                    $user_name = $arr['0'];
                    $mail_template = MailTemplatePeer::mail_dang_ki($user_name, $email, $password);
                    $mail_out_box = new MailOutbox();
                    $mail_out_box->setSendTo($email);
                    $mail_out_box->setSendFrom('admin@dichung.vn');
                    $mail_out_box->setSendFromName('Gheptour.vn');
                    $mail_out_box->setMessage($mail_template);
                    $mail_out_box->setTitle('Đăng ký tài khoản từ Gheptour.vn');
                    $mail_out_box->save(Propel::getConnection('mail'));
                    return $this->renderText(json_encode(array('code' => 2, 'msg' => 'ok')));
                }
            }
        }
    }

    public function executeLogout($r) {
        $user = $this->getUser();
        $user->getAttributeHolder()->clear();
        $user->getAttributeHolder()->removeNamespace('member');
        $user->setAuthenticated(false);
        if (!$this->getRequest()->isXmlHttpRequest()) {
            $this->redirect('@homepage');
        }
    }

    public function executeLoginFb($request) {
        $return_url = $request->getParameter('return_url');
        $u = $this->getUser();
        if ($u->isAuthenticated()) {
            return $this->redirect('@homepage');
        }
        $facebook = $u->getFacebookApi();
        $uid = $facebook->getUser();
        $status = 'login';
        if ($uid) {
            try {
                $user = $facebook->api('/me');
            } catch (Exception $e) {
                die($e);
            }

            if (!empty($user)) {
                $email = isset($user['email']) ? $user['email'] : '';
                if (!$email) {
                    die(("Tài khoản facebook của bạn đang đặt chế độ ẩn email. Vui lòng tắt chế độ này và đăng nhập lại"));
                }
                $du = DichungUserPeer::getOneByEmail($email);
                // $verified = $user['verified'];

                if (!$du) {
                    $access = 'user';
                    $du = new DichungUser;
                    $data = array(
                        'FbId' => $user['id'],
                        'IsActivated' => $verified,
                        'Sex' => $user['gender'],
                        'Username' => $email,
                        'Email' => $email,
//						'Avatar' =>'http://graph.facebook.com/'.$user['id'].'/picture?type=large',
                        'Avatar' => 'http://graph.facebook.com/' . $user['id'] . '/picture',
                        'Fullname' => $user['first_name'] . ' ' . $user['last_name'],
                        'Domain' => 'gheptour.vn',
                        'Access' => $access,
                    );
                    $du->fromArray($data);
                    $du->save(Propel::getConnection('dichung_new'));
                    //post to wall
                    myUtil::posToFbWall($facebook, $uid, $user['name']);
                }
                $du->setDomain('gheptour.vn');
                $du->save(Propel::getConnection('dichung_new'));

                $u->doLogin($du);
            } else {
                $str = $this->processRedirectFb($u, $facebook);
                if (strlen($str))
                    return $this->renderText($str);
                exit;
            }
        }
        else {
            $str = $this->processRedirectFb($u, $facebook);
            if (strlen($str))
                return $this->renderText($str);
            exit;
        }
        if ($this->getUser()->getAttribute('facebook_iframe', false)) {

            $this->redirect('@homepage');
        } else {
            if (!$return_url) {
                $this->redirect('@homepage');
            } else {
                $this->redirect("$return_url");
            }
        }
    }

    public function processRedirectFb($u, $facebook) {
        $httpHost = 'http://' . $_SERVER['HTTP_HOST'];
        $login_url = $facebook->getLoginUrl(array(
            'scope' => 'publish_actions,public_profile,user_friends ,email',
            'redirect_uri' => $httpHost . $_SERVER['REQUEST_URI'],
            'fbconnect' => 0,
            'canvas' => 1));
        sfContext::getInstance()->getController()->redirect($login_url);
        return '';
    }

    public function executeUser($request) {
        $u = $this->getUser();
        $user_id = $u->getId();
        if (!$user_id) {
            $this->redirect('@homepage');
        }
        $this->uri = sfContext::getInstance()->getRouting()->getCurrentRouteName();
        $this->user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
        $seo = $u->getSeo();
        $seo->setTitle('Thành viên gheptour.vn - ' . $this->user->getFullname());
        $seo->setDescription('Thành viên ' . $this->user->getFullname() . ' gia nhập ghép tour ngày ' . $this->user->getCreatedAt() . ',' . $this->user->getJobName() . ', tuổi ' . $this->user->getOldRangeName() . ' , ' . $this->user->getLocation() . ', ' . $this->user->getAbout());
        $seo->setThumb('http://dichung.vn' . $this->user->getAvatar());
        $this->tour_featured = TourDetailPeer::get_all_tour_by_featured($user_id);
    }

    public function executeUser_profile($request) {
        $this->uri = sfContext::getInstance()->getRouting()->getCurrentRouteName();
        $u = $this->getUser();
        $this->user_id = $u->getId();
        if (!$this->user_id) {
            $this->redirect('@homepage');
        }
        $this->success_change_pass = $u->getAttribute('success_change_pass');
        $u->getAttributeHolder()->remove('success_change_pass');
        $this->user = DichungUserPeer::retrieveByPK($this->user_id, Propel::getConnection('dichung_new'));
        $seo = $u->getSeo();
        $seo->setTitle('Thành viên gheptour.vn - ' . $this->user->getFullname());
        $seo->setDescription('Thành viên ' . $this->user->getFullname() . ' gia nhập ghép tour ngày ' . $this->user->getCreatedAt() . ',' . $this->user->getJobName() . ', tuổi ' . $this->user->getOldRangeName() . ' , ' . $this->user->getLocation() . ', ' . $this->user->getAbout());
        $seo->setThumb('http://dichung.vn' . $this->user->getAvatar());
        if ($request->isMethod('POST')) {
            $this->success = '';
            $this->errors = array();
            $fullname = $request->getParameter('fullname');
            $skype = $request->getParameter('skype');
            $phone_number = $request->getParameter('phone_number');
            $phone_number = myUtil::phoneNumberValidTo84($phone_number);
            $checkbox_partner = $request->getParameter('checkbox_partner');
            $gender = $request->getParameter('gender');
            $old_range = $request->getParameter('old_range');
            $job = $request->getParameter('job');
            $location = $request->getParameter('location');
            $address = $request->getParameter('address');
            $hotline = $request->getParameter('hotline');
            $website = $request->getParameter('website');
            $about = $request->getParameter('about');
            $bank_code = $request->getParameter('bank_code');
            $bank_owner = $request->getParameter('bank_owner');
            $bank_name = $request->getParameter('bank_name');
            $paypal = $request->getParameter('paypal');
            if (!$fullname || strlen($fullname) <= 1) {
                $this->errors [] = 'Họ và tên không hợp lệ';
            }
            if ($this->user->getVerifiedPhone() == '0') {
                if (!myUtil::isValidPhoneNumber($phone_number)) {
                    $this->errors [] = 'Số điện thoại không hợp lệ';
                }
                if (DichungUserPeer::hasPhone($phone_number, $this->user_id)) {
                    $this->errors [] = 'Số điện thoại đã được sử dụng bởi 1 tài khoản khác';
                }
            }
            $count = count($this->errors);
            if (!$count) {
                $this->user->setFullname($fullname);
                if ($checkbox_partner) {
                    $this->user->setUserTypeId(2);
                } else {
                    $this->user->setUserTypeId(1);
                }
                $fileName = $this->getRequest()->getFileName('user[avatar]');
                if ($fileName) {
                    $uploadDir = '/home/html/dichung.vn_new/web/uploads';
                    $time = time();
                    $str = '/avatar/' . 'id_' . $this->user_id . '_' . $time . '.png';
                    $path = $uploadDir . $str;
                    $av = $this->user->getAvatar();
                    if (strlen($av) && (strpos($av, 'avatar.png') === false)) {
                        unlink('/home/html/dichung.vn_new/web' . $av);
                    }
                    $this->user->setAvatar('/uploads' . $str);
                    $this->getRequest()->moveFile('user[avatar]', $path);
                }
                $this->user->setSkypeUrl($skype);
                $this->user->setGender($gender);
                $this->user->setOldRangeId($old_range);
                $this->user->setJobId($job);
                $this->user->setLocation($location);
                $this->user->setAddress($address);
                $this->user->setHotline($hotline);
                $this->user->setWebsite($website);
                $this->user->setAbout($about);
                $this->user->setBankCode($bank_code);
                $this->user->setBankOwner($bank_owner);
                $this->user->setBankName($bank_name);
                $this->user->setPaypal($paypal);
                if ($this->user->getVerifiedPhone() == '0') {
                    $this->user->setPhoneNumber($phone_number);
                }
                $f = $this->getRequest()->getFileName('user[image_verify]');
                if ($f) {
                    $uploadDir = '/home/html/dichung.vn_new/web/uploads';
                    $time = time();
                    $str = '/image_verify/' . 'id_' . $this->user_id . '_' . $time . '.png';
                    $path = $uploadDir . $str;
                    $av = $this->user->getImageVerify();
                    if (strlen($av) && (strpos($av, 'avatar.png') === false)) {
                        unlink('/home/html/dichung.vn_new/web' . $av);
                    }
                    $this->getRequest()->moveFile('user[image_verify]', $path);
                    $this->user->setImageVerify('/uploads/image_verify/' . 'id_' . $this->user_id . '_' . time() . '.png');
                    $user_send_verify_info = new UserSendVerifyInfo();
                    $user_send_verify_info->setUserId($this->user_id);
                    $user_send_verify_info->setTypeVerifyId(1);
                    $user_send_verify_info->setImage('/uploads/image_verify/' . 'id_' . $this->user_id . '_' . time() . '.png');
                    $user_send_verify_info->save(Propel::getConnection('dichung_new'));
                }
                $this->user->save(Propel::getConnection('dichung_new'));
                myUser::getCountPointLevel($this->user_id);
                $this->success = 'Lưu thông tin tài khoản thành công';
            }
        }
    }

    public function uploadImage($name, $userId) {
        // create thumbnail folder if it's not existed
        $dir = $uploadDir . '/' . $name;
        if (!is_dir($dir))
            mkdir($dir);

        // $str = '/'.$name.'/' . 'id_' . $userId . '_' . time() . '.png';
        $str = '/' . $name . '/' . 'id_' . $userId . '_' . time() . '.png';
        $path = sfConfig::get('sf_upload_dir') . $str;

        $this->getRequest()->moveFile('user[' . $name . ']', $path);

        // delete old avatar

        if (strlen($av) && (strpos($av, 'avatar.png') === false))
            unlink(sfConfig::get('sf_web_dir') . $av);

        $func = str_replace('_', ' ', $name);
        $func = 'set' . str_replace(' ', '', ucwords($func));
        call_user_func(array($this->dc_user, $func), '/uploads' . $str);
    }

    public function executeUser_notification($request) {
        $u = $this->getUser();
        $this->user_id = $u->getId();
        if (!$this->user_id) {
            $this->redirect('@homepage');
        }
        $this->user = DichungUserPeer::retrieveByPK($this->user_id, Propel::getConnection('dichung_new'));
        $notification = NotificationPeer::get_all_notification($this->user_id);
        $this->noti_new = $notification['noti_new'];
        $this->noti_old = $notification['noti_old'];
    }

    public function executeReaded_notification($request) {
        $u = $this->getUser();
        $user_id = $u->getId();
        if (!$user_id) {
            $this->redirect('@homepage');
        }
        NotificationPeer::update_readed($user_id);
        $this->redirect('@user_notification');
    }

    public function executeUser_message($request) {
        $u = $this->getUser();
        $this->user_id = $u->getId();
        if (!$this->user_id) {
            $this->redirect('@homepage');
        }
        $this->user = DichungUserPeer::retrieveByPK($this->user_id, Propel::getConnection('dichung_new'));
        $message = MessagePeer::get_all_message($this->user_id);
        $this->message_new = $message['message_new'];
        $this->message_old = $message['message_old'];
    }

    public function executeGet_message($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $message_id = $request->getParameter('message_id');
            $content_message = $request->getParameter('content_message');
            return $this->renderText(json_encode(array('code' => 1, 'msg' => $content_message)));
        }
    }

    public function executeSend_message($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $content_message_send = $request->getParameter('content_message_send');
            $id_message_hidden = $request->getParameter('id_message_hidden');
            $message = MessagePeer::retrieveByPK($id_message_hidden);
            $message_new = new Message();
            $message_new->setUserSend($message->getUserReceiver());
            $message_new->setUserReceiver($message->getUserSend());
            $message_new->setDescription($content_message_send);
            $message_new->setCreatedAt(date('Y-m-d H:i:s'));
            $message_new->save();
            return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Gửi tin nhắn thành công')));
        }
    }

    public function executeReaded_message($request) {
        $u = $this->getUser();
        $user_id = $u->getId();
        if (!$user_id) {
            $this->redirect('@homepage');
        }
        MessagePeer::update_readed($user_id);
        $this->redirect('@user_message');
    }

    public function executeUser_settings($request) {
        $u = $this->getUser();
        $user_id = $u->getId();
        if (!$user_id) {
            $this->redirect('@homepage');
        }
        $this->user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
    }

    public function executeChange_password($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $password_old = $request->getParameter('password_old');
            $password_new = $request->getParameter('password_new');
            $password_new_rp = $request->getParameter('password_new_rp');

            if (strlen($password_old) < 6) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu cũ không hợp lệ')));
            } elseif (strlen($password_new) < 6) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu mới quá ngắn')));
            } elseif ($password_new !== $password_new_rp) {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu mới và xác nhân mật khẩu không khớp nhau')));
            } else {
                $u = $this->getUser();
                $user_id = $u->getId();
                $c = new Criteria();
                $c->add(DichungUserPeer::ID, $user_id);
                $c->add(DichungUserPeer::PASSWORD, md5($password_old));
                $count = DichungUserPeer::doCount($c, Propel::getConnection('dichung_new'));
                if (!$count) {
                    return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Mật khẩu hiện tại không đúng')));
                } else {
                    $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                    $user->setPassword(md5($password_new));
                    $user->save(Propel::getConnection('dichung_new'));
                    $u->setAttribute('success_change_pass', 'Cập nhật mật khẩu mới thành công');
                    return $this->renderText(json_encode(array('code' => 2, 'msg' => 'Cập nhật mật khẩu mới thành công')));
                }
            }
        }
    }

    public function executeCheck_verified_phone($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $acc = $this->getUser()->getAccount();
            $phone_number = $request->getParameter('phone_number');
            if ($phone_number) {
                $phone_number = myUtil::phoneNumberValidTo84($phone_number);
                if (!myUtil::isValidPhoneNumber($phone_number)) {
                    return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Số điện thoại không tồn tại')));
                } else {
                    $u = $this->getUser();
                    $user_id = $u->getId();
                    if (DichungUserPeer::hasPhone($phone_number, $user_id)) {
                        return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Số điện thoại đã được sử dụng bởi 1 tài khoản khác')));
                    } else {

                        $acc->setPhoneNumber($phone_number);
                        $acc->setVerifiedPhone('0');
                        $acc->save(Propel::getConnection('dichung_new'));

                        if (!$this->getUser()->hasAttribute('mxt', 'verify')) {
                            $code = rand(1000, 9999);
                            $this->getUser()->setAttribute('mxt', $code, 'verify');
                            $msg = "Gheptour.vn Thong Bao:\n" . " Ma xac nhan cua ban la: " . $code;
                            Propel::getConnection('dichung_taxi')
                                    ->prepareStatement('INSERT INTO driver_msg SET phone_number = \'' . $phone_number . '\', message = \'' . $msg . '\', created_at = \'' . date('Y-m-d H:i:s') . '\'')
                                    ->executeQuery();
                        }
                        return $this->renderText(json_encode(array('code' => 2, 'msg' => 'ok', 'phone_number_active' => myUtil::phoneNumberValidTo0x($phone_number))));
                    }
                }
            } else {
                return $this->renderText(json_encode(array('code' => 1, 'msg' => 'Bạn chưa nhập số điện thoại')));
            }
        }
    }

    public function executeSubmit_verified_phone($request) {
        $rsAjax = $request->isXmlHttpRequest();
        if ($rsAjax) {
            $ma_xac_thuc = $request->getParameter('ma_xac_thuc');
            if ($ma_xac_thuc) {
                $u = $this->getUser();
                $user_id = $u->getId();
                $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
                $sMxt = $u->getAttribute('mxt', 0, 'verify');
                if ($ma_xac_thuc == $sMxt) {
                    $user->setVerifiedPhone(true);
                    $user->save(Propel::getConnection('dichung_new'));
                    $u->setAttribute('success_change_pass', 'Xác thực số điện thoại thành công');
                    return $this->renderText(json_encode(array('code' => 1, 'msg' => 'ok')));
                } else {
                    return $this->renderText(json_encode(array('code' => 2, 'msg' => 'Mã xác thực không hợp lệ')));
                }
            }
            return sfView::NONE;
        }
    }

}
