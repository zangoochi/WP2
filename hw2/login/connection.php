<?php 

/*  SETTING UP DATABASE:*/
	$user="zmontgom";
	$pass="C45Zgbvp";
	$dbname="zmontgom";
	$host = "webdev.cs.kent.edu"; // db host
	$phphost=trim(‘hostname‘); // host running script
	if ( $phphost == $host )
	{ $host="localhost"; }

	$db_obj = new mysqli($host,$user, $pass,$dbname);
	if (mysqli_connect_errno())
	{printf("Can’t connect to $host $dbname. Errorcode: %s\n",
	mysqli_connect_error()); exit; }

?>