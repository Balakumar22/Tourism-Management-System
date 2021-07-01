<?php
include "header.html";
/*if($_POST){
$con=odbc_connect("TMS1","","");
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
}
if($_GET){
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
}
if(isset($_POST["user"])){
$qc="Select * from Reg where email='$uid' and pwd='$pwd'";
$user="Select uname from Reg where email='$uid' and pwd='$pwd'";
$rs=odbc_exec($con,$user);
while(odbc_fetch_row($rs)){
$ur=odbc_result($rs,1);
}
$res=odbc_exec($con,$qc);
$cnt=odbc_fetch_row($res);
$ct=0;
if($cnt==null){
	echo '<script>alert("Login Failed")</script>';
	echo '<script>self.location="home.php"</script>';
	echo '<script>log()</script>';
}
$rt=strlen($ur)*10;
$lt=strlen($ur)*12;
if($cnt==1){
    //header('Location: first.php');
	<html>
<head>
<title>Available Package</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script type="text/javascript" src="jquery.core.js"></script>
<script type="text/javascript" src="jquery.superfish.js"></script>
<script type="text/javascript" src="jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="jquery.easing.js"></script>
<script type="text/javascript" src="jquery.scripts.js"></script>
</head>
<body>
<div id="top">
<nav class="top1">
<div id="topcon">
<li><a href=""><i class="fa fa-home icon"> &nbsp;Home</i></a></li>
<li><a href="Available.php"><i class="fas fa-globe-americas icon">&nbsp;Available Packages</i></a></li>
<li><a href="Request.php"><i class="	fas fa-cart-arrow-down icon">&nbsp;Requested Package</i></a></li>
<li><a href="fcrises.html"><i class="fas fa-info-circle icon">&nbsp;About Us</i></a></li>
 </div>
<div class="dropdown">
   <i class="fas fa-user-circle icon1">&nbsp;&nbsp;' .$ur.'</i>
  <div class="dropdown-content" style="right:0;top:48">
  <a href="profile.php?uid='.$uid.'"><i class="fa fa-user"> Profile</i></a>
  <a href="logout.php"><i class="fas fa-power-off"> Logout</i></a>
  </div>
  </div> 
  </nav>
 </div>*/
 echo '<div class="featured_slider">
      	<!-- begin: sliding featured banner -->
         <div id="featured_border" class="jcarousel-container">
            <div id="featured_wrapper" class="jcarousel-clip">
               <ul id="featured_images" class="jcarousel-list">
                  <li><img src="images/Alleppey1.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="images/jatayu1.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="D:/farmer4.jpeg" width="965" height="280" alt="" /></li>
               </ul>
            </div>
            <div id="featured_positioner_desc" class="jcarousel-container">
               <div id="featured_wrapper_desc" class="jcarousel-clip">
                  <ul id="featured_desc" class="jcarousel-list">                 
                     <li>
                        <div>
                           <p><b>We are here to connect the farmers directly to the whole sellers, so the middle man expenditure is cut off. The moto of AgriConnect is to give the right to the farmers to fix the rate for there own products.</b>
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p><b>The Users of the same region , where connected to eachothers , So the crops of there own region where cultivated and distributed to there nearby markets were the transport expenditure cut offed.</b>
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p><b>The farmers from there own place they can sale there products, without travel to the outstations to sale there products. We transport the goods right from the farm land to the shops.Here the travelling expenditure is cut offed</b> 
                           </p>
                        </div>
                     </li>   
                  </ul>
               </div>

            </div>
            <ul id="featured_buttons" class="clear_fix">
               <li>1</li>
               <li>2</li>
               <li>3</li>
            </ul>
         </div>
         <!-- end: sliding featured banner -->
