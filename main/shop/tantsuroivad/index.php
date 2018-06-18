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


<section id="algkursus">
<div class="container-fluid col-lg-5 col-md-8 col-sm-10 padding">
<div class="row padding">
	<div class="about-1">
		<div class="col-12" id="tantsud">
			<h2 class="text-center">Tailor-Made</h2>
		</div>
		<p>Alates 2009. aastast valmistab Tailor-Made OÜ noormeeste ja meeste võistlus- ning treeningriideid.
Tootearenduses järgime innovaatilisi moe- ja tehnoloogilisi suundi.</p> 
		<p class="display-4">
            Info: <br><br>
            +372 514 5580 <br>
            info@tantsumeka.ee<br><a href="http://www.facebook.com/Tailor-Made-100738136675898/">Tailor-Made facebook</a>
        </p><br>
        <p>Tailor-Made OÜ toetab frakiga täiskasvanute 10-tantsu euroopameistreid Jaak Vainomaad ja Taina Savikurki</p>
        <div data-ride="carousel" class="carousel slide" id="carousel-1">
            <div role="listbox" class="carousel-inner">
            <div class="carousel-item active"><img src="../../../main/assets/img/tailormade/jaakjataina1.jpg" alt="Slide Image" class="w-100 d-block" /></div>
                <div class="carousel-item"><img src="../../../main/assets/img/tailormade/jaakjataina2.jpg" alt="Slide Image" class="w-100 d-block" /></div>
        
            </div>
        <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span aria-hidden="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><span aria-hidden="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
        </div>
    <ol
        class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
        <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
</div>
	</div>
</div>
</div>	
				
	




</main>
<!--- Footer -->
<?php
	require("../../footer.php");
?>
</div>
</body>
</html>