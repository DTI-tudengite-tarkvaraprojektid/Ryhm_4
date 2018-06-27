<?php
  require("../config.php");

  $conn = mysqli_connect($serverHost,$serverUsername,$serverPassword,$database);
 
  // Check connection
  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>