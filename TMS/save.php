<?php
$pkid=$_POST["pkid"];
$days=$_POST['days'];
$pl=$_POST['pl'];
$pp=$_POST['pp'];
$po=$_POST["po"];
$ldb=$_POST['lb'];
$doj=$_POST['dj'];
$tp=$_POST['tp'];
$photos=explode(",",$_POST["slide"]);
$arr="";
for($i=0;$i<count($photos);$i++){
$arr=$arr.basename($photos[$i]);
if($i<count($photos)-1){
	$arr=$arr.",";
}
}
//$arr=str_replace("\\fakepath\\","/xampp1/htdocs/TMS/images/",$photos);
$my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
if($_POST){
//$con=odbc_connect("TMS1","","");
$qc="Insert into package (pkid,days,po,tp,pp,photos,pl,ldb,doj) values ('$pkid','$days','$po','$tp','$pp','$arr','$pl','$ldb','$doj')";
//$rs=odbc_exec($con,$qc);
//$qc2="Select * from package where pkid='$pkid'";
//$user="Select photos from package where pkid='$pkid'";
//$rs1=odbc_exec($con,$user);
//while(odbc_fetch_row($rs1)){
//$ur=odbc_result($rs,1);
//}
//$res=odbc_exec($con,$qc);
//$cnt=odbc_fetch_row($res);
$rs=$my->query($qc);
if($rs){
echo "Package Id: ".$pkid."\nNo.of.days: ".$days."\nPlaces explore: ".$tp."\nLimit: ".$pl. "\nPrice: ".$pp."\nLast date for booking: ".$ldb. "\nDate of journey: ".$doj."\nPhoto: ".$arr."\nOffer: ".$po;
}
else{
echo 'Request Failed...';
}
}

?>