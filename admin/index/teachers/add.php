<?php
	include('conn.php');
	if(isset($_POST['add'])):
		//main Image
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['Type'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$name=$_POST['name'];
		$info=$_POST['info'];

		if($fileSize < 1024000){
			$fileNameNew = uniqid('', true).".".$fileActualExt;
			$fileDestination = 'uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
		}
			mysqli_query($conn,"insert into `trainers` (name,info,photo) values ('$name','$info','$fileNameNew')");
			header('Location: index.php?uploadsuccess');
		endif;
?>