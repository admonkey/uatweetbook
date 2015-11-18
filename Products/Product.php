<?php
	$pageTitle = "Product";
	if( is_numeric($_GET["product_id"]) && $_GET["product_id"] > 0 )
	  $pageTitle .= " " . $_GET["product_id"];
	require_once('../resources/header.php');
?>

<h1><?php echo $pageTitle;?> Description</h1>

<div class="well">



</div><!-- /.well-->

<?php require_once('../resources/footer.php');?>
