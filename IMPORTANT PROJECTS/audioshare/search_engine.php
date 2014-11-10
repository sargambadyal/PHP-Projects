<?php

mysql_connect("127.0.0.1","root","");
mysql_select_db("audioshare");

$q="kaho na pyar hai";
$a= array();
$a=explode(' ',$q, strlen($q));
/*echo $a[0];
echo $a[1];
echo $a[2];
echo $a[3];
echo count($a); */
$c=0;
echo $a[$c];
?>