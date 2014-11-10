<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); 
?>
<html>
<head>
<title>Edit Contact Profile</title>
</head>
<body>

<?php 
	global $contact;
	global $id;
	$id=$_GET['id'];
	$contact=get_contact_details($id);
?>

<form name="form1" method="post" action="updatecontact.php?id=<?php echo $id; ?>">
  <label>Email
  <input type="text" name="email" value="<?php echo $contact['email'];?>" >
  </label>
  <p>
    <label>Mobile
    <input type="text" name="mobile" value="<?php echo "{$contact["mobile"]}"; ?>">
    </label>
  </p>
  <p>
    <label>Address </label>
    <input type="text" name="address" value="<?php echo $contact['address'];?>" >
  </p>
  <p>
    <label>
    <input type="submit" name="submit" value="Submit">
    </label>
	<a href="home.php"> Cancel </a>
  </p>
</form>


</body>
</html>
<?php mysql_close($db); ?>