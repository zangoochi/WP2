<h3>Your Order:</h3>
<form method="post" action="computershop.php">

<div class="items">
	<div class="item">
		<div class="name">
			<select name="item">
			<?php 
				foreach($items as $key=>$value)
				{
					if($value != -1){
						$v = $key . ":" . $value;
						echo '<option value="'.$v.'">'.$key."     :      ".$value.'</option>';
					}else{
						if($key != "endgroup"){
							echo '<optgroup label="'.$key.'">';
						}else{
							echo '</optgroup>';
						}
					}
				}
			?>
	  		
			</select>
		</div>

		<div class="quantity">
			<label for="quantity">Quantity:</label>
	   	 	<input type="number" name="quantity" id="quantity" min="0" step="1" max="1000" required="" value="1"/>
		</div>

	</div>
</div>
<div class="submit">
	<input type="submit" name="submit" value=" Update " /> 
	<input type="submit" name="submit" value=" Done " />
</div>
</form>

