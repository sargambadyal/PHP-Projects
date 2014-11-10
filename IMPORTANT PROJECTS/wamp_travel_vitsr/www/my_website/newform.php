<?php
ERROR_REPORTING(E_PARSE);// just show parse errors (syntax only)and dont show invalid index
$value=$_GET["validation"];  // get ke andar name likhte hai na ke id
if($value==1)
{

$n=$_GET["name"];
$a=$_GET["age"];
$l=strlen($n);
if($l<5 || $a>45)
{
echo "acting smart huh";
}
else
{
echo $n;
}
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
			<form id="submit" action ="newform.php" method="get"> <!-- forms id is submit .... ?submit=true ((?validation=1)) to it works as an alternative to hidden..-->
                <input id="valid" type="hidden" name="validation" value="1"/>
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
					<td><input type="file"></td>
				</tr>
				<tr>
			
					<td colspan="2" ><input type="button" onclick="validate()" value="submit my form"/></td>
				</tr>
				</form>
			 </table>
			
		</div>
	</body>
</html>