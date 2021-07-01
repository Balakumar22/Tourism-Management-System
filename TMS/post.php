<?php
echo'
<script src="post.js"></script>
 <div id="add">
 <form id="add1" class="add1">
<div class="slideshow-container" id="sc1">
<input id="nup1" class="nup" type="number" placeholder="Enter the no.of images to upload" onclick="color()" required><input for="nup1" type="button" id="fbt" value="fetch" onclick="up()" />
</div>
 <input maxlength="16" class="pkid" id="pkid1" placeholder="Enter the package Id" >
 <input class="days" id="days1" placeholder="No.of days"><br>
 <input class="pl" type="number" id="pl1" placeholder="Enter the Pasangers Limit">
 <input class="pp" type="number" id="pp1" placeholder="Price of the package"><br>
  <input class="ldb" type="text" id="ldb1" placeholder="Enter the last date to book" onfocus="(this.type=\'date\')" >
 <input class="doj" type="text" id="doj1" placeholder="Day of tour" onfocus="(this.type=\'date\')"><br>
 <input class="tp" type="text" id="tp1" placeholder="Places going to be explored"><br>
 <textarea class="po"  id="po1" placeholder="Enter the package Description" ></textarea><br>
 <input class="anp" type="Button" id="anp" onclick="formadd()" value="Add new package" />
 <input type="button" class="pt" id="pt1" value="Post Package" onclick="postform()" /><br>
 </form>
 </div>';
 include"header.html"; 
 ?>
