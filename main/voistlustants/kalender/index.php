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


<section  id="voistlustants_calendar">				
	<div class="container-fluid padding d-none d-sm-block">
		<div class="row padding">
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
			<div class="col-xl-8 col-lg-8 col-md-10 about-1">
				<h3 class="display-4 text-center">Kalender</h3>
				<div class="googleCalendar text-center">
					  <iframe src="https://calendar.google.com/calendar/embed?showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1">
			</div>
		</div>
		</div>
			<div class="container-fluid padding d-block d-sm-none">
			<div class="row padding">
				<div class="col-xl-2 col-lg-2 col-md-1">
				</div>
				<div class="col-xl-8 col-lg-8 col-md-10 about-1">
					<h3 class="display-4 text-center">Kalender</h3>
					<div class="googleCalendar text-center">
						  <iframe src="https://calendar.google.com/calendar/embed?mode=AGENDA&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=2kkmj0m33sbnkee7o90lmhttsk%40group.calendar.google.com&amp;color=%23182C57&amp;ctz=Australia%2FBrisbane" style="border-width:0" width="800" height="400" frameborder="0" scrolling="no"></iframe>
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