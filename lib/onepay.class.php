<?php

	class onepay{
		
		public $vpc_Merchant = "DICHUNG";
		public $quocte_vpc_AccessCode = "0A28E990";
		public $quocteUrl = 'https://onepay.vn/vpcpay/vpcpay.op';
		
		public $QUOCTE_SECURE_SECRET = "F6C71BA48164492000CB2DE6448643F7";
		public $quocte_response_code = "";
		 
		function buildQuocteUrl($ticket, $phone, $amount, $backUrl){
				
				$params = array('Title' => 'VPC 3-Party',
												'virtualPaymentClientURL' => $this->quocteUrl,
												'vpc_Merchant' => $this->vpc_Merchant,
												'vpc_AccessCode' => $this->quocte_vpc_AccessCode,
												'vpc_MerchTxnRef' => time(), // refcode
												'vpc_OrderInfo' => 'THANH TOAN DON HANG '.$ticket,
												'vpc_Amount' => $amount,
												'vpc_ReturnURL' => $backUrl,
												'vpc_Version' => '2',
												'vpc_Command' => 'pay',
												'vpc_Locale' => 'en',
												'vpc_TicketNo' => $_SERVER['REMOTE_ADDR'],
												'vpc_SHIP_Street01' => '165 Thai Ha',
												'vpc_SHIP_Provice' => 'Dong Da',
												'vpc_SHIP_City' => 'Ha Noi',
												'vpc_SHIP_Country' => 'Viet Nam',
												'vpc_Customer_Phone' => '840904280949',
												'vpc_Customer_Email' => 'support@onepay.vn',
												'vpc_Customer_Id' => 'thanhvt',
												'AVS_Street01' => '165 Thai Ha',
												'AVS_City' => 'Hanoi',
												'AVS_StateProv' => 'Hoan Kiem',
												'AVS_PostCode' => '10000',
												'AVS_Country' => 'VN',
												'display' => '');
			 /* params
				Title:VPC 3-Party
				virtualPaymentClientURL:http://mtf.onepay.vn/vpcpay/vpcpay.op
				vpc_Merchant:TESTONEPAY
				vpc_AccessCode:6BEB2546
				vpc_MerchTxnRef:2013060513024819096
				vpc_OrderInfo:MUA VE TAXIAIRPORT
				vpc_Amount:1000000
				vpc_ReturnURL:http://localhost/domestic_php_v2/source_code/dr.php
				vpc_Version:2
				vpc_Command:pay
				vpc_Locale:vn
				vpc_TicketNo:127.0.0.1
				vpc_SHIP_Street01:39A Ngo Quyen
				vpc_SHIP_Provice:Hoan Kiem
				vpc_SHIP_City:Ha Noi
				vpc_SHIP_Country:Viet Nam
				vpc_Customer_Phone:840904280949
				vpc_Customer_Email:support@onepay.vn
				vpc_Customer_Id:thanhvt
				AVS_Street01:194 Tran Quang Khai
				AVS_City:Hanoi
				AVS_StateProv:Hoan Kiem
				AVS_PostCode:10000
				AVS_Country:VN
				display:
			
			*/
			
			$SECURE_SECRET = $this->QUOCTE_SECURE_SECRET;

			// add the start of the vpcURL querystring parameters
			$vpcURL = $params["virtualPaymentClientURL"] . "?";

			// Remove the Virtual Payment Client URL from the parameter hash as we 
			// do not want to send these fields to the Virtual Payment Client.
			unset($params["virtualPaymentClientURL"]); 

			// The URL link for the receipt to do another transaction.
			// Note: This is ONLY used for this example and is not required for 
			// production code. You would hard code your own URL into your application.

			// Get and URL Encode the AgainLink. Add the AgainLink to the array
			// Shows how a user field (such as application SessionIDs) could be added
			$params['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
			//$_POST['AgainLink']=urlencode($_SERVER['HTTP_REFERER']);
			// Create the request to the Virtual Payment Client which is a URL encoded GET
			// request. Since we are looping through all the data we may as well sort it in
			// case we want to create a secure hash and add it to the VPC data if the
			// merchant secret has been provided.
			//$md5HashData = $SECURE_SECRET; Khởi tạo chuỗi dữ liệu mã hóa trống
			$md5HashData = "";

			ksort ($params);

			// set a parameter to show the first pair in the URL
			$appendAmp = 0;

			foreach($params as $key => $value) {

					// create the md5 input and URL leaving out any fields that have no value
					if (strlen($value) > 0) {
							
							// this ensures the first paramter of the URL is preceded by the '?' char
							if ($appendAmp == 0) {
									$vpcURL .= urlencode($key) . '=' . urlencode($value);
									$appendAmp = 1;
							} else {
									$vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
							}
							//$md5HashData .= $value; sử dụng cả tên và giá trị tham số để mã hóa
							if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
							$md5HashData .= $key . "=" . $value . "&";
					}
					}
			}
			//xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa
			$md5HashData = rtrim($md5HashData, "&");
			// Create the secure hash and append it to the Virtual Payment Client Data if
			// the merchant secret has been provided.
			if (strlen($SECURE_SECRET) > 0) {
					//$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($md5HashData));
					// Thay hàm mã hóa dữ liệu
					$vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)));
			}

			return $vpcURL;
		}
		
		public function getQuocteResponseString(){
			return $this->getQuocteResponseDescription($this->quocte_response_code);
		}
		
		public function getQuocteResponse($params){
			
			$SECURE_SECRET = $this->QUOCTE_SECURE_SECRET;
			
			// get and remove the vpc_TxnResponseCode code from the response fields as we
			// do not want to include this field in the hash calculation
			$vpc_Txn_Secure_Hash = $params["vpc_SecureHash"];
			$vpc_MerchTxnRef = $params["vpc_MerchTxnRef"];
			$vpc_AcqResponseCode = $params["vpc_AcqResponseCode"];
			unset($params["vpc_SecureHash"]);
			// set a flag to indicate if hash has been validated
			$errorExists = false;

			if (strlen($SECURE_SECRET) > 0 && $params["vpc_TxnResponseCode"] != "7" && $params["vpc_TxnResponseCode"] != "No Value Returned") {

					ksort($params);
					//$md5HashData = $SECURE_SECRET;
					//khởi tạo chuỗi mã hóa rỗng
					$md5HashData = "";
					// sort all the incoming vpc response fields and leave out any with no value
					foreach ($params as $key => $value) {
			//        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
			//            $md5HashData .= $value;
			//        }
			//      chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về
							if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
							$md5HashData .= $key . "=" . $value . "&";
					}
					}
			//  Xóa dấu & thừa cuối chuỗi dữ liệu
					$md5HashData = rtrim($md5HashData, "&");

			//    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $md5HashData ) )) {
			//    Thay hàm tạo chuỗi mã hóa
				if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $md5HashData, pack('H*',$SECURE_SECRET)))) {
							// Secure Hash validation succeeded, add a data field to be displayed
							// later.
							$hashValidated = "CORRECT";
					} else {
							// Secure Hash validation failed, add a data field to be displayed
							// later.
							$hashValidated = "INVALID HASH";
					}
			} else {
					// Secure Hash was not validated, add a data field to be displayed later.
					$hashValidated = "INVALID HASH";
			}

			// Define Variables
			// ----------------
			// Extract the available receipt fields from the VPC Response
			// If not present then let the value be equal to 'No Value Returned'

			// Standard Receipt Data
			$amount = $this->null2unknown($params["vpc_Amount"]);
			$locale = $this->null2unknown($params["vpc_Locale"]);
			$batchNo = $this->null2unknown($params["vpc_BatchNo"]);
			$command = $this->null2unknown($params["vpc_Command"]);
			$message = $this->null2unknown($params["vpc_Message"]);
			$version = $this->null2unknown($params["vpc_Version"]);
			$cardType = $this->null2unknown($params["vpc_Card"]);
			$orderInfo = $this->null2unknown($params["vpc_OrderInfo"]);
			$receiptNo = $this->null2unknown($params["vpc_ReceiptNo"]);
			$merchantID = $this->null2unknown($params["vpc_Merchant"]);
			//$authorizeID = $this->null2unknown($params["vpc_AuthorizeId"]);
			$merchTxnRef = $this->null2unknown($params["vpc_MerchTxnRef"]);
			$transactionNo = $this->null2unknown($params["vpc_TransactionNo"]);
			$acqResponseCode = $this->null2unknown($params["vpc_AcqResponseCode"]);
			$txnResponseCode = $this->null2unknown($params["vpc_TxnResponseCode"]);
			// 3-D Secure Data
			$verType = array_key_exists("vpc_VerType", $params) ? $params["vpc_VerType"] : "No Value Returned";
			$verStatus = array_key_exists("vpc_VerStatus", $params) ? $params["vpc_VerStatus"] : "No Value Returned";
			$token = array_key_exists("vpc_VerToken", $params) ? $params["vpc_VerToken"] : "No Value Returned";
			$verSecurLevel = array_key_exists("vpc_VerSecurityLevel", $params) ? $params["vpc_VerSecurityLevel"] : "No Value Returned";
			$enrolled = array_key_exists("vpc_3DSenrolled", $params) ? $params["vpc_3DSenrolled"] : "No Value Returned";
			$xid = array_key_exists("vpc_3DSXID", $params) ? $params["vpc_3DSXID"] : "No Value Returned";
			$acqECI = array_key_exists("vpc_3DSECI", $params) ? $params["vpc_3DSECI"] : "No Value Returned";
			$authStatus = array_key_exists("vpc_3DSstatus", $params) ? $params["vpc_3DSstatus"] : "No Value Returned";

			// *******************
			// END OF MAIN PROGRAM
			// *******************

			// FINISH TRANSACTION - Process the VPC Response Data
			// =====================================================
			// For the purposes of demonstration, we simply display the Result fields on a
			// web page.

			// Show 'Error' in title if an error condition
			$errorTxt = "";

			// Show this page as an error page if vpc_TxnResponseCode equals '7'
			if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
					$errorTxt = "Error ";
			}
			$this->quocte_response_code = $txnResponseCode;
			
			$transStatus = "";
			if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
				return "OK";
			}elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
				return "PENDING";
			}
			
			return "FAILED";
			
		}
		
		function getQuocteResponseDescription($responseCode)
		{

				switch ($responseCode) {
						case "0" :
								$result = "Transaction Successful";
								break;
						case "?" :
								$result = "Transaction status is unknown";
								break;
						case "1" :
								$result = "Bank system reject";
								break;
						case "2" :
								$result = "Bank Declined Transaction";
								break;
						case "3" :
								$result = "No Reply from Bank";
								break;
						case "4" :
								$result = "Expired Card";
								break;
						case "5" :
								$result = "Insufficient funds";
								break;
						case "6" :
								$result = "Error Communicating with Bank";
								break;
						case "7" :
								$result = "Payment Server System Error";
								break;
						case "8" :
								$result = "Transaction Type Not Supported";
								break;
						case "9" :
								$result = "Bank declined transaction (Do not contact Bank)";
								break;
						case "A" :
								$result = "Transaction Aborted";
								break;
						case "C" :
								$result = "Transaction Cancelled";
								break;
						case "D" :
								$result = "Deferred transaction has been received and is awaiting processing";
								break;
						case "F" :
								$result = "3D Secure Authentication failed";
								break;
						case "I" :
								$result = "Card Security Code verification failed";
								break;
						case "L" :
								$result = "Shopping Transaction Locked (Please try the transaction again later)";
								break;
						case "N" :
								$result = "Cardholder is not enrolled in Authentication scheme";
								break;
						case "P" :
								$result = "Transaction has been received by the Payment Adaptor and is being processed";
								break;
						case "R" :
								$result = "Transaction was not processed - Reached limit of retry attempts allowed";
								break;
						case "S" :
								$result = "Duplicate SessionID (OrderInfo)";
								break;
						case "T" :
								$result = "Address Verification Failed";
								break;
						case "U" :
								$result = "Card Security Code Failed";
								break;
						case "V" :
								$result = "Address Verification and Card Security Code Failed";
								break;
				case "99" :
								$result = "User Cancel";
								break;
						default  :
								$result = "Unable to be determined";
				}
				return $result;
		}
		
		//-------------------------------------------------------------------------NOI DIA -----------------------------------------------//
		public $NOIDIA_SECURE_SECRET = "FB25FFE0AC2AABE63D57129B0F99781C";
		public $noidia_response_code = "";
		public $noidia_vpc_AccessCode = "06GUK3T0";
		public $noidiaUrl = 'https://onepay.vn/onecomm-pay/vpc.op';
		
		function buildNoidiaUrl($ticket, $phone, $amount, $backUrl, $username = '', $email = ''){
			
			$params = array('Title' => 'VPC 3-Party', 
											'virtualPaymentClientURL' => $this->noidiaUrl, 
											'vpc_Merchant' => $this->vpc_Merchant, 
											'vpc_AccessCode' => $this->noidia_vpc_AccessCode, 
											'vpc_MerchTxnRef' => time(), 
											'vpc_OrderInfo' => 'THANH TOAN DON HANG '.$ticket, 
											'vpc_Amount' => $amount, 
											'vpc_ReturnURL' => $backUrl, 
											'vpc_Version' => '2', 
											'vpc_Command' => 'pay', 
											'vpc_Locale' => 'vn', 
											'vpc_Currency' => 'VND', 
											'vpc_TicketNo' => $_SERVER['REMOTE_ADDR'], 
											'vpc_SHIP_Street01' => '165 Thai Ha', 
											'vpc_SHIP_Provice' => 'Hoan Kiem', 
											'vpc_SHIP_City' => 'Ha Noi', 
											'vpc_SHIP_Country' => 'Viet Nam', 
											'vpc_Customer_Phone' => $phone, 
											'vpc_Customer_Email' => $email, 
											'vpc_Customer_Id' => $username);
			
			/* params 
				 
				 Title:VPC 3-Party
				virtualPaymentClientURL:http://mtf.onepay.vn/onecomm-pay/vpc.op
				vpc_Merchant:ONEPAY
				vpc_AccessCode:D67342C2
				vpc_MerchTxnRef:201306051258477291
				vpc_OrderInfo:MUA VE TAXIAIRPORT
				vpc_Amount:100
				vpc_ReturnURL:http://localhost/domestic_php_v2/source_code/dr.php
				vpc_Version:2
				vpc_Command:pay
				vpc_Locale:vn
				vpc_Currency:VND
				vpc_TicketNo:127.0.0.1
				vpc_SHIP_Street01:39A Ngo Quyen
				vpc_SHIP_Provice:Hoan Kiem
				vpc_SHIP_City:Ha Noi
				vpc_SHIP_Country:Viet Nam
				vpc_Customer_Phone:840904280949
				vpc_Customer_Email:support@onepay.vn
				vpc_Customer_Id:thanhvt

			*/
			$SECURE_SECRET = $this->NOIDIA_SECURE_SECRET;

			// add the start of the vpcURL querystring parameters
			// *****************************Lấy giá trị url cổng thanh toán*****************************
			$vpcURL = $params["virtualPaymentClientURL"] . "?";

			// Remove the Virtual Payment Client URL from the parameter hash as we 
			// do not want to send these fields to the Virtual Payment Client.
			// bỏ giá trị url và nút submit ra khỏi mảng dữ liệu
			unset($params["virtualPaymentClientURL"]); 
			unset($params["SubButL"]);

			//$stringHashData = $SECURE_SECRET; *****************************Khởi tạo chuỗi dữ liệu mã hóa trống*****************************
			$stringHashData = "";
			// sắp xếp dữ liệu theo thứ tự a-z trước khi nối lại
			// arrange array data a-z before make a hash
			ksort ($params);

			// set a parameter to show the first pair in the URL
			// đặt tham số đếm = 0
			$appendAmp = 0;

			foreach($params as $key => $value) {

					// create the md5 input and URL leaving out any fields that have no value
					// tạo chuỗi đầu dữ liệu những tham số có dữ liệu
					if (strlen($value) > 0) {
							// this ensures the first paramter of the URL is preceded by the '?' char
							if ($appendAmp == 0) {
									$vpcURL .= urlencode($key) . '=' . urlencode($value);
									$appendAmp = 1;
							} else {
									$vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
							}
							//$stringHashData .= $value; *****************************sử dụng cả tên và giá trị tham số để mã hóa*****************************
							if ((strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
							$stringHashData .= $key . "=" . $value . "&";
					}
					}
			}
			//*****************************xóa ký tự & ở thừa ở cuối chuỗi dữ liệu mã hóa*****************************
			$stringHashData = rtrim($stringHashData, "&");
			// Create the secure hash and append it to the Virtual Payment Client Data if
			// the merchant secret has been provided.
			// thêm giá trị chuỗi mã hóa dữ liệu được tạo ra ở trên vào cuối url
			if (strlen($SECURE_SECRET) > 0) {
					//$vpcURL .= "&vpc_SecureHash=" . strtoupper(md5($stringHashData));
					// *****************************Thay hàm mã hóa dữ liệu*****************************
					$vpcURL .= "&vpc_SecureHash=" . strtoupper(hash_hmac('SHA256', $stringHashData, pack('H*',$SECURE_SECRET)));
			}

			// FINISH TRANSACTION - Redirect the customers using the Digital Order
			// ===================================================================
			// chuyển trình duyệt sang cổng thanh toán theo URL được tạo ra
			return $vpcURL;
		}
		
		public function getNoidiaResponse($params){
			
			$vpc_Txn_Secure_Hash = $params ["vpc_SecureHash"];
			unset ( $params ["vpc_SecureHash"] );

			// set a flag to indicate if hash has been validated
			$errorExists = false;
			$SECURE_SECRET = $this->NOIDIA_SECURE_SECRET;
			if (strlen ( $SECURE_SECRET ) > 0 && $params ["vpc_TxnResponseCode"] != "7" && $params ["vpc_TxnResponseCode"] != "No Value Returned") {
				
					//$stringHashData = $SECURE_SECRET;
					//*****************************khởi tạo chuỗi mã hóa rỗng*****************************
					$stringHashData = "";
				
				// sort all the incoming vpc response fields and leave out any with no value
				foreach ( $params as $key => $value ) {
			//        if ($key != "vpc_SecureHash" or strlen($value) > 0) {
			//            $stringHashData .= $value;
			//        }
			//      *****************************chỉ lấy các tham số bắt đầu bằng "vpc_" hoặc "user_" và khác trống và không phải chuỗi hash code trả về*****************************
							if ($key != "vpc_SecureHash" && (strlen($value) > 0) && ((substr($key, 0,4)=="vpc_") || (substr($key,0,5) =="user_"))) {
							$stringHashData .= $key . "=" . $value . "&";
					}
				}
			//  *****************************Xóa dấu & thừa cuối chuỗi dữ liệu*****************************
					$stringHashData = rtrim($stringHashData, "&");	
				
				
			//    if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper ( md5 ( $stringHashData ) )) {
			//    *****************************Thay hàm tạo chuỗi mã hóa*****************************
				if (strtoupper ( $vpc_Txn_Secure_Hash ) == strtoupper(hash_hmac('SHA256', $stringHashData, pack('H*',$SECURE_SECRET)))) {
					// Secure Hash validation succeeded, add a data field to be displayed
					// later.
					$hashValidated = "CORRECT";
				} else {
					// Secure Hash validation failed, add a data field to be displayed
					// later.
					$hashValidated = "INVALID HASH";
				}
			} else {
				// Secure Hash was not validated, add a data field to be displayed later.
				$hashValidated = "INVALID HASH";
			}

			// Define Variables
			// ----------------
			// Extract the available receipt fields from the VPC Response
			// If not present then let the value be equal to 'No Value Returned'
			// Standard Receipt Data
			$amount = $this->null2unknown ( $params ["vpc_Amount"] );
			$locale = $this->null2unknown ( $params ["vpc_Locale"] );
			//$batchNo = $this->null2unknown ( $params ["vpc_BatchNo"] );
			$command = $this->null2unknown ( $params ["vpc_Command"] );
			//$message = $this->null2unknown ( $params ["vpc_Message"] );
			$version = $this->null2unknown ( $params ["vpc_Version"] );
			//$cardType = $this->null2unknown ( $params ["vpc_Card"] );
			$orderInfo = $this->null2unknown ( $params ["vpc_OrderInfo"] );
			//$receiptNo = $this->null2unknown ( $params ["vpc_ReceiptNo"] );H
			$merchantID = $this->null2unknown ( $params ["vpc_Merchant"] );
			//$authorizeID = $this->null2unknown ( $params ["vpc_AuthorizeId"] );
			$merchTxnRef = $this->null2unknown ( $params ["vpc_MerchTxnRef"] );
			$transactionNo = $this->null2unknown ( $params ["vpc_TransactionNo"] );
			//$acqResponseCode = $this->null2unknown ( $params ["vpc_AcqResponseCode"] );
			$txnResponseCode = $this->null2unknown ( $params ["vpc_TxnResponseCode"] );
			
			$this->noidia_response_code = $txnResponseCode;
			
			$transStatus = "";
			
			if($hashValidated=="CORRECT" && $txnResponseCode=="0"){
				return "OK";
			}elseif ($hashValidated=="INVALID HASH" && $txnResponseCode=="0"){
				return "PENDING";
			}else {
				return "FAILED";
			}
		}
		public function getNoidiaResponseString(){
			return $this->getNoidiaResponseDescription($this->noidia_response_code);
		}
		
		function getNoidiaResponseDescription($responseCode) {
	
			switch ($responseCode) {
				case "0" :
					$result = "Giao dịch thành công - Approved";
					break;
				case "1" :
					$result = "Ngân hàng từ chối giao dịch - Bank Declined";
					break;
				case "3" :
					$result = "Mã đơn vị không tồn tại - Merchant not exist";
					break;
				case "4" :
					$result = "Không đúng access code - Invalid access code";
					break;
				case "5" :
					$result = "Số tiền không hợp lệ - Invalid amount";
					break;
				case "6" :
					$result = "Mã tiền tệ không tồn tại - Invalid currency code";
					break;
				case "7" :
					$result = "Lỗi không xác định - Unspecified Failure ";
					break;
				case "8" :
					$result = "Số thẻ không đúng - Invalid card Number";
					break;
				case "9" :
					$result = "Tên chủ thẻ không đúng - Invalid card name";
					break;
				case "10" :
					$result = "Thẻ hết hạn/Thẻ bị khóa - Expired Card";
					break;
				case "11" :
					$result = "Thẻ chưa đăng ký sử dụng dịch vụ - Card Not Registed Service(internet banking)";
					break;
				case "12" :
					$result = "Ngày phát hành/Hết hạn không đúng - Invalid card date";
					break;
				case "13" :
					$result = "Vượt quá hạn mức thanh toán - Exist Amount";
					break;
				case "21" :
					$result = "Số tiền không đủ để thanh toán - Insufficient fund";
					break;
				case "99" :
					$result = "Người sủ dụng hủy giao dịch - User cancel";
					break;
				default :
					$result = "Giao dịch thất bại - Failured";
			}
			return $result;
		}
		
		

		// If input is null, returns string "No Value Returned", else returns input
		function null2unknown($data)
		{
				if ($data == "") {
						return "No Value Returned";
				} else {
						return $data;
				}
		}
	}