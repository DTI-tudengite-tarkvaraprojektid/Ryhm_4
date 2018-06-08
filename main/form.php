<?php
$dir = "Shop/";
if(isSet($_REQUEST["dir"])){
	$dir = $_REQUEST["dir"];
}

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while ((($file = readdir($dh)) !== false)){
		if  ($file{0} !== "."){
			echo "<a href='" . $dir . $file . "'><img src='". $dir . $file . "' width='200' ></a>";
			echo "Klaster:" . $file . "<br>";
		}
    }
    closedir($dh);
  }
}
?>