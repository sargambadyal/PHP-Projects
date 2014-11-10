<?php
	function get_job_details($id)
	{
		$job_set=mysql_query("select * from job_profile where j_id='$id'");
		$job = mysql_fetch_array($job_set);
		return $job;
	}
	function get_contact_details($id)
	{
		$contact_set=mysql_query("select * from contact_details where c_id='$id'");
		$contact = mysql_fetch_array($contact_set);
		return $contact;
	}
	function get_family_details($id)
	{
		$family_set=mysql_query("select * from family_profile where f_id='$id'");
		$family = mysql_fetch_array($family_set);
		return $family;
	}
	
	function get_personal_details($id)
	{
		$personal_set=mysql_query("select * from personal_profile where p_id='$id'");
		$personal = mysql_fetch_array($personal_set);
		return $personal;
	}
	function get_user_details($id)
	{
		$user_set=mysql_query("select * from userdetails where id='$id'");
		$user = mysql_fetch_array($user_set);
		return $user;
	}
	
	function get_userdetails_details($id)
	{
		$userdetails_set=mysql_query("select * from userdetails where id='$id'");
		$userdetails = mysql_fetch_array($userdetails_set);
		return $userdetails;
	}

    function get_authen_details($id)
	{
		$authen_set=mysql_query("select * from authen where id='$id'");
		$authen = mysql_fetch_array($authen_set);
		return $authen;
	}	
?>