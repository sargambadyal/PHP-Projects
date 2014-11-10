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
ERROR_REPORTING(E_PARSE);
$verify=$_GET["verify"];
mysql_connect("localhost","root","");
mysql_select_db("travel agency");
$email_verify=mysql_query("update users set email_verification='y' where code='$verify'");	
?>
				<p class="obj2">
Congratulations your request has been send to admin for approval! You can start using our site shortly!

				</div>
			</div>
				<h1 class="cite"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
				</h1></center>

	</body>
</html>
