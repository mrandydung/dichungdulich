<?php

/**
 * captcha actions.
 *
 * @package    captcha
 * @subpackage captcha
 * @author     Voznyak Nazar <voznyaknazar@gmail.com>
 * @version    
 */
class captchaActions extends sfActions
{
  /**
   * Executes index action
   *
   */
  public function executeIndex($r)
  {
    $this->getResponse()->setContentType('image/jpeg');

    $captcha = Captcha::getInstance();
    $captcha->generate();
		return sfView::NONE;
  }
}
