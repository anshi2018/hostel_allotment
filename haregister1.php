<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
function validate($val){
	$val=htmlentities(trim($val));
	return $val;
}
$fname=validate($_POST['fname']);
$lname=validate($_POST['lname']);
$emailid=validate($_POST['emailid']);
$passwd=validate($_POST['passwd']);
$regno=validate($_POST['regno']);
$gender=validate($_POST['gender']);
$date=validate($_POST['date']);
$year=validate($_POST['year']);
$branch=validate($_POST['branch']);
$wing=0;


$dbhost="localhost";
$dbuname="root";
$dbpassword="999";		//your database password
$dbname="haw";		//your database name
$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);

if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}


$query="INSERT INTO `haw`.`register` (`fname`,`lname`,`emailid`, `passwd`, `gender`, `year`, `regno`, `date`,`branch`) VALUES ('$fname', '$lname', '$emailid', '$passwd', '$gender', '$year', '$regno','$date','$branch');";

$con->query($query);
if($con->errno){
	die("Sorry could not execute query".$con->error);	
}
else echo "Successfully inserted data";
?>
</body>
</html>