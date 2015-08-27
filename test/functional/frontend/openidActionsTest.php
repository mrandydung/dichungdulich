<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/openid/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'openid')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
