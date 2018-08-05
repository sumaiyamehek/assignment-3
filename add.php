<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head> 
<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("ul").children().addClass("highlight");
});
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("h1").children().addClass("highlight");
});
</script>
<link rel="stylesheet" type="text/css" href="ass1.css">

        <style type="text/css">
		        
		       input:hover {color:orange;}
			   input:focus {color:purple;}
			    .highlight{
        background: yellow;
    }
			   </style><script>
function validateForm() {
    var x = document.forms["form1"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
			   </head>
	<body style="margin:0">
	<table width="100%" height="100%" cellpadding="0" cellspacing="1">
	  <tr width="200" height="100" >
	     <td colspan="2">
	    <?php include 'header.php'; ?>
	    <br>
	    </td>
	  </tr>
	  <tr height="300">
	     <td width = "200" nowrap valign="top">
	     <?php include 'new2.php'; ?>
	     </td>
	     <td >
	     <h1 class="body"   style="color:blue"><font size="6"> Enter Employee Details</font></h1>
		 <table width="300" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#00ff00">
<tr>
<form name="form1" method="post" action="emp.php"  onsubmit="return validateForm()" method="post">
  <td>
  <table width="100%" >
  <tr>
  <td width="78">Name</td>
  <td width="6">:</td>
  <td width="294"><input name="name" type="text" id="name"></td>
  </tr>
   <tr>
  <tr>
  <td width="78">Age</td>
  <td width="6">:</td>
  <td width="294"><input name="age" type="text" id="age"></td>
  </tr>
  <tr>
  <td width="78">Location</td>
  <td width="6">:</td>
  <td width="294"><input name="location" type="text" id="location"></td>
  </tr>
  <tr>
  <td width="78">Salary</td>
  <td width="6">:</td>
  <td width="294"><input name="salary" type="text" id="salary"></td>
  </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="Submit" value="Save"></td>
 </tr>
  </table>
  </td>
</form>
</tr>
</table>
     </td>    
	   </tr>
    </table>	    
    </body>
</html>
