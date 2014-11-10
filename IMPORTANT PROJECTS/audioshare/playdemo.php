
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AudioShare</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />

<script>
function myFunction(id)
{
alert(id);
var r=document.getElementById("mylike").style.display= 'none';
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
    }
  }
xmlhttp.open("GET","like.php?id=" + id,true);
xmlhttp.send();

}
</script>


</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">Audio Share</a></h2>
			</div>
			<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<div style="width:500;float:left;">
			<?php
ERROR_REPORTING(E_PARSE);
mysql_connect("localhost","root","");
mysql_select_db("audioshare");
$id=$_GET['id'];
$result=mysql_query("select * from audio where id='$id' ");
$row=mysql_fetch_array($result);
//print_r($row);

$file = 'uploadedaudio/' . $row['file'];
$image= 'uploads/' . $row['cover'];


?>
<img src="<?php echo $image?>" width="400px" height="200px"/>
<embed src="<?php
echo $file;
?>" autostart="true" loop="true" height="100px" width="400px" /></br>
<p> Description:</p><?php echo $row['description']?> 
</br>
&nbsp

<?php echo $row['likes']."likes" ?>
<?php if($_COOKIE['like']!=$id)
{?>
<button id="mylike" onclick="myFunction(<?php echo $id?>)">  Like me!! </button> 
<?php }?>
&nbsp
<?php echo $row['views'] ?> Views 
<a href=""><button> SHARE FB </button> </a>
<a href=""><button> Subscribe </button> </a>
<a href="addtoplaylist.php?valid=1&id=<?php echo $id?>&email=<?php echo $_GET['email']?>"><button> Add to playlist </button> </a>
<a href="download.php?id=<?php echo $id?>"><button> Download </button> </a>

	<?php

	$value=$_GET["valid"]; 
		
		$n=$_POST["name"];
		$c=$_POST["comment"];
		$id=$_GET["id"];
		
		mysql_connect("localhost","root","");
		mysql_select_db("audioshare");
		if($value=='yes')
		{
		$result=mysql_query("insert into comments(comment,email,id) values ('$c','$n',$id)");
		mysql_query("update audio set comment=comment+1 where id=$id ");
		}
		if($value=='no')
		$res=mysql_query("update audio set views=views+1 where id=$id ");
		$print=mysql_query("select email,comment from comments where id=$id ");
		while($row=mysql_fetch_array($print)):
		?>
		<table>
		<tr>
		<td class="obj1">Name:<?php echo $row['email'];?></td>
		</tr>
		<tr>
		<td class="obj1">Comment:<?php echo $row['comment'];?></td>
		</tr>
		</table>
		<?php
		endwhile;
		
	?>
		
<h2 class="obj1"> Comments... <h1>
		<form action="playdemo.php?valid=yes&id=<?php echo $id ?>" method="post">
			<table>
				<tr>
					<td class="obj1"> Name/Email: </td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td class="obj1"> Comment: </td>
					<td colspan="4" ><textarea rows="7" cols="25" name="comment"></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
		</div>
		
			<div style="width:700px;height:auto;float:right;">
			<h2> Popular Audio's </h2>
			<?php
   ERROR_REPORTING(E_PARSE);
   
		mysql_connect("localhost","root","");
		mysql_select_db("audioshare");
		
		$extract=mysql_query(" select * from audio ORDER BY likes desc ");
		$c=0;
			?>
			<table>
			<?php
			while(($row=mysql_fetch_array($extract)) && ($c < 5)):
			?>


				<tr>
					 <td class="obj1"> <a href="playdemo.php?valid=no&id=<?php echo $row['id'] ?>"> <img src="uploads/<?php echo $row['cover']?> " width="100px" height="100px"/> </br>
					</td></a>
					<td class="obj1"> 
					</br>TITLE: <?php echo $row['title'];?>
					</br>ARTIST:<?php echo $row['artist'];?>
					</br>GENRE:<?php echo $row['audio_type'];?>
					</br>LIKES:<?php echo $row['likes'];?>
					</br>VIEWS:<?php echo $row['views'];?>
					</td>
				</tr>
			
			<?php
			$c++;
				endwhile;?>
			</table >
		</div>
		
		
		</div>
		
	</div>
		
	<div id="footer">
		<p>Copyright (c) Sargam, Ryan</p>
	</div>
</div>
</body>
</html>
