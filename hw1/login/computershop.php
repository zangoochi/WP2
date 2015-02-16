<?php session_start();
/* How To Store Items as Session Variable

  $item1 = array("name1", 2, 199.99);
  $item2 = array("name2", 3, 79.99);
  $arr = array($item1, $item2);
  $_SESSION['items']= $arr;

  */

$title = "Little Computer Shop";
$css=array("basic.css", "form.css", "orderform.css");

function processOrder()
{ 
  $obj = explode(":",$_POST["item"]);
  $item = $obj[0];
  $price = $obj[1];


  $quantity = $_POST["quantity"];
  $it = array($item, $quantity, $price);

  $arr = $_SESSION['items'];
  foreach($arr as $key=>$a){
    if($a[0] == $item){
      $_SESSION['items'][$key][1] += $quantity;
      return;
    }
  }
  array_push($arr, $it);

  $_SESSION['items'] = $arr;  
}

//Page Load
if( empty($_POST['submit']) )
{
  require_once("rfront.php");
  require_once("orderformfn.php");
  require_once("items.php");
  $_SESSION['total']=0;
  $_SESSION['items']=array();
  require("orderform.php");
  require_once("cback.php");
}
//Adding Items
elseif ($_POST['submit'] == " Update " )
{ 
  require_once("rfront.php");
  require_once("items.php");
  processOrder();
  require("orderform.php");
  require_once("cback.php");
}
//GOTO invoice
elseif( $_POST['submit'] == " Done " )
{ 
  require_once("sessionfns.php");
  require_once("rfront.php");
  require("invoice.php");
  require_once("rback.php");
} 
//Deleting items from invoice
elseif($_POST['submit'] == "Update"){
  require_once("sessionfns.php");
  require_once("rfront.php");
  $del = $_POST['deleted'];
  foreach($del as $d){
    foreach($_SESSION['items'] as $key=>$a){
      if($a[0] == $d){
        unset($_SESSION['items'][$key]);
      }
    }
  }
  require("invoice.php");
  require_once("rback.php");
}
//Finalize invoice
elseif( $_POST['submit'] == "Finalize" )
{ 
  require_once("sessionfns.php");
  require_once("rfront.php");
  echo '<p>Your order is complete.
        Thanks for your business.</p>';

        require_once("final.php");
        session_end();
  require_once("cback.php");
} 
?>


