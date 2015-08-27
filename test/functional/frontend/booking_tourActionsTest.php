<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/booking_tour/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'booking_tour')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
