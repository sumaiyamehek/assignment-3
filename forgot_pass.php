<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="ass1.css"></link>

        <style type="text/css">
		        
		       input:hover {color:orange;}
			   input:focus {color:purple;}
			   </style>
		<h3><center>FORGET PASSWORD</center></h3>
	</head>
<body background="a1.jpg">
<table width="300" >
<tr>
<form name="form1" method="post" action="retrieve.php">
  <td>
  <table width="100%" >
   <tr>
  <td width="700">Your favorite film star ...</td>
  <td width="6">:</td>
  <td width="294"><input name="star" type="text" id=" star "></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><button id="myBtn">wait....</button>

<script>
document.getElementById("myBtn").addEventListener("click", myFunction);

function myFunction() {
    alert ("Hello !");
}
</script></td>
  </tr>
  </table>
  </td>
</form>
</tr>
</table>                              
</body>
</html>