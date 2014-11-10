<?php
session_start();
$value=$_POST["hidden"];

if($value==1)
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		mysql_connect("localhost","root","");
		mysql_select_db("signup");
		
		//echo "lol";
		$result=mysql_query("select * from users where username='$username' and password='$password' ");
		
		$row=mysql_fetch_array($result);
		//print_r($row);
		if($row['status']=='approved')
			{
			echo "you r login";
			$_SESSION['access']=true;
			echo "  goto:";
			//echo $row['id'];
			?>
			<a href="user_profile.php?id=<?php echo $row['id']?>">page</a>
			<?php
			
			}
		else
			{
			echo "not allowed";
			}
	}
?>

<html>
	<body>
		<form action="user_final.php" method="post">
			<table>
			<input type="hidden" name="hidden" value="1"/>
			<tr>
				<td> Username </td>
				<td><input type="text" name="username"/></td>
			</tr>
			<tr>
				<td> Password </td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"/></td>
			</tr>
			
			</table>
			
		</form>
	
	
	</body>
</html>
