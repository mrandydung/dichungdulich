<?php 
	
	require sfConfig::get('sf_root_dir')."/PHPMailer-master/class.phpmailer.php";

	class MailUtil {
	
		static function send($to, $fromEmail, $fromName, $subject, $body){
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 1;
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->CharSet = 'utf-8'; 
			$mail->Host = '123.30.187.189';  // Specify main and backup server
			$mail->Port = 587;
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'hungn@dichung.vn';                            // SMTP username
			$mail->Password = 'hungn';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

			$mail->From = $fromEmail;
			$mail->FromName = $fromName;
			//$mail->addAddress('hungn85@gmail.com', 'hungn 85');  // Add a recipient
			$mail->addAddress($to);               // Name is optional
			//$mail->addReplyTo('admin@dichung.vn', 'Reply Email');
			//$mail->addCC('minhdn@dichung.vn');
			//$mail->addBCC('thangvd@dichung.vn');

			//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
			//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
			//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body    = $body;
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$mail->send()) {
				 return false;
			}
			return true;
		}
	} 