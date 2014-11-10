<?php
ERROR_REPORTING(E_PARSE);
$value=$_GET["valid"]; 
if($value==true)
{
	echo "helloooooo";
	$s=$_POST["sex"];
	$u=$_POST["username"];
	$e=$_POST["email"];
	$n=$_POST["name"];
	$p=$_POST["password"];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("signup");
	$sql="insert into users (name,email,sex,username,password) values ('$n','$e','$s','$u','$p')";
    mysql_query($sql);
	$confirm=mysql_query(" select * from users where email=%@gmail.com");
	mysql_query($confirm);
	print_r($confirm);
	
}
?>
<html>
	
	<body>
	<h1> WELCOME TO OUR SIGN UP<h1>
	<form action="mail_send.php?valid=true" method="post">
		<table>
			<tr>
				<td> FIRST NAME:</td>
				<td> <input type="text" name="name"/></td>
			</tr>
			<tr>
				<td> EMAIL </td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td >SEX:</td>
				<td colspan="4"><input type="radio" name="sex" value="m" checked="checked"/>m <input type="radio" name="sex" value="f"/>f</td>
				</tr>
			<tr>
				<td> USERNAME: </td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td> PASSWORD: </td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"/></td>
			</tr>
		</table>
	</form>
	
	
	</body>
</html>
