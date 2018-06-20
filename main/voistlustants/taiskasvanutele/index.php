<?php
	include('../../content.php');
	
?>
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


<section id="algkursus">
<div class="container-fluid col-lg-5 col-md-8 padding">
<div class="row padding">
	<div class="about-1 col-12">
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Võistlustants</h2>
		</div>
		<p><?php echo $content[23];?> 
		<br>
		<br>
		<?php echo $content[24];?>
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
						<textarea class="form-control" rows="14" name="sõnum" type="text" placeholder="Pärast registreerimist võtame Teiega ühendust." required></textarea>
						<div class="invalid-feedback">Palun täitke</div>
					</div>
					<input name="_next" value="http://greeny.cs.tlu.ee/~sevtrobe/Tantsumeka/Ryhm_4/main/voistlustants/taiskasvanutele/" type="hidden">
					<input name="_subject" value="Registreerimine Võistlustants" type="hidden">
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
