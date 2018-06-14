<?php
	include('conn.php');
 
	$name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST["hind"];
 
	mysqli_query($conn,"insert into `products` (name,description,price) values ('$name','$description','$price')");
	header('location:index.php');
?>