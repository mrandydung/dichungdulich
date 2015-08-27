<?php

/**
 * Subclass for performing query and update operations on the 'config' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ConfigPeer extends BaseConfigPeer
{
 	public static $configs = array();
	public static function get($code) {
		if(!self::$configs){
			$all = self::doSelect(new Criteria);
			foreach($all as $item) {
				self::$configs[$item->getCode()] = $item->getVal();
			}
		}
		return isset(self::$configs[$code])?self::$configs[$code]:null;
	}
}
