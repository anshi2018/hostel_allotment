<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>
<?php
  echo "The date is:";
   if($_POST['date']<10)
     echo "0".$_POST['date']."/";
	 else
	  echo $_POST['date']."/";
   echo "&nbsp;";
   
   if($_POST['month']<10)
     echo "0".$_POST['month']."/";
	 else
	  echo $_POST['month']."/";
   echo "&nbsp;";
   echo $_POST['year'];   



 ?> 
</body>
</html>