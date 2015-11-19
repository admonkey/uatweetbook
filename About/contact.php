<?php

$pageTitle = "Contact Us";
require_once('../resources/header.php');

echo "
	<h1>$pageTitle</h1>
";

if(isset($_POST[contact_form]))
	include("contact.submit.php");
else
	include("contact.form.html");

require_once('../resources/footer.php');

?>