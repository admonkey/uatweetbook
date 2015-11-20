<?php
	$pageTitle = "About Us";
	require_once('../resources/header.php');
?>

<h1><?php echo $pageTitle;?></h1>

<div class="well">

<p><?=$site_title?> was founded in 2015 by Jeff Puckett, inspired by the musings of Andrew Mackey.</p>

<p><?=$site_title?> was created to raise awareness about platypi and platypus needs. 
This in turn led to selling promotional products to help support the cause.
Every one of your purchases goes directly to supporting <?=$site_title?></p>

<p>Please <a href='../Products/'>buy something</a>, or <a href='contact.php'>contact us</a> to find out how you can help!</p>

</div><!-- /.well-->

<?php require_once('../resources/footer.php');?>
