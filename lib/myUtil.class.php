<?php

class myUtil {

   const ALERT_PHONE = '84935133166';
   const ALERT_EMAIL = 'support@dichung.vn';
   const WARN_SMS_NEW_BOOKING = true;
   const VEHICLE_COUNT = 5;
   const CHUNK_NOIBAI_TINH = 3;
   const CHUNK_NOIBAI_HANOI = 2;
   const PARTNER_NASCO = 1;
   const RIDE_CITY_HANOI = 24;
   const RIDE_METHOD_DICHUNG = 2;
   const LANG_SESSION = 'LANGUAGE_SESSION';
   const USER_TICKET_MESSAGE = ":PARTNER thong bao:\nDat xe thanh cong cho :USERNAME, ma so dat xe :TICKET duoc xac nhan qua DT :PHONE. Chua thanh toan.";

   public static function calc_cost_more_address($r) {

      $address = $r['more_address'];
      $chunk = $r['depart_chunk'];
      $vehicleId = $r['vehicle_id'];
      $partnerId = $r['partner_id'];


      $chunkObj = ChunkPeer::retrieveByPk($chunk);
      $pos = $chunk == $chunkObj->isCityProvince() ? myGoogleApi::$fixFrom : myGoogleApi::$fixTo;
      $toPos = $pos == myGoogleApi::$fixFrom ? myGoogleApi::$fixTo : myGoogleApi::$fixFrom;
      $data = array();

      if (isset($r['depart_district']) && $r['depart_district']) {
         list($departStreetId, $departVillageId, $departDistrictId ) = explode(',', $r['depart_district']);
         $street = RideStreetPeer::retrieveByPk($departStreetId);
         $village = RideVillagePeer::retrieveByPk($departVillageId);
         $district = RideDistrictPeer::retrieveByPk($departDistrictId);
         $name = $street ? $street->getName() : '';
         $name = ($name ? $name . ',' : '') . $village->getName();
         $name = ($name ? $name . ',' : '') . $district->getName();
         $data[] = $name;
      }
      $hasAddress = false;
      foreach ($address as $i => $adr) {

         if ($adr & trim($adr)) {
            $data [] = $adr;
            $hasAddress = true;
         }
      }

      if (!$hasAddress) {
         return array('cost' => 0);
      }


      $totalLength = 0;

      $ll = array();
      $nextPost = array();
      $new_address = array();

      while (sizeof($data) > 1) {
         $ks = array_keys($data);
         $vs = array_values($data);
         $v = $vs[0];
         $new_address [] = $v;
         $k = $ks[0];
         unset($data[$k]);
         $nextK = 0;
         $nextV = "";
         $nextL = 0;
         $nextPos = "";
         $firstPos = "";
         foreach ($data as $nk => $nv) {
            $l = myGoogleApi::calcRange($v, $nv, true);
            if ($nextK == 0 || $l['length'] < $nextL) {
               $nextL = $l['length'];
               $nextK = $nk;
               $nextV = $nv;
               $nextPos = $l['end_lat'] . ',' . $l['end_lng'];
               $firstPos = $l['start_lat'] . ',' . $l['start_lng'];
            }
         }
         if (!$nextPost) {
            $nextPost [] = $firstPos;
         }
         $nextPost[] = $nextPos;

         $ll [] = $nextL;

         unset($data[$nextK]);

         if (sizeof($data) == 0) {
            $new_address [] = $nextV;
         }
         $data = array_merge(array($nextV), $data);
      }
      $nextPost = array_merge(array($toPos), $nextPost);
      $data = array();
      for ($i = 0; $i < sizeof($new_address); $i++) {

         $data [] = $new_address[$i];
      }

      $totalLength = array_sum($ll);

      $length1 = myGoogleApi::calcRange($pos, $nextPost[1], false);
      $length2 = myGoogleApi::calcRange($pos, end($nextPost), false);
      $totalLength = $totalLength + $length2 - $length1;
      $totalLength = abs($totalLength);
      $cost = round(CalcPriceLength::getLeftCostStatic($vehicleId, $partnerId, $totalLength), -3);

      if ($cost < 20000) {
         $cost = 20000;
      }

      $ret = array('raw_cost' => $cost,
          'cost' => $cost,
          'cost_format' => number_format($cost, 0, 0, '.') . ' vnđ',
          'length' => $totalLength,
          'vehicle_id' => $vehicleId,
          'partner_id' => $partnerId,
          'length_format' => round($totalLength / 1000, 2) . ' Km',
          'length1' => $length1,
          'length2' => $length2,
          'post' => $pos,
          'length2' => $length2,
          'more_pos' => $nextPost,
          'more_length' => $ll,
          'address' => $data);

      return $ret;
   }

