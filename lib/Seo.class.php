<?php 
//user getMetaHome, getMetaContent
class Seo {
public $title = "";
public $keyword = "";
public $description = "";
public $rss = "";
public $content = null;
public $follow = "follow";
public $index = "index";
public $noodp = "noodp";
public $thumb = "";
function __construct(){
$user = $this->getUser();
$app = strtoupper(sfConfig::get('sf_app'));
//////////////////////////////////////////
$this->title = $user->getWebConfig($app.'_TITLE');
$this->keyword = $user->getWebConfig($app.'_KEYWORD');
$this->description = $user->getWebConfig($app.'_DESCRIPTION');
$this->slogan = $user->getWebConfig($app.'_SLOGAN');
$this->thumb = $user->getWebConfig($app.'_IMAGES');
////////////////////////////////////////
$routing = $this->getRouting();
$rule = $routing->getCurrentRouteName();
$rule .= "_rss"; // home_rss
$routes = $routing->getRoutes();
/*
if(in_array($rule, array_keys($routes))){
sfLoader::loadHelpers(array('Url'));
$params = $this->getRequest()->getParameterHolder()->getAll();
unset($params['module'], $params['action']);
$this->rss = url_for('@'.$rule.'?'.http_build_query($params));
}*/
///////////////////////////////////////////
}
function getTitleFormated(){
$title = $this->title;
$appTitle = $this->getUser()->getWebConfig(strtoupper(sfConfig::get('sf_app')).'_TITLE');
/*if($title != $appTitle){
$title = $this->title.' | '.$appTitle;
}*/
return $title;
}
public function getTags(){
return $this->tags;
}
public function getContent(){
return $this->content;
}
public function setRss($rss){
$this->rss = $rss;
}
public function setTitle($title){
$this->title = $title;
}
public function setKeyword($keyword){
$this->keyword = $keyword;
}
public function setDescription($description){
$this->description = $description;
}
public function setGooglePlus($link){
$this->googlePlus = $link;
}
public function getThumb($thumb){
return $this->thumb;
}
public function setThumb($thumb){
$this->thumb = $thumb;
}
public function setCreatedAt($t){
$this->createdAt = str_replace(' ', 'T', $t);
}
public function setSlogan($s){
$this->slogan = $s;
}
public function setFollow($f){
if($f)
$this->follow = "follow";
else
$this->follow = "nofollow";
}
public function setIndex($i){
if($i)
$this->index = "index";
else
$this->index = "noindex";
}
public function setTags($tags){
$this->tags = $tags;
}
public function setContent($ct){
$this->content = $ct;
}
public function getContext(){
return sfContext::getInstance();
}
public function getRouting(){
return $this->getContext()->getRouting();
}
public function getRequest(){
return $this->getContext()->getRequest();
}
public function getUser(){
return $this->getContext()->getUser();
}
function getMetaHome(){
return 	$this->getMeta()."\r\n".
$this->getLink();
}	
function getMetaContent(){
$date = "";
$uri = $this->getRequest()->getUri();
if($this->createdAt){
$date = '	
<meta name="pubdate"  itemprop="datePublished" content="'.$this->createdAt.'+07:00"/>
<meta name="lastmod"  itemprop="dateModified" content="'.$this->createdAt.'+07:00"/>
<meta                 itemprop="dateCreated" content="'.$this->createdAt.'+07:00"/>
';
}
//$title = $this->getTitleFormated();
$host = $this->getHost();
$more = '	
<meta name="keywords" itemprop="keywords" content="'.$this->keyword.'"/>
<meta name="source"   content="'.$this->description.'" itemprop="sourceOrganization" />
'.$date.'
<meta itemprop="headline" content="'.$this->title.'"/>
<meta property="og:type" content="website"/>
<meta property="og:url" itemprop="url" content="'.$uri.'" />
<meta property="og:title" content="'.$title.'" name="title" />
<meta property="og:description" itemprop="description" name="description" content="'.$this->description.'" />
<meta property="og:image" itemprop="thumbnailUrl" content="http://giaothong.dichung.vn/images/giaothong_default.jpg"/>
<meta property="og:site_name" content="'.$uri.'" />
<meta name="author" content="'.$host.'" itemprop="author"/>
<meta http-equiv="Refresh" content="900" />
<meta content="vi-VN" itemprop="inLanguage"/>
<META HTTP-EQUIV="Content-Language" Content="vi">
<meta name="language" content="vietnam">
"/>';
return 	$more."\r\n".$date;
}
	function getSeoNew()
	{
		$uri = $this->getRequest()->getUri();
		$title = $this->getTitleFormated();
		$new = '
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>'.$title.' </title>
		<meta name="robots" content="index,follow"/>
      	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="canonical" href='.$uri.'>
		<meta name="description" content="'.$this->description.'"/>
		<meta name="keywords" content="'.$this->keyword.'"/>
		<meta name="language" content="vi"/>
		<meta property="og:title" content="'.$title.' " name="title" />
		<meta property="og:type" content="website"/>
		<meta property="og:image" content="/images/img-lien-he.jpg"/>
		<meta property="og:locale" content="vi_VN" />
		<meta property="og:url" content="'.$uri.'"/>
		<meta property="og:description" content="'.$this->description.'" />
		<meta property="og:image" itemprop="thumbnailUrl" content="'.$this->thumb.' "/>'; 
		return $new;
	}
	function getSeoGheptour(){
		$uri = $this->getRequest()->getUri();
		$title = $this->getTitleFormated();
		$new = '
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>'.$title.' </title>
		<meta name="robots" content="index,follow"/>
      	<link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
		<link rel="canonical" href='.$uri.'>
		<meta name="description" content="'.$this->description.'">
		<meta name="author" content="">
		<meta property="og:locale" content="vi_VN"/>
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="'.$title.'"/>
		<meta property="og:description" content="'.$this->description.'"/>
		<meta property="fb:app_id" content="825897607458922" />
		<meta property="og:url" content="'.$uri.'"/>
		<meta property="og:site_name" content="Gheptour.vn"/>
		<meta property="og:image" content="'.$this->thumb.'"/>';
		return $new;
	}

function getHost(){
list($host) = explode(':', $this->getRequest()->getHost());
return $host;
}
function getLink(){
$r = $this->getRequest();
$uri = $r->getUri();
$host = $this->getHost();
$rss = $this->rss?'
<link rel="alternate" type="application/rss+xml" title="'.$host.' - RSS Trang chủ" href="'.$this->rss.'" />
':'';
$gplus = $this->googlePlus?'
<link href="'.$this->googlePlus.'" rel="publisher" />
':'';
return $gplus.'
<link rel="shortcut icon" href="http://'.$host.'/favicon.png" type="image/x-icon" />
'.$rss;
}

}