<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(back1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">

			<div id="wrapper">
				<div id="head">
				<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="contact.php">Contact Us</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="user_final.php">Login</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="admin_page.php">Admins</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="user_signup.php">Sign up</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="home.php">Home</a></center></h4>
				</div>
				</br>
				</div>
				<div>
				<?php

require('phpmailer/class.phpmailer.php');

$id=$_GET["id"];
echo $id;
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

$check=str_shuffle("0123456789");
echo $check;
mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	
    $result=mysql_query("update users set password='$check' where email='$id' ");
$message="<b>Your password: $check <b>";
if(sendemail("$id","$message",'password')):
	echo "MAIL SENT";
endif;

?>
				</div>
				<p class="obj2">
				MAIL SENT TO YOUR EMAIL! 
				</p>
			</div>
				<h1 class="cite"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
				</h1></center>

	</body>
</html>
