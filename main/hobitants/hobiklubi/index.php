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


<section id="edasijoudnud">
<div class="container-fluid col-lg-5 col-md-8 padding">
<div class="row padding">
	<div class="about-1">
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Hobiklubi</h2>
		</div>
		<p>HOBIKLUBI on tantsuharrastus nendele, kellele tants, muusika ja liikumine on saanud osaks elustiilist. Hobiklubi õhtutel tantsitakse ja veedetakse koos aega heas seltskonnas, õppides uusi huvitavaid tantsukombinatsioone.</p> 
		<p>
        2017/2018 hooajal toimuvad tunnid järgmiselt:<br>
        <br>
        HOBIKLUBI I teisipäeviti kl 18:30-20.00<br>
        Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)<br>
        SÜGIS 19.09.2017 - 12.12.2017<br>
        TALV 09.01.2018 - 13.03.2018<br>
        KEVAD 20.03.2018 - 15.05.2018<br>
        Tasumine paarile 3. osamaksena:<br>
        1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)<br>
        <br>
        HOBIKLUBI II teisipäeviti kl 20:00-21:30<br>
        Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)<br>
        SÜGIS 19.09.2017 - 12.12.2017<br>
        TALV 09.01.2017 - 13.03.2018<br>
        KEVAD 20.03.2017 - 15.05.2018<br>
        Tasumine paarile 3. osamaksena:<br>
        1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)<br>
        <br>                    
        HOBIKLUBI III kolmapäeviti kl 20.00-21.30<br>
        Rocca al Mare Kooli aulas (Vabaõhumuusumi tee 8)<br>
        SÜGIS 20.09.2017 - 13.12.2017<br>
        TALV 10.01.2018 - 14.03.2018<br>
        KEVAD 21.03.2018 - 16.05.2018<br>
        Tasumine paarile 3. osamaksena:<br>
        1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)<br>
        <br>                   
        HOBIKLUBI IV kolmapäeviti kl 20.00-21.30<br>
        Haabersti Vene Gümnaasiumi aulas (Õismäe tee 132)<br>
        SÜGIS 13.09.2017 - 13.12.2017<br>
        TALV 10.01.2018 - 14.03.2018<br>
        KEVAD 21.03.2018 - 16.05.2018<br>
        Tasumine paarile 3. osamaksena:<br>
        1. osa 200 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)<br>
        <br>
        </p>
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Registreeri</h2>
		</div>
			<form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST">
				<div class="form-group"><input class="form-control" name="nimi" placeholder="Name" type="text"></div>
				<div class="form-group"><input class="form-control is-invalid" name="_replyto" placeholder="Email" type="email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
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

<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>
