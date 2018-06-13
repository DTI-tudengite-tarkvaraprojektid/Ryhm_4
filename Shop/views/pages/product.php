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


 
 
 <a><?php echo $product['name']?></a><br><br>
 <a>Vali kiinga suurus</a>
 <select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" selected>Audi</option>
</select> <br><br>
 <a>Konsta valik:</a><br>
  <select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="vw">VW</option>
  <option value="audi" selected>Audi</option>
</select> <br>
 <a href="#">Vaata kontsa infot siit</a><br><br>
 <a>Vasaku jala mõõt 1 (mm):</a>
<input type="text"><br>
<a>Vasaku jala mõõt 2 (mm):</a>
<input type="text"><br>
<a>Vasaku jala mõõt 3 (mm):</a>
<input type="text"><br>
<a>Parema jala mõõt 1 (mm):</a>
<input type="text"><br>
<a>Parema jala mõõt 2 (mm):</a>
<input type="text"><br>
<a>Parema jala mõõt 3 (mm):</a>
<input type="text"><br>
 <a href="#">Mõõtmisõpetust vaata siitt</a><br><br>
 
 <a>Hind: </a><a><?php echo $product['price']?></a><br>
 <a>Kogus:</a><input type="text" value="1"><br>
 
 <a>Nimi:</a>
<input type="text"><br>
 <a>Mail:</a>
<input type="text"><br>
 <a>Telefoni number:</a>
<input type="text"><br>
 
 <button type="button">Telli</button> <br>
  <a>Kui tellid kinga, siis me võttame teiega ühendust esimesel võimalusel</a><br>
 