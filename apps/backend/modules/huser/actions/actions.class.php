<?php

/**
 * user actions.
 *
 * @package    sf_sandbox
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class huserActions extends autohuserActions
{
  protected function updateHuserFromRequest()
  {
    $huser = $this->getRequestParameter('huser');

    if (isset($huser['username']))
    {
      $this->huser->setUsername($huser['username']);
    }
		
		if (isset($huser['partner_id']))
    {
      $this->huser->setPartnerId($huser['partner_id']);
    }
		
		
    if (isset($huser['password']))
    {
			if(strlen($huser['password']))
			{
				$this->huser->setPassword(md5($huser['password']));
			}
    }
    $this->huser->setActive(isset($huser['active']) ? $huser['active'] : 0);
		 
    $this->huser->setIsAdmin(isset($huser['is_admin']) ? $huser['is_admin'] : 0);

    $this->huser->setIsModerater(isset($huser['is_moderater']) ? $huser['is_moderater'] : 0);

    $this->huser->setIsPartner(isset($huser['is_partner']) ? $huser['is_partner'] : 0);
  }
}
