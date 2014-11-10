<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>YANTRIK KRISHI</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript">
function validation()
{
var a = document.forms["form"]["region"].value;
if(a=="" || a==null )
{
alert("Please Enter region");
document.form.region.focus();
return false;
}

var b = document.forms["form"]["season"].value;
if(b=="" || b==null)
{
alert("Please Enter season");
document.form.season.focus();
return false;
}

var c = document.forms["form"]["soil"].value;
if(c=="" || c==null )
{
alert("Please Enter Soil");
document.form.soil.focus();
return false;
}

var d = document.forms["form"]["area"].value;
if(d=="" || d==null )
{
alert("Please Enter area");
document.form.area.focus();
return false;
}

}
</script>


</head>
<body style="background-image:url(images/back.jpg);background-height:500px;background-position:center;">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h2><a href="#">Yantrik Krishi</a></h2>
			</div>
			<div id="menu">
		<ul>
		<li class="current_page_item"><a href="home.php">Home</a></li>
			<li><a href="signup.php">SignUp</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="tutorial.php">Tutorials</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
		</ul>
		</div>
		</div>
	</div>
	<div id="page" class="container">
		<div id="content" style="width:1200px;">
		<h1> WELCOME <?php ERROR_REPORTING(E_PARSE); $id=$_GET['id']; echo $_GET['v'];?></h1>
			<div id="tab"style="background-color:#ff3366">
					<h4><center><a style="text-decoration:none;color:#fff" href="#">What crop to grow?</a></center></h4>
				</div>
				<div id="tab"style="background-color:#319300">
					<h4 style="text-align:center"><a style="text-decoration:none;color:#fff" href="farmer_buy.php?id=<?php echo $id;?>">Buy products</a></h4>
				</div>
				<div id="tab"style="background-color:#ffcc00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_ask.php?id=<?php echo $id;?>">Ask Expert</a></center></h4>
				</div>
				<div id="tab"style="background-color:#f00;">
					<h4><center><a style="text-decoration:none;color:#fff" href="farmer_sell.php?id=<?php echo $id;?>">Sell product</a></center></h4>
				</div>
				<div id="tab"style="background-color:#3333ff;">
					<h4><center><a style="text-decoration:none;color:#fff" href="feedback.php?id=<?php echo $id?>">Feedback</a></center></h4>
				</div>
				</br>
			<div style="background-color:#dd3366;">
							<h4 class="obj1"> Automatic Portal </h4> 
							</div>
					<form name="form" action="farmer.php" onsubmit="return validation()" method="post">
						<table>
						<tr>
							<td class="obj1"> Agro-climatic region:</td>
							<td> <input list="region" name="region">

								<datalist id="region">
							  <option value="Western Himalayan region-J&K,HP,UP,uttaranchal">
							  <option value="Eastern Himalayan region-assam,sikkim,w bengal,northeastern states">
							  <option value="lower gangantic plains region-w bengal">
							  <option value="midddle gangantic plains region-up,bihar">
							  <option value="upper gangantic plains region-up">
							  <option value="trans gangantic plains region-punjab,haryana,new delhi,rajasthan">
							  <option value="eastern plateau and hilly regions-maharashtra,up,orissa,w bengal">
							  <option value="central plateau and hilly regions-mp,rajasthan,up">
							  <option value="western plateau and hilly regions-maharashtra,mp,rajasthan">
							  <option value="eastern plateau and hilly regions-ap,karnataka,tamil nadu">
							  <option value="east cost plains and hilly regions-orissa,ap,tn,pondicheri">
							  <option value="west cost plains and ghat regions-kerela,tn,goa,karnataka,maharashtra">
							  <option value="Gujrat plains and  hills region-gujrat">
							  <option value="island region-andman & nicaobar,lakshyadeep">

							</datalist><td>
										</tr>
										<tr>
											<td class="obj1"> Season: </td>
											<td> <input list="season" name="season">

							<datalist id="season">
							  <option value="Oct-april">
							  <option value="April-Aug">
							  <option value="june-dec">
							  <option value="May-sept">
							  <option value="July-jan">
							  <option value="Dec-may">
							  <option value="June-aug">
							  <option value="Sept-jan">
							</datalist><td>
						</tr>
						
						<tr>
											<td class="obj1"> Soil type: </td>
											<td> <input list="soil" name="soil">

							<datalist id="soil">
							  <option value="Deep & medium black">
							  <option value="Alluvial">
							  <option value="Red and yellow">
							  <option value="Laterite">
							  <option value="Saline & desert">
							  <option value="Forest & hill">
							</datalist><td>
						</tr>
						
						<tr>
							<td class="obj1">Land for cultivation(Hectors)</td>
							<td class="obj1" colspan="4"><input type="number" name="area" ><td>
						</tr>
						
						<tr>
							<td class="obj1">Type of farming</td>
							<td class="obj1" colspan="4"><input type="radio" name="type" value="organic" checked="checked"/>Organic <input type="radio" name="type" value="chemical"/>Chemical</td>
						</tr>
						
						<tr>
							<td class="obj1">Irrigation facility</td>
							<td class="obj1" colspan="4"><input type="radio" name="irrigation" value="good" checked="checked"/>Good<input type="radio" name="irrigation" value="moderate"/>Moderate<input type="radio" name="irrigation" value="low"/>Low</td>
						</tr>
						
						<tr>
							<td class="obj1">Availabiliy of labour</td>
							<td class="obj1" colspan="4"><input type="radio" name="labour" value="large" checked="checked"/>Large <input type="radio" name="labour" value="medium"/>Medium<input type="radio" name="labour" value="small"/>Small</td>
						</tr>
						
						<tr>
							<td><input type="submit" name="submit"/></td>
						</tr>
					</table>
					</form>
			
		</div>
		
	</div>
	<div id="footer">
		<p>Copyright (c) Sargam</p>
	</div>
</div>
</body>
</html>
