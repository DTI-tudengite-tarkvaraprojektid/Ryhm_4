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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/admin.css"
    </head>
    <body>
        <div class="sidenav">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="main">
            <h2>Sidebar</h2>
            <p>This sidebar is of full height (100%) and always shown.</p>
            <p>Scroll down the page to see the result.</p>
            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
            <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no molestiae voluptatibus.</p>
        </div>
        
    </body>
</html> 