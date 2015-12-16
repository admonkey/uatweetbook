<?php

include_once('_resources/credentials.inc.php');
$no_well_container = true;
// $page_title = "Home Page";
// $section_title = "Root Section";
require_once('_resources/header.inc.php');

echo "<h1>Welcome to $site_title</h1>";

?>
  
<div class='well'>
 <p>This is a class project for ISYS 5453 - INTRO ENTERPRISE SERVERS with Andrew Mackey 
   in the <a href='http://walton.uark.edu/' target='_blank'>Sam M. Walton College of Business</a>
   at the <a href='http://uark.edu/' target='_blank'>University of Arkansas</a> in Fayetteville, Arkansas.</p>
 <p>Team Members are Jeff Puckett & Ryan Gordy.</p>
 <p>The project instructions can be found <a href='instructions.pdf' target='_blank'>here</a>.</p>
 <p>The source code for this project can be found on <a href='https://github.com/admonkey/uatweetbook/' target='_blank'>Github</a>,
   which includes the project <a href='https://github.com/admonkey/uatweetbook/wiki' target='_blank'>wiki</a>.</p>
</div><!-- /.well -->

<div class='well' style='background-color:#dff0d8'>
	<p>This website is fully encrypted over a TLS 1.2 (SSL) connection using AES GCM 128-bit block cipher with SHA 256-bit key size and using ECDHE_RSA as the key exchange mechanism.</p>
	<p>The certificate is signed by <a href='https://letsencrypt.org/' target='_blank'>Let's Encrypt</a> Authority X1 for <strong class='text-success'>FREE</strong>, whose root certificate authority is cross signed by IdenTrust's DST Root CA X3 making it <u>trusted in all major browsers</u>.</p>
	<p>Further, their <a href='https://github.com/letsencrypt/letsencrypt' target='_blank'>open source project</a> designed for automating the certificate signing process and server installation is currently in public beta.</p>
</div><!-- /.well -->


<?php require_once('_resources/footer.inc.php'); ?>

