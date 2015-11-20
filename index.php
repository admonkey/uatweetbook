<?php
	//$pageTitle = "Home Page";
	require_once('resources/header.php');
?>

<h1>Welcome to <?=$site_title?></h1>

<div class='row'>

  <div class='col-md-6'>
    <div class='well'>
      <h3>Featured Product</h3>
      <div id='featured_product' class='well' style='background-color: white'>
<?php
$sql = "
  SELECT product_id, product_name, product_desc, product_price
  FROM Products
  WHERE product_inventory > 0
  ORDER BY product_featured_value DESC 
  LIMIT 1;
";

$result = mysql_query($sql) or die(mysql_error());

$row = mysql_fetch_assoc($result);

echo "
  <h4><a href='Products/Product.php?product_id=$product_id'>$row[product_name]</a></h4>
  <p class='lead'>$row[product_desc]</p>
";

?>
      </div><!-- /#featured_product.well -->
    </div><!-- /.well -->
  </div><!-- /.col-md-6 -->
  
  <div class='col-md-6'>

    <p>Learn more <a href='About/'>about <?=$site_title?></a></p>

    <p><small>Can't find what you're looking for? <a href='About/contact.php'>Contact Us</a>.</small></p>

  </div><!-- /.col-md-6 -->

</div><!-- /.row -->

<div class='row'>

  <div class='col-md-6'>

      <p class='lead'>Please check out all of our <a href='Products/'>products</a>!</p>

  </div><!-- /.col-md-6 -->


</div><!-- /.row -->



<?php require_once('resources/footer.php');?>