   public static function sendMessage($phone, $msg, $forwardPartner = false) {
//      if(!$forwardPartner) return;
      
      $driverMsg = new DriverMsg;
      $driverMsg->fromArray(
         array(
            'PhoneNumber' => $phone,
            'Message' => $msg));
      $driverMsg->save();
   }
   
   public static function sendMessageAlertPhone($msg) {
      if (self::WARN_SMS_NEW_BOOKING) {
         self::sendMessage(self::ALERT_PHONE, $msg);
      }
   }

   public static function nearest($num, $divisor) {
      $diff = $num % $divisor;
      if ($diff == 0)
         return $num;
      elseif ($diff >= ceil($divisor / 2))
         return $num - $diff + $divisor;
      else
         return $num - $diff;
   }

   public static function isEn() {
      return self::getLang() != 'vn';
   }

   public static function getHnTinhSelect($id) {

      $vars = array(0 => '',
          1 => 'Sử dụng dịch vụ đi riêng trong trường hợp Airport Taxi không sắp được hành khách khác đi cùng',
          2 => 'Hủy đăng ký nếu Airport Taxi không sắp được hành khách khác đi cùng');
      return isset($vars[$id]) ? $vars[$id] : '';
   }

   public static function getHnTinhSelectBackend($id) {

      $vars = array(0 => '',
          1 => 'Không ghép được xe thì đi riêng',
          2 => 'Không ghép được xe thì hủy');
      return isset($vars[$id]) ? $vars[$id] : '';
   }

   public static function getPartnerRides($root = false) {
      $c = new Criteria;
      $u = sfContext::getInstance()->getUser();
      if ($u->hasCredential('partner')) {

         $c->addJoin(PartnerRidePeer::PARTNER_MAPPING_ID, PartnerMappingPeer::ID);
         $c->addJoin(PartnerMappingPeer::CHUNK_DIMENSION_VEHICLE_ID, ChunkDimensionVehiclePeer::ID);
         $c->addJoin(ChunkDimensionVehiclePeer::PARTNER_VEHICLE_ID, PartnerVehiclePeer::ID);
         $c->add(PartnerVehiclePeer::PARTNER_ID, $u->getAttribute('partner_id', 0, 'user'));
      }

      if ($root) {
         $c->addJoin(ChunkDimensionVehiclePeer::CHUNK_DIMENSION_ID, ChunkDimensionPeer::ID);
         $c->addJoin(ChunkDimensionPeer::CHUNK_ID, ChunkPeer::ID);
         $c->add(ChunkPeer::PARENT_ID, NULL, Criteria::ISNULL);
      }

      return PartnerRidePeer::doSelect($c);
   }

   public static function getLang() {
      $inst = sfContext::getInstance();
      $rq = $inst->getRequest();
      $lc = $inst->getUser()->getAttribute(myUtil::LANG_SESSION, 'vn');
      if ($rq->hasParameter('lang')) {
         $lc = $rq->getParameter('lang', 'vn');
      }
      if ($lc === '') {
         if (myUtil::ipIsVietnam()) {
            $lc = 'vn';
         } else {
            $lc = 'en';
         }
      }
      return $lc;
   }

   public static $is_vietnam = array();

