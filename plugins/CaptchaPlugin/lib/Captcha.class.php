<?php
require_once 'kcaptcha/kcaptcha.php';

class Captcha
{
  protected static $instance = null;
    
  private function __construct()
  {
  }
  
  protected function __clone()
  {
  }

  public static function getInstance()
  {
    if (!isset(self::$instance))
    {
      $class = __CLASS__;
      self::$instance = new $class();
    }

    return self::$instance;
  }
    
  public static function hasInstance()
  {
    return isset(self::$instance);
  }
	
	public function getNs(){
		return 'captcha';
	}
	
	public function getKeyName(){
				
		return 'captcha';
	}
	
	function getUser(){
		return sfContext::getInstance()->getUser();
	}
  public function getKeyString()
  {
    return $this->getUser()->getAttribute($this->getKeyName(), null, $this->getNs());
  }

  public function generate()
  {
    $captcha = new KCAPTCHA();
    $this->getUser()->setAttribute($this->getKeyName(), $captcha->getKeyString(), $this->getNs()); 
  }

  public function verify($s)
  {
    $key = $this->getUser()->getAttribute('captcha', null, $this->getNs());
    $this->getUser()->setAttribute($this->getKeyName(), mt_rand(0, 9999), $this->getNs());
    
    return (strcasecmp($key, $s) === 0);

  }

}
