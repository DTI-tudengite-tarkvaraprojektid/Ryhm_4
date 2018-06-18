<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tantsumeka</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="https://greeny.cs.tlu.ee/~valevale/praktika/Ryhm_4/main/assets/css/style.css" rel="stylesheet">
	<script>
		function hideHeaderText() {
    		var x = document.getElementById("tutvustus");
    	     x.style.display = "none";
			 $("#navbarResponsive").attr("class","navbar-collapse collapse")
    	}

		function showHeaderText() {
    		var x = document.getElementById("tutvustus");
    	     x.style.display = "block";
    	}
		function collapsePanels(){
			jQuery('.collapse').collapse('hide');
		}
	</script>
</head>
<body>
<div id="wrapper">
<!-- header start -->
<?php
	require("../../header.php");
?>
<!-- header end -->


<<<<<<< HEAD
<section id="edasijoudnud">
=======
<section id="jatkukursus">				
>>>>>>> 04ff39d6ba35f0e04f109438ee13ca9c8fbe4e2a
<div class="container-fluid col-lg-5 col-md-8 padding">
<div class="row padding">
	<div class="about-1">
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Jätkukursus</h2>
		</div>
		<p>JÄTKUKURSUS on niiöelda algkursuse pikendus ja sobib neile, kes soovivad oma tantsuoskust lihvida ja mõned tantsusammud juurde õppida. Põhitantsud on samad. Lisaks õpime buggi.</p> 
		<p>
<<<<<<< HEAD
        JÄTKUKURSUS KEVADEL neljapäeviti kl 18:30-20:00<br>
        Haabersti Vene Gümnaasiumis (Õismäe tee 132)<br>
        22.03.2018 - 17.05.2018 (9 korda)<br>
        Maksumus paarile: 180 €<br>
=======
JÄTKUKURSUS KEVADEL neljapäeviti kl 18:30-20:00</br>
Haabersti Vene Gümnaasiumis (Õismäe tee 132)</br>
22.03.2018 - 17.05.2018 (9 korda)</br>
Maksumus paarile: 180 €</br>
>>>>>>> 04ff39d6ba35f0e04f109438ee13ca9c8fbe4e2a
		</p>
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Registreeri</h2>
		</div>
			<form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST">
<<<<<<< HEAD
				<div class="form-group"><input class="form-control" name="nimi" placeholder="Name" type="text"></div>
				<div class="form-group"><input class="form-control is-invalid" name="_replyto" placeholder="Email" type="email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
=======
				<div class="form-group"><input class="form-control" type="text" name="nimi" placeholder="Name" /></div>
				<div class="form-group"><input class="form-control is-invalid" type="email" name="_replyto" placeholder="Email" /><small class="form-text text-danger">Please enter a correct email address.</small></div>
>>>>>>> 04ff39d6ba35f0e04f109438ee13ca9c8fbe4e2a
				<div class="form-group"><textarea class="form-control" rows="14" name="sõnum" type="text" placeholder="Message"></textarea></div>
				<input name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" type="hidden">
            	<input name="_subject" value="Registreerimine" type="hidden">
            	<input name="_format" value="plain" type="hidden">
            	<input name="_gotcha" style="display:none" type="text">
				<div class="form-group"><input class="btn btn-primary" value="Send" type="submit"></div>
			</form>
	</div>
</div>
</div>
</section>

<<<<<<< HEAD
=======




</main>
>>>>>>> 04ff39d6ba35f0e04f109438ee13ca9c8fbe4e2a
<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>
