<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); ?>
<html>
<head>

<title>Edit Personal Profile</title>
</head>
<body>

<?php 
	global $personal;
	global $id;
	$id=$_GET['id'];
	$personal=get_personal_details($id);
	?>

<form name="form1" method="post" action="updatepersonalprofile.php?id=<?php echo $id; ?>">
  <label>Height(cms) 
  <input type="text" name="height" value="<?php echo $personal['height'];?>" >
  </label>
  <p>
    <label>Weight(kgs) 
    <input type="text" name="weight" value="<?php echo "{$personal["weight"]}"; ?>">
    </label>
  </p>
  <p>
    <label>Religion  </label>
    <input type="text" name="religion" value="<?php echo $personal['religion'];?>" >
  </p>
  <p>
    <label>Country
    <input type="text" name="country" value="<?php echo $personal['country'];?>">
    </label>
  </p>
  <p>
    <label>Mother Tongue 
    <input type="text" name="mother_tongue" value="<?php echo $personal['mother_tongue'];?>">
    </label>
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