<?php  session_start();
$realm="Faculty Committee Survey";

if ( !empty($_POST['submit']) && $_POST['submit']=="Next"
     && !empty($_SESSION['target']) )
{
  require_once("rfront.php");
  echo "HELLO";
}
else // new login
{  require_once("sessionfns.php");
   new_session(); 
   if ( !empty($_REQUEST['target']) )
   {  $_SESSION['target']=$_REQUEST['target']; }
   else
   {  $_SESSION['target']='computershop.php'; }
   $title="Login"; 
   $css=array("basic.css", "form.css");
   require_once("rfront.php");
   if ( !empty($_REQUEST['target']) )
   {  $_SESSION['target']=$_REQUEST['target']; }
   else
   {  $_SESSION['target']='survey.php'; }
}
require_once("rback.php"); 
?>
