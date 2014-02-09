<!DOCTYPE html>
<html>
<head>
	<title>Matt's recipe site</title>
	<meta charset="UTF-8">
	<?php @include_once("fonts.php"); ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<h1>Matt's Recipe Site</h1>
	</div>
	<?php
		@include_once("navbar.php");
	?>
	
	<div id="main">
		<div id="content">
			<h2>Thanks for contacting me!</h2>
			<?php
				$fName = $_POST['name'];
				echo "<p>Thanks $fName I should be back to you shortly.</p>";
			 ?>


		</div>
		<div id="footer">
			<p>Copyright Matthew Hecker | matthw@gmail.com</p>

		</div>
	</div>
</div>
	
	
</body>
</html>