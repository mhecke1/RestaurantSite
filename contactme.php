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
			<form method="POST" action="thankyou.php">
   				     <fieldset>
   				     <legend>Contact Form</legend>

   				 <label for="name">Name:</label> 
   				 <input type="text" id="name" name="name" required="required" placeholder="name" tabindex="1"> <br>

   				 <label for="email">Email:</label>
   				 <input type="email" id="email" name="email" required="required" placeholder="email" tabindex="3"> <br>

   				 <label for="number">Phone:</label> 
   				 <input type="tel" id="number" name="number" required="required" placeholder="Phone Number" tabindex="4"> <br>
   				<br>


   				 


   				 <label for="comment">Message:</label> 
   				 <textarea id="comment" name="comment" cols="20" rows="2" tabindex="6"></textarea>

   				 <input type="submit" value="submit" id="submit" name="submit">


   				 </fieldset>
   			</form>
		</div>
		</div>
		<?php @include_once("contactme.php");
	</div>
	</div>
</div>
	
	
</body>
</html>