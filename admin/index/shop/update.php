<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
 
	mysqli_query($conn,"update `products` set name='$name', description='$description' where id='$id'");
	header('location:index.php');
?>