<?php
$host = 'localhost'; 
$username = 'root';   
$password = "";   
$database = 'library_sys';   

  $conn = mysqli_connect($host,$username,$password,$database);   

  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


