<?php
$my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
if($_POST){
	$n1=$_POST["n1"];
$d1=$_POST["d1"];
$p1=urlencode($_POST["p1"]);
$pw1=$_POST["pw1"];
$uid=$_POST["uid"];
$sql  = "UPDATE Reg set uname='$n1',dob='$d1',ph='$p1',pwd='$pw1' where email='$uid'";
$update=$my->query($sql);
if($update){
 echo 'Updated'.$n1.','.$d1.','.$p1.','.$pw1.','.$uid;
}
else
echo "Failed";	
	//echo '<script></script>';
/*$uname="Select uname from Reg where email='$uid'";
$udob="Select dob from Reg where email='$uid'";
$uph="Select ph from Reg where email='$uid'";
$upd="Select pwd from Reg where email='$uid'";
$un=odbc_exec($con,$uname);
$ud=odbc_exec($con,$udob);
$up=odbc_exec($con,$uph);
$upd=odbc_exec($con,$upd);
while(odbc_fetch_row($un)){
$name=odbc_result($un,1);
$mail=odbc_result($um,1);
$dobd =odbc_result($ud,1);
$ph=odbc_result($up,1);
$pwd=odbc_result($upd,1);
}*/
}
?>