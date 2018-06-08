<?php
  require("functions.php");
  //kui on juba sisseloginud
  if(isset($_SESSION["userId"])){
		header("Location: calendar.php");
		exit();
  }
  ///////////////////////////////
	$loginEmail = "";
	$notice="!";
	$loginEmailError ="";

  //sisselogimine
  if(isset($_POST["loginButton"])){
		//kas on kasutajanimi sisestatud
		if (isset ($_POST["loginEmail"])){
			if (empty ($_POST["loginEmail"])){
				$loginEmailError ="NB! Sisselogimiseks on 	vajalik kasutajatunnus (e-posti aadress)!";
			} else {
				$loginEmail = $_POST["loginEmail"];
			}
		}

		if(!empty($loginEmail) and !empty($_POST["loginPassword"])){

			$notice = signIn($loginEmail, $_POST["loginPassword"]);

		}

	}//if loginButton
///////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Tantsumeka | admin</title>
</head>
<body>
		<center>
	<h1>Tantsumeka | admin</h1>
	<h2>Logi sisse!</h2>


	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label>Kasutajanimi (E-post): </label>
		<input name="loginEmail" type="email" value="<?php echo $loginEmail; ?>">
		<br /><br />
		<label>Salasõna: </label>
		<input name="loginPassword" placeholder="Salasõna" type="password"><span></span>
		<br /><br />
		<input name="loginButton" type="submit" value="Logi sisse"><span><?php echo $notice; ?></span>
	</form>
</body>
</html>
