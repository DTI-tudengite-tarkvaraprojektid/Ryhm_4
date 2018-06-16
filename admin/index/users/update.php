<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=hash("sha512", $_POST["password"]);
 
	mysqli_query($conn,"update `users` set username='$username', email='$email', password='$password' where userid='$id'");
	header('location:index.php');
?>