</div>
</body>
</html>';
?>
<!--else{
echo '<script>alert("Invalid Request")</script>';
}
}
if(isset($_POST["admin"])){
$qc="Select * from Admin where email='$uid' and pwd='$pwd'";
$user="Select uname from Reg where email='$uid' and pwd='$pwd'";
$rs=odbc_exec($con,$user);
while(odbc_fetch_row($rs)){
$ur=odbc_result($rs,1);
}
$res=odbc_exec($con,$qc);
$cnt=odbc_fetch_row($res);
$ct=0;
if($cnt==null){
	echo '<script>alert("Your are Not an Admin")</script>';
	echo '<script>self.location="home.php"</script>';
	echo '<script>log()</script>';
}
$rt=strlen($ur)*10;
$lt=strlen($ur)*12;
if($cnt==1){
    //header('Location: first.php');
	echo '<html>
<head>
<title>Available Package</title>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<script type="text/javascript" src="jquery.core.js"></script>
<script type="text/javascript" src="jquery.superfish.js"></script>
<script type="text/javascript" src="jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="jquery.easing.js"></script>
<script type="text/javascript" src="jquery.scripts.js"></script>
<style>
.dropbtn {
	display:inline-block;
	position:absolute;
	left:5px;
	top:-4px;
	color: white;
	padding-bottom:10px;
	padding-left:30px;
	padding-right:30px;
	padding-top:10px;  
	font-size: 20px;
  border: none;
  cursor: pointer;
}
.dropdown{
	position:absolute;
width:'.$rt+50 .'px;
height:30px;
right:0px;
top:5px;
}
.dropdown-content {
  display: none;
  position: absolute;
  margin-top:-5px;
  right: 0px;
  background-color: rgba(0,0,0,0.2);/*#f9f9f9;
  min-width:'.$rt+60  .'px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
#uname{
	font-size:20px;
display:inline-block;
	position:absolute;
	right:12px;
	top:-9px;
	color:white;
}
.icon{
position:relative;
font-size:20px;
margin-right:0px;
top:0px;
  padding-top: 5.5px;
  padding-bottom:5.5px;
  padding-left:5px;
  padding-right:5px;
  color: white;
  min-width:20px;
  text-align: center;
}
.icon1 {
position:absolute;
font-size:20px;
right:4px;
top:10px;
  padding-top: 5.5px;
  padding-bottom:12.5px;
  padding-left:5px;
  padding-right:5px;
  color: white;
  min-width: 30px;
  text-align: center;
}
#topcon{
	position:absolute;
	top:-8px;
right:'.($rt+60) .'px;
}
.top1 li{
	display:inline-block;
	position:relative;
	top:13px;
	
}
.top1 li a i{
	color:white;
	position:relative;
	top:4px;
	font-size:20px;
	padding-bottom:10px;
	padding-left:30px;
	padding-right:30px;
	padding-top:10px;
	text-decoration:none;
}
#topcon li :hover{
	border:0.1 groove;
	/*border-radius:50%;*/
	border-color:(0,0,0,0.5);
	padding-bottom:10px;
	padding-top:10px;
	padding-left:5px;
	padding-right:5px;
	background-color:rgba(255,255,255,0.1);
	/*border-radius:30px;
	color:black;
	background-color:lightgreen;*/
}
.dropdown:hover{
	border-color:(0,0,0,0.5);
	padding-bottom:6px;
	padding-top:15px;
	padding-left:5px;
	padding-right:5px;
background-color:rgba(255,255,255,0.1);
}
.dropdown-content a:hover {
	background-color:rgba(3,3,3,0.1); /*#f1f1f1*/
	}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
<div id="top">
<nav class="top1">
<div id="topcon">
<li><a href=""><i class="fa fa-home icon"> &nbsp;Home</i></a></li>
<li><a href="Post.php?ur='.$ur.'&r='.$rt.'"><i class="fas fa-globe-americas icon">&nbsp;Post Packages</i></a></li>
<li><a href="Request.?' .$ur.'"><i class="	fas fa-cart-arrow-down icon">&nbsp;Requested Packages</i></a></li>
<li><a href="fcrises.html"><i class="fas fa-info-circle icon">&nbsp;About Us</i></a></li>
 </div>
<div class="dropdown">
   <i class="fas fa-user-circle icon1">&nbsp;&nbsp;' .$ur.'</i>
  <div class="dropdown-content" style="right:0;top:48">
  <a><i class="fa fa-user"> LoggedIn as Admin</i></a>
  <a href="logout.php"><i class="fas fa-power-off"> Logout</i></a>
  </div>
  </div> 
  </nav>
 </div>
 <div class="featured_slider">
      	<!-- begin: sliding featured banner ->
         <div id="featured_border" class="jcarousel-container">
            <div id="featured_wrapper" class="jcarousel-clip">
               <ul id="featured_images" class="jcarousel-list">
                  <li><img src="images\img_nature_wide.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="images\img_snow_wide.jpg" width="965" height="280" alt="" /></li>
                  <li><img src="images\img_mountains_wide.jpg" width="965" height="280" alt="" /></li>
               </ul>
            </div>
            <div id="featured_positioner_desc" class="jcarousel-container">
               <div id="featured_wrapper_desc" class="jcarousel-clip">
                  <ul id="featured_desc" class="jcarousel-list">                 
                     <li>
                        <div>
                           <p><b>We are here to connect the farmers directly to the whole sellers, so the middle man expenditure is cut off. The moto of AgriConnect is to give the right to the farmers to fix the rate for there own products.</b>
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p><b>The Users of the same region , where connected to eachothers , So the crops of there own region where cultivated and distributed to there nearby markets were the transport expenditure cut offed.</b>
                           </p>
                        </div>
                     </li> 
                     <li>
                        <div>
                           <p><b>The farmers from there own place they can sale there products, without travel to the outstations to sale there products. We transport the goods right from the farm land to the shops.Here the travelling expenditure is cut offed</b> 
                           </p>
                        </div>
                     </li> 
                  </ul>
               </div>

            </div>
            <ul id="featured_buttons" class="clear_fix">
               <li>1</li>
               <li>2</li>
               <li>3</li>
            </ul>
         </div>
         <!-- end: sliding featured banner ->
</div>
</body>
</html>';
}
}
?>