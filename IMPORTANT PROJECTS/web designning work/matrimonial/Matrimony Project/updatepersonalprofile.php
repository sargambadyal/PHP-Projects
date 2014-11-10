<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>

<?php
	$id=$_GET['id'];
	$height=$_POST['height'];
	$weight=$_POST['weight']; 
	$religion=$_POST['religion'];
	$country=$_POST['country'];
	$mother_tongue=$_POST['mother_tongue'];
	$query = "update personal_profile set 
			  height = $height,
			  weight= $weight,
			  religion= '{$religion}',
			  country='{$country}',
			  mother_tongue='{$mother_tongue}' 
			  where p_id=$id";
	$result=mysql_query($query);
	header('location: home.php');
?>
<?php mysql_close($db); ?>