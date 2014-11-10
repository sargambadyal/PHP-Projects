<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); ?>
<?php 
	global $userdetails;
	global $id;
	$id=$_GET['id'];
	$userdetails=get_userdetails_details($id);
    $authen=get_authen_details($id);
    $arrive = explode("-",$userdetails['dob']);
	$dobmod = sprintf("%s/%s/%s",$arrive[2],$arrive[1],$arrive[0]);
?>
<html>
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup Form</title>
<link rel="stylesheet" href="calendar.css">
 <script language="JavaScript" src="calendar_us.js"></script>
</head>

</head>
<body>
<form action="updatebasicdetails.php?id=<?php echo $id; ?>"  method="post" enctype='multipart/form-data' name="myform" id="myform")>
    <label>Username
    <input type="text" name="username" value="<?php echo $authen['username']?>">
  </label>
    <p>
      <label>Password
      <input type="password" name="password" value="<?php echo $authen['password']?>">
      </label>
</p>
    <p>
      <label>Full Name
      <input type="text" name="name" value="<?php echo $userdetails['name']?>">
      </label>
</p>
    <p>
      <label></label>
      <label>
      
Gender :

M
<input type="radio" name="gender" value="M">
      </label>
      <label>
 F
 <input type="radio" name="gender" value="F">
      </label>
<br><br>
      <label></label>
<label> Date of Birth <input type="text" name="dob" value="<?php echo $dobmod?>"/>
    <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'myform',
		// input name
		'controlname': 'dob'
	});

	</script>
  </label>

      <br />
      <label>
      <input type="submit" name="Submit" value="Submit">
      </label>
      <a href="home.php"> Cancel </a>
  </p>
</form>
  
  </body>
</html>
