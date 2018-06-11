<?php
	include('db_fun.php');
	$view = empty($_GET['view'])  ? 'index' : $_GET['view'];
	
	include('views/layouts/shop.php');
	
?>