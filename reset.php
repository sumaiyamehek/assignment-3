<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="ass1.css"></link>
  <style type="text/css">
		        
		       input:hover {color:orange;}
			   input:focus {color:purple;}
			   </style>
</head>
<body>
<table width="300" border="2" align="center" >
<tr>
<form name="form1" method="post" action="relogin.php">
  <td>
  <table width="100%" >
  <tr>
  <td colspan="3"><strong><center>RESET PASSWORD</center></strong></td>
  </tr>
  <tr>
  <td width="78">Username</td>
  <td width="6">:</td>
  <td width="294"><input name="username" type="text" id="username"></td>
  </tr>
  <tr>
  <td>Password</td>
  <td>:</td>
  <td><input name="password" type="text" id="password"></td>
  </tr>
  <tr>
  <tr>
  <td>New Password</td>
  <td>:</td>
  <td><input name="newpassword" type="text" id="newpassword"></td>
  </tr>
  <tr>
  <tr>
  <td>Confirm</td>
  <td>:</td>
  <td><input name="reenter" type="text" id="reenter"></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>     <button id="myBtn">RESET</button>

<script>
document.getElementById("myBtn").addEventListener("click", myFunction);

function myFunction() {
    alert ("Password reset");
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