<?php
	include("config.php");

	if(isset($_POST['but_upload'])){
	
		$name = $_FILES['file']['name'];
		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);

		// Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Valid file extensions
		$extensions_arr = array("jpg","jpeg","png","gif");

		// Check extension
		if( in_array($imageFileType,$extensions_arr) ){
			// Convert to base64 
			$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
			$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
			// Insert record
			$query = "insert into images(image) values('".$image."')";
			mysqli_query($con,$query);
			
			// Upload file
			move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
		}	
	}
?>

<!DOCTYPE html>
<html lang="et">
<head>
	<meta charset="utf-8">
	<title>Tantsumeka | admin</title>
</head>
<body>
	<section>
		<div>
            <h1>Uploader</h1>
			<form method="post" action="" enctype='multipart/form-data'>
 				<input type='file' name='file' />
  				<input type='submit' value='Save name' name='but_upload'>
			</form>
			<?php
				$sql = "select image from images where id=1";
				$result = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($result);
				$image_src2 = $row['image'];	
			?>
			<img src='<?php echo $image_src; ?>' >
        </div>
	</section>
</body>
</html>