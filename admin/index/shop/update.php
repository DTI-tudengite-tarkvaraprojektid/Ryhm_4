<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$category=$_POST['category'];
	$heel=$_POST['heel'];
 
	mysqli_query($conn,"update `products` set name='$name', description='$description', price='$price', category='$category', heel='$heel' where id='$id'");
	header('location:index.php');
?>