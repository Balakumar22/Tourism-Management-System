const progress=document.querySelectorAll(".pro");
const circle=document.querySelectorAll(".circle");
const prev=document.querySelectorAll(".cancelbtn");
const next=document.querySelectorAll(".signupbtn");
var slideIndex=1;
var ins=1;
let ca=1
function Bookpack(id){
	document.getElementById("id01"+id).style.display="block";
	var st=((id-1)*4)+1;
	ca=st;
	circle[st-1].classList.add("act");
	prev[id-1].disabled=true;
	showSlides2(slideIndex,id);
	/*var pkid=document.getElementById('pkid'+id).value;
 var days=document.getElementById('days'+id).value;
 var price=document.getElementById('pp'+id).value;
 var req=document.createElement('form');
 req.style="border:1px solid #ccc";
req.innerHTML+='<div class="container"> ';
    req.innerHTML+='<b>Package Id : </b>'+pkid;
    req.innerHTML+='<br><b>Vacation period : </b>'+days;
	req.innerHTML+='<br><b>Ticket Cost : </b>'+price+'</div></form></div>';
	var modal = document.getElementById('id01');
	modal.appendChild(req);
	//document.getElementById('id01').style.display='block';

	if (event.target == modal) {
    modal.style.display = "none";
  }*/
}
function fclose(id){
	var st=((id-1)*4)+1;
document.getElementById("id01"+id).style.display="none";
var f=document.getElementsByClassName("modal-content");
f[id-1].reset();
var circle=document.querySelectorAll(".circle");
//location.reload();
slideIndex=1;
var len=document.querySelectorAll(".act").length;
for(var i=1;i<len;i++){
circle[i].classList.remove("act");
var wid=(len-i)/circle.length;
progress[id-1].style.width =wid+"%";
}
next[id-1].innerHTML="Next";
next[id-1].disabled=false;
ins=1;
}
function tcost(i,p){
	var m=parseInt(document.getElementById('npm'+i).value);
	var f=parseInt(document.getElementById('npf'+i).value);
	if(Number.isNaN(m)==true){
	m=0;
	}
	if(Number.isNaN(f)==true){
	f=0;
	}
	var t= (m+f);
	document.getElementById('cost'+i).value="₹"+t*p;
	document.getElementById('hnmp'+i).innerHTML=m;
	document.getElementById('hnfp'+i).innerHTML=f;
	document.getElementById('ttp'+i).innerHTML=t;
	document.getElementById('tc'+i).innerHTML="₹"+t*p;
	
}
function nextt(n,id,div){
	var m=parseInt(document.getElementById('npm'+id).value);
	var f=parseInt(document.getElementById('npf'+id).value);
	if(Number.isNaN(m)==true){
	m=0;
	}
	if(Number.isNaN(f)==true){
	f=0;
	}
	if(n==1 && (m==0&&f==0)){
	alert("Please Enter the details");
	return false;
	}
	var st=((id-1)*4)+1;
	if(n==1)
	ins++;
    if(n==-1)
	ins--;
	var len=(circle.length/div)*id;
	if(ins>=3){
		next[id-1].innerHTML="Pay";
	}
	else{
		next[id-1].innerHTML="Next";
	}
	showSlides2(slideIndex += n,id);
	if(n>0){
	ca++;
	if(ca>len){
		ca=len;
	}
	update(len,id,st);
	}
	else{
	ca--;
	if(ca<st){
		ca=st;
	}
	update(len,id,st);
	}
    if(ins>4){
		ins=1;
	}
}
function currentSlide(n) {
  showSlides2(slideIndex = n,id);
}
function showSlides2(n,id) {
  var i;
  var slides = document.getElementsByClassName("tag"+id);
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
function update(len,id,st){
   circle.forEach((circle,idx)=>{
	   if(idx<ca){
	    circle.classList.add("act");
	   }
	   else{
		   circle.classList.remove("act");
	   }
});
const act=document.querySelectorAll(".act");
/*if(act.length%2==0){
len++;
}
if(act.length==1){
var wid=0;
}
else{*/
var wid=((act.length-st)/(len-st))*100;
//}
progress[id-1].style.width =wid+"%";
if(ca===st){
	prev[id-1].disabled=true;
}
else if(ca===len)
{
    next[id-1].disabled=true;
}
else{
	prev[id-1].disabled=false;
    next[id-1].disabled=false;
}
}