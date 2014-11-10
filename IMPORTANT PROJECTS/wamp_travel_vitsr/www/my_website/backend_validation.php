<?php
$n=$_GET["name"];
$a=$_GET["age"];
$l=strlen($n);
if($l<5 || $a>45)
{
echo "acting smart huh";
}
else
{
echo $n;
}
?>
