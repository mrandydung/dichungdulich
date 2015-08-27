<?php
	
	class SmsService {
	
		
		public static function sendMt($serviceNumber, $phoneNumber, $cmd, $Message, $moId) {
		
			require_once(sfConfig::get('sf_root_dir').'/8x77/nusoap.php');
			
			$client = new nusoap_client('http://sms.8x77.vn:8077/mt-services/MTService?WSDL', true);
	 
			$client->setCredentials('dichung', 'dichung@231');
	 
			$err = $client->getError();
	 
			$result = 0;
			$ret = false;
			if (!$err) {
					$User_ID = $phoneNumber;
					 
					$Service_ID = $serviceNumber;
					$Command_Code = $cmd;
					$Request_ID = $moId; 
					$params = array('string' => $User_ID,
													'string0' => base64_encode($Message),
													'string1' => $Service_ID,
													'string2' => $Command_Code,
													'string3' => 0,
													'string4' => $Request_ID,
													'string5' => 1,
													'string6' => 1,
													'string7' => 0,
													'string8' => 0);
					 
					$result = $client->call('sendMT', 
																	$params);
					
					
					if (!$client->fault) {
				
						$err = $client->getError();
						if (!$err) {
								error_log($User_ID." _ ".$result."\n", 3, "sms_log.txt");
								if($result==0) {
									$ret = true;
									 
								} 
								
								//var_dump($result);
						}
						else{
							var_dump($err);
						}			
					} 
					else{
						//print_r($client->fault);
					}
					
			}
			else{
				//print_r($err);
			}  
			return $ret;
		}
		
		public static function saveMtLog($ret, $Message, $phone, $smsMoLog = null) {
			
			if($smsMoLog && !$smsMoLog->getSendMessage()) {
				$smsMoLog->setSendMessage($ret);
				$smsMoLog->save();
			}
			
			$mt = new SmsMtLog;
			$mt->setMoId($smsMoLog?$smsMoLog->getId():'0');
			$mt->setPhoneNumber($phone);
			$mt->setMessage($Message);
			$mt->setSuccess($ret);
			$mt->save(Propel::getConnection('dichung'));
			
		}
	}