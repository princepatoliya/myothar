<?php

$conn = new mysqli("localhost", "root", "", "myothar");
if($conn){
  //echo "success";
}
else{
  die("Error". mysqli_connect_error());
}
 ?>
