<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/download/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'download')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
