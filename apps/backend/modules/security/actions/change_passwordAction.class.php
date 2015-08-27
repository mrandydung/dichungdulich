<?php

/**
 * security actions.
 *
 * @package    bot_quang
 * @subpackage security
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class change_passwordAction extends sfAction
{
  /**
   * Executes index action
   *
   */
  public function execute()
  {
  	if($this->getRequest()->getMethod() == sfRequest::POST)
	{
		$user = $this->getRequestParameter('user');
		$me = UserPeer::retrieveByPk($this->getUser()->getAttribute("id", "", "user"));
		if($user["password"] != '')
		{
			$me->setMd5Pw(md5($user["password"]));
			$me->save();
			$this->setFlash("notice", "Your password has been changed !");
			$this->redirect('security/change_password');
		}
		else
		{
			$this->setFlash("notice", "Please type your password");
		}
		$this->redirect('security/change_password');
	}
  
  }
}
