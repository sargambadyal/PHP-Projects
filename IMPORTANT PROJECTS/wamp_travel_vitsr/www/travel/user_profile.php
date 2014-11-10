<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
		
<script type="text/javascript">
function validation()
{
var a = document.form.source.value;
if(a=="")
{
alert("Please Enter Source");
document.form.source.focus();
return false;
}

var b = document.form.destination.value;
if(b=="")
{
alert("Please Enter destination");
document.form.destination.focus();
return false;
}

if((form.mode[0].checked == true))
{
if((form.class[0].checked == false) && (form.class[1].checked == false) && (form.class[2].checked == false) && (form.class[3].checked == false))
{
alert("Class Mismatch!");
return false;
}
}
else if((form.mode[1].checked == true))
{
if((form.class[4].checked == false) && (form.class[5].checked == false))
{
alert("Class Mismatch!");
return false;
}
}

else if((form.mode[2].checked == true))
{
if((form.class[6].checked == false) && (form.class[7].checked == false))
{
alert("Class Mismatch!");
return false;
}
}
else {}
}
</script>
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
<?php
session_start();
ERROR_REPORTING(E_PARSE);
$value=$_GET["value"];
$id=$_GET["id"];
$name=$_GET["name"];
if($value==true)
{
	?>
	<p class="obj2"> Results<p>
	<?php
	$s=$_POST["source"];
	$d=$_POST["destination"];
	$m=$_POST["mode"];
	$date=$_POST["date"];
	$c=$_POST["class"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	$update=mysql_query("insert into temp(mode,source,destin,class,date,email) values('$m','$s','$d','$c','$date','$id')");
	if($m=='train')
	{
	if($c=='class_a1')
	{
	$result = mysql_query("SELECT tname,tno,source,destin,class_a1,arival,dept from train where source='$s' and destin='$d'and date='$date'");
	}
	else if($c=='class_a2')
	{
	$result = mysql_query("SELECT tname,tno,source,destin,class_a2,arival,dept from train where source='$s' and destin='$d'and date='$date'");
	}
	else if($c=='class_a3')
	{
	$result = mysql_query("SELECT tname,tno,source,destin,class_a3,arival,dept from train where source='$s' and destin='$d' and date='$date' ");
	}
	else 
	{
	$result = mysql_query("SELECT tname,tno,source,destin,class_s,arival,dept from train where source='$s' and destin='$d'and date='$date'");
	}
	?>
	<p class="obj2"> Train<p>
	<?php
	}
	else if($m=='flight')
	{
	if($c=='class_e')
	{
	$result = mysql_query("SELECT fname,fno,source,destin,class_e,arival,dept from flight where source='$s' and destin='$d' and date='$date'");
	}
	else
		{
	$result = mysql_query("SELECT fname,fno,source,destin,class_b,arival,dept from flight where source='$s' and destin='$d' and date='$date'");
	}
	?>
	<p class="obj2"> Flights<p>
	<?php
	}
	else
	{
	if($c=='class_ac')
	{
	$result = mysql_query("SELECT cabno,srno,source,destin,class_ac from cab where source='$s' and destin='$d' and date='$date'");
	}
	else
	{
	$result = mysql_query("SELECT cabno,srno,source,destin,class_nac from cab where source='$s' and destin='$d' and date='$date'");
	}
	?>
	<p class="obj2"> Cabs<p>
	<?php
	}
?>
		<html>
		<body>
			<table border=1>
			<?php
			while($row=mysql_fetch_array($result, MYSQL_NUM)):
			?>


				<tr>
					<td class="obj1"> Name:</br><?php
					echo $row[0];
					?>
					</td>
					
					<td class="obj1"> Number:</br><?php
					echo $row[1];
					?>
					</td>
					
					<td class="obj1"> Source:</br><?php
					echo $row[2];
					?>
					</td>
					<td class="obj1"> Destination: </br><?php	echo $row[3];?>
					</td>
					
					<td class="obj1"> Cost: </br><?php	echo $row[4];?>
					</td>
					
					<td class="obj1"> Arrival:</br> <?php	echo $row[5];?>
					</td>
					
					<td class="obj1"> Departure: </br><?php	echo $row[6];?>
					</td>
					
					<td class="obj1"> <a href="confirm.php?v=<?php echo $row[0];?>&num=<?php echo $row[1];?>&id=<?php echo $id;?>&mode=<?php echo $m;?>&d=<?php echo $d;?>&s=<?php echo $s;?>&date=<?php echo $date;?>&class=<?php echo $c;?>&name=<?php echo $name;?>&cost=<?php echo $row[4];?>&arival=<?php echo $row[5];?>&depart=<?php echo $row[6];?>"/> Select </a>
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
				</div>
						<?php
		$v=$_GET["v"];
		$id=$_GET["id"];
		?>
	    <h2 class="obj1" > WELCOME <?php echo $v?> </h2>
				<div id="tab2"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="booking.php?id=<?php echo $id ?>">YOUR BOOKINGS</a></center></h4>
				</div>
				<div id="tab2"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="change_pass.php?id=<?php echo $id ?>">CHANGE PASSWORD</a></h4>
				</div>
				</br>
		<h4 class="obj1"> PLAN YOUR TRIP  </h4> 
		<form name="form" action="user_profile.php?value=true&id=<?php echo $id; ?>&name=<?php echo $v;?>" onsubmit="return validation()" method="post">
			<table>
			<tr>
				<td class="obj1"> SOURCE:</td>
				<td> <input type="text" name="source"/></td>
			</tr>
			<tr>
				<td class="obj1"> DESTINATION: </td>
				<td><input type="text" name="destination"/></td>
			</tr>
			<tr>
				<td class="obj1">MODE OF TRAVEL:</td>
				<td class="obj1" colspan="4"><input type="radio" name="mode" value="train" checked="checked"/>train <input type="radio" name="mode" value="flight"/>flight<input type="radio" name="mode" value="cab"/>Cab</td>
				</tr>
			<tr>
				<td class="obj1"> DATE:</td>
				<td><input type="date" name="date"/></td>
			</tr>
			<tr>
				<td class="obj1"> CLASS:</td>
				<td class="obj1" colspan="4"> TRAIN:<input type="radio" name="class" value="class_a1" checked="checked"/>1AC <input type="radio" name="class" value="class_a2"/>2AC<input type="radio" name="class" value="class_a3"/>3AC<input type="radio" name="class" value="class_s"/>SLEEP | &nbsp &nbsp FLIGHT:<input type="radio" name="class" value="class_b"/>B<input type="radio" name="class" value="class_e"/>E  | &nbsp &nbsp CAB:<input type="radio" name="class" value="class_ac"/>AC<input type="radio" name="class" value="class_NAC"/>NAC</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit"/></td>
			</tr>
		</table>
		</form>
		</div>
	</body>
</html>