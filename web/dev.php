<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);

sfContext::createInstance($configuration)->dispatch();
