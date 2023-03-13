<!DOCTYPE html>
<head>

</head>

<body style='background-color: <?php echo $_POST["color"];?>'>
	<h1>Page 2</h1>
	<p>This is my page.</p>
	<p>Hello, <?php echo $_POST["username"];?></p>
	
	<?php 
	
		if ($_POST["password"] == "password"){
			echo "<p>Your password is weak</p>";
		}
	
	?>
</body>
