<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> PHP FIRST PAGE</title>
</head>
<body>
<?php
   $name=validate($_POST['fname']);
 
   function validate($a)
   {
     $b=htmlentities($a);
     $c=trim($b);
     return $c;
   }
   $name=validate($_GET['fname']);
   $name=validate($_GET['password']);  
   $i=1;
   var_dump($i);   //tells the data type and value of the given variable
   $a="anshi";
   var_dump($a);   //tells the data type and length of the string i.e. 5 in this case
    
   echo $_POST['fname'];  
   //php.net website for more study
   //google capche study code that has to be included in our code
   switch($i)
   {
     case 1: echo "1";
          break;
     case 2: echo "2";
          break;
     default: echo "none";
   }
  /* $name=htmlentities($_POST['fname']);   //through htmlentities html tags can't escape through it
   $name=trim($name);*/  //removes all the extra spaces from your input i.e. name in this case,bt only leading and trailing spaces nt in the between of name
   
   if($name=="")
   {
    echo "nm empty";
   }
   else
   {
     echo "your name is ".$name;
   }
   $i=0;
   for($i=0;$i<10;$i++)
   {
     echo "$i";
   }
   function sum($a,$b)
   {
     $c=$a+$b;
     return $c;
   }
   echo sum(3,5);
?>
</body>
</html>