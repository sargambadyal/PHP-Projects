<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php
	$id=$_GET['id'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$query = "update contact_details set email='{$email}', mobile={$mobile},address='{$address}' where c_id=$id";
	$result=mysql_query($query);
	header('location: home.php');
?>
<?php mysql_close($db); ?>