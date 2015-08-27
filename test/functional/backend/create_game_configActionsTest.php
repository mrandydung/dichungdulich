<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/create_game_config/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'create_game_config')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
