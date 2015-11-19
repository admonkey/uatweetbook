<?php
	$site_title = "Platypus Products, Inc.";

	// declare database variables
	$db_server = "localhost";
	$db_user = "uoasa05";
	$db_pass = "userpass";
	$db_database = "uoasa05";
	
	// connection to MySQL database
	$db_handle = mysql_connect($db_server, $db_user, $db_pass)
	  or die("Unable to connect to MySQL");

	// select a database to work with
	$selected = mysql_select_db($db_database,$db_handle)
	  or die("Could not select database");
?>
