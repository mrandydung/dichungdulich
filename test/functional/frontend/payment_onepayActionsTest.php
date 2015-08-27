<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/payment_onepay/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'payment_onepay')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
