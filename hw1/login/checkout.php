<div class="aside">
<?php
	$total = $_SESSION["total"];
	$items = $_SESSION['items'];
    $mem = $_SESSION["memory"];
    echo '<p style="font-size: small">';
    $total = 0;
   	foreach($items as $item){
   		$total += ($item[1]*$item[2]);
   		echo "<div style='font-size:medium'>Item: " . $item[0] . "</div><br>";
      echo "<div class='att'>Quantity: " . $item[1] . "</div>";
      echo "<br><div class='att'>Price: " . $item[2] . "</div>";
      echo "<br><div class='att'>Total: ". ($item[1]*$item[2]) ."</div><br>";
   	}
   	echo "<hr>Final: " . $total;
   	echo '</p>';    
?>
</div>