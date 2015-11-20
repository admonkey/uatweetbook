<?php

$pageTitle = "Platypus Products";
require_once('../resources/header.php');

echo "
<h1>$pageTitle</h1>

<div class='table-responsive well'>
  <table>
    <thead>
      <tr>
	<th>Name</th>
	<th>Description</th>
	<th>Price</th>
      </tr>
    </thead>
    <tbody>
";

$sql = "
  SELECT product_id, product_name, product_desc, product_price, product_inventory
  FROM Products
  ORDER BY product_featured_value DESC;
";

$result = mysql_query($sql) or die(mysql_error());

while( $row = mysql_fetch_assoc($result) )
  echo "<tr><td><a href='Product.php?product_id=$row[product_id]'>$row[product_name]</a></td><td>$row[product_desc]</td><td>\$$row[product_price]</td></tr>";

echo "
    </tbody>
  </table>
</div><!-- /.well-->
";

?>

<script>
$(document).ready(function() 
    { 
	$("table").addClass("table table-hover table-striped table-bordered table-condensed tablesorter").tablesorter();
    } 
);

<!-- hyperlink row record record from id in first column-->
$('tr').click( function() {
    window.location = $(this).find('a').attr('href');
}).hover( function() {
    $(this).toggleClass('hover');
});
</script>

<style>
tr.hover {
   cursor: pointer;
}
</style>

<?php require_once('../resources/footer.php');?>
