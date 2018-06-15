<?php 
	$id = $_GET['id'];
	$product = get_product($id);
	$pics = array_filter(explode(";", $product['image']));
	$pics_count = count($pics);
?>
<div class="container">
	<div class="display-4 text-center">
		<div class="">
			<a><?php echo $product['name']?></a>
		</div>
	</div>
	<div class="row">
        <div class="col-md-6">
			<div>
				<img id='i1' src="images/<?php echo $pics[0];?>" class="img-fluid large"  /><br />
			</div>
			<?php 
			for ($i=0;$i<$pics_count;$i++)
			{ ?>
				<div>
					<a href="#" onclick="document.getElementById('i1').src='images/<?php echo $pics[$i];?>'"><img src="images/<?php echo $pics[$i];?>" class = "image-fluid small" /></a>
				</div>
			<?php } ?>
			<div class="description"><br>
				<div>
					<a>Price:</a><a style="color:red"> <?php echo $product['price']?>€</a>
				</div>
			</div>
		</div>
        <div class="col-md-3">
		<form action="https://formspree.io/robert.shev.spam@gmail.com"class="form-horizontal" method="POST">
	
	<input type="hidden" name="toode" value="<?php $product['name']?>" />
	<a>Vali kinga suurus</a>
	<select class="form-control" id="sizeVal" onclick="getValuesSize()">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="vw">VW</option>
		<option value="audi" selected>Audi</option>
	</select><br>
	<input id="size" type="hidden" name="suurus" value="" />
	<a>Vali konts:</a><br>
	<select class="form-control" id="konstVal" onclick="getValuesKonst()">
		<option value="volvo">Volvo</option>
		<option value="saab">Saab</option>
		<option value="vw">VW</option>
		<option value="audi" selected>Audi</option>
	</select> 
	<input id="konst" type="hidden" name="Konst" value="" />
	<a href="#">Vaata kontsa infot siit</a><br><br>
	<a>Juhul kui teil on mittestandartne jalg, palume täita teie jala mõõdud</a><br>
	
	<input class="form-control" type="text" placeholder="Vasaku jala mõõt 1 (mm):" name="Vasaku jala mõõt 1 (mm)"/>
	<input class="form-control" type="text" placeholder="Vasaku jala mõõt 2 (mm):" name="Vasaku jala mõõt 2 (mm)"/>
	<input class="form-control" type="text" placeholder="Vasaku jala mõõt 3 (mm):" name="Vasaku jala mõõt 3 (mm)"/>
	<input class="form-control" type="text" placeholder="Parema jala mõõt 1 (mm):" name="Parema jala mõõt 1 (mm)"/>
	<input class="form-control" type="text" placeholder="Parema jala mõõt 2 (mm):" name="Parema jala mõõt 2 (mm)"/>
	<input class="form-control" type="text" placeholder="Parema jala mõõt 3 (mm):" name="Parema jala mõõt 3 (mm)"/>
	<a href="#">Mõõtmisõpetust vaata siitt</a><br><br>
	
	
	<script>
		function getValuesKonst() {
    		document.getElementById("konst").value = document.getElementById("konstVal").value;
		}
		function getValuesSize(){
			document.getElementById("size").value = document.getElementById("sizeVal").value;
		}
	</script>
</form>
			
		</div>
		<div class="col-md-6">
			<a>Teie andmed:</a><br>
			<input class="form-control" type="text" placeholder="Nimi" name="name"/>
			<input class="form-control" type="email" placeholder="Email" name="_replyto"/>
			<input class="form-control" type="text" placeholder="Telefoninumber" name="Tel"/><br>
		</div>
	<div class="col-md-3">
		<a>Kogus:</a><input class="form-control" type="text" value="1" placeholder="Kogus" name="kogus"/>
		<a>Hind: </a><a><?php echo $product['price']?></a><input type="hidden" name="hind" value="<?php echo $product['price']?>" /><br>
		
		<input type="hidden" name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" />
		<input type="hidden" name="_subject" value="Tellimine" />
		<input type="hidden" name="_format" value="plain" />
		<input type="text" name="_gotcha" style="display:none" />
		<input class="btn btn-primary1" type="submit" value="Telli"/></div>
    </div>
</div>



 