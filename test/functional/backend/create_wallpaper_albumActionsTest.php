<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/create_wallpaper_album/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'create_wallpaper_album')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
