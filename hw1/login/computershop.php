<?php session_start();

/* How To Store Items as Session Variable

  $item1 = array("name1", 2, 199.99);
  $item2 = array("name2", 3, 79.99);
  $arr = array($item1, $item2);
  $_SESSION['items']= $arr;

  */

if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}

$title = "Little Computer Shop";
$css=array("basic.css", "form.css", "orderform.css");

function processOrder()
{ 
  $item = $_POST["item"];
  $price =  $_POST["price"];
  $quantity = $_POST["quantity"];
  $it = array($item, $quantity, $price);

  $arr = $_SESSION['items'];
  array_push($arr, $it);

  $_SESSION['items'] = $arr;  
}

if( empty($_POST['submit']) )
{
  require_once("rfront.php");
  require_once("orderformfn.php");
  $_SESSION['total']=0;
  $_SESSION['items']=array();
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


