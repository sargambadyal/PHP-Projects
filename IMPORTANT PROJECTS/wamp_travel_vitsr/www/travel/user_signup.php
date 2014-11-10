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

}

		</script>
	 </head>


	   <body style="background-image:url(travel1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">

			<div id="wrapper">
				<div id="head">
				<div id="tab" style="background-color:#ff3366;">
					<h4><center><a style="text-decoration:none;color:#fff" href="contact.php">Contact Us</a></center></h4>
				</div>
				<div id="tab" style="background-color:#319300;">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="user_final.php">Login</a></h4>
				</div>
				<div id="tab" style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="admin_page.php">Admins</a></center></h4>
				</div>
				<div id="tab" style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="user_signup.php">Sign up</a></center></h4>
				</div>
				<div id="tab" style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="home.php">Home</a></center></h4>
				</div>
				</br>
				</div>
				<div>
<?php
session_start();
ERROR_REPORTING(E_PARSE);
$value=$_GET["valid"]; 
if($value==true)
{
	$s=$_POST["sex"];
	$u=$_POST["username"];
	$e=$_POST["email"];
	$n=$_POST["name"];
	$p=$_POST["password"];
	$phone=$_POST["phone"];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	
    $result=mysql_query("insert into users (name,email,sex,phone,username,password) values ('$n','$e','$s','$phone','$u','$p')");
	
	$confirm=mysql_query(" select * from users where email='$e'");
		
		$row=mysql_fetch_array($confirm);
		
			?>
			<a class="obj1" href="user_mail.php?id=<?php echo $row['email']?>"></br> Success!! I confirm my e-mail address </a>
			<?php
}
?>
		</div>

	<h2 class="obj1"> WELCOME TO OUR SIGN UP<h2>
	<form name="myForm" action="user_signup.php?valid=true" onsubmit="return validateForm()" method="post">
		<center>
		<table>
			<tr>
				<td class="obj1"> FIRST NAME:</td>
				<td> <input type="text" name="name"/></td>
			</tr>
			<tr>
				<td class="obj1"> EMAIL </td>
				<td><input type="text" value="example@gmail.com" name="email"/></td>
			</tr>
			<tr>
				<td class="obj1" >SEX:</td>
				<td class="obj1"colspan="4"><input type="radio" name="sex" value="m" checked="checked"/>m <input type="radio" name="sex" value="f"/>f</td>
				</tr>
			<tr>
				<td class="obj1"> PHONE: </td>
				<td><input type="number" value="0000000000" name="phone"/></td>
			</tr>	
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
		</center>
	</form>
	</div>
<h1 style="font-family: verdana; font-size:13px;color:#048123"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
			   </h1></center>

	</body>
</html>
