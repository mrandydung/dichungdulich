<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/request_day_start_date/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'request_day_start_date')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
