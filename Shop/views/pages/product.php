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


 
 <form action="https://formspree.io/robert.shev.spam@gmail.com" method="POST">
	<a><?php echo $product['name']?></a><br><br>
	<input type="hidden" name="toode" value="<?php echo $product['name']?>" />
	<a>Vali kiinga suurus</a>
	<select id="sizeVal" onclick="getValuesSize()">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="vw">VW</option>
		<option value="audi" selected>Audi</option>
	</select> <br><br>
	<input id="size" type="hidden" name="suurus" value="" />
	<a>Konsta valik:</a><br>
	<select id="konstVal" onclick="getValuesKonst()">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="vw">VW</option>
		<option value="audi" selected>Audi</option>
	</select> <br>
	<input id="konst" type="hidden" name="Konst" value="" />
	<a href="#">Vaata kontsa infot siit</a><br><br>
	<a>Vasaku jala mõõt 1 (mm):</a>
	<input type="text" name="Vasaku jala mõõt 1 (mm)"><br>
	<a>Vasaku jala mõõt 2 (mm):</a>
	<input type="text" name="Vasaku jala mõõt 2 (mm)"><br>
	<a>Vasaku jala mõõt 3 (mm):</a>
	<input type="text" name="Vasaku jala mõõt 3 (mm)"><br>
	<a>Parema jala mõõt 1 (mm):</a>
	<input type="text" name="Parema jala mõõt 1 (mm)"><br>
	<a>Parema jala mõõt 2 (mm):</a>
	<input type="text" name="Parema jala mõõt 2 (mm)"><br>
	<a>Parema jala mõõt 3 (mm):</a>
	<input type="text" name="Parema jala mõõt 3 (mm)"><br>
	<a href="#">Mõõtmisõpetust vaata siitt</a><br><br>
	
	<a>Hind: </a><a><?php echo $product['price']?></a><br>
	<input type="hidden" name="hind" value="<?php echo $product['price']?>" />
	<a>Kogus:</a><input type="text" value="1" name="kogus"><br>
	
	<a>Nimi:</a>
	<input type="text" name="name"/><br>
	<a>Mail:</a>
	<input type="email" name="_replyto" placeholder="Your email" /> ><br>
	<a>Telefoni number:</a>
	<input type="text" name="Tel"/><br>
	
    <input type="hidden" name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" />
    <input type="hidden" name="_subject" value="Tellimine" />
    <input type="hidden" name="_format" value="plain" />
    <input type="text" name="_gotcha" style="display:none" />
	<input type="submit" value="Send">
	<script>
		function getValuesKonst() {
    		document.getElementById("konst").value = document.getElementById("konstVal").value;
		}
		function getValuesSize(){
			document.getElementById("size").value = document.getElementById("sizeVal").value;
		}
	</script>
</form>