<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
		session_start();
		
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>

  <link rel="stylesheet" href="stylesheets/about.css ">
		<?php include 'dbLogin.php' ?>
		<script src="validationClient.js"></script>
</head>

<body>
<div class="header">
	<label class="title">Safe Haven Our Women</label>
 		<li><a href="/login.php">Login / Register</a></li>
		<li><a href="/About.php">About Us</a></li>
		<li><a href="/Contact.php">Contact Us</a></li>
		<li><a href="/index.php">Home</a></li>
	</ul> 
</div>
	
	<div class="loginform">
		<center><h1></h1></center>
	<h1>About</h1>
	<h2>Safe Haven Our Women</h2>
	<img src="images/aboutImage.gif"></img>
</body>
<div class = "content">
	<p>Thank you!<br /><br /> Your details are being updated. We'll send you back to the page soon.</p>
	<?php
	header( "refresh:5;url=SafeHouseDetails.php" );
	?>
</div>
</div>

<footer>
	
</footer>

</html>
