<?php

/**
 * Subclass for performing query and update operations on the 'lang' table.
 *
 * 
 *
 * @package lib.model
 */ 
class LangPeer extends BaseLangPeer
{
	   static $langs = array();

   static function get($code) {

      if (!sizeof(self::$langs)) {
         $rs = self::getAll();
         foreach ($rs as $l) {
            $vn = $l->getVn();
            $en = $l->getEn();
            self::$langs[$l->getCode()] = array(
                'vn' => str_replace(array("\n"), array("<br/>"), $vn),
                'en' => str_replace(array("\n"), array("<br/>"), $en)
            );
         }
      }
      $lc = myUtil::getLang();
      return isset(self::$langs[$code]) ? self::$langs[$code][$lc] : null;
   }

   static $langTexts = array();

   static function getText($text) {

      if (!sizeof(self::$langTexts)) {
         $rs = self::getAll();
         foreach ($rs as $l) {
            $k = myUtil::strToSlug($l->getVn());
            self::$langTexts[$k] = array('vn' => $l->getVn(), 'en' => $l->getEn());
         }
      }
      $lc = myUtil::getLang();
      return isset(self::$langTexts[myUtil::strToSlug($text)]) ? self::$langTexts[myUtil::strToSlug($text)][$lc] : $text;
   }
   
   public static $all;
   public static function getAll() {
      if(!self::$all) {
         self::$all = LangPeer::doSelect(new Criteria);
      }
      return self::$all;
   }

   static function getMonthYear($year, $month) {
      $lc = myUtil::getLang();
      if ($lc == 'vn') {
         return 'Tháng ' . $month . ' Năm ' . $year;
      }

      return strtoupper(substr(date('F', strtotime($year . '-' . $month)), 0, 3)) . ' ' . $year;
   }

   public static $langs_tmp = null;
   public static function translate($t) {
       
      if(self::$langs_tmp === null){
         self::$langs_tmp = array();
         foreach(LangPeer::doSelect(new Criteria) as $lang) {
            self::$langs_tmp[myUtil::removeMark(trim($lang->getVn()))] = $lang->getEn();
         }
      }
      
      if(sfContext::getInstance()->getUser()->isEn()){
         $x = @self::$langs_tmp[myUtil::removeMark(trim($t))];
         $t = $x?$x:$t;
      }
      return $t;
   }

}
