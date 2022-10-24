<?php
$mysqli = new mysqli('localhost','root','','css326project');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
 ?>
