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
	</head>

	<body>
		<div id="wrapper">
			<?php
				require("../main/header.php");
			
				if(!isset($_GET['id']))
				{
					include('views/pages/category.php'); 
				}
				else
				{
					include('views/pages/'.$view.'.php'); 
				}
				
				require("../main/footer.php");
			?>
		</div>	
	</body>
</html>