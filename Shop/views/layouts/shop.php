<!DOCTYPE html>
<html>
<head>
</head>

<body>
	<?php 
		$categories = get_cat();
		
		foreach($categories as $item){
	?> 
		<div><a href="index.php?view=cat&id=<?php echo $item['cat_id'];?>"><?php echo $item['name'];?></a></div>
	<?php } ?>
    <main>
		<?php include('views/pages/'.$view.'.php'); ?>
    </main>
</body>
</html>

