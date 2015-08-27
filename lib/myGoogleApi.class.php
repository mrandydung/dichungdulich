<?php 
	
	class myGoogleApi
	{
		static $fixFrom = '21.026175, 105.849996'; // quang trung
		static $fixTo = '21.2177657,105.80261199999995'; //noi bai
		static $gUrl = 'http://maps.googleapis.com/maps/api';
		
		static function getAddressFromLatLng($lat, $lng)
		{
			$rs = (json_decode(file_get_contents(self::$gUrl.'/geocode/json?latlng='.$lat.','.$lng.'&sensor=false')));
			if($rs->status == 'OK')
			{
				return $rs->results->formatted_address; 
				
			}
			return null;
			
		}

	   	static function get_start_end_by_address($start,$end){
	      $start_arr = 0;
	      $end_arr = 0;
	      if($start){
	        $start_arr = myGoogleApi::getLatLngFromAddress($start);
	      }
	      $coo_start = 0;
	      $coo_end = 0;
	      if($start_arr){
	        $coo_start = $start_arr['coo'];
	      }
	      if($end){
	        $coo_end_tmp = HomeDiemDenItemPeer::return_coo_end($end);
	        if($coo_end_tmp){
	          $coo_end = $coo_end_tmp->getGooglePosition();
	        }else{
	          $coo_end_map = myGoogleApi::getLatLngFromAddress($end);
	          $coo_end = $coo_end_map['coo'];
	        }
	      }
	      return array('coo_start'=>$coo_start,'coo_end'=>$coo_end);
	   }
		
		static function getLatLngFromAddress($address)
		{
			$address = urlencode($address);
			$ct = file_get_contents(self::$gUrl.'/geocode/json?address='.$address.'&sensor=false');
			$rs = json_decode($ct);
		 
			if($rs->status == 'OK')
			{
				$r = $rs->results[0]->geometry->location; 
				return array('lat' => $r->lat, 'lng' => $r->lng,'coo'=> $r->lat.','.$r->lng);
			}
			return array();
		}

		static function get_city_by_address($address) {
		$address = str_replace(" ", "+", "$address");
		$url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false";
		$result = file_get_contents("$url");
		$json = json_decode($result);
		foreach ($json->results as $result) {
		foreach($result->address_components as $addressPart) {
		  if((in_array('locality', $addressPart->types)) && (in_array('political', $addressPart->types)))
		  $city = $addressPart->long_name;
	    	else if((in_array('administrative_area_level_1', $addressPart->types)) && (in_array('political', $addressPart->types)))
		  $state = $addressPart->long_name;
	    	else if((in_array('country', $addressPart->types)) && (in_array('political', $addressPart->types)))
		  $country = $addressPart->long_name;
		}
	}
	
	if(($city != '') && ($state != '') && ($country != ''))
		$address = $city.', '.$state.', '.$country;
	else if(($city != '') && ($state != ''))
		$address = $city.', '.$state;
	else if(($state != '') && ($country != ''))
		$address = $state.', '.$country;
	else if($country != '')
		$address = $country;
		
	// return $address;
	return "$state";
}
		
		//from, to co the la toa do, cung co the la ten
		static function calcRange($from, $to, $returnAll = false)
		{ 
			$endpoint = self::$gUrl.'/directions/json?';
			$params   = array(
				'origin'      => $from,
				'destination' => $to,
				'mode'        => 'driver',
				'sensor'      => 'false',
			);
			
			 
			//$proxy = '221.176.14.72:80';
			//$proxyauth = 'user:password';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $endpoint.http_build_query($params));
			//curl_setopt($ch, CURLOPT_PROXY, $proxy);
			//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			 
			//curl_setopt($ch, CURLOPT_HEADER, 1);
			$curl_scraped_page = curl_exec($ch);
			curl_close($ch);

			//echo $curl_scraped_page;

			// Fetch and decode JSON string into a PHP object
			$json = $curl_scraped_page;//file_get_contents($endpoint.http_build_query($params));
			$data = json_decode($json);
			 
			// If we got directions, output all of the HTML instructions
			if ($data->status === 'OK') {
			
				$leg = $data->routes[0]->legs[0];
				$length = $leg->distance->value;
				
				if(!$returnAll)
					return $length;
				else
				{
					return array(	'length' => $length,
												'start_lat' => $leg->start_location->lat,
												'start_lng' => $leg->start_location->lng,
												'start_address' => $leg->start_address,
												
												'end_lat' => $leg->end_location->lat,
												'end_lng' => $leg->end_location->lng,
												'end_address' => $leg->end_address );
				}
				
			}
			else{
				//print_r($data);
				//echo '<br/>'.$from.' -  '.$to;
			}
			return 0;
		} 
        
        public static function geoLocation($address) {
       
        $datas = json_decode (
            file_get_contents(
              'http://maps.google.com/maps/api/geocode/json?sensor=false&address='.urlencode($address)), true);
         $ret = array();
         
         if($datas && $datas['status'] == 'OK') {
            
           foreach($datas['results'] as $row) {
             //$addr = myUtil::removeMark($row['formatted_address']);
             //$likeStr = myUtil::removeMark($str);
             /*$check = false;
              
             if($likeStr) {
               $check = strpos($addr, $likeStr) !== false;
             }
             else {
               $check = strpos($addr, $likeStr) === false;
             }

             if($check) {*/
               $ret [] = array('address' => $row['formatted_address'], 'location' => $row['geometry']['location']);
             //}
           } 
         }
         return $ret;
      }

	}
	
