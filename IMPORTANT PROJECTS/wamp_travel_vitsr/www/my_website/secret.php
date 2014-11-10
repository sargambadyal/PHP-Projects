<?php
session_start();
$id=$_GET["id"];
//echo $id;
if($_SESSION['access']==true)
	{
	echo "welcome";
	mysql_connect("localhost","root","");
	mysql_select_db("login");
	
	$result=mysql_query("select * from login where id='$id'");
	$row=mysql_fetch_array($result);
	//print_r($row);
	echo $row['key'];
	}

else
echo "not accesed";

?>