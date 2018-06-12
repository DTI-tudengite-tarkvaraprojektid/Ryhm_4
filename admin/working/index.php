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
    //CREATE NEW USER
	$signupEmail = "";
	$notice="!";
	$signupEmailError = "";
    $signupPasswordError = ""; 
    $signupName = "";
    $signupNameError = "";
    if(isset($_POST["signupButton"])){

        //kontrollime, kas kirjutati kasutajanimeks email
        if (isset ($_POST["signupEmail"])){
            if (empty ($_POST["signupEmail"])){
                $signupEmailError ="NB! Väli on kohustuslik!";
            } else {
                $signupEmail = test_input($_POST["signupEmail"]);

                $signupEmail = filter_var($signupEmail, FILTER_SANITIZE_EMAIL);
                $signupEmail = filter_var($signupEmail, FILTER_VALIDATE_EMAIL);
            }
        }

        if (isset ($_POST["signupPassword"])){
            if (empty ($_POST["signupPassword"])){
                $signupPasswordError = "NB! Väli on kohustuslik!";
            } else {
                //polnud tühi
                if (strlen($_POST["signupPassword"]) < 6){
                    $signupPasswordError = "NB! Liiga lühike salasõna, vaja vähemalt 6 tähemärki!";
                }
            }
        }
        //kontrollime, kas kirjutati nime
  	    if (isset ($_POST["signupName"])){
            if (empty($_POST["signupName"])){
                $signupFirstNameError ="NB! Väli on kohustuslik!";
            } else {
                $signupFirstName = test_input($_POST["signupName"]);
            }
        }
    //UUE KASUTAJA ANDMEBAASI KIRJUTAMINE
        if (empty($signupEmailError) and empty($signupPasswordError) and empty($signupNameError)){
            echo "Hakkan salvestama!";
            //krüpteerin parooli
            $signupPassword = hash("sha512", $_POST["signupPassword"]);
            //echo "\n Parooli " .$_POST["signupPassword"] ." räsi on: " .$signupPassword;
            signUp($signupEmail, $signupPassword, $signupName);
        }

    } //KAS VAJUTATI signupButton-it


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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="js/admin.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <a href="#" onclick="ShowShop()">Pood</a>
            <a href="#" onclick="ShowCalendar()">calender</a>
            <a href="#" onclick="ShowChangeInfo()">Muuda info</a>
            <a href="#" onclick="ShowCreateUser()">Loo konto</a>
            <a href="?logout=1">Logi välja</a>
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
        <div class="main" id="user" style="display: none; " >
            <h1>Konto Loomine</h1>
            <section class="container-fluid">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="signupEmail" type="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo $signupEmail;?>">
                            <span><?php echo $signupEmailError; ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="signupPassword" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            <span><?php echo $signupPasswordError; ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Nimi</label>
                        <input name="signupName" type="text" class="form-control" id="inputAddress" placeholder="Nimi" value="<?php echo $signupName; ?>">
                        <span><?php echo $signupNameError; ?></span>
                    </div>

                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Admin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Treener
                                    </label>
                                </div>
                            </div>
                        </div>
                    </fieldset
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input name="signupButton" class="btn btn-primary" type="submit" value="Loo kasutaja">
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html> 