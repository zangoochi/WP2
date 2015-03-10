<?php  session_start();
require("connection.php");
$realm="Faculty Committee Survey";

if (empty($_POST['submit']))
{
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   require_once("rfront.php");
   require_once("p1.php");
}
else if($_POST['submit'] == "Next")
{  
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   $_SESSION["committee"] = $_POST["college"];

   require_once("rfront.php");
   echo $_SESSION["committee"];
   require_once("p2.php");
}
else if($_POST['submit'] == " Next ")
{  
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   $first_name=$db_obj->escape_string($_POST["first_name"]);
   $last_name=$db_obj->escape_string($_POST["last_name"]);
   $middle_init = $db_obj->escape_string($_POST["middle_init"]);
   $kemail = $db_obj->escape_string($_POST["kemail"]);
   $other_email = $db_obj->escape_string($_POST["other_email"]);
   $phone = $db_obj->escape_string($_POST["phone"]);
   $faculty_member = array("first_name"=>$first_name, "last_name"=>$last_name, "middle_init"=>$middle_init, "kemail"=>$kemail, "other_email"=>$other_email, "phone"=>$phone);
   $_SESSION["faculty_member"] = $faculty_member;

   require_once("rfront.php");
   $mem = $_SESSION["faculty_member"];
   echo $mem["first_name"] . " " . $mem["middle_init"]  . " " . $mem["last_name"] . "<br/>";
   echo $mem["kemail"];
   require_once("p3.php");
}
require_once("rback.php"); 
?>
