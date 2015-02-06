<?php session_start();
if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}
require_once('regfns.php');

if (!empty($_POST['submit']) && $_POST['submit']=="Change Now")
{  pass_check($_POST['pass']);
   pass_match($_POST['pass'],$_POST['pass2']);
   nomatch($_POST['oldpass'],$_POST['pass']);
   if ( empty($errmsg) &&
        change_passwd($_SESSION['user'],$_POST['oldpass'],
	     $_POST['pass'],$PASSWORD_FILE,$errmsg) )
   {  $msg="Password change complete.";  }
     else
   {  $msg="Password change failed. " . $errmsg;  }
}

$title="Password Change"; 
$css=array("basic.css","form.css");
require("rfront.php");
?>
<h2>Password Change for <?php echo $_SESSION['user']; ?></h2>
<p class="error"><?php echo $msg; ?></p>
<?php require("rback.php"); ?>
