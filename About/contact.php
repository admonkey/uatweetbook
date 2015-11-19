<?php

$pageTitle = "Contact Us";
require_once('../resources/header.php');

echo "
	<h1>$pageTitle</h1>
";

if(isset($_POST[contact_form]))
	echo "Thank you for your interest!";
else
	include("contact.form.html");

require_once('../resources/footer.php');

?>