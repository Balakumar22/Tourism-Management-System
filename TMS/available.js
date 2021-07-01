var ind=0;
var frm=0;
var si = [];
var slideId = [];
//var formIndex = [];
//var formId = [];
function loaded(fct){   
	si.push(1);
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
  showSlides(si[no] += n, no);
}
function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {si[no] = 1}    
  if (n < 1) {si[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[si[no]-1].style.display = "block";  
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

function formchange(n) {
  showSlides1(formIndex += n);
}

function currentSlide(n) {
  showSlides1(formIndex = n);
}
function showSlides1(n) {
  var i;
  var x = document.getElementsByClassName("main");
  if (n > x.length) {
	  formIndex = 1;
  }    
  if (n < 1) {formIndex = x.length;}
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
  }
 //document.getElementById(cnt).innerHTML =cnt;
  x[formIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " active";
}
function cart(id){
	if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
    }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
    }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
	        alert(obj.responseText);
			//location.reload();
	    }
    }
var con="cart";
 var pkid=document.getElementById('pkid'+id).value;
 var eid=document.getElementById('eid').value;
 var url="cart.php";
 var val="con="+con+"&eid="+eid+"&pkid="+pkid;
 obj.open("Post",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}
function remove(id,cname){
		if(window.XMLHttpRequest){
	 obj1=new XMLHttpRequest();
    }
 else{
     obj1=new ActiveXobject("Microsoft.XMLHTTP");
    }
	var pkid=document.getElementById('pkid'+id).value;
 var eid=document.getElementById('eid').value;
 obj1.onreadystatechange=function(){
    if(obj1.readyState==4 && obj1.status==200){
		    alert(obj1.responseText);
		    var out="Package "+pkid+" is Removed from your cart successfully";
	        if(obj1.responseText==out){
			    location.reload();
			}
			//location.reload();
	    }
    }
var con="remove";
 var url="cart.php";
 var val="con="+con+"&eid="+eid+"&pkid="+pkid+"&ct="+cname;
 obj1.open("Post",url,true);
 obj1.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj1.setRequestHeader("content-length",val.length);
 obj1.setRequestHeader("connection","close");
 obj1.send(val);
}