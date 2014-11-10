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
var x=document.forms["myForm"]["name"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
  
var r=document.forms["myForm"]["dob"].value;
if (r==null || r=="")
  {
  alert("DOB must be filled out");
  return false;
  }
 
 var w=document.forms["myForm"]["password"].value;
if (w==null || w=="")
  {
  alert("Password must be filled out");
  return false;
  }
 
var y=document.forms["myForm"]["email"].value;
var atpos=y.indexOf("@");
var dotpos=y.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length || y=="example@gmail.com")
  {
  alert("Not a valid e-mail address");
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
		<h1> User Signup</h1>
			
					<form name="myForm" action="user_signup.php?value=1" onsubmit="return validation()" method="post">
						<table>
						<tr>
							<td class="obj1"> Name:</td>
							<td><input type="text" name="name"></td>
						</tr>
						
					
						<tr>
							<td class="obj1"> Email:</td>
							<td><input type="email" name="email"></td>
						</tr>
						
						<tr>
							<td class="obj1">Sex</td>
							<td class="obj1" colspan="4"><input type="radio" name="sex" value="m" checked="checked"/>Male <input type="radio" name="sex" value="f"/>Female</td>
						</tr>
							
						<tr>
							<td class="obj1"> DOB:</td>
							<td><input type="date" name="dob"></td>
						</tr>
						
							
						<tr>
							<td class="obj1"> Password:</td>
							<td><input type="password" name="password"></td>
						</tr>
						
										
						<tr>
							<td><input type="submit" name="submit" value="Sign up"/></td>
						</tr>
					</table>
					</form>
			
		
		<?php
		error_reporting("E_PARSE");
		if($_GET["value"]==1)
		{
		$n=$_POST["name"];
		$s=$_POST["sex"];
		$d=$_POST["dob"];
		$e=$_POST["email"];
		$p=$_POST["password"];
		
		        mysql_connect("localhost","root","");
			mysql_select_db("audioshare");
			$result=mysql_query("insert into user(name,sex,dob,email,password) value('$n','$s','$d','$e','$p')");	
			$confirm=mysql_query(" select * from user where email='$e'");
		
		$row=mysql_fetch_array($confirm);
		
			?>
			<a class="obj1" href="user_login.php"></br> Success!! You can login! </a>
			<?php
		}
		?>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam,Ryan</a>.</p>
	</div>
</div>
</body>
</html>
