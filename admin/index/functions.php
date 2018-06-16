<?php
	require("config.php");
	//alustame sessiooni
	session_start();
	function signIn($email, $password){
		$notice = "";
		$mysqli = new mysqli($GLOBALS["serverHost"], $GLOBALS["serverUsername"], $GLOBALS["serverPassword"], $GLOBALS["database"]);
		$stmt = $mysqli->prepare("SELECT userid, email, username, password FROM users WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->bind_result($id, $emailFromDb, $nameFromDb, $passwordFromDb);
		$stmt->execute();
		//kontrollime vastavust
		if ($stmt->fetch()){
			$hash = hash("sha512", $password);
			if ($hash == $passwordFromDb){
				$notice = "Logisite sisse!";
				//Määran sessiooni muutujad
				$_SESSION["userId"] = $id;
				$_SESSION["name"] = $nameFromDb;
				$_SESSION["userEmail"] = $emailFromDb;
				//lähen pealehele
				header("Location: index.php");//saadab
				exit();
			} else {
				$notice = 1;
			}
		} else {
			$notice = 2;
		}
		$stmt->close();
		$mysqli->close();
		return $notice;
	}
	//sisestuse kontrollimise funktsioon
	function test_input($data){
		$data = trim($data);//liigsed tühikud, TAB, reavahetuse jms
		$data = stripslashes($data);//eemaldab kaldkriipsud "\"
		$data = htmlspecialchars($data);
		return $data;
	}
?>
