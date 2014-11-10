<html>
	 <head>

		<title>TRAVEL AGENCY</title>
		<meta name="description" content="Online booking" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="sargam" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>


	   <body style="background-image:url(back1.jpg);background-height:500px;background-position:center;opacity:1">

			<div id="wrapper"style="height:3400px">
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
    
	?>
				<h2 class="obj1"> Add Train</h2>
	
	
				<center>
		<table>
			<form action ="trains.php?value=1" method="post" enctype="multipart/form-data"> 
				<tr>
					<td class="obj1" >Number: <br/></td>
					<td class="obj1" colspan="4"><input type="text" name="tno" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Name: <br/></td>
					<td class="obj1" colspan="4"><input type="text" name="tname" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Source: <br/></td>
					<td class="obj1" colspan="4"><input  type="text" name="source" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Destination: <br/></td>
					<td class="obj1" colspan="4"><input type="text"  name="destin" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Arival: <br/></td>
					<td class="obj1" colspan="4"><input type="time" name="arival" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Departure: <br/></td>
					<td class="obj1" colspan="4"><input type="time" name="dept" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Date: <br/></td>
					<td class="obj1" colspan="4"><input type="date" name="date" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Class_a1 cost<br/></td>
					<td class="obj1" colspan="4"><input type="number" name="class_a1" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >class_a2 cost<br/></td>
					<td class="obj1" colspan="4"><input type="number" name="class_a2" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >class_a3 cost <br/></td>
					<td class="obj1" colspan="4"><input type="number" name="class_a3" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >class_s cost<br/></td>
					<td class="obj1" colspan="4"><input type="number" name="class_s" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Day: <br/></td>
					<td class="obj1" colspan="4"><input type="day" name="day" /><br/></td>
				</tr>
				<tr>
					<td class="obj1" >Status: <br/></td>
					<td class="obj1" colspan="4"><input type="number" name="status"/><br/></td>
				</tr>				
				<tr>
					<td class="obj1" colspan="2" ><input type="submit" name="myform"  value="Add New"/></td>
				</tr> 
				</form>
			 </table>
			 </center>
				<p class="obj2">
				
	   <?php
   
   
		mysql_connect("localhost","root","");
		mysql_select_db("travel agency");
		$v=$_GET["value"];
		if($v==1)
		{
	$tno1=$_POST['tno'];
	$tname1=$_POST['tname'];
	$source1=$_POST['source'];
	$destin1=$_POST['destin'];
	$arival1=$_POST['arival'];
	$dept1=$_POST['dept'];
	$date1=$_POST['date'];
	$class_a1=$_POST['class_a1'];
	$class_a2=$_POST['class_a2'];
	$class_a3=$_POST['class_a3'];
	$class_s=$_POST['class_s'];
	$day1=$_POST['day'];
	$status1=$_POST['status'];
		mysql_query("insert into train(tno,tname,source,destin,arival,dept,class_a1,class_a2,class_a3,class_s,date,day,status) values($tno1,'$tname1','$source1','$destin1','$arival1','$dept1',$class_a1,$class_a2,$class_a3,$class_s,'$date1','$day1',$status1)");
		}
		$extract=mysql_query("SELECT srno,tno,tname,source,destin,arival,dept,date,status from train");
			?>
		<html>
		<body>
			<table border=1>
			<?php
			while($row=mysql_fetch_array($extract)):
			?>


				<tr>
					<td class="obj1"> Sr.No:</br><?php
					echo $row[0];
					?>
					</td>
					<td class="obj1"> Number:</br><?php
					echo $row[1];
					?>
					</td>
					<td class="obj1"> Name:</br><?php
					echo $row[2];
					?>
					</td>
					<td class="obj1"> Source:</br><?php
					echo $row[3];
					?>
					</td>
					<td class="obj1"> Destination: </br><?php	echo $row[4];?>
					</td>
					<td class="obj1"> Arival: </br><?php	echo $row[5];?>
					</td>
					<td class="obj1"> Departure: </br><?php	echo $row[6];?>
					</td>
					<td class="obj1"> Date: </br><?php	echo $row[7];?>
					</td>
					<td class="obj1"> Status:</br> <?php	echo $row[8];?>
					</td>
					<td class="obj1"> <a href="deletet.php?id=<?php echo $row[0] ?>">delete </a>
					</td>
					<td class="obj1"> <a href="altert.php?id=<?php echo $row[0]?>"> edit </a>
					</td>
					
					
				</tr>
			
			<?php
				endwhile;?>
			</table >
			</body>
		</html>
	</br>
	</br>
	
				</p>
				</div>
			</div>

	</body>
</html>
