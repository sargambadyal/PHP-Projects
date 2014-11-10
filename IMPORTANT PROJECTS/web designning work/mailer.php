
---------GMAIL EMAIL-----

---phpmailer
<?php
require('phpmailer/class.phpmailer.php');

function sendemail($email,$message,$subject){
	$mail=new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "uremailid"; // SMTP username
	$mail->Password = "urpassword"; // SMTP password
	$webmaster_email = "bhookbhagao@gmail.com"; //Reply to this email ID
	$mail->From = $webmaster_email;
	$mail->FromName = "Bhook Bhagao Team";
	$mail->AddAddress($email,"User"); // name,email,user
	$mail->AddReplyTo($webmaster_email,"Bhook Bhagao");
	$mail->WordWrap = 50; // set word wrap
	//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
	//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
	$mail->IsHTML(true); // send as HTML
	$mail->Subject = $subject; //Subject
	$mail->Body = $message; //HTML Body
	$mail->AltBody = $message; //Text Body
	if(!$mail->Send())
	{
	return false;
	}
	else
	{
	return true;
	}

}
if(sendemail("smarthbehl@gmail.com","<b>TESTING<b>","TESTING1")):
	echo "Chale Gayi";
endif;
?>
