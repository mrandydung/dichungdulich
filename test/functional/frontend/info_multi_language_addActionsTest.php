<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/info_multi_language_add/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'info_multi_language_add')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
