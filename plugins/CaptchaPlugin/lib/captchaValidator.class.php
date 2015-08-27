<?php

class captchaValidator extends sfValidator 
{
  public function initialize($context, $parameters = null)
  {
    parent::initialize($context);
  
    return true;
  }

  public function execute (&$value, &$error)
  {
    $captcha = Captcha::getInstance();

    if ($captcha->verify($value)) 
      return true;

    $error = $this->getParameter('error', 'You should specify valid Turing number');
    return false;
  }
}
