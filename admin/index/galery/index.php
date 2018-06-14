<?php

    require("../functions.php");

	//LOG OUT
	if(isset($_GET["logout"])){
		session_destroy(); 
		header("Location: ../login.php");
	}

    // Create connection
    include('../functions/Create_connection.php');
	
	



	//IF NOT LOGGED IN , logout
	if(!isset($_SESSION["userId"])){
		header("Location: ../login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tantsumeka | admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="../assets/css/admin.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../">
                        <img src="../assets/img/tantsumeka_hele.png" alt="logo" height="80" width="133">
                    </a>
                </li>
                <br>
                <li>
                    <a href="#">Pood</a>
                </li>
                <li>
                    <a href="../calendar">Kalender</a>
                </li>
                <li class="visited">
                    <a href="">Galerii</a>
                </li>
                <li>
                    <a href="../users">Kasutajad</a>
                </li>
                <li>
                    <a href="?logout=1">Logi välja</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <script async src="https://www.publicalbum.org/js/pa-ins.min.js"></script>
            <ins class="pa-widget-gallery" style="width:100%;height:480px;"
                data-url="https://photos.google.com/share/AF1QipMnlk36KXQ6D4OjFedApi_tDvkdm7WZZPBXYanIawKlKh_EQ5ceZiLazZ9pw6uONg?key=TkJGcFotclZsTzZNdVRPMkx6RWNKZWhUci1yVllR"
                data-uid="ba079acfd0c1f45e73dd95c1bd16021f55eee0ce879762958184e263102275ad"
                data-delay="5">
            </ins>
        </div>
    </div>
</body>
</html>