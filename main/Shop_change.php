<?php
if(isSet($_REQUEST["dir"])){
	$dir = $_REQUEST["dir"];
}

if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while ((($file = readdir($dh)) !== false)){
		if  (($file !== (substr($file, 0, -4) . ".png")) and ($file{0} !== ".")){
			$directory = $dir . "/" . $file . "/";
			$files = scandir ($directory);
			$firstFile = $directory . $files[2];
			echo "<a href='form.php?dir=" . $dir . $file . "/'><img src='" . $firstFile . "' width='100'></a>";
			echo "Klaster:" . $file . "<br>";
		}
    }
    closedir($dh);
  }
}
?>