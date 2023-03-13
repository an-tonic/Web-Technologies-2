<!DOCTYPE html>
<html lang="en" >
<head>

    <title>Union Shop</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="style.css">

    <script src="scripts.js"></script>

</head>

<body>

<?php
include "nav.inc.php";
?>

<main>
    <form class="userForm" action="login.php">
        <label class="userFormContent"    for="loginForm">
            <div>Username: <input type="text" required></div>
            <br>
            <div>Password: <input type="password" required></div>
            <br>
            <input type="submit">
        </label>
    </form>
</main>


<?php
include "footer.inc.php";
?>

</body>



