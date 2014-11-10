<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YANTRIK KRISHI</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">Yantrik Krishi</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="tutorial.php">Tutorials</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<div>
				<p>
				Office Address: xyx, VIT university,vellore,632014 Tamil Nadu </p><p class="obj2">
				Phone: xxxxxxxxx</p><p class="obj2">
				Email:xxxx@xxxx.com</p></br><p class="obj2">
				</p>
				<a href="http://www.facebook.com/" target="_blank"> <img class="image1"src="fb.png"></a>
				</div>
				<div>
		<h2 class="obj1"> Post Your Query<h1>
		<form action="contact.php?valid=true" method="post">
			<table>
				<tr>
					<td class="obj1"> Name/Email: </td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td class="obj1"> Comment/Query: </td>
					<td colspan="4" ><textarea rows="7" cols="25" name="comment"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
		
		<?php
ERROR_REPORTING(E_PARSE);
	$value=$_GET["valid"]; 
		
		$n=$_POST["name"];
		$c=$_POST["comment"];
		
		
		mysql_connect("localhost","root","");
		mysql_select_db("efarming");
		if($value==true)
		$result=mysql_query("insert into comment values ('$c','$n')");
		$print=mysql_query("select name,comment from comment");
		while($row=mysql_fetch_array($print)):
		?>
		<table>
		<tr>
		<td class="obj1">Name:<?php echo $row[1];?></td>
		</tr>
		<tr>
		<td class="obj1">Comment:<?php echo $row[0];?></td>
		</tr>
		</table>
		<?php
		endwhile;
		
	?>
		
		
				</div>
		</div>
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
