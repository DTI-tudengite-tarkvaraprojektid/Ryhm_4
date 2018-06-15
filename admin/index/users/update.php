<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$username=$_POST['username'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"update `users` set username='$username', email='$email' where userid='$id'");
	header('location:index.php');
?>