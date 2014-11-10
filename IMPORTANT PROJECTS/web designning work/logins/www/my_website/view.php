<?php 
ERROR_REPORTING(E_PARSE);
mysql_connect("localhost","root","");
mysql_select_db("resume");

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
				<td> qualification: </td>
				<td> <?php
				echo $row[2];
				?>
				</td>
				<td> sex: <?php	echo $row[3];?>
				</td>
				<td> <a href="upload/<?php
				echo $row[5]; ?>"> resume: </a>
				</td>
				<td> <a href="delete.php?id=<?php echo $row['id'] ?>">delete </a>
				</td>
				<td> <a href="alter.php?id=<?php echo $row['id']?>">edit </a>
				</td>
				<td> id=<?php echo $row[4];?>
				</td>
				
			</tr>
		
		<?php
			endwhile;?>
		</table >
		</body>
	</html>
		