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
	$confirm=mysql_query(" select * from registrations where email='$e'");
		
		$row=mysql_fetch_array($confirm);
		
			?>
			<center>
			<h1 style="color:#abc">Congratulations! You are successfully registered!</h1>
			<h1>
			<a href="email.php?id=<?php echo $row['email']?>"></br> Receive an email!</a></h1>
			</center>
			<?php
	
	
}
?>
<html>
	
	<body>
	 <head>

		<title>VIT SOUNDING ROCKET</title>
		<meta name="description" content="Online registration" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="VIT sounding rocket" />
		<link rel="stylesheet" type="text/css" href="sheet.css"/>
	 </head>

   <body id="back" style="background-image:url(back.png);background-attachment:fixed;opacity:1">

   <a href="http://www.facebook.com/VitSoundingRocket" target="_blank"> <img class="image1"src="fb.png"></a>
		<div id="wrapper" style="height:800px;" >

			<center><img src="logo.png"/></center>
			</br>
			<font color="#cc90ff" size=5px;><marquee direction="left" loop="20" width="90%">Exam Date:10-08-2012 &nbsp &nbsp &nbspLast Date for Registration:7-08-2012 &nbsp &nbsp &nbsp Limited Registrations</marquee></font>
          </br>
			<center>
	<h2 class="obj1"> REGISTRATIONS<h2></center>
	<form action="index.php?valid=true" method="post">
		<center>
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
				<td style="color:#abc;"> <input type="radio" name="year" value="1" checked="checked"/>1 <input type="radio" name="year" value="2"/> 2 </td>
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
		</center>
	</form>
	<center>
	<h2 class="obj1"> GENERAL RULES <h2>
	</center>
			<p >

			<ul>

			   <li class="obj1" style="font-size:15px;">Students are not permitted to bring any unauthorized aids into the examination, including electronic devices of ANY kind, unless otherwise stated. This includes CELL PHONES and iPODS. Possession is punishable under the Code of Behaviour on Academic Matters.</li>
			   <li class="obj1"style="font-size:15px;">Bags, books pencil cases and ALL notes are to be deposited in areas designated by the Chief Presiding Officer and are not to be taken to the examination desk or table. If pencil cases are found on desks, they will be searched.</li>
			   <li class="obj1"style="font-size:15px;">Candidates must not communicate with one another in any manner whatsoever during the examination.</li>
			   <li class="obj1"style="font-size:15px;">Candidates may not leave the examination room unescorted for any reason, including visiting the washroom.</li>
			   <li class="obj1"style="font-size:15px;">All writing must cease at the end of the examination</li>
			   <li class="obj1"style="font-size:15px;">Violation of any of the given rules may lead to disqualification</li>

			</ul>

			</p>

			</div>
			<center>
		<h1 style="font-family: verdana; font-size:13px;color:#048123">
			   copyrite &copy;  2012<a href="http://www.facebook.com/sargam.badyal">VITSR</a>
			   </h1></center>
	</body>
</html>
