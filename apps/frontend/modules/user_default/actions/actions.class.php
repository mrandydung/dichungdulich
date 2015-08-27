<?php
class user_defaultActions extends sfActions
{
	public function executeIndex($request)
	{
		$user_id = $request->getParameter('user_id');
		if(!$user_id){
			$this->redirect('@homepage');
		}
		$this->user = DichungUserPeer::retrieveByPk($user_id,Propel::getConnection('dichung_new'));
		$u = $this->getUser();
		$this->user_id_login = 0;
		$this->user_id_login = $u->getId();
	  	$seo = $u->getSeo();
	    $seo->setTitle('Thành viên gheptour.vn - '.$this->user->getFullname());
	    $seo->setDescription('Thành viên '.$this->user->getFullname().' gia nhập ghép tour ngày '.$this->user->getCreatedAt().','.$this->user->getJobName().', tuổi '.$this->user->getOldRangeName().' , '.$this->user->getLocation().', '.$this->user->getAbout());
	    $seo->setThumb('http://dichung.vn'.$this->user->getAvatar());
    	$this->tour_featured = TourDetailPeer::get_all_tour_by_featured($user_id);
	}

	public function executeSend_message($request){
		$rsAjax = $request->isXmlHttpRequest();
		if($rsAjax){
			$content_message_send = trim($request->getParameter('content_message_send'));
			$id_user_receiver = $request->getParameter('id_user_receiver');
			$u = $this->getUser();
			$user_id_send = $u->getId();
			if(!$content_message_send){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn chưa nhập nội dung tin nhắn')));
			}elseif(!$user_id_send){
				return $this->renderText(json_encode(array('code'=>1,'msg'=>'Bạn cần đăng nhập để gửi tin nhắn')));
			}else{
				$message = new Message();
				$message->setUserSend($user_id_send);
				$message->setUserReceiver($id_user_receiver);
				$message->setDescription($content_message_send);
				$message->save();
				return $this->renderText(json_encode(array('code'=>2,'msg'=>'Gửi tin nhắn thành công')));
			}
		}
	}
}
