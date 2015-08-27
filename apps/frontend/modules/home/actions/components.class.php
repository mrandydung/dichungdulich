<?php

class homeComponents extends sfComponents {

    public function executeHeader_menu($request) {
        $this->myUserId = 0;
        $u = $this->getUser();
        $host = trim($request->getHost());
        $this->host = PartnerPeer::get_domain($host);
        if ($u) {
            $this->myUserId = $u->getId();
            $this->user = DichungUserPeer::retrieveByPk($this->myUserId, Propel::getConnection('dichung_new'));
        }
    }
    

    public function executeIndex_body_slide($request) {

    }

}
