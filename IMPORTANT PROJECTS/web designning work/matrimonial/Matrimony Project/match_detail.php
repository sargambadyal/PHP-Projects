<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php include("functions.php"); ?>
<?php
	$sp_id=$_GET['id'];
	echo "<center><h1><font color='red'>MATCH DETAILS</font></h1></center>";
	$user=get_user_details($sp_id);
	
	//table1
	echo "<center><table border='1' style='border-collapse:collapse';>";
	echo "<tr><td width='200px'><center>Name</center></td width='200px'><td width='200px'><center>".$user['name']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Gender</center></td width='200px'><td width='200px'><center>".$user["gender"]."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Date of Birth<center></td width='200px'><td width='200px'><center>".$user['dob']."</center></td width='200px'></tr>";
	echo "</table></center><br />";
	
	$personal=get_personal_details($sp_id);
	//table2
	echo "<center><table border='1' style='border-collapse:collapse';>";
	echo "<tr><td width='200px'><center>Height</center></td width='200px'><td width='200px'><center>".$personal['height']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Weight</center></td width='200px'><td width='200px'><center>".$personal['weight']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Religion<center></td width='200px'><td width='200px'><center>".$personal['religion']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Country<center></td width='200px'><td width='200px'><center>".$personal['country']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Mother Tongue<center></td width='200px'><td width='200px'><center>".$personal['mother_tongue']."</center></td width='200px'></tr>";
	echo "</table></center><br />";
	

	$contact=get_contact_details($sp_id);
	//table3
	echo "<center><table border='1' style='border-collapse:collapse';>";
	echo "<tr><td width='200px'><center>Email</center></td width='200px'><td width='200px'><center>".$contact['email']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Mobile</center></td width='200px'><td width='200px'><center>".$contact['mobile']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Address<center></td width='200px'><td width='200px'><center>".$contact['address']."</center></td width='200px'></tr>";
	echo "</table></center><br />";
	
	$family=get_family_details($sp_id);
	//table2
	echo "<center><table border='1' style='border-collapse:collapse';>";
	echo "<tr><td width='200px'><center>Father's Name</center></td width='200px'><td width='200px'><center>".$family['father_name']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Mother's Name</center></td width='200px'><td width='200px'><center>".$family['mother_name']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>No of Siblings<center></td width='200px'><td width='200px'><center>".$family['no_of_sibling']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Native Place<center></td width='200px'><td width='200px'><center>".$family['native_place']."</center></td width='200px'></tr>";
	echo "</table></center><br />";
	
	$job=get_job_details($sp_id);
	//table3
	echo "<center><table border='1' style='border-collapse:collapse';>";
	echo "<tr><td width='200px'><center>Qualification</center></td width='200px'><td width='200px'><center>".$job['qualification']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Occupation</center></td width='200px'><td width='200px'><center>".$job['occupation']."</center></td width='200px'></tr>";
	echo "<tr><td width='200px'><center>Salary<center></td width='200px'><td width='200px'><center>".$job['salary']."</center></td width='200px'></tr>";
	echo "</table></center><br />";
?>
<center><a href="home.php">Go Back</a></center>
<?php mysql_close();?>