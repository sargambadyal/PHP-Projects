<?php
ERROR_REPORTING(E_PARSE);
mysql_connect("localhost","root","");
mysql_select_db("audioshare");
$id=$_GET['id'];
$result=mysql_query("select * from audio where id='$id' ");
$row=mysql_fetch_array($result);
print_r($row);

$file = 'uploadedaudio/' . $row['file'];
/*
if (file_exists($file)) {
  header("Content-Type: audio/mp3");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".filesize($file));
  readfile($file);
} 
*/

?>
<!--<IFRAME src="<?php echo $file; ?>" name="wimpy" width="350" height="20" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" ></IFRAME>


<!--
<audio controls>
  <source src="<?php echo $file;
  ?>" type="audio/mpeg">
  <source src="horse.ogg" type="audio/ogg">
  Your browser does not support this audio format.
</audio>
-->

<embed src="<?php
echo $file;
?>" autostart="true" loop="true" height="100px" width="400px" />
