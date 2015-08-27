<?php
class HomeDiemDenItemPartner extends BaseHomeDiemDenItemPartner
{
	 public function __toString() {
        return $this->getName();
    }

    public function getImgNew() {
        return '<img src="' . $this->getImg() . '" style="width:70px;height:70px"/>';
    }
}
