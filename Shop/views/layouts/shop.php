<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tantsumeka</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link href="../main/assets/css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-logo fixed-top">
<div class="container">
	<a class="navbar-brand logo" href="#tutvustus" target="_self" style="background-image:url(&quot;../main/assets/img/tantsumeka_hele.png&quot;);" onclick="showHeaderText()"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			    <a class="nav-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="color: #ffef8f;">KURSUSED</a>
			    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			     <a class="dropdown-item" href="#algkursus" target="_self" onclick="hideHeaderText()">Algkursus</a>
			      <a class="dropdown-item" href="#jatkukursus" target="_self" onclick="hideHeaderText()">Jätkukursus</a>
			      <a class="dropdown-item" href="#edasijoudnud" target="_self" onclick="hideHeaderText()">Edasijõudnute kursus</a>
			      <a class="dropdown-item" href="#kursused_calendar" target="_self" onclick="hideHeaderText()">Kalender</a>
			      <a class="dropdown-item" href="#kursus_registration" target="_self" onclick="hideHeaderText()">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">HOBITANTS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#hobiklubi" target="_self" onclick="hideHeaderText()">Hobiklubi</a>
			      <a class="dropdown-item" href="#" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">VÕISTLUSTANTS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Võistlusttants täiskasvanutele</a>
			      <a class="dropdown-item" href="#" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">ERATUNNID</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Pulmatants</a>
			      <a class="dropdown-item" href="#" target="_self">Seltskonnatants</a>
			      <a class="dropdown-item" href="#" target="_self">Võistlustants</a>
			      <a class="dropdown-item" href="#" target="_self">Kalender</a>
			      <a class="dropdown-item" href="#" target="_self">Registreerimine</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">TANTSUTARBED</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Tantsukingad</a>
			      <a class="dropdown-item" href="#" target="_self">Tantsurõivad</a>
			    </div>
			</li>
			<li class="nav-item dropdown">
			    <a class="nav-link" data-toggle="dropdown" href="#" style="color: #ffef8f;">LISAKS</a>
			    <div class="dropdown-menu">
			      <a class="dropdown-item" href="#" target="_self">Galerii</a>
			      <a class="dropdown-item" href="#" target="_self">Kontakt</a>
			      <a class="dropdown-item" href="#" target="_self">Something else here</a>
			    </div>
			</li>
		</ul>
	</div>
</div>
</nav>

	<?php include('views/pages/category.php'); ?>

    <main>

		        <?php include('views/pages/'.$view.'.php'); ?>

    </main>
</body>
</html>

