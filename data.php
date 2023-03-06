

<?php
	$items = array();
	$connection = mysqli_connect("vesta.uclan.ac.uk", "aserdyukov", "UqTBLppv", "aserdyukov");
	
	// if (mysqli_connect_errno())
	// {
		// echo "ERROR: could not connect to database: " . mysqli_connect_error();
	 // }
	// else
	// {
		// echo "Connected to database.";
	// }
	
	$myQuery = "SELECT product_type, product_title, product_desc, product_price, product_image FROM tbl_products";
	$result = mysqli_query($connection, $myQuery);
	

   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
	array_push($items, json_encode($row));
	}
	
	$items = implode(",", $items);
	
	?>
	