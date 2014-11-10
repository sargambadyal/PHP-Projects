<?php
//BROWSER--USER--CLIENT
 session_start();
 print_r($_SESSION);
 session_destroy();
 
 $query=mysql_query($sql);
 
 //to check number of records
 //SELECT * from users where 
 //username='$username' and password='$password'
 $number_of_records=mysql_num_rows($query);
 
 //gateway4sms account
 //5gigs.net account
 //gmail etc. account
 
?>
