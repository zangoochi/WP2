<?php session_start();
$realm="The Tiny Computer Shop";

if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}

$title="Member Area"; 
$css=array("basic.css", "form.css");
require("rfront.php");
?>
<h2>Welcome To: <?php echo $realm; ?></h2>
<p>Here we provide you with a few items to get you entered into the <b>world of technology</b>.</p>
<?php require("rback.php"); ?>
