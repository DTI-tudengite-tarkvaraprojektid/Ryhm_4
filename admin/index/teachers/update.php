<?php
	include('conn.php');
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$info=$_POST['info'];
 
	mysqli_query($conn,"update `trainers` set name='$name', info='$info' where id='$id'");
	header('location:index.php');
?>