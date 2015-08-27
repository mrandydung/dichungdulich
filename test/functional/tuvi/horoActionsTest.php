<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/horo/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'horo')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
