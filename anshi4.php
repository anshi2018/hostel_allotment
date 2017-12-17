<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP 1</title>
</head>

<body>
<?php
$email=$_POST['emailid'];
$pass=$_POST['pwd'];
echo "Your personal details are as follows";
$query="select * from user2 where emailid=\"$email\" AND pwd=\"$pass\";";

 //$query="select * from user where emailid=\"a@gmail.com\";";

 
?> 
</body>
</html>