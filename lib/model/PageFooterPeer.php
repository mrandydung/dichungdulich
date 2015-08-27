<?php

class PageFooterPeer extends BasePageFooterPeer {
    public static function get_page_footer_by_partner($partner_id){
        $c = new Criteria();
        $c->add(self::PARTNER_ID,$partner_id);
        $c->add(self::ROW_PAGE_FOOTER_ID, null, Criteria::ISNOTNULL);
        $c->addGroupByColumn(self::ROW_PAGE_FOOTER_ID);
        return self::doSelect($c);
    }
    
    public static function get_item_row_page_footer($row_page_footer_id,$partner_id){
        $c = new Criteria();
        $c->add(self::PARTNER_ID,$partner_id);
        $c->add(self::ROW_PAGE_FOOTER_ID,$row_page_footer_id);
        return self::doSelect($c);
    }

   
}
