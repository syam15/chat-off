<?php
  $hostname = "DB_HOST";
  $username = "DB_USERNAME";
  $password = "DB_PASSWORD";
  $dbname = "DB_DBNAME";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>