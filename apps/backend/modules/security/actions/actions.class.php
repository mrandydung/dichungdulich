<?php
/**
 * security actions.
 *
 * @package    bot_quang
 * @subpackage security
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2692 2006-11-15 21:03:55Z fabien $
 */
class securityActions extends sfActions
{
  /**
   * Executes index action
   *
   */
	public function executeSecurity(){
		
	}
  public function executeIndex()
  {
    $this->forward("security/login");
  }

  public function executeLogin()
  {
  	$this->setLayout(false);
  	if($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$user = $this->getRequestParameter('user');
			$cUser = new Criteria();
			$cUser->add(HuserPeer::USERNAME, $user['user_name']);
			$cUser->add(HuserPeer::PASSWORD, md5($user['password']));			
			$me = HuserPeer::doSelectOne($cUser);
			if($me)
			{
				if($me->getActive() == 0)
				{
					$this->getRequest()->setError('failed', 'Login failed because this username has been locked !');
				}
				else
				{
					
					$user = $this->getUser();
					$user->setAuthenticated(true);
					if($me->getIsAdmin())
					{
						$user->addCredential('admin');
					} 
					elseif($me->getIsModerater()){
						$user->addCredential('moderater');
					}
					elseif ($me->getIsPartner()) {
						$user->addCredential('partner');
					}
					else{
						$user->addCredential('content');
					}
					
					$user->setAttribute('id', $me->getId(), 'user');
					$user->setAttribute('username', $me->getUserName(), 'user'); 
					$this->redirect('@homepage');
				}
			}
			else
			{
				$this->getRequest()->setError('failed', 'Login failed !');
			}
		}
  }
 
  public function executeLogout()
  {
  	$user = $this->getUser();
		$user->setAuthenticated(false);
		$user->getAttributeHolder()->clear();
		$user->clearCredentials();
		$this->redirect("security/login");
		return sfView::NONE;
  }

}
