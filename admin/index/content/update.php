<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$heading=$_POST['heading'];
	$content=$_POST['content'];
	$new_content = nl2br("$content");
 
	mysqli_query($conn,"update `WebContent` set heading='$heading', content='$new_content' where postid='$id'");
	header('location:index.php');
?>