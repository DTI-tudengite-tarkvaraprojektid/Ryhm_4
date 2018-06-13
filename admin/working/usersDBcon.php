<?php
    require("functions.php");
    // Connect to Database
    $connection = mysql_connect($serverHost, $serverUsername, $serverPassword)
    or die ("Could not connect to server ... \n" . mysql_error ());
    mysql_select_db($database)
    or die ("Could not connect to database ... \n" . mysql_error ());
?>