<?php
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
?>
<!--ADMIN EDIT USERS-->
			<section id="createUser">
                <div class="w3-container" id="user">
                    <div class="w3-container"><h1>Konto Loomine</h1></div>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="w3-container">
                            <input name="signupEmail" type="email" class="w3-input w3-border w3-hover-grey" id="inputEmail3" placeholder="Email" value="<?php echo $signupEmail;?>">
                            <span><?php echo $signupEmailError; ?></span>
                        </div>
                        <div class="w3-container">
                            <input name="signupPassword" type="password" class="w3-input w3-border w3-hover-grey" id="inputPassword3" placeholder="Password">
                            <span><?php echo $signupPasswordError; ?></span>
                        </div>
                        <div class="w3-container">
                            <input name="signupName" type="text" class="w3-input w3-border w3-hover-grey" id="inputAddress" placeholder="Nimi" value="<?php echo $signupName; ?>">
                            <span><?php echo $signupNameError; ?></span>
                        </div>
                        <div class="w3-container">
                            <input name="signupButton" class="w3-button w3-black" type="submit" value="Loo kasutaja">
                        </div>
                        </div>
                        <div class="w3-container" id="userSaved">
                            <?php if(!empty($message)): ?>
                            <div class="w3-panel w3-green w3-display-container">
                                <span onclick="this.parentElement.style.display='none'"class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                                <h3>Tulemus</h3>
                                <?php echo $message; ?>
                            </div>
                            <?php endif; ?>    
                        </div>
                    </form>
            </section>
