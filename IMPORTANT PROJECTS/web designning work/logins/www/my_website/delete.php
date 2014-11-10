<?php
$value=$_GET["id"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	
	

	$del="DELETE FROM users where id=$value";
    mysql_query($del);
	
	

?>
