<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login PHP</title>
<link href="hacss1.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php
include('function.php');
$reg=validate($_POST['reg']);
$pass=validate($_POST['pass']);
//echo $email." ".$pass;
$con=dbconnect();

$query="select * from register2 where regno like '$reg'";
$res=$con->query($query);
if($res->num_rows==0){
	echo "Invalid username";
}
else{
	while($arr=$res->fetch_array()){
		if($arr['passwd']==$pass){
			echo "SUCCESSFULLY LOGGED IN AS".$arr['fname'];
			session_start();
			$_SESSION['regno']=$reg;
			$_SESSION['year']=$arr['year'];
			//$_SESSION['name']=$arr['name'];
			 ?>
			 <div class="container">
             <?php
			 echo "<font face=\"Courier New, Courier, monospace\">Name:</font>".$arr['fname']." ";
			 echo $arr['lname']."<br>";
			  echo "Reg No:".$arr['regno']."<br>";
			   echo "Branch:".$arr['branch']."<br>";
			   if($arr['year']=="first"&&date("d")<="25")
			   echo "alloted wing will be shown after 25";
			   else
			        if($arr['year']=="first")
					{
					for($w=31;$w<=40;$w++)
					{              $query1="select * from register2 where wing like '$w'";
                                $res1=$con->query($query1);
								$reg1=$arr['regno'];
                     if($res1->num_rows<8){
						   $query2="UPDATE `haw`.`register2` SET wing=$w WHERE regno like '$reg1';";
                         echo "wing".$w;
                             break;

                         }
					}
					    
					}
			   if($arr['year']!="first"&&date("d")<="25")
			   {
                  if($arr['wing']==0)
				     {
                        echo "<ul>
                     <li><a href=\"wingshow.php\">AVAILABLE WINGS </a></li>
                   <li><a href=\"choices.php\">CHOICE FILLING</a></li></ul>";
					 }
					 else
					 echo  "wing".$arr['wing'];
					 
                 }
              else if(date("d")>"25"&&$arr['wing']==0)
			   {
					if($arr['year']=="sec")
					{
						for($w=11;$w<=20;$w++)
						{   $query1="select * from register2 where wing like '$w'";
                                $res1=$con->query($query1);
								$reg1=$arr['regno'];
                     if($res1->num_rows<8){
						 $query2="UPDATE `haw`.`register2` SET wing=$w WHERE regno like '$reg1';";
                         echo "wing".$w;
                             break;
					 }
						}
					}
					else if($arr['year']=="third")
					{
						for($w=21;$w<=30;$w++)
						{   $query1="select * from register2 where wing like '$w'";
                                $res1=$con->query($query1);
								$reg1=$arr['regno'];
                     if($res1->num_rows<8){
						 $query2="UPDATE `haw`.`register2` SET wing=$w WHERE regno like '$reg1';";
                         echo "wing".$w;
                             break;
					 }
						}
					}
					else
					{
						for($w=1;$w<=10;$w++)
						{   $query1="select * from register2 where wing like '$w'";
                                $res1=$con->query($query1);
								$reg1=$arr['regno'];
                     if($res1->num_rows<8){
						 $query2="UPDATE `haw`.`register2` SET wing=$w WHERE regno like '$reg1';";
                         echo "wing".$w;
                             break;
					 }
						}
					}
			
					}
					else if($arr['year']!="first")
					{
						echo $arr['wing'];
					}
					
			
            
		}
		else echo "Invalid password";
	}
}




?>
<ul id="logout">
<li>
<a href="logout.php">Logout</a>
</li>
</ul>

</body>
</html>