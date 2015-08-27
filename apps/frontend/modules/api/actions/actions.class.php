<?php
class apiActions extends sfActions
{
  public function executeIndex($request){
  }

  public function executeTo_address($request){
	$to_address = trim($request->getParameter('to_address'));
	$terms = preg_replace('/([^\pL\.\ ]+)/u', '', strip_tags($to_address));  
	$c = new Criteria();
	$c->add(HomeDiemDenItemPeer::KEYWORD, "%".$terms."%", Criteria::LIKE);
	$rs = HomeDiemDenItemPeer::doSelect($c);
	$arr = array();
	foreach ($rs as $key => $value) {
		$arr [] = $value->getName();
	}
	return $this->renderText(json_encode($arr));
  }

  
}
