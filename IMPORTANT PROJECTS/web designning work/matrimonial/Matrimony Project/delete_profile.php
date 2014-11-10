<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php
	$id=$_GET['id'];
	mysql_query("delete from authen where id='$id'");
	mysql_query("delete from contact_details where c_id='$id'");
	mysql_query("delete from job_profile where j_id='$id'");
	mysql_query("delete from family_profile where f_id='$id'");
	mysql_query("delete from personal_profile where p_id='$id'");
	mysql_query("delete from userdetails where id='$id'");
	header('location:login.php');
?>
<?php mysql_close();?>