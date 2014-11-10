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
session_start();
ERROR_REPORTING(E_PARSE);
if($_SESSION['valid']==1)
{
	$value=$_GET["valid"]; 
	if($value==true)
	{
		
		$u=$_POST["username"];
		$p=$_POST["password"];
		
		
		mysql_connect("localhost","root","");
		mysql_select_db("travel agency");
		
		$result=mysql_query("insert into admin  values ('$u','$p')");
		?>
		<html>
		<p class="obj2">
		Congrats new administrator added
		</p>
		</html>
		<?php
		
	}
	?>
				</div>
				<center>
		<h2 class="obj1"> WELCOME TO OUR SIGN UP FOR ADMINISTRATOR<h1>
		<form action="new_admin.php?valid=true" method="post">
			<table>
				<tr>
					<td class="obj1"> USERNAME: </td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td class="obj1"> PASSWORD: </td>
					<td><input type="password" name="password" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form
		</center>
		
		
		</body>
	</html>
<?php
}
?>