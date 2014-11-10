<?php	
	function sendmessage($mobile,$message){
	
	$ch = curl_init();


	$username="badyalsargam";
	//$password="8870698010";
	$password="lbghut36sh";

	$data="<?xml version='1.0' encoding='utf-8'?>
	<MESSAGE>
	<USER USERNAME='$username' PASSWORD='$password'/>
	<SMS TEXT='$message' MESGTYPE='' SENDER='TEST' PRIORITY='1' >
	<ADDRESS TO='$mobile' />
	</SMS>
	</MESSAGE>";

	$data=urlencode($data);

	$url="http://bulksms.gateway4sms.com/xmlapi.php?data=$data";
	
	//echo $url;
	
	//$url="http://www.google.co.in";

	curl_setopt($ch, CURLOPT_URL,$url);
	
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	$contents = curl_exec ($ch);
	
	echo $contents."<br/>LOl";
	
	curl_close ($ch);
	
	//mysql_close($connection)
	

/*
	if(substr($contents,0,5)=="alert"):
		return true;
	else:
		return false;
	endif;
	}
*/
}

sendmessage("9779117528","Hello Pawan , Kanupriya Mathur kaisi hai ");

//WYSIWYG

//prepared statements

?>


