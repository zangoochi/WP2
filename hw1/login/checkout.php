<div class="aside">
  <div class="checkout">
    <?php
    	$items = $_SESSION['items'];
        echo '<p style="font-size: small">';
        $total = 0;
       	foreach($items as $item){
       		$total += ($item[1]*$item[2]);
       		echo "<div>Item: " . $item[0] . "</div>";
          echo "<pre>";
              echo "<div class='att'>Quantity: " . $item[1] . "</div>";
              echo "<div class='att'>Price: " . $item[2] . "</div>";
              echo "<div class='att'>Total: ". ($item[1]*$item[2]) ."</div>";
              echo "</pre>";
       	}
        
        echo "</div>";
      echo '</p>';
  echo "<div class='total'><hr>Final: " . $total . "</div>";    
?>
</div>