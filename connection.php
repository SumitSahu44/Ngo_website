<?php
// code for changes 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngodb";

// connectivity 
 $con= mysqli_connect($servername,$username,$password,$dbname);
  if(!$con)
  {
    echo "connection not established";
  }
?>
