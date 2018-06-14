<?php
	include('conn.php');
 
	$email=$_POST['email'];
    $username=$_POST['username'];
    $password=hash("sha512", $_POST["password"]);
 
	mysqli_query($conn,"insert into `users` (email,username,password) values ('$email','$username','$password')");
	header('location:index.php');
?>