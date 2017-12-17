<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$name=validate($_POST['fname']);
$email=validate($_POST['emailid']);
$password=validate($_POST['pwd']);
function validate($val)
{
 $val=htmlentities(trim($val));
 }
 $dbhost="localhost";    //my sql server is working in same machine as php
 $dbuname="root";
 $dbpassword="999";
 $dbname="wdc";
 $con=new MySQLi($dbhost,$dbuname,$dbpassword,$dbname);   //part of OOPs .... :) consists of class mysqli is a class which returns a connection which gets stored in con.
 if($con->connect_errno)
 {
  die("not able to connet to db");
  }
  else
   echo "db connected";
   //to connect the data we enter to our database we write queries in my sql.we hv many queries such as select,insert,update,delete. :)these operations r performed on database
   /* the syntax for insert is
   insert into 'dbname'.'tablename'('col1','col2','col3'....)values('val1','val2','val3'......);*/
   //for form entry we use insert.
 $query="INSERT INTO `wdc`.`user` (`name`, `emailid`, `password`) VALUES ('$name', '$email', '$password');";  //the red semicolon is optional it even works without it. :)
//the syntax for delete is
// delete from user where name like '' and emailid like ''
//the syntax for update is
//update user set password='asda', name='dfdfs' where emailid like ''
// if after password above we write and instead of , i gives unexpected result. :)
//in my sql we use single equal to to check if two items r equal. :) bt in php we use ==. :)


// H.W. : make a page on which all registered users are displayed. :(

//EXPOLRE ORDER BY,GROUP BY,COUNT(*),SUM(),AVG(),HAVING IN MY SQL. :(
//we use sessions(4 server) nd cookies(4 browser) in php to create a mech. so that on nxt php pg we dont hv to chk whether the user is d sm only. v dont hv to chk his identity again.
//session is also an array. it is globally declared so that all files cn use it. :)
//we cnt use html tags in php. :)
//ye session ki meherbani hai ki jb hm pgs pr navigate krte hain to user ki identity dobara chk nhi krni padti aur wo uski saari info print kr deta hai. :)
//for logout we use session_destroy();
//for everytym we use session we hv to write session.start(); everytym means everytym even if we use destroy function. :)
//also explore isset(); used in php pg. chks whether a variable is set or nt.:)
 $con->query($query);
 if($con->errno)
  die("sorry".$con->error);  
  else
   echo "success";
   $query="select * from user where emailid=\"a@gmail.com\";";
   
   ?>      
   
</body>
</html>