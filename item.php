<!DOCTYPE html>
<html lang="en">
<head>

    <title>Union Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="scripts.js" defer></script>

</head>
<body onload="itemToHtml(sessionStorage.getItem('item').split(','), sessionStorage.getItem('ID'))">

	<?php
	include "nav.inc.php";
	?>

    <main>

        <div class="single_item" id="products">



        </div>


    </main>

    <?php
	include "footer.inc.php";
	?>


</body>
</html>