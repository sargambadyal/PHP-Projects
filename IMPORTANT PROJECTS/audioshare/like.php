<?php
ERROR_REPORTING(E_PARSE);
$id=$_GET['id'];
			mysql_connect("localhost","root","");
		    mysql_select_db("audioshare");
			$value = $id;

// send a simple cookie
setcookie("like",$value);
			$check=mysql_query(" update audio set likes=likes+1 where id=$id ");
?>