<?php

require("functions.php");

$database = "if17_Tantsumeka";

	//LOG OUT
	if(isset($_GET["logout"])){
		session_destroy(); 
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
    $insert = "";
    $message= '';
    if(isset($_POST["signupButton"])){

        //IS USER NAEM EMAIL
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
                //is not empty
                if (strlen($_POST["signupPassword"]) < 6){
                    $signupPasswordError = "NB! Liiga lühike salasõna, vaja vähemalt 6 tähemärki!";
                }
            }
        }
        //is name written
  	    if (isset ($_POST["signupName"])){
            if (empty($_POST["signupName"])){
                $signupFirstNameError ="NB! Väli on kohustuslik!";
            } else {
                $signupFirstName = test_input($_POST["signupName"]);
            }
        }
    //ADDING NEW USER
        if (empty($signupEmailError) and empty($signupPasswordError) and empty($signupNameError)){
            //SECURING PASSWORD
            $signupPassword = hash("sha512", $_POST["signupPassword"]);
            $insert = signUp($signupEmail, $signupPassword, $signupName);
            if($insert = 1){
                $message='uus konto tekkitatud';
            }else{
                $message='';
            }
            
        }

    } 


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
        <!--Sidebar-NavBar-->
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card" style="display:none" id="mySidebar">
            <button class="w3-bar-item w3-button w3-hide-large"onclick="w3_close()">Sulge &times;</button>
            <a href="#" class="w3-bar-item w3-button" onclick="ShowShop()">Pood</a>
            <a href="#" class="w3-bar-item w3-button" onclick="ShowCalendar()">calender</a>
            <a href="#" class="w3-bar-item w3-button" onclick="ShowChangeInfo()">Muuda info</a>
            <a href="#" class="w3-bar-item w3-button" onclick="ShowCreateUser()">Loo konto</a>
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
            <div class="w3-container" id="shop" style="display: block">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="shopAdd" class="nav-link active" href="#" onclick="showShopAdd()">Lisa</a>
                            </li>
                            <li class="nav-item">
                                <a id="shopUpdate" class="nav-link" href="#" onclick="showShopUpdate()">Muuda</a>
                            </li>
                            <li class="nav-item">
                                <a id="shopDelete" class="nav-link" href="#" onclick="showShopDelete()">Kustuta</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div id="shopAddContent" style="display: block; "> 
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype='multipart/form-data'>
                                <div>
                                    <div>
                                        <div>
                                            <input placeholder="nimetus" class="w3-input w3-border w3-hover-blue" name="name" type="text" required="">
                                        </div>
                                    <div>    
                                        <input placeholder="kirjeldus" class="w3-input w3-border w3-hover-blue" name="description" type="text" required="">
                                    </div>
                                    <div>    
                                        <input placeholder="hind" class="w3-input w3-border w3-hover-blue" name="price" type="text" required="">
                                    </div>
                                    <select name="category" class="form-control col-md-5">
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
                                    <select name="heel" class="form-control col-md-5">
                                        <option value="5cm peenkonts">5cm peenkonts</option>
                                        <option value="7cm peenkonts">7cm peenkonts</option>
                                        <option value="8cm peenkonts">8cm peenkonts</option>
                                        <option value="5cm alt laienev konst">5cm alt laienev konst</option>
                                        <option value="7cm alt laienev konst">7cm alt laienev konst</option>
                                        <option value="8cm alt laienev konst">8cm alt laienev konst</option>
                                    </select>  
                                </div>
                                <div class="custom-file col-md-5">
                                    <input type="file" class="custom-file-input" id="customFile" name='file' />
                                    <label class="custom-file-label" for="customFile"></label>
                                </div>
                                <br>   
                                <input type='submit' value='Salvesta' name='but_upload' class="btn btn-primary mb-2">    
                            </form>
                        </div>
                        <div  id="shopUpdateContent" style="display: none;">
                            <a>Test</a>
                        </div>
                        <div id="shopDeleteContent" style="display: none;">
                            <a>Test</a>
                        </div>
                    </div>
                </div>
            </div>    
                <!--ADMIN CALENDAR-->  
                <div class="w3-container" id="calendar" style="display: block;" >
                    <h1>calendar</h1>
                    <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
                </div>
                <!--ADMIN MAIN PAGE CONTENT-->
                <div class="w3-container" id="info" style="display: block;" >
                    <h1>info</h1>
                </div>
                <!--ADMIN EDIT USERS-->
                <div class="w3-container" id="user" style="display: block;" >
                    <h1>Konto Loomine</h1>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div>
                            <input name="signupEmail" type="email" class="w3-input w3-border w3-hover-blue" id="inputEmail3" placeholder="Email" value="<?php echo $signupEmail;?>">
                            <span><?php echo $signupEmailError; ?></span>
                        </div>
                        <div>
                            <input name="signupPassword" type="password" class="w3-input w3-border w3-hover-blue" id="inputPassword3" placeholder="Password">
                            <span><?php echo $signupPasswordError; ?></span>
                        </div>
                        <div >
                            <input name="signupName" type="text" class="w3-input w3-border w3-hover-blue" id="inputAddress" placeholder="Nimi" value="<?php echo $signupName; ?>">
                            <span><?php echo $signupNameError; ?></span>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input name="signupButton" class="btn btn-primary" type="submit" value="Loo kasutaja">
                            </div>
                        </div>
                        <div class="card-body" id="userSaved">
                            <?php if(!empty($message)): ?>
                                <div class="alert alert-success">
                                    <?php echo $message; ?>
                                </div>
                            <?php endif; ?>    
                        </div>
                    </form>    
                </div> 
            </div>
        </div>    
    </body>
</html> 