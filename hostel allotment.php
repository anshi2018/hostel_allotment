<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CSS intro</title>

<link rel="stylesheet" href="style2.css">
<script type="text/javascript">

var slideimages = new Array() ;// create new array to preload images
slideimages[0] = new Image(); // create new instance of image object
slideimages[0].src="mn1.jpg"; // set image src property to image path, preloading image in the process
slideimages[1] = new Image();
slideimages[1].src = "mn2.jpg";
slideimages[2] = new Image();
slideimages[2].src = "mn5.jpg";

</script>
</head>

<body> 
       <div id="maincontent">
    	<div id="header">
        <b>HOSTEL ALLOTMENT</b>
        </div>
        <div id="content">
          <div id="menu">
            
       	          <ul>
                	<li>
                    	<a href="#"  ><b>ABOUT US  </b>     </a>
                        <ul class="option1">
                        <li>
                        <a href="../../directormsg.html" target="_blank">Director's Message</a>
                        </li>
                        <li>
                        <a href="../../Chief Warden's Message.html" target="_blank">Chief Warden's Message</a>
                        </li>
                        <li>
                        <a href="../../contact us.html" target="_blank" >Contacts And Basic Info</a>
                        </li>
                        <li>
                        <a href="../../messfee.html" target="_blank">Mess Fee Details</a>
                        </li>
                        <li>
                        <a href="../../hostelfees.html" target="_blank">Hostel fees</a>
                        </li>
                        <li>
                        <a href="../../facilities.html" target="_blank">Facilities</a>
                        </li>
                        
                   
                        </ul>
                    </li>
                    <li>
                <a href="#"><b>HOSTELS</b></a>
                     <ul class="option1">
                     <li>
                     <a href="#">KNGH(Kamala Nehru Girls Hostel)                    </a>
                     </li>
                     <li>
                     <a href="#">SVBH(Swami Vivekananda Boys                                 Hostel</a>
                     </li>
                     
                    </ul> 
                    </li>
                    <li>
                    <a href="../../beginnersluck style instruction.html" target="_blank"><b>ALLOTMENT PROCEDURE </b></a>
                    </li>
                     <li>
                     <a href="#">LOGIN</a>
                     </li>                   
			</ul>
          </div>
          <div id="box">
          <img src="mn1.jpg" width="450" height="350" align="center" id="slide"/></div>
                    
            <script type="text/javascript">


var step=0;

function slideit(){
 if (!document.images)
  return;
 document.getElementById('slide').src = slideimages[step].src;
 if (step<2)
  step++;
 else
  step=0;
 setTimeout("slideit()",2500);
}

slideit();

            </script>
            <div id="box2">
            <marquee direction="up" div id="slidetext">
            <ul>
            <li>
            Last date for registration is 25th March 2015
            </li>
            <li>
            Please make sure that you fill your choices before confirming the wing
            </li>
            <li>
            There will be random allottment of wing for students of first year
            </li>
            </ul>
      
            </marquee></div>
          <ul id="regist">
          <li>
          <a href="#">REGISTER</a>
          </li>
          </ul>
        </div>
        </div>

 
</body>
</html>
