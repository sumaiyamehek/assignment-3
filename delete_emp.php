<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
    .highlight{
        background: yellow;
    }        
</style>

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
</
	<body >
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td ><?php include 'header.php'; ?>  </td>
	  </tr>
	  <tr height="300">
	     <td width = "220" >
	     <?php include 'new2.php'; ?>
	     </td>
	     <td width="100%" height="100%"  align="left" valign="top">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$conn )
{
  die('Could not connect: ' . mysql_error());
}
$EmpID = $_GET["emp_id"];
$EmpID = stripslashes($EmpID);
$EmpID = mysql_real_escape_string($EmpID);
$sql = "DELETE FROM admin_db.employee WHERE employee. EmpID =  $EmpID ";
//echo $sql;
$res= mysql_query($sql )
?>
        <div >
        <font size ="5"><h1> "Employee Record Deleted....";</h1></font><br>
        </div>

        </td>    
	   </tr>
	       </table>	  
	</body>
</html>
