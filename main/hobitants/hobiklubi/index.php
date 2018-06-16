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


<section id="hobiklubi">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
    <div class="col-xl-6 col-lg-8 col-md-10 about-1">
		<h3 class="display-4 text-center">Hobiklubi</h3>
		<p>HOBIKLUBI on tantsuharrastus nendele, kellele tants, muusika ja liikumine on saanud osaks elustiilist. Hobiklubi õhtutel tantsitakse ja veedetakse koos aega heas seltskonnas, õppides uusi huvitavaid tantsukombinatsioone. </p>
		<br>
		<p>2017/2018 hooajal toimuvad tunnid järgmiselt:</p>
		<pre>
HOBIKLUBI I teisipäeviti kl 18:30-20.00
Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)
SÜGIS 19.09.2017 - 12.12.2017
TALV 09.01.2018 - 13.03.2018
KEVAD 20.03.2018 - 15.05.2018
Tasumine paarile 3. osamaksena:
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)

HOBIKLUBI II teisipäeviti kl 20:00-21:30
Rocca al Mare Kooli aulas (Vabaõhumuuseumi tee 8)
SÜGIS 19.09.2017 - 12.12.2017
TALV 09.01.2017 - 13.03.2018
KEVAD 20.03.2017 - 15.05.2018
Tasumine paarile 3. osamaksena:
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 128 € (kevad)
					
HOBIKLUBI III kolmapäeviti kl 20.00-21.30
Rocca al Mare Kooli aulas (Vabaõhumuusumi tee 8)
SÜGIS 20.09.2017 - 13.12.2017
TALV 10.01.2018 - 14.03.2018
KEVAD 21.03.2018 - 16.05.2018
Tasumine paarile 3. osamaksena:
1. osa 185 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)
					
HOBIKLUBI IV kolmapäeviti kl 20.00-21.30
Haabersti Vene Gümnaasiumi aulas (Õismäe tee 132)
SÜGIS 13.09.2017 - 13.12.2017
TALV 10.01.2018 - 14.03.2018
KEVAD 21.03.2018 - 16.05.2018
Tasumine paarile 3. osamaksena:
1. osa 200 € (sügis), 2. osa 160 € (talv), 3. osa 144 € (kevad)
		</pre>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
</div>
</div>	
</section>

<section id="kursus_registration">				
<div class="container-fluid padding">
<div class="row padding">
	<div class="col-xl-3 col-lg-2 col-md-1">
    </div>
    <div class="col-xl-6 col-lg-8 col-md-10 about-1">
		
		<div class="contact-clean">
			<form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST">
				<h3 class="display-4 text-center">Registreeri</h3>
				<div class="form-group"><input class="form-control" type="text" name="nimi" placeholder="Name" /></div>
				<div class="form-group"><input class="form-control is-invalid" type="email" name="_replyto" placeholder="Email" /><small class="form-text text-danger">Please enter a correct email address.</small></div>
				<div class="form-group"><textarea class="form-control" rows="14" name="sõnum" type="text" placeholder="Message"></textarea></div>
				<input type="hidden" name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" />
            	<input type="hidden" name="_subject" value="Registreerimine" />
            	<input type="hidden" name="_format" value="plain" />
            	<input type="text" name="_gotcha" style="display:none" />
				<div class="form-group"><input class="btn btn-primary" value="Send" type="submit"/></div>
			</form>
		</div>
	</div>
	<div class="col-xl-3 col-lg-2 col-md-1">
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