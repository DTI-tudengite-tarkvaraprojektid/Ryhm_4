<?php
	require("functions.php");
	$database = "if17_Tantsumeka";
	//väljalogimine
	if(isset($_GET["logout"])){
		session_destroy(); //lõpetab sessiooni
		header("Location: login.php");
	}
	// Create connection
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

	if(isset($_POST["but_upload"])){

		if(isset($_POST["description"]) and isset($_POST["price"]) and isset($_POST["category"]) and isset($_POST["heel"]) ){
			// Photo upload 
			$name = $_FILES['file']['name'];
			$target_dir = "shop/upload/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);

			// Select file type
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Valid file extensions
			$extensions_arr = array("jpg","jpeg","png","gif");

			// Check extension
			if( in_array($imageFileType,$extensions_arr) ){			
				// Upload file
				move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
			}	
		
			$stmt = $mysqli->prepare("INSERT INTO  products (name, description, price, category, heel, image) VALUES (?,?,?,?,?,'$name')");
			echo $mysqli->error;
			$stmt->bind_param("sssss", $_POST["name"],$_POST["description"], $_POST["price"],$_POST["category"],$_POST["heel"]);
			$stmt->execute();
			echo $stmt->error;
			
		}
		$stmt->close();
		$mysqli->close();
		
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
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype='multipart/form-data'>
				<input placeholder="nimetus" name="name" type="text" required="">
				<input placeholder="kirjeldus" name="description" type="text" required="">
				<input placeholder="hind" name="price" type="text" required="">
				<input placeholder="kategooria" name="category" type="text" required="">
				<select name="heel">
					<option value="5cm peenkonts">5cm peenkonts</option>
					<option value="7cm peenkonts">7cm peenkonts</option>
					<option value="8cm peenkonts">8cm peenkonts</option>
					<option value="5cm alt laienev konst">5cm alt laienev konst</option>
					<option value="7cm alt laienev konst">7cm alt laienev konst</option>
					<option value="8cm alt laienev konst">8cm alt laienev konst</option>
					<option value="audi">Audi</option>
				</select>
 				<input type='file' name='file' />
  				<input type='submit' value='Save' name='but_upload'>
			</form>
        </div>
	</section>
</body>
</html>