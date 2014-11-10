<?php 
	//establish a connection
	$db=mysql_connect("localhost","root","");
	$db_select=mysql_select_db("shaadi");
?>
<?php 
	$id=$_GET['id']; 
	echo "<h1><center><font color='red'>SUITABLE MATCH</font></center></h1>";
	$query="select gender from userdetails where id=$id";
	$gender_set=mysql_query($query);
	$gender=mysql_fetch_array($gender_set);
	echo "<center><table border='1' style='border-collapse:collapse;'><tr>";
	echo "<td width='200px'><center>Name</center></td><td width='200px'><center>date of birth<center></td><td width='200px'><center>mobile no</center></td><td width='200px'><center>Religion</center></td><br/>";
	echo "</tr>";
	if($gender['gender']=='M')
	{
		$query="select id,name,dob,religion,mobile from userdetails,personal_profile,contact_details where  gender ='F' and id=c_id and id=p_id";
		$match_set=mysql_query($query);
		//echo "<table border='1' style='border-collapse:collapse;'>";
		while($match=mysql_fetch_array($match_set)){
		echo "<tr>";
		$sp_id=$match['id'];
		echo "<td width='200px'><center><a href='match_detail.php?id=$sp_id'>'{$match['name']}'</a></center></td><td width='200px'><center>".$match['dob']."<center></td><td width='200px'><center>".$match['mobile']."</center></td><td width='200px'><center>".$match['religion']."</center></td><br/>";
	    echo "</tr>";
	}
	    echo "</table></center>";
	}
	
    if($gender['gender']=='F')
	{
		$query="select id,name,dob,religion,mobile from userdetails,personal_profile,contact_details where  gender ='M' and id=c_id and id=p_id";
		$match_set=mysql_query($query);
		//echo "<table border='1' style='border-collapse:collapse;'>";
		while($match=mysql_fetch_array($match_set)){
		echo "<tr>";
		$sp_id=$match['id'];
		echo "<td width='200px'><center><a href='match_detail.php?id=$sp_id'>'{$match['name']}'</a></center></td><td width='200px'><center>".$match['dob']."<center></td><td width='200px'><center>".$match['mobile']."</center></td><td width='200px'><center>".$match['religion']."</center></td><br/>";
		echo "</tr>";
	}
	    echo "</table></center>";
	}
?>
<br/><br/><center><a href="home.php">Go Back</a></center>
<?php mysql_close();?>