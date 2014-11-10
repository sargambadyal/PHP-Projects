<?php
session_start();
ERROR_REPORTING(E_PARSE);
$verify=$_GET["verify"];

if($verify==1234)
{
echo "CONGRATULATIONS NOW YOU CAN ENJOY OUR SERVICES";
$_SESSION['access']=1;
?>
<a href="final.php">login</a>
<?php
}
?>