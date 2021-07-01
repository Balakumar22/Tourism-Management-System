<html>
<head>
<title>TMS</title>
<link rel="stylesheet" href="home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  
<style>
::placeholder {
    color:gray;
    font-family: Andalus;
  opacity: 0.5; /* Firefox */
}
/*focus:[contenteditable] {
  background-color:lightgreen;
}*/
[contenteditable] {
  outline: 0px solid transparent;
}
 input:focus, textarea:focus, select:focus{
        outline: none;
    }
	 button:focus, textarea:focus, select:focus{
        outline: none;
    }
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

#togglePassword {
    position:relative;
	left:345px;
	bottom:30px;
	margin-right: -30px;
    cursor: pointer;
}
#togglePassword1{
	height:16px;
position:relative;
	left:345px;
	bottom:30px;
	margin-right: -30px;
    cursor: pointer;
}
#togglePassword2{
    height:16px;
	position:relative;
	left:345px;
	bottom:30px;
    cursor: pointer;
}
</style>
</head>
<body>
<frame>
<div id="tp">
<Button id="reg" onclick="reg()">Register</Button><Button id="log" onclick="log()">Login</Button>
</div>
<div id="pl">
</div>
<form id="fr"  style="display:none">
<!--<i id="ulog" src="./image/user.png" width="45px" height="45px"/>-->
<i class="fa fa-user icon"></i>
<input id="uid" type="email" name="uid" placeholder="Enter UserId"></input><br>
<i class="fa fa-key icon"></i>
<input id="pwd" type="password" name="pwd" placeholder="Enter Password" />
 <i class="far fa-eye" id="togglePassword"></i><br>
<input type="button" name="user" class="lg" id="lg" value="Login" onclick="login(this.name)"/><input type="button" class="lg" id="lg1" value="Login Us Admin" name="admin" onclick="login(this.name)" /><br>
</form>
<form id="fr1" method="post" >
<!--<fieldset>-->
<div class="tab">
<i class="fa fa-user icon"></i>
<input id="name" type="text" name="name" placeholder="Enter your name " required></input><br>
<i class="fas fa-calendar-alt icon"></i>
<input id="dob" type="date" name="dob" required></input><br>
 </div>

<div class="tab">
<i class="fa fa-envelope icon"></i>
<input id="mail" type="email" name="mail" placeholder="Enter email_Id" pattern="[0-9]{2}[a-z]{3}[0-9]{3}@mcet.in"></input><br>
<i class="fa fa-phone icon"></i>
<input id="ph" type="tel" name="ph" placeholder="Enter phone_no" pattern="[+91]{3}-[0-9]{10}"></input><br>
 </div>
<div class="tab">
<i class="fa fa-lock icon"></i>
<input id="npwd" type="password" name="npwd" placeholder="Enter New Password" required></input>
<i class="far fa-eye" id="togglePassword1"></i><br>
 <i class="fa fa-key icon"></i>
 <input id="cpwd" type="password" name="cpwd" placeholder="Enter Confirm Password" required></input>
 <i class="far fa-eye" id="togglePassword2"></i><br>
  </div>
 <div style="overflow:auto;">
    <div style="float:right;" id="in">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> 
	  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>    
	</div>
  </div>

<!--</fieldset>-->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
 <script src="home.js"></script>

</frame>
</center>
</div>
</body>
</html>
<?php 
if($_POST){
/*$conn='C:\xampp\htdocs\TMS\TMS.accdb';
$con=odbc_connect("TMS1","","");*/
$name=$_POST["name"];
$mail=$_POST["mail"];
$dob=$_POST["dob"];
//$gen=$_POST["gen"];
$ph=$_POST["ph"];
$pwd=$_POST["cpwd"];
$my=$my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
//$conn =new PDO("odbc:DRIVER={Microsoft Access Driver(*.mdb,*.accdb)}; DBQ=$con;");
//$qc="select * from CSE";
$qc="Insert into Reg (email,uname,dob,ph,pwd) values ('$mail','$name','$dob','$ph','$pwd')";
//$rs=odbc_exec($con,$qc);
$rs=$my->query($qc);
if($rs){
echo '<script>alert("Registered Successfully")</script>';
echo'<script>log()</script>';
}
else{
echo '<script>alert("Registered Failed")</script>';
}
}
?>