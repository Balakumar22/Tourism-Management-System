<?php
//echo $_POST["doc"];
$fp = fopen('header.html', 'w');//opens file in write-only mode  
fwrite($fp, implode($_POST));  
fclose($fp);
echo "writen successfully \n ".implode(" ",$_POST);
//print_r($_POST);
?>
  