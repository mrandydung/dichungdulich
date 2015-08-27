<?php

class HomeDiemDenItem extends BaseHomeDiemDenItem {

    public function __toString() {
        return $this->getName();
    }

    public function getImgNew() {
        return '<img src="' . $this->getImg() . '" style="width:70px;height:70px"/>';
    }

    public function get_url_find_tour(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@findTour') : url_for('@findTour_en');
    }
 

}
