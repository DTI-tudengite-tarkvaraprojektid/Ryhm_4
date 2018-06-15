<div class="container-fluid col-lg-10 padding">
    <div class="row padding">
		<?php
		$cat = $_GET['id'];
		$products = get_cat_products($cat)[0]; 

		foreach($products as $item)
		{?>
			<div class="col-lg-2">
				<div class="card">
					<div class="card-body">
						<table align="center" cellpadding="1" cellspacing="1" class="product" border="0">
							<tr>
								<td valign="top">
									<div>
										<a href="?view=product&id=<?php echo $item['id']?>"><img src="images/<?php echo $item['image_chosen']?>" alt="" style="width:100px"/></a>
									</div>
									<div class="description">
										<div class="product-name">
											<a href="#"><?php echo $item['name']?></a>
										</div>
										<div class="product-price">
											<a>Price: <?php echo $item['price']?>€</a>
										</div>
									</div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		<?php } 
		$count_post =  get_cat_products($cat)[1];
		?>
	</div>
</div>
<div class="container-fluid col-lg-10 padding">
	<div class="row padding">
		<div class="col-12" id="tantsud">
			<h4 class="text-center">
				<a>Page:  </a>
				<?php
				for($i = 0, $ii = 1; $i < $count_post; $i=$i+12, $ii++)
				{
					if(isset($_GET['page']))
					{
						if($i == ($_GET['page']))
						{
							echo "<a >{$ii} </a>";
						}
						else
						{
							echo "<a href='?view=cat&page={$i}&id={$cat}'>{$ii} </a>";
						}
					}
					else
					{
						if($i == 0)
						{
							echo "<a >{$ii} </a>";
						}
						else
						{
							echo "<a href='?view=cat&page={$i}&id={$cat}'>{$ii} </a>";
						}
					}
				}
				?>
			</h4>
		</div>
	</div>
</div>