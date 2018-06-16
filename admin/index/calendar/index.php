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
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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
                        <a href="../shop">Pood</a>
                    </li>
                    <li class="visited">
                        <a href="">Kalender</a>
                    </li>
                    <li>
                        <a href="../galery">Galerii</a>
                    </li>
                    <li>
                        <a href="../users">Kasutajad</a>
                    </li>
                    <li>
                        <a href="../content">Sisu</a>
                    </li>
                    <li>
                        <a href="?logout=1">Logi välja</a>
                    </li>
                </ul>
            </div>
            <div id="page-content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <section>
                            <row>
                                <div class="col-8">
                                    <div class="calendar-container">
                                        <iframe style="border: 0;" src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" frameborder="0" width="800" height="600" scrolling="yes"></iframe>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <h2>Juhend</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mollis tortor eros, eu gravida enim mattis sit amet. Nullam in metus ligula. Nam bibendum, erat a dictum imperdiet, tortor enim rutrum felis, at aliquet leo tortor egestas ligula. Aenean bibendum nulla at dolor ullamcorper, id dapibus sapien bibendum. Pellentesque congue tristique magna a imperdiet. Etiam varius interdum sem, vitae sagittis elit vestibulum non. Suspendisse at consequat leo, vitae bibendum sapien. Integer dignissim tellus sapien, a bibendum velit viverra pulvinar. Morbi fermentum velit ut interdum imperdiet. Duis sed ante turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eleifend nibh eu interdum sodales. Sed laoreet libero eget imperdiet feugiat. In ultricies tincidunt elit nec accumsan. Ut ultricies sem scelerisque, posuere orci non, varius augue. </p>
                                </div>
                            </row>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>