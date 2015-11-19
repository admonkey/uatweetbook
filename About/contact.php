<?php
	$pageTitle = "Contact Us";
	require_once('../resources/header.php');
?>

<h1><?php echo $pageTitle;?></h1>

<div class="well">

	<form id="form1" role="form">
	
		  <div class="form-group">
			<label for="first_name">First Name:</label>
			<input type="text" class="form-control" id="first_name" name="first_name" required></input>
		  </div>
		  
		  <div class="form-group">
			<label for="last_name">Last Name:</label>
			<input type="text" class="form-control" id="last_name" name="last_name" required></input>
		  </div>
		  
		  <div class="form-group">
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="address" name="address" required></input>
		  </div>
		  
		  <div class="form-group">
			<label for="city">City:</label>
			<input type="text" class="form-control" id="city" name="city" required></input>
		  </div>
		  
		  <div class="form-group">
			<label for="state">State:</label>
			<input type="text" class="form-control" id="state" name="state" required></input>
		  </div>
		  
		  <div class="form-group">
			<label for="zip">Zip:</label>
			<input type="text" class="form-control" id="zip" name="zip" required></input>
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
	
	</form>

</div><!-- /.well-->

<script>
	$(function() {
		// autocomplete states
		var states = [
			"Alabama",
			"Alaska",
			"Arizona",
			"Arkansas",
			"California",
			"Colorado",
			"Connecticut",
			"Delaware",
			"Florida",
			"Georgia",
			"Hawaii",
			"Idaho",
			"Illinois",
			"Indiana",
			"Iowa",
			"Kansas",
			"Kentucky",
			"Louisiana",
			"Maine",
			"Maryland",
			"Massachusetts",
			"Michigan",
			"Minnesota",
			"Mississippi",
			"Missouri",
			"Montana",
			"Nebraska",
			"Nevada",
			"New Hampshire",
			"New Jersey",
			"New Mexico",
			"New York",
			"North Carolina",
			"North Dakota",
			"Ohio",
			"Oklahoma",
			"Oregon",
			"Pennsylvania",
			"Rhode Island",
			"South Carolina",
			"South Dakota",
			"Tennessee",
			"Texas",
			"Utah",
			"Vermont",
			"Virginia",
			"Washington",
			"West Virginia",
			"Wisconsin",
			"Wyoming"
		];
		$( "#state" ).autocomplete({
		  source: states
		});
	});
</script>

<?php require_once('../resources/footer.php');?>
