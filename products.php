<!DOCTYPE html>
<html lang="en" >
<head>

    <title>Union Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">
    
    <script src="scripts.js"></script>

</head>

<body onload=doChecks()>

    <?php
	include "nav.inc.php";
	?>



    <main>
        <p>
            Products >
            <a href="#hoodie">Hoodies</a>
            <a href="#jumper">Jumpers</a>
            <a href="#tshirt">T-shirts</a>
        </p>

        <br>

        <div id="products">
		
		<?php
		
		$items = array();
		$connection = mysqli_connect("vesta.uclan.ac.uk", "aserdyukov", "UqTBLppv", "aserdyukov");
		
		 if (mysqli_connect_errno())
		 {
			 echo "ERROR: could not connect to database: " . mysqli_connect_error();
		  }
		 else
		 {
			 echo "";
		}
		
		$myQuery = "SELECT product_type, product_title, product_desc, product_price, product_image FROM tbl_products";
		$result = mysqli_query($connection, $myQuery);
		$counter = 1;

	   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
		
		$string = $row['product_type']. ",". $row['product_title']."," .$row['product_desc'] ."," .$row['product_price']. "," .$row['product_image'];
		
		
		
		echo '<div class=\'item\' alt=\'\'><a href=\'item.html\' onclick=\'loadItem()\'>' .
			 '                    <img class=\'item_img\' src=\'coursework/assignment_1_resources/'. $row["product_image"] . '\'>' .
			 '                 </a>' .
			 '                 <div class=\'item_details\'>' .
		 	 '                     <h1 class=\'item_name\'>'. $row["product_title"] . '</h1>' .
		 	 '                     <span class=\'item_description\'>'. $row["product_desc"] . '</span>' .
			 '                     <button class=\'item_buy_button\' id=\'itemID' . $counter . '\' onclick="addToCart(\'itemID' . $counter . '\',\'' . $string . '\')">Add to cart</button>' .
			 '                     <span class=\'item_price\'>' . $row["product_price"] . '</span>' .
			 '                </div></div>';
		
		
		$counter++;
		}
		
		
		
		?>
		
        </div>


        <a href="#" class="to-top">^</a>

    </main>


    <?php
	include "footer.inc.php";
	?>


</body>
</html>