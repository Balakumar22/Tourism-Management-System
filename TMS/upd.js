var ind=0;
var frm=0;
var slideIndex = [];
var slideId = [];
var cnt=2;
//var formIndex = [];
//var formId = [];
function loaded(fct){   
	slideIndex.push(1);
slideId.push("mySlides fade"+fct);
showSlides(1,ind);
ind++;
}
/*function loadform(f){
	formIndex.push(1);
formId.push("main"+f);
alert("main"+f);
showSlides(1,frm);
frm++;
}*/
function plusSlides(n, no) {
	console.log(slideIndex[no]);
  showSlides(slideIndex[no] += n, no);
}
function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
/*function formchange(num, f){
	showSlides1(slideIndex[f] += num, f);
}
function showSlides1(num, f) {
  var i;
  var x = document.getElementsByClassName(formId[f]);
  if (num > x.length) {formIndex[f] = 1}    
  if (num < 1) {formIndex[f] = x.length}
   //x.style.display = "none";  
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[formIndex[f]-1].style.display = "block";  
}*/
var formIndex = 1;
showSlides1(formIndex);

function formchange(n,end) {
  showSlides1(formIndex += n,end);
}

function currentSlide(n,end) {
  showSlides1(formIndex = n,end);
}

function showSlides1(n,end) {
  var i;
  /*if(cnt<=end){
		if(cnt==1){
	document.getElementById("p"+end).text=" ";
		}
		else{
		document.getElementById("p"+(cnt-1)).text=" ";
		}
	document.getElementById("p"+cnt).text="❮ "+cnt;
	   cnt++;
	}
	if(cnt>end){
		cnt=1;
	}*/
  var x = document.getElementsByClassName("main");
  if (n > x.length) {formIndex = 1}    
  if (n < 1) {formIndex = x.length}
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
  }
  x[formIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " active";
}
function deletepack(n){
	if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
    }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
    }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
	        alert(obj.responseText);
			location.reload();
	    }
    }
var del="delete";
 var pkid=document.getElementById('pkid'+n).value;
 var days=document.getElementById('days'+n).value;
 var pl=document.getElementById('pl'+n).value;
 var pp=document.getElementById('pp'+n).value;
 var ldb=document.getElementById('ldb'+n).value;
 var doj=document.getElementById('doj'+n).value;
 var po=document.getElementById('po'+n).value;
 var url="update.php";
 var val="del="+del+"&pkid="+pkid;//+"&days="+days+"&pl="+pl+"&pp="+pp+"&slide="+slide+"&po="+po;
 obj.open("Post",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}
function editpack(n){
	 //document.getElementById('pkid'+n).disabled=false;
     document.getElementById('days'+n).disabled=false;
    document.getElementById('pl'+n).disabled=false;
    document.getElementById('pp'+n).disabled=false;
	document.getElementById('ldb'+n).disabled=false;
    document.getElementById('doj'+n).disabled=false;
    document.getElementById('po'+n).disabled=false;
	document.getElementById('tp'+n).disabled=false;
	document.getElementById('update'+n).disabled=false;
	document.getElementById('update'+n).style="cursor:pointer";
}
function updatepack(n){
		if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
    }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
    }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
	        alert(obj.responseText);
			location.reload();
	    }
    }
var del="update";
 var pkid=document.getElementById('pkid'+n).value;
 var days=document.getElementById('days'+n).value;
 var pl=document.getElementById('pl'+n).value;
 var pp=document.getElementById('pp'+n).value;
  var ldb=document.getElementById('ldb'+n).value;
 var doj=document.getElementById('doj'+n).value;
 var po=document.getElementById('po'+n).value;
 var tp=document.getElementById('tp'+n).value;
 var url="update.php";
 var val="del="+del+"&pkid="+pkid+"&days="+days+"&pl="+pl+"&pp="+pp+"&po="+po+"&lb="+ldb+"&dj="+doj+"&tp="+tp;
 obj.open("Post",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}