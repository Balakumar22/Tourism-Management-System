<html>
<?php
echo '<script src="upd.js"></script>
 <div id="addup">';
$my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
$qc="Select * from package";
 $rs=$my->query($qc);
$result = "select count(1) FROM package";
$rss=$my->query($result);
$cnt = $rss->fetchColumn();
$ind=0;
$fct=1;
$fcnt=1;
$i=0;
$form=0;
$in=1;
while($row=$rs->fetch(PDO::FETCH_ASSOC)){
	$i=$i+1;
$img=$row["photos"];
$pkid=$row["pkid"];
$days=$row["days"];
$pl=$row["pl"];
$pp=$row["pp"];
$lb=$row["ldb"];
$dj=$row["doj"];
$po=$row["po"];
$tp=$row["tp"];
$arr=explode(",",$img);
//for($i=1;$i<=$cnt;$i++){
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
	if($i==0){
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
 <input class="del" type="Button" id="del'.$i.'" onclick="deletepack('.$i.')" value="Delete package" />
 <input class="edit" type="Button" id="edit'.$i.'" onclick="editpack('.$i.')" value="Edit package" />
 <input class="update" type="Button" id="update'.$i.'" onclick="updatepack('.$i.')" value="Update package" style="cursor:not-allowed;" disabled /><br>
</form>';
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

//}
include"header.html"; 
?>

</div>
</body>
</html>
<!--,'.$cnt.',this.id
<a class="prev1" id="p'.$i.'" onclick="formchange(-1)" >'.htmlspecialchars("❮").' 1</a>
<a class="next1" id="n'.$i.'" onclick="formchange(1)">'.$cnt.' '.htmlspecialchars("❯"). '</a> ';
-->