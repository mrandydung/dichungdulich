<?php

class myUser extends sfBasicSecurityUser {
    public static function get_partner_id(){
        $host = $_SERVER['HTTP_HOST'];
        $host_obj = PartnerPeer::get_domain($host);
        if($host_obj){
          return $host_obj->getId();
        }else{
          return 0;
        }
    }

    public static function host(){
      return $_SERVER['HTTP_HOST'];
    }

    public static function check_login_partner($user_name){
      $count = HuserPeer::count_partner_login($user_name);
      return $count;
    }
    
    public static function getHost(){
        $host = $_SERVER['HTTP_HOST'];
        $host_obj = PartnerPeer::get_domain($host);
        $setting_site = SettingSitePeer::get_setting_site($host_obj);
        if($host_obj){
          return $setting_site;
        }else{
          $this->redirect('http://gheptour.vn');
        }
    }
    
    public function getFacebookApi() {
        require sfConfig::get('sf_root_dir') . '/lib/facebook/facebook.php';

        # Creating the facebook object  
        $facebook = new Facebook(array(
            'appId' => '825897607458922',
            'secret' => 'fb3bedf518950447382926c78b53907b',
            'cookie' => true
        ));
        return $facebook;
    }

    public function isEn() {
        return sfContext::getInstance()->getRequest()->getParameter('lang', 'vi') == 'en';
    }

    public function twig_json_decode($json) {
        return json_decode($json, true);
    }

    public function countMessage() {
        $c = new Criteria();
        $c->add(MessagePeer::USER_RECEIVER, $this->getId());
        $c->add(MessagePeer::READED, 0);
        $count = MessagePeer::doCount($c);
        return $count;
    }   

    public function countNotify() {
        $c = new Criteria();
        $c->add(NotificationPeer::USER_RECEIVER, $this->getId());
        $c->add(NotificationPeer::READED, 0);
        $count = NotificationPeer::doCount($c);
        return $count;
    }

    public function getPendingRide($remove = false) {

        $id = $this->getAttribute('id', 0, 'pending_ride');
        if ($remove)
            $this->setPendingRide(0);
        return $id;
    }

    public function getShowName() {

        $email = $this->getAttribute('email', '', 'member');
        list($name) = explode('@', $email);
        return $name;
    }

    public function isAirportTaxi() {
        return $_SERVER['HTTP_HOST'] == 'taxiairport.chungxe.vn';
    }

    public $web_constants = null;

    public function getConstant($key) {

        if ($this->web_constants === null) {
            $this->web_constants = WebConstantPeer::doSelect(new Criteria);
        }
        foreach ($this->web_constants as $wc) {
            if (strtoupper($wc->getId()) == strtoupper($key)) {
                return $wc->getVal();
            }
        }
        return null;
    }

    public function getCartCurrent() {

        return DonatePeer::retrieveByPk($this->getAttribute('id_service_cart'));
    }

    public function getCartCurrentBalance() {
        return BalancePeer::retrieveByPk($this->getAttribute('id_balance_cart'));
    }

    public function doLogin($duser) {
        $this->setAuthenticated(true);
        $this->setAttribute('id', $duser->getId(), 'member');
    }

    public function getEmail() {
        return $this->getAttribute('email', '', 'member');
    }

    public function getId() {
        return $this->getAttribute('id', 0, 'member');
    }

    public function getXang() {
        return $this->getAttribute('xang', 0, 'member');
    }

    public function getFullname() {
        return $this->getAttribute('fullname', '', 'member');
    }

    public $account = null;

    public function getAccount() {
        if (!$this->account) {
            $this->account = DichungUserPeer::retrieveByPk($this->getId(), Propel::getConnection('dichung_new'));
        }
        return $this->account;
    }

    public function getUri() {
        $uri = sfContext::getInstance()->getRouting()->getCurrentRouteName();
        return $uri;
    }

    public function checkPhoneNumberNull() {
        $acc = $this->getAccount();
        $uri = sfContext::getInstance()->getRouting()->getCurrentInternalUri();
        if (!$acc) {
            return false;
        } else {
            if (!$acc->getPhoneNumber() && $uri !== 'user/account') {
                $this->setAttribute('content_msg_notify', 'test', 'member');
                return 1;
            }
        }
    }


