<?php session_start();
if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}

$title = "Little Computer Shop";
$css=array("basic.css", "form.css", "orderform.css");

function processOrder()
{ 
  $price =  $_POST["price"];
  echo '<script type="text/javascript">alert("' . is_array($price) . '"); </script>';
  if ( $cr ) {  $_SESSION['crust'] = $cr; }
  $top = $_SESSION['toppings'];
  $it = $_POST["top"];
  if ( $it && ! strstr($top,$it) ) 
  { if ( $top ) { $_SESSION['toppings'] = "$top, $it";  }
    else { $_SESSION['toppings'] = $it;  }
  }
}

if( empty($_POST['submit']) )
{
  require_once("rfront.php");
  require_once("orderformfn.php");
  $_SESSION['total']=0;
  //$_SESSION['items']=array();
  $item1 = array("name1", 2, 199.99);
  $item2 = array("name2", 3, 79.99);
  $arr = array($item1, $item2);
  $_SESSION['items']= $arr;
  require("orderform.php");
}
elseif ($_POST['submit'] == " Update " )  // continuing
{ 
  require_once("rfront.php");
  processOrder();
  require("orderform.php");
}
elseif( $_POST['submit'] == " Done " )
{ 
  require_once("sessionfns.php");
  session_end();
  require_once("rfront.php");
  echo '<p>Your order is complete.
        Thanks for your business.</p>';
  echo '<p><a href="">Another Order</a></p>';
} 

require_once("cback.php");
?>


