<?php
//$con=odbc_connect("TMS1","","");
$uid=$_GET['uid'];
$umail="Select email from Reg where email='$uid'";
$uname="Select uname from Reg where email='$uid'";
$udob="Select dob from Reg where email='$uid'";
$uph="Select ph from Reg where email='$uid'";
$upd="Select pwd from Reg where email='$uid'";
//$um=odbc_exec($con,$umail);
//$un=odbc_exec($con,$uname);
//$ud=odbc_exec($con,$udob);
//$up=odbc_exec($con,$uph);
//$upd=odbc_exec($con,$upd);
$qc="Select * from Reg where email='$uid'";
 $my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
 $rs=$my->query($qc);
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
$name=$row["uname"];
$mail=$row["email"];
$dobd =$row["dob"];
$ph=$row["ph"];
$pwd=$row["pwd"];
}
$dob=date("Y-m-d ", strtotime($dobd));
echo'<html>
<head>
<title>profile</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
body{
	background-image:url("TMS.jpeg");
	background-size:cover;
}
h3{
color:white;
font-style:bold;
}
.btn {
position:absolute;
left:440px;
top:650px;
 height:50px;
  background: #a6683c;
  color: white;
  min-width: 100px;
  text-align: center;
}
.home{
position:absolute;
left:40px;
top:650px;
 height:50px;
  background: dodgerblue;
  color: white;
  min-width: 100px;
  text-align: center;
}
#container{
	position:absolute;
	top:100px;
	left:545px;
	max-width:600px;
	height:630px;
	background-color:rgba(3,3,3,0.5);
	padding-bottom:40px;
	padding-left:40px;
	padding-right:40px;
	padding-top:40px;
  }
  #upnm{
		height:50px;
width:500px;
margin-top:6px;
padding:10px;
}
#updob{
	height:50px;
width:500px;
margin-top:6px;
padding:10px;
}
#upm{
	height:50px;
width:500px;
margin-top:6px;
padding:10px;
}
#upph{
		height:50px;
width:500px;
margin-top:6px;
padding:10px;
}
#uppd{
		height:50px;
width:500px;
margin-top:6px;
padding:10px;
}
#togglePassword {
    position:relative;
	font-size:20px;
	left:460px;
	bottom:35px;
	margin-right: -30px;
    cursor: pointer;
}
</style>
<script>
var cnt=0;
function edit(){
document.getElementById("upnm").disabled=false;
document.getElementById("updob").disabled=false;
document.getElementById("upph").disabled=false;
document.getElementById("uppd").disabled=false;
document.getElementById("btn").remove();
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#uppd");
togglePassword.addEventListener(\'click\', function (e) {
    // toggle the type attribute
    const type = password.getAttribute(\'type\') === \'password\' ? \'text\' : \'password\';
    password.setAttribute(\'type\', type);
    // toggle the eye slash icon
    this.classList.toggle(\'fa-eye-slash\');
});
var s=document.createElement("input");
s.type="button";
s.className="btn";
s.id="sbtn";
s.setAttribute("onclick","save()");
s.value="Save";
var ic=document.createElement("i");
ic.className="fas fa-edit icon";
document.getElementById("cbtn").appendChild(s);
document.getElementById("cbtn").appendChild(ic);
}
function save(){
	if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
 }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
 }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
		if(obj.responseText!=null){
			var doc=obj.responseText;
			alert("Datas you edited is updated and the changes will appear when you loggedIn next Time\n"+doc);
			cnt=doc;
			document.getElementById("hbtn").click();
        }
        else{
		alert(obj.responseText);
		}			
	}
 }
 var uid=document.getElementById("uid").value;
var name=document.getElementById("upnm").value;
var dob=document.getElementById("updob").value;
var ph=document.getElementById("upph").value;
var pwd=document.getElementById("uppd").value;
 var url="profilesave.php";
 var val="n1="+name+"&d1="+dob+"&p1="+ph+"&pw1="+pwd+"&uid="+uid;
 obj.open("POST",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}
</script>
</head>
<body>
<input type="hidden" value="'.$uid.'" id="uid">';
if($_POST){
		echo '<script> $("form").submit(function(){
  $.post($(this).attr("action"), $(this).serialize());
  return false;
});</script>';
	 $rs=$my->query($qc);
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
$name=$row["uname"];
$mail=$row["email"];
$dobd =$row["dob"];
$ph=$row["ph"];
$pwd=$row["pwd"];
}
$dob=date("Y-m-d ", strtotime($dobd));
	echo '

<div id="container">
<form method="post" role="form" target="_self">
<h3>Name :</h3>
<input id="upnm" name="un" value="'.$name.'" disabled><br>
<h3>Email :</h3>
<input id="upm" name="um" value="'.$mail.'" disabled><br>
<h3>DOB :</h3>
<input type="date" name="ud" id="updob" value='.$dob.' disabled><br>
<h3>Phone_no :</h3>
<input id="upph" name="up" value="'.$ph.'" pattern="[+91]{3}-[0-9]{10}" disabled><br>
<h3>Password :</h3>
<input type="password" id="uppd" name="upd" value="'.$pwd.'" disabled>
 <i class="far fa-eye" id="togglePassword"></i><br>
<div id="cbtn"><button type="button" class="btn" id="btn" onclick="edit()"><i class="fas fa-edit icon" disabled></i> Edit</button></div>
</form>
</div>
	<script>
var back=document.createElement("button");
back.id="home";
back.className="home";
back.innerHTML=\'<i class="fas fa-home"></i> back\';
back.onclick="history.go(-1)";
document.getElementById("cbtn").appendChild(back);
document.getElementById("btn").innerHTML=\'<i class="fas fa-edit"></i> Saved\';
</script>
</body>
</html>';
}
else{
echo'
<body>
<div id="container">
<form method="post" role="form" target="_self">
<h3>Name :</h3>
<input id="upnm" name="un" value="'.$name.'" disabled><br>
<h3>Email :</h3>
<input id="upm" name="um" value="'.$mail.'" disabled><br>
<h3>DOB :</h3>
<input type="date" name="ud" id="updob" value='.$dob.' disabled><br>
<h3>Phone_no :</h3>
<input id="upph" name="up" value="'.$ph.'" pattern="[+91]{3}-[0-9]{10}" disabled><br>
<h3>Password :</h3>
<input type="password" id="uppd" name="upd" value="'.$pwd.'" disabled><br>
 <i class="far fa-eye" id="togglePassword"></i><br>
<div id="cbtn">
<a href="tms.php"><button type="button" class="home" ><i class="fas fa-home icon"></i> Home</button></a>
<button type="button" class="btn" id="btn" onclick="edit()"><i class="fas fa-edit icon"></i> Edit</button></div>
<input type="submit" style="visibility:hidden;" id="hbtn">
</form>
</div>
</body>
</html>';
}
?>
