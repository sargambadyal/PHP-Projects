<html>
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
		<h1> WELCOME <?php ERROR_REPORTING(E_PARSE);$id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer.php?id=<?php echo $id;?>">What crop to grow?</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="farmer_buy.php?id=<?php echo $id;?>">Buy products</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_ask.php?id=<?php echo $id;?>">Ask Expert</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="#">Sell product</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="feedback.php?id=<?php echo $id;?>">Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#dd0000;">
							<h4 > Deal crops</h4> 
							</div>
							<?php
			
			ERROR_REPORTING(E_PARSE);
						$id=$_GET["id"];
						if($_GET["hello"]==1)
						{
						$r=$_POST["req_id"];
						$s=$_POST["crop"];
						$c=$_POST[""];
						$a=$_POST["address"];
						$date1=$_POST["date1"];
						$date2=$_POST["date2"];
						$id=$_GET["id"];
						echo $id;
								mysql_connect("127.0.0.1","root","");
								mysql_select_db("efarming");
								
								$result=mysql_query("insert into certify(farmer_email,crop,state,city,address,date1,date2,status) values('$id','$cr','$s','$c','$a','$date1','$date2','n')");
									$x=mysql_query("select * from certify where farmer_email='$id' and req_id='$r'");
									if(mysql_fetch_array($x))
									{
									?>
									<p >Your Request had been submitted. And your request id is <?php echo $row['req_id'];?></p>
									<a href="email.php?id=<?php echo $row['farmer_email'];?>&r=<?php echo $row['req_id'];?>"> Email me </a>
									<?php
									}
		}
		?>
							<script>
function radiocheck()
									
									var ddl = document.getElementById('h');
									   ddl.disabled = false;
									   ddl.parentElement.disabled = false; 
</script>
							<a href="certify.php?id=<?php echo $id;?>">Certify Crops</a>
					<form name="myform" action="farmer_sell.php?id=<?php echo $id;?>&hello=1" onsubmit="return validation()" method="post">
						<table>
						
						<tr>
											<td> Request ID:</td>
											<td><input type="number" name="req_id" </td> 
											<td><input type="button" value="Enable yes for certification" onclick ="radiocheck()"/></td>
						</tr>						
						<tr>
							<td class="obj1"> Crop:</td>
							<td> <input list="crop">

								<datalist id="crop">
							  <option value="Rice-Basmati">
							  <option value="Rice-Pond">
							  <option value="Wheat">
							  <option value="Ragi">
							  <option value="Coffee">
							  <option value="Tea">
							  <option value="Mustard">
							  <option value="Sesame seeds">
							  <option value="Groundnut">
							  <option value="Potato">
							  <option value="Sugarcane">

							</datalist><td>
						</tr>
						<tr>
											<td class="obj1"> Description: </td>
											<td><textarea name="desc" rows="10" cols="20"></textarea> </td>
						</tr>
						
						
						<tr>
											<td class="obj1"> Quantity(in kgs):</td>
											<td><input type="number" name="quantity"</td>
						</tr>
						
						<tr>
											<td class="obj1"> Proposed Cost(in rupees):</td>
											<td><input type="number" name="cost"</td>
						</tr>
						
						<tr>
											<td class="obj1"> Location of crops:</td>
											<td><input type="text" name="location"</td>
						</tr>
						<tr> 
						<td> Certification:</td>
						<td> Yes <input type="radio" name="certify" value="yes" id="h" disabled="disabled"/>No <input type="radio" name="certify" value="no"/></td>
						</tr>
						<tr>
							<td><input type="submit" name="submit" /></td>
						</tr>
					</table>
					</form>
			
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