   public static function ipIsVietnam() {

      $lc = sfContext::getInstance()->getUser()->getAttribute(myUtil::LANG_SESSION, '');
      if ($lc == 'vn' || !$lc) {
         return true;
      }
      return false;
      $ip = $_SERVER['REMOTE_ADDR'];

      if ($ip) {
         if (!isset(self::$is_vietnam[$ip])) {

            $con = Propel::getConnection();
            $sql = "SELECT * FROM ip_location WHERE ip = '" . $ip . "'";

            $rs = $con->prepareStatement($sql)->executeQuery();
            if ($rs->next()) {
               self::$is_vietnam[$ip] = $rs->get("is_vietnam") == 1;
            } else {

               $ctx = stream_context_create(array('http' =>
                   array(
                       'timeout' => 5
                   )
               ));

               $html = new simple_html_dom(file_get_contents('http://www.iptrackeronline.com/index.php?ip_address=' . $ip, false, $ctx));
               $loc = $html->find(".cat", 0);
               $isVietnam = 0;
               if ($loc) {
                  if (strpos($loc->plaintext, 'Vietnam') !== false) {
                     $isVietnam = 1;
                  }
                  $address = trim(str_replace(array($ip, '</td>'), '', $loc->plaintext));
                  $con->prepareStatement("INSERT INTO ip_location (ip, name, is_vietnam) VALUES ('" . $ip . "', '" . addslashes($address) . "', '" . $isVietnam . "')")->executeQuery();
               }
               self::$is_vietnam[$ip] = $isVietnam == 1;
            }
         }
         return self::$is_vietnam[$ip];
      }
      return false;
   }

   public static function validateCaptcha($captcha_value) {

      $ct = sfContext::getInstance();
      $myCaptchaValidator = new captchaValidator($ct);
      $myCaptchaValidator->initialize($ct);

      if (!strlen($captcha_value) || !$myCaptchaValidator->execute($captcha_value, $captcha_error)) {
         return false;
      }
      return true;
   }

   public static function posToFbWall($facebook, $uid, $name) {
      $domain = ucfirst($_SERVER['HTTP_HOST']);
      $text = 'Chúc mừng {name} đã đăng ký làm thành viên của {domain}, hệ thống đặt chỗ trực tuyến của thương hiệu taxi trực thuộc VietnamAirline, chuyên tuyến sân bay, giá rẻ nhất Việt Nam';

      $text = str_replace(array('{name}', '{domain}'), array($name, $domain), $text);

      $description = 'Dành cho những người có nhu cầu đi lại giá rẻ bằng taxi hoặc minibus từ thành phố ra sân bay và ngược lại.';
      //$slogan = $domain.", Đi chung taxi ra sân bay, văn minh tiết kiệm";

      $u = sfContext::getInstance()->getUser();


      if (!empty($uid)) {
         # Active session, let's try getting the user id (getUser()) and user info (api->('/me'))
         try {
            # using all the arguments
            $ret_obj = $facebook->api('/' . $uid . '/feed', 'POST', array(
                'message' => $text,
                //'name' => $ride_view->getFromTo(),
                //'title' => $slogan,
                'description' => $description,
                //'caption' => 'Dichung.vn, Kết nối những chuyến đi của bạn2',
                'picture' => 'http://airporttaxi.vn/images/logo200.png',
                'link' => 'http://airporttaxi.vn'
            ));
            error_log($name . ': ' . json_encode($ret_obj) . '<br/>', 3, 'log_fb.html');
         } catch (FacebookApiException $e) {
            error_log($name . ': ' . json_encode($e->getMessage()) . '<br/>', 3, 'log_fb.html');
         }
      }
   }

   public static function setCookie($name, $val, $exTime) {

      setcookie($name, $val, time() + $exTime, '/', $_SERVER['HTTP_HOST']);
   }

