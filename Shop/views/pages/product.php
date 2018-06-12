<?php 
	$id = $_GET['id'];
	$product = get_product($id);
?>



<table align="center" cellpadding="1" cellspacing="1" class="product" border="1">
	<tr>
		<td valign="top">
			<div><a href="#"><img src="images/<?php echo $product['image']?>" alt="" style="width:100px;/></a></div>
			<div class="description">
				<div class="product-name"><a href="#"><?php echo $product['name']?></a></div>
				<div class="product-price">Price: <?php echo $product['price']?>$</div>
			</div>
		</td>
		<td valign="top">
			<div><?php echo $product['description']?></div>
		</td>
	</tr>
</table>
