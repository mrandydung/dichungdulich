<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/horo_card/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'horo_card')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
