<?php
$dir = "Shop/";
if(isSet($_REQUEST["dir"])){
	$dir = $_REQUEST["dir"];
}

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while ((($file = readdir($dh)) !== false)){
		if ($file == "1"){
			header("Location:Shop_change.php?dir=".$dir);
		}
		if  (($file !== (substr($file, 0, -4) . ".png")) and ($file{0} !== ".")){
			echo "<a href='Shop.php?dir=" . $dir . $file . "/'><img src='". $dir . $file . ".png' width='100'></a>";
			echo "Klaster:" . $file . "<br>";
		}
    }
    closedir($dh);
  }
}
?>
