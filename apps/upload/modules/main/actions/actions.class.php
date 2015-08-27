<?php

/**
 * main actions.
 *
 * @package    sf_sandbox
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class mainActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex($request)
  {

    $msg = 'error';
	
    if($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$awardId = $this->getRequestParameter('project_id');
			$user = $this->getUser();
			$uploaddir = sfConfig::get('sf_upload_dir').'/item_img_transactionService/'; 
			$fName = $awardId.'_'.time().'_'.basename($_FILES['file']['name']);
			$file = $uploaddir . $fName; 
			 
			if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) { 
				
			 $ai = new ItemImageProject;
        $ai->setProjectId($awardId);
        $ai->setImg('/uploads/item_img_transactionService/'.$fName);
        $ai->save();
        $path = sfConfig::get('sf_web_dir').$ai->getImg();
        if(is_file($path)) {
          myUtil::image_resize($path, $path, 600, 332, $crop=1);
        }
				$msg = "success"; 
			} 
		}
		return $this->renderText($msg);
		
  }
  public function executeUploadTransactionService($request)
  {
    $msg = 'error';
    if($this->getRequest()->getMethod() == sfRequest::POST)
		{
			$awardId = $this->getRequestParameter('transaction_service_id');
			$user = $this->getUser();
			$uploaddir = sfConfig::get('sf_upload_dir').'/item_img_transactionService/'; 
			$fName = $awardId.'_'.time().'_'.basename($_FILES['file']['name']);
			$file = $uploaddir . $fName; 
			 
			if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) { 
				
			 $ai = new ItemImage;
        $ai->setItemId($awardId);
        $ai->setImg('/uploads/item_img_transactionService/'.$fName);
        $ai->save();
        $path = sfConfig::get('sf_web_dir').$ai->getImg();
        if(is_file($path)) {
          myUtil::image_resize($path, $path, 600, 332, $crop=1);
        }
				$msg = "success"; 
			} 
		}
		return $this->renderText($msg);
  }
  
  public function executeResize_all_item() {
	foreach(ItemImagePeer::doSelect(new Criteria) as $item) {
	  $path = sfConfig::get('sf_web_dir').$item->getImg();
	  if(is_file($path)) {
		myUtil::image_resize($path, $path, 600, 332, $crop=1);
	  }
	}
	return sfView::NONE;
  }
}
