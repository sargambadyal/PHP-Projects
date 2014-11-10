<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(back1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">

			<div id="wrapper">
				<div id="head">
				<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="contact.php">Contact Us</a></center></h4>
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
				<?php
				ERROR_REPORTING(E_PARSE);
session_start();
if($_SESSION['access']==1)
   {
      
	$_SESSION['valid']=1;
    
	?>
	
	
	<div>
				<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="new_admin.php">Add Admin</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="trains.php">Trains</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="flights.php">Flights</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="cabs.php">Cabs</a></center></h4>
				</div>
				</br>
				</div>
				</br></br>
				
				<h2 class="obj1"> USERS </h2>
	
	
	   <?php
   
   
		mysql_connect("localhost","root","");
		mysql_select_db("travel agency");

		$extract=mysql_query("SELECT * from users");
			?>
		<html>
		<body>
			<table border=1>
			<?php
			while($row=mysql_fetch_array($extract)):
			?>


				<tr>
					<td class="obj1"> Name:</br><?php
					echo $row[0];
					?>
					</td>
					<td class="obj1"> email:</br><?php
					echo $row[3];
					?>
					</td>
					<td class="obj1"> sex:</br><?php
					echo $row[1];
					?>
					</td>
					<td class="obj1"> username: </br><?php	echo $row[7];?>
					</td>
					<td class="obj1"> password: </br><?php	echo $row[8];?>
					</td>
					<td class="obj1"> status:</br> <?php	echo $row[6];?>
					</td>
					<td class="obj1"> email_v:</br> <?php	echo $row[5];?>
					</td>
					<td class="obj1"> <a href="delete.php?id=<?php echo $row[4] ?>">delete </a>
					</td>
					<td class="obj1"> <a href="alter.php?id=<?php echo $row[4]?>">edit </a>
					</td>
					
					
				</tr>
			
			<?php
				endwhile;?>
			</table >
			</body>
		</html>
	</br>
	</br>
	
	
	<?php
	
	
	} 
	
	
	
	
	?>
				</p>
				</div>
			</div>
				<h1 class="cite"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
				</h1></center>

	</body>
</html>
