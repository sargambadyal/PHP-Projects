<?php
ERROR_REPORTING(E_PARSE);
mysql_connect("localhost","root","");
mysql_select_db("audioshare");
$id=$_GET['id'];
$result=mysql_query("select * from audio where id='$id' ");
$row=mysql_fetch_array($result);
print_r($row);

$file = 'uploadedaudio/' . $row['file'];

 if(!file)
 {
     // File doesn't exist, output error
     die('file not found');
 }
 else
 {
     // Set headers
     header("Cache-Control: no-cache");
     header("Content-Transfer-Encoding: binary");
     header("Content-Disposition: attachment; filename=$file.mp3");
     header('Content-type: audio/mpeg');
	 header("Content-Length: ".filesize($file));
     header("Content-Transfer-Encoding: binary");
    
     // Read the file from disk
     readfile($file);
 }

?>