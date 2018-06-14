<?php

    require("functions.php");

	//LOG OUT
	if(isset($_GET["logout"])){
		session_destroy(); 
		header("Location: login.php");
	}

    // Create connection
    include('functions/Create_connection.php');
	
	



	//IF NOT LOGGED IN , logout
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
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
  <link rel="stylesheet" href="assets/css/admin.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="">
                        <img src="assets/img/tantsumeka_hele.png" alt="logo" height="80" width="133">
                    </a>
                </li>
                <br>
                <li>
                    <a href="#">Pood</a>
                </li>
                <li>
                    <a href="#">Kalender</a>
                </li>
                <li>
                    <a href="#">Galerii</a>
                </li>
                <li>
                    <a href="#">Kasutajad</a>
                </li>
                <li>
                    <a href="#">Logi välja</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Content</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo dolore, exercitationem saepe omnis quibusdam ipsum culpa voluptatum, quam magni tenetur architecto minus facilis sapiente impedit libero tempora harum consequuntur? Necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>