<?php
$value=$_GET["id"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("signup");
	
	

	$del=mysql_query('DELETE FROM users where id=$value');
   
	
	echo "successful";
	
	?>
	</br>
	<a href="editor.php"> go back</a>
	<?php

?>
