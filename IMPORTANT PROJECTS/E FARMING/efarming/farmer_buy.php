<html xmlns="http://www.w3.org/1999/xhtml">
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
		<h1> WELCOME <?php error_reporting('E_PARSE'); $id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer.php?id=<?php echo $id;?>">What crop to grow?</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="#.php">Buy products</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_ask.php?id=<?php echo $id;?>">Ask Expert</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_sell.php?id=<?php echo $id;?>">Sell product</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="feedback.php?id=<?php echo $id;?>">Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#318000;">
							<h4 class="obj1"> Buy Products </h4> 
							</div>
					<table border="1">
					<tr> <th> Product </th> <th> Category</th> <th> Cost(per kg/per item) </th></tr>
					<tr> 
						<td>
						<h4> HYV wheat seeds </h4>
						<img src="images/wheat.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Seeds </h4>
						</td>
						<td>
						<h4> Rs:50/kg </h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					<tr> 
						<td>
						<h4> Thresher</h4>
						<img src="images/thresher.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Machine </h4>
						</td>
						<td>
						<h4> Rs:27,899</h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					<tr> 
						<td>
						<h4> Tractor </h4>
						<img src="images/tractor.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Machine </h4>
						</td>
						<td>
						<h4> Rs:1,00,000</h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					<tr> 
						<td>
						<h4> Learn Computer </h4>
						<img src="images/computer.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Course/books</h4>
						</td>
						<td>
						<h4> Rs:230 </h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					<tr> 
						<td>
						<h4> Ajanta Fertization Manure</h4>
						<img src="images/manure.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Chemical</h4>
						</td>
						<td>
						<h4> Rs:120/kg </h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					<tr> 
						<td>
						<h4> LIC KISAN SURAKSHA PLAN</h4>
						<img src="images/insurance.jpg" width="100px" height="70px">
						</td>
						<td>
						<h4> Insurance</h4>
						</td>
						<td>
						<h4> NA *tearms&conditions</h4><a href="#"/> Buy </a>
						</td>
					</tr>
					
					</table>
			
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
