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
		<h1> Certify</h1>
		<?php
			
			ERROR_REPORTING(E_PARSE);
						$id=$_GET["id"];
						echo $id;
						if($_GET["hello"]==1)
						{
						$cr=$_POST["crop"];
						$s=$_POST["state"];
						$c=$_POST["city"];
						$a=$_POST["address"];
						$date1=$_POST["date1"];
						$date2=$_POST["date2"];
						$id=$_GET["id"];
						echo $id;
								mysql_connect("127.0.0.1","root","");
								mysql_select_db("efarming");
								
								$result=mysql_query("insert into certify(farmer_email,crop,state,city,address,date1,date2,status) values('$id','$cr','$s','$c','$a','$date1','$date2','n')");
									$x=mysql_query("select * from certify where farmer_email='$id' and crop='$cr'");
									$row=mysql_fetch_array($x);
									if($row['req_id']!=NULL || $_row['req_id']!=' ')
									{
									?>
									<p >Your Request had been submitted. And your request id is <?php echo $row['req_id'];?></p>
									<a href="email.php?id=<?php echo $row['farmer_email'];?>&r=<?php echo $row['req_id'];?>"> Email me </a>
									<?php
									}
		}
		?>
			
					<form name="form" action="certify.php?hello=1&id=<?php echo $id;?>" onsubmit="return validation()" method="post">
						<table>
						
						<tr>
							<td class="obj1"> Crop:</td>
							<td> <input list="crop" name="crop">

								<datalist id="crop" >
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
							<td> State:</td>
							<td> <input list="state" name="state">

								<datalist id="state" >
							  <option value="Jammu&kashmir">
							  <option value="Punjab">
							  <option value="UP">
							  <option value="West Bengal">
							  <option value="Gujrat">
							  <option value="Rajasthan">
							  <option value="Maharashtra">
							  <option value="Tamil nadu">
							  <option value="Kerala">
							  <option value="AP">
							  <option value="Assam">

							</datalist><td>
						</tr>
						
						<tr>
							<td> City:</td>
							<td> <input list="city" name="city">

								<datalist id="city" >
							  <option value="Jamnagar">
							  <option value="gurgaon">
							  <option value="pune">
							  <option value="allahabad">
							  <option value="nagpur">
							  <option value="hyderabad">
							  <option value="vellore">
							  <option value="chennai">
							  <option value="jalandhar">
							  <option value="manipur">
							  <option value="bhujagpong">

							</datalist><td>
						</tr>
						
						<tr>
											<td> Address of crop: </td>
											<td><textarea name="address" rows="10" cols="20"></textarea> </td>
						</tr>
						
						
						<tr>
							<td> Examination dates from:</td>
							<td><input type="date" name="date1"></td>
						</tr>
						
						<tr>
							<td> Examination dates to:</td>
							<td><input type="date" name="date2"></td>
						</tr>
				
						<tr>
							<td><input type="submit" name="submit" value="Apply"/></td>
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

