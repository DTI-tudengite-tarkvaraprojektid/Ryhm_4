<?php 
	$id = $_GET['id'];
	$product = get_product($id);
	$pics = array_filter(explode(";", $product['image']));
	$pics_count = count($pics);
	$heel = array_filter(explode(",", $product['heel']));
	$heel_count = count($heel);
?>
<form action="https://formspree.io/robert.shev.spam@gmail.com" class="form-horizontal" method="POST">
	<script>
		function getValuesKonst() {
			document.getElementById("konst").value = document.getElementById("konstVal").value;
		}
		
		function getValuesSize(){
			document.getElementById("size").value = document.getElementById("sizeVal").value;
		}
	</script>

	<div class="container-fluid col-lg-6 col-md-8 col-sm-12 about-1">
		<div class="col-12" id="tantsud">
			<h2 class="text-center" style="font-size:3.25rem;"><?php echo $product['name']?></h2>
		</div>
	

		<div class="row">
			<div class="col-md-7">
				<div>
					<img id='i1' src="images/<?php echo $pics[0];?>"class="img-fluid large" /><br />
				</div>
				<?php 
				for ($i=0;$i<$pics_count;$i++)
				{ ?>
					<a href="#" onclick="document.getElementById('i1').src='images/<?php echo $pics[$i];?>'"><img src="images/<?php echo $pics[$i];?>" class = "img-fluid small" height="80"/></a>
				<?php } ?>
			</div>
			<div class="col-md-5">
				<p style="margin-bottom:1px;">Teie andmed:</p>
				<input class="form-control" type="text" placeholder="Nimi" name="name" required>
				<input class="form-control" type="email" placeholder="Email" name="_replyto" required>
				<input class="form-control" type="text" placeholder="Telefoninumber" name="Tel" required><br>
				<input type="hidden" name="toode" value="<?php $product['name']?>" />
				<p style="margin-bottom:1px;">Vali kinga suurus</p>
				<select class="form-control" id="sizeVal" onclick="getValuesSize()">
					<option value="34">34</option>
					<option value="34,5">34,5</option>
					<option value="35">35</option>
					<option value="35,5" >35,5</option>
					<option value="36">36</option>
					<option value="36,5">36,5</option>
					<option value="37">37</option>
					<option value="37,5" >37,5</option>
					<option value="38">38</option>
					<option value="38,5">38,5</option>
					<option value="39">39</option>
					<option value="39,5" >39,5</option>
					<option value="40">40</option>
					<option value="40,5">40,5</option>
					<option value="41">41</option>
					<option value="41,5" >41,5</option>
					<option value="42" >42</option>
					<option value="42,5">42,5</option>
					<option value="43">43</option>
					<option value="43,5">43,5</option>
					<option value="44" >44</option>
					<option value="44,5">44,5</option>
					<option value="45">45</option>
					<option value="45,5">45,5</option>
					<option value="46">46</option>
				</select><br>
				<input id="size" type="hidden" name="suurus" value="" />
				<p style="margin-bottom:1px;">Vali konts:</p>
				<select class="form-control" id="konstVal" onclick="getValuesKonst()">
					<?php for($i=0;$i<$heel_count;$i++){?>
					<option value=<?php echo $heel[$i];?>><?php echo $heel[$i];?></option>	
					<?php }?>
				</select> 
				<input id="konst" type="hidden" name="Konst" value="" />
				<a class="about-1" href="#">Vaata kontsa infot siit</a><br><br>
				<a data-toggle="collapse"  onclick="collapsePanels()" href="#mittestandard" aria-expanded="false" aria-controls="mittestandard">Kui teil on mittestandartne jalg, siis vajutage siia</a>
				<div style="padding-top:0px;"class="collapse" id="mittestandard">
					<input class="form-control" type="text" placeholder="Vasaku jala mõõt 1 (mm):" name="Vasaku jala mõõt 1 (mm)"/>
					<input class="form-control" type="text" placeholder="Vasaku jala mõõt 2 (mm):" name="Vasaku jala mõõt 2 (mm)"/>
					<input class="form-control" type="text" placeholder="Vasaku jala mõõt 3 (mm):" name="Vasaku jala mõõt 3 (mm)"/>
					<input class="form-control" type="text" placeholder="Parema jala mõõt 1 (mm):" name="Parema jala mõõt 1 (mm)"/>
					<input class="form-control" type="text" placeholder="Parema jala mõõt 2 (mm):" name="Parema jala mõõt 2 (mm)"/>
					<input class="form-control" type="text" placeholder="Parema jala mõõt 3 (mm):" name="Parema jala mõõt 3 (mm)"/>
					<a href="#">Mõõtmisõpetust vaata siit</a>
				</div>
				<div >
					<div class="row" >
						<div class="form-inline">
							<div class="form-group col-4">
        						<label class="control-label "><a>Kogus:</a></label>
        						<input style="padding:4px;" type="text" class="form-control col-12 " placeholder="Kogus" name="kogus" value="1">
							</div>
							<div class="form-group col-4">
        						<label class="control-label"><a>Hind:</a></label>
        						<h4 style="color:red"><?php echo $product['price']?></h4><input type="hidden" name="hind" value="<?php echo $product['price']?>" />
							</div>
							<div class="form-group col-4" style ="margin-bottom:-20px;">
							<button class="btn btn-primary " type="submit" value="Telli"/>Telli</button>
							</div>
							
							</div>
						
							
						
						
							<input type="hidden" name="_next" value="http://www.tlu.ee/~shev/eesrakenduse/sayings-offline-app/" />
							<input type="hidden" name="_subject" value="Tellimine" />
							<input type="hidden" name="_format" value="plain" />
							<input type="text" name="_gotcha" style="display:none" /><br>
							
						
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


 