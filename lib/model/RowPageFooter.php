<?php

class RowPageFooter extends BaseRowPageFooter {

    public function __toString() {
        return $this->getName();
    }

    public function getShowName(){
        return !myUtil::isEn() ? $this->getName() : $this->getNameEn();
    }

}
