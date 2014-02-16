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
			<h2>Welcome to my recipe site</h2>
			<img src="images/Ramenbowl1.jpg" alt="Bowl of Ramen" height="367px" width="500px">
			<p>Here I will show you some of my favorite recipes that I have tried over the years.</p>
			<p>I have plans to add pictures and amounts for these recipes but I will have to wait till I get a camera  and the next time I cook them.</p>

		</div>
		<?php @include_once("contactme.php");
	</div>
</div>
	
	
</body>
</html>