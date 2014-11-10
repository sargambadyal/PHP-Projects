<?php

ERROR_REPORTING(E_PARSE);
$verify=$_GET["verify"];
mysql_connect("localhost","root","");
mysql_select_db("signup");
$email_verify=mysql_query(" update users set email_verification='yes' where code='$verify'");
	
echo "CONGRATULATIONS YOUR REQUEST HAS BEEN SENT TO THE ADMINISTRATOR FOR APPROVAL!!";
echo "u will be informed by mail shortly";

?>