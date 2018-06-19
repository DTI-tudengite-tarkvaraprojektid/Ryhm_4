<?php
	include('conn.php');
	if(isset($_POST['add'])):
		//All image names including main
		$names = '';
		//all images
		$validextensions = array("jpeg", "jpg", "png");
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		//main Image
		$fileMain = $_FILES['mainFile'];
		$fileMainName = $_FILES['mainFile']['name'];
		$fileMainTmpName = $_FILES['mainFile']['tmp_name'];
		$fileMainSize = $_FILES['mainFile']['size'];
		$fileMainError = $_FILES['mainFile']['error'];
		$fileMainType = $_FILES['mainFile']['Type'];
		$fileMainExt = explode('.', $fileMainName);
		$fileMainActualExt = strtolower(end($fileMainExt));

		if($fileMainSize < 1024000){
			$fileMainNameNew = uniqid('', true).".".$fileMainActualExt;
			$fileMainDestination = 'uploads/'.$fileMainNameNew;
			move_uploaded_file($fileMainTmpName, $fileMainDestination);
			$names .= $fileMainNameNew.";";
		}

		//item variables
		$name=$_POST['name'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$category=$_POST['category'];
		$heel=$_POST['heel'];
		
		
		foreach($_FILES['file']['name'] as $k => $ar):
			$temporary = explode(".", $_FILES['file']['name'][$k]);
			$file_extension = strtolower(end($temporary));
			if ((($_FILES['file']['type'][$k] == "image/png") || ($_FILES['file']['type'][$k] == "image/jpg") || ($_FILES['file']['type'][$k] == "image/jpeg")
			) && ($_FILES['file']['size'][$k] < 10000000)//Approx. 100kb files can be uploaded.
			&& in_array($file_extension, $validextensions)) {
				if ($_FILES['file']['error'][$k] > 0)
				{
					echo "Return Code: " . $_FILES['file']['error'][$k] . "<br/><br/>";
				}
				else
				{
					$sourcePath = $_FILES['file']['tmp_name'][$k]; // Storing source path of the file in a variable
					$uniqeName = uniqid('', true).".".$file_extension;//$_FILES['file']['name'][$k];
					$names .= $uniqeName.";";
					$targetPath = "uploads/".$uniqeName; // Target path where file is to be stored
					move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
				}
			}
			else
			{
			echo "<span id='invalid'>***Invalid file Size or Type***<span>";
			}
		endforeach;
		mysqli_query($conn,"insert into `products` (name,image,image_chosen,description,price,category,heel) values ('$name','$names','$fileMainNameNew','$description','$price','$category','$heel')");
		header('Location: index.php?uploadsuccess');
	endif;
?>