<?php
  $serverHost = "localhost";
  $serverUsername = "if17";
  $serverPassword = "if17";
  $database = "if17_Tantsumeka";
  $conn = mysqli_connect($serverHost,$serverUsername,$serverPassword,$database);
 
  // Check connection
  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>