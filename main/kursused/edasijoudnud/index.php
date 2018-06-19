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
	<link rel="apple-touch-icon" sizes="57x57" href="../../favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../../favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../../favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../../favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../../favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../../favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../../favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<link rel="manifest" href="../../favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../../favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script>
		
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


<section id="edasijoudnud">
<div class="container-fluid col-lg-5 col-md-8 padding">
<div class="row padding">
	<div class="about-1">
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Edasijõudnute kursus</h2>
		</div>
		<p>EDASIJÕUDNUTE KURSUS on veel üks võimalus jätkata tantsu õppimist. Need kursused on hoojapõhised ja kestavad sügisest kevadeni. Sealt edasi saab liikuda hobiklubisse.</p> 
		<p>
        EDASIJÕUDNUTE KURSUS KEVADEL neljapäeviti kl 20:00-21:30<br>
        Haabersti Vene Gümnaasiumis (Õismäe tee 132)<br>
        22.03.2018 - 17.05.2018 (9 korda)<br>
        Maksumus paarile: 171 €<br>
		</p>
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Registreeri</h2>
		</div>
		<form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST" class="needs-validation" novalidate>
					<div class="form-group">
						<input class="form-control" name="nimi" placeholder="Nimi" type="text" required>
						<div class="invalid-feedback">Palun sisestage oma nimi.</div>
					</div>
					<div class="form-group">
						<input class="form-control" name="_replyto" placeholder="Email" type="email" required>
						<div class="invalid-feedback">Sisestage korrektne e-mail.</div>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="14" name="sõnum" type="text" placeholder="Kirjutage millisel edasijõudnute kursusel soovite osaleda. Pärast registreerimist võtame Teiega ühendust." required></textarea>
						<div class="invalid-feedback">Palun täitke</div>
					</div>
					<input name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" type="hidden">
					<input name="_subject" value="Registreerimine" type="hidden">
					<input name="_format" value="plain" type="hidden">
					<input name="_gotcha" style="display:none" type="text">
					<div class="form-group">
						<input class="btn btn-primary" value="Registreeri" type="submit">
					</div>
				</form>
				<script>
        			var form = document.querySelector('.needs-validation');
        			form.addEventListener('submit', function(event) {
            			if (form.checkValidity() === false) {
               				event.preventDefault();
                			event.stopPropagation();
            			}
            			form.classList.add('was-validated');
        			})
    			</script>
	</div>
</div>
</div>	
</section>

<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>
