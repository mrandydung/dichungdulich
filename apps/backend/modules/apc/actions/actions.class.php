<?php

/**
 * apc actions.
 *
 * @package    sf_sandbox
 * @subpackage apc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class apcActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex($r) {
      
      $info = apc_cache_info ('user');
      $this->list = $info['cache_list'];
      
   }
   
   public function executeDelete($r) {
      
      $keys = $r->getParameter('key');
      foreach($keys as $k) {
        apc_delete($k);
      }
      return $this->renderText('done');
   }
}
