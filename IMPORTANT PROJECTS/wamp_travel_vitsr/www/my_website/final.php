<?php
session_start();
ERROR_REPORTING(E_PARSE);
if($_SESSION['access']==1)
	{
	include('login_page.php');
	?>
	<a href="mail_send.php">new user</a>
	<?php
	}
else 
	{echo "goto hell";
	}	
	
	?>