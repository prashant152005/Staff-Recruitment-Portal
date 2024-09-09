<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();										
	$mail->Host	 = 'smtp.gmail.com;';				
	$mail->SMTPAuth = true;							
	$mail->Username = 'lordshivendra798@gmail.com';				
	$mail->Password = 'wtpiawxqvbljbgoc';					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('lordshivendra798@gmail.com', 'Name');		
	$mail->addAddress('shivenbhai798@gmail.com');
	$mail->addAddress('shivenbhai798@gmail.com', 'Name');
	
	$mail->isHTML(true);								
	$mail->Subject = 'Subject';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (\FFI\Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>


//wtpiawxqvbljbgoc
//lordshivendra798@gmail.com
//<input type="file" name="Application letter" accept=".doc,.docx,.pdf"> -->