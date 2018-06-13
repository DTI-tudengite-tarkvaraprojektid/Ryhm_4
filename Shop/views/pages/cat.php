<?php
$cat = $_GET['id'];
$products = get_cat_products($cat)[0];

foreach($products as $item){?>


<table align="center" cellpadding="1" cellspacing="1" class="product" border="1">
	<tr>
		<td valign="top">
			<div><a href="?view=product&id=<?php echo $item['id']?>"><img src="images/<?php echo $item['image']?>" alt="" style="width:100px;/></a></div>
			<div class="description">
				<div class="product-name"><a href="#"><?php echo $item['name']?></a></div>
				<div class="product-price">Price: <?php echo $item['price']?>$</div>
			</div>
		</td>
	</tr>
</table>


<?php } 
$count_post =  get_cat_products($cat)[1];

echo "Page: ";
for($i = 0, $ii = 1; $i < $count_post; $i=$i+12, $ii++)
{
	if($i == ($_GET['page']))
	{
		echo "<a >{$ii} </a>";
	}
	else{
		echo "<a href='?view=cat&page={$i}&id={$cat}'>{$ii} </a>";
	}
}
?>