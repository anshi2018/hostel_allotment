<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 2</title>
</head>
<body>
<?php
include('function.php');
$name1=validate($_POST['fname']);
$name2=validate($_POST['lname']);
$email=validate($_POST['emailid']);
$pass=validate($_POST['pwd']);
$dob=validate($_POST['date']);
$gen=$_POST['gender'];
$dbhost="localhost";    //my sql server is working in same machine as php
$dbuname="root";
$dbpassword="999";
$dbname="anshi";
$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname); 
if($con->connect_errno)
{
  die("Unable to connect to server");
}
else
echo "Database connected";
$query="INSERT INTO `anshi`.`user2` (`fname`, `lname`, `emailid`,`pwd`, `date`, `gender`) VALUES ('$name1', '$name2', '$email','$pass', '$dob','$gen');"; 
$con->query($query);
if($con->errno)
    die("sorry could not execute query".$con->error);
else
    echo <br>."success";
 




?>
</body>
</html>












