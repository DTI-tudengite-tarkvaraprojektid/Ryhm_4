<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<?php 
		$categories = get_cat();
		
		foreach($categories as $item){
	?> 
		<div><a href="?view=cat&page=0&id=<?php echo $item['cat_id'];?>"><?php echo $item['name'];?></a></div>
	<?php } ?>
    <main>
		<?php include('views/pages/'.$view.'.php'); ?>
    </main>
</body>
</html>

