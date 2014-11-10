
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AudioShare</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">AudioShare</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<?php
error_reporting(E_PARSE);
mysql_connect("127.0.0.1","root","");
mysql_select_db("audioshare");

$q=$_POST['query'];
$a= array();
$a=explode(' ',$q, strlen($q));
//echo $a[0];echo $a[1];


echo count($a);

if(count($a) == 1)
{
$result=mysql_query("select distinct(id) from search where keyword='$a[0]'");
}

if(count($a) == 2)
{
$result=mysql_query("(select distinct(id) from search where keyword='$a[0]') union (select distinct(id) from search where keyword='$a[1]')");
}

if(count($a) == 3)
{
$result=mysql_query("(select distinct(id) from search where keyword='$a[0]') union (select distinct(id) from search where keyword='$a[1]') union (select distinct(id) from search where keyword='$a[2]')");
}

if(count($a) == 4)
{
$result=mysql_query("(select distinct(id) from search where keyword='$a[0]') union (select distinct(id) from search where keyword='$a[1]') union (select distinct(id) from search where keyword='$a[2]') union (select distinct(id) from search where keyword='$a[3]')");
}

else
{
$result=mysql_query("(select distinct(id) from search where keyword='$a[0]') union (select distinct(id) from search where keyword='$a[1]') union (select distinct(id) from search where keyword='$a[2]') union (select distinct(id) from search where keyword='$a[3]') union (select distinct(id) from search where keyword='$a[4]')");
}
?>
<table border='1'>
<?php
while($r=mysql_fetch_array($result))
{
$s=mysql_query("select * from audio where id=$r[0]");
$row=mysql_fetch_array($s);
?>


				<tr>
					 <td class="obj1"> <a href="playdemo.php?valid=no&id=<?php echo $row['id'] ?>"> <img src="uploads/<?php echo $row['cover']?> " width="100px" height="100px"/> </br>
					</td></a>
					<td class="obj1"> 
					</br>TITLE: <?php echo $row['title'];?>
					</br>ARTIST:<?php echo $row['artist'];?>
					</br>GENRE:<?php echo $row['audio_type'];?>
					</br>LIKES:<?php echo $row['likes'];?>
					</br>VIEWS:<?php echo $row['views'];?>
					</td>
				</tr>
			
			<?php

}
?>
</table>
<?php

?>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
