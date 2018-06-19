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


<section  id="gallery">				
	<div class="container-fluid padding d-none d-sm-block">
        <div class="row padding">
            <div class="col-xl-2 col-lg-2 col-md-1">
            </div>
            <div class="col-xl-8 col-lg-8 col-md-10 about-1">
				<br />
                <h3 class="display-4 text-center">Galerii</h3>
				<br />
                <div>
                    <script async src="https://www.publicalbum.org/js/pa-ins.min.js"></script>
                        <ins class="pa-widget-gallery" style="width:100%;height:480px;"
                            data-url="https://photos.google.com/share/AF1QipMnlk36KXQ6D4OjFedApi_tDvkdm7WZZPBXYanIawKlKh_EQ5ceZiLazZ9pw6uONg?key=TkJGcFotclZsTzZNdVRPMkx6RWNKZWhUci1yVllR"
                            data-uid="ba079acfd0c1f45e73dd95c1bd16021f55eee0ce879762958184e263102275ad"
                            data-delay="5">
                        </ins>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-1">
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