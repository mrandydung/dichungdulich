<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/user_default/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'user_default')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
