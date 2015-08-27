<?php

class TypeLanguagePeer extends BaseTypeLanguagePeer
{
	public static function get_all(){
		return self::doSelect(new Criteria());
	}
}
