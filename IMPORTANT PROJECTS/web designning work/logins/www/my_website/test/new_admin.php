<?php
session_start();
ERROR_REPORTING(E_PARSE);
if($_SESSION['valid']==1)
{
	$value=$_GET["valid"]; 
	if($value==true)
	{
		
		$u=$_POST["username"];
		$p=$_POST["password"];
		
		
		mysql_connect("localhost","root","");
		mysql_select_db("signup");
		
		$result=mysql_query("insert into admin (username,password) values ('$u','$p')");
		
		echo "congrats new administrator added";
		
	}
	?>
	<html>
		
		<body>
		<h1> WELCOME TO OUR SIGN UP FOR ADMINISTRATOR<h1>
		<form action="new_admin.php?valid=true" method="post">
			<table>
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
<?php
}
?>