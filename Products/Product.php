<?php

if( is_numeric($_GET["product_id"]) && $_GET["product_id"] > 0 )
  $product_id = $_GET["product_id"];
else
  header("Location: index.php");

require_once('../resources/header.php');

$sql = "
  SELECT product_name, product_desc, product_price, product_inventory, product_featured_value
  FROM Products
  WHERE product_id = $product_id;
";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_assoc($result);  

$sql = "
  SELECT photo_filename
  FROM Product_Photos
  WHERE product_id = $product_id
  LIMIT 1;
";
$result = mysql_query($sql) or die(mysql_error());
$photo = mysql_result($result,0); 

echo "

  <h1>$row[product_name]</h1>
  
  <div class='well'>
  
    <img alt='picture of a platypus' src='images/$photo' class='img-responsive'></img>
  
    <p>$row[product_desc]</p>
";

if ( $row[product_inventory] < 1 ) {
  echo "
    <a id='add_to_cart' href='#' class='btn btn-danger' disabled='true'>
      \$$row[product_price] - Sold Out
    </a>
  ";
} else {
  echo "
    <a id='add_to_cart' href='#' class='btn btn-success'>
      \$$row[product_price] - Add to Cart
    </a>
  ";
}



echo "
  
  </div><!-- /.well-->

";

require_once('../resources/footer.php');

?>