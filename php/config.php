<?php
  $hostname = "HOSTNAME";
  $username = "USERNAME";
  $password = "PASSWORD";
  $dbname = "DA_NAME";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>