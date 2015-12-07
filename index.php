<?php

include_once('_resources/credentials.php');
$no_well_container = true;
// $page_title = "Home Page";
// $section_title = "Root Section";
require_once('_resources/header.php');

echo "
  <h1>Welcome to $site_title</h1>
  <div class='well'>
    <p>This is a class project for ISYS 5453 - INTRO ENTERPRISE SERVERS with Andrew Mackey 
      in the <a href='http://walton.uark.edu/' target='_blank'>Sam M. Walton College of Business</a>
      at the <a href='http://uark.edu/' target='_blank'>University of Arkansas</a> in Fayetteville, Arkansas.</p>
    <p>Team Members are Jeff Puckett & Ryan Gordy.</p>
    <p>The project instructions can be found <a href='instructions.pdf' target='_blank'>here</a>.</p>
    <p>The source code for this project can be found on <a href='https://github.com/admonkey/uatweetbook/' target='_blank'>Github</a>,
      which includes the project <a href='https://github.com/admonkey/uatweetbook/wiki' target='_blank'>wiki</a>.</p>
    
  </div><!-- /.well -->
";

require_once('_resources/footer.php');

?>
