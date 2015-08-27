<?php

class Partner extends BasePartner
{
    public function __toString() {
        return $this->getName();
    }
    
    public function getImagesLogo(){
        return '<img src="' . $this->getLogo() . '" style="width:70px;height:70px"/>';
    }
}
