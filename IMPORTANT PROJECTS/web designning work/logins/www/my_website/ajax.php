<?php

?>
<html>
	<head>
	<script type="text/javascript">
			function callajax()
		{ 
			alert ("lol");
			var x=document.getElementById("ui").value;
			

			if (window.XMLHttpRequest)
			  {
			  // code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {
			  // code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }

			  
				
			xmlhttp.onreadystatechange=function()
			  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					 alert(xmlhttp.responseText);
					}
			  }
			  
			xmlhttp.open("GET","php_example.php?id="+x,true);
			xmlhttp.send();

		}
	</script>
	</head>
	<body>
		<table>
			<tr>
				<td> id</td>
				<td><input id="ui" type="text"/></td>
			</tr>
			<tr>
				<td><input type="button" id="meradata" onclick="callajax()"/></td>
			</tr>
		</table>
	</body>
</html>