<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>

<?php
	$id=$_GET['id'];
	$father_name=$_POST['father_name'];
	$mother_name=$_POST['mother_name'];
	$no_of_sibling=$_POST['no_of_sibling'];
	$native_place=$_POST['native_place'];
    $query = "update family_profile set 
			  father_name = '{$father_name}',
			  mother_name='{$mother_name}',
			  no_of_sibling={$no_of_sibling},
			  native_place='{$native_place}' 
			  where f_id=$id";
	mysql_query($query);
	header('location: home.php');
?>
<?php mysql_close($db); ?>