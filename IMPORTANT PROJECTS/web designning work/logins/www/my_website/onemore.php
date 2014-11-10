<?php
//ERROR_REPORTING(E_PARSE);// just show parse errors (syntax only)and dont show invalid index
$value=$_GET["valid"];  // get ke andar name likhte hai na ke id

if($value==true)
{

$n=$_POST["name"];//"post" is header n "get" is url
$a=$_POST["age"];
$l=strlen($n);
if($l<5 || $a>45)
{
$message= "acting smart huh";
}
else
{
echo $n;
}

//($_FILES);
$image=$_FILES["myimage"]["type"];
if($image=="image/gif" || $image=="image/png"|| $image=="image/jpeg"):
echo "lol";
 move_uploaded_file($_FILES["myimage"]["tmp_name"],"upload/sargam.jpg");
endif;




}
?>

<html>
	<head>
	<script type="text/javascript">
	function validate(){
		var myname=document.getElementById("name").value.length;
		//var myemail=document.getElementById("email").value.length;
		var myage=document.getElementById("age").value;
		
		if ( myname <=5)
		{
			alert("name too short");
		}
		
		else if( age >=45)
		{
			alert("too old man");
		}
		
		else
		{
			document.getElementById("submit").submit();
		}
		
		
		/*
		$("document").ready function{
		$("input:text").value().length();
		}
		
		*/
	}
	</script>
	
	
	</head>
	<body>
	</div>
		<table border="4">
			<form id="submit" action ="onemore.php?valid=true" method="post" enctype="multipart/form-data"> 
				<tr>
					<td >Name: <br/></td>
					<td colspan="4"><input id="name" type="text" maxlength="19" name="name" value="first name"/><br/></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td colspan="4"><input id="email" type="text" maxlength="34" name="email" value="example@abc.com"/></td>
			
				</tr>
				<tr>
				<td >Age: <br/></td>
					<td colspan="4"><input id="age" type="text" maxlength="5" name="age" value="age"/><br/></td>
				</tr>
				<tr>
					<td >sex:</td>
					<td colspan="4"><input type="radio" name="sex" value="male" checked="checked"/>male <input type="radio" name="sex" value="female"/>female</td>
				</tr>
					
					
				<tr>
					<td><input type="file" name="myimage" ></td>
				</tr>
				<tr>
			
					<td colspan="2" ><input type="button" onclick="validate()" value="submit my form"/></td>
				</tr>
				</form>
			 </table>
<div style="color:red"><?php echo $message ?> </div>			
		</div>
	</body>
</html>
