<!-- Code for uploading audio files -->

<form enctype="multipart/form-data" action="sound_action.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE"/>
Choose a file to upload: <input name="file" type="file" /><br />
<input type="submit" value="Upload File" />
</form>

    <?php
if ((($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/mp4")
|| ($_FILES["file"]["type"] == "audio/wav"))
&& ($_FILES["file"]["size"] < 1000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?> 

<!--<<<<<<<<<  alternatively >>>>>>.-->

$valid_extension = array('.mp3', '.mp4', '.wav');
$file_extension = strtolower( strrchr( $_FILES["file"]["name"], "." ) );

if( in_array( $file_extension, $valid_extension ) && 
    $_FILES["file"]["size"] < 1000000 ){
    // Rest Logic Here
}
else
{
    print_r( $_FILES );
}


<!-- Embedd audio files-->
<?php
$file = 'mymusic' . $_GET['file'] . '.mp3';

if (file_exists($file)) {
  header("Content-Type: audio/mp3");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".filesize($file));
  readfile($file);
}
?>



<!-- alternatively-->
<embed src="<?php
$i = 0; // value of condition
switch($i) {
  case 1: echo "file1.mp3"; break;
  case 2: echo "file2.mp3"; break;
  default: echo "default.mp3"; break;
}
?>" autostart="true" loop="false" />


<!-- code for downloading audio files-->

<?php

$file = "http://fs22.trilulilu.ro/stream.php?type=audio&source=site&hash=ab0efc23d0142b&username=remy5&key=b9bb44163ce2e0fb13d377d3d78990aed95fb824 ";



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