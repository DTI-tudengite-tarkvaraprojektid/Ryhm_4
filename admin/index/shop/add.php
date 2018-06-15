<?php
	include('conn.php');
	if (isset($_POST['add'])){
		//image variables
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['Type'];
		//item variables
		$name=$_POST['name'];
    	$description=$_POST['description'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$heel=$_POST['heel'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if(in_array($fileActualExt, $allowed)){
			if ($fileError === 0){
				if($fileSize < 102400){
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					$fileDestination = 'uploads/'.$fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
					//DB SAVE 
					mysqli_query($conn,"insert into `products` (name,image,image_chosen,description,price,category,heel) values ('$name','$fileNameNew','$fileNameNew','$description','$price','$category','$heel')");
					header('Location: index.php?uploadsuccess');
				}else{
					echo "Fail on liiga suur";
				}
			}else{
				echo "Tekkis viga";
			}


		}else{
			echo "vali teist faili formaadi";
		}

		
	}
	
?>