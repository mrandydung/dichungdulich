<?php

/**
 * Subclass for performing query and update operations on the 'images_slide' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ImagesSlidePeer extends BaseImagesSlidePeer
{
    public static function get_images_slide($host){
    	if($host){
		  	$c = new Criteria();
	        $c->addAscendingOrderByColumn(self::PRIORITY);
	        $c->add(self::PARTNER_ID,$host->getId());
	        return self::doSelect($c);
    	}
    }
}
