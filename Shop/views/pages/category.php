<div class="container-fluid col-lg-10 padding">
    <div class="row padding">
	<div class="col-12 tantsimine" id="tantsud">
		      <h2 class="text-center">Shop</h2>
	      </div>     
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
			<div class="col-lg-2 tants1">
				<div class="shop-btn">
					<div class="btn btn-block btn-primary1">
						<a href="?&view=cat&page=0&id=<?php echo $item['cat_id'];?>" class="btn btn-block" id="shop-menu"><?php echo $item['name'];?></a>
					</div>
				</div>
			</div>
		<?php }}
		if(!isset($_GET['sex']))
		{
			foreach($categories as $item){
		?> <!--kategooriate lingid mees/naine/laps-->
			<div class="col-lg-4 tants1">
				<div class="shop-btn">
					<div class="btn btn-block btn-primary1">
						<a href="?page=0&sex=<?php echo $item['name'];?>" class="btn btn-block" id="shop-menu"><?php echo $item['name'];?></a>
					</div>
				</div>
			</div>
		<?php }}?>
	</div>
</div>