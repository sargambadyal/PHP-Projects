<?php
session_start();
if($_SESSION['access']==1)
   {
       echo "new admin";
	$_SESSION['valid']=1;
    echo "new admin";
	?>
	
	<a href="new_admin.php"> add new administrator </a>
	   <?php
   
   
		mysql_connect("localhost","root","");
		mysql_select_db("signup");

		$extract=mysql_query("SELECT * from users");
			?>
		<html>
		<body>
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
					<td> sex: </td>
					<td> <?php
					echo $row[2];
					?>
					</td>
					<td> username: <?php	echo $row[3];?>
					</td>
					<td> password <?php	echo $row[4];?>
					</td>
					<td> id: <?php	echo $row[5];?>
					</td>
					<td> <a href="delete.php?id=<?php echo $row['5'] ?>">delete </a>
					</td>
					<td> <a href="alter.php?id=<?php echo $row['5']?>">edit </a>
					</td>
					
					
				</tr>
			
			<?php
				endwhile;?>
			</table >
			</body>
		</html>
	</br>
	</br>
	
	
	<?php
	
	
	} 
	
	
	
	
	?>