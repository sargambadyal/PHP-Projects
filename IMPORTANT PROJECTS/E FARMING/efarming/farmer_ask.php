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
		<h1> WELCOME <?php ERROR_REPORTING('E_PARSE'); $id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="home.php?id=<?php echo $id;?>">What crop to grow?</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="farmer_buy.php?id=<?php echo $id;?>">Buy products</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="#">Ask Expert</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_sell.php?id=<?php echo $id;?>">Sell product</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="feedback.php?id=<?php echo $id;?>">Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#ddcc00;">
							<h4 class="obj1"> Ask Our experts</h4> 
							</div>
					<form name="form" action="farmer_ask.php?value=1&id=<?php echo $id;?>" onsubmit="return validation()" method="post" enctype="multipart/form-data">
						<table>
						<tr>
							<td class="obj1"> Choose Problem :</td>
							<td> <input list="problem" name="type">

								<datalist id="problem">
							  <option value="Irrigation">
							  <option value="Harvesting">
							  <option value="Crop disease">
							  <option value="Fertilization">
							  <option value="Water logging">
							  <option value="Cultivation problem">

							</datalist><td>
										</tr>
										<tr>
											<td class="obj1"> Description: </td>
											<td> <textarea name="desc" rows="10" cols="30">
										    </textarea>
						</tr>
						<tr>
							<td class="obj1">Upload File</td>
							<td class="obj1" colspan="4"><input type="file" name="uploadedfile" id="file" ><td>
						</tr>
						
						
						<tr>
							<td><input type="submit" name="submit"/></td>
						</tr>
					</table>
					</form>
										<?php
										if($_GET["value"]==1)
										{
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
	$pic=basename($_FILES['uploadedfile']['name']);
} else{
    echo "There was an error uploading the file, please try again!";
}
?> <img src="uploads/<?php echo basename($_FILES['uploadedfile']['name']);?>">
<?php
ERROR_REPORTING('E_PARSE');
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("efarming");
									$t=$_POST['type'];
									$d=$_POST['desc'];
									$id=$_GET['id'];
									echo $t;
									echo $d;
									$y=mysql_query("select * from farmer where email='$id'");
									$row=mysql_fetch_array($y);
									$phone=$row['phone'];
									echo $phone;
									echo $id;
									$x=mysql_query("insert into query (farmer_email,farmer_phone,type,description,image) values('$id',$phone,'$t','$d','$pic')");
									

}
										?>
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
