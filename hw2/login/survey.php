<?php  session_start();
require("connection.php");
$realm="Faculty Committee Survey";

function genActivationKey($length = 30)
{
    $pool = '0123456789';

    return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
}

function getActivationKey(){
   global $db_obj;
   $query="SELECT activationkey FROM faculty WHERE 1";
   $result_obj = $db_obj->query($query);
   
   $key = genActivationKey();

   if($db_obj->num_rows == 0){
   	return $key;
   }
   
   	while($faculty = mysql_fetch_array($result_obj)){
   		if($key == $faculty['activationkey']){
   			getActivationKey();
   		}
   	}
   return $key;
}
if (empty($_POST['submit']))
{
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   //If faculty is updating, set college variable
   if(!empty($_REQUEST['kemail']) && !empty($_REQUEST['act'])){
   		global $db_obj;
   		$kemail = $db_obj->escape_string($_REQUEST['kemail']);
   		$act = $db_obj->escape_string($_REQUEST['act']);
   		$query = "SELECT college FROM faculty WHERE kemail = '$kemail' AND activationkey = '$act'";
   		$college = $db_obj->query($query)->fetch_object()->college;
   }

	//------------------------------------------------------
   require_once("rfront.php");
   require_once("p1.php");
}
else if($_POST['submit'] == "Next")
{  
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   $_SESSION["college"] = $_POST["college"];

   if(!empty($_REQUEST['kemail']) && !empty($_REQUEST['act'])){
   		global $db_obj;
   		$kemail = $db_obj->escape_string($_REQUEST['kemail']);
   		$act = $db_obj->escape_string($_REQUEST['act']);
   		$query = "SELECT * FROM faculty WHERE kemail = '$kemail' AND activationkey = '$act'";
   		$faculty = $db_obj->query($query)->fetch_object();
   }

   require_once("rfront.php");
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
   $rank = $_POST["rank"];
   $status = $_POST["status"];
   $years = $db_obj->escape_string($_POST["years"]);
   $campus = $_POST["campus"];
   $college = $_SESSION["college"];
   $dept = $db_obj->escape_string($_POST["dept"]);
   $year_recorded = date("Y");
   $record_date = date("D M j Y");
   
   if(empty($_REQUEST['act']))
   		$key = getActivationKey();

   $faculty_member = array("first_name"=>$first_name, 
   						   "last_name"=>$last_name, 
   						   "middle_init"=>$middle_init, 
   						   "kemail"=>$kemail, 
   						   "email"=>$other_email, 
   						   "phone"=>$phone, 
   						   "rank"=>$rank,
   						   "status"=>$status,
   						   "years"=>$years,
   						   "campus"=>$campus,
   						   "college"=>$college,
   						   "dept"=>$dept,
   						   "year_recorded"=>$year_recorded,
   						   "record_date"=>$record_date,
   						   "activationkey"=>$key
   						   );
   $_SESSION["faculty_member"] = $faculty_member;

   require_once("rfront.php");
   require_once("p3.php");
}
else if($_POST['submit'] == "Submit")
{
   global $db_obj;
   $title="Survey"; 
   $css=array("basic.css", "form.css");
   $epcInt=$_POST["EPC_Int"];
   $epcMem=$_POST["EPC_Mem"];

   $fpdcInt=$_POST["FPDC_Int"];
   $fpdcMem=$_POST["FPDC_Mem"];

   $utcInt=$_POST["UTC_Int"];
   $utcMem=$_POST["UTC_Mem"];

   $caoInt=$_POST["CAO_Int"];
   $caoMem=$_POST["CAO_Mem"];

   $cocInt=$_POST["COC_Int"];
   $cocMem=$_POST["COC_Mem"];

   $fecInt=$_POST["FEC_Int"];
   $fecMem=$_POST["FEC_Mem"];

   $fsInt=$_POST["FS_Int"];
   $fsMem=$_POST["FS_Mem"];

   $iacInt=$_POST["IAC_Int"];
   $iacMem=$_POST["IAC_Mem"];

   $faculty = $_SESSION["faculty_member"];
   $kemail = $faculty['kemail'];
   $date = date("D M j Y");

   //If faculty is submitting for first time and is not updating
   if(empty($_REQUEST['kemail']) && empty($_REQUEST['act']))
   {

   		try {

    		$db_obj->autocommit(False); // i.e., start transaction

    		//Create Faculty Member
    		$query="INSERT INTO `faculty` (`row`, `last_name`, `first_name`, `middle_init`, `email`, `kemail`, `phone`, `rank`, `status`, `years`, `campus`, `college`, `dept`, `year_recorded`, `record_date`, `activationkey`) VALUES (NULL, '".$faculty['last_name']."', '".$faculty['first_name']."', '".$faculty['middle_init']."', '".$faculty['email']."', '".$faculty['kemail']."', '".$faculty['phone']."', '".$faculty['rank']."', '".$faculty['status']."', '".$faculty['years']."', '".$faculty['campus']."', '".$faculty['college']."', '".$faculty['dept']."', '".$faculty['year_recorded']."', '".$faculty['record_date']."', '".$faculty['activationkey']."')";
			$db_obj->query($query);

			//Create all the comm entries

			$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'EPC', '".$epcInt."', '".$epcMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'FPDC', '".$fpdcInt."', '".$fpdcMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'UTC', '".$utcInt."', '".$utcMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'CAO', '".$caoInt."', '".$caoMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'COC', '".$cocInt."', '".$epcMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'FEC', '".$fecInt."', '".$fecMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'FS', '".$fsInt."', '".$fsMem."', '".$date."')";
    		$db_obj->query($query);

    		$query="INSERT INTO `com` (`row`, `keamil`, `comm`, `level`, `memb`, `ent_date`) VALUES (NULL, '".$kemail."', 'IAC', '".$iacInt."', '".$iacMem."', '".$date."')";
    		$db_obj->query($query);

   
    		$db_obj->commit();
    		$db_obj->autocommit(True); // i.e., end transaction
		}
		catch ( Exception $e ) {
   			 // before rolling back the transaction, you'd want
   			 // to make sure that the exception was db-related
   		 	$db_obj->rollback(); 
   		 	$db_obj->autocommit(True); // i.e., end transaction   
		}
	}


   require_once("rfront.php");
   require_once("p4.php");

}
require_once("rback.php"); 
?>












