<?php

	//mysqli_set_charset($connection,"utf8");
    $contentStorage = '';
    include('conn.php');
    mysqli_set_charset($conn,'utf8');
	$query=mysqli_query($conn,"select * from `WebContent`");
	while($row=mysqli_fetch_array($query)){
        $contentStorage .= $row['content']."无";
    }
    $content = explode("无", $contentStorage);
    //25 <?php echo $content[25];
?>