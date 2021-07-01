var i=0;
var cnt=1;
var fct=1;
var fcnt=1;
/*var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}*/
var ind = 0;
var slideIndex = [];
var slideId = [];
function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  alert(slideId+"\n"+slideIndex+"\n"+x.length);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
function color(){
    //document.getElementById('nup'+fcnt).style.backgroundColor="white";
	document.getElementById('nup'+fcnt).classList.remove("error");
	document.getElementById('nup'+fcnt).placeholder="Enter the no.of images to upload";
}
function up(){
	if(fct<=1){
		var sc=document.getElementById('sc1');
		var nup=document.getElementById('nup1').value;
	}
	else{
		var sc=document.getElementById('sc'+fcnt);
		var nup=document.getElementById('nup'+fcnt).value;
	}
	if(nup==""){
		document.getElementById('nup'+fcnt).placeholder="Pls Enter a value (>0)";
		document.getElementById('nup'+fcnt).classList.add('error');
		return false;
	}
	else{
	if(fct<=1){
document.getElementById("nup1").remove();
}
else{
document.getElementById("nup"+fcnt).remove();
}
document.getElementById("fbt").remove();

//sc.className="slideshow-container";
var dot=document.createElement("div");
dot.style="text-align:center";
for(i=0;i<nup;i++){
var mf=document.createElement("div");
mf.className="mySlides fade"+fct;
mf.style="display:none";
mf.id="mySlides fade"+(fct+i);
var file=document.createElement("input");
file.type="file";
file.setAttribute("accept","images/*");
file.id="f"+(fct+i);
file.style="display:none";
file.setAttribute("onchange","document.getElementById('img"+(fct+i)+"').src=window.URL.createObjectURL(this.files[0])");
var lb=document.createElement("label");
lb.id="lb";
lb.setAttribute("for","f"+(fct+i));
lb.style="cursor: pointer;position:absolute;top:14px;z-index:10px;right:8px";
var ic=document.createElement("i");
ic.className="fa fa-upload ic";
ic.style="font-size:16px";
var img=document.createElement("img");
img.className="simg";
img.id="img"+(fct+i);
img.style="position:relative;width:100%;height:200px;top:10px;";
var nt=document.createElement("div");
nt.className="numbertext";
nt.style=" background-color:rgba(3,3,3,0.2);color:#f2f2f2;font-size: 15px;font-style:bold;padding: 8px 12px;position: absolute;top: 10px;";
nt.innerHTML="<b>"+(i+1)+" / "+nup+"</b>";
mf.appendChild(file);
lb.appendChild(ic);
mf.appendChild(img);
mf.appendChild(lb);
mf.appendChild(nt);
sc.appendChild(mf);
}
var prev=document.createElement("a");
prev.className="prev";
prev.setAttribute("onclick","plusSlides(-1,"+ind+")");
prev.innerHTML="&#10094";
var nxt=document.createElement("a");
nxt.className="next";
nxt.setAttribute("onclick","plusSlides(1,"+ind+")");
nxt.innerHTML="&#10095";
sc.appendChild(prev);
sc.appendChild(nxt);
for(i=1;i<=nup;i++){
	var sp=document.createElement("span");
sp.className="dot";
//sp.setAttribute("onclick","currentSlide("+fct+i+")");
dot.appendChild(sp);
}
sc.appendChild(dot);
slideIndex.push(1);
slideId.push("mySlides fade"+fct);
showSlides(1,ind);
ind++;
if(fcnt==1)
document.getElementById("pt1").setAttribute("onclick","postform(1,"+fct+","+nup+")");
else
document.getElementById("pt"+fcnt).setAttribute("onclick","postform("+fcnt+","+fct+","+nup+")");	
for(i=0;i<nup;i++){
fct++;
}
}
}

