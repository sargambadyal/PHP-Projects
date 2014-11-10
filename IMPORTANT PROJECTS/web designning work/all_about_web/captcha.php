<?php



//check method of securimage object returns captcha
if(isset($_POST['mycaptcha'])):
	include ('securimage/securimage.php') ;
	$securimage = new Securimage();
	if ($securimage->check($_POST['captcha'])):
		echo "Very Good Yaar";
	else:
		echo "Tun chor hai";
	endif;
endif;



?>
 <img 
 
 id="captcha" 
 
 src="securimage/securimage_show.php" 
 
 alt="CAPTCHA Image" 
 
 style="border: 3px solid black;" /><br/>

<form action="captcha.php" method="post">  
<input type="text" name="captcha"/> 
<input type="submit" name="mycaptcha"/>
</form>