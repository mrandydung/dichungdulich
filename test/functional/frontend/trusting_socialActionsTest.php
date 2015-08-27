<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/trusting_social/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'trusting_social')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
