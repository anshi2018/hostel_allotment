<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login php</title>
</head>

<body>
<?php
include('function.php');
$email=validate($_POST['emailid']);
$pass=validate($_POST['pwd']);
echo $email."".$pass;



?>



</body>
</html>