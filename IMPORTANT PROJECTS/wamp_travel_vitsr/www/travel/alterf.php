<html>
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
				</div>
				<div>
<?php
	ERROR_REPORTING(E_PARSE);
	$ei=$_GET["id"];
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	$alter=mysql_query("SELECT * from flight where srno='$ei'");
	$row=mysql_fetch_array($alter);
	$fno=$row['fno'];
	$fname=$row['fname'];
	$source=$row['source'];
	$destin=$row['destin'];
	$arival=$row['arival'];
	$dept=$row['dept'];
	$date=$row['date'];
	$status=$row['status'];
	
$value=$_GET["value"];
if($value==1)
{
	$fno1=$_POST['fno'];
	$fname1=$_POST['fname'];
	$source1=$_POST['source'];
	$destin1=$_POST['destin'];
	$arival1=$_POST['arival'];
	$dept1=$_POST['dept'];
	$date1=$_POST['date'];
	$status1=$_POST['status'];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
	
	$edit="UPDATE flight SET fno='$fno1',fname='$fname1',source='$source1',destin='$destin1',arival='$arival1',dept='$dept1',date='$date1',status='$status1'  WHERE srno='$ei'";
   	mysql_query($edit);
	echo "successful";
	?>
	</br></br>
	<a class="obj1" href="flights.php"> Go back</a>
	<?php
	

}	

?>
				</div>
		<center>
		<table>
			<form action ="alterf.php?value=1&id=<?php echo $ei?>" method="post" enctype="multipart/form-data"> 
				<tr>
					<td class="obj1" >Number: <br/></td>
					<td class="obj1" colspan="4"><input type="text" maxlength="19" name="tno" value="<?php echo $fno?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Name: <br/></td>
					<td class="obj1" colspan="4"><input type="text" maxlength="19" name="tname" value="<?php echo $fname?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Source: <br/></td>
					<td class="obj1" colspan="4"><input  type="text" maxlength="19" name="source" value="<?php echo $source?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Destination: <br/></td>
					<td class="obj1" colspan="4"><input type="text" maxlength="19" name="destin" value="<?php echo $destin?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Arival: <br/></td>
					<td class="obj1" colspan="4"><input type="time" maxlength="19" name="arival" value="<?php echo $arival?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Departure: <br/></td>
					<td class="obj1" colspan="4"><input type="time" maxlength="19" name="dept" value="<?php echo $dept?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Date: <br/></td>
					<td class="obj1" colspan="4"><input type="date" maxlength="19" name="date" value="<?php echo $date?>"/><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Status: <br/></td>
					<td class="obj1" colspan="4"><input type="number" maxlength="19" name="status" value="<?php echo $status?>"/><br/></td>
				</tr>				
				<tr>
					<td class="obj1" colspan="2" ><input type="submit" name="myform"  value="submit my form"/></td>
				</tr>
				</form>
			 </table>
			 </center>
			 </div>
	</body>
	
</html>