   public static function getGateConn() {
      $connection = Propel::getConnection('my_gateway');
      $dsn = $connection->getDSN();

      $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = " . $dsn['hostspec'] . ")(PORT = " . $dsn['port'] . ")))(CONNECT_DATA=(SID=" . $dsn['database'] . ")))";

      $conn = oci_connect($dsn['username'], $dsn['password'], $db);
      return $conn;
   }

   public static function sendMailTicket($tickets, $createAccountMsg = "") {

      $header = 
         '<tr>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px; width: 100px;">' . LangPeer::getText('Ngày đi') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;width: 88px;">' . LangPeer::getText('Đi từ') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;width: 100px;">' . LangPeer::getText('Đến') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;width: 103px;">' . LangPeer::getText('Phương tiện') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;">' . LangPeer::getText('Hình thức') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;">' . LangPeer::getText('Số lượng') . '</td>
            <td style="color:#636363;background: #EEEEDE; font-weight: bold; padding: 5px;">' . LangPeer::getText('Chiều') . '</td>
         </tr>';


      $table = 
            '<table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="663" style="width:497.25pt;mso-cellspacing:0cm;mso-yfti-tbllook:                                                                                        1184;mso-padding-alt:7.5pt 0cm 7.5pt 0cm">
               <tbody>';
      $table .= $header;
      $eTable = '</tbody>
			</table>';
      $div = '
		<tr>
			<td colspan="7" style="border-style: solid none none; border-top-color: rgb(232, 232, 232); border-top-width: 1pt; ">&nbsp;</td>
		</tr>
		';
      $rows = "";
      $totalCost = 0;

      foreach ($tickets as $tk) {

         $totalCost += $tk->getTotalCost();
         //$row = '<Tr><td colspan="7" style="border-bottom: solid 1px #ccc;"><b>'.$tk->getStart().' - '.$tk->getEnd().'</b><i> ('.$tk->getDimensionName().')</i></td></tr>';
         $row = '<tr>
								<td  valign="top" style="padding: 5px;">{date}</td>
								<td  valign="top" style="padding: 5px;">{start} <Br/>{time}</td>
								<td valign="top" style="padding: 5px;">{end}</td>
								<td valign="top" style="padding: 5px;">{vehicle_name}</td>
								<td   valign="top" style="padding: 5px;">{ride_method_name}</td>
								<td  valign="top" style="padding: 5px;">{chair_count}</td>
								<td  valign="top" style="padding: 5px;">{dimension}</td>
							</tr>';

         $row = str_replace(array('{date}',
             '{time}',
             '{start}',
             '{end}',
             '{vehicle_name}',
             '{ride_method_name}',
             '{chair_count}',
             '{dimension}'), array($tk->getIndate('d/m/Y'),
             $tk->getInTime('H:i'),
             $tk->getStart(),
             $tk->getEnd(),
             LangPeer::getText($tk->getVehicleName()),
             LangPeer::getText($tk->getRideMethod()->getName()),
             $tk->getChairCountName(),
             LangPeer::getText($tk->getDimensionName())), $row);
         $rows .= $row . $div;
      }

      $ticket = $tickets[0];
      $email = $ticket->getEmail();
      $c = new Criteria;
      $c->add(MenuItemPeer::NAME, 'MAIL_TEMP_TAIXIAIRPORT');
      $mi = MenuItemPeer::doSelectOne($c);
      if (!$mi)
         return false;

      $body = myUtil::getLang() == 'vn' ? $mi->getContent() : $mi->getContentEn();

      $body = str_replace(array('{ticket_code}', '{fullname}', '{phone_number}', '{cost}', '{user_msg}', '{created_date}', '{ride_method}', '{hn_tinh_select}'), array($ticket->getTicketCode(), $ticket->getUseName(), $ticket->getUsePhone(), $totalCost . ' VNĐ', $createAccountMsg, $ticket->getCreatedAt('d/m/Y'), LangPeer::getText($ticket->getPayMethod()->getName()), LangPeer::getText(self::getHnTinhSelect($ticket->getHnTinhSelect()))), $body);
      $rows = $table . $rows . $eTable;
      $body = str_replace('{rows}', $rows, $body);

      if (myUtil::isEmail($email)) {
         self::sendMail($email, LangPeer::getText("Thông tin vé từ Airport Taxi"), $body);
      }
      self::sendMail("minhdn@dichung.vn", LangPeer::getText("Thông tin vé từ Airport Taxi"), $body);
      self::sendMail("dinh_ngoc_minh@yahoo.com", LangPeer::getText("Thông tin vé từ Airport Taxi"), $body);

      if (isset($_COOKIE['partner_domain'])) {

         $c = new Criteria;
         $c->add(PartnerPeer::DOMAIN, $_COOKIE['partner_domain']);
         $partner = PartnerPeer::doSelectOne($c);

         if ($partner && $partner->getNotifyEmail()) {

            self::sendMail($partner->getNotifyEmail(), LangPeer::getText("Thông tin vé từ Airport Taxi"), $body);
         }
      }
   }

   public static function sendMail($email, $title, $body) {
      self::setUtf8();
      //MailUtil::send($email, 'admin@dichung.vn', 'DichungAdmin', $title, $body);
      $mo = new MailOutbox;
      $mo->setSendTo($email);
      $mo->setSendFrom('admin@dichung.vn');
      $mo->setSendFromName('Dichung.vn');
      $mo->setTitle($title);
      $mo->setMessage($body);
      $mo->setPriority(1);
      $mo->save(Propel::getConnection('mail'));
   }

   public static function curlPost($url, $data) {

      $fields_string = "";
      //url-ify the data for the POST
      foreach ($data as $key => $value) {

         $fields_string .= $key . '=' . urlencode($value) . '&';
      }
      rtrim($fields_string, '&');

      //open connection
      $ch = curl_init();

      //set the url, number of POST vars, POST data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, count($fields_string));
      curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      //execute post
      $result = curl_exec($ch);

      //close connection
      curl_close($ch);

      return $result;
   }

   public static function saveMtQueue($phone, $serviceNumber, $cmd, $msg, $table = 'MT_QUEUE') {

      $mb = myUtil::getMobileOperator($phone);
      if (!$mb)
         return;
   }

   public static function setUtf8($con = null) {
      $con = Propel::getConnection($con);
      $con->prepareStatement('SET NAMES utf8')->executeQuery();
   }

   public static function key() {
      return "039845987oshy387lkfngklj";
   }

   static function encode($string) {
      $key = self::key();
      $key = sha1($key);
      $strLen = strlen($string);
      $keyLen = strlen($key);
      $hash = '';
      $y = 0;
      for ($x = 0; $x < $strLen; $x++) {
         $ordStr = ord(substr($string, $x, 1));
         if ($y == $keyLen) {
            $y = 0;
         }
         $ordKey = ord(substr($key, $y, 1));
         $y++;
         $hash .= strrev(base_convert(dechex($ordStr + $ordKey), 16, 36));
      }
      return $hash;
   }

   static function decode($string) {
      $key = self::key();
      $key = sha1($key);
      $strLen = strlen($string);
      $keyLen = strlen($key);
      $hash = '';
      $y = 0;
      for ($x = 0; $x < $strLen; $x+=2) {
         $ordStr = hexdec(base_convert(strrev(substr($string, $x, 2)), 36, 16));
         if ($y == $keyLen) {
            $y = 0;
         }
         $ordKey = ord(substr($key, $y, 1));
         $y++;
         $hash .= chr($ordStr - $ordKey);
      }
      return $hash;
   }

   public static function getMimes() {
      $mime_types = array("avi" => "video/x-msvideo",
          "bmp" => "image/bmp",
          "gif" => "image/gif",
          "png" => "image/png",
          "jpeg" => "image/jpeg",
          "jpg" => "image/jpeg",
          "lsf" => "video/x-la-asf",
          "lsx" => "video/x-la-asf",
          "mid" => "audio/mid",
          "mov" => "video/quicktime",
          "movie" => "video/x-sgi-movie",
          "mp2" => "video/mpeg",
          "mp3" => "audio/mpeg",
          'mp4' => 'video/mp4',
          "mpa" => "video/mpeg",
          "mpe" => "video/mpeg",
          "mpeg" => "video/mpeg",
          "mpg" => "video/mpeg",
          "mpv2" => "video/mpeg",
          "pdf" => "application/pdf");
      return $mime_types;
   }

   public static function genToken()
  {
    
      // start with a blank password
      $password = "";

      // define possible characters - any character in this string can be
      // picked for use in the password, so if you want to put vowels back in
      // or add special characters such as exclamation marks, this is where
      // you should do it
      $possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ";

      // we refer to the length of $possible a few times, so let's grab it now
      $maxlength = strlen($possible);
    
      // check for length overflow and truncate if necessary
      //if ($length > $maxlength) 
      {
        $length = $maxlength;
      }
    
      // set up a counter for how many characters are in the password so far
      $i = 0; 
      
      // add random characters to $password until $length is reached
      while ($i < $length) { 

        // pick a random character from the possible ones
        $char = substr($possible, mt_rand(0, $maxlength-1), 1);
          
        // have we already used this character in $password?
        if (!strstr($password, $char)) { 
          // no, so it's OK to add it onto the end of whatever we've already got...
          $password .= $char;
          // ... and increase the counter by one
          $i++;
        }

      }

      // done!
      return $password;

    
  }

   public static function isEmail($email) {
      return preg_match('|^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]{2,})+$|i', $email);
   }

   public static function getEmailFromString($string) {
      preg_match_all("/[a-z]+[\._a-zA-Z0-9-]+@[a-z]+[\._a-zA-Z0-9-]+/i", $string, $m);
      if ($m) {
         return $m[0];
      }
      return array();
   }

   public static function getViDayInWeek() {
      return array('Monday' => 'Thứ hai',
          'Tuesday' => 'Thứ ba',
          'Wednesday' => 'Thứ tư',
          'Thursday' => 'Thứ năm',
          'Friday' => 'Thứ sáu',
          'Saturday' => 'Thứ bảy',
          'Sunday' => 'Chủ nhật');
   }

   public static function phoneNumberValidTo84($phone) {
      if (strpos($phone, '+') === 0) {
         return substr($phone, 1);
      }

      if (strpos($phone, '84') === 0) {
         return $phone;
      }

      if (strpos($phone, '0') === 0) {
         return '84' . substr($phone, 1);
      }

      return '84' . $phone;
   }

   public static function phoneNumberValidTo0x($phone) {
      $phone = self::phoneNumberValidTo84($phone);
      return '0' . substr($phone, 2); 
   }

   public static function getMobilePartterns() {

      $gpcPattern = '/^((\+|)84|0|)(9(1|4)|12(3|4|5|7|9))\d{7}$/';

      $vmsPattern = '/^((\+|)84|0|)(9(0|3)|12(0|1|2|6|8))\d{7}$/';

      $viettelPattern = '/^((\+|)84|0|)(9(6|7|8)|16(8|9|6|7|3|4|5|2))\d{7}$/';

      $sfone = '/^((\+|)84|0|)(95|155)\d{7}$/';

      $vnm = '/^((\+|)84|0|)(92|188)\d{7}$/';

      $beeline = '/^((\+|)84|0|)((1|)99)\d{7}$/';

      $regs = array(
          'GPC' => $gpcPattern,
          'VMS' => $vmsPattern,
          'VTL' => $viettelPattern,
          'SFONE' => $sfone,
          'VNM' => $vnm,
          'BEELINE' => $beeline);
      return $regs;
   }

   public static function formatText($str) {
      $str = trim($str);
      $str = str_replace("\r", "", $str);
      while (strpos($str, "\n\n") !== false) {
         $str = str_replace("\n\n", "\n", $str);
      }
      return $str;
   }

   public static function getPhoneNumberFromString($str) {
      preg_match_all('#[0-9]+#', $str, $m);
      if ($m) {
         $dat = $m[0];
         $ps = array();
         for ($i = 0; $i < sizeof($dat); $i++) {
            $p = $dat[$i];
            if (self::isValidPhoneNumber($p)) {
               $ps [] = $p;
            }
         }
         return $ps;
      }
      return array();
   }

   public static function isValidPhoneNumber($phone) {
      $regs = self::getMobilePartterns();
      foreach ($regs as $parttern) {
         if (preg_match($parttern, $phone))
            return true;
      }
      return false;
   }

   public static function getMobileOperator($phone) {
      $regs = self::getMobilePartterns();
      foreach ($regs as $mb => $parttern) {
         if (preg_match($parttern, $phone))
            return $mb;
      }
      return false;
   }
   

   public static function image_resize($src, $dst, $width, $height, $crop = 0) {

      if (!list($w, $h) = getimagesize($src))
         return "Unsupported picture type!";

      $type = strtolower(substr(strrchr($src, "."), 1));
      if ($type == 'jpeg')
         $type = 'jpg';
      switch ($type) {
         case 'bmp': $img = imagecreatefromwbmp($src);
            break;
         case 'gif': $img = imagecreatefromgif($src);
            break;
         case 'jpg': $img = imagecreatefromjpeg($src);
            break;
         case 'png': $img = imagecreatefrompng($src);
            break;
         default : return "Unsupported picture type!";
      }

      // resize
      if ($crop) {
         if ($w < $width or $h < $height)
            return "Picture is too small!";
         $ratio = max($width / $w, $height / $h);
         $h = $height / $ratio;
         $x = ($w - $width / $ratio) / 2;
         $w = $width / $ratio;
      }
      else {
         if ($w < $width and $h < $height)
            return "Picture is too small!";
         //$ratio = min($width/$w, $height/$h);
         //$width = $w * $ratio;
         //$height = $h * $ratio;
         $x = 0;
      }

      $new = imagecreatetruecolor($width, $height);

      // preserve transparency
      if ($type == "gif" or $type == "png") {
         imagecolortransparent($new, imagecolorallocatealpha($new, 0, 0, 0, 127));
         imagealphablending($new, false);
         imagesavealpha($new, true);
      }

      imagecopyresampled($new, $img, 0, 0, $x, 0, $width, $height, $w, $h);

      switch ($type) {
         case 'bmp': imagewbmp($new, $dst);
            break;
         case 'gif': imagegif($new, $dst);
            break;
         case 'jpg': imagejpeg($new, $dst);
            break;
         case 'png': imagepng($new, $dst);
            break;
      }
      return true;
   }

   public static function strToSlug($str, $delimiter = '-', $replace = array(), $lower = true) {
      $str = self::removeMark($str);
      $str = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);

      if ($lower)
         $str = strtolower(trim($str, '-'));
      $str = preg_replace("/[\/_|+ -]+/", $delimiter, $str);
      if (sizeof($replace)) {
         $str = str_replace(array_keys($replace), array_values($replace), $str);
      }
      return $str;
   }

   public static function removeMark($str, $lower = true) {
      $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
      $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
      $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
      $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
      $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
      $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
      $str = preg_replace("/(đ)/", 'd', $str);
      $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
      $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
      $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
      $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
      $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
      $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
      $str = preg_replace("/(Đ)/", 'D', $str);
      if ($lower)
         $str = strtolower($str);
      $str = trim($str);
      $str = preg_replace('/[^\x20-\x7E\n]/', '', $str);
      return $str;
   }

  public static function getFbApiKey()
  {
    return self::getSubsite()->getFbAppId();
  }
  public static function getFacebookApi()
  {
    if(!class_exists('Facebook'))
    {
      require sfConfig::get('sf_root_dir').'/facebook_sdk_src/facebook.php';
    }
    # Creating the facebook object  
    $facebook = new Facebook(array(  
        'appId'  => '825897607458922',  
        'secret' => 'fb3bedf518950447382926c78b53907b',  
        'cookie' => true  
    ));  
    return $facebook;
  }
  static $subsite = null;
    static function getSubsite(){

  }

   public static function cut_string($str,$len,$more){
    if ($str=="" || $str==NULL) return $str;
    if (is_array($str)) return $str;
      $str = trim($str);
    if (strlen($str) <= $len) return $str;
      $str = substr($str,0,$len);
    if ($str != "") {
      if (!substr_count($str," ")) {
        if ($more) $str .= " ...";
          return $str;
      }
      while(strlen($str) && ($str[strlen($str)-1] != " ")) {
        $str = substr($str,0,-1);
      }
      $str = substr($str,0,-1);
      if ($more) $str .= " ...";
    }
    return $str;
  }
}
