<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
window.location.href="login.php";
</script>

<body>




</body>
<?php
include('function.php');
session_start();
$reg=$_SESSION['regno'];

$con=dbconnect();

$wing=validate($_POST['wing']);
$query="UPDATE `haw`.`register2` SET wing=$wing WHERE regno like $reg";

$con->query($query);
if($con->errno){
	die("Sorry could not execute query".$con->error);	
}

?>
</html>