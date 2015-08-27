<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/page_footer/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'page_footer')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
