<?php
 $my = new PDO("mysql:host=localhost;dbname=tms", "root", "");
 if($_POST["del"]=="delete"){
	 $sql  = "DELETE from package where pkid='$_POST[pkid]'";
	 $rs=$rs=$my->query($sql);
	 if($rs)
		 echo 'Package '.$_POST["pkid"].' is deleted successfully';
	 else
		 echo 'Deletion of Package'.$_POST["pkid"].' is Failed';
 }
 if($_POST["del"]=="update"){
	 $sql  = "UPDATE package set days='$_POST[days]',po='$_POST[po]',tp='$_POST[tp]',pp='$_POST[pp]',pl='$_POST[pl]',ldb='$_POST[lb]',doj='$_POST[dj]' where pkid='$_POST[pkid]'";
	  $rs=$rs=$my->query($sql);
	 if($rs)
		 echo 'Package '.$_POST["pkid"].' is updated successfully';
	 else
		 echo 'Updation of Package'.$_POST["pkid"].' is Failed';
 }
?>