    static $seo = null;

    public function getSeo() {

        if (self::$seo == null) {
            self::$seo = new Seo();
        }
        return self::$seo;
    }

    static $web_config = null;

    public function getWebConfig($k) {
        return null;
    }

    public static function getCountPointLevel($user_id) {
        $user = DichungUserPeer::retrieveByPK($user_id, Propel::getConnection('dichung_new'));
        $about = trim($user->getAbout());
        $point_level = $user->getPointLevelId();
        if ($point_level == '1') {
            if ($user->getVerifiedPhone() == '1') {
                $user->setPointLevelId(2);
                $user->save(Propel::getConnection('dichung_new'));
            }
        }
        if ($point_level == '2') {
            if ($about) {
                $user->setPointLevelId(3);
                $user->save(Propel::getConnection('dichung_new'));
            }
        }
        if ($point_level == '3') {
            if ($user->getVerifiedDriveLicense() == '1' || $user->getVerifiedImage() == '1') {
                $user->setPointLevelId(4);
                $user->save(Propel::getConnection('dichung_new'));
            }
        }
    }

    public function getHour() {
        return '<option value="1000">Chọn giờ đi</option>
      <option value="0:00" >0:00 sáng</option>
      <option value="0:15" >0:15 sáng</option>
      <option value="0:30" >0:30 sáng</option>
      <option value="0:45" >0:45 sáng</option>
      <option value="1:00" >1:00 sáng</option>
      <option value="1:15" >1:15 sáng</option>
      <option value="1:30" >1:30 sáng</option>
      <option value="1:45" >1:45 sáng</option>
      <option value="2:00" >2:00 sáng</option>
      <option value="2:15" >2:15 sáng</option>
      <option value="2:30" >2:30 sáng</option>
      <option value="2:45" >2:45 sáng</option>
      <option value="3:00" >3:00 sáng</option>
      <option value="3:15" >3:15 sáng</option>
      <option value="3:30" >3:30 sáng</option>
      <option value="3:45" >3:45 sáng</option>
      <option value="4:00" >4:00 sáng</option>
      <option value="4:15" >4:15 sáng</option>
      <option value="4:30" >4:30 sáng</option>
      <option value="4:45" >4:45 sáng</option>
      <option value="5:00" >5:00 sáng</option>
      <option value="5:15" >5:15 sáng</option>
      <option value="5:30" >5:30 sáng</option>
      <option value="5:45" >5:45 sáng</option>
      <option value="6:00" >6:00 sáng</option>
      <option value="6:15" >6:15 sáng</option>
      <option value="6:30" >6:30 sáng</option>
      <option value="6:45" >6:45 sáng</option>
      <option value="7:00" >7:00 sáng</option>
      <option value="7:15" >7:15 sáng</option>
      <option value="7:30" >7:30 sáng</option>
      <option value="7:45" >7:45 sáng</option>
      <option value="8:00" >8:00 sáng</option>
      <option value="8:15" >8:15 sáng</option>
      <option value="8:30" >8:30 sáng</option>
      <option value="8:45" >8:45 sáng</option>
      <option value="9:00" >9:00 sáng</option>
      <option value="9:15" >9:15 sáng</option>
      <option value="9:30" >9:30 sáng</option>
      <option value="9:45" >9:45 sáng</option>
      <option value="10:00" >10:00 sáng</option>
      <option value="10:15" >10:15 sáng</option>
      <option value="10:30" >10:30 sáng</option>
      <option value="10:45" >10:45 sáng</option>
      <option value="11:00" >11:00 trưa</option>
      <option value="11:15" >11:15 trưa</option>
      <option value="11:30" >11:30 trưa</option>
      <option value="11:45" >11:45 trưa</option>
      <option value="12:00" >12:00 trưa</option>
      <option value="12:15" >12:15 trưa</option>
      <option value="12:30" >12:30 trưa</option>
      <option value="12:45" >12:45 trưa</option>
      <option value="13:00" >1:00 chiều</option>
      <option value="13:15" >1:15 chiều</option>
      <option value="13:30" >1:30 chiều</option>
      <option value="13:45" >1:45 chiều</option>
      <option value="14:00" >2:00 chiều</option>
      <option value="14:15" >2:15 chiều</option>
      <option value="14:30" >2:30 chiều</option>
      <option value="14:45" >2:45 chiều</option>
      <option value="15:00" >3:00 chiều</option>
      <option value="15:15" >3:15 chiều</option>
      <option value="15:30" >3:30 chiều</option>
      <option value="15:45" >3:45 chiều</option>
      <option value="16:00" >4:00 chiều</option>
      <option value="16:15" >4:15 chiều</option>
      <option value="16:30" >4:30 chiều</option>
      <option value="16:45" >4:45 chiều</option>
      <option value="17:00" >5:00 chiều</option>
      <option value="17:15" >5:15 chiều</option>
      <option value="17:30" >5:30 chiều</option>
      <option value="17:45" >5:45 chiều</option>
      <option value="18:00" >6:00 chiều</option>
      <option value="18:15" >6:15 chiều</option>
      <option value="18:30" >6:30 chiều</option>
      <option value="18:45" >6:45 chiều</option>
      <option value="19:00" >7:00 Tối</option>
      <option value="19:15" >7:15 Tối</option>
      <option value="19:30" >7:30 Tối</option>
      <option value="19:45" >7:45 Tối</option>
      <option value="20:00" >8:00 Tối</option>
      <option value="20:15" >8:15 Tối</option>
      <option value="20:30" >8:30 Tối</option>
      <option value="20:45" >8:45 Tối</option>
      <option value="21:00" >9:00 Tối</option>
      <option value="21:15" >9:15 Tối</option>
      <option value="21:30" >9:30 Tối</option>
      <option value="21:45" >9:45 Tối</option>
      <option value="22:00" >10:00 Tối</option>
      <option value="22:15" >10:15 Tối</option>
      <option value="22:30" >10:30 Tối</option>
      <option value="22:45" >10:45 Tối</option>
      <option value="23:00" >11:00 Tối</option>
      <option value="23:15" >11:15 Tối</option>
      <option value="23:30" >11:30 Tối</option>
      <option value="23:45" >11:45 Tối</option> ';
    }

