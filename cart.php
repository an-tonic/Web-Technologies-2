<!DOCTYPE html>
<html lang="en">
<head>

    <title>Union Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" ></script>

</head>
<body onload="displayItemsInCart()">

    <?php
	include "nav.inc.php";
	?>

    <main>
        <h1>Shopping cart</h1>

        <p>The items you have added to your shopping cart are: </p>

        <div id="empty_cart">
            <a onclick="clearCart()" href=""><img src="coursework/assignment_1_resources/bin.png" alt="Bin image"></a>
        </div>

        <div class="cart_items" id="products">
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>         </th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>

                </thead>
                <tbody id="table_body">
                </tbody>
            </table>


        </div>

        <div id="purchase_button">
            Purchase for <span id="purchase_price"></span> $
        </div>

    </main>

	<?php
	include "footer.inc.php";
	?>


</body>
</html>