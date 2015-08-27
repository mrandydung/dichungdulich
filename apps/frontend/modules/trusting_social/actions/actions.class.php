<?php
class trusting_socialActions extends sfActions
{

 	public function executeTrusting_social($request){
	    $request = $this->getRequest();
	    $oauth = new socialmedia_oauth_connect();
	    // Register you TrustingSocial App at https://trustingsocial.com/developer
	    $oauth->provider="TrustingSocial";
	    $oauth->client_id = "65f13205a740da77f51c3c69758ee34c4cd576b3b66bddcf0c6414445d76b203";
	    $oauth->client_secret = "710185377463d3daa421b7faa69f406636632ba59085a27834722df3eca5a18d";
	    
	    // Register your TrustingSocial App with redirect_uri which point to this file.
	    $oauth->redirect_uri  = "http://gheptour.vn/trusting_social/trusting_social";
	    
	    $oauth->Initialize();
	    
	    $code = ($_REQUEST["code"]) ?  ($_REQUEST["code"]) : "";
	    $error = $_REQUEST['error'];
	    
	    if (isset($error)) {
	        echo $error;
	    } else if(empty($code)) {
	      $oauth->Authorize();
	    } else {
	      $oauth->code = $code;
	      $getData = json_decode($oauth->getUserProfile());
	    
	      $response = $getData->response;
	      $user_data = $response->user_data;
	      $profile_image = $user_data->profile_image;
	      $name = $user_data->first_name . " " . $user_data->last_name;
	    
	      $score_data = $response->score_data->score;
	      $overall_score = $score_data->overall_score;
	      $authenticity_score = $score_data->authenticity;
	      $network_credibility_score = $score_data->network_quality;
	      $financial_credibility_score = $score_data->financial_credibility;
	    
	      $oauth->debugJson($getData);
	     }
	     if($request->hasParameter('code')){
	        $score_data = $response->score_data->score;
	      $overall_score = $score_data->overall_score;
	      $authenticity_score = $score_data->authenticity;
	      $network_credibility_score = $score_data->network_quality;
	      $financial_credibility_score = $score_data->financial_credibility;
	        $u = $this->getUser();
	        $user_id = $u->getId();
	         
	        $user = DichungUserPeer::retrieveByPK($user_id,Propel::getConnection('dichung_new'));
	        $user->setOverallScore($overall_score);
	        $user->setAuthenticity($authenticity_score);
	        $user->setNetworkQuality($network_credibility_score);
	        $user->setFinancialCredibility($financial_credibility_score);
	        $user->save();
	        $this->redirect('@user_profile');
	     } 
	     if($request->getParameter('error') == 'access_denied')
	     {
	        $this->redirect('@user_profile');
	     }
	}
		
}
