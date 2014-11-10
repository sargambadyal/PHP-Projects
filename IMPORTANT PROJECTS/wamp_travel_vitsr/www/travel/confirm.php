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
<?php
ERROR_REPORTING(E_PARSE);
$name=$_GET["name"];
$v=$_GET["v"];
$id=$_GET["id"];
$d=$_GET["d"];
$s=$_GET["s"];
$m=$_GET["mode"];
$date=$_GET["date"];
$class=$_GET["class"];
$cost=$_GET["cost"];
$arival=$_GET["arival"];
$depart=$_GET["depart"];
$num=$_GET["num"];

mysql_connect("localhost","root","");
mysql_select_db("travel agency");

if($m=='train')
{
$stat = mysql_query("SELECT status from train where tno='$num'and source='$s' and destin='$d'and date='$date'");
echo $stat;
while($row=mysql_fetch_array($stat)):
$state=$row[0];
echo $state;
endwhile;

if($state>5)
{
$avail="Available";
}
else if($state>0)
{
$avail="Waiting";
}
else
$avail="Sorry no seats available";

$select=mysql_query("update train set status=status-1 where tno='$num'and source='$s' and destin='$d'and date='$date' and status>0");
mysql_query("insert into booking(mode,no,name,email,destin,source,arival,depart,date,status) values ('$m','$num','$v','$id','$d','$s','$arival','$depart','$date','$avail')");
mysql_query("update users set bookings=bookings+1 where email='$id'");
?>
<p class="obj2">Train Booking Confirmation</p>
<?php
}
else if($m=='flight')
{
$stat = mysql_query("SELECT status from flight where fno='$num'and source='$s' and destin='$d'and date='$date'");
echo $stat;
while($row=mysql_fetch_array($stat)):
$state=$row[0];
echo $state;
endwhile;

if($state>0)
{
$avail="Available";
}
else
$avail="Sorry no seats available";

$select=mysql_query("update flight set status=status-1 where fno='$num'and source='$s' and destin='$d'and date='$date' and status>0");
mysql_query("insert into booking(mode,no,name,email,destin,source,arival,depart,date,status) values ('$m','$num','$v','$id','$d','$s','$arival','$depart','$date','$avail')");
mysql_query("update users set bookings=bookings+1 where email='$id'");
?>
<p class="obj2">Flight Booking Confirmation</p>
<?php
}
else
{
$stat = mysql_query("SELECT status from cab where srno='$num'and source='$s' and destin='$d'and date='$date'");
while($row=mysql_fetch_array($stat)):
$state=$row[0];
echo $row[0];
endwhile;

if($state==1)
{
$avail="Available";
}
else
{
$avail="Service Currently unavailable";
}
$select=mysql_query("update cab set status=0 where srno='$num'and source='$s' and destin='$d'and date='$date'");
mysql_query("insert into booking(mode,no,name,email,destin,source,arival,depart,date,status) values ('$m','$num','$v','$id','$d','$s','$arival','$depart','$date','$avail')");
mysql_query("update users set bookings=bookings+1 where email='$id'");
?>
<p class="obj2">Cab Booking Confirmation</p>
<?php
}
?>
<div>
<center>
			<table border=1>
				<tr>
					<td class="obj1"> Name: <?php
					echo $name;
					?>
					</td>
					
					<td class="obj1"> Email: <?php
					echo $id;
					?>
					</td>
				</tr>
				<tr>
					<td class="obj1"> Source:<?php
					echo $s;
					?>
					</td>
					<td class="obj1"> Destination:
					<?php	echo $d;?>
					</td>
					
					<td class="obj1"> Cost: 
					<?php	echo $cost;?>
					</td>
				</tr>
				<tr>
					<td class="obj1"> <?php echo $m; ?> Number:<?php
					echo $num;
					?>
					</td>
					<td class="obj1"> <?php echo $m; ?> Name:
					<?php	echo $v;?>
					</td>
					
					<td class="obj1"> Class: 
					<?php	echo $class;?>
					</td>
				</tr>
				
				<tr>
					<td class="obj1"> Arrival: <?php	echo $arival;?>
					</td>
					
					<td class="obj1"> Departure: <?php	echo $depart;?>
					</td>
					
					<td class="obj1"> Type of Booking: <?php	echo $avail;?>
					</td>
					
				</tr>
				<td class="obj1"> <a href="mail_confirm.php?v=<?php echo $v;?>&num=<?php echo $num;?>&id=<?php echo $id;?>&mode=<?php echo $m;?>&d=<?php echo $d;?>&s=<?php echo $s;?>&date=<?php echo $date;?>&class=<?php echo $class;?>&name=<?php echo $name;?>&cost=<?php echo $cost;?>&arival=<?php echo $arival;?>&depart=<?php echo $depart;?>&avail=<?php echo $avail;?>"/> Mail me the ticket </a>
					</td>
			</table >
	    </br>
	    </br>
		</center>
		</div>
</body>
</html>	