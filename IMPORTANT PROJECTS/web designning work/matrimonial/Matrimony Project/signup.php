<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
    $username=$_POST["username"];
	$password=$_POST["password"];
	$name=$_POST["name"];
	$gender=$_POST["gender"];
	$arrive = explode("/",$_POST['dob']);
	$dob = sprintf("%s/%s/%s",$arrive[2],$arrive[1],$arrive[0]);
	$query ="insert into authen(username,password) values('$username','$password')";
	mysql_query($query);
	$result = "select * from authen where username='$username' and password='$password'";
	$result_set=mysql_query($result);
	$row=mysql_fetch_array($result_set);
	$id=$row["id"];
	$query ="insert into userdetails(id,name,gender,dob) values($id,'$name','$gender','$dob')";
	mysql_query($query);
    $query="insert into job_profile(j_id,qualification,occupation,salary) values('$id','','',NULL)";
	mysql_query($query);
	$query="insert into contact_details(c_id,email,mobile,address) values('$id','',NULL,'')";
	mysql_query($query);
	$query="insert into family_profile(f_id,father_name,mother_name,no_of_sibling,native_place) values('$id','','',NULL,'')";
	mysql_query($query);
	$query="insert into personal_profile(p_id,height,weight,religion,country,mother_tongue) values('$id',NULL,NULL,'','','')";
	mysql_query($query);
	setcookie("x",$id,time()+600);
	header('location: home.php');
    mysql_close($db); 
?>