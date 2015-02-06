<?php session_start();
if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}
$title="User Profile"; 
$css=array("basic.css", "form.css");
require("rfront.php");
?>
<h2>Profile for <?php echo $_SESSION['user']; ?></h2>

<h3>Change Password</h3>
<form method="post" action="changepass.php">
<div class="entry">
<label for="oldpass">Old Password:</label><span class="field"><input type="password"
name="oldpass" id="oldpass" required="" size="25" /></span>
</div>
<div class="entry">
<label for="pass">New Password:</label><span class="field"><input type="password" name="pass" id="pass" required="" size="25" /> (8 or more characters)</span>
</div>
<div class="entry">
<label for="pass2">New Password Again:</label><span class="field"><input type="password" name="pass2" id="pass2" required="" size="25" /></span>
</div>
<div class="entry">
<label></label>
<input type="submit" name="submit" value="Change Now" /></div>
</form>
<?php require("rback.php"); ?>
