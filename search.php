<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
    .highlight{
        background: yellow;
    }        
</style>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("h1").children().addClass("highlight");
});

function validateForm() {
    var x = document.forms["form1"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	   
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "200" nowrap valign="top">
	     <?php include 'new2.php'; ?>
	     </td>
	     <td >
	     <head><h1> Search Employee Details</h1></head>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#00ff00">
<tr>
<form name="form1" method="post" action="search_emp.php"  onsubmit="return validateForm()">
  <td>
  <table width="100%" >
  <tr>
  <td width="78">Name</td>
  <td width="6">:</td>
  <td width="294"><input name="name" type="text" id="name" value=""></td>
  </tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><input type="submit" name="submit" value="Search"></td>
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
	  
