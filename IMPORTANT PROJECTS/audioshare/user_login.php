<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AudioShare</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />

<script>
function validation()
{
var r=document.forms["myForm"]["username"].value;
if (r==null || r=="")
  {
  alert("Username/email must be filled out");
  return false;
  }

var s=document.forms["myForm"]["password"].value;
if (s==null || s=="")
  {
  alert("Password must be filled out");
  return false;
  }
  
}

</script>

</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">AudioShare</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<h1> User Login</h1>
			
					<form name="myForm" action="user_login.php?hello=1" onsubmit="return validation()" method="post">
						<table>
						
						<tr>
							<td > Email:</td>
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
						<td> <a href="farmer_signup.php"> Signup</a>
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
								mysql_select_db("audioshare");
								
								//echo "lol";
								$result=mysql_query("select * from user where email='$username' and password='$password' ");

								$row=mysql_fetch_array($result);
								//print_r($row);
								
								if($row[0] == NUll || $row[0] ==' ')
									{
									?>
									<p class="obj1">You are not allowed </p>
									<?php
									
									}
								else
									{
									
									echo "You are login";
									session_start();
									$_SESSION['access']=true;
									//echo $row['id'];
									session_write_close();
							
									header("Location: http://localhost/audioshare/user.php?id=".$row['email']."&v=".$row['name']." ");
									?>
									<a class="obj1"href="user.php?id=<?php echo $row['email']?>&v=<?php echo $row['name']?>"> Go to home page</a>
									<?php
									
									}
							}
						?>
						
			</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam,Ryan</p>
	</div>
</div>
</body>
</html>
