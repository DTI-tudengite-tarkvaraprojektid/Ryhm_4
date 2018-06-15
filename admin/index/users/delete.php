<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `users` where userid='$id'");
	header('location:index.php');
?>