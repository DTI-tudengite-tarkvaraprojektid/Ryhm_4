<?php
$cat = $_GET['id'];
$products = get_cat_products($cat);

foreach($products as $item){?>


<table align="center" cellpadding="0" cellspacing="0" class="product" border="0">
	<tr>
		<td valign="top">
			<div><a href="index.php?view=product&id=<?php echo $item['id']?>"><img src="images/<?php echo $item['image']?>" alt="" style="width:100px;/></a></div>
			<div class="description">
				<div class="product-name"><a href="#"><?php echo $item['name']?></a></div>
				<div class="product-price">Price: <?php echo $item['price']?>$</div>
			</div>
		</td>
	</tr>
</table>


<?php } ?>


