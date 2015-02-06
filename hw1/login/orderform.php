<!--- How To Store Items as Session Variable

  $item1 = array("name1", 2, 199.99);
  $item2 = array("name2", 3, 79.99);
  $arr = array($item1, $item2);
  $_SESSION['items']= $arr;

-->


<h3>Your Computer Order:</h3>
<form method="post" action="">

<div class="items">
	<b>Memory</b>:

	<?php 
		require_once("orderformfn.php"); 
		item("Kingston HyperX Fury Red 8GB Desktop Memory Module Kit", 109.99);
		item("Corsair Vengeance 8GB DDR3", 179.00);
		item("ADATA XPG V1.0 16GB Desktop Memory - DDR3, (2 X 8GB)", 149.99);
	?>
	
	<b>Motherboards</b>:
	
	<?php 
		require_once("orderformfn.php"); 
		item("MSI Z97", 189.99);
		item("ASUS Z97-DELUXE ATX", 399.99);
		item("MSI Z97-GAMING 5", 159.99);
	?>

	<b>Computer Cases:</b>
	<?php 
		require_once("orderformfn.php"); 
		item("CC1", 78.26);
		item("CC2", 100.00);
		item("CC3", 299.99);
	?>


	<b>Hard Drives:</b>
	<?php 
		require_once("orderformfn.php"); 
		item("HDD", 78.26);
		item("HHD", 100.00);
		item("SSD", 299.99);
	?>

</div>
Subtotal: <?php echo $total ?>

<hr/>

<div class="submit">
	<input type="submit" name="submit" value=" Update " /> 
	<input type="submit" name="submit" value=" Done " /></p>
</div>
</form>

