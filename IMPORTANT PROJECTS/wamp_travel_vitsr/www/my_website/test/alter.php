<?php
	$ei=$_GET["id"];
	mysql_connect("localhost","root","");
	mysql_select_db("signup");
	$alter=mysql_query("SELECT * from users where id=$ei");
	$row=mysql_fetch_array($alter);
	$name=$row['name'];
	$email=$row['email'];
	$status=$row['status'];
	



$value=$_GET["value"];
if($value==1)
{
	$n=$_POST["name"];
	$s=$_POST["status"];
	$e=$_POST["email"];
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("signup");
	
	$edit="UPDATE users SET name='$n', email='$e',status='$s'  WHERE id=$ei";
	//echo $edit;
	
	
   	mysql_query($edit);
	echo "successful";
	
	?>
	</br>
	<a href="admin_approval.php?id=<?php echo $email; ?>"> mail the user </a>
	
	</br></br>
	<a href="editor.php"> go back</a>
	
	<?php
	

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
				<td >STATUS:</td>
				<td colspan="4"><input type="radio" name="status" value="approved" />approved <input type="radio" name="status" value="rejected" checked="checked"/>rejected</td>
				</tr>
			<tr>				
				<tr>
					<td colspan="2" ><input type="submit" name="myform"  value="submit my form"/></td>
				</tr>
				</form>
			 </table>
	</body>
	
</html>

