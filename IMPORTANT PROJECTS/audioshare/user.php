<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AudioShare</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">AudioShare</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<h1> WELCOME <?php ERROR_REPORTING(E_PARSE); $id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#000">
					<h4><center><a style="text-decoration:none;color:#00f" href="viewplaylist.php?id=<?php echo $id ?>">View Playlist</a></center></h4>
				</div>
				
				<div id="tab"style="background-color:#000;">
					<h4><center><a style="text-decoration:none;color:#00f" href="feedback.php?id=<?php echo $id?>">Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#;">
							<h4 class="obj1"> Upload audio </h4> 
							</div>
					<form name="form" action="user.php?value=1&id=<?php echo $id;?>" enctype="multipart/form-data" onsubmit="return validation()" method="post">
						<table>
							<tr>
											<td class="obj1"> Song Title: </td>
											<td> <input type="text" name="title">

							<td>
						</tr>
										<tr>
											<td class="obj1"> Artist: </td>
											<td> <input type="text" name="artist">

							<td>
						</tr>
						
						<tr>
											<td class="obj1"> Audio type: </td>
											<td> <input list="type" name="type">

							<datalist id="type">
							  <option value="Romantic">
							  <option value="Rock">
							  <option value="Slow">
							  <option value="Sad">
							  <option value="Jazz">
							  <option value="Classical">
							</datalist><td>
						</tr>
						
																<tr>
											<td class="obj1"> Description: </td>
											<td> <textarea name="desc" rows="10" cols="30">
										    </textarea></td>
						</tr>
						<tr>
							<td class="obj1">Cover- Art</td>
							<td class="obj1" colspan="4"><input type="file" name="uploadedfile" id="file" ></td>
						</tr>
						<tr>
							<td class="obj1">Upload File</td>
							<td class="obj1" colspan="4"><input type="file" name="uploaded" id="" ></td>
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
$target = "uploadedaudio/";

$target= $target. basename( $_FILES['uploaded']['name']); 

if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) {
    echo "The file ".  basename( $_FILES['uploaded']['name']). 
    " has been uploaded";
	$file=basename($_FILES['uploaded']['name']);
} else{
    echo "There was an error uploading the file, please try again!";
}
?>

<?php
ERROR_REPORTING('E_PARSE');
session_start();
echo $_SESSION['access'];
	mysql_connect("127.0.0.1","root","");
	mysql_select_db("audioshare");
									$t=$_POST['type'];
									$d=$_POST['desc'];
									$a=$_POST['artist'];
									$tit=$_POST['title'];
									$id=$_GET['id'];
									echo $t;
									echo $d;
									echo $a;
									echo $tit;
									
								
									echo $id;
									$x=mysql_query("insert into audio (email,artist,audio_type,description,cover,title,file) values('$id','$a','$t','$d','$pic','$tit','$file')");
									$sea=mysql_query("select id from audio where title='$tit' ");
				                    $v=mysql_fetch_array($sea);
									echo $v[0];
									$ar=array();
									$ar=explode(' ',$tit,strlen($tit));
									
									$c=0;
									$ar[$c];
									while($c < count($ar))
									{
									mysql_query("insert into search(id,keyword) values($v[0],'$ar[$c]') ");
									$c++;
									}

}
										?>
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam,Ryan</p>
	</div>
</div>
</body>
</html>
