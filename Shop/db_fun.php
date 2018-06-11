<?php

	function db_connect()
	{
		$serverHost = "localhost";
		$serverUsername = "if17";
		$serverPassword = "if17";
		$db = 'if17_Tantsumeka';
		
		$connection = new mysqli($serverHost, $serverUsername, $serverPassword, $db);
		
		return $connection;
	}
	
	function db_result_to_array($result)
	{
		$res_array = array();
		$count = 0;
		while($row = mysqli_fetch_array($result))
		{
			$res_array[$count]	= $row;
			$count ++;
		}
		return $res_array;
	}
	
	
	
	function get_products()
	{
		
		$query = "SELECT * FROM products ORDER BY id DESC";
		
		$result = mysqli_query(db_connect(),$query);
		
		$result = db_result_to_array($result);
		
		return $result;
	}
?>
