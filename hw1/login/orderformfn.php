<?php
function item($name, $price) 
{  
	echo'<div class="item">
		<div class="name">' . $name . '</div>
		<div class="price">
			<input id="price" name="price[]" type="text" size="8" disabled="" value="' . $price . '" hidden=""/>' .$price .'
		</div>
		<div class="quantity">
			<label for="quantity">Quantity:</label>
            	<input type="number" name="quantity[]" id="quantity" min="0" step="1" max="1000" required="" value="1">
   	 	</div>
	</div>';
}
?>