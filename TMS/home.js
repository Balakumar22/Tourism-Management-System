//document.getElementById("fr1").onsubmit=function(){submit1()};
var subt=document.createElement("input");
	subt.id="subBtn";
var count=0;
var subt;
tp1 = document.querySelector('#togglePassword1');
tp2 = document.querySelector('#togglePassword2');
password1 = document.querySelector('#npwd');
password2 = document.querySelector('#cpwd');
tp1.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password1.getAttribute('type') === 'password' ? 'text' : 'password';
    password1.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
tp2.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
    password2.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
//if(document.getElementById("subBtn").clicked==true){
	//  alert("Submitted");
//}
//else{
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab	
//}
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML="Submit";
	//subt.setAttribute("onclick","submit1()");
	//subt.type="submit";
	//subt.innerHTML = "Submit";
	//document.getElementById("in").appendChild(subt);
	//document.getElementById("subBtn").style.cssFloat="right";
	//document.getElementById("subBtn").style.visibility="visible";
  }  
  else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}
function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
	   if( document.getElementById("npwd").value != document.getElementById("cpwd").value){
  document.getElementById("cpwd").placeholder= "Password Mismatch";
	  document.getElementById("cpwd").value='';
      document.getElementById("cpwd").className = " invalid";
	  var error_message = '';
	if(document.getElementById("mail").value == '') {
		error_message+="Please Fill Email Address";
	}
	if(document.getElementById("npwd").value == '') {
		error_message+="Please Fill Password";
	}
	if(document.getElementById("ph").value == '') {
		error_message+="Please Fill Mobile Number";
	}
	// Display error if any else submit form
	if(error_message) {
		alert(error_message);
		return false;
	} 
      //valid = false;
     currentTab=currentTab-n;
	 //return false;
	}
    //...the form gets submitted:
    else{
	document.getElementById("fr1").submit();
	//log();
	//window.stop();
	return false;
	}
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
/*function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  //alert(currentTab);
  // if you have reached the end of the form...
  if (currentTab == x.length - 1) { 
  var but=document.createElement("input");
	but.id="subBtn";
	but.setAttribute('type', 'button');
	but.setAttribute('value', 'Submit');
	//but.setAttribute('onclick','submit1()');
	 document.getElementById("in").appendChild(but);
  }
  if (currentTab >= x.length) {
    // ... the form gets submitted:
	 if( document.getElementById("npwd").value != document.getElementById("cpwd").value){
  document.getElementById("cpwd").placeholder= "Password Mismatch";
	  document.getElementById("cpwd").value='';
      document.getElementById("cpwd").className = " invalid";
      //valid = false;
     currentTab=currentTab-n;
	}
    /*document.getElementById("submit").addEventListener('click', function (e) {
		 if(document.getElementById("submit").clicked==true){
			document.getElementById("fr").action="reg.php";
			alert("Registered Successfully");
		 }
	//log();
	});
  // Otherwise, display the correct tab:
  return false;
}
  showTab(currentTab);
}*/
function validateForm() {
	
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}
function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
 
}
 function submit1(){   
 var nm=document.getElementById('name').value;
 var db=document.getElementById('dob').value.replace(/(\d{4})-(\d\d)-(\d\d)/, "$3-$2-$1");
 var ml=document.getElementById('mail').value;
 var ph=document.getElementById('ph').value;
 var np=document.getElementById('npwd').value;
 var cp=document.getElementById('cpwd').value;  
		alert("Name :"+nm+"\n"+"Dob :"+db+"\n"+"Mail :"+ml+"\n"+"Phone :"+ph+"\n Password :"+cp+","+np);
			alert("Registration Successful !!!");
			log();
		return false;
		window.stop();
 }
 function log() {
	document.getElementById("log").style.backgroundColor="rgba(3,3,3,0.5)";
	document.getElementById("reg").style.backgroundColor="rgba(3,3,3,0.4)";
	document.getElementById("reg").style.color="rgba(255,255,255,0.8)";
	document.getElementById("log").style.color="white";
	const fr=document.querySelector('#fr1');
	const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#pwd');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  var x = document.getElementById("fr");
  var y = document.getElementById("fr1");
  var z = document.getElementById("fr2");
  if (x.style.display === "none") {
	  y.style.display = "none";
    x.style.display = "block";
  } else {
    document.getElementById("fr").disabled = true;
  }
}

function reg(){
	document.getElementById("reg").style.backgroundColor="rgba(3,3,3,0.5)";
	document.getElementById("log").style.backgroundColor="rgba(3,3,3,0.4)";
    document.getElementById("reg").style.color="white";
document.getElementById("log").style.color="rgba(255,255,255,0.8)";	
	var x = document.getElementById("fr");
  var y = document.getElementById("fr1");
   if (y.style.display === "none") {
    x.style.display = "none";
	y.style.display = "block";

  } 
  else {
    document.getElementById("fr1").disabled = true;
	//this.classList.toggle('fa-eye-slash');
	//y.style.display = "block";
  }
}
function login(clicked_id){
 if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
 }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
 }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
		var fail="Login Failed ";
		var afail=" Your are Not an Admin";
		if(obj.responseText!=fail && obj.responseText!=afail){
			var doc=obj.responseText;
			alert("Login Successfully...\n");
			nav(doc);
        }
        else{
		alert(obj.responseText);
		log();
		}			
	}
 }
 var utype=clicked_id;
 var uid=document.getElementById('uid').value;
 var pwd=document.getElementById('pwd').value;
 var url="header.php";
 var val="uid="+uid+"&pwd="+pwd+"&utype="+utype;
 obj.open("POST",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}
function nav(doc){
	if(window.XMLHttpRequest){
	 obj1=new XMLHttpRequest();
 }
 else{
     obj1=new ActiveXobject("Microsoft.XMLHTTP");
 }
 obj1.onreadystatechange=function(){
    if(obj1.readyState==4 && obj1.status==200){
		if(obj1.responseText!=null){
		var nxtp="tms.php";
		window.location.href=nxtp;
		}
	}
	}
			var url="nav.php";
 var val="doc="+doc;
 obj1.open("POST",url,true);
 obj1.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj1.setRequestHeader("content-length",val.length);
 obj1.setRequestHeader("connection","close");
 obj1.send(val);
}