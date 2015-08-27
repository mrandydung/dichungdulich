<?php

class page_footerActions extends sfActions {

    public function executeIndex($request) {
        $page_footer_id = $request->getParameter('page_footer_id');
        $this->content = PageFooterPeer::retrieveByPk($page_footer_id);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getShowName());
        $seo->setDescription($this->content->getShowName());
    }

    public function executeVe_chung_toi($request) {
        $this->content = PageFooterPeer::retrieveByPk(1);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeDoi_tac($request) {
        $this->content = PageFooterPeer::retrieveByPk(2);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeTuyen_dung($request) {
        $this->content = PageFooterPeer::retrieveByPk(3);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeCach_thuc_hoat_dong($request) {
        $this->user_id = 0;
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $this->content = PageFooterPeer::retrieveByPk(4);
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeTinh_nang_noi_bat($request) {
        $this->user_id = 0;
        $u = $this->getUser();
        $this->user_id = $u->getId();
        $this->content = PageFooterPeer::retrieveByPk(5);
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeHuong_dan_su_dung($request) {
        $this->content = PageFooterPeer::retrieveByPk(6);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeChinh_sach_huy_dat_cho($request) {
        $this->content = PageFooterPeer::retrieveByPk(7);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeBao_ve_quyen_rieng_tu($request) {
        $this->content = PageFooterPeer::retrieveByPk(8);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeSu_dung_dich_vu($request) {
        $this->content = PageFooterPeer::retrieveByPk(9);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeDoi_tac_tour($request) {
        $this->content = PageFooterPeer::retrieveByPk(10);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeDoi_tac_kinh_doanh($request) {
        $this->content = PageFooterPeer::retrieveByPk(11);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeCo_hoi_tinh_nguyen($request) {
        $this->content = PageFooterPeer::retrieveByPk(12);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

    public function executeLoi_ich_tham_gia($request) {
        $this->content = PageFooterPeer::retrieveByPk(13);
        $u = $this->getUser();
        $seo = $u->getSeo();
        $seo->setTitle($this->content->getName());
        $seo->setDescription($this->content->getName());
    }

}
