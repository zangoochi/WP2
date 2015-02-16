<?php session_start();
      require_once("sessionfns.php");
      session_end();
      require_once("loginfns.php");
      logout_fn();

header( "refresh:2; url=login.php" );
      // http();  may switch back to HTTP
$title="Logout"; 
$css=array("basic.css", "form.css");
require("rfront.php");
?>
<h2>Logout Complete</h2>
<p>Logout is successful.</p>
<p>Please wait to be redirected</p>
<?php require("rback.php"); ?>
