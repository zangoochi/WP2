<?php
	$items = $_SESSION['items'];
    echo '<p style="font-size: small">';
    $total = 0;
   	foreach($items as $item){

   		echo '<div class="item">';
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
   	}
        echo "<div class='total'><hr>Final: " . $total . "</div>"; 
        echo '<p><a href="">Another Order</a></p>';
 
        echo "</div>";
    echo '</p>';  
?>