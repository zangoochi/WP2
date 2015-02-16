<?php session_start();

$title = "Little Computer Shop";
$css=array("basic.css", "form.css");
require_once("loginfns.php");

//Page Load
if( empty($_POST['submit']) )
{
  require_once("rfront.php");
  require_once("forgot_form.php");
}
//Adding Items
elseif ($_POST['submit'] == "Reset" )
{ 
  require_once("rfront.php");
  require_once("forgot_form.php");
  $email = get_email($_POST['uid'], $PASSWORD_FILE);
  $email = str_replace('/', '', $email);
  if(!empty($email)){
  	$pass = gen_pass();
  	if(!temp_change_passwd($_POST['uid'],$pass,$PASSWORD_FILE))
  		echo "Password could not be changed. Please try again.";

	header( "refresh:5; url=login.php" );

  	$from = "zmontgom@webdev.cs.kent.edu"; 
	$to = $email;
	$subject = "Password Change";
	
	$headers = "From:". $from ."\r\n";
	$headers .= "Reply-To: ".$from." \r\n";
	$headers .= "Return-Path: ".$from."\r\n";
	$headers .= "X-Mailer: PHP \r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$msg = "
	<html>
		<head>
  			<title><h1>Password Change</h1></title>
		</head>
	<body>
  		<p>Password Change!</p>
  		<p>
  		Your new password is: <b>" . $pass . "</b>
  		</p><p>Please copy this new password to login. Once logged in, 
			go to <a href='https://webdev.cs.kent.edu/zmontgom/wp2/hw1/login.php?target=/zmontgom/wp2/hw1/myprofile.php'>MyProfile</a> to change your password.
		</p>
		<p>
		Please contact zmontgom@webdev.cs.kent.edu for any further questions. Thank you.
		</p>

  		
	</body>
	</html>
	";

	if(!mail($to,$subject,$msg,$headers) == 1) 
	{
 	  $msg =  "Error sending email!";
 	  echo "<b>".$msg."</b>";
	}

  	echo "<br>We have emailed <b>" . $email . "</b> with a new password. Please follow the directions in the
  			email and try logging in on the proceeding page. Please wait while redirected";

  }
}

require_once("rback.php");
?>


