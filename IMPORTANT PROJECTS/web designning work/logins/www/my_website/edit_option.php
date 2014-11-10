<?php 
ERROR_REPORTING(E_PARSE);// just show parse errors (syntax only)and dont show invalid index
$value=$_GET["valid"];  // get ke andar name likhte hai na ke id
if($value==true)
{
	echo "helloooooo";
	$s=$_POST["sex"];
	$q=$_POST["qualifications"];
	$e=$_POST["email"];
	$n=$_POST["name"];//"post" is header n "get" is url
	
	
				$r=mktime()."_".$_FILES['myresume']['name'];
			
		
				$filename="upload/".$r;
			//	echo $filename;
				if(move_uploaded_file($_FILES['myresume']['tmp_name'],"upload/".$r )):
					echo "LOL";
				endif;
				
	

	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	$sql="insert into users (name,email,qualification,sex,resume_doc) values ('$n','$e','$q','$s','$r')";

	mysql_query($sql);
}
?>	 
	 

<html>
	<body>
	</div>
		<table border="4">
			<form id="submit" action ="edit_option.php?valid=true" method="post" enctype="multipart/form-data"> 
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
			
					<td colspan="2" ><input type="submit"  value="submit my form"/></td>
				</tr>
				</form>
			 </table>

		</div>
	</body>
</html>
