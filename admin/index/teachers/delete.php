<?php
	
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `trainers`");
	while($row=mysqli_fetch_array($query)){
		$img = $row['photo'];
		$path = "uploads/".$img;
		unlink($path);
		mysqli_query($conn,"delete from `trainers` where id='$id'");
		header('location:index.php');
	}
?>