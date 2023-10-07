<?php
  $hostname = "bdspozjgjtkskhm28no9-mysql.services.clever-cloud.com";
  $username = "uvjzkuyseoxpxqgp";
  $password = "PhIY30d3JsOTPbbIftuh";
  $dbname = "bdspozjgjtkskhm28no9";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>