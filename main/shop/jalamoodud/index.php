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
	<link href="http://greeny.cs.tlu.ee/~valevale/praktika/Ryhm_4/main/assets/css/style.css" rel="stylesheet">
	<script>
		
		function collapsePanels(){
			jQuery('.collapse').collapse('hide');
		}

	</script>
</head>
<body>
<div id="wrapper">
<!-- Navigation -->

<?php
	require("../../header.php");
?>

<!--- Tantsumeka -->
<div class="container-fluid col-lg-10">
<div class="row welcome">
	<div class="col-12">
		<h1 class="display-4 text-center">Jalamõõdud</h1>
	</div>
</div>
</div>

<!--Tutvustus põhjalik-->
<div class="container-fluid col-lg-10">
<div class="row">
	<div class="col-lg-12 about-1">
		<p>Jalamõõte on vaja juhul, kui Teil on omapärase kujuga jalalaba, mis ei vasta standard numbrile.<br>
		NB! Astu paberile ja kanna kogu raskus jalale. Märkimiseks kasuta tavalist pliiatsit,hoides pliiats vertikaalselt otse ülevalt alla. Vajadusel kasuta abilist! Seejärel mõõda märgitud vahemaad ja päka ümbermõõt ning saada meile!</p>
		<p>MÕÕT 1: varbast kannani</p>
		<p><img src="talla_pikkus.jpg" alt="talla pikkus" width="800" height="598" border="0" /></p>
		<p>MÕÕT 2: suure varba liigesest kuni väikse varba liigeseni</p>
		<p><img src="paka_laius.jpg" alt="talla pikkus" width="800" height="598" border="0" /></p>
		<p><img src="photo.jpg" alt="talla pikkus" width="800" height="598" border="0" /></p>
		<p>MÕÕT 3: päka ümbermõõt samast kohast nagu mõõt 2</p>
		<p><img src="Paka_ymbermoot.jpg" alt="talla pikkus" width="800" height="598" border="0" /></p>
		
	</div>
</div>
</div>



<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>