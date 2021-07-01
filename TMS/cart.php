<?php
 $my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
$id=array();
 if($_POST["con"]=="cart"){
	 $sql="Select* from cart";
	 $rs=$my->query($sql);
	 $colcount = $rs->columnCount();
	 $sql1="Select* from cart where mail='$_POST[eid]'";
	 $rs1=$my->query($sql1);
	 $rs2=$my->query($sql1);
	 $st=0;
	 $flag=0;
	 $ar=0;
	 $fal=1;
	 while($row=$rs1->fetch(PDO::FETCH_ASSOC)){
		 $mail=$row["mail"];
		 for($i=1;$i<$colcount;$i++){
		if($row["cart$i"]!=''){
	$id[]=$row["cart$i"];
		}
		 }
      $st=$st+1;
     } 
	 for($i=0;$i<count($id);$i++){
		 if($id[$i]==$_POST["pkid"]){
			 exit("Already Added to Cart!!!");
			 $fal=0;
			 break;
		 }
	 }
		 if($st==0 && $fal!=0){
		 $in="Insert into cart (mail,cart1) values ('$_POST[eid]','$_POST[pkid]')";
	      $rs=$my->query($in);
		  echo "Added To Cart list Successfully!!!";
		 }
		 else if($st>0 && $fal!=0){
		 $sql2="Select* from cart where mail='$_POST[eid]'";
		 $rs2=$my->query($sql2);
		 $con2=$rs2->columnCount();
		 if($rs2){
		  while($row=$rs2->fetch(PDO::FETCH_ASSOC)){
			  for($i=1;$i<$con2;$i++){
		 if($row["cart$i"]==null){
			  $in="Update  cart set cart$st='$_POST[pkid]' where mail='$_POST[eid]'";
	      $rs=$my->query($in);
		  $flag=1;
		  echo "Added To Cart list Successfully!!!";
		  break;
		 }
		 $st=$st+1;
			  }		 
		  }
         if($flag==0 && $st==$colcount){
			 $alt  = "Alter table cart Add column cart$colcount VARCHAR(30) UNIQUE";
		 $rsalt=$my->query($alt);
		 $in="Update  cart set cart$colcount='$_POST[pkid]' where mail='$_POST[eid]'";
	      $rs=$my->query($in);
		  echo "Added To Cart list Successfully!!!";
		 }
		 }
		 for($i=0;$i<count($id);$i++){
		 unset($id[$i]);
		 }
		 }		 
		 else
		 echo ' Deletion of Package'.$_POST["pkid"].' is Failed';
 }
 if($_POST["con"]=="remove"){
  $sql  = "Update  cart set  $_POST[ct]=NULL where mail='$_POST[eid]'";
	 $rs=$rs=$my->query($sql);
	 if($rs){
		 echo 'Package '.$_POST["pkid"].' is Removed from your cart successfully';
	 }
	 else
		 echo 'Removing of Package '.$_POST["pkid"].' from your cart is Failed';
 }
?>
