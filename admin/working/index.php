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

	if(isset($_POST["but_upload"])){

		if(isset($_POST["description"]) and isset($_POST["price"]) and isset($_POST["category"]) and isset($_POST["heel"]) ){
			// Photo upload 
			$name = $_FILES['file']['name'];
			$target_dir = "shop/upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			// Select file type
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");

			// Check extension
			if( in_array($imageFileType,$extensions_arr) ){			
				// Upload file
				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
			}	
		
			$stmt = $mysqli->prepare("INSERT INTO  products (name, description, price, category, heel, image) VALUES (?,?,?,?,?,'$name')");
			echo $mysqli->error;
			$stmt->bind_param("sssss", $_POST["name"],$_POST["description"], $_POST["price"],$_POST["category"],$_POST["heel"]);
			$stmt->execute();
			echo $stmt->error;
			
		}
		$stmt->close();
		$mysqli->close();
		
	}

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
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/admin.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <a href="#" onclick="ShowShop()">Pood</a>
            <a href="#" onclick="ShowCalender()">calender</a>
            <a href="#" onclick="ShowChangeInfo()">Muuda info</a>
        </div>
        <div class="main" id="shop" style="display: block; " >
            <div id="upload"> 
                <h2>Uploader</h2>
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype='multipart/form-data'>
                    <input placeholder="nimetus" name="name" type="text" required="">
                    <input placeholder="kirjeldus" name="description" type="text" required="">
                    <input placeholder="hind" name="price" type="text" required="">
                    <select name="category">
                        <option value="m_s">Meeste standardtants </option>
                        <option value="m_l">Meeste Ladina</option>
                        <option value="m_s">Meeste standardtants </option>
                        <option value="m_l">Meeste ladina</option>
                        <option value="m_h">Meeste harrastustants</option>
                        <option value="m_a">Meeste argentiina tango</option>
                        <option value="m_t">Meeste treeninguks</option>
                        <option value="m_p">Meeste pidulikud</option>
                        <option value="n_s">Naise standardtants </option>
                        <option value="n_l">Naise ladina</option>
                        <option value="n_h">Naise harrastustants</option>
                        <option value="n_a">Naise argentiina tango</option>
                        <option value="n_t">Naise treeninguks</option>
                        <option value="n_p">Naise pidulikud</option>
                        <option value="l">Lastele</option>
                    </select>
                    <select name="heel">
                        <option value="5cm peenkonts">5cm peenkonts</option>
                        <option value="7cm peenkonts">7cm peenkonts</option>
                        <option value="8cm peenkonts">8cm peenkonts</option>
                        <option value="5cm alt laienev konst">5cm alt laienev konst</option>
                        <option value="7cm alt laienev konst">7cm alt laienev konst</option>
                        <option value="8cm alt laienev konst">8cm alt laienev konst</option>
                    </select>
                    <input type='file' name='file' />
                    <input type='submit' value='Save' name='but_upload'>
                </form>
            </div>
        </div>
        <div class="main" id="calendar" style="display: none; " >
            <h1>calender</h1>
        </div>
        <div class="main" id="info" style="display: none; " >
            <h1>info</h1>
        </div>
        
    </body>
</html> 