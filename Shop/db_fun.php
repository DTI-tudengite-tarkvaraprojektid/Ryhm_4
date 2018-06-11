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
	
	function get_cat_products($cat)
	{
		$query = "SELECT * FROM products WHERE category='$cat' ORDER BY id DESC";
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return $result;
	}
	
	function get_cat()
	{
		$query = "SELECT * FROM categories ORDER BY id DESC";
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return $result;
	}
	
	function get_product($id)
	{
		$query = "SELECT * FROM products WHERE id='$id' ";
		$result = mysqli_query(db_connect(),$query);
		$row = mysqli_fetch_array($result);
		return $row;
	}
?>
