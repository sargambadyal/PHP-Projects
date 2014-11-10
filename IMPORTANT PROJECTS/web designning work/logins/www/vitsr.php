<?php
session_start();
ERROR_REPORTING(E_PARSE);
$value=$_GET["valid"]; 
if($value==true)
{

	$s=$_POST["name"];
	$t=$_POST["regno"];
	$u=$_POST["year"];
	$v=$_POST["branch"];
	$e=$_POST["email"];
	$n=$_POST["phone"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("login");
	
    $result=mysql_query("insert into registrations (name,regno,year,branch,email,phone) values ('$s','$t','$u','$v','$e','$n')");
	
	/*$confirm=mysql_query(" select * from registrations where email='$e'");
		
		$row=mysql_fetch_array($confirm);
		
			?>
			<a href="vitsr.php?id=<?php echo $row['email']?>"></br> I confirm my email.</a>
			<?php
	*/
	
}
?>
<html>
	
	<body>
	 <head>

		<title>company</title>
		<meta name="description" content="Online registration" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="VIT sounding rocket" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>

   <body id="back" style="background-image:url(back.png);opacity:1">

   
		<div id="wrapper" >

			<div class="div1">
				<img class="image" src="vitf.png"/>
			</div>
			<div class="div2" ">
				<img class="image" src="gravilogo.png"/>
			</div>
			<div class="div3">
				<img class="image" src="ipl.png"/>
			</div>
			<div class="div4" >
			<center><img src="3.png"/></center>
			</br>
			</br>
			</br>
			</br>
	<h1> WELCOME TO OUR SIGN UP<h1>
	<form action="vitsr.php?valid=true" method="post">
		<table>
			<tr>
				<td class="obj1"> FIRST NAME:</td>
				<td> <input type="text" name="name"/></td>
			</tr>
			
			<tr>
				<td class="obj1"> REGISTRATION NUMBER:</td>
				<td> <input type="text" name="regno"/></td>
			</tr>
			
			<tr>
				<td class="obj1"> YEAR:</td>
				<td> <input type="radio" name="year" value="1" checked="checked"/>1 <input type="radio" name="year" value="2"/> 2 </td>
			</tr>
			
			<tr>
		    <td class="obj1"> SCHOOL:</td>
		    <td colspan="4" name="branch"> <select>
							<option>SCSE </option>
							<option>SITE</option>
							<option>SENSE</option>
							<option>SELECT</option>
							<option>SMBS</option>
							<option>SBST</option>
							<option>VITBS</option>
							
						</select>
				</td>		
			</tr>
			<tr>
				<td class="obj1"> EMAIL </td>
				<td><input type="text" value="example@abc.com" name="email"/></td>
			</tr>
			
			<tr>
				<td class="obj1"> PHONE NUMBER</td>
				<td><input type="int" name="phone"/></td>
			</tr>
			<tr>
				<td><center><input type="submit" name="submit"/></center></td>
			</tr>
		</table>
	</form>
	
	
	</body>
</html>
