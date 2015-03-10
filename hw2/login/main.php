<?php session_start();
$realm="Faculty Commity";

$title="Faculty Commity"; 
$css=array("basic.css");
require("rfront.php");
?>
<h2>Welcome <?php 
echo "To: ";
echo $realm; ?></h2>
<p>Here we provide you with a form to record details of faculty members and their interest in serving on committees</b>.</p>
<?php require("rback.php"); ?>
