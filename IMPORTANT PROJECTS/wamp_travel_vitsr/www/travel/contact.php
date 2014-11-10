<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(back1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">

			<div id="wrapper"style="height:1200px;">
				<div id="head">
				<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="#">Contact Us</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="user_final.php">Login</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="admin_page.php">Admins</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="user_signup.php">Sign up</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="home.php">Home</a></center></h4>
				</div>
				</br>
				</div>

				<div>
				<p class="obj2">
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
		mysql_select_db("travel agency");
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
				<h1 class="cite"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
				</h1></center>

	</body>
</html>
