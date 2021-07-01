<?php
$utype=$_POST["utype"];
if($_POST){
//$con=odbc_connect("TMS1","","");
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
}
/*if($_GET){
$uid=$_GET["uid"];
$pwd=$_GET["pwd"];
}*/
 $my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
if($utype=="user"){
//$my=mysql_connect("localhost","root","","tms");
//$user="Select uname from Reg where email='$uid' and pwd='$pwd'";
$qc="Select * from Reg where email='$uid' and pwd='$pwd'";
$rs=$my->query($qc);
$cnt=null;
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
$ur=$row["uname"];
$cnt=$cnt+1;
}
/*$rs=odbc_exec($con,$user);
while(odbc_fetch_row($rs)){
$ur=odbc_result($rs,1);
}
$res=odbc_exec($con,$qc);
$cnt=odbc_fetch_row($res);
$ct=0;*/
if($cnt==null){
	echo "Login Failed";
	//echo '<script>self.location="home.php"</script>';
	//echo '<script>log()</script>';
}

if($cnt==1){
	echo "Login Successfully...";
	$rt=strlen($ur)*10;
$lt=strlen($ur)*12;?>
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
<div id="topcon" style="right:<?php echo ($rt+60)?>px;">
<li><a href="tms.php"><i class="fa fa-home icon2"><spacer style="margin-left:5px;">Home</spacer></i></a></li>
<li><a href="Available.php"><i class="fas fa-globe-americas icon2"><spacer style="margin-left:5px;">Available Packages</spacer></i></a></li>
<li><a href="Addtocart.php?<?php echo "uid=$uid" ?>"><i class="	fas fa-cart-arrow-down icon2"><spacer style="margin-left:5px;">My Cart</spacer></i></a></li>
<li><a href="fcrises.html"><i class="fas fa-info-circle icon2"><spacer style="margin-left:5px;">About Us</spacer></i></a></li>
 </div>
<div class="dropdown" style="width:<?php echo $rt+50?>px;">
   <i class="fas fa-user-circle icon1"><spacer style="margin-left:5px;"><?php echo $ur?></spacer></i>
   <input type="hidden" id="eid" name="eid" value="<?php echo $uid?>"/>
  <div class="dropdown-content" style="right:0;top:48;min-width:<?php echo $rt+60?>px;">
  <a href="profile.php?<?php echo "uid=$uid" ?>" ><i class="fa fa-user"> Profile</i></a>
  <a href="logout.php"><i class="fas fa-power-off"> Logout</i></a>
  </div>
  </div> 
  </nav>
 </div>
<?php }
 }
 ?>
 <?php
 if($utype=="admin"){
	$qc="Select * from Admin where email='$uid' and pwd='$pwd'";
//$user="Select uname from Reg where email='$uid' and pwd='$pwd'";
$rs=$my->query($qc);
$cnt=null;
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
$ur=$row["uname"];
$cnt=$cnt+1;
}
if($cnt==null){
	echo "Your are Not an Admin";
	//echo '<script>self.location="home.php"</script>';
}
if($cnt==1){

	$rt=strlen($ur)*10;
$lt=strlen($ur)*12; ?>
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
<div id="topcon" style="right:<?php echo ($rt+60)?>px;">
<li><a href="tms.php"><i class="fa fa-home icon2"><spacer style="margin-left:5px;">Home</spacer></i></a></li>
<li><a href="Post.php"><i class="fas fa-globe-americas icon2"><spacer style="margin-left:5px;">Post Packages</spacer></i></a></li>
<li><a href="Request.php"><i class="	fas fa-cart-arrow-down icon2"><spacer style="margin-left:5px;">Requested Packages</spacer></i></a></li>
<li><a href="updpost.php"><i class="fas fa-upload icon2"><spacer style="margin-left:5px;">Uploaded Packages</spacer></i></a></li>
 </div>
<div class="dropdown" style="width:<?php echo $rt+50?>px;">
   <i class="fas fa-user-circle icon1"><spacer style="margin-left:10px;"><?php echo $ur?></spacer></i>
  <div class="dropdown-content" style="right:0;top:48;min-width:<?php echo $rt+60?>px;">
  <a><i class="fa fa-user"> LoggedIn as Admin</i></a>
  <a href="logout.php"><i class="fas fa-power-off"> Logout</i></a>
  </div>
  </div> 
  </nav>
 </div>
<?php }
 }
 ?>