<html>
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
		<h1> WELCOME <?php ERROR_REPORTING(E_PARSE); $id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#000">
					<h4><center><a style="text-decoration:none;color:#00f" href="viewplaylist.php?id=<?php echo $id ?>">View Playlist</a></center></h4>
				</div>
				
				<div id="tab"style="background-color:#000;">
					<h4><center><a style="text-decoration:none;color:#00f" href="feedback.php?id=<?php echo $id?>">Feedback</a></center></h4>
				</div>
				</br>

<?php
ERROR_REPORTING('E_PARSE');
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("audioshare");
		

			$extract=mysql_query("select id from playlist where email='$id'");


?>
			<table>
			<?php
			ERROR_REPORTING(E_PARSE);
			while($r=mysql_fetch_array($extract)):
			$check=mysql_query(" select * from audio where id=$r[0] ");
			$row=mysql_fetch_array($check);
			?>
              

				<tr>
					<td class="obj1"> <a href="play.php?id=<?php echo $row['id']?>"><img src="uploads/<?php echo $row['cover']?>" width="100px" height="100px"/> </a> </br>
					</td>
					<td class="obj1"> 
					</br>TITLE: <?php echo $row['title'];?>
					</br>ARTIST:<?php echo $row['artist'];?>
					</br>GENRE:<?php echo $row['audio_type'];?>
					</br>LIKES:<?php echo $row['likes'];?>
					</br>VIEWS:<?php echo $row['views'];?>
					</td>
				</tr>
			
			<?php
				endwhile;?>
			</table >
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam,Ryan</p>
	</div>
</div>
</body>
</html>
