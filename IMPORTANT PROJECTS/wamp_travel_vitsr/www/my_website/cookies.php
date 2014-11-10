<?php
$value=$_GET["valid"];
if ($value==1)
	{
		//if isset($_COOKIE['name']);
	}
else
	{$name=$_GET["name"];

	setcookie(cookie,"$name",time()+2000);
	}
?>

<html>
	<body>
	<form action="cookies.php?valid=1" method="get">
	<table>
		<tr>
			<td> name </td>
			<td><input type="text" value="name" name="name"/></td>
		</tr>
		<tr>
			<td ><input type="submit" value="submit my form"/></td>
		</tr>
	</table>
	</body>
	
</html>
