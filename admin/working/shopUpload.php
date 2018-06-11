<?php
	include("config.php");
	$database = "if17_Tantsumeka"
	// Create connection
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
	if(isset($_POST['but_upload'])){
	
		$name = $_FILES['file']['name'];
		$target_dir = "shop/upload/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);

		// Select file type
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Valid file extensions
		$extensions_arr = array("jpg","jpeg","png","gif");

		// Check extension
		if( in_array($imageFileType,$extensions_arr) ){
			// save to database
			if(isset($_POST["name"]) and isset($_POST["description"]) and isset($_POST["price"]) and isset($_POST["category"]) and isset($_POST["heel"]) ){
				$stmt = $mysqli->prepare("INSERT INTO products (name, image, description, price, category, heel) VALUES (?, .$target_dir., ?, ?, ?,?)");
				echo $mysqli->error;
				$stmt->bind_param("ssiss", $_POST["name"],$_POST["description"],$_POST["price"], $_POST["category"],$_POST["heel"]);
				$stmt->execute();
				echo $stmt->error;
				// Upload file
				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
			}
			$stmt->close();
			$mysqli->close();
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
			<input placeholder="Nimetus" name="name" type="text" required="">
			<input placeholder="kirjeldus" name="description" type="text" required="">
			<input placeholder="hind" name="price" type="text" required="">
			<input placeholder="kategooria" name="category" type="text" required="">
			<input placeholder="konks" name="heel" type="text" required="">
			<form method="post" action="" enctype='multipart/form-data'>
 				<input type='file' name='file' />
  				<input type='submit' value='Save name' name='but_upload'>
			</form>
        </div>
	</section>
</body>
</html>