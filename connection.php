<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo";

 $con= mysqli_connect($servername,$username,$password,$dbname);
  if(!$con)
  {
    echo "connection faild";
  }
?>