<?php

$pageTitle = "Contact Us";
require_once('../resources/header.php');

echo "
	<h1>$pageTitle</h1>
";

include("contact.form.html");

require_once('../resources/footer.php');

?>