function formadd(){
//alert("In Formadd");
fcnt++;
var main=document.getElementById("add");
var fr=document.createElement("form");
fr.id="add"+fcnt;
fr.style="position:relative;margin-top:100px;";
//fr.method="post";
//fr.setAttribute("onload","formadd()");
if(document.getElementsByClassName("pt").clicked==true){
fr.submit();
}
var sc=document.createElement("div");
sc.id="sc"+fcnt;
sc.className="slideshow-container";
var xx=document.createElement("input");
xx.id="nup"+fcnt;
xx.className="nup";
xx.placeholder="Enter the no.of images upload";
var yy=document.createElement("input");
yy.id="fbt";
yy.type="Button";
yy.value="fetch";
yy.setAttribute("onclick","up()");
sc.appendChild(xx);
sc.appendChild(yy);
var x=document.createElement("input");
x.className="pkid";
x.id="pkid"+fcnt;
x.placeholder="Enter the package Id";
var y=document.createElement("input");
y.className="days";
y.id="days"+fcnt;
y.placeholder="No.of days";
var z=document.createElement("input");
z.className="pl";
z.id="pl"+fcnt;
z.placeholder="Enter the Pasangers Limit";
var a=document.createElement("input");
a.className="pp";
a.id="pp"+fcnt;
a.placeholder="Price of the package";
var lb=document.createElement("input");
lb.className="ldb";
lb.id="ldb"+fcnt;
lb.type="text";
lb.placeholder="Enter the last date to book";
lb.setAttribute("onfocus","this.type='date'");
var dj=document.createElement("input");
dj.className="doj";
dj.id="doj"+fcnt;
dj.type="text";
dj.placeholder="Day of tour";
dj.setAttribute("onfocus","this.type='date'");
var tp=document.createElement("input");
tp.className="tp";
tp.id="tp"+fcnt;
tp.placeholder="Places going to be explored";
var zd=document.createElement("textarea");
zd.className="po";
zd.id="po"+fcnt;
zd.placeholder="Enter the package Description";
var b=document.createElement("input");
b.type="Button";
b.className="anp";
b.value="Add new Package";
b.setAttribute("onclick","formadd()");
var c=document.createElement("input");
c.className="pt";
c.id="pt"+fcnt;
c.value="Post Package";
c.type="Button";
var br=document.createElement("br");
fr.appendChild(sc);
fr.appendChild(x);
fr.appendChild(y);
fr.appendChild(br);
fr.appendChild(z);
fr.appendChild(a);
fr.appendChild(br);
fr.appendChild(lb);
fr.appendChild(dj);
fr.appendChild(br);
fr.appendChild(tp);
fr.appendChild(br);
fr.appendChild(zd);
fr.appendChild(br);
fr.appendChild(b);
fr.appendChild(c);
main.appendChild(fr);
cnt++;
}
function postform(fcnt,fct,nup){
 if(window.XMLHttpRequest){
	 obj=new XMLHttpRequest();
 }
 else{
     obj=new ActiveXobject("Microsoft.XMLHTTP");
 }
 obj.onreadystatechange=function(){
    if(obj.readyState==4 && obj.status==200){
	        alert(obj.responseText);
	}
 }
// var nup=document.getElementById('nup'+fcnt).value;
 var pkid=document.getElementById('pkid'+fcnt).value;
 var days=document.getElementById('days'+fcnt).value;
 var pl=document.getElementById('pl'+fcnt).value;
 var pp=document.getElementById('pp'+fcnt).value;
  var ldb=document.getElementById('ldb'+fcnt).value;
 var doj=document.getElementById('doj'+fcnt).value;
 var po=document.getElementById('po'+fcnt).value;
 var tp=document.getElementById('tp'+fcnt).value;
 var slide=[];
 for(i=0;i<nup;i++){
 slide.push(document.getElementById("f"+(fct+i)).value);
 }
 var url="save.php";
 var val="pkid="+pkid+"&days="+days+"&pl="+pl+"&pp="+pp+"&slide="+slide+"&po="+po+"&lb="+ldb+"&dj="+doj+"&tp="+tp;
 obj.open("Post",url,true);
 obj.setRequestHeader("content-type","application/x-www-form-urlencoded");
 obj.setRequestHeader("content-length",val.length);
 obj.setRequestHeader("connection","close");
 obj.send(val);
}