<?php

include_once('_resources/credentials.php');
$no_well_container = true;
// $page_title = "Home Page";
// $section_title = "Root Section";
require_once('_resources/header.php');

echo "
  <h1>Welcome to $site_title</h1>
  <div class='well'>
    <p>Here is a small change to test merging.</p>
    <p>Here's another change for further testing.</p>
	<p>Here's another test from Ryan.</p>
  </div><!-- /.well -->
";

require_once('_resources/footer.php');

?>
