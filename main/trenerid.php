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
	
	function get_tren()
	{
		$query = "SELECT * FROM trainers ORDER BY id";
		$result = mysqli_query(db_connect(),$query);
		$result = db_result_to_array($result);
		return $result;
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
	
	$trainers = get_tren(); 
	$i = 1;
	foreach($trainers as $item)
	{?>
		<div class="col-lg-3 col-md-6">
			<div class="card">
				<div class="card-body">
					<img class="card-img-top treener-pilt" src="assets/img/treenerid/small/<?php echo $item['photo']?>">
					<a data-toggle="collapse" class="btn btn-block" onclick="collapsePanels()" href="#treener<?php echo $i;?>" aria-expanded="false" aria-controls="treener<?php echo $i;?>">
					<h2 class="card-title text-center"><?php echo $item['name']?></h2>
					<div class="collapse" id="treener<?php echo $i; $i++?>">
					<div class="card card-body" id="tabp">
					<p class="card-text"><?php echo $item['info']?></p>
					</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	
