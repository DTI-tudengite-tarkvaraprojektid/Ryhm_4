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
	<link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png">
	<link rel="manifest" href="../../favicon/site.webmanifest">
	<link rel="mask-icon" href="../../favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="../../favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="../../favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffef8f">
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
			<div class="googleCalendar"><iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=vaba%C3%B5humuuseumi%20tee%208&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
		</div>
	</div>
	<div class="col-lg-6" id="tantsud">
		<div class="card card-body" id="tabp">
			<h3 class="text-center">Haabersti Vene Gümnaasium, Õismäe tee 132, 13511 Tallinn; </h3>
			<div class="googleCalendar"><iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=%C3%B5ism%C3%A4e%20tee%20132&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
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
