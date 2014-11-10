<?php

require('phpmailer/class.phpmailer.php');

$id=$_GET["id"];
echo $id;
function sendemail($email,$message,$subject)
{
	$mail=new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "faltutesting.misc@gmail.com"; // SMTP username
	$mail->Password = "sargambadyal"; // SMTP password
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
	
    $result=mysql_query("update users set code='$code' where email='$id' ");
$message="<b>to start using our site goto  <a href='http://localhost/my_website/test/user_link.php?verify=$code'>get started</a><b>";
if(sendemail("$id","$message",'test')):
	echo "Chale Gayi";
endif;

?>