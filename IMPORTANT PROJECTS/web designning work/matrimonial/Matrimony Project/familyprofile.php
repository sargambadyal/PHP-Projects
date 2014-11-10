<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); ?>
<html>
<head>

<title>Edit Family Profile</title>
</head>
<body>

<?php 
	global $family;
	global $id;
	$id=$_GET['id'];
	$family=get_family_details($id);
?>

<form name="form1" method="post" action="updatefamilyprofile.php?id=<?php echo $id; ?>">
  <label>Father Name 
  <input type="text" name="father_name" value="<?php echo $family['father_name'];?>" >
  </label>
  <p>
  <label>Mother Name 
  <input type="text" name="mother_name" value="<?php echo "{$family['mother_name']}"; ?>">
  </label>
  </p>
  <p>
  <label>Number Of Siblings  </label>
  <input type="text" name="no_of_sibling" value="<?php echo $family['no_of_sibling'];?>" >
  </p>
  <p>
    <label>Native Place
    <input type="text" name="native_place" value="<?php echo $family['native_place'];?>">
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