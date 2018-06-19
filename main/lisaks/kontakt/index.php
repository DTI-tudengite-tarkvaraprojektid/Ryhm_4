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
	<link href="https://greeny.cs.tlu.ee/~ttaevik/test/Ryhm_4/main/assets/css/style.css" rel="stylesheet">
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

<section id="kontakt">	
<div class="container-fluid col-lg-10">
<div class="row padding">
	<div class="col-lg-6" id="tantsud">
		<div class="card card-body" id="tabp">
			<h3 class="text-center">Rocca Al Mare Kool, Vabaõhumuuseumi tee 8, 13521 Tallinn; </h3>
		</div>
	</div>
	<div class="col-lg-6" id="tantsud">
		<div class="card card-body" id="tabp">
			<h3 class="text-center">Haabersti Vene Gümnaasium, Õismäe tee 132, 13511 Tallinn; </h3>
		</div>
	</div>
	<div class="col-lg-12" id="tantsud">
		<div class="card card-body" id="tabp">
			<h3 class="text-center">Telefon 5919 0800; E-post info@tantsumeka.ee</h3>
		</div>
	</div>
</div>
</div>
</section>

</main>
<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>