<html>
<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(travel1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">
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
				</div>
				<div>
<?php
	ERROR_REPORTING(E_PARSE);
	$ei=$_GET["id"];
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	$alter=mysql_query("SELECT * from users where code='$ei'");
	$row=mysql_fetch_array($alter);
	$name=$row['name'];
	$email=$row['email'];
	$status=$row['status'];
	
$value=$_GET["value"];
if($value==1)
{
	$n=$_POST["name"];
	$s=$_POST["status"];
	$e=$_POST["email"];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	
	$edit="UPDATE users SET name='$n', email='$e',status='$s'  WHERE code='$ei'";
	//echo $edit;
	
	
   	mysql_query($edit);
	echo "successful";
	
	?>
	</br>
	<a class="obj1" href="admin_approval.php?id=<?php echo $email; ?>"> Mail the User </a>
	
	</br></br>
	<a class="obj1" href="editor.php"> Go back</a>
	<?php
	

}	

?>
				</div>
		<center>
		<table>
			<form action ="alter.php?value=1&id=<?php echo $ei?>" method="post" enctype="multipart/form-data"> 
				<tr>
					<td class="obj1" >Name:</td>
					<td class="obj1" colspan="4"><input id="name" type="text" maxlength="19" name="name" value="<?php echo $name?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Email:</td>
					<td class="obj1" colspan="4"><input id="email" type="text" maxlength="34" name="email" value="<?php echo $email?>"/></td>
				</tr>	
			<tr>
				<td class="obj1" >Status:</td>
				<td class="obj1" colspan="4"><input type="radio" name="status" value="approved" />approved <input type="radio" name="status" value="rejected" checked="checked"/>rejected</td>
				</tr>
			<tr>				
				<tr>
					<td class="obj1" colspan="2" ><input type="submit" name="myform"  value="submit my form"/></td>
				</tr>
				</form>
			 </table>
			 </center>
			 </div>
	</body>
	
</html>

