<html>
	<head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
		<script>
		function validateForm()
		{
		var x=document.forms["myForm"]["username"].value;
		if (x==null || x=="")
		  {
		  alert("Username must be filled out");
		  return false;
		  }
		}

		</script>
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
session_start();
$value=$_GET["value"];


if($value==true):
	{
	
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		mysql_connect("localhost","root","");
		mysql_select_db("travel agency");

			$confirm=mysql_query(" select * from admin where username='$username' and password='$password'");
			
			$row=mysql_fetch_array($confirm);
			if($row['username']==$username && $row["password"]==$password)
				{
				 $_SESSION['access']=1;

				 ?>
				 <a class="obj1" href="editor.php"> </br> Go to users</a>
				<p class="obj2"> You are login! </p>
				<?php

				}
			else 
			{
			?>
			<p class="obj2"> Username or password incorrect! </p>
				<?php
				}
	
	}
	
	endif;


?>
				</div>
		<center>
	    <h2 class="obj1"> ADMINISTRATORS SIGN IN <h2>
		<form action="admin_page.php?value=true" name="myForm" onsubmit="return validateForm()" method="post">
		<table>
		<tr>
		<td class="obj1"> USERNAME:</td>
		<td><input type="text" name="username"/></td>
		</tr>
		<tr>
		<td class="obj1">PASSWORD:</td>
		<td><input type="password" name="password"/></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit" value="submit"/></td>
		</tr>
		</table>
		</form>
		</center>
		</div>
	</body>
</html>