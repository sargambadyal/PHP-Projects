<?php

require('phpmailer/class.phpmailer.php');

$id=$_GET["id"];
function sendemail($email,$message,$subject)
{
	$mail=new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "vitsoundingrocket@gmail.com"; // SMTP username
	$mail->Password = "mathewsir"; // SMTP password
	$webmaster_email = "sera.bravo004@gmail.com"; //Reply to this email ID
	$mail->From = $webmaster_email;
	$mail->FromName = "sargam";
	$mail->AddAddress($email,"User"); // name,email,user
	$mail->AddReplyTo($webmaster_email,"sargam");
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
$check=str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890");
$code= mktime().$check;

mysql_connect("localhost","root","");
	mysql_select_db("signup");
	
    $result=mysql_query("update into users set code=$code where email=$id");
$message="<b> You have been successfully registered with VIT sounding rocket.You can join us on our facebook page for latest updates. No seperate mail will be sent in case of any changes in the schedule,thus click on <a href='http://www.facebook.com/VitSoundingRocket'>our facebook page</a> </br> we wish you all the luck for the exams.<b>";
if(sendemail("$id","$message",'VIT Sounding rocket')):
	echo "Mail Have been successfully sent to you. Please read rules and regulations.";
endif;

?>