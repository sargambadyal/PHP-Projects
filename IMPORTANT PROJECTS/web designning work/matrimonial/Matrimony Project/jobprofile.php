<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); ?>
<html>
<head>

<title>Edit Job Profile</title>
</head>
<body>

<?php 
	global $job;
	global $id;
	$id=$_GET['id'];
	$job=get_job_details($id);
?>
<form name="form1" method="post" action="updatejobprofile.php?id=<?php echo $id; ?>">
  <label>Qualification
  <input type="text" name="qualification" value="<?php echo $job['qualification'];?>" >
  </label>
  <p>
    <label>Occupation
    <input type="text" name="occupation" value="<?php echo "{$job["occupation"]}"; ?>">
    </label>
  </p>
  <p>
    <label>Annual_Salary </label>
    <input type="text" name="salary" value="<?php echo $job['salary'];?>" >
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