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
<html>
    <head>
        <title>TANTSUMEKA | ADMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css"> 
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/admin.js"></script>
    </head>
    <body>

        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
            <button class="w3-bar-item w3-button w3-large"
            onclick="w3_close()">Sulge &times;</button>
            <a href="#shop" target="_self" class="w3-bar-item w3-button" >Pood</a><!--onclick="ShowShop()"-->
            <a href="#calendar" target="_self" class="w3-bar-item w3-button" >calender</a><!--onclick="ShowCalendar()"-->
            <a href="#changeInfo" target="_self" class="w3-bar-item w3-button">Muuda info</a><!-- onclick="ShowChangeInfo()"-->
            <a href="#createUser" target="_self" class="w3-bar-item w3-button" >Loo konto</a><!-- onclick="ShowCreateUser()"-->
            <a class="w3-bar-item w3-button" href="?logout=1">Logi välja</a>
        </div>
        <!--MAIN-->
        <div id="main">
            <!--MAIN HEADING-->
            <div class="w3-teal">
                <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
                <div class="w3-container">
                    <h1>Tantsumeka | admin</h1>
                </div>
            </div>
            <!--ADMIN SHOP--> 
            <section id="shop>" 
                <div class="w3-container" id="shop">
                    <p>In this example, the sidebar is hidden (style="display:none")</p>
                    <p>It is shown when you click on the menu icon in the top left corner.</p>
                    <p>When it is opened, it shifts the page content to the right.</p>
                    <p>We use JavaScript to add a 25% left margin to the div element with id="main" when this happens. The value "25%" matches the width of the sidebar.</p>
                </div>
            </section>    
            <!--ADMIN CALENDAR-->
            <section id="calendar">
                <div class="w3-container" id="calendar">
                    <h1>calendar</h1>
                    <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
                </div>
            </section>    
            <!--ADMIN MAIN PAGE CONTENT-->
            <section id="changeInfo">
                <div class="w3-container" id="info" style="display: none;" >
                    <h1>info</h1>
                </div>
            </section>
            <!--ADMIN EDIT USERS-->
			<?php include('functions/Create_new_user.php');?>
        </div>
    </body>
</html>
