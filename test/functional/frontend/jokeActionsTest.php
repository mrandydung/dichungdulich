<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/joke/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'joke')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
