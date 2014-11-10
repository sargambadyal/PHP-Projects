<?php
	$ei=$_GET["id"];
	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	$alter=mysql_query("SELECT * from users where id=$ei");
	$row=mysql_fetch_array($alter);
	$name=$row['name'];
	$email=$row['email'];
	$qualification=$row['qualification'];
	$sex=$row['sex'];
	



$value=$_GET["value"];
if($value==1)
{
	$n=$_POST["name"];
	//$s=$_POST["sex"];
	$q=$_POST["qualifications"];
	$e=$_POST["email"];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("resume");
	
	$edit="UPDATE users SET name='$n', email='$e' , qualification='$q'  WHERE id=$ei";
	echo $edit;
   	mysql_query($edit);
	

}	

?>
<html>
	<body>
	
     edit</br>
		<table border="4">
			<form action ="alter.php?value=1&id=<?php echo $ei?>" method="post" enctype="multipart/form-data"> 
				<tr>
					<td >Name: <br/></td>
					<td colspan="4"><input id="name" type="text" maxlength="19" name="name" value="<?php echo $name?>"/><br/></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="4"><input id="email" type="text" maxlength="34" name="email" value="<?php echo $email?>"/></td>
			
				</tr>
				<tr>
					<td>Qualifications <br/></td>
					<td colspan="4"><input type="textarea"  name="qualifications" value="<?php echo $qualification?>" /><br/></td>
				</tr>					
				<tr>
					<td colspan="2" ><input type="submit" name="myform"  value="submit my form"/></td>
				</tr>
				</form>
			 </table>
	</body>
	
</html>

