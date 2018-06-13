<?php 
		$categories = get_cat_sex();
		
		if(isset($_GET['sex']))
		{
			$categories = get_cat();
		}
		if(isset($_GET['sex']))
		{
			foreach($categories as $item){
?> 	<!--toodete lingid-->
			<div><a href="?&view=cat&page=0&id=<?php echo $item['cat_id'];?>" style="color: red;"><?php echo $item['name'];?></a></div>
		<?php }}
		if(!isset($_GET['sex']))
		{
			foreach($categories as $item){
		?> <!--kategooriate lingid mees/naine/laps-->
			<div><a href="?page=0&sex=<?php echo $item['name'];?>" style="color: green;"><?php echo $item['name'];?></a></div>
		<?php }}?>


