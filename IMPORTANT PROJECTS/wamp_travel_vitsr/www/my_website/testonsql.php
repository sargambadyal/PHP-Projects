<?php 
ERROR_REPORTING(E_PARSE);// just show parse errors (syntax only)and dont show invalid index
$value=$_GET["valid"];  // get ke andar name likhte hai na ke id

if($value==true)
{

	$s=$_POST["sex"];
	$q=$_POST["qualifications"];
	$e=$_POST["email"];
	$n=$_POST["name"];//"post" is header n "get" is url
	$l=strlen($n);
	if($l<5)
		{
		$message= "acting smart huh";
		}
	else
		{
		echo $n;
		}

	//($_FILES);
	$resume=$_FILES["myresume"]["type"];
	if ((($_FILES["myresume"]["type"] == "image/doc")
	|| ($_FILES["myresume"]["type"] == "application/pdf")
	|| ($_FILES["myresume"]["type"] == "text/plain"))
	&& ($_FILES["myresume"]["size"] < 20000))
	{
		if ($_FILES["myresume"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["myresume"]["error"] . "<br />";
			}
		else
		{
			echo "Upload: " . $_FILES["myresume"]["name"] . "<br />";
			echo "Type: " . $_FILES["myresume"]["type"] . "<br />";
			echo "Size: " . ($_FILES["myresume"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["myresume"]["tmp_name"] . "<br />";

			if (file_exists("upload/" . $_FILES["myresume"]["name"]))
				{
				echo $_FILES["myresume"]["name"] . " already exists. ";
				}
			else
				{
				$r=mktime()."_".$_FILES['myresume']['name'];
				echo $r;
				print_r($_FILES['myresume']);
				$filename="upload/".$r;
				echo $filename;
				if(move_uploaded_file($_FILES['myresume']['tmp_name'],"upload/".$r )):
					echo "LOL";
				endif;
				//echo $r;
				}
			}
		}
	else
	{
	echo "Invalid file";
	}

	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	$sql="insert into users (name,email,qualification,sex,resume_doc) values ('$n','$e','$q','$s','$r')";

	mysql_query($sql);


	$extract=mysql_query("SELECT * from users");
	?>

	<table border=1>
	<?php
	while($row=mysql_fetch_array($extract)):
	?>


			<tr>
				<td> Name: </td>
				<td> <?php
				echo $row[0];
				?>
				</td>
				<td> email: </td>
				<td> <?php
				echo $row[1];
				?>
				</td>
				<td> qualification: </td>
				<td> <?php
				echo $row[2];
				?>
				</td>
				<td> sex: <?php	echo $row[3];?>
				</td>
				<td> <a href="upload/<?php
				echo $row[5] ?>"> resume: </a>
				</td>
				
			</tr>
		
		<?php
		echo "<br/>";
		endwhile;?>
		<table border=1>
		<?php




	}
?>

<html>
	<head>
	<script type="text/javascript">
	function validate(){
		var myname=document.getElementById("name").value.length;
		
		
		if ( myname <=5)
		{
			alert("name too short");
		}
		
		else
		{
			document.getElementById("submit").submit();
		}
		
		}
	</script>
	
	
	</head>
	<body>
	</div>
		<table border="4">
			<form id="submit" action ="testonsql.php?valid=true" method="post" enctype="multipart/form-data"> 
				<tr>
					<td >Name: <br/></td>
					<td colspan="4"><input id="name" type="text" maxlength="19" name="name" value="first name"/><br/></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="4"><input id="email" type="text" maxlength="34" name="email" value="example@abc.com"/></td>
			
				</tr>
				<tr>
				<td >Qualifications <br/></td>
					<td colspan="4"><input type="textarea"  name="qualifications" /><br/></td>
				</tr>
				<tr>
					<td >sex:</td>
					<td colspan="4"><input type="radio" name="sex" value="m" checked="checked"/>m <input type="radio" name="sex" value="f"/>f</td>
				</tr>
					
					
				<tr>
					<td><input type="file" name="myresume" ></td>
				</tr>
				<tr>
			
					<td colspan="2" ><input type="button" onclick="validate()" value="submit my form"/></td>
				</tr>
				</form>
			 </table>

		</div>
	</body>
</html>
