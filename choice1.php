<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHOICE PAGE</title>
<script>
window.location.href="login.php";
</script>
</head>

<body>
<?php
include('function.php');
session_start();
$reg=$_SESSION['regno'];

$con=dbconnect();
$choice1=validate($_POST['choice1']);
$choice2=validate($_POST['choice2']);
$choice3=validate($_POST['choice3']);
$choice4=validate($_POST['choice4']);
$choice5=validate($_POST['choice5']);
$choice6=validate($_POST['choice6']);
$choice7=validate($_POST['choice7']);
$choice8=validate($_POST['choice8']);
$re=$reg%10000;
$re=$reg-$re;
$ch1=$choice1%10000;
$ch1=$choice1-$ch1;
$ch2=$choice2%10000;
$ch2=$choice2-$ch2;
$ch3=$choice3%10000;
$ch3=$choice3-$ch3;
$ch4=$choice4%10000;
$ch4=$choice4-$ch4;
$ch5=$choice5%10000;
$ch5=$choice5-$ch5;
$ch6=$choice6%10000;
$ch6=$choice6-$ch6;
$ch7=$choice7%10000;
$ch7=$choice7-$ch7;
$ch8=$choice8%10000;
$ch8=$choice8-$ch8;
if($re==$ch1&&$re==$ch2&&$re==$ch3&&$re==$ch4&&$re==$ch5&&$re==$ch6&&$re==$ch7&&$re==$ch8)
{
$query="UPDATE `haw`.`register2` SET choice1=$choice1,choice2=$choice2,choice3=$choice3,choice4=$choice4,choice5=$choice5,choice6=$choice6,choice7=$choice7,choice8=$choice8 WHERE regno like '$reg'";

$con->query($query);
if($con->errno){
	die("Sorry could not execute query".$con->error);	
}

}
else
{echo"Invalid choices";
die("Refill your choices");
}

?>

</body>
</html>