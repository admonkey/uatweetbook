<?php

$number_of_featured_items = 3;

$sql = "
  SELECT product_id, product_name
  FROM Products
  ORDER BY product_featured_value DESC 
  LIMIT $number_of_featured_items;
";

$result = mysql_query($sql) or die(mysql_error());

while ($row = mysql_fetch_assoc($result)) {

  echo "
    <li><a href='Product.php?product_id=$row[product_id]'>$row[product_name]</a></li>
  ";
  
}

?>

