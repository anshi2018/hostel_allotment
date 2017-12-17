<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
/*we can also use single qoutes with echo to print sth
to print any string .
 if we take,
$a=1;
echo "$a";  prints 1
echo '$a';  prints$a
 we can also write
echo '<option value="'.$i.'">'.$i.'</option>';

ARRAYS IN WEB DESIGNING
<?php
$arr=array(1,2,"wds",3.14);
echo "first element:".$arr[0];
?>*/



$arr=array(1,2,"wds",3.12);
var_dump($arr);
$mul=array(
    array(1,2,"a"),
	array(3,3.1,"c")
	);
	var_dump($mul);
  $ass=array("a"=>5,"b"=>3.14);            //associative arrays
  echo $ass['a'];
  echo "<br>".$ass['b'];                              //$_post and $_get both r associative arrays
  $regno=array("anshi"=>20144131,"rachna"=>20144129,"html"=>"<hr>");
  echo $regno['anshi']."<br>";
  echo $regno['rachna']."<br>";
  print_r($regno);    //just like vardump bt does nt tell the data type
  echo "<br>";
  var_dump($regno);
  echo "<br>";
  foreach($regno as $a)    //used when u do nt knw d size of d array
  {
	  echo $a."<br>";     //line no. 28 is doin this $a=$regno['anshi']; or ['rachna']; as d case maybe
  }                        //used when u dnt knw all the names of all the indexes and u want to apply d same process for all
                                 //variables
  foreach($regno as $key=>$val)   //for putting each of its index and value in new variables 
  {
	  echo $key.",".$val."<br>";
  }
  //utility
  include('function.php');       //used when footer in which copyright is written on all pages of a website so that changes can be made easily.works like function in C
  foreach($regno as $input=>$val)      //to check all d values of 'get' array
  {
	   $regno[$input]=validate($val);
  }
  foreach($regno as $a)    
  {
	  echo $a."<br>";     
  } 
  include_once('function.php');   //includes the file only if the file is nt included bfore and also chks file is nt included afterwards also
  //we can also write require in place of include and require once in place of include once bt der is sm diff. in them 
  //if in require we write sm file which does nt exist then it gives fatal error nd doesnt run bt include takes it lightly nd gives only sm warning nd gives o/p.
  $a=1;
  if($a==12)             //when der is sm prblm then the execution of code stops here no ther thing is printed
  //and no execution of things after this takes place
    die('die called');
	
  echo "hiii";       //this is nt printed.php is an interpreted language i.e. checks the code line by line nd executes it line by line. this is working on server.if server is in us nd u open site in india i gives tym of us.
//there is one more operator in php other than C that is === (triple equal to)
//it checks that both hv sm value nd data type
echo "<br>".date("d-m-y")."<br>";   //prints date of the place where server is der.
//like date we also hv function to print tym etc.



if($a=="1")
 die('die');   //gets executed
 if($a==="1")
 die('die called');    //dont execute  
  
?>
hello    //this is also nt printed
</body>
</html>