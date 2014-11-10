<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YANTRIK KRISHI</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">Yantrik Krishi</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="tutorial.php">Tutorials</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<h1> Email </h1>
		<?php
ERROR_REPORTING(E_PARSE);
require('phpmailer/class.phpmailer.php');

$id=$_GET["id"];
echo $id;
$r=$_GET["r"];
function sendemail($email,$message,$subject)
{
	$mail=new PHPMailer();
	$mail->IsSMTP(); // send via SMTP
	$mail->SMTPAuth = true; // turn on SMTP authentication
	$mail->Username = "rkp.rhino@gmail.com"; // SMTP username
	$mail->Password = "1girlguy"; // SMTP password
	$webmaster_email = "rkp.rhino@gmail.com"; //Reply to this email ID
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

$message="<b>we will see you soon. Your request id is $r <b>";
if(sendemail("$id","$message",'test')):
	echo "MAIL SENT";
endif;

?>
		
				<p class="obj2">
				MAIL SENT TO YOUR EMAIL
				</p>

			</div>
	</div>
	<div id="footer">
		<p>Copyright (c) </p>
	</div>
</div>
</body>
</html>

