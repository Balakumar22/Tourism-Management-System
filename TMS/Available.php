<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link href='C:/Users/BALA/Desktop/Bootstrap/css/bootstrap.min.css'>-->
<style>
::root{
--line-border-fill:orange;	
--line-border-empty:#bdbdbd;
}


.pay{
font-size:16px;
}
table{
width:100%;
}
.td{
justify-content:space-between;
}
.np{
	 width: 40.68%;
	 margin: 5px 0 22px 0;
  padding: 15px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.pd{
	 width: 83%;
	 margin: 5px 0 22px 0;
  padding: 15px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.cost{
	 width: 88%;
	 height:60px;
	 margin: 5px 0 22px 0;
  padding: 5px;
  font-size:30px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  text-indent:15px;
}
/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn:disabled,.signupbtn:disabled{
  background-color: #bdbdbd;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
   z-index:1;/* Sit on top */
  top:50px;
left:0px;
  width: 100%; /* Full width */
 height:100%;/* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(3, 3, 3,0.5);
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 4% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 12px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  text-shadow: 0 0 1px #FFFFFF, 0 0 2px #FFFFFF;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.icon3{
	position:relative;
	top:4px;
	padding: 12.5px;
  margin: 5px 0 22px 0;
background-color:black;
font-size:20px;
color:white;
width:30px;
text-align:center;
}
.icon4{
font-size:25px;
position:relative;
	top:-1px;
	padding: 17.7px;
  margin: 5px 0 22px 0;
background-color:black;
color:white;
width:50px;
text-align:center;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}
.tag{display: none}
.progress-bar{
display:flex;
justify-content:space-between;
position:relative;
left:80px;
margin-top:18px;
margin-bottom:30px;
max-width:100%;
width:550px;
z-index:2;
}
.progress-bar::before{
content:"";
background-color:#bdbdbd;
position:absolute;
top:50%;
left:0;
transform:translateY(-50%);
height:4px;
width:100%;
z-index:-1;
transition:0.8s ease;
}
.pro{
background-color:green;
position:absolute;
top:50%;
left:0;
transform:translateY(-50%);
height:4px;
width:10%;
z-index:-1;
transition:0.8s ease;
}
.circle{
background-color:white;
color:#999;
border-radius:50%;
height:50px;
width:50px;
border:3px solid #b2bec3;
display:flex;
align-items:center;
justify-content:center;
transition:0.8s ease;
}
.circle.act{
	border-color:green;
	background-color:lightgreen;
}
.fa-passport,.fa-cc-amazon-pay,.fa-credit-card,.fa-thumbs-up{
font-size:1.8rem;
color:black;
}
.tick{
	position:relative;
	left:30%;
	justify-content:center;
}
.label{
  position: relative;
  height: 250px;
  width: 250px;
  display: inline-block;
  border: 2px solid rgba(255,255,255,0.2);
  border-radius: 50%;
  border-left-color: #5cb85c;
  animation: rotate 1.2s linear infinite;
}
@keyframes rotate {
  50%{
    border-left-color: #9b59b6;
  }
  75%{
    border-left-color: #e67e22;
  }
  100%{
    transform: rotate(360deg);
  }
}
.label .check-icon , .h1{
  display: none;
}
.label :after{
border-color:green;
}
.h1 :after{
	 content: "";
animation:h1v 0.8s ease;
}
.label .check-icon:after{
  position: absolute;
  content: "";
  top: 50%;
  left: 38px;
  transform: scaleX(-1) rotate(135deg);
  height: 150px;
  width: 75px;
  border-radius:10px;
  border-top: 20px solid #fff;
  border-right: 20px solid #fff;
  background-color:#5cb85c;
  transform-origin: left top;
  animation: check-icon 0.8s ease;
}
@keyframes h1v{
0%{
  
}
20%{
  visibility:visible;
}
  40%{
   #s2{
	visibility:visible;   
   }
  }
  70%{
  #s3{
  visibility:visible;
  }
  }
  100%{
   #s4{
   visibility:visible;
   }
  }
}
@keyframes check-icon {
  0%{
    height: 0;
    width: 0;
    opacity: 1;
  }
  20%{
    height: 0;
    width: 75px;
    opacity: 1;

  }
  40%{
    height: 100px;
    width: 75px;
    opacity: 1;
  }
  100%{
    height: 150px;
    width:75px;
    opacity: 1;
  }
}
.input{
  display: none; 
}
.input:checked ~ .label .check-icon ,.h1 {
  display: block;
}

.input:checked ~ .label{
  animation: none;
  border-color:#fff;
  background-color:#5cb85c;
  transition: border 0.5s ease-out;
}
.det{
border:1px solid #dddddd;
}
.det td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 10px;
}

.det tr:nth-child(even) {
  background-color: #dddddd;
}
.pbtn{
width:150px;
height:35px;
background-color:purple;
border-radius:25px;
}
</style>
<script src="jquery-3.6.0.min.js"></script>
</head>
<?php
include"header.html"; 
echo '<script src="available.js"></script>
 <script src="book.js"></script>
 <div id="addup">';
$my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
$qc="Select * from package";
 $rs=$my->query($qc);
$ind=0;
$fct=1;
$fcnt=1;
$i=0;
$form=0;
$in=1;
$st=1;
//$end=$cnt;
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
$img=$row["photos"];
$pkid=$row["pkid"];
$days=$row["days"];
$pl=$row["pl"];
$at=$row["at"];
$pp=$row["pp"];
$lb=$row["ldb"];
$dj=$row["doj"];
$po=$row["po"];
$tp=$row["tp"];
$arr=explode(",",$img);
//for($i=1;$i<=$cnt;$i++){
	if($i==0){
		$result = "select count(1) FROM package where at<'$pl'";
$rss=$my->query($result);
$cnt = $rss->fetchColumn();
	}
 if($at<$pl){
	 $i=$i+1;
	if($i==1){
echo '<div class="main" style="display:block">
<form id="add'.$i.'" >
<div class="slideshow-containerup" id="sc'.$i.'" >';
	}
else{
	echo '<div class="main" style="display:none">
	<form class="main'.$i.'" id="add'.$i.'" >
<div class="slideshow-containerup main'.$i.'" id="sc'.$i.'" >';
	}
for($j=0;$j<count($arr);$j++){
	if($j==0){
echo '<div class="mySlides fade'.$fct.'" id="mySlides fade'.($fct+$j) .'" style="display: block;">
<img class="imgs" id="img'.($fct+$j) .'" src="images\\'.$arr[$j].'" style="position:relative;width:100%;height:200px;top:10px;"/>
<div class="numbertext" style=" background-color:rgba(3,3,3,0.2);color:#f2f2f2;font-size: 15px;font-style:bold;padding: 8px 12px;position: absolute;top: 10px;">'.$j+1 ." / ".count($arr).'</div></div>';
	}
	else{
		echo '<div class="mySlides fade'.$fct.'" id="mySlides fade'.($fct+$j) .'" style="display: none;">
<img class="imgs" id="img'.($fct+$j) .'" src="images\\'.$arr[$j].'" style="position:relative;width:100%;height:200px;top:10px;"/>
<div class="numbertext" style=" background-color:rgba(3,3,3,0.2);color:#f2f2f2;font-size: 15px;font-style:bold;padding: 8px 12px;position: absolute;top: 10px;">'.$j+1 ." / ".count($arr).'</div></div>';
	}
}
$ava=$pl-$at;
echo'<a class="prev" onclick="plusSlides(-1,'.$ind.')">'.htmlspecialchars("❮").'</a>
<a class="next" onclick="plusSlides(1,'.$ind.')">'.htmlspecialchars("❯").'</a>
</div>
<input maxlength="16" class="pkidup" id="pkid'.$i .'" placeholder="Enter the package Id" value="'.$pkid.'" disabled>
 <input class="daysup" id="days'.$i.'" placeholder="No.of days" value="'.$days.' days" disabled><br>
 <input class="plup" type="number" id="pl'.$i.'" placeholder="Enter the Pasangers Limit" value="'.$pl.'" disabled>
 <input class="ppup"  id="pp'.$i.'" placeholder="Price of the package" value="'.$pp.' /person" disabled><br>
  <input class="ldbup" type="date" id="ldb'.$i.'" placeholder="Enter the Pasangers Limit" value="'.$lb.'" disabled>
 <input class="dojup" type="date" id="doj'.$i.'" placeholder="Price of the package" value="'.$dj.'" disabled><br>
 <input class="tpup" type="text" id="tp'.$i.'" placeholder="Places going to be explored" value="'.$tp.'" disabled><br>
 <textarea class="poup"  id="po'.$i.'" placeholder="Enter the package Description" disabled>'.$po.'</textarea><br>
 <input class="Addtocart" type="Button" id="cart'.$i.'" onclick="cart('.$i.')" value="Add to Cart" />
 <input class="Book" type="Button" id="Book'.$i.'" onclick="Bookpack('.$i.')" value="Book package" /><br>
</form>
<div id="id01'.$i.'" class="modal">
  <span onclick="fclose('.$i.')" class="close" title="Close form" style="font-size:20px;">❌</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
	<div class="progress-bar">
	<div class="pro"></div>
	<div class="circle act" id="c'.$i.'"><i class="fas fa-passport"></i></div>
	<div class="circle" id="c'.$i.'"><i class="fab fa-cc-amazon-pay"></i></div>
	<div class="circle" id="c'.$i.'"><i class="far fa-credit-card"></i></div>
	<div class="circle" id="c'.$i.'"><i class="fas fa-thumbs-up"></i></div>
	</div>
	<div class="tag'.$i.'"> 
      <h1>Book Tickets</h1>
      <p><b>Package Id : </b>'.$pkid.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Vacation period : </b>'.$days.' days</p><br>
	  <p><b>Ticket Cost : </b>'.$pp.'/person&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Date of journey : </b>'.date("d/m/Y", strtotime($dj)).'</p><br>
	  <p><b>Total Tickets : </b>'.$pl.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Available Ticket : </b>'.$ava.'</p><br>
      <hr>
      <label for="np"><b>No of pasanger</b></label><br>
      <i class="fa fa-male icon3"></i><input class="np" type="number" id="npm'.$i.'" placeholder="Enter no of Male pasanger" name="np" oninput="tcost('.$i.','.(int)$pp.')" required>
      <i class="fa fa-female icon3" style="margin-left:20px;"></i><input class="np" type="number" id="npf'.$i.'" placeholder="Enter no of Female pasanger" name="np" oninput="tcost('.$i.','.(int)$pp.')" required>
      <label for="cost"><b>Total cost</b></label><br>
	  <i class="fas fa-rupee-sign icon4"></i><input name="cost" class="cost" type="currency" id="cost'.$i.'" value="₹0" disabled>
      </div>
	  <div class="tag'.$i.'">
	  <h1>Bill Details</h1>
	  <table class="det">
	  <tr>
	  <th>Items</th>
	  <th>Quantity</th>
	  </tr>
	  <tr>
	  <td> Traveling places :</td>
	  <td>'.$tp.'</td></tr>
	  <tr>
	  <td> No.of Male pasangers :</td>
	  <td id="hnmp'.$i.'"></td></tr>
	  <tr>
	  <td> No.of Female pasangers :</td>
	  <td id="hnfp'.$i.'"></td></tr>
	  <tr>
	  <td> Total Pasangers :</td>
	  <td id="ttp'.$i.'"></td></tr>
	  <tr>
	  <td> Cost for a ticket :</td>
	  <td> ₹'.$pp.'</td></tr>
	  <tr>
	  <td> Total Cost :</td>
	  <td id="tc'.$i.'"></td></tr>
	  </table>
	  <br>
	  </div>
	  <div class="tag'.$i.'">
	  <h2 class="fs-title">Payment Information</h2>
                                    <div class="radio-group">
                                        <div class="radio" data-value="credit"><img src="https://i.imgur.com/XzOzVHZ.jpg" width="200px" height="100px"></div>
                                        <div class="radio" data-value="paypal"><img src="https://i.imgur.com/jXjwZlj.jpg" width="200px" height="100px"></div> <br>
                                    </div> 
									<table>
									<tr class="row">
									<td><label class="pay">Card Holder Name*</label></td>
									<td><label class="pay">Card Number*</label></td>
   									</tr>
									<tr>
									<td><i class="fas fa-user-alt icon3"></i><input type="text" class="pd" name="holdername" placeholder="" /></td>
                                    <td><i class="fas fa-id-card icon3"></i><input class="pd" type="text" name="cardno" placeholder="" /> </td></tr>
                                    <tr class="row"> 
									<td><label class="pay">CVC*</label></td> 
									<td><label class="pay">Phone Number*</label></td></tr> 
									<tr>
									<td><i class="fas fa-user-alt icon3"></i><input class="pd" type="password" name="cvcpwd" placeholder="***" /></td>
									<td><i class="fas fa-phone icon3"></i><input class="pd" type="number" name="phno" placeholder="***" /></td> 
                                    </tr>
                                    <tr class="row">
                                        <td> <label class="pay">Expiry Month*</label></td> 
										<td> <label class="pay">Expiry Year*</label></td> </tr>
                                        <tr><td class="col"><i class="fas fa-user-alt icon3"></i> <select class="pd" id="month" name="expmonth">
                                                <option selected>Month</option>
                                                <option>January</option>
                                                <option>February</option>
                                                <option>March</option>
                                                <option>April</option>
                                                <option>May</option>
                                                <option>June</option>
                                                <option>July</option>
                                                <option>August</option>
                                                <option>September</option>
                                                <option>October</option>
                                                <option>November</option>
                                                <option>December</option></td>
                                            </select> 
											<td><i class="fas fa-user-alt icon3"></i><select class="pd" id="year" name="expyear">
                                                <option selected>Year</option>
												<option>2021</option>
												<option>2022</option>
												<option>2023</option>
												<option>2024</option>
												<option>2025</option>
												<option>2026</option>
												<option>2027</option>
												<option>2028</option>
												<option>2029</option>
												<option>2030</option>
                                            </select> </td>
                                    </tr>
									</table>
	  </div>
	  <div class="tag'.$i.'">
	  <div class="tick">
	   <input class="input" type="checkbox" id="check">
	  <label class="label" for="check">
         <div class="check-icon"></div>
      </label><br>
	  <h1 for="check" style="visibility:hidden;" class="h1">Hi<span style="visibility:hidden;" id="s1">Booked</span><span style="visibility:hidden;" id="s2"> Succes</span><span style="visibility:hidden;" id="s3">sfully</span><span style="visibility:hidden;" id="s4">...</span></h1>
	  </div>
	  </div>';
if($i==1){
echo '	  <div class="clearfix">
        <button type="button" onclick="nextt(-1,'.$i.','.$cnt.')"  class="cancelbtn" disabled>Previous</button>
        <button type="button"  class="signupbtn" id="signupbtn'.$i.'" onclick="nextt(1,'.$i.','.$cnt.')">Next</button>
      </div>
    </div>
  </form>
</div>';
}
else{
echo '	  <div class="clearfix">
        <button type="button" onclick="nextt(-1,'.$i.','.$cnt.')"  class="cancelbtn">Previous</button>
        <button type="button"  class="signupbtn" id="signupbtn'.$i.'" onclick="nextt(1,'.$i.','.$cnt.')">Next</button>
      </div>
    </div>
  </form>
</div>';
}	  
if($in==1){
echo '<div id="fnm">'.$i.' / '.$cnt. '</div>';
$in=$in+1;
}
echo '</div>
<a class="prev1" id="p'.$i.'" onclick="formchange(-1)" >'.htmlspecialchars("❮").'</a>
<a class="next1" id="n'.$i.'" onclick="formchange(1)">'.htmlspecialchars("❯"). '</a> ';
echo	'<script>
        loaded('.$fct.');
		loadform('.$form.');
</script>';
$ind=$ind+1;
$form=$form+1;
	for($k=0;$k<count($arr);$k++)
	$fct=$fct+1;
$in=1;
}
}

//}
?>

</div>
</body>
</html>