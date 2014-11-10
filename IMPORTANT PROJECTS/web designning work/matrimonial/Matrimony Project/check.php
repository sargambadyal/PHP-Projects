<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
    $username=$_POST['username'];
    $password=$_POST['password']; 
	$result = "select * from authen where username='$username'";
	$result_set=mysql_query($result);
	$row=mysql_fetch_array($result_set);
	echo $row["username"];
	if($row["password"] == $password)
    {
	 $uid=$row["id"];
	 setcookie("x",$uid,time()+600);
	 header('location: home.php');
	}
	else
	{	
	 header('location: login.php');
	}
?>