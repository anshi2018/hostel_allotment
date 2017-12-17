<?php
function validate($val){
	$val=htmlentities($val);
	$val=trim($val);
	return $val;	
}
function dbconnect(){
$dbhost="localhost";
$dbuname="root";
$dbpassword="999";		//your password
$dbname="haw";		//your database name
$con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);

if($con->connect_errno){
	die("Not able to".$con->connect_error);	
}
return $con;	
}
?>