<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(travel1.jpg);background-height:500px;background-repeat:no-repeat;background-position:center;opacity:1">
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
				<?php
				ERROR_REPORTING(E_PARSE);
				$id=$_GET["id"];
				?>
				<center>
	    <h2 class="obj1"> CANCEL TRIP <h2>
		<form action="booking.php?value=true&id=<?php echo $id;?>" method="post">
		<table>
		<tr>
		<td class="obj1"> ENTER PNR:</td>
		<td><input type="text" name="pnr"/></td>
		</tr>
		<tr>
		<td><input type="submit" name="submit" value="submit"/></td>
		</tr>
		</table>
		</form>
		</center>
				</div>
				<div>
				<h2 class="obj1" > Your Bookings </h2>
				<?php
				$id=$_GET["id"];
				$v=$_GET["value"];
				mysql_connect("localhost","root","");
				mysql_select_db("travel agency");
				if($v==true)
				{
				$pnr=$_POST["pnr"];
				$extract=mysql_query("select mode,source,destin,date,no from booking where pnr='$pnr'");
				while($row=mysql_fetch_array($extract))
				{
				if($row[0]=='train')
				{
				mysql_query("update train set status=status+1 where source='$row[1]' and destin='$row[2]' and date='$row[3]' and tno='$row[4]'");
				}
				else if($row[0]=='flight')
				{
				mysql_query("update flight set status=status+1 where source='$row[1]' and destin='$row[2]' and date='$row[3]' and fno='$row[4]'");
				}
				else
				{
				mysql_query("update cab set status=status+1 where source='$row[1]' and destin='$row[2]' and date='$row[3]' and srno='$row[4]'");
				}
				}
				mysql_query("delete from booking where pnr='$pnr'");
				?>
				<h3 class="obj1" > Success </h3>
				<?php
				}
				$result=mysql_query("select pnr,mode,no,name,destin,source,date,status from booking where email='$id' and status in('Available','Waiting')");
				?>
				<table border=1>
			<?php
			while($row=mysql_fetch_array($result, MYSQL_NUM)):
			?>


				<tr>
					<td class="obj1"> PNR:</br><?php
					echo $row[0];
					?>
					</td>
					<td class="obj1"> MODE:</br><?php
					echo $row[1];
					?>
					</td>
					
					<td class="obj1"> Number:</br><?php
					echo $row[2];
					?>
					</td>
					
					<td class="obj1"> Name:</br><?php
					echo $row[3];
					?>
					</td>
					<td class="obj1"> Destination: </br><?php	echo $row[4];?>
					</td>
					
					<td class="obj1"> Source: </br><?php	echo $row[5];?>
					</td>
					
					<td class="obj1"> Date:</br> <?php	echo $row[6];?>
					</td>
					
					<td class="obj1"> Status: </br><?php	echo $row[7];?>
					</td>
					
				</tr>
			
			<?php
				endwhile;?>
			</table >
				</div>
			</div>
				<h1 class="cite"><center>
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">Sargam-Ryan-Garima</a>
				</h1></center>

	</body>
</html>
