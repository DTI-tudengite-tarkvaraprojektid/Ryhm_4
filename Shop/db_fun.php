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
		$count_prod = mysqli_query(db_connect(),"SELECT COUNT(*) FROM products");
		$row1 = mysqli_fetch_array($count_prod);
		$count_post = $row1[0];

		$query = "SELECT * FROM products ORDER BY id DESC LIMIT 6";
		
		if(isset($_GET['page']))
		{
			$page = (int)$_GET['page'];
			$query = "SELECT * FROM products ORDER BY id DESC LIMIT $page,6";
		}
		
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return array($result, $count_post);
	}
	
	function get_cat_products($cat)
	{
		$count_prod = mysqli_query(db_connect(),"SELECT COUNT(*) FROM products  WHERE category='$cat'");
		$row1 = mysqli_fetch_array($count_prod);
		$count_post = $row1[0];
		
		$query = "SELECT * FROM products WHERE category='$cat' ORDER BY id DESC LIMIT 6";
		
		if(isset($_GET['page']))
		{
			$page = (int)$_GET['page'];
			$query = "SELECT * FROM products WHERE category='$cat' ORDER BY id DESC LIMIT $page,6";
		}
		
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return array($result, $count_post);
	}
	
		function get_cat_sex()
	{
		$query = "SELECT * FROM sex ORDER BY id";
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return $result;
	}
	
	function get_cat()
	{
		$query = "SELECT * FROM categories ORDER BY id";
		
		if(isset($_GET['sex']))
		{
			$sex = $_GET['sex'];
			$query = "SELECT * FROM categories WHERE sex='$sex' ORDER BY id ";
		}
		
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
