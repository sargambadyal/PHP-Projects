<html >
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
		<h1> Admin Login</h1>
			
					<form name="form" action="admin_login.php?hello=1" onsubmit="return validation()" method="post">
						<table>
						
						<tr>
							<td > Username:</td>
							<td><input type="text" name="username"></td>
						</tr>
						
						<tr>
							<td> Password:</td>
							<td><input type="password" name="password"></td>
						</tr>
				
						<tr>
							<td><input type="submit" name="submit" value="login"/></td>
						</tr>
	
						<tr>
						<td> <a href="forgot.php">Forgot Password?</a>
						</tr>
					</table>
					</form>
			
		
								<?php
						ERROR_REPORTING(E_PARSE);
						$value=$_GET["hello"];
						if($value==1)
							{
								$username=$_POST["username"];
								$password=$_POST["password"];
								
								mysql_connect("localhost","root","");
								mysql_select_db("efarming");
								
								//echo "lol";
								$result=mysql_query("select * from admin where username='$username' and password='$password' ");

								$row=mysql_fetch_array($result);
								//print_r($row);
								if($row['username']!=NUll || $row['username']!=' ')
									{
									?>
									<p class="obj1">You are login.</p>
									<?php
									session_start();
									$_SESSION['access']=true;
									//echo $row['id'];
									?>
									<a class="obj1"href="admin_homepage.php?v=<?php echo $row['username']?>"> Go to home page</a>
									<?php
									
									}
								else
									{
									?>
									<p class="obj1">You are not allowed </p>
									<?php
									}
							}
						?>
						
			</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
