<?php
// code for changes 
$servername = "localhost";
$username = "root";
$password = "sumit####101";
$dbname = "ngodb";

// connectivity 
 $con= mysqli_connect($servername,$username,$password,$dbname);
  if(!$con)
  {
    echo "connection not established";
  }else
   echi "connection established"
?>
