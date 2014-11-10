
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
	//$query ="insert into authen(username,password) values('$username','$password')";
	$query = "update authen set username='{$username}', password='{$password}' where id=$id";
	mysql_query($query);
	$result = "select * from authen where username='$username'";
	$result_set=mysql_query($result);
	$row=mysql_fetch_array($result_set);
	$id=$row["id"];
//	$query ="insert into userdetails(id,name,gender,dob) values($id,'$name','$gender','$dob')";
	$query = "update userdetails set name='{$name}', gender='{$gender}', dob='{$dob}' where id=$id";
	mysql_query($query);
	header('location: home.php');
    mysql_close($db); 
?>
