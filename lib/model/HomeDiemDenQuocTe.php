<?php

/**
 * Subclass for representing a row from the 'home_diem_den_quoc_te' table.
 *
 * 
 *
 * @package lib.model
 */ 
class HomeDiemDenQuocTe extends BaseHomeDiemDenQuocTe
{
	public function getImgNew(){
		return '<img src="'.$this->getImg().'" style="width:70px;height:70px"/>';
	}
}
