<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <script type="text/javascript" >
  function load_greeting() {
    alert("Now you are logged in");
}
   </script>
</head>
<body onload="load_greeting();" background="pic1.gif">

	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td><?php include 'header.php'; ?> </td>
	    	  </tr>
	  <tr height="300">
	     <td width = "220" valign="top">
	     <?php include 'new2.php'; ?>
	     </td>
	     <td width="100%" height="100%"  align="left" valign="top">
		 <div class="body" style="color: red"><font size="6" >WELCOME</font></div>
	     
	     </td>    
	   </tr> 
    </table>		    
	</body>
</html>
