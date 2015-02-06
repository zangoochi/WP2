<!--- How To Store Items as Session Variable

  $item1 = array("name1", 2, 199.99);
  $item2 = array("name2", 3, 79.99);
  $arr = array($item1, $item2);
  $_SESSION['items']= $arr;

-->
<?php $price = 129.99;?>
<h3>Your Order:</h3>
<form method="post" action="">

<div class="item">
	<div class="name">
		<select name="item">
  			<option value="Kingston HyperX Fury Red 8GB Desktop Memory Module Kit">Kingston HyperX Fury Red 8GB Desktop Memory Module Kit</option>
  			<option value="Corsair Vengeance 8GB DDR3">Corsair Vengeance 8GB DDR3</option>
  			<option value="ADATA XPG V1.0 16GB Desktop Memory - DDR3, (2 X 8GB)">ADATA XPG V1.0 16GB Desktop Memory - DDR3, (2 X 8GB)</option>
  			<option value="MSI Z97">MSI Z97</option>
  			<option value="ASUS Z97-DELUXE ATX">ASUS Z97-DELUXE ATX</option>
  			<option value="MSI Z97-GAMING 5">MSI Z97-GAMING 5</option>
		</select>
	</div>

	<div class="price">
		<input id="price" name="price" type="text" size="8" value="<?php echo $price;?>" hidden=""/><?php echo $price;?>
	</div>

	<div class="quantity">
		<label for="quantity">Quantity:</label>
   	 	<input type="number" name="quantity" id="quantity" min="0" step="1" max="1000" required="" value="1"/>
	</div>

</div>

<?php 
if($total != 0){
	echo "Subtotal: $total"; 
}
?>

<hr/>

<div class="submit">
	<input type="submit" name="submit" value=" Update " /> 
	<input type="submit" name="submit" value=" Done " /></p>
</div>
</form>

