<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php
		session_start();
		
	?>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.OurWomen</title>

  <link rel="stylesheet" href="stylesheets/templatetest.css ">
    <link rel="stylesheet" href="stylesheets/indextest.css ">
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
	
</body>
<div class = "loginform">
	<p>Thank you!<br /><br /> Your details are being updated. We'll send you back to the page soon.</p>
	<?php
	header( "refresh:1;url=SafeHouseDetails.php" );
	?>
</div>
</div>

<footer>
<br />
<table class="footertable">
	<tr>
		<td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			User Registration<br />
			Safe Haven Registration
		</td>
		<td class="darkertext">
			<br />About Us<br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br />Contact Us<br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>


</html>
