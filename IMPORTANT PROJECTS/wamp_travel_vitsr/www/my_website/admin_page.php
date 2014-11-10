<?php
session_start();
$value=$_GET["value"];


if($value==true):
	{
	
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		mysql_connect("localhost","root","");
		mysql_select_db("signup");

			$confirm=mysql_query(" select * from admin where username='$username' and password='$password'");
			
			$row=mysql_fetch_array($confirm);
			if($row['username']==$username && $row["password"]==$password)
				{
				 $_SESSION['access']=1;

				 ?>
				 <a href="editor.php"> </br>users</a>
				<?php
				 
				}
			else 
			echo "wrong password or username";
				
	
	}
	
	endif;


?>
<html>
	<body>
	    <h1> ADMINISTRATORS SING IN <h1>
		<form action="admin_page.php?value=true" method="post">
		<table>
		<tr>
		<td> USERNAME:</td>
		<td><input type="text" name="username"/></td>
		</tr>
		<tr>
		<td>PASSWORD:</td>
		<td><input type="password" name="password"/></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit" value="submit"/></td>
		</tr>
		</table>
		</form>
	</body>
</html>