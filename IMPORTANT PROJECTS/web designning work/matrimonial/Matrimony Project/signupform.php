<html>
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup Form</title>
<link rel="stylesheet" href="calendar.css">
 <script language="JavaScript" src="calendar_us.js"></script>
</head>

</head>
<body>
<h1><font color="brown">SIGN UP</font></h1>
<form action="signup.php"  method="post" enctype='multipart/form-data' name="myform" id="myform")>
    <label>Username
    <input type="text" name="username">
  </label>
    <p>
      <label>Password
      <input type="password" name="password">
      </label>
</p>
    <p>
      <label>Full Name
      <input type="text" name="name">
      </label>
</p>
    <p>
      <label></label>
      <label>
      
Gender :

M
<input type="radio" name="gender" value="M">
      </label>
      <label>
 F
 <input type="radio" name="gender" value="F">
      </label>
<br><br>
      <label></label>
<label> Date of Birth
    <input type="text" name="dob" />
    <script language="JavaScript">
	new tcal ({
		// form name
		'formname': 'myform',
		// input name
		'controlname': 'dob'
	});

	</script>
  </label>

      <br />
      <label>
      <input type="submit" name="Submit" value="Submit">
      </label>
  </p>
</form>
  
  </body>
</html>