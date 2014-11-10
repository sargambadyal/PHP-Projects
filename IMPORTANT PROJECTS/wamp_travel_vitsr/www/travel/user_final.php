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
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="#">Login</a></h4>
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
$value=$_POST["hidden"];
if($value==1)
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		mysql_connect("localhost","root","");
		mysql_select_db("travel agency");
		
		//echo "lol";
		$result=mysql_query("select * from users where username='$username' and password='$password' ");
		
		$row=mysql_fetch_array($result);
		//print_r($row);
		if($row['status']=='approved')
			{
			?>
			<p class="obj1">You are login.</p>
			<?php
			$_SESSION['access']=true;
			//echo $row['id'];
			?>
			<a class="obj1"href="user_profile.php?id=<?php echo $row['email']?>&v=<?php echo $row['username']?>"> Go to home page</a>
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
				<center>
				<h2 class="obj1">LOGIN</h2>
		<form name="myForm" action="user_final.php" onsubmit="return validateForm()" method="post">
			<table>
			<input type="hidden" name="hidden" value="1"/>
			<tr>
				<td class="obj1"> Username </td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td class="obj1"> Password </td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"/></td>
			</tr>
			<tr>
			<td> <a href="user_signup.php"> Signup</a>
			</tr>
			<tr>
			<td> <a href="forgot.php">Forgot Password?</a>
			</tr>
			</table>
			
		</form>
	</center>
	
	</body>
</html>