    public function getSuggestCost() {
        $rs = SuggestCostCategoryPeer::doSelect(new Criteria);
        $html = '';
        foreach ($rs as $val) {
            $html .= '<option value="' . $val->getId() . '">' . $val->getShowName() . '</option>';
        }
        return $html;
    }

    public static function change_time_input_to_minute($time) {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $str_now = strtotime(date('Y-m-d H:i:s'));
        $str_second = $str_now - strtotime($time);
        $str_minute = (int) ($str_second / 60);
        if ($str_minute >= 60) {
            $str = (int) ($str_minute / 60) . ' tiếng';
        } else {
            $str = $str_minute . ' phút';
        }
        return $str;
    }

    public static function html_substr($s, $srt, $len = NULL, $strict = false, $suffix = NULL) {
        if (is_null($len)) {
            $len = strlen($s);
        }

        $f = 'static $strlen=0; 
            if ( $strlen >= ' . $len . ' ) { return "><"; } 
            $html_str = html_entity_decode( $a[1] );
            $subsrt   = max(0, (' . $srt . '-$strlen));
            $sublen = ' . ( empty($strict) ? '(' . $len . '-$strlen)' : 'max(@strpos( $html_str, "' . ($strict === 2 ? '.' : ' ') . '", (' . $len . ' - $strlen + $subsrt - 1 )), ' . $len . ' - $strlen)' ) . ';
            $new_str = substr( $html_str, $subsrt,$sublen); 
            $strlen += $new_str_len = strlen( $new_str );
            $suffix = ' . (!empty($suffix) ? '($new_str_len===$sublen?"' . $suffix . '":"")' : '""' ) . ';
            return ">" . htmlentities($new_str, ENT_QUOTES, "UTF-8") . "$suffix<";';

        return preg_replace(array("#<[^/][^>]+>(?R)*</[^>]+>#", "#(<(b|h)r\s?/?>){2,}$#is"), "", trim(rtrim(ltrim(preg_replace_callback("#>([^<]+)<#", create_function(
                                                        '$a', $f
                                                ), ">$s<"), ">"), "<")));
    }

}
