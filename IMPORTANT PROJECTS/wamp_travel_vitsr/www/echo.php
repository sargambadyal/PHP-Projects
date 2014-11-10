<?php
	mysql_connect("localhost","root","");
	mysql_select_db("travel agency");
/*$confirm=mysql_query("select * from driver");
	$x=mysql_query("select count(*) from drivers");
	$c=mysql_fetch_array($x);
	while($c[0]!=0)
	{
	$row=mysql_fetch_array($confirm);
		echo(123);
		echo $row['NAME'];
		*/
		
		$result = mysql_query("SELECT name,cabno FROM driver");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    echo ("name="); 
	echo $row[0];
	echo ("\n id=");
	echo $row[1];
	?>
	<h1>
			<a href="echo.php?id=<?php echo $row[1]?>">select </a></h1>
			<?php
	
	?>
	</br>
	<?php
	
	}
?>