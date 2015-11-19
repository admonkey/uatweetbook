<?php

$sql = "
	INSERT INTO Contacts (first_name, last_name, address, city, state, zip)
	VALUES (
		'" . mysql_real_escape_string($_POST["first_name"]) . "',
		'" . mysql_real_escape_string($_POST["last_name"]) . "',
		'" . mysql_real_escape_string($_POST["address"]) . "',
		'" . mysql_real_escape_string($_POST["city"]) . "',
		'" . mysql_real_escape_string($_POST["state"]) . "',
		'" . mysql_real_escape_string($_POST["zip"]) . "'
	);
";
$result = mysql_query($sql) or die('Invalid query: ' . mysql_error());

echo "Thank you for your interest!";

?>