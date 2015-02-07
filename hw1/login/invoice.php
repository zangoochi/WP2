<h3>Your Invoice:</h3>
<form id="form" method="post" action="">

<div class="items">
<?php
	$items = $_SESSION['items'];
    echo '<p style="font-size: small">';
    $total = 0;
   	foreach($items as $item){

	echo "<div id='".$item[0]."' name='div'>";
   		echo '<div class="item">';
   			echo '<div class="name">';
   				echo '<input id="deletedItem" name="deleted[]" type="checkbox" value="'.$item[0].'">';
   			echo '</div>';

   			echo '<div class="name">';
   				$total += ($item[1]*$item[2]);
   				echo "Item: " . $item[0];
      			echo "<pre>";
          			echo "<div class='att'>Quantity: " . $item[1] . "</div>";
          			echo "<div class='att'>Price: " . $item[2] . "</div>";
          			echo "<div class='att'>Total: ". ($item[1]*$item[2]) ."</div>";
        		echo "</pre>";
        	echo '</div>';
        echo '</div>';
    echo "</div>";
   	}
        echo "</div>";
    echo '</p>';

	echo "<div class='total'><hr>Final: " . $total . "</div>";    
?>
<div class="submit">
	<input type="submit" name="submit" value="Update" /> 
	<input type="submit" name="submit" value="Finalize" />
</div>
</div>

</form>
