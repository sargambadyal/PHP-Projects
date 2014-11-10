<?php
    mysql_connect("localhost","root","");
	mysql_select_db("signup");
	$ui=$_GET["id"];
	
	
	$confirm=mysql_query(" select * from users where id=$ui");
	
	$row=mysql_fetch_array($confirm);
	echo $row['name'];				
	
?>
