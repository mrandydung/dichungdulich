<?php

/**
 * Subclass for representing a row from the 'dichung_user' table.
 *
 * 
 *
 * @package lib.model
 */
class DichungUser extends BaseDichungUser {

    public function check_admin_partner_login(){
        $host = myUser::host();
        $partner_id = $this->getPartnerId();
        $partner = PartnerPeer::retrieveByPK($partner_id);
        if($partner->getLink() != $host){
            return false;
        }else{
            return true;
        }
    }

    public function __toString() {
        return $this->getFullname();
    }

    public function toSlug() {
        return myUtil::strToSlug($this->getFullname());
    }

    public function getDetailUrl() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_profile?id=' . $this->getId() . '&name=' . $this->toSlug()) : url_for('@user_profile_en?id=' . $this->getId() . '&name=' . $this->toSlug());
    }

    public function getDetailUrlDefault() {
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_profile_default?user_id=' . $this->getId() . '&name=' . $this->toSlug()) : url_for('@user_profile_default_en?user_id=' . $this->getId() . '&name=' . $this->toSlug());
    }

    public function getFullnameBuyId($user_id) {
        $user = DichungUserPeer::retrieveByPK($user_id);
        return $user->getFullname();
    }

    public function getPhoneNumberTo0x() {
        $p = $this->getPhoneNumber();
        if (substr($p, 0, 1) == '0')
            return $p;
        return '0' . substr($p, 2);
    }

    public function getNameGender($gender_id) {
        $gender = GenderPeer::retrieveByPK($gender_id);
        if ($gender) {
            return $gender->getName();
        } else {
            return '';
        }
    }

    public function getJobName() {
        $job_id = $this->getJobId();
        if ($job_id) {
            $job = JobPeer::retrieveByPK($job_id);
            return $job->getName();
        } else {
            return '';
        }
    }

    public function getOldRangeName() {
        $old_range_id = $this->getOldRangeId();
        if ($old_range_id) {
            $old_range = OldRangePeer::retrieveByPK($old_range_id);
            return $old_range->getName();
        } else {
            return '';
        }
    }

    public function get_show_avatar() {
        $avatar = $this->getAvatar();
        if (substr($avatar, 0, 8) == '/uploads') {
            $html = ' <img src="http://dichung.vn' . $avatar . '" style="height: 25px"/>';
        } else {
            $html = '<img src="' . $avatar . '"/>';
        }
        return $html;
    }

    public function get_url_profile_user_default(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_profile_default'): url_for('@user_profile_default_en');
    }

    
    public function get_url_profile_user(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@userAccount'): url_for('@userAccount_en');
    }

    public function get_url_user_service(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_service'): url_for('@user_service_en');
    }

    public function get_url_user_transaction_management(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_transaction'): url_for('@user_transaction_en');
    }

    public function get_url_user_the_experience(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_acquirements'): url_for('@user_acquirements_en');
    }

    public function get_url_user_message(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_message'): url_for('@user_message_en');
    }

     public function get_url_user_notification(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@user_notification'): url_for('@user_notification_en');
    }


    public function get_url_create_tour(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@createTour'): url_for('@createTour_en');
    }

    public function html_user_login() {
        sfLoader::loadHelpers('Url');
        $html = ' <ul class="nav navbar-nav dichung_nav">  <li class="dropdown">  <a class="dropdown-toggle user_menu" data-toggle="dropdown" href="#"><span class="user">';
        $html .= $this->get_show_avatar();
        $html .= '</span>' . $this->getFullname() . ' <span class="caret"></span></a>  <ul class="dropdown-menu list-group"><li><a href="' . $this->get_url_profile_user(). '"><span class="thongtin"></span>'.LangPeer::getText('Thông tin cá nhân').'</a></li><li><a href="' . $this->get_url_user_service() . '"><span class="dichvu"></span>'.LangPeer::getText('Quản lý tour').'</a></li><li><a href="' .$this->get_url_user_transaction_management(). '"><span class="giaodich"></span>'.LangPeer::getText('Quản lý giao dịch').'</a></li><li><a href="' . $this->get_url_user_the_experience() . '"><span class="trainghiem"></span>'.LangPeer::getText('Kinh nghiệm').'</a></li><li><a href="' . url_for('@logout') . '"><span class="dangxuat"></span>'.LangPeer::getText('Đăng xuất').'</a></li> </ul></li><li><a href="' . url_for('@user_notification') . '">';
        $html .= $this->html_user_notify();
        $html .='</a></li><li><a href="' . url_for('@user_message') . '">';
        $html .= $this->html_user_message();
        $html .= '</a></li><li><a href="' . $this->get_url_create_tour() . '" class="creattrip">'.LangPeer::getText('Tạo chuyến đi').'</a></li></ul>';
        return $html;
    }

    public function html_user_login_partner() {
        sfLoader::loadHelpers('Url');
        $partner_id = $this->getPartnerId();
        $html = ' <ul class="nav navbar-nav dichung_nav">  <li class="dropdown">  <a class="dropdown-toggle user_menu" data-toggle="dropdown" href="#"><span class="user">';
        $html .= $this->get_show_avatar();
        if(!$this->check_admin_partner_login()){
            $html .= '</span>' . $this->getFullname() . ' <span class="caret"></span></a>  <ul class="dropdown-menu list-group"><li><a href="' .$this->get_url_profile_user() . '"><span class="thongtin"></span>'.LangPeer::getText('Thông tin cá nhân').'</a></li><li><a href="' .$this->get_url_user_transaction_management() . '"><span class="giaodich"></span>'.LangPeer::getText('Quản lí giao dịch').'</a></li><li><a href="' . $this->get_url_user_the_experience() . '"><span class="trainghiem"></span>'.LangPeer::getText('Kinh nghiệm').'</a></li><li><a href="' . url_for('@logout') . '"><span class="dangxuat"></span>'.LangPeer::getText('Đăng xuất').'</a></li> </ul></li><li><a href="' . url_for('@user_notification') . '">';
        }else{
            $html .= '</span>' . $this->getFullname() . ' <span class="caret"></span></a>  <ul class="dropdown-menu list-group"><li><a href="' . $this->get_url_profile_user(). '"><span class="thongtin"></span>Thông tin cá nhân </a></li><li><a href="' . $this->get_url_user_service() . '"><span class="dichvu"></span>'.LangPeer::getText('Quản lý tour').'</a></li><li><a href="' . $this->get_url_user_transaction_management(). '"><span class="giaodich"></span>'.LangPeer::getText('Quản lý giao dịch').'</a></li><li><a href="' . $this->get_url_user_the_experience() . '"><span class="trainghiem"></span>'.LangPeer::getText('Kinh nghiệm').'</a></li><li><a href="' . url_for('@logout') . '"><span class="dangxuat"></span>'.LangPeer::getText('Đăng xuất').'</a></li> </ul></li><li><a href="' . url_for('@user_notification') . '">';
        }
        $html .= $this->html_user_notify();
        $html .='</a></li><li><a href="' . url_for('@user_message') . '">';
        $html .= $this->html_user_message();
        if($partner_id !== 1){
            $html .= '</a></li><li><a href="' . $this->get_url_create_tour(). '" class="creattrip">'.LangPeer::getText('Tạo chuyến đi').'</a></li></ul>';
        }
        return $html;
    }

    
    public function html_user_message(){
        if (!MessagePeer::countMessage($this->getId())) {
            $html = '<span class="tinnhan"></span>';
        } else {
            $html = '<span class="tinnhan"></span><span style="color: red;">(' . MessagePeer::countMessage($this->getId()) . ' '.LangPeer::getText('tin').')</span>';
        }
        return $html;
    }    
    
    public function html_user_notify() {
        if (!NotificationPeer::countNotify($this->getId())) {
            $html = '<span class="thongbao"></span>';
        } else {
            $html = '<span class="thongbao"></span><span style="color: red;">(' . NotificationPeer::countNotify($this->getId()) . ' '.LangPeer::getText('Thông báo').')</span>';
        }
        return $html;
    }

}
