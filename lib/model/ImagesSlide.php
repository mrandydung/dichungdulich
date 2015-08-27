<?php

/**
 * Subclass for representing a row from the 'images_slide' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ImagesSlide extends BaseImagesSlide
{
    public function getNewImages(){
        return '<img src="' . $this->getImages() . '" style="width:70px;height:70px"/>';
    }
}
