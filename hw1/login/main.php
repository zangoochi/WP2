<?php session_start();
$realm="The Tiny Computer Shop";

$title="Member Area"; 
$css=array("basic.css", "form.css");
require("rfront.php");
?>
<h2>Welcome <?php 

 if ($_SESSION['user'] != null)
 	echo $_SESSION['user'] . " ";
echo "To: ";
echo $realm; ?></h2>
<p>Here we provide you with a few items to get you entered into the <b>world of technology</b>.</p>
<?php require("rback.php"); ?>
