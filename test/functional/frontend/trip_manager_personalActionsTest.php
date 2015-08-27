<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/trip_manager_personal/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'trip_manager_personal')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
