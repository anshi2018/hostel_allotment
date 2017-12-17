<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHOW WINGS</title>
<link rel="style/css" href="choice.css" type="text/css">
</head>  

<body>
<?php
include('function.php');
$con=dbconnect();
session_start();
$reg=$_SESSION['regno'];
$y=$_SESSION['year'];
?>



<form name="form2" action="wingshow1.php" method="post">

<?php
if($y=="sec")
{
for($i=11;$i<=20;$i++)
{
   $count_choice=0;
   $c=0;
   $query="select * from register2 where wing like '$i'";
   $res=$con->query($query);
   $res1=$con->query($query);
   if($res->num_rows==0)
   {echo "wing".$i;
   echo "Its occupants are:none";
   
	   ?>
      
       <label>
       
<input type="radio" name="wing" value="<?php echo $i;?>"><br />
</label>
       <?php
   }
   else 
   {
    if($res->num_rows<8)
    {
		
			while($arr=$res->fetch_array()){
			
			  for($j=1;$j<=8;$j++)
			  {
		        if($arr["choice$j"]==$reg)
				{
					$count_choice++;
					break;
				}
				if($arr["choice$j"]==0)
				{
					
				$c++;
				break;
				}
			  }
			}
			if($count_choice>=(($res->num_rows)-$c)/2)
			{ 
				echo "wing".$i;
				echo "<br>";
				echo "Its occupants are:";
				
				while($arr1=$res1->fetch_array())
				{    
					echo $arr1['fname']."&nbsp;".$arr1['lname'].":&nbsp;".$arr1['regno']."<br>";
				}
				   ?>
                
       <label>
       
<input type="radio" name="wing" value="<?php echo $i ; ?>">
</label>
       <?php
			}
	}
   }
}
}
if($y=="third")
{
for($i=21;$i<=30;$i++)
{
   $count_choice=0;
   $c=0;
   $query="select * from register2 where wing like '$i'";
   $res=$con->query($query);
   if($res->num_rows==0)
   {echo "wing".$i;
   
   echo "Its occupants are:none";
   
	   ?>
      
       <label>
       
<input type="radio" name="wing" value="<?php echo $i;?>"><br />
</label>
       <?php
   }
   else 
   {
    if($res->num_rows<8)
    {
		
			while($arr=$res->fetch_array()){
			
			  for($j=1;$j<=8;$j++)
			  {
		        if($arr["choice$j"]==$reg)
				{
					$count_choice++;
					break;
				}
				if($arr["choice$j"]==0)
				{
					
				$c++;
				break;
				}
			  }
			}
			if($count_choice>=(($res->num_rows)-$c)/2)
			{
				echo "wing".$i;
				echo "Its occupants are:";

				while($arr1=$res->fetch_array())
				{
					echo $arr1['fname']."&nbsp;".$arr1['lname'].":&nbsp;".$arr1['regno'];
				}
				   ?>
                
       <label>
       
<input type="radio" name="wing" value="<?php echo $i ; ?>">
</label>
       <?php
			}
	}
   }
}
}
if($y=="fourth")
{
for($i=1;$i<=10;$i++)
{
   $count_choice=0;
   $c=0;
   $query="select * from register2 where wing like '$i'";
   $res=$con->query($query);
   if($res->num_rows==0)
   {echo "wing".$i;
  
   echo "Its occupants are:none";
   
	   ?>
      
       <label>
       
<input type="radio" name="wing" value="<?php echo $i;?>"><br />
</label>
       <?php
   }
   else 
   {
    if($res->num_rows<8)
    {
		
			while($arr=$res->fetch_array()){
			
			  for($j=1;$j<=8;$j++)
			  {
		        if($arr["choice$j"]==$reg)
				{
					$count_choice++;
					break;
				}
				if($arr["choice$j"]==0)
				{
					
				$c++;
				break;
				}
			  }
			}
			if($count_choice>=(($res->num_rows)-$c)/2)
			{
				echo "wing".$i;
				
				echo "Its occupants are:";
	
				while($arr1=$res->fetch_array())
				{
					echo $arr1['fname']."&nbsp;".$arr1['lname'].":&nbsp;".$arr1['regno'];
				}
				   ?>
                
       <label>
       
<input type="radio" name="wing" value="<?php echo $i ; ?>">
</label>
       <?php
			}
	}
   }
}
}
?>

<input type="submit" value="Confirm">
</form>
<ul>
<li>
<a href="logout.html">Logout</a>
</li>
</ul>
</body>                                                                                                                                                                                                                                                        
</html>