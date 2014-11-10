<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YANTRIK KRISHI</title>
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
  
var r=document.forms["myForm"]["username"].value;
if (r==null || r=="")
  {
  alert("Username must be filled out");
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
 
var z=document.forms["myForm"]["phone"].value;
if(z.length!=10 || z=="0000000000")
{
 alert("Not a valid phone number");
  return false;
}

var s=document.forms["myForm"]["address"].value;
if(s==null || s=="")
{
 alert("Not a valid address");
  return false;
}

var r=document.forms["myForm"]["category"].value;
if(r=='Category A' || r=='Category B' || r=='Category C' )
{
}
else alert("Invalid category");

}

		</script>

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
		<h1> Farmers Signup</h1>
			
					<form name="myForm" action="farmer_signup.php?value=1" onsubmit="return validation()" method="post">
						<table>
						<tr>
							<td class="obj1"> Name:</td>
							<td><input type="text" name="name"></td>
						</tr>
						
						<tr>
							<td class="obj1"> Username:</td>
							<td><input type="text" name="username"></td>
						</tr>
						
						<tr>
							<td class="obj1"> Password:</td>
							<td><input type="password" name="password"></td>
						</tr>
						
						<tr>
							<td class="obj1"> Email:</td>
							<td><input type="email" name="email"></td>
						</tr>
						
						<tr>
							<td class="obj1"> Phone:</td>
							<td><input type="phone" name="phone"></td>
						</tr>
						
						<tr>
							<td class="obj1"> Category:</td>
							<td><input list="category" name="category">
								<datalist id="category" name="category">
								  <option value="Category A">
								  <option value="Category B">
								  <option value="Category C">
								</datalist><td>
						</tr>
						
						<tr>
							<td class="obj1"> Address:</td>
							<td><textarea name="address" rows="3" cols="15"></textarea></td>
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
		$u=$_POST["username"];
		$p=$_POST["password"];
		$e=$_POST["email"];
		$ph=$_POST["phone"];
		$c=$_POST["category"];
		$a=$_POST["address"];
		mysql_connect("localhost","root","");
			mysql_select_db("efarming");
			$result=mysql_query("insert into farmer(name,username,password,email,phone,category,address) value('$n','$u','$p','$e',$ph,'$c','$a')");	
			$confirm=mysql_query(" select * from users where email='$e'");
		
		$row=mysql_fetch_array($confirm);
		
			?>
			<a class="obj1" href="farmer_login.php"></br> Success!! You can login! </a>
			<?php
		}
		?>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam,Sadhana,Aditi</a>.</p>
	</div>
</div>
</body>
</html>
