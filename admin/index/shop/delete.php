<?php
	
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `products`");
	while($row=mysqli_fetch_array($query)){
		$img = $row['image'];
		$imgArray = explode(";", $img);
		$img_count = count($imgArray);
		for($i=0 ; $i < $img_count; $i++){
			$path = "uploads/".$imgArray[$i];
			unlink($path);
		}
		mysqli_query($conn,"delete from `products` where id='$id'");
		header('location:index.php');
	}
?>