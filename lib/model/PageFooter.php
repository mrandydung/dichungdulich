<?php

/**
 * Subclass for representing a row from the 'page_footer' table.
 *
 * 
 *
 * @package lib.model
 */ 
class PageFooter extends BasePageFooter
{
    public function toSlug() {
        return myUtil::strToSlug(!myUtil::isEn() ? $this->getName() : $this->getNameEn());
    }

    public function getShowName(){
        return !myUtil::isEn() ? $this->getName() : $this->getNameEn();
    }

    public function getShowContent(){
        return !myUtil::isEn() ? $this->getContent() : $this->getContentEn();
    }
    
    public function get_url_page_footer(){
        sfLoader::loadHelpers('Url');
        return !myUtil::isEn() ? url_for('@page_footer?page_footer_name='.$this->toSlug().'&page_footer_id='.$this->getId()) : url_for('@page_footer_en?page_footer_name='.$this->toSlug().'&page_footer_id='.$this->getId());
    }

    public function get_row_page_footer_by_partner(){
		$partner_id = myUser::get_partner_id();
		$c = new Criteria();
		$c->add(RowPageFooterPeer::PARTNER_ID,$partner_id);
		return RowPageFooterPeer::doSelect($c);
	}
}
