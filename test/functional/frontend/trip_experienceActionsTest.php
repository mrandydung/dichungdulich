<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/trip_experience/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'trip_experience')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
