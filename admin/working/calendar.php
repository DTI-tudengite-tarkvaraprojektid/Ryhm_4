<?php

require("functions.php");

$database = "if17_Tantsumeka";

	//väljalogimine
	if(isset($_GET["logout"])){
		session_destroy(); //lõpetab sessiooni
		header("Location: login.php");
	}

// Create connection
$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	$usermail = $_SESSION["userEmail"];
	//echo $usermail;
	if(isset($_POST["submit"])){

		if(isset($_POST["name"]) and isset($_POST["number"]) and isset($_POST["quantity"])){
			//echo $_POST["name"];

			$stmt = $mysqli->prepare("INSERT INTO Retsept (name, number, quantity, email) VALUES (?, ?, ?, '$usermail')");
			echo $mysqli->error;
			$stmt->bind_param("sii", $_POST["name"], $_POST["number"],$_POST["quantity"]);
			$stmt->execute();
			echo $stmt->error;
			
		}
	$stmt->close();
	$mysqli->close();
	}
	//echo $usermail;
	


	//kui pole sisseloginud, siis sisselogimise lehele
	if(!isset($_SESSION["userId"])){
		header("Location: login.php");
		exit();
	}

	//kui logib välja
	if (isset($_GET["logout"])){
		//lõpetame sessiooni
		session_destroy();
		header("Location: login.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calendar Beta</title>
        <link rel="stylesheet" type="text/css" href="css/calendar.css">
        <script src="js/calendar.js"></script>

    </head>
    <body>
        <div class="calendar">       
            <div class="wrapper">
                <main>
                    <div class="toolbar">
                        
                        
                        
                    </div>
                    <!--<div class="calendar_current" id="month">
                        <div class="calendar__header">
                            <div>mon</div>
                            <div>tue</div>
                            <div>wed</div>
                            <div>thu</div>
                            <div>fri</div>
                            <div>sat</div>
                            <div>sun</div>
                        </div>
                        <div class="calendar__week">
                            <div class="calendar__day day">1</div>
                            <div class="calendar__day day">2</div>
                            <div class="calendar__day day">3</div>
                            <div class="calendar__day day">4</div>
                            <div class="calendar__day day">5</div>
                            <div class="calendar__day day">6</div>
                            <div class="calendar__day day">7</div>
                        </div>
                        <div class="calendar__week">
                            <div class="calendar__day day">8</div>
                            <div class="calendar__day day">9</div>
                            <div class="calendar__day day">10</div>
                            <div class="calendar__day day">11</div>
                            <div class="calendar__day day">12</div>
                            <div class="calendar__day day">13</div>
                            <div class="calendar__day day">14</div>        
                        </div>
                        <div class="calendar__week">
                            <div class="calendar__day day">15</div>
                            <div class="calendar__day day">16</div>
                            <div class="calendar__day day">17</div>
                            <div class="calendar__day day">18</div>
                            <div class="calendar__day day">19</div>
                            <div class="calendar__day day">20</div>
                            <div class="calendar__day day">21</div>    
                        </div>
                        <div class="calendar__week">
                            <div class="calendar__day day">22</div>
                            <div class="calendar__day day">23</div>
                            <div class="calendar__day day">24</div>
                            <div class="calendar__day day">25</div>
                            <div class="calendar__day day">26</div> 
                            <div class="calendar__day day">27</div> 
                            <div class="calendar__day day">28</div> 
                        </div>
                        <div class="calendar__week">
                            <div class="calendar__day day">29</div>
                            <div class="calendar__day day">30</div>
                            <div class="calendar__day day">31</div>
                            <div class="calendar__day day">1</div>
                            <div class="calendar__day day">2</div>
                            <div class="calendar__day day">3</div>
                            <div class="calendar__day day">4</div>
                        </div>

                    </div>-->

                   
                    <div class="googleCalendar">
                        
                        <iframe src="gcalendar-wrapper.php?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="600" height="600" frameborder="0" scrolling="no"></iframe>

                    </div>

                    

                </main>
                <sidebar>
                    <div class="avatar">
                        <div class="avatar__img">
                            <img src="images/logo/tantsumeka_hele.png" alt="logo">
                        </div>
                    </div>
                    <nav class="menu">
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-home"></i>
                            <span class="menu__text">overview</span>
                        </a>
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-envelope"></i>
                            <span class="menu__text">messages</span>
                        </a>
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-list"></i>
                            <span class="menu__text">workout</span>
                        </a>
                        <a class="menu__item menu__item--active" href="#">
                            <i class="menu__icon fa fa-calendar"></i>
                            <span class="menu__text">calendar</span>
                        </a>
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-bar-chart"></i>
                            <span class="menu__text">goals</span>
                        </a>
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-trophy"></i>
                            <span class="menu__text">achivements</span>
                        </a>
                        <a class="menu__item" href="#">
                            <i class="menu__icon fa fa-sliders"></i>
                            <span class="menu__text">measurements</span>
                        </a>
                    </nav>
                    <div class="copyright">copyright &copy; 2018</div>
                </sidebar>
            </div>
        </div>
    </body>
</html> 