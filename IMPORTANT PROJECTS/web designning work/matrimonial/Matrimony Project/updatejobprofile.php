<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>

<?php
	$id=$_GET['id'];
	$qualification=$_POST['qualification'];
	$occupation=$_POST['occupation'];
	$salary=$_POST['salary'];
	echo $id." ".$qualification." ".$occupation." ".$salary;
	
	$query = "update job_profile set qualification = '{$qualification}', occupation='{$occupation}', salary={$salary} where j_id=$id";
	$result=mysql_query($query);
	
?>
<?php mysql_close($db); 
header('location: home.php');
?>
