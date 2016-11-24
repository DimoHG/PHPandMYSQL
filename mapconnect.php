<?php 
  $con = new mysqli("localhost", "dimohack", "parola42", "map");
 
  if($con->connect_errno > 0){
    die('Unable to connect to database [' . $con->connect_error . ']');
  }
echo "success";
?>
