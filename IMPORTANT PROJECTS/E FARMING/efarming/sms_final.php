<?php
error_reporting("E_PARSE");

$username='sara';
$password='i63vuf0grm';
$api_pass='4de4c6n6amt66a4oz';
$sender='test';
$to='8870698010';
$message='hi hello';

	$var="username=".$username."&api_password=".$api_pass."&sender=".$sender."&to=".$to."&message=".$message."&priority=1&result_type=2";
 echo $var;
 $curl=curl_init('http://bulksms.gateway4sms.com/pushsms.php');
 curl_setopt($curl,CURLOPT_POST,true);
 curl_setopt($curl,CURLOPT_POSTFIELDS,$var);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($curl);
curl_close ($curl);
	
die("sms sent");

	?>