<?php
session_start();
ERROR_REPORTING(E_PARSE);
$value=$_POST["hidden"];

if($value==1)
	{
		$username=$_POST["username"];
		$password=$_POST["password"];
		
		mysql_connect("localhost","root","");//calling
		mysql_select_db("login");
		
	
		$result=mysql_query("select * from login where user_name='$username' and password='$password' ");
		
		$row=mysql_fetch_array($result);

		if($row['user_name']==$username && $row['password']==$password)// verification
			{
			echo "you r login";
			$_SESSION['access']=true;
			echo "goto:";
		
			?>
			<a href="secret.php?id=<?php echo $row['id']?>">page</a>
			<?php
			//direccted to the other page
			}
		else
			{
			echo "wrong";
			}
	}?>
<html>

	 <head>

		<title>company</title>
		<meta name="description" content="Online competition" />
		<meta name="keywords" content="HTML,CSS" />
		<meta name="author" content="IEEE-VIT" />
		<link rel="stylesheet" type="text/css" href="back.css"/>
	 </head>

   <body id="back" style="background-image:url(matrix3.jpg);opacity:1">

   
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
			<center>
				<form action="user_final.php" method="post">      <!-- the action and method of the form-->
					<table>
						<input type="hidden" name="hidden" value="1"/>
						<tr>
							<td class="obj1"> USERNAME:</td>
							<td><input type="text" name="username"/></td>
						</tr>
						<tr>
							<td class="obj1"> PASSWORD: </td>
							<td><input type="password" name="password" /></td>
						</tr>
						<tr>
						<td>
						</td>
							<td><center> <input type="submit" name="submit"/></center></td>
						</tr>
						<tr>
						<td>
						</td>
							<td><center><a style="color:#abc" href="https://spreadsheets.google.com/spreadsheet/viewform?formkey=dGhCRWMzdHRfS19TeGt2eUYxeW5mYXc6MQ">SIGN UP</a></center></td>
						</tr>
					
					</table>
					
			</form>
			
			</center>
			
		</div>


    </body>

</html>