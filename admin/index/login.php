<?php
  require("functions.php");
  //kui on juba sisseloginud
  if(isset($_SESSION["userId"])){
		header("Location: index.php");
		exit();
  }
  ///////////////////////////////
	$loginEmail = "";
	$notice="";
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<section class="container-fluid">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
				<form class="form-container" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
					<div class="form-group text-center" >
						<img src="assets/img/tantsumeka_hele.png"  alt="logo" height="80" width="133">
					</div>
					<br>
					<div class="form-group">
						<input name="loginEmail" type="email" class="form-control <?php if($notice == 2) echo 'is-invalid' ; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kasutaja" value="<?php echo $loginEmail; ?>">
						<?php if($notice == 2) echo '<div class="invalid-feedback">Vale email!</div>';?>
					</div>
					<div class="form-group">
						<input name="loginPassword" type="password" class="form-control <?php if($notice == 1) echo 'is-invalid';?>" id="exampleInputPassword1" placeholder="Salasõna">
						<?php if($notice == 1) echo '<div class="invalid-feedback">Vale parool!</div>';?>
					</div>
					<input name="loginButton" type="submit" class="btn btn-primary btn-block" value="Logi sisse"><span></span>
				</form>
			</section>
		</section>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
