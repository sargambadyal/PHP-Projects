<?php
session_start();
ERROR_REPORTING(E_PARSE);
$id=$_GET["id"];
$value=$_GET["value"];



if($value==true):
	
	echo "lol";
			$r=mktime()."_".$_FILES["myresume"]["name"];
		

			print_r($_FILES);;
			$resume="user_upload/".$r;
			echo $resume;
			if(move_uploaded_file($_FILES['myresume']['tmp_name'],"user_upload/".$r )):
				echo "LOL";
			endif;
	
	
	
			$p=mktime()."_".$_FILES['myphoto']['name'];
		
	
			$photo="user_upload/".$p;
			echo $photo;
			if(move_uploaded_file($_FILES['myphoto']['tmp_name'],"user_upload/".$p )):
				echo "LOL";
			endif;
			
			mysql_connect("localhost","root","");
			mysql_select_db("signup");

			$confirm=mysql_query(" update users set resume='$resume',photo='$photo' where id='$id'");
		
			$row=mysql_fetch_array($confirm);
		
			echo $row['resume'];
			echo $row['photo'];
		
			



	endif;


?>
<html>
	<body>
	    <h1> WELCOME TO YOUR PROFILE  <h1>
		<form action="user_profile.php?value=true" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td> YOUR PHOTO:</td>
					<td><input type="file" name="myphoto"/></td>
				</tr>
				<tr>
					<td>YOUR RESUME:</td>
					<td><input type="file" name="myresume"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>