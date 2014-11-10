<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YANTRIK KRISHI</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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
		<h1> WELCOME <?php error_reporting('E_PARSE'); echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="#">Add Admin</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="give_certify.php">Give certification</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="add_product.php">Add product </a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="display_feed.php"> Gather Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#dd3366;">
							<h4> Fill details of new administrator </h4> 
							</div>
							
						<?php
session_start();
ERROR_REPORTING(E_PARSE);
if($_SESSION['access']==true)
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
		<form action="admin_homepage.php?valid=true" method="post">
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
		</form>
		
		
		</body>
	</html>
<?php
}
?>
					
			
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c)</p>
	</div>
</div>
</body>
</html>
